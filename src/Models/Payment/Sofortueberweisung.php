<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.2.1 SourceGuardian (09.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
