<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.0.1 SourceGuardian (09.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');