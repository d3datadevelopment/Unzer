<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.3.0.0 SourceGuardian (31.08.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
