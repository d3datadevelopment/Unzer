<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.0.1 SourceGuardian (09.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');