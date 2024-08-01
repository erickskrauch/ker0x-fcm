<?php

declare(strict_types=1);

namespace Kerox\Fcm\Model;

use Kerox\Fcm\Model\Config\AndroidConfig;
use Kerox\Fcm\Model\Config\ApnsConfig;
use Kerox\Fcm\Model\Config\WebpushConfig;
use Kerox\Fcm\Model\Notification\Notification;
use Kerox\Fcm\Model\Option\FcmOptions;
use Kerox\Fcm\Model\Target\Condition;
use Kerox\Fcm\Model\Target\Token;
use Kerox\Fcm\Model\Target\Topic;

/**
 * @see https://firebase.google.com/docs/reference/fcm/rest/v1/projects.messages#resource:-message
 */
final class Message
{
    public ?Notification $notification = null;
    public ?string $token = null;
    public ?string $topic = null;
    public ?string $condition = null;

    /**
     * @param array<string, mixed>|null $data
     */
    public function __construct(
        Token|Topic|Condition $target,
        public ?array $data = null,
        Notification|string|null $notification = null,
        public ?AndroidConfig $android = null,
        public ?WebpushConfig $webpush = null,
        public ?ApnsConfig $apns = null,
        public ?FcmOptions $fcmOptions = null,
    ) {
        if (null !== $notification) {
            $this->notification = \is_string($notification)
                ? new Notification($notification)
                : $notification
            ;
        }

        match (true) {
            $target instanceof Token => $this->token = $target->__toString(),
            $target instanceof Topic => $this->topic = $target->__toString(),
            $target instanceof Condition => $this->condition = $target->__toString(),
        };
    }
}
