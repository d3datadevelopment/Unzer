<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.3.1 SourceGuardian (07.05.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
