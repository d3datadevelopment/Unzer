<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.1.0 SourceGuardian (19.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
