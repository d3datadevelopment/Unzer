<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.3.0.0 SourceGuardian (31.08.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
