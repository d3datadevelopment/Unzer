<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.2.6.1 SourceGuardian (18.07.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
