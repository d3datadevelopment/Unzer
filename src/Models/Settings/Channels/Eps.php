<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.0.2 SourceGuardian (22.11.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B371E09E85AAQAAAAXAAAABHAAAACABAAAAAAAAAD/Q4g0cyIi/sxLmxa6VgZwftI0QlqZoh3sLkQEVOE91lYK4pcg/LnWOD8NX5iQKgbCNlR5EiNPniQ9B2H4sI/DsJ2SAQqpeo82+cYU2/uZ4+Wxi8MnEX18bTyUgP0ELSlfHEqb9ahrh1PwrNNGAGrfzAgAAADQAQAAr/rs5NtSYe/B1ESV+lje5o+a+dJaDtMmzj0u5jagHiu/aQ0KHKKXWrPViUudWwSj5mt9EIslRVIDD0WU+u5osNBe0pE/30LtEVzUnHC0b/NgfcEtcdhww6sRc+YOC4w7z1IFUkCp8Kg4cEFthXRvO4NUsdZDII5nLu1nRMn27x4OCGH3XF5t6wAwN1vr3P+Z8OXcnwtfiN2fBsE76it/QtOV8g2a+aq3seWjlrkt278GJEQURuO2Pv1GSQZi/ou/p1Ymn7UiMKFFDRjn/YF6RGJbJMTau9YNkyxPpz1p14ScpVj2iPt/3dgrdFfOlPAZ68wlYYv3BoH9Dpv5mlyWSbsyeA2TJJXUPGZ1WaIyIBvLYNsHgjH7PO4Gc0pWhGADgGujoQ8otNY/4oUt6XlS2wZFDdFwtAhazAB/V9lULoelv0qw86huPxxTOmrP23g869BuSv8SMHO9jV6mD4RyhHgujzkSa5X86fkcpmHQyo9NVM/beoKRJK5qkcYTri+xsOBt0/8Foz3cG2/CUstz4ZXFKgJ/Vl60lofO16ff2sTOKPl4wDXIUj6UH8BIL44ua4v/dyKbfKeiQn6Tcq52Z8JldF4MnIK1naH6raDh4/dRAAAAwAEAALCXgO9jXvMbui1d0yfxjwD6CuqKrqm7+Ytr2F6fXx8vVfqVFROcVgZE6b1ZzZtR/vtL9XO0WCFgQ2X9RdLI1aYCC71f1vys032oUq0xl8C9phuxtEAcO2IsB6hS1LRXh5+0sh7aCKhQbhoRnGqQT0rDMQwg5kTAkn8t4Gff5M+BWGIIVvTqO3T5da1Rl1tMrOi7x3oRQl+Du6AR7sg5/Ae8JktivkR5K+FyBqHe0LAOmF+aB1kY36Ob3SEPLrRpaMDhfJUPJRf8TVFQM2Gt4GHKFq034XVk+X5H5OVhV0FCIvsfGYeFQyfs+hpmkmGG239KkR2SsYRcan1c2/kZphnEPRmh5xFv2lM2WOxdlWJkDwMsW+Zesmsofrnx/6Cgd8o2fIwAmLs2YRWd46QaSiGTyYFbHIHRcu5H3iZ4JKm9PiqlLe9n7wrWRbW1rPJJq4qmmsUXy6yXd32u1hmlxdFYnBKgl4Wu0pbAxb0jaTvSaZMy6BvYNkOsZPbAX6ItIe5Zis5bx7etSiVf8x6ZmXva5vFLO2X4xV7s00gohmDqEMh3DwLMibZ0BnKAdywNH4LgHfXpVMkFc5A3mwWiXZkAAAAA');
