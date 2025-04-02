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
 * Sophia theme config.
 *
 * @package   theme_sophia
 * @copyright 2025 OnBotGo
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$THEME->name = 'sophia';
$THEME->parents = ['boost'];  // El tema está basado en Boost

$THEME->sheets = [];  // Hojas de estilo adicionales

$THEME->scss = function($theme) {
    return theme_sophia_get_main_scss_content($theme);
};

// Usar el sistema de renderizado de Boost
$THEME->rendererfactory = 'theme_overridden_renderer_factory';

// Define las regiones de bloques disponibles
$THEME->layouts = [
    // La mayoría de las páginas - incluye bloques laterales.
    'standard' => [
        'file' => 'columns2.php',
        'regions' => ['side-pre'],
        'defaultregion' => 'side-pre',
    ],
    // Página del curso principal - incluye bloques laterales y bloques en la parte superior e inferior.
    'course' => [
        'file' => 'columns2.php',
        'regions' => ['side-pre'],
        'defaultregion' => 'side-pre',
        'options' => ['langmenu' => true],
    ],
    // Página de inicio de sesión - sin bloques.
    'login' => [
        'file' => 'login.php',
        'regions' => [],
        'options' => ['langmenu' => true],
    ],
];

$THEME->enable_dock = false;
$THEME->usefallback = true;

$THEME->iconsystem = '\\theme_sophia\\output\\icon_system_fontawesome';

// Define cualquier configuración de plugin específica para tu tema
$THEME->pluginsheets = [
    'mod_quiz' => ['quiz'],
];