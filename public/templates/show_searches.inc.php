<?php
/* vim:set softtabstop=4 shiftwidth=4 expandtab: */
/**
 *
 * LICENSE: GNU Affero General Public License, version 3 (AGPL-3.0-or-later)
 * Copyright 2001 - 2022 Ampache.org
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
 *
 */

use Ampache\Config\AmpConfig;
use Ampache\Repository\Model\Search;
use Ampache\Module\Authorization\Access;
use Ampache\Module\Api\Ajax;
use Ampache\Module\Util\Ui;

?>
<div id="information_actions">
    <ul>
        <?php if (Access::check('interface', 25)) { ?>
        <li>
            <a href="<?php echo AmpConfig::get('web_path'); ?>/search.php?type=song">
                <?php echo Ui::get_icon('add', T_('Add')); ?>
                <?php echo T_('Add Smart Playlist'); ?>
            </a>
        </li>
        <?php } ?>
    </ul>
</div>
<?php if ($browse->is_show_header()) {
    require Ui::find_template('list_header.inc.php');
} ?>
<table class="tabledata striped-rows <?php echo $browse->get_css_class() ?>" data-objecttype="smartplaylist">
    <thead>
        <tr class="th-top">
            <th class="cel_play essential"></th>
            <th class="cel_playlist essential"><?php echo Ajax::text('?page=browse&action=set_sort&browse_id=' . $browse->id . '&type=smartplaylist&sort=name', T_('Playlist Name'), 'playlist_sort_name'); ?></th>
            <th class="cel_add essential"></th>
            <th class="cel_type optional"><?php echo T_('Type'); ?></th>
            <th class="cel_random optional"><?php echo T_('Random'); ?></th>
            <th class="cel_limit optional"><?php echo T_('Item Limit'); ?></th>
            <th class="cel_owner essential"><?php echo T_('Owner') ?></th>
            <th class="cel_action essential"><?php echo T_('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($object_ids as $playlist_id) {
            $libitem = new Search($playlist_id, 'song');
            $libitem->format(); ?>
        <tr id="smartplaylist_row_<?php echo $libitem->id; ?>">
            <?php require Ui::find_template('show_search_row.inc.php'); ?>
        </tr>
        <?php
        } ?>
        <?php if (!count($object_ids)) { ?>
        <tr>
            <td colspan="6"><span class="nodata"><?php echo T_('No smart playlist found'); ?></span></td>
        </tr>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr class="th-bottom">
            <th class="cel_play"></th>
            <th class="cel_playlist"><?php echo Ajax::text('?page=browse&action=set_sort&browse_id=' . $browse->id . '&type=playlist&sort=name', T_('Playlist Name'), 'playlist_sort_name_bottom'); ?></th>
            <th class="cel_add"></th>
            <th class="cel_type"></th>
            <th class="cel_random"></th>
            <th class="cel_limit"></th>
            <th class="cel_owner"></th>
            <th class="cel_action"></th>
        </tr>
    </tfoot>
</table>
<?php if ($browse->is_show_header()) {
            require Ui::find_template('list_header.inc.php');
        } ?>
