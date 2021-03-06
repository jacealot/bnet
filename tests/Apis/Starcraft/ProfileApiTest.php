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

namespace Boo\BattleNet\Tests\Apis\Starcraft;

use Boo\BattleNet\Apis\Starcraft\ProfileApi;
use Boo\BattleNet\Tests\Apis\AbstractApiTest;

/**
 * DO NOT EDIT. This file was auto-generated based on the Battle.net API docs.
 *
 * @internal
 * @covers \Boo\BattleNet\Apis\AbstractApi
 * @covers \Boo\BattleNet\Apis\Starcraft\ProfileApi
 */
final class ProfileApiTest extends AbstractApiTest
{
    /**
     * @vcr Starcraft_ProfileApi_GetProfile.json
     */
    public function testGetProfile(): void
    {
        $client = $this->getClient();
        $api = new ProfileApi($this->getRequestFactory(), $this->getRegion(), $this->getApiKey());
        $request = $api->getProfile('5179818', '1', 'soul');

        $this->assertSame('GET', $request->getMethod());
        $this->assertSame('application/json', $request->getHeaderLine('Accept'));
        $this->assertSame('gzip', $request->getHeaderLine('Accept-Encoding'));

        $response = $client->send($request);

        $this->assertSame(200, $response->getStatusCode());
    }

    /**
     * @vcr Starcraft_ProfileApi_GetLadders.json
     */
    public function testGetLadders(): void
    {
        $client = $this->getClient();
        $api = new ProfileApi($this->getRequestFactory(), $this->getRegion(), $this->getApiKey());
        $request = $api->getLadders('5179818', '1', 'soul');

        $this->assertSame('GET', $request->getMethod());
        $this->assertSame('application/json', $request->getHeaderLine('Accept'));
        $this->assertSame('gzip', $request->getHeaderLine('Accept-Encoding'));

        $response = $client->send($request);

        $this->assertSame(200, $response->getStatusCode());
    }

    /**
     * @vcr Starcraft_ProfileApi_GetMatchHistory.json
     */
    public function testGetMatchHistory(): void
    {
        $client = $this->getClient();
        $api = new ProfileApi($this->getRequestFactory(), $this->getRegion(), $this->getApiKey());
        $request = $api->getMatchHistory('5179818', '1', 'soul');

        $this->assertSame('GET', $request->getMethod());
        $this->assertSame('application/json', $request->getHeaderLine('Accept'));
        $this->assertSame('gzip', $request->getHeaderLine('Accept-Encoding'));

        $response = $client->send($request);

        $this->assertSame(200, $response->getStatusCode());
    }
}
