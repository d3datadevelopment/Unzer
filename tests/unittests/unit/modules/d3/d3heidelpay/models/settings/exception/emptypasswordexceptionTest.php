<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.3.1.0 SourceGuardian (13.06.2023) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2023, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
