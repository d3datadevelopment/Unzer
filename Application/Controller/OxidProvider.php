<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.1.0.0 SourceGuardian (16.07.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
