<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.3.0 SourceGuardian (19.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
