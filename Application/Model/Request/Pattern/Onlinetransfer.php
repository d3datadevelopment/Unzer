<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 7.0.0.1 SourceGuardian (09.04.2024) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2024, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B3F7E09F4DAAQAAAAhAAAABKgAAACABAAAAAAAAAD/xgiSmJWjLZVKpgXBlrZ9rcZeiWmgh6ndOaQsETAGD6BJ75dKDlfD67ucJk+L2tdV7DISbM1fORSZWT1ODZnXh0D8bGUFOMMdxYHjXcCW0exOSasiNKpvBsluYtad9pvqGRjMYSvAVp0wJNmVnfkSrcbiXCymHvKPGkTSGwkCGigCvZZNFzrKMvi/NRWgnQ0o6ZO8oEBMOMQKdrqJ9++UJDcQIDUg5BBUCAAAAHACAABkrGfNmghsuOWywg2HBEOxSmkuQ7u26oKIAdXXYv7q1y69OIgbcqQH2Cq2GEgLMwXpqigIqWscSOGR1q0pLXTpWjcVm2Xh8lVEup5bQOhfy+RoldfJxT4e9+A5w5qFEA8sNFQz+TI5+uiB/CtFLeRozYWD/GrBWOIeWadp/Qh/ot9XJQDCtsSj36SR7mkjS6yNd12PCgk5FsutE999yLMJWp0JWfZSo8XEgVEXxTcuO7JdkA4njbQ3p8vlbM3siAuC9V56/aIy81dbvsxZoiXxe+wqe6dTA3VufYv9FKLSMak/RxOaHtp5UkzPe6TH+6d24FrqBFvvyRuidvD8clVLkE1TmvBQ21JMM8fvOIE3K3o+NLtkiYPlB1ZQu9hr/K9YEpp+z/tdlQr1kuzlyCvqCaAEbAXNzNDxRXIpR5NXw9/Wl2Zuk8C4DnIImKSEmRNqg617poo7W1Bi+8FwwBSNaP1+o3GHz5V15TMUuJ7f0B2leWTqBIUBtJeIXy/vqZhuX+iDEjXObNOLD7XJVctsMQ8T0vFTRrn1guLLUXvqSYOpHIQR9B3ZApc7aKENHThSG07a9yJCtQnJvvtwAlcyCVviBN1dn8mJMMUGhYFxjD2bxfPWfrh/mKWPNjvyit8QxB3lWfw6lJhU2tnQF0X12XoXU87iuXyJ74fOTW48pUdvZbMIZWhc/esFVCVA2qXEpCtRXNa74z1VjfNfA9tRbPaUI0SoVW5xKbf3h1OyJjPrM8PaWsaZfG3MapQVe0xaFs+ljn/BjxeISQyqxiG2ihgo9Qvl7NDqGoMnPXMWTSvdIRDsxKjfyqFlS/fRYe9RAAAAaAIAAGpH+f5z75t/6tXy8DRn+J6T1vNsJ4OYQh7iS/BY2iVbAVJU3Jkf3C1mfoXactYksGNmJRM++CNSDOgE6pns513XaLtXzw39Xbdttshy0Tm+FEgXQtDZrQjoYBBMsh0iFW/KCnF/O7JSsUZ2tmFFSgWVv13KMGHL8Re7iqdyK47Lc628B8Yq/JyKu6Vk3jAPPiyVB1Vh6+CjwVWuiwiIcBalPJlt2gH6s1GjHioNpyQtpG89QwHm+t2x9wWA0fu6El4VpFinsQTiYYIp2h1VBZ+QTqeSUq2ij84qEnQXBErmE5hG6aUl/zdQWvrU9Q1EiCc74HjhvnXTzP89W01QrX4DfAissn0jnSuTRdvedP+ryxv82+15UsO0Ew3+oIOVcf9ACoSxeYGBSQZNvF1zNAhyrt8QF3UGpp/CUPrtiRE4nYRkQVxjHDrgZY/oJuj5+eMrqkfmKrOEc9qCJFH1T2RMUXQZ6/mTRPprp6xvC2RAveHQa5h1z7Vpu+zmaYNnIcyDfmbb+x0DcnxqREwc/TCDkFN+MFzqMpygUeY0IjPMWVmmtun/DjeRKhyNUOMyrCKrtWjcM2evTKNS+COWtFKuZwUFsinXW7ibGma48YubhpbucIQtcxnz79zxptVBgrV5H/GuP4UcJlksNs9hpjG2t2ZwuXsGM0y2iPL1uv1t18JvZBjnxhF6p5qfM8O9lQOyX5eYjegc+bYOmlit4AIdBt5LuZDlp90jqDfNv6pgWLIKmKQ7RnIVvRWTeWxstQyobDQoQuCzYc1lKyEPbwHxofAHc02nWNAug6Bn/h/jqvTu6yqfw4pSAAAAaAIAADOhuQJCsguHSIg/4w9mbKMKgkvKcl5Rf2am5o5vMMSud9Yn3kherXpiwX0Vxguc4r3dHSZWsfs1mXk6gkDxtyrDkmiKklikQy8nAa2HLv0IIRPXgPNsygBoYSRXGg8zF6wvpypTymrZyij0Cq/HtaYozLE1SBse7acTfSjeqvgLRfsxEnNuuZ/tr8WDIV1MXhR9nLaBLuZVtRpynB/KaCJbDjC1nPALjUiu6RXP8JGNdtJgFx2Oq1KK38fZJ8BShtC2HOux2WDzlgryiJkuasW+MJuf9htN+5wB6xQaJq7PZi7E0HVoVGlPzwe+sZlbIKojGiWP3v4+29x/NBZx6cpyflI0IzjwB56nhlaMWI5Vy8V8kAiM2rnzRn1cjp6cs/Mckc9dh1VLqX7QCX7OvbrHkwDJ2sKz55uRbY/2g6zpkzGAzojml/flUgipoiciqahZ/HDOjLePQ0fJmSVC1pJzzz6NXJ3aEr37wdMjnIS39l6uInxZdXYt2UdQ28W3YbXhMrhMacnF0MeTvthtAGED52eXMelUDj+11oUk6KbojsAJ3/LgJ63weYiJbDGrfJ9JVNhjEaWuUP4di0SckRzyaKBgflvnQmQ/07KyXi/cNG1hBHp+FSlzElEAlnvPFQ1m/ySbgznKA68rXsohL0TGq28By5+ytsjMtQmkDJifL18HyaWM6lRmdTbIBQ8CAcip5pwWzaPwUWkWyZngeYpm7sghIs4xTieRv9XcRetz2T8myikxfadCVGP2r+V6M4+2Bg/lBHV2McDt+CD/UzKoR0YaFl/k55OJRvKUcb7ePLbtEQzL2l0AAAAA');