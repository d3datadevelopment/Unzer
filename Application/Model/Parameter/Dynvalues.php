<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.0.1 SourceGuardian (09.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
