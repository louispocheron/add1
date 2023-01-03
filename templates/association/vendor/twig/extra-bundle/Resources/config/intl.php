<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use Twig\Extra\Intl\IntlExtension;

return static function (ContainerConfigurator $container) {
    $container->services()
        ->set('twig.extension.intl', IntlExtension::class)
            ->tag('twig.extension')
    ;
};
