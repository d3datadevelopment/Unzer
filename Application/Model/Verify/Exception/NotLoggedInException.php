<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.0.0 SourceGuardian (09.02.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
