<?php

/*
Copyright 2016 Daniil Gentili
(https://daniil.it)
This file is part of video-dl.
video-dl is free software: you can redistribute it and/or modify it under the terms of the GNU Affero General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
video-dl is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
See the GNU Affero General Public License for more details.
You should have received a copy of the GNU General Public License along with the video-dl.
If not, see <http://www.gnu.org/licenses/>.
*/
if (($_GET['p']) == 'websites') {
    print_r('Rai, Mediaset, Witty TV, LA7, any generic non super-protected website.');
}

if (isset($_GET['url'])) {
    $file = __FILE__;
    $url = ($_GET['url']);
    $param = ($_GET['p']);
    $cmd = 'bash /var/www/video/api/api.sh'.' '.escapeshellarg($url).' '.escapeshellarg($param);
    $message = shell_exec("$cmd");
    print_r($message);
}
