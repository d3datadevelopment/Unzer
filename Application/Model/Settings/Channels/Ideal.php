<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.0.1 SourceGuardian (09.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
