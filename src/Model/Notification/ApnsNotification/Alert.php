<?php

declare(strict_types=1);

namespace Kerox\Fcm\Model\Notification\ApnsNotification;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * @see https://developer.apple.com/documentation/usernotifications/setting_up_a_remote_notification_server/generating_a_remote_notification#2943365
 */
final class Alert
{
    /**
     * @param string[] $titleLocArgs
     * @param string[] $subtitleLocArgs
     * @param string[] $locArgs
     */
    public function __construct(
        public readonly ?string $title = null,
        public readonly ?string $subtitle = null,
        public readonly ?string $body = null,
        #[SerializedName('launch-image')] public readonly ?string $launchImage = null,
        #[SerializedName('title-loc-key')] public readonly ?string $titleLocKey = null,
        #[SerializedName('title-loc-args')] public readonly array $titleLocArgs = [],
        #[SerializedName('subtitle-loc-key')] public readonly ?string $subtitleLocKey = null,
        #[SerializedName('subtitle-loc-args')] public readonly array $subtitleLocArgs = [],
        #[SerializedName('loc-key')] public readonly ?string $locKey = null,
        #[SerializedName('loc-args')] public readonly array $locArgs = [],
    ) {
    }
}
