<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.2.1 SourceGuardian (09.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
