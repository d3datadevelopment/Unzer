<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.2.0 SourceGuardian (13.06.2023) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2023, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
