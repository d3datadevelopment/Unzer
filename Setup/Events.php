<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.0.0 SourceGuardian (09.02.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
