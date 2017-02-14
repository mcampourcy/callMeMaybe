<?php

$settings = parse_ini_file('settings.ini.php', true);

define('PRIVATE_ROOT', isset($settings['url']['private_root']) ? $settings['url']['private_root'] : '');
define('PUBLIC_ROOT', isset($settings['url']['public_root']) ? $settings['url']['public_root'] : '');
define('FO_URL', isset($settings['url']['fo_url']) ? $settings['url']['fo_url'] : '');