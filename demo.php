<?php  
//临时设置session
ini_set('session.save_handler','memcache');
ini_set('session.save_path','tcp://127.0.0.1:11211');
session_start();
$_