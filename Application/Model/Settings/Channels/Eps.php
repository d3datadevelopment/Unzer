<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.0.1 SourceGuardian (09.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');