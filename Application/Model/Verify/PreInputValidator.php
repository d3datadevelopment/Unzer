<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.0.0 SourceGuardian (09.02.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
