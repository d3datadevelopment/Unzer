<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.2.6.1 SourceGuardian (18.07.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
