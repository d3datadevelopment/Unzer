<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.2.6.1 SourceGuardian (18.07.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
