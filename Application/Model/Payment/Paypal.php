<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.0.2 SourceGuardian (10.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
