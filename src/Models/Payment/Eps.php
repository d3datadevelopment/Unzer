<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.2.2 SourceGuardian (10.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
