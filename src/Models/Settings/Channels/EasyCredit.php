<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.3.0.0 SourceGuardian (31.08.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
