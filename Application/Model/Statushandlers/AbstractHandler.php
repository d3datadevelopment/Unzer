<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.0.0 SourceGuardian (09.02.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
