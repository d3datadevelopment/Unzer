<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.0.0 SourceGuardian (09.02.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
