<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.2.7.0 SourceGuardian (13.06.2023) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2023, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B3A9E09E5DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/O8yHRYhtT6Pd6RNV2KheWvsM9SGJj53Ky/yF6yzdh/j6wqydtjwCHmtunaZbIN148FFWJ2Sukv42P2K3/khaMWnmtgmubOwp5SSmiLTkmDTndXwcibVW0/To2z70F4+1IetgnlPP2ToaVtz6XgJ1EQgAAAAoAQAAAi6EtP+cGujg82B6+9CRYCxqYnfA0HyVKkshVcEGWoOmjQaBFlZk0fIJvb/fMZJUW/J4nzB+krvKmHf2neCXH2iWZCOUd3/hwKVpOVMsGM1AwGEEbXlUHh2Zs1Kc35dIHNvqVgGISkMD/hA1Cmi3BC6dg5O1CxELspMrWKTSXwTT9twe1cOJC73gfHIpxUk2Uk4lE2qkCJclzhl4uCTAH4hoSa2Kr6fEmhGWNJe05KyhB982KH1uYPjn0EmTo3NQdjD3l29XgjlZbaKWRLCkxb8VBmZOFoxvKaAeGN9+yTpwANC5yJkKNMUaP3Fp9hShp6hDeSBhZcUKsbt51HwpN1BymPFqHbsw2U64BCjwlZ04UiSY1WESonbbRPu2lqCv72JWc33VcuFRAAAAKAEAAIvg52ZBlG1CaIhSmpaZRhNkwCv413Z0lQapv2XAMrzV5KQ5omYxN1VuLoRtW9Qy/4J6RE18g2owIifxRy5jIcSd3XqMHau8BzjypYkOX8RlRjwfkTeogBN2hrh1s2S59OCmvolWi1IUyeV2vv2WxQd7YXVYH9l6zgwOhWsnLPCqoNxK7D302GFTb3++jfxH+a0sQolc5TczOC9e+ZO5Xzz5VV+N+Jrlm89XjKuhwsz+wuQ8J/sV6RwRaaLiTlGjqrdTCOcSkB8/xyaqMAlpfSoHM9yxztNcDEU35cbs6KQBTp9pcwjOd+DD/sJ6oRlkOCTqvaXF7I9N0bD+jnbym881JZR8pj//xEkr1Aa6Cx2dofdDqnfn5oDDlHTS4BwXRaHjmpPmPLUQAAAAAA==');
