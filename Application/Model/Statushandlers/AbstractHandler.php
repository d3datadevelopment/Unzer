<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.1.0 SourceGuardian (19.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
