<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.2.6.1 SourceGuardian (18.07.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
