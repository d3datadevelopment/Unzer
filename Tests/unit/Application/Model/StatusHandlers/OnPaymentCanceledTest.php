<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.1.1 SourceGuardian (07.05.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
