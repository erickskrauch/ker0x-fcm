<?php

declare(strict_types=1);

namespace Kerox\Fcm\Model\Notification\ApnsNotification;

/**
 * @see https://developer.apple.com/documentation/usernotifications/setting_up_a_remote_notification_server/generating_a_remote_notification#2990112
 */
final class Sound
{
    final public const DEFAULT_NAME = 'default';

    public function __construct(
        public readonly int $critical = 0,
        public readonly string $name = self::DEFAULT_NAME,
        public readonly float $volume = 0.0,
    ) {
    }
}
