<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.1.0.0 SourceGuardian (16.07.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
