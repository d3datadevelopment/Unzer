<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.0.1 SourceGuardian (09.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');