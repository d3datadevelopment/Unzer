<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.3.1 SourceGuardian (07.05.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
