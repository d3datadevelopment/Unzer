<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.3.0.0 SourceGuardian (31.08.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
