<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.2.7.0 SourceGuardian (13.06.2023) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2023, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B3A9E09E5DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/O8yHRYhtT6Pd6RNV2KheWvsM9SGJj53Ky/yF6yzdh/j6wqydtjwCHmtunaZbIN148FFWJ2Sukv42P2K3/khaMWnmtgmubOwp5SSmiLTkmDTndXwcibVW0/To2z70F4+1IetgnlPP2ToaVtz6XgJ1EQgAAADAAQAA9pFiBg0SH7lxn99YGpl5xLLvsmT0o1FkTqOlwbKPlUTSotVMiojzShSE/nPCV9fEKA56CC0ei5tJtMbYo3uDkwSc2leCskjg74NUq09o4T6mrC1ZwcweM1kWTtUht6wNz1vNafLcSOlUJMXRB7joheMiU9M2D7Q47aMFyo94EmKa17nJSlihTAkoftkdx2At6af7JG+EzZ946Yn3UoDhobfHpqsTKaTV12smhGa25DyVdi3qzi4+A0u5WupvqJdnkOukrPQoMIHoMRRjNhny+uTGGymkpPBVut6ozdjBTp54MZ2/h6/BIgwM7v8bQievICM/ZhyoE7rm7YCNl2TA1h+YrV5ZyJdWgIig/99de8qiyqT2f3WatX1xVV5cInwERuLhxIZA8Z1CNmwbZpqpoMnz1O4RN+1kpkgdhi0sBobgLLv1/gIdIw4ehQm/b8BZ/3124Jh4L0Glx09QXjoxOJHPR6RZMj8BhrhNQ4CePUPNqYMsAMn1gr21I4VqrLaYjpKQJ3Z93Tw8jhcYzK3OWZjaXn+a1uDDo80yEVo1N9p3KKCnr8AH8K9wa8VNA6gfyME+ga8iom7o8D097h5221EAAACwAQAATwjxeLNmbYN1SbdlrSxFiH4wkVICmvEm+YXkJngrbiQHOby+tT90Hgg8RbjK7Zu/X6PBnSRcQID7m8nqHH+VZqf0VEmLdyntw7a6vTwQCR+7XVB+fp4+oJS6vGBKx+5WzpaJGwmI0XqoCovr3BFTR/RZ3B+hj0phQs0SCSsRXaTpGdXsZAsZAtVM/pbt9h06IhwSgdep9d16a98dtHGBEbWRxfTjQhle5ys/DMN5HDsqae8Zg45wUrAX2r33RrnkA33iNZiU1yVpzWlDJ2ubxbGpamS2hlFbh37+oBNKEbRojImhjxDQSw+x8mF0N9br1D1MEJ2hsnBqlmt/TR5v85qRfb0h2eo++8kgsbpuBnOXua33j4vqcjKEqmI2xFU12tqQcMy3sdw6C5nOKjCq9k+II9oCNqcfoAOe6TQfGxOGaTbvLctzi6TCAXGCinvGLKMbtMp/UUVcrWE8cq2/MVf1CIk2DzV8Nm9FwICPrDQBCY9QY6DrYIJJXpYrDvGWuJjv5RRRCGBYUJygQ8TTFPlllgU23WoCsAdpOha2bv4d0t5wPx2Wxfcqe4ErJ1+fAAAAAA==');
