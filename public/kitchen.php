<?php
/**
 * kitchen.php
 *
 * @copyright   Copyright (c) 2016 sonicmoov Co.,Ltd.
 * @version     $Id$
 */

use LINE\LINEBot\KitchenSink\Dependency;
use LINE\LINEBot\KitchenSink\Route;
use LINE\LINEBot\KitchenSink\Setting;

require __DIR__ . '/../vendor/autoload.php';

$setting = Setting::getSetting();
$app = new \Slim\App($setting);

(new Route())->register($app);
(new Dependency())->register($app);

$app->run();