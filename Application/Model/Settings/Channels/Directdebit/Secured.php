<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.0.2 SourceGuardian (10.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
