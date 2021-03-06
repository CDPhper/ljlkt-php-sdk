<?php
/**
 * Created by PhpStorm.
 * User: lpeng
 * Date: 2018/8/14
 * Time: 15:42
 */
 
require __DIR__ . '/../vendor/autoload.php';

use Ljlkt\Exception\HandleException;
use Ljlkt\Utils\R;
use Ljlkt\Sms\Sms;

HandleException::init();

function initSms()
{
    $c = [
        'name'=>'13730692976',
        'pwd'=>'7696501E54AC6DA25DC91E6469BE',
        'sign'=>'【五弄云教育】',
        'tpl' => 'tpl1',
        'mobile' => '',
        'data' => ['verify' => '2342']
    ];
    $sms = Sms::run('duanxinwang');
    $sms->initSms($c);
    return $sms;
}

$config = [
    'tpl' => 'tpl1',
    'mobile' => '1354076',
    'data' => ['verify' => '2342'],
];
$sms = initSms();
echo R::ok($sms->tpl($config));