<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.0.2 SourceGuardian (10.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
