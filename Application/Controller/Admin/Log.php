<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.1.0.0 SourceGuardian (16.07.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
