<?php

declare(strict_types=1);

namespace Kerox\Fcm\Model\Config;

use Kerox\Fcm\Model\Notification\WebpushNotification;
use Kerox\Fcm\Model\Option\WebpushFcmOptions;

/**
 * @see https://firebase.google.com/docs/reference/fcm/rest/v1/projects.messages#webpushconfig
 */
final class WebpushConfig
{
    /**
     * @param array<string, string>|null $headers
     * @param array<string, mixed>|null $data
     */
    public function __construct(
        public readonly ?array $headers = null,
        public readonly ?array $data = null,
        public readonly ?WebpushNotification $notification = null,
        public readonly ?WebpushFcmOptions $fcmOptions = null,
    ) {
    }
}
