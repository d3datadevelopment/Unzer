<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.0.1 SourceGuardian (09.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
