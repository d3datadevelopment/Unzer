<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.2.1 SourceGuardian (09.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
