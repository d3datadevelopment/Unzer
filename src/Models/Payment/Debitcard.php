<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.4.0 SourceGuardian (31.07.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
