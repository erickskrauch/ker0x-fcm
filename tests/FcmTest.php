<?php

declare(strict_types=1);

namespace Kerox\Fcm\Tests;

use Kerox\Fcm\Api\Send;
use Kerox\Fcm\Fcm;
use Kerox\Fcm\Model\Message;
use Kerox\Fcm\Model\Target\Topic;
use PHPUnit\Framework\TestCase;

final class FcmTest extends TestCase
{
    private ?Fcm $fcm;

    protected function setUp(): void
    {
        $this->fcm = new Fcm(getenv('FCM_OAUTH_TOKEN'), getenv('FCM_PROJECT_ID'));
    }

    protected function tearDown(): void
    {
        $this->fcm = null;
    }

    public function testItCanGetAnInstanceOfSendApi(): void
    {
        $sendApi = $this->fcm->send();

        self::assertInstanceOf(Send::class, $sendApi);

        $response = $sendApi->message(new Message(
            notification: 'Breaking News',
            target: new Topic('TopicA'),
            data: [
                'story_id' => 'story_12345',
            ],
        ));

        self::assertSame(200, $response->getStatusCode());
        self::assertStringContainsString('projects/'.getenv('FCM_PROJECT_ID').'/messages/', $response->getBody()->getContents());
        self::assertArrayHasKey('content-type', $response->getHeaders());
    }
}
