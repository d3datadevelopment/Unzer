<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.1.0 SourceGuardian (19.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B3FDE09FCDAAQAAAAhAAAABKgAAACABAAAAAAAAAD/8YoF8bI/hCM5uckCQG2MuGkEnc6BFOCeRdoIJHVx/3ETy86h4bYgUXc0oYiOnv62tWh3yXCHmKn+9raVLZRfqNK+cu41WOrJtPbwZhKeK3Yw1+l+OuoIYoUewRGRudqPmUcL3EzCgHIKz31olwaBe5Ur28iKKhZ8Sq2XUm/zuAn/Qri+anME9ihbjtdZK4wUI+LgpxUogMdnYXxlR7kGjQaBh8jFM6ArCAAAABgEAACIRgshxB7nu5sHgaNig/zYF+7j5uGSPZ9GEuhaVtwvUJRJpkXujsVLjET2CHanqZIgXHjUvWgMciq+tKH5cfCsDY3rpqxp5mOMQxHwyuKnl8IT5SVJdcPPUo32hChfOHbzG4wsiupVIg8Zeg8PZmThQ72ahNyE4A3NWvcVKCLLO+PrFaF0vBrCfCbgMHQiAkok+lMBqrqd36XsDVCWSwkCtkhskB88+EKK7k3BgtZVJ/N1FfeRnWdXG+Zj2HAFafEyJO4yLXd6hOyozOGRbb6udXpCmpBWbsuTj1JUYxa4On1LH3XhWLaCdGrwa6okvlfdv+gPck+t1V9Zmd4yOK54nI1TGY8ORaPQlFrI5O5L4okXO8c3onlirnyjeL2daZBNXQj6KW9ocUsIQOlfBEiD8qPa9vRgwTvr1v1Jqf3ihgTG0HFfzBpapvRNsKJN5KQPAFYgN+lDhJlV4NR993gNjpKHwfx8xEZDVVqHEL9CLqi8r/yCVXJohu6sFZp24izKDGslHyvcu5N0Rzqj+GONvmgkbfND7M2/DOAtoG2M0YBWRrgS/ksgPt/3UDuj71rjhxPpWkqkAAUkboPpo8wopG7D/Hj58PYLK3LuvlkJpUY5cN8K8+Tf+yQ2d5mCULh2R1e+TVSf01alzwClo5mvNu703clMtmG2y8vrfnaaUyJwMD56qdm0j4hCaz22qMiyrpbnoF/6YBVH3S5WZwoS/eupP7Oj87X8SAtlDNUmdE3TLNrUbw6ziEJfgxJhfo2K21c1ylp2mPorHeN583xMNpXmZUGy3IXsIoWPI9bRX5Q21Ew7p0o7T0dH2TTCZgBhk3C9wSCx5UQ6akvl1IY29lgNGGLX+jyboyEAIE0x2EAx1aAFC5Nuv+kP+TsHR1nhfuilBTiQGtBvbm1WqOfdr0rcNgAQwDUA941MrOfLO5Jfk5I7+rKCUc/wt3EnrLFJVQtapBHPSyYPNgfhVTFEuisfVcdP/2oLFnOiC8RWRLEyci4PqDLB/PEDCjJ7lv625Q4RB3+yCzxxUI8nrxeHuEu/Ao9L17li+hWQFmlcLwmS3cOrej0z9oVZ8F2bk1PBm7yyYlarvDvN/9LGv+/En397TJ/WH7CmZYGipDqBHus+lgeQO4BnKupDEr0q1UyQpDbeaklG+wyaRGInpCSbqL8xxdQ5bgr3VqMJjn16SR3WdnZFwLCvmADpxMIQqde8fEOAHtXo2shk6ZJtkxQq2z3EsfsKZSF0H7s2ezL26i7b+lJa3tmCBErokEvxO+LeOAOIiR1KIP8bc7Mjg4ZI9mFHH3gk2ZgOB7EVcn1+YXBz2OmuJGzyz/57faaHXGW4EuUIYVceH7E/kjz2WDjrImfs41/P1/FoG5lOSY/xIY/HpwOVTZCjUQAAAAgEAAAoxR8vbc4eOXHJn2skZdlRlVCrLOtGlKkYHWYHbFvBDVKpEnIFN5kw6oYE8swYBpKqjdfzzmGCN3QA43C/lZRpGC5R4WavydMfWfGbMHaWec7m8GqQMTcbWOTcBUAcG6NWnm3QX25tFzFMWutknovCf3h7lpe2gbRlrhXCJ7PgVuRvydzLwzEBQ8KNq+e7qLLUewO+y3AEIaLnX6MwJCI/5fgjej0A9tN3B94QqXmL5gvn/Yps/3yXEOpao+o3GHP9RQCiN/dBqk4x/s0phm2CvLKWfdiBrOJNrBIqXX+I/XZLRilJglXfERIYLerW63jVzxtvTwZE/Gnwziobgo6xtsymi8L+ywA59ELksRLdl77PdBWCWCigMaBctZFsSNALV2wNqhdDnfSK/iP9EbrIiiy+kN6XOZW5zjXXaMC1mbmNheJtWBTYhDcUb4GZYRg9iqLPjXsgdEg0izaVEuf3sef5SvtrJcwZnN8spysl4Jyf0vrgZ4AbEe+q6hrj6ik/O1Y/GlRrCsRmISPkFbB2pWIo4VngrHwpIuhR6NqsiaIBaLIn/JEukmrTxXCzInexfXVpm7xDA3Oyl/HAv60XzpDqD5UJouZ2M4kQt2Tl3Mz7PQEGcu0DfCIOWW9trMKtP/84a75+8zfk4XUfarSM/g2zLxLiIs6sDGm2f++8ZJ0OyqLbNqAa1v4nJdKGNsMXi2w8L7+UUMGBC6ghKALbJ+eZP9XYGtnodV+AG7EokuPcqlmQe3GB97GmHUzPR/TzIHeaHo+6cB13wZSElk98XmcSlf1u5XtGF7ZHCHt4Ti/88WO2BqQwu5jrgIbGL7bEfDWmXXPHB3hbP15MWeIUqnGYuCe53JCsECQLKJRoIlRs59Qgbvga9OOe7pBkVo/SaNwQ7DO213lJeG+s0UUsS6mtOTozuOihqVLZUrreGJD3sq+CzmCmaXn+9MxtTV+0pmsVhwQX7YLNBaTlxN9chqQ0GVDaYOMmEBni9pM9LVYDOnWKbck2q9tkv5NNM2vLeG/UVOJbN5VSRjggeo58pSSOCMsGgm0kYlk+1fl47Tn2ANR/1bV2Fmob2jCwdqPEhi+Sy4l0UTkKBbpAqTn0O5oOkHGmQUebMIMweX2vx7OX4qBsH5aSLP68igNydHpGBZAjV3lAtAxbVCFqBRHwGmd8e5W72pbI8nUy/tmgyAPLICFN6WxmVyRGErdUnzY0RK9ZYuBkE8gnBIvhao4ulQMTVI+4xK/EosMHYB4GlEylekehYiA+LPY2sZW4tbc8R56c5Jl3bFxJO7Ti4DT+Z1OOOpiV3D8JXF+OffOKEjV29y0vHSoXbgqERF0Zc0mY6it1Ws5pEwVDG1wdppt1oqA6pFB6iVNSAAAACAQAAJmaMWwvcSn31KUZ2x1tVLdowZKCENTgxBjnD05Q0LLstWmggPwODzjDhe5Zowj4JRSHE5PJ0LO5VvsX0XJAr8efvJTr8d91BxV2ZK++Naqqz7j8rYS1T9DlY8kzBPiYALCCgwWNLIpj8VVluRwlXBZV3d6DHE3sKL4Z3h0TVI32o0FDf7IxavAz1JbpRWLAnOQk4eGSG86hquExx/GYMXIqNM2wE8LyhBGeqRm9KE7MmgNWg9tQSrZR7JBoC0lxcBlRMB9e+f5a+zuHVtTu9DOdN+lyQHgqF867aVxwcLv3Cc1mRd9033ByFRaNPq9tygUTFtZUz5SSV7QSsLpw3nrMh8myrydRoaxRgzGFD0mXJSp1bXVyD/hJC0pe0PJYPJSfRB8MPnVPXc7k6zFQojRls3hYoGdxLJVDPTbGRnOU5LrrAPKKEB3FAeHradIPysWlzFwmty0+o/DuR4akLGU0UcCLgit2Gj/uyW2WN1NFzOnFt1nt5bUZk+/1BxTxiDH5AYQ/CAA6Q4oBNQzDZIJSMfq4IryFGO+w6959TG8GkMwbYX4uCJgvWCF5PWPvdAURYcUVm7TPg+1A7o5U1hqX6sLI7PE3zE0t3GY3YWxbGj8vdvkaqNqjZnaUOmmH6fmEikzvlvuR5gFl9XdU3jIl7i+KqJLzlrgQjv7l3tB2LtNbu6xMMXqrytD8yTolBQ3/SAPqUDX2Yw/18tsLer0oR/3HtliXlUCj2zIujSKgMSJo1BkDhExupXtzHp5A3y73bU7KiisIYnoSN7mOIWbD3iIhD1T7A651Hy+k2VvJpAtv0Um8AHek4wUr+PbecAkun5WuxxDkfiajrEMiLlwTLPhyMEzXor8Anf6I54ip+Bb7J2hSRvc5pZha+JRFAJ3ac223fJFD2/PiB/ngVwhoVL55KuinAa2HinCJjKy5LSq2n371AN/xGUGa6khoKYf841grVy9PmylhV/hEXzEQOeg+o4cRKGkmvQhI344/ed7DvvIi2WdvwL8ghc0Q3bcwquq/ubmOCSMPhVqFm9wj1JyvjMZnkPZdDcxYXIEAQ84VByXuRWYqrEuIGjZFeXLHdy8dOM6QLRDaz2BqPItbiymySDsYpmN2wHMD13U0V3n7izAuTctR6IaOtgDk67W4hR2HduMON3LVc6aPLRYuG3ZpksN2dN7nBhjalktCiZF9IPQ5/wPDagUoEG4Bbt8DSBlWPNw7hZMNkgKrp810a/MhYPTy8DlUDd5Hn2QVHerVB0NjqkQlM2zd4xz16GiBxV4BnZzqTxOT2ATahTjsfgY62fWtjmUlIAdKywyGdt9yNTRBsGwaC1Xp83vphgHM0UEEJQFXQ65XoLs4bey0SCA5vDor/wAAAAA=');
