#!/usr/bin/env php
<?php

$manifestJsonPath = __DIR__.'/../public/manifest.json';
if (!file_exists($manifestJsonPath)) {
    return 0;
}

fixManifestJsonRtlEntries($manifestJsonPath);
fixManifestJsonEntriesPaths($manifestJsonPath);
fixFontPathsInCssFiles($manifestJsonPath);

// Webpack Encore doesn't support RTL variants of assets
// See https://github.com/symfony/webpack-encore/issues/1109
//
// If the asset defines an RTL entry, the manifest.json file wrongly points only to it:
//   'app.css' => '/bundles/easyadmin/app.1e1ba55d.rtl.css'
//
// We need to add both RTL and non-RTL variants for the asset:
//   'app.css' => '/bundles/easyadmin/app.1e1ba55d.css'
//   'app.rtl.css' => '/bundles/easyadmin/app.1e1ba55d.rtl.css'
//
// This function fixes the 'manifest.json' contents generated by Webpack Encore
// when assets contain RTL variants.
function fixManifestJsonRtlEntries(string $manifestJsonPath)
{
    $manifestJsonContents = json_decode(file_get_contents($manifestJsonPath), associative: true, flags: \JSON_THROW_ON_ERROR);
    $fixedManifestJsonContents = [];
    foreach ($manifestJsonContents as $assetName => $assetPath) {
        // only the assets that include '.rtl.' extensions in their paths are wrong; ignore the rest
        if (!str_contains($assetPath, '.rtl.')) {
            $fixedManifestJsonContents[$assetName] = $assetPath;

            continue;
        }

        // this happens when running the command several times on the same manifest.json file
        if (str_contains($assetName, '.rtl.')) {
            $fixedManifestJsonContents[$assetName] = $assetPath;

            continue;
        }

        $nonRtlAssetName = $assetName;
        $nonRtlAssetPath = str_replace('.rtl.', '.', $assetPath);
        $rtlAssetName = str_replace(['.css', '.js'], ['.rtl.css', '.rtl.js'], $assetName);
        $rtlAssetPath = $assetPath;

        $fixedManifestJsonContents[$nonRtlAssetName] = $nonRtlAssetPath;
        $fixedManifestJsonContents[$rtlAssetName] = $rtlAssetPath;
    }

    $newJsonManifestContents = json_encode($fixedManifestJsonContents, flags: \JSON_PRETTY_PRINT | \JSON_UNESCAPED_SLASHES);
    // the original manifest.json file uses a 2 white space indentation, so keep that
    $newJsonManifestContents = str_replace('    ', '  ', $newJsonManifestContents);
    file_put_contents($manifestJsonPath, $newJsonManifestContents);
}

// We use a named Symfony Asset package (see src/Asset/AssetPackage) to manage
// the versioned assets of this project. In order to allow using EasyAdmin in
// applications served in subdirectories (e.g. example.com/foo/admin) we use a
// PathPackage to generate the right URLs for assets.
// This means that asset paths in 'manifest.json' should not contain any path:
//   'app.css' => 'app.1e1ba55d.css'
//
// Sadly, even is setPublicPath() in our webpack.config.js is empty, the generated
// 'manifest.json' adds leading slashes in all paths, which breaks PathPackage:
//   'app.css' => '/app.1e1ba55d.css'
//
// This function removes that leading slash from all asset paths.
function fixManifestJsonEntriesPaths(string $manifestJsonPath)
{
    $manifestJsonContents = json_decode(file_get_contents($manifestJsonPath), associative: true, flags: \JSON_THROW_ON_ERROR);
    $fixedManifestJsonContents = [];
    foreach ($manifestJsonContents as $assetName => $assetPath) {
        $assetPath = ltrim($assetPath, '/');
        $fixedManifestJsonContents[$assetName] = $assetPath;
    }

    $newJsonManifestContents = json_encode($fixedManifestJsonContents, flags: \JSON_PRETTY_PRINT | \JSON_UNESCAPED_SLASHES);
    // the original manifest.json file uses a 2 white space indentation, so keep that
    $newJsonManifestContents = str_replace('    ', '  ', $newJsonManifestContents);
    file_put_contents($manifestJsonPath, $newJsonManifestContents);
}

// In the generated CSS files, there are styles like this:
// @font-face{font-family:FontAwesome;src:url(bundles/easyadmin/fonts/fa-v4compatibility.afac8956.woff2) format("woff2")
// This doesn't work when serving the Symfony application in a subdirectory.
// We need something like this instead:
// @font-face{font-family:FontAwesome;src:url(fonts/fa-v4compatibility.afac8956.woff2) format("woff2")
// There might be some way of doing this in Webpack Encore, but I can't find it, so let's be pragmatic.
function fixFontPathsInCssFiles(string $manifestJsonPath)
{
    $manifestJsonContents = json_decode(file_get_contents($manifestJsonPath), associative: true, flags: \JSON_THROW_ON_ERROR);
    foreach ($manifestJsonContents as $assetName => $assetPath) {
        if (!str_ends_with($assetPath, '.css')) {
            continue;
        }

        $assetFilePath = __DIR__.'/../public/'.str_replace('bundles/easyadmin/', '', $assetPath);
        $originalFileContents = file_get_contents($assetFilePath);
        $fixedFileContents = str_replace('url(/fonts/', 'url(fonts/', $originalFileContents);

        file_put_contents($assetFilePath, $fixedFileContents);
    }
}
