<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.2.1 SourceGuardian (09.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
