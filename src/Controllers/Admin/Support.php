<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.2.7.0 SourceGuardian (13.06.2023) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2023, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B3A9E09E5DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/O8yHRYhtT6Pd6RNV2KheWvsM9SGJj53Ky/yF6yzdh/j6wqydtjwCHmtunaZbIN148FFWJ2Sukv42P2K3/khaMWnmtgmubOwp5SSmiLTkmDTndXwcibVW0/To2z70F4+1IetgnlPP2ToaVtz6XgJ1EQgAAAAoAgAAptwsbQY3jOgLxWq+VWQ6ph+37wjkmhZAWphDJ7MWOojerGQ3DnIMo3s7fxbck1kpWJ48NuPN9NKiLEBs2KzPvQtV2+TKYgKcZDmX/YVKrJqENQAPa/mavnsgFk+EPu+SHiaHZkCom3CaYZ1TrEnBAWKW0UQ5THrORlJfgsf979WV6XNfQs6WOaiJcndhDguz+6Z2CsLg6sDoovlNgST5hVmfDK+9Ta6gBUzq6tuhTco8Xz6LCDRQ9q//TSEmh/cXRheLgNSbSgs9gLhjbeA1CKG/h1GEL4eZWvP7cQyYRcX91iXsLLSm3oATI3gBmrOrIJzvCbg0Ni9H8prHY1up1zoXKmoqtkzQvvYwBr9bzLwwktoT4PwkFacMhDFjTm6ADzzGmi2suDgbBAgEfWwncPKOX5e5WfzhYieOqM9KUb4sute4MnzrKOJlj7VmmsRM6Z+Z6FYTNXEF3H22RIHV4WFomOlKx/L6tagewod/4fhTdPPEUtbY275mXMs5XXIC8ho7jV8YAuu62duEf1SF8gb/GoD5bIz5ahkPpWTNFr1l9einICCnMG/Bg6KAHKjoeBbzalGUDuEm9YkNHfa3R18PxBKmk2KrHRw9d8XWnwwoK47nKm4D1bB2+EynH4E0JdXn1VqthC9trPgKKNQRU8q6k2jxpfPU7L9ZTZk8QaQ4r9kNUaJEnVYEmXalZiDiol3ijOgfnUpF4OSiaQS9p3JlZdPRu7T+UQAAACACAAB6LB2Fb1bPIDTBn7h610HF45dVoVw3jZnxU8WGgj4xFSFV2TTRvPUmjUyvwwsuJLkA0XY7w1rFAQptAyloAs90FGVI3h+xEFis9mtjCbxJE5bAOLjdjAZbNwImSOu6dzADYHa+4QoXUVO7FuCpf7foC6+b9/KxqGk2VoLIwg4+uMXhj8P5TwlbdfFiK0OPAJzNhwH/cenC6UkgPFjNJm6hcmSPBwyEy4dM8fVaNEOLGZMNVoJQbMVbxYp02iI3kY+ybN/J9PTUMERGi2edc13N8ZDdRtiWfz+AxmoHPdMERDA2/tRdNd6VrggI9INumeVRE6rmNAnnjbmFsx34AF9t1R7T/cyYddZJev/l0zb19Xa9YnCSQwvU9QnGwvZXefnbE/eE7t3tBVLYK0imCeMsCskRUcsBjtmoGeK0zyJB3JyHWvVqtKKFMOkyzRQNqGRuzkddiQvne8XxjcbgUt3j0ckfGNgefrt6GeYPDAxx1nBQrBNV6MycxLVc/U2Lp5siX/FgesEttWgrLI2yYNq7uI4RGdlUvATb6O5/8h4QuKU0Fb0h8ZnTpiwikQmpiiBAB22/PornT4MCmaftdKeZF1elEVOdSjyWhLV4bMtXfmLL8sJLsYNqmqkjxYjMBlMx9fKf+uEzID6mFdlFxkogkb1U5MKDhz8Iufxs6jn7xH3Z8bJhkOilyFYzWjwLj7sAEPuEc0pdYJZZizg86BULAAAAAA==');
