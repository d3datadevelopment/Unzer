<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.1.0.1 SourceGuardian (22.10.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
