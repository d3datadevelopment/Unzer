<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.4.1.1 SourceGuardian (25.01.2023) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2023, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B3BBE09F35AAQAAAAXAAAABHAAAACABAAAAAAAAAD/cX+h+Dc7RTlUw1h33CxvDlqBPmjRYgFk0+TxhhoIuLdlSZD06OUyfWIN9uFqipnQBGUxo0UWfkurBy/HrzhUvCZZPgJsLTYrhDLldDYgvLR/p9Z1SuKXsvUPaBMkz968/e9j24MZtmhowfdO45gXZAgAAAC4BwAApyPsp1roiyfYbp1ZATpFnEKe7F/DpKwUbTw2sqiXrNOYkLlRwec8xR6qAkn9hu7ZVCtTZ3VFsl4+LMOFuKzT0ip+ydsgdfHcHqA8J/9coczra+b/nxPsBSyU7otELWIX6VYeKvyHOg5NrEbe630im3mVUZaJqg2p3KFADlSID+XgOZbk354W9j1gP9M+/bw8l0MjF/5NWvSI2Mhic51/wezx9zGrXMdUG3J3BcQmibEKY59UqX4udqQj1ROkhbF2OtoDZJIUD+BinfWpTwnR4ci7OZO0XFt5Q5/f6brrWNLL9A7Jy7IgCN1HW4w+1Nl7vLBhunbawBeapPXUYrOxM7/SsNwz9yin/kcP5HfRfNOGebEGbwFnWe2KTmePepIaHCEw2h+UCO70w10+raFzZrxr1o2V3FK2Rlk62TRwEBhynMxeCX1YNOX8B6e3TjmRPNMXgEvj4RFIvq6aAYHWJC/Na81rIC24+V6ETKMQGBdp+R+LuN7Q7eZAFZ9e4cT8LFq02qKDkj/bKGYfQnFRbfzNVi780rluBPnQP5WHBpp2OkF0d7/MWGXsVHnaC4ux8T542L0t4t4/e4cc20D6viHnaDH0yN8ae/UGhnTUZopK4HYJGCdInkHryG2UCBAxB+abRZQIyHutbds9uXAi7Y+/L0SVyvdqDPTSqJUyc4S5mSGHS4bd0Sfa3f+RJwUGWRNM9bMELzSqBA+vOwumWL9n0qNcyxPZuZLqiaGMOdV7XQOzf5wfC1CZ+X0j6Z/MC+m4jHJFV1iS9IwA/Mdz69rrtftRebWHot03cFSRSc7mZi+fPme7zOL3h/Ona3yEUIl72AYLmkttoma2JxDw+HfNcfTJ5pGy8LeZ2s/T334tsI2VFpt81sGY3IJFB1obm6cEoFpLyQh/ZeFKloLM9h+gkPN1kPfz363oTW4kogpPhg+xp8QFA/enzD6mkys0qkSQ4iXQmbHUgXQVOu9hr7x8nL5eYIo8BDBr3RxnS7goPhiicCRiXQbsGh3gBqyRPpNVRBMtFBmOOioH1GNoMy/Abu42vrLR0QJwB53Lrz5ROVELlGwVrjeF3J/adhkT/93IsjWWm066/GN+WVykDtXHDS+l6OiMuk5uI+14j835eDZJRDdJ9WYKraXuF32WbHpqtcR11JtcdHBCKa1Ux5P9jUfQfLyCYqa+Ruu5H41UY4taYRwMF4b9qAPgagfApodI+ozh8JaYGNh0mlOrYRo32j42nsPioqEux1eYPvN7kqfXpHltstaUjGQiZ3pb/sZX9E73bPjPDFivRnm2Do5Y0lfY6hhKdXdBIqD+kxQUnuaEHshrCdJpkgQ6kDWxngsPKP/cp5jo5voUO/QdZTQIdzcA+gY+VSVtRT4eDG0dgm7eICMLwoLOJILcb0YK9QbArCTXDQwst5tr1oKHhiRtHOOSUKDqJBvSGpJfQdbuxItnzjOBzNGxBEDkIrYywZtFpat/4F9GqD92FVZv/JFBbwYD9RXWzZbQv7LwGgCb7v1xG2FlOdR/UVkW1rloHkchLgRlpRspNUh9CwOmBmyE1w5Fuk0zMGCeW4nwIkyE54D84mkSbKP1QYKN7uP4/5Ac9w/UnWFvi+CWh+LCEpVc2l6z/fN2rbyRSm9tQu+dTXIj7rVr8D2lvzegKqdiVtPcYdhYAIIq2z6E2vWsX6Aihl/QLvhRLlOVD2bibLeBsekV+5qVhyxkvDKAj2+mGPkxufkV6YwGiDReHzMgLVmzXmpLw956GAximV5LpUtggjZqiI/BL1p7BuSkdy+eL2DJzr/LgI/Ly+NVGH8G7Omjja47MponMN7BL2lOwGmZd0t9xT3iJWDwxa3WSHl09+D2gdtyDPZiUyN8jO1QtnTxkhj1SrjvfY8CwNFLBC4fta2CtDf4oNlBCTLNyfY/JO8Xk2LQy5E2tOwdoRCtNQ4zgLKCXmIgVNjMiWqLmPlHSwsI8P+affyU1UyaAIxM93SDeVyt4ovoawCI44TujTzxc62dqereJdQexClGnY2n4sPNFM2dlQ351eFC8jwxX/OQfb/8+ow2dsSa72fzXHhSD3j4zOwRP1x/a+XXpweYtOJVe24qeyDDE38NJ6POdbadJsZXtV/RJ8BnwI0yNHfuUL5XVLVTuIEvMgA4R5fe7NGL/kenU7KGWNI2HsNgLWaq9STXFZUaEEsnrP1L+TpEEYXYjUflzPHZVdcUIv6Tw/kzRRcYAk81+IanfVrmhBK2hwSbiKkXt7Kp3bH2FOh4z+U9s8KLXGgqoRnddLUmgkcE4cJ9twfxLBdhEl7gcSFIh3glTg5A3SkCZoPS620eIloHbnJOXZOCXdstuxyb4OsfZ8hq/l7wbujG8G0FufGFX7fdL4IBvK9+OVyuGqeq0VGRdFI2r2aHvmuYb8KBno4kXz2CPctsX14E63JlVN4NDHaOpowCoxGqIMb+dBRDDBUhiL55bry3FUrdDU6akaFa+QGvpsJh+7J/URMWZCp0pUUZmYSwDzYipR+G8wJbIVQwNIScs5IP7RqXN+33tHQCp3L3lzaLO3nNce87blFEqxMaREXG5l904DiRCsxmy9UDjAmgJGirJQsf/5N5GfO29/UCfywdbUdqFq4p3wVxjXtNBSVRAAAAsAcAACdsa/BYZ/J3WJYwkROGBKRWuqlO8fqJY022o/GM+yrYYphYYS+9is6UNEzBpEN9hqAVM2ivs66nbkbfc93nq8FxZtZoNuA7n3CjJx5ALmjfRxA5VB9AzsctYV2jTTd2XKb2VZUn9k8QvfQPGa7jeN14tVy0zKSfKYaRCv9NeD+HqickBok12jbS4L1b35XsIErJQoGrhH76o/ANPt3wTKUZPVN9k0N7a+cUyJrV0Dbwcfr1uOCo71ktcgWlCGMVCfUBM5GjT+AEy2Qf2kEWaQ32+kWJqfXvwcyFUfbeyHzi0QITTVsZ16Dg3BYBLA99yTf94LJ11zD6EEHKGyI8Ari3kTauRnN5YM6wKAT9x17MFjtRoR2PknNkudh1m/qBgocgGEJX2RGvwfdUlAO+bUA2AzQz4Im01/+/3cT0Kf3Ul+sqLuhXAl6v8aT/SCHzcJVBUh45cuXpg9N1E3Z1AN/ODnTe3FGwmfu4ZWbc/bcbOfe0RA1Wc7xaBvwtHsE41AQPpoh+V959RG1ujxPyE2LkxFBxfk2vmqQUKcQn4trhdafQq+i2lCtoCHRyCKCXm9lcXR6zbzrdC171IArukHHomZfb/6rY3mUi3JafPcjPNIiBaYDsetH+2ds60r463MdtO7k41IAQK3jCQ9o+uOBjrdHCkefaQRbY2MUKp+b8Rqlm+HhzTX1SXcnS/phNkUyoGvqneZRktgPUIaxFFOnbCaEIw6fBYCJbG8yvCeRci7KNMGH1rJkm8d9QEj9AZdmwAlLseNLDduTDFSYxy9DBgyDITrrDzua/CdbxZhEPuBtXoUAC557ahsI07oBBKi2jeBSZ/tDgjh0oKcvSC98bXaHLDeoI+MBwchQzOB3a4dYenoKa1pCTexWQKshc/fJzFg9A1UbQr5s3H2EC2zAvKNoJL6myboOgxNU3OihC+kodKnEetX8+GhvJ1IbNZ2VD+FKxzZag1ZjPCfLnr3elnwtV1O/diuwFKZ2fYQnW/d0CzYGNWo0nS6h4je3Pn3WIM7gcXADzS+ORiKJklET0SKfsOLNtZs4LOa6LCmEcRxQRb9s0dKjOGixJvb30+jBJN3fn3F887KlX0X6OKh0HeQb+GpcHkz+9BZaNbiDIawqeGUKQjPQ5tOwCIynK0gJOCmoIBjdyNKGiFo8Xe/WPFJw4fVgBEvY4xj7lAbPgPAGRWuU93xsUUY39pCbqYyQ7SSvJz4V1uYEqUmxDxpaMhn0n5W2b0zEbU7C8a7gjM0We9kMYz8fGosIT1j5qgTZWBuimoGtig6AgPkdimTgGjWyWJeUDF/q2PZCM8o5MC0NE1JF2mOqjL5kwwF75OWX3jIr54uxbyqzXt7kf0uUZyBpDt9JoAj144B7jfQSRDqG6dXBnSEHAnUOfsAESOnGjUyncugiVzNpbj8Wlw381//MBXyZhbhKU8SYU90oZc0U89uQfh9aXvvRO7SriE4Lm53H3/LTSOHLFWqm22bhbU5GKPb5eGe49KBPGkoXDduMKcrlph621njoaSeasU+USmosHyH4/dcnBuwqm4GCm+Ms4TCjAfOUWdWgMaxuaaRgBYpY7/Rl2YsUOBG6m5+V0FykFs4qsA8KS8defnvzh/ga76osXT/uXXMkMpK2aC4oD6SjKHvRF7jyQ480ZD2fg1F/RS9C8r2/aKd6O+zSrlF8BLx3iCg/kjxtkEkbPDdJrVzadk1EAyw54Kh+q3aKz9xbBRVaWky1wkmOdJa4jhlKF+g010m1j/VCDdMcjgSbbEDqUu4PzverleuVwWZm6KE7I+IlO0jBCpVHcyunmjlMdFHUWardk6F59fRU3OyYp8wnJYnbmtK0q96CqkpDF5s682TyVIHlbVIEVp5GSg2prsXyR/IF6fwVWlmQ2BZsle2d2gqlkh5fT1xLero+BO0QXFPNnMqOrwQjaNeE+2dS9J0h5fC8w0i5zeTx0h/ZEYXAtjRuVUihrTvzESEeRM6DPoZQuDgnmOLiqZ6dCCXymVBTn6luFLMkox/dLFZcQ/0doikNC1kp0UqK3x7Mvk7l6VkFmuhqDUYOL0V356LzO7+H6meLmUj8CDgzmgYNp22dlukwIJgjJiz3UNJNYdk/Txrcono4VfwHrLvmo06hgOUpomjdvmdgPRpnem5I7XWzGef57aepAgIkB48wBaLKYW4GGuCoR5mId8WKa7QG2Spyl4cWlwmzC2ZPjLllnosKpYOnsQDtsetBx1Rcyvn9V9mNiG8Pmhiw2d+1VOXWgN2KcA7E6ONP5Ce4wXXwVGaiW5JXJs4bg72QTz/4eY9yfV0P4ToNUyNKyP1ywrj/50m1i6aULsKa1uOX5K53g111I85eDZzKezMDU69Nfq2uVUynUuWrg8w9iNp9DglKdaMKAU98OP3TMJc6sI7rFj9OjwaR7W70Wywd4GCR0oVCWpVhmWlBDuvwVy90H+wUd12l/r4hQeM3Df+SoFaFXQ/nyjAnBbNNA4Xeo/utR00Y8MefWiC7CBK+F/qIF/7r2yzlbBIgaymjhOyzrP4R2SRjBEvZl3g54DcyJFN81NU/FzH8FeNd2p2XDf1pY+HL1ZbYaDcvrixcw9JiapTLDPNJKHGkKAk8WvISCKAAAAAA=');
