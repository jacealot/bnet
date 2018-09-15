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

use Boo\BattleNet\Apis\Warcraft\CharacterProfileApi;
use Boo\BattleNet\Tests\Apis\AbstractApiTest;

/**
 * @internal
 * @coversNothing
 */
final class CharacterProfileApiTest extends AbstractApiTest
{
    /**
     * @vcr Warcraft_CharacterProfileApi.yml
     */
    public function testGetCharacterProfile(): void
    {
        $client = $this->getClient();
        $api = new CharacterProfileApi($this->getRequestFactory(), $this->getRegion(), $this->getApiKey());
        $request = $api->getCharacterProfile('draenor', 'Jyggen');

        $this->assertSame('GET', $request->getMethod());
        $this->assertSame('application/json', $request->getHeaderLine('Accept'));
        $this->assertSame('gzip', $request->getHeaderLine('Accept-Encoding'));

        $response = $client->send($request);

        $this->assertSame(200, $response->getStatusCode());
    }

    /**
     * @vcr Warcraft_CharacterProfileApi.yml
     */
    public function testGetAchievements(): void
    {
        $client = $this->getClient();
        $api = new CharacterProfileApi($this->getRequestFactory(), $this->getRegion(), $this->getApiKey());
        $request = $api->getAchievements('draenor', 'Jyggen');

        $this->assertSame('GET', $request->getMethod());
        $this->assertSame('application/json', $request->getHeaderLine('Accept'));
        $this->assertSame('gzip', $request->getHeaderLine('Accept-Encoding'));

        $response = $client->send($request);

        $this->assertSame(200, $response->getStatusCode());
    }

    /**
     * @vcr Warcraft_CharacterProfileApi.yml
     */
    public function testGetAppearance(): void
    {
        $client = $this->getClient();
        $api = new CharacterProfileApi($this->getRequestFactory(), $this->getRegion(), $this->getApiKey());
        $request = $api->getAppearance('draenor', 'Jyggen');

        $this->assertSame('GET', $request->getMethod());
        $this->assertSame('application/json', $request->getHeaderLine('Accept'));
        $this->assertSame('gzip', $request->getHeaderLine('Accept-Encoding'));

        $response = $client->send($request);

        $this->assertSame(200, $response->getStatusCode());
    }

    /**
     * @vcr Warcraft_CharacterProfileApi.yml
     */
    public function testGetFeed(): void
    {
        $client = $this->getClient();
        $api = new CharacterProfileApi($this->getRequestFactory(), $this->getRegion(), $this->getApiKey());
        $request = $api->getFeed('draenor', 'Jyggen');

        $this->assertSame('GET', $request->getMethod());
        $this->assertSame('application/json', $request->getHeaderLine('Accept'));
        $this->assertSame('gzip', $request->getHeaderLine('Accept-Encoding'));

        $response = $client->send($request);

        $this->assertSame(200, $response->getStatusCode());
    }

    /**
     * @vcr Warcraft_CharacterProfileApi.yml
     */
    public function testGetGuild(): void
    {
        $client = $this->getClient();
        $api = new CharacterProfileApi($this->getRequestFactory(), $this->getRegion(), $this->getApiKey());
        $request = $api->getGuild('draenor', 'Jyggen');

        $this->assertSame('GET', $request->getMethod());
        $this->assertSame('application/json', $request->getHeaderLine('Accept'));
        $this->assertSame('gzip', $request->getHeaderLine('Accept-Encoding'));

        $response = $client->send($request);

        $this->assertSame(200, $response->getStatusCode());
    }

    /**
     * @vcr Warcraft_CharacterProfileApi.yml
     */
    public function testGetHunterPets(): void
    {
        $client = $this->getClient();
        $api = new CharacterProfileApi($this->getRequestFactory(), $this->getRegion(), $this->getApiKey());
        $request = $api->getHunterPets('draenor', 'Jyggen');

        $this->assertSame('GET', $request->getMethod());
        $this->assertSame('application/json', $request->getHeaderLine('Accept'));
        $this->assertSame('gzip', $request->getHeaderLine('Accept-Encoding'));

        $response = $client->send($request);

        $this->assertSame(200, $response->getStatusCode());
    }

