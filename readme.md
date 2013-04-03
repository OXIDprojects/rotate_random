Rotate Random "Just Arrived!" 
====================
Rotates articles in promotion "Just Arrived!" randomly on every site refresh, showing only specified number of articles.

Tested with:
====================
+ CE 4.4.8   

Installation:
====================
+ copy the content of the "/448/copy_this/" folder into the shop root directory
+ if files are uploaded via ftp, be sure to switch to binary transfer mode
+ in eShop backend, activate the module in Master Settings -> Core Settings -> System -> Modules: oxarticlelist=>rotaterandom/rotaterandom


Hints:
====================
+ Be sure having activated "Load Promotions" in Core Settings -> Performance
+ You can adjust the number of articles shown in file rotaterandom.php around line 30:

 <pre>order by rand() LIMIT 8";</pre>


License
====================
Copyright (C) 2013  OXID Community Forum http://forum.oxid-esales.com/

taken from this thread: http://forum.oxid-esales.com/showthread.php?t=1488&page=4#post101207

This program is free software;
you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation;
either version 3 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
You should have received a copy of the GNU General Public License along with this program; if not, see <http://www.gnu.org/licenses/>