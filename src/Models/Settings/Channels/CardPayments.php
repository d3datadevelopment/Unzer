<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Heidelpay @version 6.4.1.0 SourceGuardian (16.12.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B3834CF5E3AAQAAAAXAAAABHAAAACABAAAAAAAAAD/8S9jx12m83zK2/mIu+8nQAIi7Ib3hgTijzIqwdqi1uxfo+soLzztcyadykN3AEWsx9vzPicO1VKH2ZBVEMV9HWCLL2Ogt4KOUtPiqSginHAtnYQQEilBDyiAntUMsZvvu9UJXv7psYTRxI4eIpGmfAgAAACwAgAAuEdt7HnBKEOi5wTGgVLsEhb6zBiQK1guK4sIu6X1mMBnaXWZMO4/nyqrPnQM9TXrw7TP6v6wk91QaQul6shejXgPl3rmQbZsPbr6pqUhBB1QcyWkIDCXV0HIHQknb5oR/QCeeC/zfrfz3GwupJySxTl33AEzwMAlPARyXosVEqS8NzspbMq9YKpXpbykX10WKJl2TXsfBtegIdP3c0S/ah+VKySdMUkHJwc2adGPZYG1oO8HcKldBcbfWniZpR9C//XOP3Qm2oCdau9BVbyKELR6Yw3l+LL+7Tc474C6aHOSnJtkcIKDQhG1Earf0ojitZBr/E1WdalBLoLDMq4n2Q86Wm5Li5sEU9kCWY5++jB3II5+hrdI5QV7j+XAvd4kxvQCTYddNsdmt/2yGZG9mjgxpWFotYsfKOVJIBpVtwLtb8MbLtvnDpDwEwHVxHWsR0qj0mruePdqtxceP+fBqipLj4sirjb8UKip5GbjPT6UVQziZuBTeXv26KszfHAr9aEvDSSXqy9+Nqos4wSy6jLTXvX03ArPttPgsc0TQi8ohiWGFcCFO+gQ9jbGc/2raZGTb40F5ZRVk05WiI33DZ7XDsNtIRkcE2ZowwOdDBZGo8vvO/IgHSsXM8pNOi9tjdMrqts4Rk1Ve/64a6h+ecXT9mwfbIYmdbPhvxey7Mb0xRUcCG+wWF8iZ4mokX4Ucyd7hsn3qGPMudC26m/YFGzPNT/efr87DDEn1gqcahYhR5seXWvDlAF9rsmBPv9fwQpXqQkuvYMS+fG0cVQ05Z1Qu3NcqVXiCm0Tn8TVzAK73GA8HPOcmho0FSRAH43vfrSmoi1tz+Wnn9RVbaDhlKSDlokr+Q937EeByzEZqmBoPd/NAMXYEbZtmn25Nf2YOU0ulSmlvDWSuGPF3byoUlEAAACwAgAAUzyoXgYbAThiE9l3MkgwrL7ueHrwR2L0z50dTqtSpE3pFdifWf9RdTLDpou85qVJy7RaOKsvBy4F6AfugcIkpCvt9J4G9DdCEAW+e+bj6v/ttpu5gAc+AwK+Va2fG9IGwYTIUiKiSOXLi57q1Qp+ToetReJqN023pPcmRAraa+SjooJBqHN8VswyduldWAWNmZ9VMKd40/mBMxurhUFCedVqnKQcOrlZtItsk8y9UBq6oALyxU0e4WQDHq4o6C5oBFMsVixECB1gDQnRrlwWQyEu3KCQLG//liDVOVMiq2PtOCrOUbHtub04bJq21rjKJW7nZAPnlQ+W/Bbq1xl4HleZGcy749g8q89qe3LRHlZpl6zm286YtEL+CwmPqyC6a6Z7aL/3rqD6h9VYNyTk3NOUo1OaWaDCFhNzumxLDPvqZXzbsEuuQ38WixEPIOdwrmy/iWE7TYBYVMhbhtxxMQXZxOcdVpjEpFr18xGDUymXmmxgPvd4Qxk3R1vDk9n/89XGwIfoPCqqLmMoaKHK1EFDefQ1reoW4xMnQbaZeukWDNWhBdz37LmPP1HtvsUjpOwSXQjNUAG3227ufnR/uGdTts3zajcYLOg3Cqi3p4ghUqTtIjVnWZ7z8OR9th8CN/MKtsHGsofjeKab/UwSDIWGTLNJWPlFdOK+kzLEnp9pUH7IEkdRhaA1Cne50Ad7LwWso3325gTlsOTezjWiHhqhNprNuM1Dewn01TG7j2aCtbrTqag+MXcG+EjusUTEr2iy4LqTdsjXXtqGlW88YcD7O8Uxru7r/9/beMIvh1hnsGhE+k6ZmdhuH9BLNcWb0BecO0hgMPwV8a5ySclG8be0aQ+1dL+Bkp4/YkRc4xzZ3VL32VF2Vp1u6xfXD4Evx+bW4pKyPAEkjNxaMb63bwAAAAA=');
