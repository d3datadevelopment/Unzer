<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.3.1.0 SourceGuardian (13.06.2023) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2023, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
