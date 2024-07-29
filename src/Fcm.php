<?php

declare(strict_types=1);

namespace Kerox\Fcm;

use Http\Discovery\Psr18Client;
use Kerox\Fcm\Api\Send;

final class Fcm
{
    final public const API_URL = 'https://fcm.googleapis.com';
    final public const API_VERSION = 'v1';

    private Psr18Client $client;

    public function __construct(
        private readonly string $oauthToken,
        private readonly string $projectId,
    ) {
        $this->client = new Psr18Client();
    }

    public function send(): Send
    {
        return new Send($this->oauthToken, $this->projectId, $this->client);
    }
}
