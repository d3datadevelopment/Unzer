<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.2.1 SourceGuardian (09.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
