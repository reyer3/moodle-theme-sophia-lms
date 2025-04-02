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
 * Configuraciones del tema Sophia.
 *
 * @package   theme_sophia
 * @copyright 2025 OnBotGo
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

if ($ADMIN->fulltree) {
    // Título de la página de configuración.
    $settings = new theme_boost_admin_settingspage_tabs('themesettingsophia', get_string('configtitle', 'theme_sophia'));

    // Configuraciones generales.
    $page = new admin_settingpage('theme_sophia_general', get_string('generalsettings', 'theme_sophia'));

    // Logotipo.
    $name = 'theme_sophia/logo';
    $title = get_string('logo', 'theme_sophia');
    $description = get_string('logodesc', 'theme_sophia');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Favicon.
    $name = 'theme_sophia/favicon';
    $title = get_string('favicon', 'theme_sophia');
    $description = get_string('favicondesc', 'theme_sophia');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'favicon');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // CSS personalizado.
    $name = 'theme_sophia/customcss';
    $title = get_string('customcss', 'theme_sophia');
    $description = get_string('customcssdesc', 'theme_sophia');
    $setting = new admin_setting_configtextarea($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Agregar la página al objeto de configuración.
    $settings->add($page);

    // Configuraciones avanzadas.
    $page = new admin_settingpage('theme_sophia_advanced', get_string('advancedsettings', 'theme_sophia'));

    // Color primario.
    $name = 'theme_sophia/brandcolor';
    $title = get_string('brandcolor', 'theme_sophia');
    $description = get_string('brandcolordesc', 'theme_sophia');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#121631');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Color secundario.
    $name = 'theme_sophia/secondarycolor';
    $title = get_string('secondarycolor', 'theme_sophia');
    $description = get_string('secondarycolordesc', 'theme_sophia');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#ff9500');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Agregar la página al objeto de configuración.
    $settings->add($page);
}
