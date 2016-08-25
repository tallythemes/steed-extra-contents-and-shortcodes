<?php /*

**************************************************************************

Plugin Name:  Steed Extra Contents and Shortcodes
Plugin URI:   http://www.viper007bond.com/wordpress-plugins/regenerate-thumbnails/
Description:  This plugin enhant Steed Theme functionality and add extra content and settings.
Version:      1.0
Author:       TallyThemes
Author URI:   http://tallythemes.com/
Text Domain:  steed-extra-contents-and-shortcodes

**************************************************************************

Copyright (C) 2016 TallyThemes

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.

**************************************************************************/

$path_dir = trailingslashit(str_replace('\\','/',dirname(__FILE__)));
$path_abs = trailingslashit(str_replace('\\','/',ABSPATH));

define('SECASC_URL', site_url(str_replace( $path_abs, '', $path_dir )));
define('SECASC_DRI', $path_dir);

include(SECASC_DRI.'includes/helper-functions.php');
include(SECASC_DRI.'includes/script-loader.php');

include(SECASC_DRI.'includes/contents/slideshow.php');
include(SECASC_DRI.'includes/contents/vcard-carousel.php');

include(SECASC_DRI.'includes/settings/slideshow.php');
include(SECASC_DRI.'includes/settings/vcard-carousel.php');
include(SECASC_DRI.'includes/settings/columns_options.php');
include(SECASC_DRI.'includes/settings/section_options.php');

include(SECASC_DRI.'includes/generate-content.php');
include(SECASC_DRI.'includes/generate-settings.php');
include(SECASC_DRI.'includes/shortcodes.php');