<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.1.1 SourceGuardian (07.05.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B3FFE09ED5AAQAAAAhAAAABKgAAACABAAAAAAAAAD/OFHPtCsUnRhW0vA6Lr004yoYwGM+u997/goLcReG4bj33RHI+6iBMViSqvTy9JxmCt11IsCEzBjpQ1tydys6Bp/Xo5dpA8bFUzJiQi7qAx7HA1iudTpvVIx5OA95KJjJRAhhpO/wjYTKp2D9iFkcrsrN4DB7HY0gFOWIfDMQRYLqOPuBx+mSxw6QikOqn2ftLJLRxmHagUnRJ9gUDHd7XWXM3C0M6I6DCAAAAJABAACopz854CSVv6mUw9UYXPjLOUbT9nH2zXBJzHfqV1Cvbs7t/IyZWcxfb4MvumUbHOYuaN4Po4x54ojRq2d9TeiWr8YaHUY0Ifom5U8pzrgTtM+3t35OAPSRv5mPgm12/nuGGUshQ7ep3DVwfq7J0B9OxQvmY1O7rZ4Cq6cAArZnQLSG5y6taEzinUb5RmZnvLgSA4GDVCHZbEzspW2UK+skrcLw2x1BL5lArm58m0Ehj9tIgPUCv9vOEbhWoMUvTCZqYKni1Tj2WrinC5RGaINo38/lAD7BPiNq8iuEEVcKaXczFRMtfPgcG8ZEhvuBR2fUvAP0DhmqQwFbAIRnKS4PX1cmQK/twWFVXrRUUiUgot8Hl6XtGMzjOtUtq9jyziGLYOwDvQGDCwLPBargSisp6S+gdjy+Mg0etp4TiaZTRoZVhTuAhr47lXCys9IBt+apuNeh0ChZb7NuAXYt/NV6oe3D3SdcB52W9JCWY+nlUnmenO7r4aaQLkg3UM9A5uhRY5Xeba2R56ruUBGXj5IeUQAAAJABAAB9hSBy16kV8uOUKDZK9hshvf+FpDTP3+5wqJ8hjOebZTDuz3V4BsfbWEVaj1pdftWQtUr9W8cKTHqnVDFPMq+HcyuGX5cPItXoS8irnjl8QslG7fOCOdZd6UAVZp/QaRr1CysD3QwFXQ1NYehqNKNF18uvrpBt+V+hkuQC9pAfz4/AapvuEa6olGOrDsYqZH5oUSkotanVWIo2acmWEWdEhSSaZGduGelpIxkIQnHeHLiFQaS1WzpxImWFk7YWo+CO2wIg16LoCSgAJ3QQwNZA6KOxn8q3T6LUzD7JRn0iKQ15cYc+duLmPBobye7jUgYWpvm3S3Qxx8yoWTQvnr6FkVnI/O+q8cnV8zsu7EdCqjDDjnmR9/E8mO6Km+OHiQqv1FeNMpDhyU64ky7/9qlUt+eYMmZpXhGgBpxRRLRTjSIh8ODjPc+C0rjYTa+H5eHPAj5oESMPK9Qu6bYPgLNGZBQ8WYbMnAB9xw2xgLp/6VOeaZ0bQQmYUsJjiH8rN+CIaF3cgTjRC+PWDze5So18UgAAAJABAADhXKEiqG6FvhzOUF2PgDCKJOl55wkdruWGPAHc0CgSzqU3qB9uHf1XK3kSc2cnKNtLWmiyXH51JfETjdgOLBPq2i2dIBAhvCl9a1ORkU++PkWMqsJSz9KjdY4fnR0ioKsSPLb3kfz3ZVMYHE5MApilVSe7+3SZOcIVc0OZcKABL26+bo/FZJCj6fsGXmmDK6LhrzRVPSIaE3Eg6ilhE08Y5zClAvnQgdsYy6wpxcvAvvr41jVNF4Hy/AjpVKt/+X1T+UYbWje8QPTyfegis39gnikg8GX/Rvp9aKC5V5lwZmE0vwspnG4bQeSjJx28cxlHlWekzv9RYG/09/jyB/FYvIUZaCRRzx4PVmXHC3k7DO7VBWf11hQ3d0ZLdT0WrqcS3QVZ1Kkgu/tDn4cQbh0u567h5KcI0mUbnBZTCym6W0Boo0/dD59Kzswt8j65hSRvvn2xV5T6bM61OQZ7BR/9Lb4rkaN8jHW5GbXRYpRFBPBtIMtejh8clz8THV/4vSS5e2xrp1ouDUOUq7zNv0XIAAAAAA==');
