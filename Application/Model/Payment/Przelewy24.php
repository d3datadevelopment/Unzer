<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.1.0.0 SourceGuardian (16.07.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
