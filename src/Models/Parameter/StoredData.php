<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.3.0 SourceGuardian (19.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B30DE09FCEAAQAAAAhAAAABKgAAACABAAAAAAAAAD/ks5pv3SQEf8dkhTBC5hxZChznA/xHOvxVR8p0rEsq0eMoinb2CzG9q3yeXBOS5iOwD6AT/Z9fd5VkfY0iY/CkaLeI+yNQLx1MT5M2MV/GJXmz+5yyew4sPjRAPk3ZKOa3PYpl4OwgWeEBdEzMjqVfetdgS9lUJd2NfE/Zmd5vSwSo9+SukCNICFiB08cmZ9QhZPTf4B2Kh453YvGQ308n8CUBTWpC++UCAAAACgGAACcgnUBsqaznUUKYwFhq+MmBXiNH6dGAW6kYjWcLBfRWI7Gi2n7/dLxM0MIKtSMOXdSImx75AQ1F+uEFXzKu7gfEtKpuxvJc6/ZCWAUjQFwJN2f2JLhzSgswdw8GeUz0GJpqVgoqIRnQMZRBSeaoh+VMNyFIgdpx6WI4kW5y9aQ3bYgPhP0i1OMUyNqvn5l1E/FRd42uEnPSmN53oDumqIAgfLnsjwXtSym9ae6OLxE7j5h2hiY87n0vZyPIqJZUCuRTez9BYUbTBlsJIfvlcXZr5OYirpkcyEpxKOeYP7wdeA0Oxp+9EYJZd32tlsiMloIIMtELqTsfNgR2MFJShE6TveYcspmemGUV31M6X05V4LmQNoTAQGORxSMQ1L/ZFJ0kdPD1gcjECQGfnGODBbPYO+/X2icRamLha2WVnW8WJDqtsfS6IaFu/eZBWDy0O3yq+B8cfNb3mVHr9fz3tMHadAztmU/R3+mQdL6xVHBn7BbvbkMlmL+qew/wKSG/hOMO8+wMApBi+9KV3TWzmJCR/NxyidpQWfEZ7n90LdwCxC8U+XiubzDvB268M4F3k14QM3OKB8j8TModyj690WoP2IfW+bidDKfvwbKsU5Nc4Duhk/cwVX6BEoes3Z2g04okINbSDrAAGN0Kkocmkz8NO7bl1CLIcd2fN8O8aw0HKLIe7oaKbiepXcwJaJDyqQYSlLDqXV77KcwlKI4LXUYUH5YV92GVnJCF3yMXhQOxUvvyFMbjaD27NKT5C4zKY+UOhf2GKPkVnv4ZI6umfDT0WCz5gP9XXCLCSh7GwOYNi7RKyMI7K+H9Y0DL/gVb5N4smEakbFsCQGy5ZKBX70TcjOfH502lyp+dF4JNq0/Cd6cweruk8OKEZ0J04LRzpcvfupQDGC92jf8vJgRRa8+dJVxkx2c25Rwi7oqyeUDSRPm5aSDgTcVQhBSFdcG9xNrVOkhEf4bc3T51WlEf3o+nwLY+LnsUi0BKhNFNLst0Tn6lQvpYcwwY2PKtelNiyNideVtkF4u7gCrPrYZHwH9Lj4pZho8/Rlks+uu+vDiFE4kJeQY+7WM1zmSvbkU4rDN0EabevtpD0EFxckQRdwBx9Fna0kU4iX8pUoc7LQN73h/gpAsVxSv6kD5ifM7BsQhHiD7SbWk1UK4wLQmxzxwYjL7CIW+waRBEeBafSMIZMZILPqzerwCplFRrMD2n2nY+qm48+lCVwc5b2FOyNfnB3tFArnEkkHkMldDwtOH3PlVNLwUF0UMT8/QBemWKjofNodbUjHs7SWRqob2n+wL18Me2j7LiVzXBMxMTTMrD1+nHIUBRLl7WZhgCJzSl1EeWchOIKOngQLP87vEuMjWiajMbb7WajZ7O730LRFvvdBBGRl+UCEGdehOA/fn2Tm7MCIxueCXeb4A4x5MHQZiMz8cJIJ0VaHZKFiwD5WUcmRRTOClDwzPLfEbb2w2Hxz3IAaiiegcNxDrBxmzXOd+stbno5vGbOchDkW8y+3bmb/AWRpaWMeVZLihy9Z9Cd40OfLz25ncULSR2356ZRVufubQhfAhUWY5oOLAnuST6NZva4voMV5e2APciSBx27Gkx1Vsg/PC6p3bxQv7C5vpjIW2dW4Y59n+iLrqxP8SM9UXe7N18IJk/5gfkdWQQ7eC3vXHEygwDp5k3BL4QmDO5EjPU3p3uMcGqUB1CZOoaf3pAvtfnww2Td4lKCMpx+jGYHN4Qe5aGKZEyeTCueEqAobOmnm0Ifv+tF6v0H0SuowFQBfe404t/c5n+HWmIYFwqSTaCpFzIGA84WIlkW1r58BbnFIpzMCS+XDayQOrOYeoKDikqBIDSzj6UdjFUW/8Ru5PQq81elisEKp24P2Eto7Tpbpk6suuIUelgAo6RliP/WU7Ej4TgSFR05KCMh84OV/4kzK51lvP3JTD19xVnVToM19mruwRmjVoVh3EkH2tveIrQXq7qyyAOto/4/Tj+CvWU1M925IiTrOKM+yjBy7koYacMdL9SalmFVoLOQUUIGnP1zU47HL4pZOygYuWbM2DyEyp/XtTT1TRqkaFgb+nyOzzkIipwQ0AUYiAwsFU+i4yK3MDUQAAABgGAABoQ/yPZ9XWLBPFqqdIfUS+QP3V2JF0Qnp2C+cKRogdqgVmQqINGCQdxXBztTsRMszejRWvqCg4SAYegK+HOHrgyO0v7z6Wu48kWSO5JjodMwnAtF9NfydPgX4mDKHSyuchrYtupt2B15sIZM1YQNZb0mEckWolvzcPiwkGOhSwxyix55VNK4OouN1GuiReSkB4ulZidN5nAPi/B97BOHl0SlvYSe7w2v3f4Nve/o+Q7/dSCZXuBhK1whs2veh5vXxXxBKvQKrqr7vKXvqMAH3wCcKuFH8duqWkEiYIJHwYyY0gUGDK7pjOC/sjH1HYW6lNBK16SqD/u1NHZWz8+q4/pTsgYTMwPFCKf9X77mp13zK5I6OoM0CPQHF30IX9G45Dp1Jp2ZKwxpdqLosFRmDFVZcSOg++FodK5Zkc+qBKaZetP3GUOReT19zW0q636/np3CBEFzTfuBtdQ2lS9JuSUXfWtWTowoCgp99ErRAurNZZJjiHngUk8OV2XeOATqhaXFHy8NnQedI0TIpyq1aRXA/zsG4JR8p0UkHcLT2jkYg1bYmX/iwRcCyNLn68C+n5UWdyIr6hb1XcoUp//uxMWVSyqpZtITWyjmm7+d6eOIT73aeWlUZ3ThpIkQv+GAwk/t1MSnE7P30sSS6JCx9MWcBeyhQLQ3KJnLd3idpG+KqfPS4DaHcQnCP3PcZ1D5rtg83KH/irldybJQospD+EW9RyU812kWaN7dU67BWSscV6WgR0ITTsbRPhpB+nLDvR1hotxT2JRR4EM5iaF9Z9wcdMmgh8UHKxQsOdupPM2a+NvXj4ZPPsWtkoY9NVL/wvIBaSN9wNjiyXZBFUrWr5pF2kxmYmnMg5yh+LLr8OzpqBwxkmJsK9p1D1M1XAddrRultYmGi7oYDnICIuWQ4rg2TnsO2uU7tk3kRoaRxXiVw7Aq7Yd8IpyndZM05n1lPOIVziGUroM8dAccuV6VdUVacMcgwW9s+6AKw9hBaVY7Uo6DHoSVqDtkKNKlgcYsSoNiiuDmE8NIzWUFnjLMPTTVoE4dbawacKvHz7nxBgkN6OHdpYlXRGwxvDcwlKo/zsjYbC2fZURSXkQqx21EJZicCvnUvK735Y8L3WjqRmrtQfIefFj8HO1dDhryfHmKom9MiSHSWUJE9cnPvKWEUp4Oxm/hQawkT5u3rUtLUyP9xZoQBtdqIFWIR4h0wbSmzFZuP6MLb88flGdK5cH5uIufL2CAs7pIZdPsGHRJpnX/EoJeXZd2HXlbatixeKAIcUz5ljK9HXda5+Gu72Gxuw5PC7Mn7hldY+8q+ncMoN4akCLhmePDSQRxmxaBWZaN1gspnWqa38yxVczv3PblNS4xhpCQucexbZCbxlJt709qNk0bzQ1u/sUtS1qlpF3jwmxOvST4QQjjOWdBoaHDhCDc/7YLNKuqe1LSfYSkdPSOKeIfpEAbNaJc4AZsDUpTwOryhRtPgeUt8VeQbh4lRiT/OSvWQhdTA5CH+SaGzl3Ypn6YQoRWcmYGEZ8DYkXicylC9+MvhBFYctVqgu23+QgB+0GPjobEABIhNXLb3bCaNOmJcWmGZRaCuxiCMzJqNGB9C0EQaitPnn/tQcN91ZkTy8rYS/VaVPvDy8W/9zke0Hswp1vdi0KHpX9J0MkNIfd8TQ+jgKhJh3vUNFqHInP+prgMgOLIq8BS/WrOvtRwMsQc3ryGLqS9p3KHeznCxyRxzxSVV54zwQ7MN2fRofU5ulbKoZ9ru0jQtYuMeV5SCVaXDIyRQTql4gpJDOwfaZtztzuIDKayUYIb2/hZXPTDbJmeIJJm6bDa4Rqs/52MW90c86I4xMlVcuTF/BZJTN5bHEFgLnn3I8MWffzC9FtbUa2CygWKcCbpOo6ZVYrcx8Oxmh/xq4BrBBdGd44K5yEfESJsh3nBBwj1y/BGLv+rBwXnMXn1uZJAfutse9bso1UUQ93yRqk9u02jtSjF69Mq4JQKGPDmVGyEJCrM7qZCOsUim2KqVIRATnZ7Y5NqlqeHHt9gd63LTx9DK37aaRMC0UqPTHDycpHsuTQ2QwXZRGd+PIIKtSAAAAEAYAALS7ejUf9xa9NB9U/IDKWfyldTxTZMHxFx9aYTpyZDr7Uo9wGPN+rYEkT9LpodG2zuDaNeHOsleiCavd0yvbGitRnVB3B0MhQtSgU9AJ4nG3lvqEspaBhWpklGFRDBA08wJd9XjqIIJmTbgoQVDu/f1Jgznc2B4ADEGeZFvqzfnhEtfPufJK54f2pYNswQZkBNrHZTcg1i6w4N4JQZzfa8R1QdtXMVF6mbDJ6/BMoUPEXi83D0i4wToH+7lZBXoUGU3OCqS3kTBbsH4a1zFFFcsGBiMQlYUVbOeZpZiPCEGJFy4XioJf/Zlio42QdLwlwriIbYtbj1TXXvUxCPzGE6dQhfQiJkooClxgHG9yiVV/KuGSVES+n52kkEzSAe8eJhXjnkeChNPnvCUp4GfBeavf4CyWGBk6NvxZrniPHAc3At9e5CM85MxVftsAqrvio2azOowWaTnZdB9XpdUc/xSG8jkMHh9hOYIySecwxT3ckRqKRT9s4gfPH64eoBa7AU9IbIk+9I0erwK+0noX3o9oYajBSIVD8rjQpjyor6r5M/VEYrMgRO9Ka8NlJWvWq9UNj7T869AxhugbmProtci6n5H2HndsRnyRSZTcxtGeCXUYbA1oE8fGjl/Y6rl/wD22m/39FmmSFWAwEvBekf8c9qwbXayZGGMwZCixetkcCe8rXJrSDpmbpQTT2DXZCI39jGxhIQxzLWoqN8sOmKpP4EsoaacsCjXSGANHUAt6+9M3p7qrYkFdTVwkijlGXNEWO0aGjxsFjdTsItEMgM5xa0v2nOp1fA5tbd3YauvRqa4w93siMy+QDR63PfZ0zSk2LI/HHqq78GmpqDaaY88IQtaJJ1VWf+ksz28illpNTJg7TGW5v7qHBzD7YLEBvVazmUFkiVCrbF8j8Mpun5c1E9BP2hLopJ5VzE9yKDrhc2I3mRiAthDwmswsMxSMrMaHdqu3PWtFVgdVT1h//G/Zm7luGzwB6MkWdZ17c49ATYynKzNWgIJ/SYys5dcPLUo8SlI6GlcnDXUHgTuT7lxynW45ercE9bpG+oml+JikiwqY5W5z65qCY6Kkkt/NTdLxE2vbUwQpOtaOQ1W2MNyLkjSbEl16dLyaoRWFzozMvLJ+ZLuPucrV3gkCv8zcxpqJ14afR9JKP2DuCz/4hZ/+pxEyw04sbmZ0ddSnQd/QZO/L2cfPMU5xPGYeqGVtrQJ7l/HhoUY/M7zNJN7qhp4L3oRcyo2rhsD1/5c0nuhcjBrXWNlw9yAgjpjxnl2pzhvyP4BzF3Jsmh8O6iV7R1oobPJmkMhd0kLhJ5tySLbxJ8c+vB9rZvtIss+U4+D1xE/5eFCDPebyKo7UBAzKiCf6J/pN6EZkYTPduJA9gu48BFEL7x/bB6X0d80Colk+ywCvE/dnGlMkJ8+b4TsEkIY/J7KPGPV6QWP5atvAH4ioarJFAJjfSrWpVqNPFwodm07ZHKdKiA+nY+ezXzF5W4/lo0eSRZo489rmkK3BcApnbEv3gJtoCDwUTgc4fUFjIt/pLa6hGxiQF6qyx2XcuIcUiQa3LV2FEcfj6KyQA2cKn62/vhB14iXnX8arzG4lBHaMDqlH1mQEoIqTUpagK9mz1Br1DmXd5FZV0MnJuCSgTQQT46jJrhxNTjKPL7kphA5p/VlCficYHxihDaKPSscZruV48zJKS/eZIvCHof6g7fypsQhWWiE8n53yn+EPMqoay1JB2oV4A7RK4yJHStkw/ao6FAce0I7pZYtLHkaF9F79eGSoE+rtEjchLuyWRMc+tgBm9LhJxfS2dvffSbT5fuhH+Yi2FnrvhatnNWFojrIL3KeiJqy2l3GLdOI7Z4yHQLd7qpey5t+nPDNtX2hokdKbpcozHe2Ik9T0sgG0ei+YuNpVIBRF5e9SUZHdroOdqjjwvtr6JgXq1dMU8llxsdGc+paRReGj+eywuUW6ZcEUG0EIkx7obEGXHUZYG5GhNhhWA2xiXb0orgHelRDJW/5YzZ6XRfMto+pN/NczbC/pV6kAACrVxmfetco647DHuni4aqMvQn/nn5Z9nAYAAAAA');
