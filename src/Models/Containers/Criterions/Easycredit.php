<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.3.0.0 SourceGuardian (31.08.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
