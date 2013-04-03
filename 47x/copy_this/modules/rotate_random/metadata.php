<?php

/**
 * Rotate Random Newest Articles
 * Copyright (C) 2013  OXID Community Forum http://forum.oxid-esales.com/
 * 
 * taken from this thread: http://forum.oxid-esales.com/showthread.php?t=1488&page=4#post101207
 *
 * This program is free software;
 * you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation;
 * either version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License along with this program; if not, see <http://www.gnu.org/licenses/>
 */
$aModule = array(
    'id' 				=> 'rotate_random',
    'title' 			=> 'Rotate Random Newest Articles',
    'description' 		=> 'Rotates newest articles randomly on every site refresh, showing specified amount of articles.<hr/>
							adjust the desired amount shown here in rotaterandom.php, around line 30:
							<textarea cols="80" rows="2">order by rand() desc limit 8 $sLimit";</textarea><br/>',
    'thumbnail' 		=> 'oxid-community.png',
    'version' 			=> '1.0.1',
    'author' 			=> 'OXID Community Forum',
    'url' 				=> 'http://forum.oxid-esales.com/showthread.php?t=1488&page=4#post101207',
    'extend' 			=> array(
							'oxarticlelist' => 'rotate_random/rotaterandom',
							),
);