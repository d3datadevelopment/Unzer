<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.2.6.2 SourceGuardian (18.08.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
