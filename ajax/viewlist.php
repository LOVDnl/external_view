<?php
/*******************************************************************************
 *
 * LEIDEN OPEN VARIATION DATABASE (LOVD)
 *
 * Created     : 2017-05-10
 * Modified    : 2019-02-15
 * For LOVD    : 3.0-22
 *
 * Copyright   : 2004-2019 Leiden University Medical Center; http://www.LUMC.nl/
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

define('ROOT_PATH', '../');
require ROOT_PATH . 'inc-init.php';

$aURL = parse_url($_SETT['LOVD_URL']);

// FIXME: Add more checks and fallbacks?
$sOutput = file_get_contents($_SETT['LOVD_URL'] . 'ajax/viewlist.php?' . $_SERVER['QUERY_STRING']);

// Now, we need to replace the row links to the original database. They are relative in LOVDs.
// Replace links *not* starting with http. But, treat '/path/file' links differently from 'file' links...
$sOutput = preg_replace(
    array(
        '/href="(?!http)\//', // Link starts with /, use as is, just add scheme and host.
        '/href="(?!http)([^\/])/', // Link does *not* start with /, so needs also a path added to it.
        ),
    array(
        'href="' . $aURL['scheme'] . '://' . $aURL['host'] . '/',
        'href="' . $aURL['scheme'] . '://' . $aURL['host'] . $aURL['path'] . "$1",
        ),
    $sOutput);

die($sOutput);
?>
