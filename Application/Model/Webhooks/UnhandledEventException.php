<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.1.0.0 SourceGuardian (16.07.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
