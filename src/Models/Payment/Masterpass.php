<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.0.0 SourceGuardian (28.10.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
