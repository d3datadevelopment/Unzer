<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.1.0 SourceGuardian (19.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B3FDE09FCDAAQAAAAhAAAABKgAAACABAAAAAAAAAD/dHUGAg5zAPX+k0imzETekqA0cgBTUzinzGAe5ljrEOA6/hHUh9JwqyG0PXsN/BVEoAYCU7decOBu7MBGhXOpm3jn50IGjoEoBD4YDnwTTi8TnPNTIhOvObHzN/I3ZcL0C6XQMs/jnjiJaqVm05btpzOJ0NCj/elmA/w9U/iZS2ttX/rKU7z9dPL6Trprbnxdi2A7LEgNDlm65MCFhW4AT/7LrPsl/tsfCAAAACgGAADLbPdi6ngezWRq/ZIvDAjDMLYtQqzNu64E4+Z4RL/sh9hHgPSv98Fq/LiJaRTa0ndB43Z9pIekEth7eSdsGfOz6ulHuVhoVTZehZ6gWIU9BhwlsRSjWsP/4nXW57mkm7xBKmpyi0DOJ29DmWzmfBN7FWx+xQfnXA4LSL++49prtaXu5ozQpm4ULoV3IU2Fs6LmRpJxtQC5Pp1HlZzFtCPIZnOy83yFocuLyeon0+rG48J2qhX8BwN3a9yPcc532Tc4siD5BERLmI/mhraDvxK8XZYUVxW2ZLznLp5zIYZgG47NG4nEFczycFuzi6hwYK90LQxVra8ZUrNqWkKNMHuEuiYpTXbXw0fXr6+MxUGKaNNqodai1JcSCyoRqgjPd2yrzaT/PhM+5X1Vx6lYjnsYhqKvpFCy4XZ4czQCoLttP3ujTpBGUZWf/HPBgAqAwpi8NetWHDC/FVPh9ln7WCrbFf4xj8gfunQFm50YMe8JJSZ71XpqR0VQo2RpUvyuV5vY972gETaWHV0PoE94X3pRcGq8QVWhLRvbOoZNOpKRfraUHd1KMDH7DmWBUWNs8Unr9NL08qV2G/KjIAmWdg7ibQtRrDYlPGoqOhqvyFVVfT92vz+jepaQ1eTYfq3H9/ZtNiuJu2YVAZN/PtHzwKDyDmFm7Cjik6n2E7R3suNpjnS64qOxBpbArEv5qBh74RonIG/x5cbDEfiuAPPX7t0K5RH0o7AGvwlWYqCSmvhGX5rwIoMJraKwlOR3hTcagMteVvAe4FmLOrXKpwc6EYmaw/jwUng8M3S5+21pqwzIArFsLma68IdCYwLVxrxefL1KT6o4Ut53gyewQbXlYXawaUSFl78TsCqZpTkCpi7xYtFqPclBQjfOMUMhmvnyZzLi6Qw6DI6OU0fsyRgJrX8caJfj7Je0sPwJ0aiuQ0PFVEnukXA8hBdjOQsVJrOsGzxochN0NLqBKl8kj/RPaG255u/MLS5kdfzxXNxs6r3VXHaAsErXcvgwaAyW6VXgh0RJPpRny0JJ7HCRnrfNgGv53o72FQ4MP6sgzmUy7MmzMxvVr0x3Fcw/Zv2hl9LPtMOeaU27e2MFkhFKHAiP+Tfs6MznKSD7lcEN9cdKPkfWM8k3M9VZT06Kr5gjmq89kMuOnhrysLhaCVKi22TqdPzwfs+mxaLUlaDAUWMLLH3nXLbIZ4QIYewiS/4xPPAIQU1h/dtQM4AeRjHijSeEzy97kaMcVbIGTOHw0TIUzEI0M7uGfumd38OckhV2ynCmVXNBFQ8ntoLzkUXTj416u/gB3Zbba03n9didYJkt+rrBxmPJRfWvTpRZrwNH79jPabzURljErNe1xKk4JR2Xk6mUmOIIsHZ3UJEu4T+dLilst4EEQBU3tx2TaelVYBG1bvNDdwpDFK1B64ii+ZSMzoNb48+eMcT7NsvD+jUVFFgO4rh4kNeLZtKASVbqJlZG1REbFrMpqTFXhQpQyd8SyhKxDC5PX8hiGsz4dkOmQ0FN9mhZObws8Sr+KTkvIuTg90g4NSRJSbqKAZKt/8iZ85QyFAiyGS3Hn0wIcnCpYzjGvscFvxm/xkIJ29dH3ZPSjGpOHuKv1Ld6+DhKNUnX3KRK4laebZUQ2YsYXHjYFymusb2opvBlItsyYJS399pJlqNdQT938Du7gD7qvns3ojATA1T2t/CdN5/wP6ZdvOPcuQQarNHBjIKcCjxdMQ3+QmWWsvg379VgaHi1YksbE8FnOi32b1gItNKk69niCWn/quBZAuHhx+I5E23D3O8+tPxK53kwIncHD761tc17+pYeJIL/F9CgeYHRQhFMk966zJiJraxncrUgRQVrA+h0fwRbfmMk1g2YO1CzcN5yQF0YV6IdxmdDkKM5/injZA9WFM179+MImJ25R4PxgA4kFJcZFUpLBNQj63tagzsaZuW2iHxyzv98EWz4BhjsCEYuiue+Y2dcpq0pWe3Ze1A67rysQfrG6/+ZTH9JmRLMsTYEiP2QYQAxEX06LNO6snmLl+Hq+vQ55JIz17BWBMkEj1E0JS7bk3Qj5CMTR7NLOF0a6KifE7cO++fvEgGTc7gAY9ai8vgfNgMbUQAAACgGAADsvQxqUQVdrrAf50sFCTuJZDXZBAdXnnp3cUw5Kuwpk4Kg97ik4i+f0JP2++xju62kr2xut/q7P898RPBDMO8gnsRzwWxAe/rpS8WWCdWAz5eKswBR3ngLChYOwgTjT5+ZZRE80F4NXbcGsPHTmYKIp8poYWwAzMXoe6OZLG60SGeXpJNmkdEiN0ASCTemSkb2X2WL7Fm0p8p43XZ0hxJ9gqOJ2GPyzU/m/GiZtrGDP4UNSkR7k9h/HQrGL14veG36djFwly8+N8gD7qG309T5O1QmqtkZOig4dOtcM/ByJU9cNR6fN/5UPVniuWxi/sct0nmtDvHMY7SkbkI2pZioahR1cCYrprgViHJS8lsG125WDZI4mIiYP/+zo7yV8nhVI37fhyzq+JWQiYrHWn2O1wAjg846YYXZXCPi85KyqH8VcoRZQpHeF6Mc5YiCkPE/2VKFOrflurWI2zIl1Y+NjhfSLhDChh1Th/J/Zu7/4UVUvi0JXTnvVorw0tKkECcDmSszrEYkb9XU5rr7mLsVQG1yEoM814Zeol9nqMcWfZ4D/jaRPk32OkLOBvOjXQlY9O2sTmUEgCaRABJjSzuZKb7Gwd7ov1rxrNjbNG8AFHa5jwBvnZcLAmymGcIyK0nY9TxQbx3snwx84fyd1pk1Fv5JAfTiN+oHy9edyWjrZ8ZJ5BPEah5jTEFtBqbRZTPjE9QdN40KjhcqbmZhsoUg3IjFx8wem9E3oWx0Ps0dzAgrpBGRUfJsLptFmTnw+GgR3MraxQwtBLXyXHV+i5ZgcZ8NKyEHRz5AqtPlz1PBmAJVL+0hHV5ZLUr9fGUb+5ACD3CgMDAXf1fU5l0pzd60PFANIs+62OK6ubWlBMRqhLF5ENnlM/l7+OTbCuiGZFOwW0OCk/skjksvLbQ3cOkFx1YL9Av3wT44an81/005HptwGMo/dLWswNRoTTXqQAP7OEa59OaYEb1oFxKjDbPV5iWfgr2EetmSPr6huWwAr7gL53RBLIT90GHSiLNOQe7IQgPydQivmeO8zZVjPZccIh+hEBCtJBDXhWvgIigOHh8V4xQlgTdR15ugxvy+Ku4e+/6tgzCYT4taFSSEc+fn107rfsDviv+lDXUix2WMJKp2O/RV7/h21sM210yxBqnw+PyNxbc3dsx1qjBlxuxh+RdXd8pA4TplMVm9XrD6s1Jz9r5mxewhKl0IEJEOCW7T+A6boIxp0x+fifEtWNbgx0L6UDdNBiR3KJ7wBZOH4Q0LCqZPANVhl64VwDb74jrVNr/RHMXSQKd191rOKo10+RcIOkhO97omzMazhPNDx08wSTE+QpskKH1HlfTw9fIx64vBhfpRUeHDQk+W5toRzKuoyFxTUcxwaeeiTVk0CgilMpUqx1plYsZrJjHMgNq4HJiV07LN3cn3iXMI2ShQxkdqMm5BXkMzLuCxcfsgetEah3aT/QSkGHjq2G7Ysv2EhyUrCp6hQBCo/T+sV7nPHJ64ccvE01NKLtvqPBem++e9klE1yQ697B9PoQTDEdNE8lgB80pF+F6s1xWU/DTC4SZxAINfok8TDVCeY0AKwj2zu/QudQYk98UF6OpLFuX3Pu5xh7zxNJM/slRLsg6tCkIkM9he3dpFml8Hdcp9dH/MChyj8t/lVl7quXLWzaq4lqCQkOJQPxGNUYe2VfyYwsvvBwdpktApRiB7CnQZRcbiTWOdmzltxv6GEm4DlIeft88555ud5YBoCJ8I1LOcs2rCRw7F3wtuNWK41be/ZRBZYLTfWui250+vrUrlujX65u1UirfPDWQyhhThY+FcR3JR6ydGPpzfAHaHl9LZv+r748yIF5LdjPMK1bNtgfHALLrUXuEMwhmverVx78iop7LDl2Nl+7H0/0zXAl0wxsq66cWeb4a3NRYs9w/p9zFx6UModUiPHcvHYYlQ2NqEyuwYMt4TGVNmw19f9L17CBanEFy+WPwaCGf6mErO+iKMOCNn2cWk5eC9sl6Hv3k0X2nhMJtDLR/VNR24t0W+u2UqyhNQo5YPfD9/5/qXLFDnvf2ULTqzwHTxefYLEn87IoxIUhrOnxD20lBMUztSp4uKMhob6BfpUgAAACgGAACsjlk8sLoG3Ozzh3dcMjRooiOKm8sZ3iZSDfDBNofUqwbSXSdo61zKrx2/pomADGvhASjXdzatDgi7uWtzDg+rLS7NxHX6m8C03hXDmxNNkvJ/E5Ke2kWZ5+lzesAbwFkXpS2C+YXMYY5e73sV+ZjCLxJ+dSJ3fr4cCUj2liUoKrBINv+BXmmF3IEj7xw33BFVs9Vmgr8vJJQc3hXQ8qUidid9C7HbsrhxrIDjps57ll07xjfMmT8BZS0Y9Yf/ymXrnYC1ZqBK7gUcw5CfceD5WnXK8EEU6/uAnEXFoztCmfO1OwjAz2ELD+CVARlYBuv3wbyEVvPeWoLLw5BCN2sBsLeGSQpRTi9gVuXTdhTBhH8N4scgors0e3Iba8++Lzw+1gS925UJxVv3v3Zl3ctRMb7fQiu1OVe57y2gVPiqlb1ZdII+uhLeAtErQcRTw9Lw9zDk2Is/vPr2NjyDt+c241JzjeLfRQg1rLADt515fMeKJ6PoNZiVsim9l4QZqmO9WHW7kRet0tQVf88Mfe+Lig4jyCGknLwEDu5gUYoAZ2elDuwJibIiu2MvveSoWwajE1uEwPB3tbagI/GYbKgFfV5zqdcA2/5RAaRBUyP/qQo7USbGfyXEwNhchUQh9dmNkC2AyFmGt8tU80f6+/lgBExjj+uOvtsyrkjp7SKdUOMKXZMHa41qAnDd/CkQWqC6oYb1qa+Tw2STbs6wth89JMyBviDfm7+MHq41FK+Vm2ucBSSCNm0dyhzLvbdgStWaEfPsimQSDFGFxQSgaAMBFUxxcCQBwVg4bvvdkMzECJDYlvX/kQK/3nw0wpXN8Nyg/y0JQuKMzXB5qhMR6lJuaORxKhcCEf+Mex/EKqGlMvZog2/FSGrekEAEFt2PDNLZ6+mwlWXp1RUQ/GDgIx0Pqna6WmkyCFVS8ZwIm0fhHZX8KI0omXBCbGvyYMmI/dVhQcIJHcfce/twD5TBOIF2P4ZxybguOPngAi4L3RIajksqVeswPJrFWpSnkVNxa9P8hWoT7SERUeJXFnjpZA622UIptSJj29ytvjH5cwFwW5DwsphiDfsiUbOpze3vCMpO3PQqHhGNINVV0IB2PybtL/hujCXoD+mv00+1egQhkpekVTMRdrEnw7E+DjCJg/zpwDRYtKrbANrFGYnE4SwoMlcewHVHErfCi6IzW7YtQQjdeA3DGr8OjOlAa3sbkqtWXEL2wuQNB0pCBJkAeW/VxGDVIpraqjY4eyG4wN7vKxk29QJxVUbRk+Wt6lp1j40OZ4O4MQRUn8j5Wci+m/FgFrHisKyl/ATwJEwnxGqYtcVZU7tTHNXNYJ6+6eFRq3KJmP8cO1Ur7g/JJxJn+3IzoZraFzThSyw8isvt6W5xCblY8/Z1S2D5aTcqK86go3dgO1taE7OQyPUj30MiMCRE5Ny4VOTBZH6Kz1kfkn4PkDKlUmdBm6O9iFi/jDEVMuqpkJbQXcN883+YJM4+shwCFywtM2ST1Usk1AReI/cFN/Dxi7rLvby+Qdl/ZR2EJTaHqUkp9IQT/B2Dt4fMgD/X5gBJEr+C7+rpr9mhNrIz41k4d6vRfv7iYE+khufuNkN6fiLa0yaYpBNg8KYjFGwMKzV6rbtoSR9MGKZuin1tusnczldC/B54vfoAQ8yVwOf1RlOFtmZoiuRZiE0D2cyGwVKTtSxr6dThobCsyVaWjWY/8VMseJfVnaiaku5rxPJ1jLnKEd3Wjsy0R3Fxq1hiSMhfLPYbgDNb8lqAzzDYMCskrowzhObsiQHFBhE+cNezpCaPiE2gpt1YDR/otheKQ/N5MCH0YzH7uAyznZYoA2Xxpni00rOEniQ9VIoiIFi5KHFXB9DvOgE3/0edGxfcZp+CF4KFdFctXW8VfzjobvKfhrHXus+F8tN2aBXJ/aRAX3o0TMncFHDieGCwJL9kISSIBodj6yt1KGrzmGjUDPcLp5lOf5SpkWj0JxuETpG+0UAmPsDrCBquUQb0ccnF8mNFMzcRZaWs0hVskZrWLgQF1QV/TFotLRYsoDmHL5O70vsnH1+nmbjuOmFiahe7kIUsfTbS4971D82SU69yFAojF4Yb4/V4AAAAAA==');
