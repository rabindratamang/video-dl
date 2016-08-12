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
$url = 'http://video.daniil.it/?url='.$_GET['url'];
header('HTTP/1.1 301 Moved Permanently'); header("Location: $url");

?>

