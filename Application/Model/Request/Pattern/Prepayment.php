<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.0.1 SourceGuardian (09.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');