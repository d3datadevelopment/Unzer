<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.0.0 SourceGuardian (09.02.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
