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
 * Sophia theme functions.
 *
 * @package   theme_sophia
 * @copyright 2025 OnBotGo
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Obtiene el contenido principal SCSS.
 *
 * @param theme_config $theme El objeto de configuración del tema.
 * @return string Contenido SCSS.
 */
function theme_sophia_get_main_scss_content($theme) {
    global $CFG;

    $scss = '';
    
    // Pre SCSS - se aplica antes del SCSS de Boost.
    $prescss = file_get_contents($CFG->dirroot . '/theme/sophia/scss/pre.scss');
    if (!empty($prescss)) {
        $scss .= $prescss;
    }
    
    // Incluir el SCSS principal de Boost.
    $boostscss = file_get_contents($CFG->dirroot . '/theme/boost/scss/preset/default.scss');
    $scss .= $boostscss;

    // Post SCSS - se aplica después del SCSS de Boost.
    $postscss = file_get_contents($CFG->dirroot . '/theme/sophia/scss/post.scss');
    if (!empty($postscss)) {
        $scss .= $postscss;
    }

    return $scss;
}

/**
 * Sirve el favicon del tema.
 *
 * @param moodle_page $page La página.
 * @return string URL del favicon.
 */
function theme_sophia_favicon($page) {
    global $CFG;
    
    // Usar el favicon de este tema si existe.
    if (file_exists("$CFG->dirroot/theme/sophia/pix/favicon.ico")) {
        return $CFG->wwwroot . '/theme/sophia/pix/favicon.ico';
    } else {
        // Si no existe, usar el favicon por defecto.
        return $CFG->wwwroot . '/theme/boost/pix/favicon.ico';
    }
}