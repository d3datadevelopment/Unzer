<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Heidelpay @version 6.4.1.0 SourceGuardian (16.12.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B3834CF5E3AAQAAAAXAAAABHAAAACABAAAAAAAAAD/8S9jx12m83zK2/mIu+8nQAIi7Ib3hgTijzIqwdqi1uxfo+soLzztcyadykN3AEWsx9vzPicO1VKH2ZBVEMV9HWCLL2Ogt4KOUtPiqSginHAtnYQQEilBDyiAntUMsZvvu9UJXv7psYTRxI4eIpGmfAgAAAAYAgAABro4+/d4dcIok8Z/5aMPYZgg/ot9URIBrl5g+hx65NhBE3etJh8jH1pk1UuVu9CLMfbyB+G6IpRXAg+6rJEVbDRGd1DeXvReZQeGACmSImJOgUGcUblvIAEgGwILk12P1JzZowWUplmMWiFeXyfvm0y+2yz25Pqs17+iv3syCXCcRlzKVNHmo9MHTJiooKV/v9feXEy4OCFOJrSSyYA+dBRwFUNOMnJkU4Cem5kqFi0APKt6dmwHa+9Yk+QkSDZ6RbikxqahcAkRH0YJUFsr1GU/UF0EXa5xfyEAJyTPPDY93iTsGrUvWJkchQK4XnB3PGKYMWuCfy11lLUHWlwZ7lxprHb3Wo0v/hMUCb94GgiNQkQUApI6cU5RCSEOzLNHWjqQZj+hK/43qLZ2nORYda485A1JZj+3Vc5uIo+79FuEuID/MJfKN0W3Ijgzykw4yZT5wZe4KSCBl67vEipmcaNFhLVTogPuQS7bt2ekVdVojOZf4plFstrSYOJnHlsrzx9hHS1iQmSRF2CDGA8z4urnDU7IWN7zAdyzpMtseDFm7dSqzTB9CeQJza11jCQQ8TrktZPrFPsw89wPHa9pnviRyQZLXBLLw0JhCcDIAnUK9ivkBtf9yPrDyUxtasNmz9FJrpyHwFbxhvrWa5h/xDIFduJjKIPeo25P9gDwHQwpZsrVSuvmcvHtSAMw/pEehX0r6AAxIatRAAAAEAIAAMia1PabMaA1KDZrT2WVzL4uYu2RsLrVjHrT2Lid8qkeg3owCblalKA4EgKYLd5sE2JqIfPagDo8Lz9Zhrjgp5g+rut4eBuhY8/ohDsWjF+SO002jaPHJmSbikl0R1sQrNtMIR70sAtCmT8i/jNYexF3UbEmZFre52+tBjCtp+bN8qsledLLi9oGX4fCe34t+xt5u6g/DHB+DQ/M+7EwjlH36Q9sApSxcBALpiZ7aQcc7t6/8tvqqPQVRKLP9itmz9+jtaRtLHdUZZ9VOLnjxjiNt8eU99ZrPdL407lk/lGxTOVxImgu5HXZLXrLwvIF9ZOqNq1mNbaTfZOsdw0d/ui96dU2bsC1ssMlmx9NgtlLEpFxvzdrgumKUuAcQc3wjjURS/+Wv1d4bG8LtEnhJUzk/3/JWssoao7xZm2b/HeVcsM4qo/ksCPiD5OWZJaZbBf3+UVOsTJNbmOZ5vuc2e5beJPK+ZTBuHtq0iVaF1W9GArDSPegQYw03OlLtWSq4/3pA1uIuX0U28tAD2zoM23sNvH3GsJJ+EtPLN8SOFfHgrZ1Gy0IkwmwsGtp0s+VTYY4ZZrAFvVYF0ba5D4uCy8k7go2llYae6KNOHfC8n0oJGYQHJw9df2PcJ+zRw4LxbbuxrKllL5B9Bt5xnWhEtxXRqlVtpd8DqEN5yfucGzUro6YV57btU/nOlRvm6N+uwAAAAA=');
