<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.0.1 SourceGuardian (09.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B3F7E09F4DAAQAAAAhAAAABKgAAACABAAAAAAAAAD/xgiSmJWjLZVKpgXBlrZ9rcZeiWmgh6ndOaQsETAGD6BJ75dKDlfD67ucJk+L2tdV7DISbM1fORSZWT1ODZnXh0D8bGUFOMMdxYHjXcCW0exOSasiNKpvBsluYtad9pvqGRjMYSvAVp0wJNmVnfkSrcbiXCymHvKPGkTSGwkCGigCvZZNFzrKMvi/NRWgnQ0o6ZO8oEBMOMQKdrqJ9++UJDcQIDUg5BBUCAAAAHADAACd5j0OT61udW+pE1GQMp06r/kgUtK31q8w2iYhGP4WhtEts26qdmBm6oRAPC21WRQ/XHcjq1FroH58FxKzjmoO+VU8wu8BPSFYxXCZ8ddV9ZszHLJp3uFxMCgs9QRSoEjKaz55J3IXPYqZPi7uyzH0iD6kTpEP1jn/B1nTmAZFMZ/3tXjsT7X1PSJaaWg95iEwRMQvYc8fPzGEZHbO5yGUIuPNVWAgbRZ+vRIFWNg5HawuF+D9wyINHbE2+h3UfENY8JLmepkhDKxW4g4fc2DuB6+oEbxJGO1WDQhImKv8SAwLFzzQt21CW52pVM8lY3WRRF+TomKyWpkSosWzTLTwMV8Ikd1Dao3JNlCp4+EwEHIdYjZ7oDgWlJ3MduJpCYKWzCWQcioew85sif57rXSGPtyahlcWkv/IJzajFsqOEfEi6KWLv8LpVdJTZDghpBaTpd2vLijvV9FvYC2VTZfAxKPTL1vP3xb4GVhLyLwf2XdXRXDWtkswJn32uCBfW/P08c5RA1I/jB4A9ch68i0f9fYFsLE2sOUThHecIwElCglcgq9MFT1pj4aNML77JKefFORw+gZy8dfE5TuOVK2X8DzHStf6qlu9lM5lgbBJ5l/zxmms1MukajoC/gpqyoRvvO/HfXTYimfgqE1v8cemS33WjXym8lH0aY/U69GywHPtHRPfC4coWLv6Ab5Xb0Tzrt1hNftrE6Z9rO1A8yNMaI58SkFNIr7gGjqmu54rbnywZzqoerG1Rj2a+PGY3IHuGo2Ha1HCx9vNIjuu1ka1DdlXIrppnEUflV9Nrd9shmk/FpFbwCsJwPNXZxmNJV6Os1Y0e+XEKdbiYH9OspCZy38M/ZyKQSP1zA6oyORtfTiOJW1gbn8l8OvBf4mTz9a41wFJTbGz7wLHbhtNVhr0ekKIKkuS4DDeuiP/1Gl3tuargIHWv1WV0xTeWxeA64jKxQ4u77kqdnQOjQ7dMfY54UJENn3/lKsnbha0Km9YRORJmY2Jgumx+ZknwkqRDSNGp5v888q0k40njz1PuKL+cLl2WLKpMHE8y16MMw6SUSKB7DSK9CDOW8eMC704NWre/F4rdZx7zbyiKhJqnwRHEqGYPNKZG3ciiOcz9eDj7YQWQoe0BqHleTUaQr4iBTzuIDW207JCU7vb4fmyrN02UQAAAGADAADJZNNkAfnnfFAScYnlnOJgrmEdV+ORpxwdlmg99iUvfPEvwuw9LMgCzCFd+PBuViG6NZp4Ye/XgQNq/Bc2mmr7MWl/LkCG7sDEry2elrTfso+x2HgOakQM4dgc/2n/cYusJjshhV2BIq8kfKQDM1B7Fm+D5uKo8AIrle3LXXETmnJmeat4HMkIcF3SPAkmI7Q6HONIp6dC+pcD+PrXSfb6GSep2mleAzxBCNO7QqBY0KbWL0dwj9j4zKwC9Kezp0DAsrq/8CRT+P9s/WPncguuJ9VTo1T9/lXu9SYh40TwI9Ko4PgyH+HHb4XpHjCpK4gWGjOJJGzGrMvNxDIT0Q+gR/7uCEFyPfaVUPa+gtN0cIkVNENHO/EXxXGPMaUJGbqq7bRwn77LaWy2X+FaP98tQzpQ7YyiH1tavrtb4lmyRB65vcwuJSH6X72SKBJmHeXhvRca2vD1ZtB/JyPefBruMCeSEDsm872EtMXjSQXCZ0McL1yizbEuEHafOkFMo43kFoHQZNRK1KKd7z3thxGyzWnmBUVQoyxHmNznyL4SKJ3IDP7eU6Z+XGs3pxKNfm/RKy6lxmiuZIEAMSAG+7CjDWfsBBagq5oQuQkTdbc5yh4XXNcfGVDANK43Few4uVc/rFaLf18IPl+yvwQeecJVS9gvegx/Dkl8wiybeJxRNY9hGZ2LD/pZ3o0rkrajN69JYCo8bBzg3N8p+BNXIIWwYEBamFTrL4fIVIwDC39fIYHWlDcayxxwA2v6SKZUNEiooLy8asJueuETrMfDhk/KcaJSKvNPgPMOCVeNqaMCNTnE7DhKNS+0fDj15BHTgHQ0WJ92sT1l6bdGGg+oMq2p32VADPc3xvPdhjeXpAOCttGwI4sc3XMA/qL3nwCBlMHKoR9wSvdGrh9xBYn1Oq0O+YmFBPRGgtC09GGyJP2p9wt3lYgmNfw1a6yjZCC4sy4l/kCYFQqVscdcfYLoeLjLEKwEjTpKfCK29w+BbEz/evDNUFpNkUS1v7NDWwKcojwHSlX2Y5ys6nn/iWS0R1pHsQwPILz6u58s36+wCKBsd7b0DdXAi8hUab7ms3zTqB5fyVFQAPVdqxbWt/HAqiKAPdAUw9jco2ZbRiI0SIFYWZLL4WWwSZU7ANZTYqcNAsdSAAAAYAMAAL5YClFrcTDMShB+tMp/FIf9gzQTcFDXGqmFJf5/yszKPKau34ITVCS5I3SJxrAcYyhTAg6MPi15jg7IuN7K1R6mKZeQ/ez27OVpcb8W5aZUZRAzSJI7jaNmcmg6vJSVh0iWD5Yy017L42Mw7Hz1+j5zBfsATbTYdrVNhTgw4Hs94t3l8jpbRRZtkfIQQEcqAx2GFdRJ/Rw6xhX3xfnG1SVYWr8XJHalTK4hdm4w3MwzIUuUw8T+IbPZgZVXtJ6dF/k2G+BEmSnl2MuAAiZeMi9X5ta38Ci+Ij1q+x0HU5Q2mRVBDGbzEpgYaodEgUDoA4nmZayeIPkl/CocmFHxL1r9NSXEwiyPe5cYLEP1BBoHHjqC7hM9UA76bQkfn6LX72lQdSJ9GnEyjMl7WE0Rowreo/RPBoXjokFdrVI0+k1/TYhYhoUAOOgK85pMpDqPqtlllf5bKyZfvXA0zXc+rWYIy9qsPFyX/ZTz4b/r6MAiUcqb80sdECIE61kk92JfhSMNrV9HFkFTaeW+TGTZJy6JqExMwP3TA3fJuoUibvg3ndI4rZzGRRvTLA10EwOVxeayzPSJNXEIWrDrkCTGCjkxwgrf6EwEfSVfaWXesyn0vIZKz4dooBBY7rXzlzdxi2FzaEmHcxVaFnsWTH/R+oAfrifYRHm42pP9mFMMcdD2yH3i/cfeQw5ogOPGevBomyM6wr7hittaOXGz7KerGmurHMQc+k6YdkiLhrPXWfKFLOq2kN4eH2/ZAXH+ZwYxnPm1IIdW/N99WXQ7jfvBLAUXP+ColbDToQImngmYxu17BwF8ylWkMGSEURuO5FSMrm5I2Y2DbkwvYXFT8A1K7brjQAB0X1Sg6DfPy43YgRjHyJNwfQeh1yu2Zk15ZQc9c0Z5mGJ8KlZbp7/QD3KFAUBiZBllfEq2Myk4v+5d29jH/Rx/cmT22cP4YW3wN9z3VGPAjcGrFmYfOsF6B9VrTuuNvbeGy+7At8rmWDBEvDYTplIXZcoBvPCVYSS2gM9uqewdRWo8/q1VZ7DPepuaJX9suEkUE5DPUpis+ZKnT71xiysnrD+fOzTkUOaNkw47Us/KsWwk0MWmWmu5eXD0qBK9i+u8wQPEzRRKC+OdVeaWF1R2C7iqWWeKfW0lz8kkyAAAAAA=');