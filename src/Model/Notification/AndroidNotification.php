<?php

declare(strict_types=1);

namespace Kerox\Fcm\Model\Notification;

use Kerox\Fcm\Enum\NotificationPriority;
use Kerox\Fcm\Enum\Visibility;
use Kerox\Fcm\Model\Notification\AndroidNotification\LightSettings;

/**
 * @see https://firebase.google.com/docs/reference/fcm/rest/v1/projects.messages#androidnotification
 */
final class AndroidNotification
{
    /**
     * @param string[] $titleLocArgs
     * @param string[] $bodyLocArgs
     * @param string[] $vibrateTimings
     */
    public function __construct(
        public readonly ?string $title = null,
        public readonly ?string $body = null,
        public readonly ?string $icon = null,
        public readonly ?string $color = null,
        public readonly ?string $sound = null,
        public readonly ?string $tag = null,
        public readonly ?string $clickAction = null,
        public readonly ?string $titleLocKey = null,
        public readonly array $titleLocArgs = [],
        public readonly ?string $bodyLocKey = null,
        public readonly array $bodyLocArgs = [],
        public readonly ?string $channelId = null,
        public readonly ?string $ticker = null,
        public readonly bool $sticky = false,
        public readonly ?string $eventTime = null,
        public readonly bool $localOnly = false,
        public readonly ?NotificationPriority $notificationPriority = null,
        public readonly bool $defaultSound = false,
        public readonly bool $defaultVibrateTimings = false,
        public readonly bool $defaultLightSettings = false,
        public readonly array $vibrateTimings = [],
        public readonly ?Visibility $visibility = null,
        public readonly int $notificationCount = 0,
        public readonly ?LightSettings $lightSettings = null,
        public readonly ?string $image = null,
    ) {
    }
}
