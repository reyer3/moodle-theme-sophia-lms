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
 * Sophia theme version info.
 *
 * @package   theme_sophia
 * @copyright 2025 OnBotGo
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version   = 2025040101;  // La fecha en formato YYYYMMDDXX
$plugin->requires  = 2023100400;  // Requiere Moodle 4.3+
$plugin->component = 'theme_sophia';  // Nombre completo del componente
$plugin->dependencies = [
    'theme_boost' => 2023100400,  // Este tema requiere Boost
];
$plugin->maturity  = MATURITY_STABLE;
$plugin->release   = '1.0';