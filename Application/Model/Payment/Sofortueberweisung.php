<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.1.0.0 SourceGuardian (16.07.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
