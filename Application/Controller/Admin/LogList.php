<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.1.0.1 SourceGuardian (22.10.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
