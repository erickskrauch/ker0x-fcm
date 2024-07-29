<?php

declare(strict_types=1);

namespace Kerox\Fcm\Model\Notification\AndroidNotification;

/**
 * @see https://firebase.google.com/docs/reference/fcm/rest/v1/projects.messages#Color
 */
final class Color
{
    public function __construct(
        public readonly float $red,
        public readonly float $green,
        public readonly float $blue,
        public readonly float $alpha
    ) {
    }
}
