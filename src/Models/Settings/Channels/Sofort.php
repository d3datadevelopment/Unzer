<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Heidelpay @version 6.4.1.0 SourceGuardian (16.12.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B3834CF5E3AAQAAAAXAAAABHAAAACABAAAAAAAAAD/8S9jx12m83zK2/mIu+8nQAIi7Ib3hgTijzIqwdqi1uxfo+soLzztcyadykN3AEWsx9vzPicO1VKH2ZBVEMV9HWCLL2Ogt4KOUtPiqSginHAtnYQQEilBDyiAntUMsZvvu9UJXv7psYTRxI4eIpGmfAgAAADQAQAAeLBarAxAPOeFb051zIq6T1pxpLaqkDvfb7v2D214kKWiBjjgqkL6gjZDGwT9gKmWQ3hWrgTqTL2UWAHr6C1fmoIUpHKA8Yygw7axpCfW/M5loQvSs5sDbb7ovbiWt1lx7oe8HAU1vT+49yhcuFJhH2Y4jAN/X/Z/RmHjf/TQ8UVKI9FjltqWixhSchu0n0LUVJEf3KEMN4SM7EW1xmidtiw+u3jw0w7ww6IguCPh6nB5uFkgEkM9BqSqHyIzJPduSUNUg3rQlNsMSSFh9CRxheaV3Mox4g1FIbDsj189zc0yTdz7ZOHL8J6I2jR1TLKXt6ZOP6hmKIIkJt7V5iGJDFi7jKKbvuOlQ7IYCOPr3lIP0SDnDxksgzQUmwucvSi/QSl+wBfTGUZGtk5sjgbUC5XWUco5RVmrCtnmyFj0ic/BdVJQw72kGOYHDVnOwiFyGFaCR8WtWYFXKHUrRySUAHUXU5HxgDKj13vUeX5gnIhEVy6CxvzpdlQPo3b6mXsizgAw87Fq5bTpNqXgvxsktd7KLGHySD/fhdocsWQAUNewZFjDPBhBNqYYeEWrdb7ilDpjB9DQiyZrL5tsSxViqP1APLCB5nkaNierIkw0x1lRAAAAyAEAAE9bBdpgbaypZZtdCck0Dx6xThRJ/MM6UPmhgaQwJJUGF4HmWPYpqULnB3rkZIFrJMwEgFQhlDCvjcnxiHdPNDd2cdFEOQ+G8d8HoTJu0xjskrn9eYKUeSHjqpBDjfhOPnZaAgtjXjboEui4LNbmzp9KACOuz1VFbc56Miy59jYIdFhhC9dPIyLhV9MTH+mbo+R38jKdLzOd88rksRH81wpLncaFIa3XrX/a4cY13gD5I1yjnA7EJdMDv68IwBPlO0DUX5QfEubcurq3BKONWWd20kKZfaPwdhXjzMCAPsH7nLaT/yaj2ia2WTVi+ENA3l6AndORBIIg/ydS64yly1oEr++YQN+5LgaW81H6C3AFC/KTE9p0lMF14ICylHEP90U5wMzqe99AKz7DaSTp5cxciZaNHG1EartKGCsvtPSnNEr7tm6PnCU7PDWkyL4PyhuofP1pGkjdjSPCUPEbiHTOPTH5/xLSrWOf4P22GlMOuzo9n1f7RrQCxBztqlGfQauIOvNlv+5r3z2ONpdO8s+htZgYxzp+IYUmACwFafj1w0B2PDy2eeXIMzhxPQF1GKd5VXm+hpjv1hAduTkcirfQvM5Knx5jaAAAAAA=');
