<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.2.1 SourceGuardian (09.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
