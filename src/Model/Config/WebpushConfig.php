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
     * @param array<string, string> $headers
     * @param array<string, string> $data
     */
    public function __construct(
        public readonly array $headers = [],
        public readonly array $data = [],
        public readonly ?WebpushNotification $notification = null,
        public readonly ?WebpushFcmOptions $fcmOptions = null,
    ) {
    }
}
