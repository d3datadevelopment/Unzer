<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.1.1 SourceGuardian (25.01.2023) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2023, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
