<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.1.0 SourceGuardian (19.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
