<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.0.2 SourceGuardian (22.11.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B371E09E85AAQAAAAXAAAABHAAAACABAAAAAAAAAD/Q4g0cyIi/sxLmxa6VgZwftI0QlqZoh3sLkQEVOE91lYK4pcg/LnWOD8NX5iQKgbCNlR5EiNPniQ9B2H4sI/DsJ2SAQqpeo82+cYU2/uZ4+Wxi8MnEX18bTyUgP0ELSlfHEqb9ahrh1PwrNNGAGrfzAgAAADYAQAAN8FFeD33fj8NwP2RQk+W6MfpB6Rm8hhu22qAcgM9KN2yY3b76WROPGkO568k0lAld1KdJr/yU9gjEzisowRMRWlgEWmK1n0ndDBzn6Q2b9BEJlarxYvEmS7GLnJQsEQKq4+kjzZc1Jwwx1Hvacx7d0MRYf+1KgGnFpRJw8cPQnPjIZSDzaMaoLbDp1MvwRiFSgYExBB6nnxoXxy877631pQGGndaS23RU4G72hx4IAPh14KImurfjvqKXAe3wrimJ6kNheli5YK81RNHGiPtbUWlnxyTReLmAfzYNsqBOnfEUcqJipfxUq83FxUBzdp/h0qpShX9XLRXaiRmSrfLkD8sC80P3Jw+L92sGy4du8fuuEv1q0hfg/JWBUQPtdAKffrex79C+coIK1xsMc69jaIL+pgmKgQWLehuhvk9bVmQrQdhWGfLvOgA69VRMsPAm1mxEBfJLruhepLsNWO14SUWkcTB7cnmoEcBrUSfwqJIdvxtM1tk+GMNqJz3v6J+IGbP3x1nmTfbIcq5UH+3w9q/fi1+hKSwuFkTdqCMwVSrCptUvRJhJK2x+552f2DuqDufXi9m7c6aZSaVsWuXUBsADrBzkZkYaqMNExWrQN9FY7ze/3v3/lEAAADQAQAAYaiMVIUP0n5dLAoy3dm0GrAlpan5QsPXTUtGDz6r0Tm6/+Bb5ZceUvkTedwyEWYdqfjQbvikfGhGX+moU/l/bgaRhDCDBSzWSSvCy1HKa9vGha3Dxv0V1MUMJE4KVn433Qg+NRBQH8PF8PI4t0gZ9ne0rOcwOn1Lw9mGjI4CRoqU0kK+y7MKVt6kf+DMDPHWlkQL2fEvoXKsqg/Tt/bwCESRJUgIlt97jbeK/AdqUE6bcB6UbRAYItXUD1T+QXSlDG8phrzQxA1vMCIBGOSMchqtW41nePn2Wr0LLlRM2jy0tKw8fQ5wdsJRmEMmduYTLohPTb3olQw087hec6QFgLSFWMN8Muj49fr1H9u/YN4xCHnXXyomDHDzbYpMW0xECjiR4aj+Sz49ERORciCYj4VI/chhho6Tgst2odu2/qBBUIYroVnYrM5sWfaDz6NDrWl3K7CbjRH8inYJ91LyIEbG6oy3T+/x780Xd8NbnIN9RZYY6eOYEnNDfMhDcJ9yJRBFCVC8YqGYMsIUjmCd+MqBL/FJtYp0uDgahr17S2csPlt0yAJOPcVi7efmiDE1VI01FAmmlNz5eEsigo4R8WYFGdOlhWdZthBpAurkTboAAAAA');
