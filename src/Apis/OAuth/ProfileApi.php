<?php

declare(strict_types=1);

/*
 * This file is part of the Battle.net API Client package.
 *
 * (c) Jonas Stendahl <jonas@stendahl.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Boo\BattleNet\Apis\OAuth;

use Boo\BattleNet\Apis\AbstractApi;
use Psr\Http\Message\RequestInterface;

final class ProfileApi extends AbstractApi
{
    public function getSc2OauthProfile(string $accessToken): RequestInterface
    {
        return $this->createRequest('GET', '/sc2/profile/user', [
            'access_token' => $accessToken,
        ]);
    }

    public function getWowOauthProfile(string $accessToken): RequestInterface
    {
        $this->preventRegionUsage([
            'CN',
        ]);

        return $this->createRequest('GET', '/wow/user/characters', [
            'access_token' => $accessToken,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    protected function getRestrictedRegions(): array
    {
        return [];
    }
}
