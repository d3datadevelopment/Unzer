<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.0.1 SourceGuardian (09.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');