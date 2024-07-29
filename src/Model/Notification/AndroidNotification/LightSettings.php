<?php

declare(strict_types=1);

namespace Kerox\Fcm\Model\Notification\AndroidNotification;

/**
 * @see https://firebase.google.com/docs/reference/fcm/rest/v1/projects.messages#lightsettings
 */
final  class LightSettings
{
    public function __construct(
        public readonly Color $color,
        public readonly string $lightOnDuration,
        public readonly string $lightOffDuration
    ) {
    }
}
