<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.3.0.0 SourceGuardian (31.08.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B34DE09EEDAAQAAAAXAAAABHAAAACABAAAAAAAAAD/hZ2L6yLTRV4ZkcgBSrDjiqekfY8N2e3KCyQQma4t8W2Bc3Z4oERt1Pjy84SVwrgrFz/5iBJOFU3p3TFMyH0cVuKvmVaw4GUUOQxW2jYS2yszp8Ptd0a0dwRl7FCtQv6ujaIaBeRFoM2QLCt6D0o6WwgAAADAAQAA7qGPMBM2sjq7GChGNAGnCaM4r+0rjpDaKKv9ygtbypUGA0/S47Tw00zZgZm93MZ+Op+6vMRy+EbyFpoCGVACW8DrFAymxFAn7zB8KKqVxJidSliHmqYOTkOm/efWhubhQ785Ch1oPDeHSsSNcFBqj9jIIrrvGdelZXNYfSE0gLSFM644Ihcr8yfrZlmljYD2CpcVi8YcuFW2qIKxdD6vhnVoIY75dsJIRkgghUaarg5o9mcjq3DLWaxjcjw80KJSoh2K7Dmz7+EAZGQgF/44ilJZG66w7MFyskOlbSbgmSBkCpn0R0/kDMXaumhppV6OFWbsQx9QY49xg6Bo6SLIetchfy9AGcqdJOFvCPCALrn9IeBhcxNj3KkLrdTMOhSX7kN4+4jduyd7YcMbh3RB6VtbRwMsGMUCcTrA+JDOG7PTKWiRLEhIfEiQD18LlCT2BvSK0O/tLwXoYGPCcuPKdDS5ghTg4CJX0PVIyt2MFi0qIXt1pOzixEGgzS0KIrMZj5Bh/YYqVSibAL4wGhkjPht7Uq6bcoOpkZhydBurBdTmY23DsoJ7hxvoYJqC8+rtBpXoIO1eSUeG1zinzVCFdFEAAACwAQAAaoL10GSWernfiEnzIvsQ6OHa9C3HtX2gL3vhyOe4VLaArAINpOTPrImPpBIC0rX+RQ+q96M4gcSpsktE6KjDCfqRm14UIIue5TeHt0IfQLU9du8LMeEC9LaVx0i5JZaFwpLkgEFhgA1q6e8GTNknlS6MZTRxxtd63TjCvYkY8arSIx45up7wPbr8nIQkE7jilTAI8Nl0cDtgLk7+mvO3KeAfBlpfafMJy/GSYPqD6zMnfcXtSIHwuHJA89PNdBf+MANlpEb4j/vvh0gjpyKmNQ7Ml6GBMl7SNSykHKOCQzo4uKIxzdH/zsjCQ/8GuMIJtr32DAynUnWj2pzsxojbd1DXe3Miwmhg4ldd+/cs9UXNflvn1BWD2LAtLyscRzl8W/6s8ToyQ/6kIdUcTP2yM0moLmPBjpDDYl8iKykoIXzF33EAF8cI9pMa9iAZUB0dNDl3okqWYjEIVcW0kuvJ2hKzZrEdZfw/U3LU7I1VhLcm7pKnDvEguZmzDOqLvTzuyPfo9kkKitLleDE+M63nd3mSSTWgZVkKNbMWAt+YEa7QNjD0pUm4n1arDKUO7n9rAAAAAA==');
