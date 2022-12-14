<?php

/*
 * This file is part of the Doctrine Behavioral Extensions package.
 * (c) Gediminas Morkevicius <gediminas.morkevicius@gmail.com> http://www.gediminasm.org
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gedmo\SoftDeleteable\Mapping\Driver;

use Gedmo\Mapping\Annotation\SoftDeleteable;
use Gedmo\Mapping\Driver\AttributeDriverInterface;

/**
 * This is an attribute mapping driver for SoftDeleteable
 * behavioral extension. Used for extraction of extended
 * metadata from attributes specifically for SoftDeleteable
 * extension.
 *
 * @internal
 */
final class Attribute extends Annotation implements AttributeDriverInterface
{
}
