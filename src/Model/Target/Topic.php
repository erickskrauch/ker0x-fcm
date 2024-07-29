<?php

declare(strict_types=1);

namespace Kerox\Fcm\Model\Target;

final class Topic implements \Stringable
{
    public function __construct(private readonly string $topic)
    {
    }

    public function __toString(): string
    {
        return $this->topic;
    }
}
