<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.3.1.0 SourceGuardian (13.06.2023) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2023, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
