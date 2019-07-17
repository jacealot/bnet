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

namespace Boo\BattleNet\Endpoints\WowProfileData\MythicKeystoneCharacterProfile;

use Boo\BattleNet\Endpoints\EndpointInterface;

final class GetMythicKeystoneCharacterSeasonDetails implements EndpointInterface
{
    private const PATH = '/profile/wow/character/{realmSlug}/{characterName}/mythic-keystone-profile/season/{seasonId}';

    public function getMethod(): string
    {
        return self::METHOD_GET;
    }

    public function getPath(): string
    {
        return self::PATH;
    }
}
