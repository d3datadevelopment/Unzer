<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.3.1.0 SourceGuardian (13.06.2023) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2023, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
