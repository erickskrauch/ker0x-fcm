<?php

declare(strict_types=1);

namespace Kerox\Fcm\Model\Option;

/**
 * @see https://firebase.google.com/docs/reference/fcm/rest/v1/projects.messages?hl=fr#androidfcmoptions
 */
final class AndroidFcmOptions
{
    public function __construct(
        public readonly ?string $analyticsLabel = null,
    ) {
    }
}
