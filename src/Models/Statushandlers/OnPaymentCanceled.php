<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.3.1 SourceGuardian (07.05.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
