<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.0.2 SourceGuardian (10.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
