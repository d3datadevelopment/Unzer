<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.2.1 SourceGuardian (09.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
