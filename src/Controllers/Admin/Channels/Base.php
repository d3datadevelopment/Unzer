<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.1.1 SourceGuardian (25.01.2023) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2023, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B3BBE09F35AAQAAAAXAAAABHAAAACABAAAAAAAAAD/cX+h+Dc7RTlUw1h33CxvDlqBPmjRYgFk0+TxhhoIuLdlSZD06OUyfWIN9uFqipnQBGUxo0UWfkurBy/HrzhUvCZZPgJsLTYrhDLldDYgvLR/p9Z1SuKXsvUPaBMkz968/e9j24MZtmhowfdO45gXZAgAAAAQAgAAoHd5OLhd7QgV5SqMYqidovAGLhGLztN0onWbqzf+MjEzngf9+oSvuRTmTWcq1tdqlOkSYmTbcNhRiiSSFYyeXa6lULU5l7PzqOGMkKegq0sZWXeQxvXNyOElczFePyjo3SN8x1ROQy/Yc81bAi8cMsFxQBJegoI2U3WARFZZ+KxeM4floyrTv0zxDB7MuJGC/5+OZFVnoJgMKacqJm5mn+46NBQmzy3ugU9vpzB5xpM9IOj9mqoz3EVJY1isQrm57OQb5s956DSsq735W2aHjfQYegv6aAgRucVtCflz9axir/Wz/hhQWGsrr+LKe6NZ3HNo69vJgwdwCd5J4dLdqYyzxQrhn1CcG0QoXzK+2DnR8PcaszGTdDBiFLikuXT/Ihn6JdFcC5Q1hczBhoQnTrWm74VLpJNFJoKKQZvJYMqz8IZbsVA3MTjTZiatwgAYZWUhbBFtyUFO1vN8Xzf0uHS3tiQpCpU7/WIj0bizLNHV7Puc1GQem1JTXGvOFT86v/W3IlP3a0o1w822yIugKBQte3iuQPvyiBAr+iswxOGj6DNpVvhLU4VQI7FxFzT/gGhupnDdt4L0G9nBu26RHFDTfiRECksix8hQQmvJrCVb/v7OtEYCtXLyBSyFHqGW2PDzcl2aC4sApB+kHzedq8bhyQ3E1CxLetLNlvjHxmkYbsyvFrL8DsIF/QCJOFzkUQAAAAgCAABLEM+COSzmdU8obQuzYbsgVqFH3ZyGqztBpW2syFjraqduz1gG207WXpgeUzFqCnIbLPQY07chjQiRe9V/05BQ7f88+ceyYA5NRgAc32pQdBYDaCo6cEUqK+8mAgEsT9jQ/nT02iwK0xom9alvFTLIkyRP0Lhe2fg/Y2uHI2F0d6rdnbqizlrKvU4HkuUvKX0Cd83INC8s/PCWoYpRKHI84PUgwpBcSR2zP2/U6h3v5u5XGgiIg7JSXo77lXDITCJ78Y4aYOSUV9FPqCYn9pH/hOazF20Cp8vX0n0Ui4y36mUfPuTBXzqZcWhcyU8zXwX67XLOSnqYL0bgS1KsraFstIWMpmWzR9C45yigfmp0V9V2eWM5ON2AE7MZcKSwb8Le4eHsrA8kZnHoUXrWm7156qQUT1iMKuJByCXAfXWgvP8OFylmo1MIM1UoODDu457SYFjhAEa/zEX8aaNDMY2KtwkH63DGcwMMbQEWMoCXegd496AUaG1zOpoZf8WFQuKtRBM24eNv7kVPvOCR9oFbX4mMLtX9p+48NjEtKr4CgyweSt0Q5vBQLRcqNmRM1UrA3KornreDIIOz1H21JFZXmrXRxoLlJcsZLLiHOmUktcqLMli2g23wTvQy5EYy5BnuW2Uk8e1Xf1O0y4LjkLvWr8VdsHX3ybr6D8mCOj6PNeqzeIFmYUFoAAAAAA==');
