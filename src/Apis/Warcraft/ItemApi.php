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

namespace Boo\BattleNet\Apis\Warcraft;

use Boo\BattleNet\Exceptions\UnavailableRegionException;
use Boo\BattleNet\Regions\RegionInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\RequestInterface;

final class ItemApi
{
    /**
     * @var RequestFactoryInterface
     */
    private $factory;

    /**
     * @var array<string, int|string>
     */
    private $queryString;

    /**
     * @var RegionInterface
     */
    private $region;

    public function __construct(RequestFactoryInterface $factory, RegionInterface $region, string $apiKey)
    {
        $this->factory = $factory;
        $this->region = $region;
        $this->queryString = [
            'apikey' => $apiKey,
            'locale' => $this->region->getLocale(),
        ];
    }

    public function getItem(int $itemId): RequestInterface
    {
        if ('CN' === $this->region->getName()) {
            throw new UnavailableRegionException('CN does not support this endpoint');
        }

        if ('SEA' === $this->region->getName()) {
            throw new UnavailableRegionException('SEA does not support this endpoint');
        }

        $url = '/wow/item/'.$itemId;

        return $this->createRequest('GET', $url);
    }

    public function getItemSet(string $setId): RequestInterface
    {
        if ('CN' === $this->region->getName()) {
            throw new UnavailableRegionException('CN does not support this endpoint');
        }

        if ('SEA' === $this->region->getName()) {
            throw new UnavailableRegionException('SEA does not support this endpoint');
        }

        $url = '/wow/item/set/'.$setId;

        return $this->createRequest('GET', $url);
    }

    private function createRequest(string $verb, string $url, array $queryString = []): RequestInterface
    {
        $url = $url.'?'.http_build_query(array_replace($this->queryString, $queryString));
        $url = $this->region->getApiBaseUrl().$url;
        $request = $this->factory->createRequest($verb, $url);
        $request = $request->withHeader('Accept', 'application/json');
        $request = $request->withHeader('Accept-Encoding', 'gzip');

        return $request;
    }
}
