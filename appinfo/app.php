<?php

/**
* ownCloud - files_antivirus
*
* @author Manuel Deglado
* @copyright 2012 Manuel Deglado manuel.delgado@ucr.ac.cr
*
* This library is free software; you can redistribute it and/or
* modify it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE
* License as published by the Free Software Foundation; either
* version 3 of the License, or any later version.
*
* This library is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU AFFERO GENERAL PUBLIC LICENSE for more details.
*
* You should have received a copy of the GNU Affero General Public
* License along with this library.  If not, see <http://www.gnu.org/licenses/>.
*
*/

OC::$CLASSPATH['OC_Files_Antivirus'] = OC_App::getAppPath('files_antivirus').'/lib/clamav.php';

OC_APP::registerAdmin('files_antivirus','settings');
OC_Hook::connect('OC_Filesystem','post_write', 'OC_Files_Antivirus', 'av_scan');

// add settings page to navigation
$entry = array(
	'id' => "files_antivirus_settings",
	'order'=>1,
	'href' => OC_Helper::linkTo( "files_antivirus", "settings.php" ),
	'name' => 'ANTIVIRUS'
);
