<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.1.1 SourceGuardian (25.01.2023) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2023, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
