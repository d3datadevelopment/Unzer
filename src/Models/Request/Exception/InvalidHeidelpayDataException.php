<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.3.0.0 SourceGuardian (31.08.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
