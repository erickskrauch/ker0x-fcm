<?php

declare(strict_types=1);

namespace Kerox\Fcm\Model\Notification;

/**
 * @see https://firebase.google.com/docs/reference/fcm/rest/v1/projects.messages#notification
 */
final class Notification
{
    public function __construct(
        public readonly string $title,
        public readonly ?string $body = null,
        public readonly ?string $image = null,
    ) {
    }
}
