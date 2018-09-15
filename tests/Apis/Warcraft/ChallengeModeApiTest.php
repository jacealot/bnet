<?php

declare(strict_types=1);

/*
 * This file is part of boo/bnet.
 *
 * (c) Jonas Stendahl <jonas@stendahl.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Boo\BattleNet\Tests\Apis\Warcraft;

use Boo\BattleNet\Apis\Warcraft\ChallengeModeApi;
use Boo\BattleNet\Tests\Apis\AbstractApiTest;

/**
 * @internal
 * @coversNothing
 */
final class ChallengeModeApiTest extends AbstractApiTest
{
    /**
     * @vcr Warcraft_ChallengeModeApi.yml
     */
    public function testGetRealmLeaderboard(): void
    {
        $client = $this->getClient();
        $api = new ChallengeModeApi($this->getRequestFactory(), $this->getRegion(), $this->getApiKey());
        $request = $api->getRealmLeaderboard('draenor');

        $this->assertSame('GET', $request->getMethod());
        $this->assertSame('application/json', $request->getHeaderLine('Accept'));
        $this->assertSame('gzip', $request->getHeaderLine('Accept-Encoding'));

        $response = $client->send($request);

        $this->assertSame(200, $response->getStatusCode());
    }

    /**
     * @vcr Warcraft_ChallengeModeApi.yml
     */
    public function testGetRegionLeaderboard(): void
    {
        $client = $this->getClient();
        $api = new ChallengeModeApi($this->getRequestFactory(), $this->getRegion(), $this->getApiKey());
        $request = $api->getRegionLeaderboard();

        $this->assertSame('GET', $request->getMethod());
        $this->assertSame('application/json', $request->getHeaderLine('Accept'));
        $this->assertSame('gzip', $request->getHeaderLine('Accept-Encoding'));

        $response = $client->send($request);

        $this->assertSame(200, $response->getStatusCode());
    }
}
