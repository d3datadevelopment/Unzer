<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.0.0 SourceGuardian (28.10.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
