<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.2.0 SourceGuardian (13.06.2023) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2023, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
