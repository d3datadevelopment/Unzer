<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.4.0 SourceGuardian (31.07.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
