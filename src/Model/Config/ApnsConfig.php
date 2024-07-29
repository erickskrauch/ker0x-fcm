<?php

declare(strict_types=1);

namespace Kerox\Fcm\Model\Config;

use Kerox\Fcm\Model\Notification\ApnsNotification;
use Kerox\Fcm\Model\Option\ApnsFcmOptions;

/**
 * @see https://firebase.google.com/docs/reference/fcm/rest/v1/projects.messages#apnsconfig
 */
final class ApnsConfig
{
    public ?object $payload;

    /**
     * @param array<string, string> $headers
     */
    public function __construct(
        ?ApnsNotification $notification = null,
        public readonly array $headers = [],
        public readonly ?ApnsFcmOptions $fcmOptions = null,
    ) {
        $this->payload = null !== $notification
            ? new class($notification) {
                public function __construct(
                    public ApnsNotification $aps
                ) {
                }
            }
        : null
        ;
    }
}
