<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.1.0.0 SourceGuardian (16.07.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
