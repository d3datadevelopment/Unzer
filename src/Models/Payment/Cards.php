<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.2.2 SourceGuardian (10.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B309E09D8EAAQAAAAhAAAABKgAAACABAAAAAAAAAD/lgwyEAaDPneGHnYjdwFIQ5lWxjEWYisVuQhcE5STaxf2F+kzqqPFOf7Ejs0Kx5lpsw0u7xhL0VlNT5pOkCZ8F6qOntmqqONStA7dfWo3c9tlEKIXIsrSTj8hWPwrsIzUsi+bBy2B5gtS7Q8ZWaLQOiNVsFg92xJxpWMB9WpUODNghsrE9N4uXQkXzcsVv8ms6js2MLhEM6Rm60ysxuU+SDevpZMtnKFvCAAAAFgFAACeYromMuc2+J9ZbtyvcP25VnEvm+bZO1MNdX0z4+WrM0bttPdRD+YweytQhkW8oeYvWSXaBfD68KlSGhhso4oMzIaGxWgw9ZOz6xo1HDAgADYzXZVRffLzsozxdYYWS4+dWMITD+4TS3t7AJZ5zmU9P+YiFTpHnFA+WHwj5JWixw4X+/HgIs7BaOGB3V70PQ5BcvReKQ4WFwxmtEASRltexrIaxKPVvjEajS0CA5w6VLGTHWXkb94ewQq1osfSbBb5BlNOhqmXv8tLOE6Mi/R7HOA0F/puNqZeFD+pd6lwDqIHbvYqOyfKySt67WrmdfKn05JrsY7ZllGH7EygQIVGnTZO+Yzmt+hZ1iDIHpY4DvSxwrPN1PDYl4VNEJfKUoY+xYHYHEAEexlik+L9Y4s9+Zj4yi0NBkVPvbCZBP2e6+8V5wd4DGtYfvqDhJJAwst8VcKGxYdzAnb6XIag6WuMMn2pZW3f8FCo8AbDPi1ZEqeRiwmO4/bl0YlTA9qKDMnMk9KsHx1T7umjwpNhmkgBD95dASZPAmoMIe3nAX4mF6vHfPVTLOWs/UnBLbnUAsTuTdGFvIQXYhpd2XsBJ8DC+sKBGqAvT0Mon5+eM5JjZHax1aBCfwke0T3N/ZkCh84ZMJix5TKCOmXSDyoiPPXMvdZV9XVTwBwBaCK7Icd/NhM3c0vFuIrsUcVFXNzbm8DYxbM7ROe3VuEKML1a9UzJlNY/1Am0jZ7vYVbnad7/FCr0EuNdyjV2L3STtvfHVbiqEj5dDOFWD6oIXIUKMXof7nvuvdGBPcz9hP00/zI9Rv3TLNNKs6xc88RXNWbfaG69gutZ9dEY5SeE+dkM5uO24ivNYJtsaEAeYSufDdqGRz3kciZnIFt6/jXvMGz7qx1Q8zy7zFzj0xuSPS7dxs8goBpmEUI1q2fdpcMXEYd9ltNzzMpKiAjl+9XZk/XcwjPmUGlISci3nsPS2ArJWZHWlsddBNZ+ntCxgPjzQMoJ8G03WrLUz9Z4FOK0Fp5qMrXGw4qbFlLeZbhmtIHIlUW1orFaonYbK6J14lrBaC/XQRHvSuh/d26vTjPrZT2l8/G6xIT3VpAxTTBEwn5PqdOAgRcYdPHJu2GXJPOeWDlTrhMEX/1X1Wdr1OYsXpgzXmvlpN3INTD/2MrhjhSsiq2OsWOBnYDbNKEvRZnj/pe1D1+L+yV4dyBrVg6PX8qImSt4ZUeGSOdjh2YUNksZqElssurhx5rYRUwltX4kMV7ufAtPLOYeQJKoizac+UwIZAXW9jnm+wgWknFzTmC3n5JvmA33QzmECr2cUW5qoumgGLETWfgCPwhkq+zovRroS4MrBUpQEVNZhjQbaLyZUo7tm8/tfeFy/rzdhscThJtr/Teo1IwrV34rOG5CftdOUEdKX1L/1D72lNE5JXqOu0XjiyfKdAqpEbaCulz8JfaIE3NKOA5tnju6nlxAdrtWXULR74+qbIkDo2+DasaOhodH5QuRoG+uJsY/sfN1Q8lg2scoDjZ4y633/mc7Ib5yEcdzUlkQ88sKz6Tjn1uN5hQ8h/9Dh/CtgKYFV/B1AWeP9U2gg7DjVfkJ0l4TzrOdwbaODp0RRg07W4W/+O7b16OWfNjlpGin7Drje4gr2aBVRqYkiAWamOwW9h8UvOBIatLTosRMVoTKtM0o8CU1lMg/DSygadSnMBNBp8r03wwH4QEHaWte7XwhIcQ3p93LW+pGEz9O2JHQEBat09AImpbf5aEOHX05KmTcRWoyHsWbbqr9POJbK4M95x5Gt6Mt4EKhod+hGTwBhDWLi0Zgk9NLNhR9ViKcSJpRAAAAWAUAAKYKg1mNyWe6458rt8occ4SohTbs7pxtK/1RMaUK6iIKqoYglaZRHEGtKSyyGzK57mFYjA1wXlSgtVc0guiu8R/ozmtUGuWgGcU19uYfhx80PBX5OF32z8PW11PtUR54T5P70wIAykgyV0LHqwzUpXV2ORO/C+mjna63K/Lj+JPGvP1cZy+GKuyyTIohhKmpDHyjH6iPyi1DaetebwyO4SQPiMBDmgtn9RawoCLOb89ldTSb9pU6gToxp9Ah30cd6IfW7ITva84dPJOspvJfCQDey03QGi4ACEJsRqYDUjmpcAPo6ub80TtJ3mZ6k6qlypZlgdXOpRvHKTGZ4VAc6wKFYNq6ubDecSwCYSn/BD1/9ryJxRp8X6u87CfrbovL0jOIzzOTnOtd36eQeyApwjCHTVDnaYA34EEEbbLqsNoG/2z1IAqz41dHjuJWoLDhAS1if5WPBFwo8xD4J4ONzYNjzoxpL4rTByv/DVTS8OBePIwtWJv1HYrNYNuabGqqLRMks1RT9lRBWtvfIOn6Iq1ODqzP6EZ2uZ5zhIY99hx1Qxn3hvk9yFW1QN2I8Ac+1N999qCK3ySESsE/rzsX6K51U+9iQtGZur5Gje1y5XRS8Hv79ew5wGL8OaF5doMP1VL0H/TcYzJFeGoTrLWSC5QLF9sx6wiNbdtwW2v5PerLdNayVVkxkFPqc2Es2b5GOxzJYj3Z2275I4oSuJ3VxR+DkCQM44+z93tWZU0FoWJDirUGWSE7bhnN/7RGv3fLwL71OiR28zIUEQ6pujI38NFSXt2spem7BIZEZY1tENQVt/wNMb8jsCEdhriiYeA55kMLCdyGg3ceJg5GfHf7+5Wx+Aqf1Gmhtd58sa7VHhmyjjUAQsDzTzcgR4093byD2gMo63/v694Vy+8EMKBqnaRCPac+F5SO2ziVn8jPY2fQbA5hZq74paR8nMOh5f2tnU9uw+bxhDLZi4Zkx3HN2bFMoYnqm5er9OpHnJdT/dgu6NvMTfPLDXfsgTB9vjsMpSMwZ+k1oXD2MhUhCK9dV3Om/QTkITVjolyfA2hEV/zvqPxC6UfckXs/iUBWWW0R10JIaR4OlSrhC3DQJFQVDrhotyzZzENPOlbKZdVfu4Zh85KzJ34l9OruqJEh3FEd73eEi78+EsYLgj4XS5RraL00w0VlHuWGnkKQtODpRrmi+joUjCSaN5JuJuy1KhqyO6Fc+rD+s6CA+Y3gc6/FZISvBqNXC1V+eBLJMoSkbdrMOJrysZI1rExaFLVuVIZEv3bp+Lx6g7u+dWZ8xYhmaHppAkK58r52Xk54gmlg65oAOjY46WCEovZgfd4bgP801OSHYgWmCXAU07/lY+Nw49R+Qnc1a5RzvSHbLT9MmDqxDav5NyqiCB7eP5Momqtw2kKm4GCUCEaAEiRvTjQ2v+biqBl6q59zDBcqE9mH+cD8X8ISg4SDX7he0D7lGepQ71MEHRXY9h+8vwZPH1TztXp/nT5nlmyAp+KSmTBaih4z9vjbcUDDXKivXr3BPVryPlwjBwfxavijrty3i2cdHxuc2uX1Agm1DfTk+xP8HtsGXB1L8In7PDm3CVZnvBChicBMF2wAfI7kLSN2aRtQTQZ5VyMNRnx957bcdM0sfE2o0isJxiEHaOwahHJhwmkbszkn3L9ulioSWRubAaVDmlol+0BZDSVsd1aygqKeTqP6N83hLFIm0zkTodhXx5HLowIolCW6P/zvzlujn0fcZLvNdaMcXqRpszyyJEv56mDs05/ysItXELVYnXLGSHrxaN9/2o02OOLsA0ZH7sNtA0jXBlGiFJxHHFIAAABYBQAAjd0Htu7HrwB+Gd4XPul2YqwY5Rrcyy7IaKvl/kHsfzCjkxdBFB72A1wnDx3FDhkOeMyjw0ouxcU1f+r2+y3j0akS7cGxFS/RjfShHxGAazBfQaM2q2QGWh9FuAFEOrIiWvH3Bx6oUGGiRLwnHEOxe7R91NzdGTZGJ1SkSncKLXUZHhjivDTVDzSmFQkO4Rw/ILtedi2fxaIJnmKO/XyNzm/KTZrzrYq8+QAaTIB/UlSycy9EV0RrXLeMvdHqNUUDuypauhvTdEGOIidSlV7vHLsc3Ot8lDG1TYU6GQxVqqDQXf52XYQjyQRWaMD4+GWA0GuED37cKl1BMwOoEaOnV6J7YPBwYCSElB12cykiRHAC8gCDGFwbhYcrTizXTjQuiCUj6BMWg+s5kFXSei+KaMQ4eAei3/ZDzBoa98GX+4ZeAvnEO8zWbSR0HJnxjpV88d24DRwcGvEZtLZin8jthOzuiNjR8VjpKOtdkdL8/ww05JYla08KkQAw+U10Q6LjKewfDJKkJjjP6MKqH49NTHn3Qvyhgz2DuqBcqY/9Osln2YCtYllTKG03N8A/zs7iYFxgnZQVgesaf3emF32SO6OJ3vfmQHw1/aBbn5GNdfhnf+zZCLJreM63oKh68KHTW06dUud6gkzjJvlffPRot3XAuSpSZ5zCp09WVAXOvP1BczH9hn+YqWNqOrgde933789YZiJhCT09qM0+MfyqAjFzVhy0EMBCakNiASxNowVYU0qjnMdN7ygtTbTwHy+74nnUf9aa7XWdLiM45gSYC3KMWv4Y5SocJ1yeJtx7ADyVpxLtqiiWfOfoV6GpgSedKPQrwbBfnsNVNVHU8TGp+T1HekTLD1IA5Pyn9LIiHbOTSYeqOw8RqrAW+HZ3XQMZhaF8jeVgRWaAGcMBefBDmCqksVdEMnbW4bAi5Kr5IIOkq7N5tn2m6cXhTxu576teARIaaUuAdbQp/w7N6SU4LiSFKnkzaPnOqpoMSHtW5ez9eORGd2WeDI+pKt4cD+yi9udwzr1jso2sPicuemr67yxkWCAuEG9GuhiFsWBOSWwOY0kAEQ328l7Oj0zIPx0hVM7Qr5LJRqUtbk+IcWwc2LWPfoUuQG+W5adNE2fsKA8H0BBxeOPMH6q4XSuWJE3qSnQkw2Lf1OHdUNFe0a/4wfbcUz21ZpX1qSgPCpqY+AaqzUF9Wh+Sq76iZIDObX0WHoQFXA7UQnrOR7KN6Td8sBL3dWwYcxzguOn0XvQYxrXsZ4Xw0lvCJ8UZY3eyP3ddwdr7f7EHhxfHmWhTsVKjD5WCR8XFri9yoLUPhRTPvYPOGL+b+PfkzRinhwV12w+rzBnoQ/qjeds+wc64Nv9eqZTwR72rJ29Dc1VdwASzew5ZE6vty1KP1mPw+c14umB0yiUw3vZBWPkjpM+4g1ZuLxKR9iufMt5Kk3yS+ap4/JMlfNmYQrAh+xnzooUJFNxPGvenMgEOlWUWTgxQY8qr848eMW4zE4arEtU/4l+KWah2SXGkciDq4h5kVB9Rc9cB7lh9RC+ufAAq/g27CVk5csJN7cTBG/A4iGZhAPOHB4Lur5w6ac4bvkMsMak7QMpQ0KGEcQAmw+hJxgdCBP4V6UUzTB6kBeO41CWyK4WdS2slK3PMklVn8yDlJZaRWfyNpsRoNzjoJq1NZcorv218XeW2yDoMkFLf+wW47DW2lNYhYUEt/ZcwzH7EKa2I3nEec4stJ0P+NYQc8kbNINsVhYFBEQiu8HGaXkfAvDZen+bX5wOskJ5NiK9byKBobZypZhqSGYadf4Nem7VfPIx77ppNiwiBqWQ+AAAAAA==');
