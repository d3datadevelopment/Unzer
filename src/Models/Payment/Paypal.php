<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.2.1 SourceGuardian (09.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
