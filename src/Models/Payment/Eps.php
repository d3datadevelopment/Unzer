<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.2.1 SourceGuardian (09.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
