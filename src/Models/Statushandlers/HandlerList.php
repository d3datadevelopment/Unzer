<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.2.1 SourceGuardian (09.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
