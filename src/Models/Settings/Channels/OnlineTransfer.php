<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.0.2 SourceGuardian (22.11.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B371E09E85AAQAAAAXAAAABHAAAACABAAAAAAAAAD/Q4g0cyIi/sxLmxa6VgZwftI0QlqZoh3sLkQEVOE91lYK4pcg/LnWOD8NX5iQKgbCNlR5EiNPniQ9B2H4sI/DsJ2SAQqpeo82+cYU2/uZ4+Wxi8MnEX18bTyUgP0ELSlfHEqb9ahrh1PwrNNGAGrfzAgAAACQAQAAv6kI5Dk6joql6rLT0hy+UNCmHbE39ol9Z7nkjJPN3b05ERiCSEVib1h9IotrC03zulyF21GxO1ey5YEtyl/egaNsfkyXw2ZfaOxCOO+aLfIlplocTJ/jK7fQIHYoD0MkxBsi8VDxvRUbjWWvBB5U5DTZcRJS9dMIzbhK+RZ6yI8iZzHz5sHpItESOpvSPTnp4Kle7lXCICdzbsNyQumCo6TmGNG058L9WV9UN5oqTQOZtl3qVHRE+nPdDXVJ9biNZNnjlT0RYXJcs/Ofsxc7p9L8ZHFJGANl+TKsguSqk9PWxRmejOlAB0nTHOnuJXXkIQtTOwQE3uTmIfwm844AHQiHr6SZwZts9xJFzzzzCYkoBRLRjqib/xLIydAmrS5cNxr/T3TehRkPIJRq33EDIxfNfsj51NEsqXj2PchZIk1eCK+WNx9XSebMFgVoka8nZ2OFsRKqXKge6aibzidL5ABEo1LAZsAw4xqA5LOVgd+vFA3fqJJt4VH3BINX5G2Un2+yGAmqxav5DL5Rx7KGuFEAAACIAQAAQidFxw/2RS/aawRf3wcTBxJT8odypn6pMzGeTLYRv8ClKjOO0k5kdiKvmGDlMK3AxINZbAJYRLUMOLCsVb3O649//P7lGt1YL6JGshVj0NHY77a3wRbZC/AjOGwvooAXSXjkPmssTxqACIgbLuaWUT5zmPEhMRTc87axZMla5LQpKfH+8gI/LFV7a0yuL5NvZgDWum0gQqwuWUexeghNYmm50rpVCFIXT6a183iEZEylR0djdeK5uTwGwNbkNDejGATZ5x9GeiLD6jNO2tuVB8ak59/lMFOCx5Ce0vRtF3EIWBg20HeY8DcqGlgyF2kmVYsdx2EFgzOGZ6rZMh27a0RTigUyiDFARelMXiicHIipQNpb9hSKN8KR/bCFP9fuQpj1pqJJvcPnQhgFbxO1rL2Gll2O5XabSEajTYK+vQuwhxDB+PKbokiTVJcs1+r78Kp3VTE+02317QFkm7xtFpWP29Uga+t6QJLGV1Yiol/Fhvc9I2izTC4hIH43ctbWlpko9/t7cYMAAAAA');
