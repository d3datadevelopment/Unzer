<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.0.0 SourceGuardian (09.02.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B3F5E09F3DAAQAAAAhAAAABKgAAACABAAAAAAAAAD/c0L72rAlK1n9MozQITIulLynRTp+nddrgppNnNB3KgiGP3eP8qfR2cgNu+tnh4azZ6SV9GfmgQdEqJFSjInV15iahcCVkOMoeCl8bwJGyZzZfWCw8+dYuw/Xbl6iZ5qCxLeK/wtC7ABo1+l1PsApqlMQwOsfrfER6HAnAyUxSQOx/41pPiOgcRLCOszPVSIx0VWumCE5oH2N7p0abAMd4mIs7qiJZ+cTCAAAAKgDAADzpVDAvp708vdr/ykxgLCysk9ee9c+r3CiKk5FXEL3N5JITpWdoLhQlBGt4ilQ5ASGRK05crDROoamOcICsYWjObn8Wplzhxxfn2DOKpuI+wdGa2oDX2HlEDZ+1J9pRZ9ruXeAlGpzxER0sQH2GjmMp9fWAxFEWO1tOy9o+79yV5zC/8UBq0lpZuIwTWfBX06CEJNlbGfuI4uV/to2sJjG+5GZCOxUG3nNZ+eepEzEWXpapP1CtcblbKp5UxyQAcrSuxqSxdhZs0xnh91ZhmIVqukazWYI7vVxee1DDQ5vcaCeq9y61grY5uL9H7XOAwKtSj1jIbb1Lm+apX2oUa9OKAcFguj4FIbDsrq4CUzdlRRIPdsPqCl86GZRA5lSNr2oVHvMQRP5W65OPMk2FoWiEh1cKBXtdAp85GBxSik+c2EUjmDPL1Zko9U965Z9JbE21OoRERbAMMro3/fp0pfXPDZSgUzpySkd8XjCUC/OEfUBmgVfnXiHntdkYIqMlkWZ+a74R5hCj/1b5ROYOe5jvvszOvtBeReAHZEjnQKGqis/PqzMg+ZBTmDBlApO1p8ofuKjYk0Ma8iM+RDvy/yHH52TeF+f3EmWMmAsdsKWlKch8uACe5q7GnIuUccqseT+bEe+de9OsQP5Z2S2g/PCaOvzeh0mJNq0Tjkh3S4eST/W2ab5dV3+TX9tLLdWfx2lwc9nDsXPJjTD/AFpcqw+9/R9Ivoh8eZjpusv288D/T1yWf1928Noe1BK26CAJGJ+BzRHkZmLxUYG8KAxQnGPEHxMeVJNWYWSrILYol00l0PxRskeeleHpQHDJXqV+8sCbvos+JhKhJmwr+J/GmlxTk0AqdoSMPSKQd+8dJJltojrkKTWqYwcY/jH1D+c16kL7OsZoBHl488Rmm1AmJit/Rui2R4orKTylfQIb3PfohxaWm0Gv1PKBiAZQW6n2S716bnBJzyCjk+kOR56SelCrF0UicPzWSKdCvGbjWkzdaqKSbK6he7UkoGeelTf32a92IRMaw2zhm6UDWj0JOg64qRhMYKtAEE1D8Zto2/Koveeb2K0lRStb9B03/FkXpv6jaCE1avZ8YbSibI2s64IaXMTUhF/nLhGmvx7L/acXIaNqTxatVUzvRAFSIX1ERXFRX/Gi1cS8422E6zJeK8B5akzc7+NAxeje0sYCerBDCCb07BhG1wMp6C9AHoAoigWHVmY8N3bUISLo03+/kW90L18Cuxij5JRAAAAqAMAAER4x3esAThvXofybceJQ9InbnOlMwb6KqttdGXylN1AU+P/nwEw4gV49QGUCuttIvN9/+4uxVntsmcI/NefNNQPdiJDvLhO4bcSFdjJudoR6JybIUI1CihRNe5xfV+m8s6008oP7mOk81avReuW4jIqqs/fdFcLN3jFRCCM8wgoJ09cszareygEk1rKYqK1EUsBnPm7Hi+eG7HhkPpMMMR/lP8NlGckKyMH/SBPU8P01BRiY/Ouv6QQtAB1u4oAFn18gQj/7/+OCh8S65UPEa/aMMOllgRxwG0Grrrs80/J+5PZJpz7vhebw4nRF1oQLiZ9TD5BU6h677aZWj00m+queH2zd1O1pX9IqTl2xjEKNE1DNJDZF35KxSD7Opro3YUViWkcGjrrqzUrhL3BWoX0al9Ti/K2DrFySGKpsLJ6Qr7sORQ8SKlZRGABy4pxAZnUFaMyTgcuZObZBP0h2a4dOd/h+dxfpNlsjMaSIzrMIWNVpwHVc+t87wojIKVY/D7Mu91E+Yy8hPR8bcrFJliAE/RW64P88NAxggh0XML0USwWS7zBPyFghT72dIJovvr6xev6bY6ySr4quc/Ad7zZmTYJwFuLGU7loXgbkQMd07cYJ6Yww+MHwYCoqMwb1rHX9z2huPiGNFuaiUIkbxkmX+YkhevPPg87pJrGVPf9aWw5QGPS0bxHciggS0xjzSASRdESPSJLUdBDF6pZK+Jhmf2Gi2FEqAGBqQ0esozup0N3+m/6J+TN1z94t57/yPqP5BuqUHGE5CzwrfAzki47kfgSYzQ2rk/GhvKdbw/FYj52ocxLpqYadE1xSXusClvTFzwgRxvTe3oZuTRfQSNaO6fuGg2vX7ykqQO8osfaUCeTBcr9KYhHsIFwWI/dbTnAT7eT7S2HMhtsiWJvtHsT8tVHGnVSagEar4pLlgi4jDPGU6TPC73XajbJO2gZIYRpvSStSjWswQdgfUSwyqagJ4gPc0FJ4AGRoSuFUvMGz9hz5GEVxJSPBU9HSqzhlCcf5jJm/ZfL4wa7TtI/fKnTfIHii+LuRR19fcJY3h+5NzJZJagayQljWniCJzZAxYnWx6Vw/FxLAtVN98keRRcru6u5fjVVt6PQZrpk3E5gSVegRGSUnFz9itSpL3V/6x7vP9spq+2yF3M7IsduAoXLgzJPTg9phHaEcxC9cwXoNM6m9oa3FwFqvPGrUsvurWMaICqE7PDNVP0WTq+ri6x196X9rp9AylIAAACwAwAAoYZvP39gSC0Wjqd7UaHe+kpcV3888oiHi9LoVXFayFL5/7NKIsWRiv2CsD7k5QRRTow/C2ymtkhSZSHB9ntEYEDDjwYhrZ2krnDwHdJKLHRSj4GVVveuMkZnUmLVWj3kr3llUrgyvjC05tH7IJbrP15ne7pyKaprSiyMCMK0zXyvl/KpMgoJniykLKiaE5MFSiBiOONQRkg5GbWjlIPZyYjKuKzj6hcun7Lg53+MZ939G09DHwHaRX5CssUscUJkLOuVFARlp9YGG9EgtulQzslcVegXI6z73hPkZs1JpVGQajPyJUfKyL8bZfSTuEs2xW4kR+Sv6kvO02OgwkPk5/t51NwiGofX8+FXWV6omCSqX7+LH2xEAvMcf8A6xHVyh3vLMQLivvIeuK0PWRoqEeIfh8KCxTBdy5vnC7BUZuiqflbZCWZtezzLV+5hWeVP6QXUF05OmgJDoWUfuXM7NjbqCnVgE9zhhnrI0s2I1sWTxw7t6eziG6Iml67iN0gBv5SmwXPqr2e9LY/sSWKHjxY22nkaOC5p8agmajXvY7B8AWFtms40tv7kAV7GwMcdyQWSBp48veRsDi61AhWaRbkktqBm521PwLWxgCYSxhfhpW1kBMhTYVGCSPwrevOh/nvXYcU7oR56twAmRGj65rrUmcI+fFX9H+54pJCDKMb6ktgMFY6TriFaUX6BqdARKIe21hEnfKRIWXKnhy3e1Qo337l/T3Nk+NMhF3uZU6BXpRLGzLpyr1Zv1lemKeQscl9qAzJwiTGiD/u1wj1XMMxCXEP6800AHAwDnI/VnnBZbUWdlTSjRSbgypEX7MSwkrgCgnhzzCbawL3s11tIoRNjHp6veOiimvy1rCbPktG/VB8EE8W9PP5lFMHgaCFEnbyjrLcxGOeyIzmQ6/xPs0/P5IaktL5d1LgtiJBwKBDd9nmD554NF4URlNxi7TJP+cT3vtmZdrv18b4nAvNHIzjO8DGSudQ649KNLO4quGTkYI2qgvNh1msXbryrV/M+eYtnUdvpVIwAYXyO0dRFSx1si2sqpVtuC22w/slPe/XT9gb0MoltjCTwCRORQRTyuqsOfrRsM3tjctDp1Zv2X6ndX0Exy/uCT0N53SDP4NsX//XgPKOGdRFxCZ/h8ajZIB3kFbiLgTAQyGUFgfahguJqxV2XR/QtepaS0i86hBS3letESvDIJRpDaR6+biurLpqh0A5Wf7i4xL77ywZ3GGD0ZDeUD4qYo7gIBKBJ/wIAAAAA');
