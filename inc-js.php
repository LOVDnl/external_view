<?php
/*******************************************************************************
 *
 * LEIDEN OPEN VARIATION DATABASE (LOVD)
 *
 * Created     : 2017-05-10
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

require './inc-init.php';

// Load the remote Javascript libraries.
$aFilesToLoad = array(
    'lib/jQuery/jquery.min.js',
    'inc-js-viewlist.php?nohistory', // Add ?nohistory to prevent VLs messing with each other through the hash.
    'inc-js-tooltip.php',
);

header('Expires: ' . date('r', time()+(180*60)));
header('Content-type: text/javascript; charset=UTF-8');

// FIXME: Add more checks and fallbacks?
$sOutput = '';
foreach ($aFilesToLoad as $sFileToLoad) {
    $sOutput .= file_get_contents($_SETT['LOVD_URL'] . $sFileToLoad) . "\n\n\n\n\n";
}

// Now, we need to replace the calls for the VL ajax request to the new URL.
// This doesn't support the download feature yet, which links to 'ajax/viewlist.php' instead of the entire URL, but then again we won't offer downloads.
$sOutput = str_replace($_SETT['LOVD_URL'], lovd_getInstallURL(), $sOutput);

die(rtrim($sOutput));
?>
