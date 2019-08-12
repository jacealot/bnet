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

namespace Boo\BattleNet\Endpoints\WowGameData\MythicKeystoneDungeon;

use Boo\BattleNet\Endpoints\EndpointInterface;

/**
 * @internal
 */
final class GetMythicKeystoneDungeonsIndex implements EndpointInterface
{
    private const PATH = '/data/wow/mythic-keystone/dungeon/index';

    public function getMethod(): string
    {
        return self::METHOD_GET;
    }

    public function getPath(): string
    {
        return self::PATH;
    }
}