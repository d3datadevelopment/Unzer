<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.2.1 SourceGuardian (09.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
