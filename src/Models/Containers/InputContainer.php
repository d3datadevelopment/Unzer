<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.3.1 SourceGuardian (07.05.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
