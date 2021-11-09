<?php
/*
99 Desires is program to list and manage your dresires and dreams.
Copyright (C) 2019 Matteo Giuseppe Bersani
Email: mail@matteobersani.com

This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with this program (see below). You can aldo see http://www.gnu.org/licenses for the original text (GNU GPL v.3).
*/

$content = $_POST['content'];
$lang = $_POST['lang'];
$file = 'content.'.$lang.'.txt';
file_put_contents($file, $content);
?>