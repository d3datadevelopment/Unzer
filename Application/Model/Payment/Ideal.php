<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.0.0 SourceGuardian (09.02.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
