<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.4.0 SourceGuardian (31.07.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B315E09EE6AAQAAAAhAAAABKgAAACABAAAAAAAAAD/iiEmoqHclB7NwtqSv1IvIZgajqa3WzYR0Tmv57erieANyBMuOffNJJZy7J3CejjrG1xlekh3bIcvFy+kBILSa1q2zJANWfh6nfL7/IrLbMVWYHGbc9L8jtfcUHgCISEvPu8ZSDGRnhiIuEvSOFHqLp0kIkgQST1rp0gLrBy2H5HiwDv7tfejYQ0qu3qXcaEhLFNn5pLcVFmGBCpImXYdRVB20X5dw5T/CAAAAEAFAABIkJmfOOFzgsqtcudgMMog96+PaL65BliTYiInpRho558FONLIzxBOa5Z6SXXJX/eVJpxYrLGQ6IWrY+wVrgM+13Q7NLVFdzIXHHTAuXrnQOU9Mq3yCkG4qWaEdMYTbnUGerMy0N5Gb38oh3Ma87FoNjzVAO531QD98O9S4HYtMm7b9OUZus2Z3gt8Il5FXRmTWI5PbtV8AJoYjCeHNVskf4s7zY6HTdvWZlGtZCwd7EUpHjuoScpJDkPYMJubfU8Aie0JmdjG5TVTaFlSRPzeB5k1pMFgeRPVBX2myQZVYPQMvZqsQd/5bwLpLfyuZvs19ENokuGEVYUezPuid3PLPDV4nLjRmDcw+rHFOXT6kwnrPNjjgEPsTIwy27piROfv/GuW0s1pduVDuBMVURsdRTdqgH1bMwpmBG+hn/qNpIfUkVafB+B3GQ3q2Nuo6Xsw8Xa+kxPh2PHtUFXXL1bRbQPEy8cvqfxoz/fFJtjV0ynZNj+vx2CmVOCpsEaYhGQFY6XVYQ7bO8q3mhFRwCvf5tO7rmQ9+U97Qw1xJgtN93Mf+L083i9+/CI49/mxmRQG1M1xWgJ0cb3b/3198THEDzpeT4LGKXoRuqC7IMgAOqoXVagXFb5XSGeJ4cAu4rlLBmFH95Eo9f1WggGFK6RKZKfZpB/RfmtAgK0FgKaDn1gvEpVAEtE3zXBxiIs+bP7gRCDCgrSJ7vSFzQZvo6tcmz49SS58KrSDYB7z28dYA0xZ3jC8epX32l4S0Ld5ouU4QTHmnu8YFc8HEcq1RAImNoeoYAyUq/nhANzIDCrIH6j34XGBg03ELbn2OCS00uDLhc6nk54X5GUXegWae4Qv0F9c43aMCJAtiToAEyJ5C4JSz14eVE3Eck1AV1yeDqYrfT4DTw9WiVLJUz3Tg6VCyhv/gqmNDWopWCF94cwXGQ+mjRl6yfGIFETgvhDnzafuZJwCnAkuFV3GVzJEgPejmdf7hdum/94e4c3sUQBwRQ2CNJOOithULiud1xNOeiU4t6zK0QOK122mNzI3N3HeUoMFHlS6xDoyiOqK1NUlKHCS/cxU2Xs77+xKUgzl9TXbLBXZm2dGReQAGNhh1SDipoP+9p7Y/uZxAV4glc0B0Se4eNsyk/w/qz8iWTpb+zyAGJsie3WJSsgbxUvS762l8P99Z5Wi5VOvH2JV45l1RY0Zr4KgEhl/olIHsw9cAkwv6baQJHCnAfUVitvC3mEqSZnalIjPS4+Sk6Wya3qytlr4A78D1awvr9qaBiZlbFbVy+jn8d4qx8GD3G33SE/CPw0ZBuxC2oZzFyzNRyPg7355//+hnwa6zQWQupsVRbwHZ1R9jC6DN1iqzyaPITg7rdOj0ROwNpY7LWdRqNZSWZnOe/Cmlg9M2dAQ5Ffnax8041TbQIztFllcgaQTWmSEZ4/lTkFg22GVXS1SNkAGpA9ewJzYye9IliP9oMHoGYthfJHBWBMgBfN/dbDOjiG/EIkOWA8OLSbhmEOyWqnKQZQlFHDRNo9tsWVmCVDaxGxxsAMUakdX0TYlkFlCzgntWYtVZefH5VSCNCchTR3QfpYhk1TSC8RxuXbJZZiCLjPOx1IrY5mfBh6vpXgd/73tuBznrIWcoONKHKxkBQkaax7gCLV2N8rHRLmOgta7O8oK+Vo0ycAQu68rUBaMkSzVykh5k7yTvyLc2gZePDiIHzTChieD3d7ZhtugDPOs23LCHrn10P3o7MD8R/V7opZGAmCUtiYA7DzWDXLysZqZUqwkZRB1XzaYgcaiN6Jx+WhRAAAAQAUAAD+FpI/hjlpkWnWXyXC/jlTxWeNJqF/ivh90lJaS4Nm0sCeS8xgxJEPkkPKRZqVkDYcKDJSIrbLqEOUnl1tYa2v98DZ2lKE8DAsyAULAxZTjelvG9bsOs8CYo6N8mnhz62sQUdiGi+xYX6q7uhqOin16Jb+wZsokGWplZ+MwNa/h+XtCSMtgVm+U2KSZZ8KdFaZzI0K+zJhmuA7R/pl0KyrLwPY9b6Bmcb3+r/lVwNpcKylhRLhbp83bFULCyNutJ4v2PchQf6fTRLCrVrMg8erYNnRR1pxRfVviGWsaOXvqj6cWOnVuxbYihj8e0kafDg2cy5enN/FUd+qT/5P9OovlvxZ3vc1Yl2A7dcILv/yljGKxL8BtFVVbr8SezQvt506J+Y/la76NmN5bNCEFJsT6crA+SA96LcSACWoZ+lvrpwTejL3lshCMD1RaYqoA12NiTRc9hXI5K/rZJTOXXApT7NrMU/dA5BdqEX64flhchxirM6lj20xvLpx5Wg+21OkzIAt2ylM8z1nx6COcAg38HGL6Wnrcl4vjV0JQQozh6VYJ3BoGBCQ+Nb8FeVXhrzvBd2r7Oi+s2F9l3kxSSs/g5Dz/3YCMzvwdx/TrLKHBwGA5ojBEugnetvm5ys/k6NBM8V/dJcSLPkHcVIYOHvoI4Myyz6RKsTmudTKKHgOpr6ybhMvvJhwIk6BuzC8yAWosgyKqN/l0obGWRZ1Q/YrUzzqWDhRJGeITQAmUkJPJYo3GCORt6vK+EchstPWDRQjuja+3smMBaeBN7z9BEBi4TkmrDSFwaiwBH0ovi2W1kAiplxBCwLPsaMjBVWA3/ul8vKAim1IRmi0hOQ5155iIOKrT69TFBs/waCheCrj9xJEimHxDJdxhqj06Jg3rbLz+oNBU3cMQuXLXdkIJQplB72pVgqH4/8WJtslCQdkwwuCPnb8J9tpwo46fWBQRLJHejQRSon8TGdKymuv788/ff7eErzVhQ3ww/y18kxryD95gsPLJHNI5f3FhIqvgwMDCCd7LGQ0iGSzmr/Bww9hpmAZd69flwNgx3Tk522pWQvIlnNB6x9/2Nkk2i7KCwn5CZHU8hP7n5LgLCDUC81rcros62JEXLp10PV1lGlt2bij28FumaC5ea/PTKF/GY0TpOxyeK1npS3W8lssriHiBkaVtIKj2gxHrP/ZAl/wwPvNHFyOouVxbZNd2fV76400ubI1O4paqgv4CoaN50UCgdHXHCyQsQQyS+9FKWkX9v3ppQfb6SPFy4YFo1ajL+wzkRsQfK+oa6ujEkiOLQyqobL0CGeYcAJA7oTrWu84j8+SUPe0S2EVmCSZgbstEHtA0Io4ssvO4xCZMvHPDbCJx7DUtcMBLwqMR/k9CaKVO4a2QZEF3naQ1UndtJXolB3GGsicyRC35kQzIrXgl+btHP63ElrqNMkFioHYLSjaFWBUUaVcGJ2cknh4DjymjwLHvPP5i5EPp1F99/zZFjKOw9x+Ue3rCuor+ZoLD/7YlKvMg1YZLWiCPmbUxqgKk8jbLkS7lJRf5wuj0EEyLI9iV1pQEp9MutmZIyjIZDADbJTSLXBSBcF42R30zDq/tHel8FJMYgPsfQ5aZMSUOU4vzmuKmKRtsPI+Wk3TZgXmanj+37UBhm/Z+lJ0n/NiEQBcC6Y+QUnC0blIIf3ZM5D9wK9k/W1ka4cNwNMKrowOo8bEqFenvjVHJjsaG7NNnE49pClRa2YW1xVO8+pnQHv/rhrh5Y0LG9uK4ghikFR+ef+0BpZn+97VvdeGjO9+RdlIAAAAwBQAAdnp8nm8dAFzcpGHFZGIjR1GyTXlqC/mMGfpql0KtXN194y/ivkENxK5JO2o791qcupVNeQCFTxx1wBNix8OfL2FLXIw7LAkinDQRe1hhE+c6dEUpRIEEUKZGTnHKSs/4RJPY99AdTjzQnt7k5G5hsQT8ZoEKsReOxv5rOsxyEBAcrfCeOMfn2eKPTlFPiTXNdhxKHTTSyG8ZXE9p5H5tS4PAcREjzdaXAGptL1K60lIXtt4688v4qlXTjZGijkqc7qkFXaGWV7Pacbs7L3mr+c5gCtIblmUkaOXLBAP7v7G2TOnXMEqWRJGyUW+LAiD68vPzRe0La36aIeOpcU+IcjA3AdRvGFO4XwrrVqNqY46xwj8UP8n/iOIwLEkGXzwyr+jDM9zsN6ZGBoNWHHMNLRwJTXGK3QTF/aBr2cfx3yxk9LWPslIxzatdG0GpfjE9RLPzwJLbB6eUQmkIIJJPjofu0KrHywDxlcS+VrnC3DXhYMlccSBehPTftpyyP1mRU8YIQtNRbXZgkIhR8Gpl7Zdl6PwuNGmE4JlMfgtEewJJVPcr9WWJ8QOu4SpH7kY4ijoF/J602z6Frh/2qN+q2Bmt4QOpNnFOCbo/TJw/Nigc66LkYndVJu0oNv2xdb850w9TvYIEwmDJyA+AIgTXEsFRa39bQ+c/2MIBeMhcadh4oRAWlbO5T8nfAypwoZphIvYfUqz//LTu1gbDnBQHwo/2rnxdwDspHUDYhf/vjxB/zhPv59b5/hXX5M7xDMVkZDia2dWythIGdUh77YbFHDVotrbJSFo7J6xUwFLSob58Klh5FnlTKrXJqfg3QF/KlzRgY1OloSfiiO3/EeRzVEdbQdFSaTROrMoAUdpfa/VtksZWQGOMXNJkx1Mf9yIZ9+O0lAfo4jUS2AzdB3x2ex8o2B9tNUO9oHZCMBKgVHBTgJaGV4wEUFtGhyUZ08VkuWLbB2S12KVxjO1wtzuh+goC0buKSlp/4AgSMdcnGmq4nt4TulI+RUA8BcWapdJQYoB0UL+8Uwl/Xj16+pZl8CIMSMCE+83t2HgtzsTe5Nkth2y/w0zEsQs+xol0o+voyKlBDGEiB+XnPjD5s1uI3T3d5rMrbWsCYTkTqUvgKjlVjVHoLVXRKje7bNf3T6WV40edAGzuDO6PVZgo5kmRX7m44vssW7Om3EONir88AmI5+8/KdgZnUEyq55LsXl22XPE35AVyr+EM7aAifu/ml3WoElSDaalnX+phIKL8ubKk0wy2487dRjqNxhVGH0cSMLShXE1YEShQsLxtRpf1yOOa2K/1V1o7Y/ZZ2L91Eo2RkxX5mGN2/t0jBbTeer33wFB6rvfs4//o7oNhIDdEWOQCOzbxr9Nk5Fsa9qImtgHZFmkCacWFNEQzaZGCs2x5Uj7nApKcuCS3fkHjY9X0T9hIVdMiXN4voMos3ZfGBhAkLCyFsGvtmmMkAMfgW4h9kQ3JvUHZRaqB8+oNRYpcaWZ/oBdh5HmrPREJtqaAsEGpX/ORMTElJqQxiTUXmnm4ayhlUUgvu6zyOqwHSMLWjUJxNa5fQc5TBFfM6mxw5rTKvuf7Behsdo/UbfePi1mh9U31nzHRcf9EdZvkB7YSbBuj75UaT/GNsypJbkC6ac/5WEMnPurd/X4v3SzsuAGt9vTKoM6wg1Tw5LRfmwvAQRdYvoaEuLUwE4dl8bDOqxJLWtRLbJrBR/zqIlMq0vBf7iEiApap9TC1Wn7+HYtm06ISd2syNPjZmLGx07dTYUQAAAAA');
