<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.3.1.0 SourceGuardian (13.06.2023) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2023, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
