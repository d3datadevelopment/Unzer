<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.1.1 SourceGuardian (25.01.2023) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2023, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B3BBE09F35AAQAAAAXAAAABHAAAACABAAAAAAAAAD/cX+h+Dc7RTlUw1h33CxvDlqBPmjRYgFk0+TxhhoIuLdlSZD06OUyfWIN9uFqipnQBGUxo0UWfkurBy/HrzhUvCZZPgJsLTYrhDLldDYgvLR/p9Z1SuKXsvUPaBMkz968/e9j24MZtmhowfdO45gXZAgAAACQAQAA4gRexOa5PI3ZnaAFbUbkeZe+o/mCdLIujNc+4IdlyUi5MgIdUY1UmMYViZ+TqXM7U42HDyR7lDmVYNztVvLNHas0tjkdW7UcJuzIMTAbQgiVP1+k/fKtu7N+Ro3jiE5KPQTVR8RbD21V5uVPk13nhZn3rnhTf7CkJXJImeTxXy0BeNZThc9pJYxmZ20cBEL/yKnc2M8FNePiouuUNvI3YEqRXlUULJyG/WZvYcXFfvP6x1Fy2A5JWbtQ/EEI2DvMUaD7I7y25g+dlvtnMuxsuZfdY7dge8//c2sHWcWaiH+Adzv4aTqNiA1M+oXdmgyh3qLA6fri0UTacG3hIf9/+QXftuoBSoL/T90vj6nCpI8GtNZKiuNihmHwfCTrl3cpjoIEYd/hgBZkCrZRVhnyn9nrhRQ/3VAT1zHnxwtj4u8YEa9U2yHmvZFSGYtIj7H3YRHb/sh7d6DYgpsUoex00E0F3WGRb3cTKB4d4S+G8/22Dk2diSSyI+t3sOWZX1iyWXQbW9HHIrcPbeovuiJYqFEAAACIAQAAL77GPCVbGeapEL/9DcCbqOCYTrOheFVqRjJjRx1ViCpJhpM7/AbCy5I57hzi2l4TjDWqgJIHjQaTBIuFgphOUmLWdOCG7pVNQ3F2JcbIUaaBlBKnCUjpBnj6qohmfClHC6ConjodqZ44KRPAevHQxqsmUOWlV0TD1l7KFHSU3BLmIKiBag4sZQcHd1JBgp//qDRgHg4AG7etqVjfA2v65uOisF3jiloSctZ3Hmn//a2d6y9LkgJRKm5WMlWJfZptC54UiHRjMain3McwFNVHXqigjtAiqTsfIu8iPV3wCSuW0zTb8L+6HOeIPkb+32yjUmUIl17Vp+0d06VG15LGa6pSiI9pEv7/gHcOSsjLLMP9eGQJS5ueWhl/rBqKzQRDFLxcNYdMRnqp8G9pYeDcGfdZoDxXh42/OMpjgZWXnw1jHkgKjkL3UJdy+i2ZMh3sqh9QuSG0xPzM0+mgV4DBrVqPOjk/be6+6RX3tUFTG7gYDIE8xJnAcPhK1EEwV/T98HbXMyK5qlIAAAAA');
