<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.3.0 SourceGuardian (19.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
