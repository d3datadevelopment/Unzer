<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.3.1 SourceGuardian (07.05.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
