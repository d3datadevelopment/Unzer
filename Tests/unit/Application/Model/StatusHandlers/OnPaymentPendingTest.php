<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.0.1 SourceGuardian (09.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');