<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.1.0.1 SourceGuardian (22.10.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
