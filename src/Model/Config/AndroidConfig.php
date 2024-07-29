<?php

declare(strict_types=1);

namespace Kerox\Fcm\Model\Config;

use Kerox\Fcm\Enum\AndroidMessagePriority;
use Kerox\Fcm\Model\Notification\AndroidNotification;
use Kerox\Fcm\Model\Option\AndroidFcmOptions;

/**
 * @see https://firebase.google.com/docs/reference/fcm/rest/v1/projects.messages#androidconfig
 */
final class AndroidConfig
{
    /**
     * @param array<string, string> $data
     */
    public function __construct(
        public readonly ?string $collapseKey = null,
        public readonly ?AndroidMessagePriority $priority = null,
        public readonly ?string $ttl = null,
        public readonly ?string $restrictedPackageName = null,
        public readonly array $data = [],
        public readonly ?AndroidNotification $notification = null,
        public readonly ?AndroidFcmOptions $fcmOptions = null,
        public readonly bool $directBootOk = false,
    ) {
    }
}
