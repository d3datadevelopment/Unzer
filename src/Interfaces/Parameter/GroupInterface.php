<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.4.0 SourceGuardian (31.07.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
