<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.1.1 SourceGuardian (25.01.2023) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2023, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
