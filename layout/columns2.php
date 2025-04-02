<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * A two column layout for the Sophia theme.
 *
 * @package   theme_sophia
 * @copyright 2025 OnBotGo
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

user_preference_allow_ajax_update('drawer-open-nav', PARAM_ALPHA);
require_once($CFG->libdir . '/behat/lib.php');

$navdraweropen = false;
$extraclasses = [];

if (isloggedin()) {
    $navdraweropen = (get_user_preferences('drawer-open-nav', 'true') == 'true');
}

if (defined('BEHAT_SITE_RUNNING') && BEHAT_SITE_RUNNING) {
    $navdraweropen = true;
}

$blockdraweropen = false;
if (isloggedin()) {
    $blockdraweropen = (get_user_preferences('drawer-open-block', 'false') == 'true');
}

$extraclasses[] = $navdraweropen ? 'drawer-open-left' : '';
$extraclasses[] = $blockdraweropen ? 'drawer-open-right' : '';

$bodyattributes = $OUTPUT->body_attributes($extraclasses);
$regionmainsettingsmenu = $OUTPUT->region_main_settings_menu();
$templatecontext = [
    'sitename' => format_string($SITE->shortname, true, ['context' => context_course::instance(SITEID), "escape" => false]),
    'output' => $OUTPUT,
    'sidepreblocks' => $blockshtml,
    'hasblocks' => !empty($blockshtml),
    'bodyattributes' => $bodyattributes,
    'navdraweropen' => $navdraweropen,
    'regionmainsettingsmenu' => $regionmainsettingsmenu,
    'hasregionmainsettingsmenu' => !empty($regionmainsettingsmenu),
    'blockdraweropen' => $blockdraweropen,
];

// Get sidebar blocks.
$sidepreblocks = $OUTPUT->blocks('side-pre');
$hasblocks = strpos($sidepreblocks, 'data-block=') !== false;
$templatecontext['sidepreblocks'] = $sidepreblocks;
$templatecontext['hasblocks'] = $hasblocks;

// Render general template.
echo $OUTPUT->render_from_template('theme_sophia/columns2', $templatecontext);
