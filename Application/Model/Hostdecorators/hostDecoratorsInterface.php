<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.1.0.1 SourceGuardian (22.10.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
