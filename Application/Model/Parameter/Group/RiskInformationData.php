<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.0.1 SourceGuardian (09.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
