<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.0.1 SourceGuardian (09.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');