<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.3.1.0 SourceGuardian (13.06.2023) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2023, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B399E09E5DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/OQ0LXIvr/SI0AS2HdVcaQS7qmjU4oLmUZi7fXzwrUgMLXgVz0LVFNFPs40HrGUWTeRSvaKs1rbPTj2QKCBjHJWBhvUaNJHwwFW0gQui6FQ1/i2dKtWlKC+ej8uOsHlJ9SkMMv88k3oAvH5RDX+dV0ggAAADYAQAAYo2jrRsTduraA9OepmnYH49JRfveCIyope0jLmlbnIXrlKu8tyPkjV8EBbtpbTJu/NPU1D0vv8aN2ialsiXtuFiJyePyHrxxwQ+B2n0wkhi3OslbG6ZASMkqdK7NM7BcJJe0FVpQ2aRLvNRamKuRpgUGp93oqfk2M+5/d9FkTWvFNazZnUq13/djtrIwYALddaomGb11rmyB1++OCuppki37fbZjTHyqBNqjbhDtzpDtagw0ZmE7sgG7s2C2wE/p5hUN7pDR4wSaPJevBIp14toWgHPDZ9AkdlrVn+AqU96t3Q9drRuJjYNUDaW5LizOLaJ9IAxCG0n6O63dRj4xwWky1t9phVJ+fZfq55YH9YlQ/bURHmaVe9Su3nZoJkEnINhoOLpJigPQGHufenCnMn7U/fV3tmM1XNjetX/c/fJFik3qPdwpq8nkxG9WxZuYnVrE9stSgYrO/l4fb2Kf1afuwR6saH1nECEkpKxVlCMAfPeHy/cGJYWQyYyp8NMDYNV4s89CHY54/aISs24QkkDo5mKafjZqGPS+tkTetZhHDASpizZJmONaTTrTbQ2xem99lopxTV8YHC7icbrRYNOO/kydfGXjGPVmz1pT0L3ihNZDSBGNoFEAAADQAQAAQKZLwevM+qgBJyViAWNeivxrRHgSd+3qx7YPlb4lwJRbUIuGJ5uNXd6Y1txG/3kN7V+Xir1yqM4JQ2aMpFdLRcVhZIPWZt2IGAvH86kisWySCMfb/AjlqX47QkF3YhjhCjvqswMm+pR/zu3PchUQuEGgVqYn7Ug9YBUtUovG8Ee8KBtuDJL2x+rwDat5Es/UDCzOnvK2PBZa4/GBz7IyKuWnUb4JiRG6zfEJucMWGARSM3z9tI0WWW7Thn/pURC0Z8Um8NzETgLM8T9TjEOc65AHRjKlReK6qP2Jks5lJnsKCPZYNZh5F7Vji49YSIg2f2LSN/Zcamrl5UZMNNPkm4CuX5N8rcdaZYzkWBc7s+ghexXCQ3d5RFSNdCZaBhcf89itVmDNKLg+j6G6mClZGlnOU/NsYeuL1Yd858SdJj/nGzKxqVMK64tAIqtlGxHbjTjZIPxoCk7AAfyBD0E/xyKerBXxRH5xbL/JMeZTCZtTKBQwdbEid10AggwAMn71mHdiGmCMGuYDTJZn5ERjuKvb/RitK10eQD2L3IYS4okoeXChPhqwZevi6O0quZbgqolWWzmtrCo+SxPWNBNI6Z/HiCHGp/kcLh5aBOR/rFgAAAAA');
