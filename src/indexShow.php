<?php
require_once '../vendor/autoload.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


require_once 'Show.php';    # no framework is that way!(1 step~)
use app\money\Show;         # no framework is that way!(2 step~)

echo 111;
var_dump( Show::showMoney() );
echo 222;
var_dump( Show::lostMoney() );

