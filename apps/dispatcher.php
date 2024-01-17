<?php


function clientLoginPage($msg='Unauthorized') {
    Http::response(403,'Must login: '.Format::htmlchars($msg));
    exit;
}

require('client.inc.php');

if(!defined('INCLUDE_DIR'))	Http::response(500, 'Server configuration error');
require_once INCLUDE_DIR.'/class.dispatcher.php';

$dispatcher = new Dispatcher();

Signal::send('ajax.client', $dispatcher);
print $dispatcher->resolve(Osticket::get_path_info());
