<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.1.1 SourceGuardian (07.05.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
