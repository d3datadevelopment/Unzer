<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.0.1 SourceGuardian (09.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');