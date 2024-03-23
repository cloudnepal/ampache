<?php

declare(strict_types=1);

/**
 * vim:set softtabstop=4 shiftwidth=4 expandtab:
 *
 * LICENSE: GNU Affero General Public License, version 3 (AGPL-3.0-or-later)
 * Copyright Ampache.org, 2001-2023
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

namespace Ampache\Module\System\Update;

use Ampache\Module\System\Update\Migration\MigrationInterface;
use Generator;

/**
 * Defines all available versions
 */
final class Versions
{
    /** @var array<int, class-string<MigrationInterface>> List of available migrations */
    private static array $versions = [
        360001 => Migration\V3\Migration360001::class,
        360002 => Migration\V3\Migration360002::class,
        360003 => Migration\V3\Migration360003::class,
        360004 => Migration\V3\Migration360004::class,
        360005 => Migration\V3\Migration360005::class,
        360006 => Migration\V3\Migration360006::class,
        360008 => Migration\V3\Migration360008::class,
        360009 => Migration\V3\Migration360009::class,
        360010 => Migration\V3\Migration360010::class,
        360011 => Migration\V3\Migration360011::class,
        360012 => Migration\V3\Migration360012::class,
        360013 => Migration\V3\Migration360013::class,
        360014 => Migration\V3\Migration360014::class,
        360015 => Migration\V3\Migration360015::class,
        360016 => Migration\V3\Migration360016::class,
        360017 => Migration\V3\Migration360017::class,
        360018 => Migration\V3\Migration360018::class,
        360019 => Migration\V3\Migration360019::class,
        360020 => Migration\V3\Migration360020::class,
        360021 => Migration\V3\Migration360021::class,
        360022 => Migration\V3\Migration360022::class,
        360023 => Migration\V3\Migration360023::class,
        360024 => Migration\V3\Migration360024::class,
        360025 => Migration\V3\Migration360025::class,
        360026 => Migration\V3\Migration360026::class,
        360027 => Migration\V3\Migration360027::class,
        360028 => Migration\V3\Migration360028::class,
        360029 => Migration\V3\Migration360029::class,
        360030 => Migration\V3\Migration360030::class,
        360031 => Migration\V3\Migration360031::class,
        360032 => Migration\V3\Migration360032::class,
        360033 => Migration\V3\Migration360033::class,
        360034 => Migration\V3\Migration360034::class,
        360035 => Migration\V3\Migration360035::class,
        360036 => Migration\V3\Migration360036::class,
        360037 => Migration\V3\Migration360037::class,
        360038 => Migration\V3\Migration360038::class,
        360039 => Migration\V3\Migration360039::class,
        360041 => Migration\V3\Migration360041::class,
        360042 => Migration\V3\Migration360042::class,
        360043 => Migration\V3\Migration360043::class,
        360044 => Migration\V3\Migration360044::class,
        360045 => Migration\V3\Migration360045::class,
        360046 => Migration\V3\Migration360046::class,
        360047 => Migration\V3\Migration360047::class,
        360048 => Migration\V3\Migration360048::class,
        360049 => Migration\V3\Migration360049::class,
        360050 => Migration\V3\Migration360050::class,
        370001 => Migration\V3\Migration370001::class,
        370002 => Migration\V3\Migration370002::class,
        370003 => Migration\V3\Migration370003::class,
        370004 => Migration\V3\Migration370004::class,
        370005 => Migration\V3\Migration370005::class,
        370006 => Migration\V3\Migration370006::class,
        370007 => Migration\V3\Migration370007::class,
        370008 => Migration\V3\Migration370008::class,
        370009 => Migration\V3\Migration370009::class,
        370010 => Migration\V3\Migration370010::class,
        370011 => Migration\V3\Migration370011::class,
        370012 => Migration\V3\Migration370012::class,
        370013 => Migration\V3\Migration370013::class,
        370014 => Migration\V3\Migration370014::class,
        370015 => Migration\V3\Migration370015::class,
        370016 => Migration\V3\Migration370016::class,
        370017 => Migration\V3\Migration370017::class,
        370018 => Migration\V3\Migration370018::class,
        370019 => Migration\V3\Migration370019::class,
        370020 => Migration\V3\Migration370020::class,
        370021 => Migration\V3\Migration370021::class,
        370022 => Migration\V3\Migration370022::class,
        370023 => Migration\V3\Migration370023::class,
        370024 => Migration\V3\Migration370024::class,
        370025 => Migration\V3\Migration370025::class,
        370026 => Migration\V3\Migration370026::class,
        370027 => Migration\V3\Migration370027::class,
        370028 => Migration\V3\Migration370028::class,
        370029 => Migration\V3\Migration370029::class,
        370030 => Migration\V3\Migration370030::class,
        370031 => Migration\V3\Migration370031::class,
        370032 => Migration\V3\Migration370032::class,
        370033 => Migration\V3\Migration370033::class,
        370034 => Migration\V3\Migration370034::class,
        370035 => Migration\V3\Migration370035::class,
        370036 => Migration\V3\Migration370036::class,
        370037 => Migration\V3\Migration370037::class,
        370038 => Migration\V3\Migration370038::class,
        370039 => Migration\V3\Migration370039::class,
        370040 => Migration\V3\Migration370040::class,
        370041 => Migration\V3\Migration370041::class,
        380001 => Migration\V3\Migration380001::class,
        380002 => Migration\V3\Migration380002::class,
        380003 => Migration\V3\Migration380003::class,
        380004 => Migration\V3\Migration380004::class,
        380005 => Migration\V3\Migration380005::class,
        380006 => Migration\V3\Migration380006::class,
        380007 => Migration\V3\Migration380007::class,
        380008 => Migration\V3\Migration380008::class,
        380009 => Migration\V3\Migration380009::class,
        380010 => Migration\V3\Migration380010::class,
        380011 => Migration\V3\Migration380011::class,
        380012 => Migration\V3\Migration380012::class,
        400000 => Migration\V4\Migration400000::class,
        400001 => Migration\V4\Migration400001::class,
        400002 => Migration\V4\Migration400002::class,
        400003 => Migration\V4\Migration400003::class,
        400004 => Migration\V4\Migration400004::class,
        400005 => Migration\V4\Migration400005::class,
        400006 => Migration\V4\Migration400006::class,
        400007 => Migration\V4\Migration400007::class,
        400008 => Migration\V4\Migration400008::class,
        400009 => Migration\V4\Migration400009::class,
        400010 => Migration\V4\Migration400010::class,
        400011 => Migration\V4\Migration400011::class,
        400012 => Migration\V4\Migration400012::class,
        400013 => Migration\V4\Migration400013::class,
        400014 => Migration\V4\Migration400014::class,
        400015 => Migration\V4\Migration400015::class,
        400016 => Migration\V4\Migration400016::class,
        400018 => Migration\V4\Migration400018::class,
        400019 => Migration\V4\Migration400019::class,
        400020 => Migration\V4\Migration400020::class,
        400021 => Migration\V4\Migration400021::class,
        400022 => Migration\V4\Migration400022::class,
        400023 => Migration\V4\Migration400023::class,
        400024 => Migration\V4\Migration400024::class,
        500000 => Migration\V5\Migration500000::class,
        500001 => Migration\V5\Migration500001::class,
        500002 => Migration\V5\Migration500002::class,
        500003 => Migration\V5\Migration500003::class,
        500004 => Migration\V5\Migration500004::class,
        500005 => Migration\V5\Migration500005::class,
        500006 => Migration\V5\Migration500006::class,
        500007 => Migration\V5\Migration500007::class,
        500008 => Migration\V5\Migration500008::class,
        500009 => Migration\V5\Migration500009::class,
        500010 => Migration\V5\Migration500010::class,
        500011 => Migration\V5\Migration500011::class,
        500012 => Migration\V5\Migration500012::class,
        500013 => Migration\V5\Migration500013::class,
        500014 => Migration\V5\Migration500014::class,
        500015 => Migration\V5\Migration500015::class,
        510000 => Migration\V5\Migration510000::class,
        510001 => Migration\V5\Migration510001::class,
        510003 => Migration\V5\Migration510003::class,
        510004 => Migration\V5\Migration510004::class,
        510005 => Migration\V5\Migration510005::class,
        520000 => Migration\V5\Migration520000::class,
        520001 => Migration\V5\Migration520001::class,
        520002 => Migration\V5\Migration520002::class,
        520003 => Migration\V5\Migration520003::class,
        520004 => Migration\V5\Migration520004::class,
        520005 => Migration\V5\Migration520005::class,
        530000 => Migration\V5\Migration530000::class,
        530001 => Migration\V5\Migration530001::class,
        530002 => Migration\V5\Migration530002::class,
        530003 => Migration\V5\Migration530003::class,
        530004 => Migration\V5\Migration530004::class,
        530005 => Migration\V5\Migration530005::class,
        530006 => Migration\V5\Migration530006::class,
        530007 => Migration\V5\Migration530007::class,
        530008 => Migration\V5\Migration530008::class,
        530009 => Migration\V5\Migration530009::class,
        530010 => Migration\V5\Migration530010::class,
        530011 => Migration\V5\Migration530011::class,
        530012 => Migration\V5\Migration530012::class,
        530013 => Migration\V5\Migration530013::class,
        530014 => Migration\V5\Migration530014::class,
        530015 => Migration\V5\Migration530015::class,
        530016 => Migration\V5\Migration530016::class,
        540000 => Migration\V5\Migration540000::class,
        540001 => Migration\V5\Migration540001::class,
        540002 => Migration\V5\Migration540002::class,
        550001 => Migration\V5\Migration550001::class,
        550002 => Migration\V5\Migration550002::class,
        550003 => Migration\V5\Migration550003::class,
        550004 => Migration\V5\Migration550004::class,
        550005 => Migration\V5\Migration550005::class,
        600001 => Migration\V6\Migration600001::class,
        600002 => Migration\V6\Migration600002::class,
        600003 => Migration\V6\Migration600003::class,
        600004 => Migration\V6\Migration600004::class,
        600005 => Migration\V6\Migration600005::class,
        600006 => Migration\V6\Migration600006::class,
        600007 => Migration\V6\Migration600007::class,
        600008 => Migration\V6\Migration600008::class,
        600009 => Migration\V6\Migration600009::class,
        600010 => Migration\V6\Migration600010::class,
        600011 => Migration\V6\Migration600011::class,
        600012 => Migration\V6\Migration600012::class,
        600013 => Migration\V6\Migration600013::class,
        600014 => Migration\V6\Migration600014::class,
        600015 => Migration\V6\Migration600015::class,
        600016 => Migration\V6\Migration600016::class,
        600018 => Migration\V6\Migration600018::class,
        600019 => Migration\V6\Migration600019::class,
        600020 => Migration\V6\Migration600020::class,
        600021 => Migration\V6\Migration600021::class,
        600022 => Migration\V6\Migration600022::class,
        600023 => Migration\V6\Migration600023::class,
        600024 => Migration\V6\Migration600024::class,
        600025 => Migration\V6\Migration600025::class,
        600026 => Migration\V6\Migration600026::class,
        600027 => Migration\V6\Migration600027::class,
        600028 => Migration\V6\Migration600028::class,
        600032 => Migration\V6\Migration600032::class,
        600033 => Migration\V6\Migration600033::class,
        600034 => Migration\V6\Migration600034::class,
        600035 => Migration\V6\Migration600035::class,
        600036 => Migration\V6\Migration600036::class,
        600037 => Migration\V6\Migration600037::class,
        600038 => Migration\V6\Migration600038::class,
        600039 => Migration\V6\Migration600039::class,
        600040 => Migration\V6\Migration600040::class,
        600041 => Migration\V6\Migration600041::class,
        600042 => Migration\V6\Migration600042::class,
        600043 => Migration\V6\Migration600043::class,
        600044 => Migration\V6\Migration600044::class,
        600045 => Migration\V6\Migration600045::class,
        600046 => Migration\V6\Migration600046::class,
        600047 => Migration\V6\Migration600047::class,
        600048 => Migration\V6\Migration600048::class,
        600049 => Migration\V6\Migration600049::class,
        600050 => Migration\V6\Migration600050::class,
        600051 => Migration\V6\Migration600051::class,
        600052 => Migration\V6\Migration600052::class,
        600053 => Migration\V6\Migration600053::class,
        600054 => Migration\V6\Migration600054::class,
        600055 => Migration\V6\Migration600055::class,
        600056 => Migration\V6\Migration600056::class,
        600057 => Migration\V6\Migration600057::class,
        600058 => Migration\V6\Migration600058::class,
        600059 => Migration\V6\Migration600059::class,
        600060 => Migration\V6\Migration600060::class,
    ];

    /**
     * Yields all migration having a more recent version than the given one
     *
     * @return Generator<int, class-string<MigrationInterface>>
     */
    public static function getPendingMigrations(int $currentVersion): Generator
    {
        foreach (self::$versions as $version => $migrationClass) {
            if ($version > $currentVersion) {
                yield $version => $migrationClass;
            }
        }
    }
}