<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.3.1 SourceGuardian (07.05.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