    /**
     * @vcr Warcraft_CharacterProfileApi.yml
     */
    public function testGetItems(): void
    {
        $client = $this->getClient();
        $api = new CharacterProfileApi($this->getRequestFactory(), $this->getRegion(), $this->getApiKey());
        $request = $api->getItems('draenor', 'Jyggen');

        $this->assertSame('GET', $request->getMethod());
        $this->assertSame('application/json', $request->getHeaderLine('Accept'));
        $this->assertSame('gzip', $request->getHeaderLine('Accept-Encoding'));

        $response = $client->send($request);

        $this->assertSame(200, $response->getStatusCode());
    }

    /**
     * @vcr Warcraft_CharacterProfileApi.yml
     */
    public function testGetMounts(): void
    {
        $client = $this->getClient();
        $api = new CharacterProfileApi($this->getRequestFactory(), $this->getRegion(), $this->getApiKey());
        $request = $api->getMounts('draenor', 'Jyggen');

        $this->assertSame('GET', $request->getMethod());
        $this->assertSame('application/json', $request->getHeaderLine('Accept'));
        $this->assertSame('gzip', $request->getHeaderLine('Accept-Encoding'));

        $response = $client->send($request);

        $this->assertSame(200, $response->getStatusCode());
    }

    /**
     * @vcr Warcraft_CharacterProfileApi.yml
     */
    public function testGetPets(): void
    {
        $client = $this->getClient();
        $api = new CharacterProfileApi($this->getRequestFactory(), $this->getRegion(), $this->getApiKey());
        $request = $api->getPets('draenor', 'Jyggen');

        $this->assertSame('GET', $request->getMethod());
        $this->assertSame('application/json', $request->getHeaderLine('Accept'));
        $this->assertSame('gzip', $request->getHeaderLine('Accept-Encoding'));

        $response = $client->send($request);

        $this->assertSame(200, $response->getStatusCode());
    }

    /**
     * @vcr Warcraft_CharacterProfileApi.yml
     */
    public function testGetPetSlots(): void
    {
        $client = $this->getClient();
        $api = new CharacterProfileApi($this->getRequestFactory(), $this->getRegion(), $this->getApiKey());
        $request = $api->getPetSlots('draenor', 'Jyggen');

        $this->assertSame('GET', $request->getMethod());
        $this->assertSame('application/json', $request->getHeaderLine('Accept'));
        $this->assertSame('gzip', $request->getHeaderLine('Accept-Encoding'));

        $response = $client->send($request);

        $this->assertSame(200, $response->getStatusCode());
    }

    /**
     * @vcr Warcraft_CharacterProfileApi.yml
     */
    public function testGetProfessions(): void
    {
        $client = $this->getClient();
        $api = new CharacterProfileApi($this->getRequestFactory(), $this->getRegion(), $this->getApiKey());
        $request = $api->getProfessions('draenor', 'Jyggen');

        $this->assertSame('GET', $request->getMethod());
        $this->assertSame('application/json', $request->getHeaderLine('Accept'));
        $this->assertSame('gzip', $request->getHeaderLine('Accept-Encoding'));

        $response = $client->send($request);

        $this->assertSame(200, $response->getStatusCode());
    }

    /**
     * @vcr Warcraft_CharacterProfileApi.yml
     */
    public function testGetProgression(): void
    {
        $client = $this->getClient();
        $api = new CharacterProfileApi($this->getRequestFactory(), $this->getRegion(), $this->getApiKey());
        $request = $api->getProgression('draenor', 'Jyggen');

        $this->assertSame('GET', $request->getMethod());
        $this->assertSame('application/json', $request->getHeaderLine('Accept'));
        $this->assertSame('gzip', $request->getHeaderLine('Accept-Encoding'));

        $response = $client->send($request);

        $this->assertSame(200, $response->getStatusCode());
    }

    /**
     * @vcr Warcraft_CharacterProfileApi.yml
     */
    public function testGetPVP(): void
    {
        $client = $this->getClient();
        $api = new CharacterProfileApi($this->getRequestFactory(), $this->getRegion(), $this->getApiKey());
        $request = $api->getPVP('draenor', 'Jyggen');

        $this->assertSame('GET', $request->getMethod());
        $this->assertSame('application/json', $request->getHeaderLine('Accept'));
        $this->assertSame('gzip', $request->getHeaderLine('Accept-Encoding'));

        $response = $client->send($request);

        $this->assertSame(200, $response->getStatusCode());
    }

