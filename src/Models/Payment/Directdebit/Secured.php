<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.3.0.0 SourceGuardian (31.08.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
