<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Notifier\Transport;

use Symfony\Component\Notifier\Message\MessageInterface;

/**
 * Uses several Transports using a failover algorithm.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class FailoverTransport extends RoundRobinTransport
{
    private $currentTransport = null;

    protected function getNextTransport(MessageInterface $message): ?TransportInterface
    {
        if (null === $this->currentTransport || $this->isTransportDead($this->currentTransport)) {
            $this->currentTransport = parent::getNextTransport($message);
        }

        return $this->currentTransport;
    }

    protected function getInitialCursor(): int
    {
        return 0;
    }

    protected function getNameSymbol(): string
    {
        return '||';
    }
}
