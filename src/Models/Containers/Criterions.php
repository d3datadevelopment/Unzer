<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.3.1.0 SourceGuardian (13.06.2023) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2023, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
