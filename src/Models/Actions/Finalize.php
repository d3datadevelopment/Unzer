<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.3.1.0 SourceGuardian (13.06.2023) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2023, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
