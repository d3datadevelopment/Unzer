<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.2.1 SourceGuardian (09.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
