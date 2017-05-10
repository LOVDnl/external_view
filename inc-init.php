<?php
/*******************************************************************************
 *
 * LEIDEN OPEN VARIATION DATABASE (LOVD)
 *
 * Created     : 2015-06-17
 * Modified    : 2017-05-10
 * For LOVD    : 3.0-19
 *
 * Copyright   : 2004-2017 Leiden University Medical Center; http://www.LUMC.nl/
 * Programmer  : Ivo F.A.C. Fokkema <I.F.A.C.Fokkema@LUMC.nl>
 *
 *
 * This file is part of LOVD.
 *
 * LOVD is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * LOVD is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with LOVD.  If not, see <http://www.gnu.org/licenses/>.
 *
 *************/

if (!defined('ROOT_PATH')) {
    // Set ROOT_PATH to this file's dir.
    define('ROOT_PATH', './');
}

// Require library standard functions.
require ROOT_PATH . 'inc-lib.php';
require ROOT_PATH . 'class/external_view.php';

// DMD_SPECIFIC!!! - Testing purposes only.
if ($_SERVER['HTTP_HOST'] == 'localhost') {
    error_reporting(E_ALL | E_STRICT);
}





// Define constants needed throughout LOVD.
// Find out whether or not we're using SSL.
if ((!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') || (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || !empty($_SERVER['SSL_PROTOCOL'])) {
    // We're using SSL!
    define('SSL', true);
    define('SSL_PROTOCOL', $_SERVER['SSL_PROTOCOL']);
    define('PROTOCOL', 'https://');
} else {
    define('SSL', false);
    define('SSL_PROTOCOL', '');
    define('PROTOCOL', 'http://');
}

// Initiate $_SETT array.
$_SETT =
    array(
        // Make sure you fully trust this LOVD instance, because we'll be loading scripts from their site.
        'LOVD_URL' => 'http://databases.lovd.nl/shared/',
         );

// Complete version info.
if (substr($_SETT['LOVD_URL'], -1) != '/') {
    $_SETT['LOVD_URL'] .= '/';
}

// Initialize.
$_LOVD = new LOVD_ExternalView();
?>
