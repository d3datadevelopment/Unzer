<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.1.0.1 SourceGuardian (22.10.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
