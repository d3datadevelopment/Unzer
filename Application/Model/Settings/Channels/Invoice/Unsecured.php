<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.0.0 SourceGuardian (09.02.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
