<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.2.2 SourceGuardian (10.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
