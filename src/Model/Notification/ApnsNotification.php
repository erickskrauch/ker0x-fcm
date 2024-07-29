<?php

declare(strict_types=1);

namespace Kerox\Fcm\Model\Notification;

use Kerox\Fcm\Model\Notification\ApnsNotification\Alert;
use Kerox\Fcm\Model\Notification\ApnsNotification\Sound;
use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * @see https://developer.apple.com/documentation/usernotifications/setting_up_a_remote_notification_server/generating_a_remote_notification
 */
final class ApnsNotification
{
    public function __construct(
        public readonly ?Alert $alert = null,
        public readonly int $badge = 0,
        public readonly string|Sound|null $sound = null,
        #[SerializedName('thread-id')] public readonly ?string $threadId = null,
        public readonly ?string $category = null,
        #[SerializedName('content-available')] public readonly int $contentAvailable = 0,
        #[SerializedName('mutable-content')] public readonly int $mutableContent = 0,
        #[SerializedName('target-content-id')] public readonly ?string $targetContentId = null,
        #[SerializedName('interruption-level')] public readonly ?string $interruptionLevel = null,
        #[SerializedName('relevance-score')] public readonly float $relevanceScore = 0,
        #[SerializedName('filter-criteria')] public readonly ?string $filterCriteria = null,
        #[SerializedName('stale-date')] public readonly ?int $staleDate = null,
        #[SerializedName('content-state')] public readonly ?string $contentState = null,
        public readonly ?int $timestamp = null,
        public readonly ?string $events = null,
    ) {
    }
}
