<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Form;

class CallbackTransformer implements DataTransformerInterface
{
    private \Closure $transform;
    private \Closure $reverseTransform;

    public function __construct(callable $transform, callable $reverseTransform)
    {
        $this->transform = $transform instanceof \Closure ? $transform : \Closure::fromCallable($transform);
        $this->reverseTransform = $reverseTransform instanceof \Closure ? $reverseTransform : \Closure::fromCallable($reverseTransform);
    }

    /**
     * {@inheritdoc}
     */
    public function transform(mixed $data): mixed
    {
        return ($this->transform)($data);
    }

    /**
     * {@inheritdoc}
     */
    public function reverseTransform(mixed $data): mixed
    {
        return ($this->reverseTransform)($data);
    }
}
