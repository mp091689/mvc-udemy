<?php

Config::set('site_name', 'Your site name');

Config::set('routes', array(
    'default' => '',
    'admin' => 'admin_'
));

Config::set('default_route', 'default');
Config::set('default_controller', 'pages');
Config::set('default_action', 'index');

Config::set('db.host', 'localhost');
Config::set('db.user', 'root');
Config::set('db.password', 'pass');
Config::set('db.db_name', 'atm');

Config::set('salt', 'fksoy74mn2ns95ld');