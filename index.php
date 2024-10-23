<?php
// The start of the magical world...

require_once __DIR__ . '/vendor/autoload.php';

use Nexus\Dokodemo;

Dokodemo::carve('/home', 'load homepage');
Dokodemo::carve('/about', 'load about page');