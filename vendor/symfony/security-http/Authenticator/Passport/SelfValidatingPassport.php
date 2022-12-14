<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Security\Http\Authenticator\Passport;

use Symfony\Component\Security\Http\Authenticator\Passport\Badge\BadgeInterface;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;

/**
 * An implementation used when there are no credentials to be checked (e.g.
 * API token authentication).
 *
 * @author Wouter de Jong <wouter@wouterj.nl>
 */
class SelfValidatingPassport extends Passport
{
    /**
     * @param BadgeInterface[] $badges
     */
    public function __construct(UserBadge $userBadge, array $badges = [])
    {
        $this->addBadge($userBadge);
        foreach ($badges as $badge) {
            $this->addBadge($badge);
        }
    }
}
