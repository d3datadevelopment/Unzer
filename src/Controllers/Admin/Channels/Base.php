<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.2.2 SourceGuardian (10.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
