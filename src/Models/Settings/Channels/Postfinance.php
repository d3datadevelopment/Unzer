<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.2.6.1 SourceGuardian (18.07.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B35FE09FA5AAQAAAAXAAAABHAAAACABAAAAAAAAAD/RvilLstExDzttRCb4ojWacLGLuMpeJpPNUA8aWrqmDLKMkzBlhTv2Rv6+3ceI4b4PvRjIzARFynHLkrXQXOHVQeoKLjSSdUb0VTWxvcFGvEGaIrHcewAUTM01F7WFDtD7qXf87MGj3FvU5SOQskCZQgAAADQAQAAEJjLIHLTi8b286wj35jdPiyDsXAW8elpSt4NWT3UqrXC/kpMUQm4t3G/Xlw2YRW3SVOZtYF8InxhpVUH4gd2CYd4tFMQK9DDyzXF9guhUSJ2qBWVe41PvqxE3WcExneTYqPXL2Xqk3GR4SRWzyANIwkBx1lEmG7Ntd7h3M8/CRdjjHDgx3lu/TbifdpnrJBz4tiIbtHbQWBv3LulXM4COd++pQqJe5AoFUtpRJvCMif7Dz2JAV/2vgP0zpKnaHwi31SdAMZ0YCPnd1oRDeVBUBxPBCTGe6GGRTTAFQUzzm7I0n3WJpOkEBDK8uQvZQTttZQAL6wQk2mN1VSfk4rvAyFZqBZ8eEuVFn19ezgLkI9Eui6h/TQsrW6GgRmdKenjP2EB5oWMy2rfPn4YsEvg2NkiJtXXNU7isy9z8pJLyckziyDSiSp516u7sEJiS9IsW3BTgTBuyJT7nUyH9qmHvurwEXIOA/sNvJBrB59rdnTeORw/tyijGkyxnDUHWE6x//IUp7E01BrnMAkGu5Hko68VP7VSPPn3p4YJKY+p2waKpF5ErALOfbd1YFjyCbTLyWHRAzY9/PyCxrHAzMB2hPngunC3VqYwtgbD7Hs2ziZRAAAAyAEAAMQE63BCSiTMiUWFAWiANwRNTN3JkcCtdmkz4B1F3aCHnsgsIjRP65KY4JeEP3Xc2ihkiI0Rt2IH6cgfp5qC1XseokATpC5/9i3nf4pkcTOGa36raMKXId+OHRvGoUjeurCArPhNX8WXMZYlf+vm/+KQTBopsnAX88FDllSEqixBdGbSRxdfxAeEK1p16Kva/fAvhxs83zmbZ+JhnPPwi225pVohKZSb8KEtL8rtz19a6dtC9GbfG4xKX/gqzictDjuFTZM6VeSOOSrDcYKbcFxSelqs2lEhlGKgxolRvoYyzpgg7fUEex/I20qYw9qrd9JVggqzb2pqEapXAaJFodlkKei4mmFvs2SDjw8i6uD1MpIHPSYtDFjWN9Bwq/4hAoR6M0+qcHmQoPCHPfDmaMDjOAiMecS+z0JlGFD5TWGpD+bqxj2vSO8XntdZjsqfxIOq5AE9OqZ9N6mFOlBN6ZWu3BaJ7tWpRVLLmssjXZou/To1BpFsqpBFcE9jz78T3BYVkQwFNJyW9p0cLtEVcacKLztOi1PG4/68HQC9S147iKSCc33xyHW2tqU8wTe6VW+r4u9beLxdrAzLA0gGoM8Jy2EvHLk1aQAAAAA=');