    /**
     * @vcr Warcraft_CharacterProfileApi.yml
     */
    public function testGetQuests(): void
    {
        $client = $this->getClient();
        $api = new CharacterProfileApi($this->getRequestFactory(), $this->getRegion(), $this->getApiKey());
        $request = $api->getQuests('draenor', 'Jyggen');

        $this->assertSame('GET', $request->getMethod());
        $this->assertSame('application/json', $request->getHeaderLine('Accept'));
        $this->assertSame('gzip', $request->getHeaderLine('Accept-Encoding'));

        $response = $client->send($request);

        $this->assertSame(200, $response->getStatusCode());
    }

    /**
     * @vcr Warcraft_CharacterProfileApi.yml
     */
    public function testGetReputation(): void
    {
        $client = $this->getClient();
        $api = new CharacterProfileApi($this->getRequestFactory(), $this->getRegion(), $this->getApiKey());
        $request = $api->getReputation('draenor', 'Jyggen');

        $this->assertSame('GET', $request->getMethod());
        $this->assertSame('application/json', $request->getHeaderLine('Accept'));
        $this->assertSame('gzip', $request->getHeaderLine('Accept-Encoding'));

        $response = $client->send($request);

        $this->assertSame(200, $response->getStatusCode());
    }

    /**
     * @vcr Warcraft_CharacterProfileApi.yml
     */
    public function testGetStatistics(): void
    {
        $client = $this->getClient();
        $api = new CharacterProfileApi($this->getRequestFactory(), $this->getRegion(), $this->getApiKey());
        $request = $api->getStatistics('draenor', 'Jyggen');

        $this->assertSame('GET', $request->getMethod());
        $this->assertSame('application/json', $request->getHeaderLine('Accept'));
        $this->assertSame('gzip', $request->getHeaderLine('Accept-Encoding'));

        $response = $client->send($request);

        $this->assertSame(200, $response->getStatusCode());
    }

    /**
     * @vcr Warcraft_CharacterProfileApi.yml
     */
    public function testGetStats(): void
    {
        $client = $this->getClient();
        $api = new CharacterProfileApi($this->getRequestFactory(), $this->getRegion(), $this->getApiKey());
        $request = $api->getStats('draenor', 'Jyggen');

        $this->assertSame('GET', $request->getMethod());
        $this->assertSame('application/json', $request->getHeaderLine('Accept'));
        $this->assertSame('gzip', $request->getHeaderLine('Accept-Encoding'));

        $response = $client->send($request);

        $this->assertSame(200, $response->getStatusCode());
    }

    /**
     * @vcr Warcraft_CharacterProfileApi.yml
     */
    public function testGetTalents(): void
    {
        $client = $this->getClient();
        $api = new CharacterProfileApi($this->getRequestFactory(), $this->getRegion(), $this->getApiKey());
        $request = $api->getTalents('draenor', 'Jyggen');

        $this->assertSame('GET', $request->getMethod());
        $this->assertSame('application/json', $request->getHeaderLine('Accept'));
        $this->assertSame('gzip', $request->getHeaderLine('Accept-Encoding'));

        $response = $client->send($request);

        $this->assertSame(200, $response->getStatusCode());
    }

    /**
     * @vcr Warcraft_CharacterProfileApi.yml
     */
    public function testGetTitles(): void
    {
        $client = $this->getClient();
        $api = new CharacterProfileApi($this->getRequestFactory(), $this->getRegion(), $this->getApiKey());
        $request = $api->getTitles('draenor', 'Jyggen');

        $this->assertSame('GET', $request->getMethod());
        $this->assertSame('application/json', $request->getHeaderLine('Accept'));
        $this->assertSame('gzip', $request->getHeaderLine('Accept-Encoding'));

        $response = $client->send($request);

        $this->assertSame(200, $response->getStatusCode());
    }

    /**
     * @vcr Warcraft_CharacterProfileApi.yml
     */
    public function testGetAudit(): void
    {
        $client = $this->getClient();
        $api = new CharacterProfileApi($this->getRequestFactory(), $this->getRegion(), $this->getApiKey());
        $request = $api->getAudit('draenor', 'Jyggen');

        $this->assertSame('GET', $request->getMethod());
        $this->assertSame('application/json', $request->getHeaderLine('Accept'));
        $this->assertSame('gzip', $request->getHeaderLine('Accept-Encoding'));

        $response = $client->send($request);

        $this->assertSame(200, $response->getStatusCode());
    }
}