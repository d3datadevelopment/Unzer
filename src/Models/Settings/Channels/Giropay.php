<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.2.0 SourceGuardian (13.06.2023) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2023, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B3C1E09E5DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/r5bIHnr2ZxZEBWAKG+olyQkOGu/lkZiN1I/njxHwyeSNsMrMnNUWWE8OKT4ZTQcEtpDeI/TsGH13kb7v3kdQEzGiButZwj6w22uxWLIFGikzsjtyYxV10hANafy0lmhMWT5QvJykoKUiDKG8BpHwgQgAAADIAQAAlYILFkaIUdi284EcmEj3SGBROXpjJzpx5BwbO2Di2Fk18kZNTSLRX7/PG7DstEaBCAJLE1KWuRsIZQr80knREVhrcgYNpYHTrm7ZNBWGUgOKHMFQvQmZ3gFEgyMVgxbGiUdeefMtW5yfB7fn1Heyv5UY6E3uXnCFvsYxguQ1YB6sZ28MmRkBvc4URZgDh7JXP8Vje0DkuAVF9kzX2+6waLGBDmbM1f9Ri6D80drgNQusMl5NXB4W+W3Ln51k+Oo8gRMKjEK/tSctbBqHPmOFZKsEL+qP7pYJTDJ3w3IJrFtsCYaMdyws2VDcJ/NzxnlOe09TNyLk72yVozpaN+wJ5npq63foIfhfvkHx8q0bYNPRRpgMlBFVxhpOzrhP6WXIQE9Vx8uhgl6s4ggY8v9UZ8Iq7wEgNvKh5sva4B/uiJkvl5sv0vDQZH2Ca/h54A3AshpWfkdfOO7WiUorzR792dRQwurbYE0ERsa19w1E65QPVb+saZh4eRLpGrlMacxx3E5T2YbY5Srs26x6Fvb4Kfz/czEP59e0sfhR/LZQE+qQJEE+Tn6fN41LFFLwsEFdxZoVLAF89xuP+MHqitECYCfCvIMMaLJEUQAAAMABAADEs4vpw/4cmYZ1m7iz3YhJ+iRIkeFP6Iu7+8COV1Qp99IXMgKV7rbtwaKm6JsVYkSt/qkqRf4KRDLqeIQNbbr2siAddJmmvDgTr3yk9Eii2eZpsFDYXPWiho7AvoLaqj7DHVfDJJsuYbp1zKPK9Mc/EN+dsUG2r2itVJyEq1ZYGkryObEdKoXhaRLSPTcUkwMEVE9FqtEBBpB0t6hCEGoc+v+heBPQ5t3tcg4AsEYHCmqlC3VQaTReRlQ2D7Yz/ylAsAxXidd3j+YngqZpXsfaCZN+UCPYmdsJ6U9X4EQVQ2nV7oR0Er5piBIqzsA3Ht424akj+W/ZP5zzXU3HFtp/6Czsyu64ewgxHAuh+qSK6W+rzlJ9UaaVu/oKEyD0O9zOPK0abCZjSd/KGEAS1EzIvyA/F1PzwsH4liAknqLzVJlAh5kjaevLxoncKCf9yZw+i4xP0eioCa5PDQInQk3yUoYvN/lzAgFPAqDF3+xXoIzqPq7HMix3CiGojMfKUh1SlWePkGQAtu9pkl33BxF8634p/LL1pK8YEv8xFD/XTxtKvFl/iOSnIx2bU2ZQxnsklsnqMIFRlcQ3hlvL0j+BAAAAAA==');
