<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.2.6.1 SourceGuardian (18.07.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
