<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.1.0.0 SourceGuardian (16.07.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
