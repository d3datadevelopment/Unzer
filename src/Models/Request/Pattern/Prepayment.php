<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.2.6.0 SourceGuardian (04.07.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B35DE09E25AAQAAAAXAAAABHAAAACABAAAAAAAAAD/7cD87M3Buw6UZJnnTMZ66KhjUge1B7Ur+4aoW33ChHqwSujAzEy6uNuC1g3PBh6HbuYOl7LjwcDQTimOrI/PVr9t479lTxnwNOBHP+jbEY+nPoeLWn/OY1Fpc+5SprZY6CW3B4WAOwxl5BOL5+63WQgAAAAoAgAAmt3sMkORQfzMItDp7Cf94C03H57twbuh2ho/0uRDrGHM4TaCLSrmnWO1cWnCXuc0N2cecSzRHobKmYa0n9s299jYrPBdDOKFDNe3Ds3WG2/QkCjmw8hVRqOxqVAW3eR2CrkjCDuQXKNPw6RbH/a4bKzUkoqFNwcZhiJc174f5FqMmokhUOsnjMcVT7Ci33PuZkF43CZMklGXn8tnPRKuYLKyprb3d9hdPpl9PSrOlPy1d17X3rkfXXnWi24q7PB/BfRCSyqI+tMQKzv9Vrrn6SdenZXblnjndyz4/zUfx68ZXx/7hBqgxEPG011dXI+djjaJ57j280Of69HmjVZEwvnj9zz+uFeEbUkGlS+3Wb/nrVLQkGumzwZ3E99iWb2/JyHVq8E+enEBjbmPDwLImu1rNeprdyswvefcS2ZKKIVRFT5Yj5LT7wfMWBLlUlzVYdTMOB3Uv17A0EE9d/QQV8af0fLaBtM2hg5M/b/tVgbcVRk0KsArHqX/OYeBQ5MSGofJoZrdZ7nR/yd2KqC4gxCCPzKXyLgMgzzLjMDlQHPMUFm+6B2qjQWgb93rl7E/o72Wrq9SK72sh1gMDGVuIdOLT/nlHLYIjMOo/FEW64qp4QB1RsE+xowNtx4ySETva80wrrxqCdmTK4g7fTC6X8pHPXxOM6HtINwx41za1pZ242/xyvyV3qqYXA6k+PoPFJ+VSAft2MaJIDLZbXWuSiHFZSIS0bgmUQAAACACAAAa6J2MYztN2aNdHeGJ2oCIfSLhh+XXJTaekuvY7IbdqW5HNaX2Nh+fMU8r97YB07hA2PLYBijE/4k1siUyQdeq/WXofpk3mPQO8gGeiczHysS/fXhQeM20HRqJTyv0yWcqfryOdSMJWKt9ZwuvoX7YYmvWe4+BgIM0EVr/8YajAsa9A8tfYaGqdPpb/B29jhhlJE0FQWGP0nKfAMswiX/p53xVBMEQfrRATQ7/9d9ibV2RXWN/IO7BHXVqx76W/aCKEsL8Nl98VrSRrBUyw4Rht5q9jxAD36gybdnHjrjlsfOrHlXeqFKTb4YBDODESNymjTBlvoZz94XOS99ky1lOqFRslv6bwMYc29cKpjTSZph6mkxRiLTcRB1sjVYtS2zKaQub8P1kxffxRDwixj4djlP2yEkVyRQHGQAK3HiX2y8+5fCZV6eYjtzyDl8jJIIWXmtm0VQzZnDdFyNs+u7URnsuEh/+Ak+72DsXKTgt4ufLN7hSLwmUHL/6VtIw7n2TXDr2N6I7zVNIRamn6Ru8AC2Z39p5rASzxOHrz+BxBj+Td8v07tHytsFnBW8JPZrQsJuCpiYxQmCW4tkW21QECJPY6ltopAFgtCQ5JYVxKhUlkAQlJMyvkEVwMi2Jb7zTgqxI4GcFURKamWrHTOEiKSWVxiBTL00tzeN4BcQjT7z+4uIjXLpvTDrmm3dyoCB+uOweMtLNXNFE4qt1cYv3AAAAAA==');
