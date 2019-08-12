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

namespace Boo\BattleNet\Endpoints\CommunityApisCn\D3Profile;

use Boo\BattleNet\Endpoints\EndpointInterface;

/**
 * @internal
 */
final class GetApiHero implements EndpointInterface
{
    private const PATH = '/d3/profile/%1$s/hero/%2$s';

    /**
     * @var string
     */
    private $path = self::PATH;

    public function __construct(string $account, string $heroId)
    {
        $this->path = vsprintf($this->path, [
            $account,
            $heroId,
        ]);
    }

    public function getMethod(): string
    {
        return self::METHOD_GET;
    }

    public function getPath(): string
    {
        return $this->path;
    }
}