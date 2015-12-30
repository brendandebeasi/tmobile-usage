<?php

$config = array();

if(isset($argv[1])) $config['username']=$argv[1];
else die('No username set (argument 1)');

if(isset($argv[2])) $config['password']=$argv[2];
else die('No password set (argument 2)');

if(isset($argv[3])) $config['out']=$argv[3];
else $config['out'] = '';


$ch = curl_init();
curl_setopt($ch, CURLOPT_COOKIEJAR, '/tmp/tmobileauth.txt');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_3_3 like Mac OS X; en-us) AppleWebKit/533.17.9 (KHTML, like Gecko) Version/5.0.2 Mobile/8J2 Safari/6533.18.5');

//Get initial cookies
curl_setopt($ch, CURLOPT_URL, 'https://account.t-mobile.com/oauth2/v1/auth');
curl_exec($ch);


//Submit login info
curl_setopt($ch, CURLOPT_URL, 'https://account.t-mobile.com/oauth2/v1/controller');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, array(
    'requestCode'=>1006,
    'combination-email-msisdn-username'=>$config['username'],
    'password'=>$config['password'],
    'checkbox'=>'on',
    ':cq:captchakey'=>'',
    ':cq:captcha'=>''
));
curl_exec($ch);

//Get Data Usage
curl_setopt($ch, CURLOPT_URL, 'https://manage.my.t-mobile.com/Services/Account/AccountService.svc/GetAccountUseData');
curl_setopt($ch, CURLOPT_REFERER, 'https://manage.my.t-mobile.com/');
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'X-Requested-With'=>'XMLHttpRequest',
    'Content-Type'=>'application/json; charset=utf-8',
    'Accept'=>'text/plain, */*; q=0.01',
    'Accept-Encoding'=>'gzip, deflate, sdch',
    'Connection: keep-alive'
));
curl_setopt($ch, CURLOPT_POST, false);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

$usage = curl_exec($ch);
if(empty($config['out'])) echo $usage;
else file_put_contents($config['out'], $usage);

unlink('/tmp/tmobileauth.txt');
curl_close($ch);