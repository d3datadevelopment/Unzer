<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.2.6.0 SourceGuardian (04.07.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B35DE09E25AAQAAAAXAAAABHAAAACABAAAAAAAAAD/7cD87M3Buw6UZJnnTMZ66KhjUge1B7Ur+4aoW33ChHqwSujAzEy6uNuC1g3PBh6HbuYOl7LjwcDQTimOrI/PVr9t479lTxnwNOBHP+jbEY+nPoeLWn/OY1Fpc+5SprZY6CW3B4WAOwxl5BOL5+63WQgAAADAAQAA8+QiYPl+BtzE1Qsh3hmtJz4u0krSq5md1pymh95VUjQ6jxiJIQSvxz++eg23/ZgyE6l9TFzYhIWe65eWyU+56l0kig7exdA2xHY7wRqlhrCV6XjajuXiW22P41XZSPJQMsd6ebQjRvifv19DsdPCXI/4tdcsnqkDHsuOlDWIq5QR76yL/IcjDNfAkZaaijuFFXeJxBEYLNEID7MHbqK9T5pSatZ3ZRnbhaWNI5os9vVC5l+ohWejF+/dOh64D0m2VleHO87kiydR42KvIZ9vPRqhaEOTbB9M9Q94Dnrzzuuk4JkRqXYEdCsbwnpaq9P5ERMLn2zFIwRXOYs/hhNoidvGSx3TT0COfJYBv1u/foVLBS3TLR4u5ZzHm9UFQk2QNHlROoxBKPJDa/Jr88dmUnBDjTYcEaFUy0td4lgbaTtB08D/B+xJjbnlE7zcwZ2k6v2M20Zrw0gBgoMGw8xt/TnIhuf81Kv+75LQvuRerVFGx5OVyeWaFJ4fgGdmgQ5qOeIZLhJ0pM2gabPXe+VJSoHfIBJ0vAlQqDGFaxuN+sZooioLsTg4FAQRKfODzOEFWZ8CwVFohQz4lXcYeuxLgVEAAACwAQAA/M4QlQnb+UEs85wq7G4i+lexB10+24oM/jkcVo+IapXq4mlw8pV/4pjAjWqDHdt1k3sjzw+OYedpT1BS21nqg6wHF/c4s7Txv/JfLJr7LfGfqEty+RhXHufr7nizXqUMrCi0tmw7cUof5eKj/CmF6aEAGdxop6pB4PoHTjS4TUwy6SVsACoRi4iNMBCRXGUp4IF7psheZLGkCg39iBNv8n6NKlQdZgJinIl4n31KDympsJXqvmh3ybef+QZZJqiTTsZxe95BXvCEODOHMFXsyloj0cWCh4Wr9MpdB1N2nhdbvlP8Gb5NlvLZCi1MPmE2JAZmpeB5pRMs/1zd+BAXEL/PwcY33dZGKBAZhg7DY/wAzBT8M167vzZR30LtsT25qh5KnV5BSFqBvOlx9CKfkuEVCeMFodneYp4nTUGT8vgrHfQy1LRZvQOgtXVFngHrsreJQwi7xRdncDEpekf94/G3eI9qFDowPl3i21pyCqMJ6aPgyIxq4RPcPQRCRUDbUGFWXL5p63SE0avjqndRnQWXZtMEvTmA18M/oSgZEMafrE1Gdx9URv9YUiH//CzOAAAAAA==');
