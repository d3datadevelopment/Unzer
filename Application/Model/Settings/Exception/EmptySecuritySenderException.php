<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.0.2 SourceGuardian (10.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
