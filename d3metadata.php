<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.0.0 SourceGuardian (09.02.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B3F5E09F3DAAQAAAAhAAAABKgAAACABAAAAAAAAAD/XqzZrKfYpA1GMXniUs1i29Bk85UkoJ2meMn8i9U3nsyp6hJ8Php6UGEa4rlkn4Du3/QIbFlUTQKx6o/CpsHC7wQtahzoLkyGeFNrpnZ8JfuRgKLo+dViS8BE0CBQPSSXutSdce2dgKcmcI+JoiwkkDrMSXbZor9U77eyuX/LIVfuP7GNk1CHRGlBZoTOe9zB9Fve5Y4ZvEJV9uitE5wKym5JiBK4nXZNCAAAAAgBAACONxlet31cmraJBe6vg/Ivp1MOGJi1pc8tL6pRW0Nw4pJNS8ugzhNNWWNA2MnKvLfMYcf9hXxVgeVOVDSdMBaheg+CcrRs8/eVc0ywO50c5eMjAFVxDC4GcXmaPW8cx0HM8Y/jUVkOjsP3HpDgiSUhrIaO7hLPD2Eu/AvLMXE9HA1HTDolN+SdVj8LLw1D2b353MG6zk5niLpp0ZJAAtpRpFaKO3aXw6GmeCjQCQw/pGErHO+nTbgcGPA1AGb+REgh9uApPRelae0U49PjstiRHJ4+SY5iUJ1qoU+aT0F+Osd9vFnMGHvZ0eSU2PRIR0k1nTC3ONBsl0nLXG6I+aEJ0WHhkg25J8lRAAAACAEAAF9HHXlWn4lS2qx2vMQiT/8KUG3gBrIlsrAWdFGaxMkm11pUrqC/eTeO3fVL2BdtWoPU3dxWVqu0o8HcKZRUEnACystKTehPwDT+HVROexhIlXp6uYczQffhY9EW3xq27duetdF1DMartEIz/EeSsjfiQD2WrkVFqDM/iFbDMf3aMrwfvEHnvg2vrfPt9bMsZMWTYHXHOt/bAGvQ63L/I787DVj583egT/6v1BdR09ACnb8vFxKiimbFK2fTWPd7N0QIiobkQ5oFTcf/EebyJSsxSoYOlO/sCn1E4gL11EwCqpaP678hyDigKfyV0objO+sUETU/EhFaASGio5FMUzkrwi8LIRQhSVIAAAAIAQAATuL4yWIHZlUz8xrF+6UZEjGatdhp/J5xsIKPDFsIZ4iqj+jiEo1ZKoVoMzw7gM+JxzoZ2Mxy+qnsTFtOxdU9WiNYpsgJzdHgF8f0OFd7ZdqH3/GiVyFjKEvFSK730ynEDbmBqgfKq3qxcw47UaOFJplgaL95tNrU+gtw5jJlv5AtelNdBqL04FrkkqNwKJVyxYzNWQ8neLYyjwNwWrSMWTNPNinNBNkwKdplkGGQrZ36aNt8CX+i6GUYgHMuU2p48MU8aQ0eNMnS9WctzbSRsXnTZKP0K1qbsR4sqkG6V0bXH4kMs8HdUuAe/+lhGPsNN1kzF2LJZ736fXJ4VqOiGoHc5XsQDVGKAAAAAA==');
