<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.3.1 SourceGuardian (07.05.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
