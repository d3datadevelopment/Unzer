<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.2.6.1 SourceGuardian (18.07.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B35FE09FA5AAQAAAAXAAAABHAAAACABAAAAAAAAAD/RvilLstExDzttRCb4ojWacLGLuMpeJpPNUA8aWrqmDLKMkzBlhTv2Rv6+3ceI4b4PvRjIzARFynHLkrXQXOHVQeoKLjSSdUb0VTWxvcFGvEGaIrHcewAUTM01F7WFDtD7qXf87MGj3FvU5SOQskCZQgAAACoAQAA6HqiwNbnFljUhlAzDDSTv1ahQ8Qi3/dXtE8efozY2c0SttUlIBJWpTDY04uMRAOsy3O98WAoW6DcWSQrRtOIPqGtzC6gNwKC8rJ6ZuSnwMr7sdiDjK7l4ZmFFGllZwB+1RY5heBAmZkzTslOHMp9uJoZGjoD9BRwhpsCMTQrU/D2BTGmCpA1mb5U4zcdSN48lqxyZ4fQW68yBGReawseOK1KNFSI5gcHVvmLukkUsV9trAlBVrQ0ObEy60lFsxjWdM29f/WdLZNmygm2gUKK1dun5cjCAt/5vnDiGK4yGClScm9DX8cPEGoKxZB8Ic4mPPhJ4gFPVF7xubSGD5hAwnwLR1r9sGQ4YhyY/xI6kKCc5p3EOad+sgcYtCN3rTlUgsGawr9fCTCjjQLitQTmqfx5rZguujMzSx7Fu1MUPyRbhzsx0FFQWx0yV7+bWT1wAZZCNIGAz0gAiMHkBdOGPSLHt+9qvgmY+wWvl1fF1tDJEl9dcLCv+4j431vriqQwyqPiHA01RoLBifps8c8wyXc8zWwWh+L/3C+cdWRS6QKATasVkOOW4FEAAACYAQAAqnBbx4qchhGRqP6FcmiSxKSmi4Mpm11biS9veWGdlCym6goM3vVh3WGxvEGKJ44Q08C2wMmiF5i7AluWzKBKhfck+JKwHixf/i7iPZWZLqE2kxxKGibFIF3LLjB5M9n4JnSdxNX6I8R5JLPAMQZp9hxcJSjsaIf4rZefkc7qLrUT5cKTIakCs+b3Rot9ZMGCt8VVtZzRgOcoxN4I27s20A4FLfDbrzA7d0D0bso00M3OECNbCRz/CJpxfAHKiWEea94MrxdSAM1XYhqRf/aeGEH6SI/uT6PnmRq7JJRLjPeU00ON8PNWk+Ndxlw3vf3fHV4vClbCHoubuBZPrw8gHyNY23LcB+OXNGSKN4R1Mhvj5BzhPQGk+KTNrnYGYsDseM7WAtTUeOCYZjBoZI/jgmgxrrIuPRlh58yKXnLg9XZ1bz6ewTAxabWMcTCcFCFjxFsoCJeKFxlRO+IX6qV32osErGR0n80tPjygiUIUwSrHNgYgJ4FCES0s0eV9/1w+6H//EkA/C6KW3smGV8Vly4j0sMxB+41cAAAAAA==');
