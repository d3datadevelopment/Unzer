<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package Unzer @version 6.2.5.0 SourceGuardian (04.07.2022) @author  Daniel Seifert support@shopmodule.com @copyright (C) 2022, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('7A3737B355E09E25AAQAAAAXAAAABHAAAACABAAAAAAAAAD/CEt8fI3bhkf6j8lJBRthnPXOvzD8f4g/dk4wr2T6l1ZtZV3stTZ1ciJIVBfLpEDRq6JT8khrNffOSGyUNx9rZm48GgtnIl1IcWlkpCCZapbeVT7QfIznt5R2YOYmVi/HetRgRS9odMGYqIkrlsd/aggAAACQCQAAH4Dmbd0/Mz4otqYVtw8G51RwJVbzZCvH2OtGTM5tfZsBb2OcsovelyJ28CUvQf+UiI5jmRAZEE7OX4gQHGbmMYXwKFYl3RgCDJ5h4PJb3FVVOgvvwxd61e0/OIjLVbbrB+ThGoRRoyqOCH3p4c5op7NJBowz/PqI+OHdkmDBuuBpMkIh7G7YbQjxpAkU7pxF3C2NvHAjdYs2cjMWw2Y5JuUkuGhzuYNK4u9sTzDAcFgDqmr9zN5KNP819qIyiHxPDsaBtHb4KOl3Xv63gaNJRdvUYhTQV36J+ymSM9bfDozZOBUVnWWipr3Q164w8Bhoqcvy+5MjUMmslO+ME9R58FCpxg98ClZvdjirpfGTebJIyjtGgS68Jlnx945zOjSrmtI2lDObDB0IF+quAnojbcILjGpzhMRSsEPSp3EZuy2A5LZ0PzYNZrMxNh253Mt4QFSzuiW4Q20X/3eIAZskRrnLfmBeBZSh7p0W8jlBreUsYmkF4Gzpg3lCag7gKy8Za+0EN+OKmRYc9QNxPfQGXJUuqnoCI32vuJ1ujaQDJfh0cKboc7AfyT2etBFelwLKOsHHkNdWrJlsDF92X1cdPemf9csRU6lh/E6hpXGflFD91+7RrwTCmjUpKyRUry+aM+60zvQemAd/+sz4SLOi4EQsCZEsEC0OkdShj7+teNfXCG01BgAP3A/tDvS/XKLgG6CcHFkfYkvO0bZgn1NmBsNAYTCTMn1rxxbDPjb6MnRVwz4RUerhwKtqniLLRMZRyrdB23IS2Yo8UNm3kKT0wX2ZbJsMWyykAE8MuMnWslbIgLUUK2jGX7f0IHRpl+Y7JVUbUMV7dJUveHcA4120zYsJXUyfyDHV7itCo9k6YDJ4iWTvQVkAWCFXi+YMUEWdguaX/eFY19UjqOLB8lymJRSFbkh1vgOvb+PvNJ8Pwiq2fih7F7ST5XiOTRYVn1eOT+dBtruEOTVrW8SG/maJs//JT7h5IRI/Zv8hvqCKpZwjr3Y8gPhE6EtxOcbNPxuf+UJOm0swvPUj5P8Cs63VnVnb/0RdD1wMXY9g8yDHi5G+BvhZNMJa645Nf5PsQNN6vaqg7QhLSXQw+1AWKXtasI/dQMfpDbE5Ch4/VSopXfoot4SUoBypiBeCc+4XVxrbk6cRbXT9VDw5yCGMVVlhQQN4Ei0Pf7EtVT2A7iL/41fA0CxY34Ecacsry20J5IZ+3d9eLWeORm+czNKOjAs4yFhLOTGwxhCAl1j+jDXfnZ6Tn7bVQJpVt6U9KdirjGIf5FQyfb0o3CRvwOXCPzdREUba/3N0qtnMvHTLJb3Hr2pHcVO8KOsLqyHwuQd/IfFfXXeop8ykCO8nGG08FFAayJH4jbvWvnygN/aLdsA9Cbm12EZyddtCLtMhn2q36/NvdyvGjcp7IDc/ycIdSkaTRPNGqvOdbs5ArSKESYvFc+yNFfN5USmyvXpr8xX4tqddUrg6rrE3FEQD64j926jJ7jWU9kNbG+dnB5VosjEHz7FdQQdB/GfeqHI2/wkjJ2Sp1AR9eJh34pH6YTlyxjOLLKIv8POEEkAvKJySkhnkfvXTop0KWo5J8GiBSrQsU2GXb/k5dwjRTQn6ru96Qu4wMmgGjJ7aIkZGGgl1VrgGKTSLktctATTTkNqTfOqZCxGCLTFHuO8exIyX3U4V83sxEhUIi5QKrlRAaKcakjEA4f/UzjpRXa+KOeyJW4mSIAyYRnZGKxW/FmvzM9r0Z7z9ugMfza9yuuEFqC3EgStVg/hhBD5BPoDzasARjXhlNPEJZD35sPN+nNDG9EvEm7yhWKybkFIwSWrrVLwoqqyav3n9RrDChCcMi4bCb0+l3T6U7nki3QRgHu++PJt05B/LQndMVyfRtFo4Ed6srDZEO1Zd4sFUQSQLePjuXyn7x6lzFLosvbtF99r2iX5SSyqP1S9zSqNDFzFTrjhZfK6NcsqN24Z833uwzz+5IyvbW1S/lTvQD8I5f16E7yvO70PMTXBJ5EwFFpyU/EeQs8nY8OPlgSmjOSMp6DKJsnpFeYSyTFhyWq25PN2+YFp66+oL6u76O6BvENmBANMRNRLZLndxDYTF8X3G7I45tA5kFT9C7NNA2KphCcuAfXafAY55sHglJXFFbJoznJExevrRdR+i0Hdg1g9OW1i4gpzictkYtoZ7O5/kCZyop2fIsuBljc+vr/e6M9ig2hxLgjIYXE4f+3IuVsnoClpuDf658IM3P2Y3c8ZFTNAV/W/5xA70PmSxQvQCqpYi+tsLe+TA8S3m8QR5RN+M9Ux6aQ0GybJZflyVbVahezSZYBI6jQaKifJhYwInNyAD+ZX8BuPdrFoLxeIShQ4yInFrZD5eGh0uCOo/413h5YfXrIm6xUNgWGoS4E+17nvfs9HtIuDiKT9eF7jTniDqSRBU3k2pN9KezZM/W+9LQtsyKFo2HJmqxWoeDspIiB7cC3cLL5dclGri2CWa7ugQg8pixpdh00WSEywUyZwgcF7hk6YZueYiLuzX17h+Txir6kD6/yabunINNrn0ng0af1LDzUyseoRu9zeqORhBEaXWUJyGEE5JOWd0U4f6pZA+3E6h0ueyggzpuwEFMDsU+Fn12Q2TenivMChPeZ4LNKkj/+4dZr210gjbQpZk4onR0DdgnLRegIyXggjokZNXnX7C0PYhcB+9+nZ9+twDoh/J1e4dom8LNt1CP1HJhyECeochjJKqOFVwCQCMQVlC+khEzmEwYF47qN8k7woZz/YhQJpMr7Ywem+tIPFBY7q5+w+MpSz3qaGYjeGKOP6jYHs78PnMYBz5FhRu20KfnhtmMcnmsxE43vfecOaI+RNahp9wcW5Z9fAl4ce5nQ6EP1x6xjixdW47Q8jqU15miBWlK9B4FGhK897dv8IS6YleUvbuo4UZTcTn2QnrhR8NdZZ7mwd8lzkN/hYFQicbdbBOGRUKB1F8d+QzbDVuBPSEFYFrOzvYQ+rB2Kkvj0rsZsrsN6etxWr3C/PzRw08f/4thOZHd7SMNgwuns3FuJ1M2F8CdmHduYdXTeKc4w7AJmT42p+GFqKXZzDxlU2Ys+OFdy2G8VdfoZWodC/6wNpOmmoR92swHs+Z3hWPu+wXIN3U6q9NW6hMqXf7BZlYwzLohqzF6525gc9CF+SA79m/tJdeJ/VjDozRGGmdRajmkPeRpXSazlVVLIJt/+t92UaEeXHX7Wi5r04bC09oIJpB36iGB5IWD0atHP69njYr5HYcgRhGH6iSUQAAAIAJAABnneSzMeYwNsbj/3SIR02XGAO97dWQzxuVq9wd5+BWY0Ksxshdhgo92TWPmDnRg/RtYuv2420yDUcYxKyHWtj3DL8IoSPqICuCTvsJBGIFNJ9JDdeq9dZqxyP7jFPdyR0SYqxjKdjF7X4GuuN1XhrfaRHhCsomMI8uTnGeJaUzjVKJ0XsnYzrEHJpGq9rJzdO0zMebKfaEHqxIfHySOiczMVwXB/WTzQGoHOzPgnUf4n5Zj2PEIHVgDJzK0yWr2kqhda+xMWTiuCtGQAvEI74ScT1GP8ojSqhfMqZIPMEzEblW+NNhYueD1eRHsn27VPO2Q7SlDCvR7YOHbtpMUh9NzsOfTVJ0DtEjaftpoF7bG/x/W0IDWucxncXWBDTTgq1tkX2jujW3xeFM6PirHU9GGdgruBHIFv7mUAZP4eLkuJNVP0Yh4b/nsgvhz09NpYUDMhQ3Wd6sDbvRaRANeDcMtY/xk0lw7UzrSrOSKNVUbm9vtLIbt+sf63VP54rCT22fkLnV29z7oVwZ1xXgn68AA6uF/6/DAoiJpury1hiXw8IaH3TPSwgWGzIotjRBWsmlz683Bn03mJHVPMDPdJggxP3kvPSPmvh75iXv0MyxNM96Or+G21GU+/RF7MimYVgBCY3ntSLhWxBI7cRfk1AwYpb5l51lo8bn3qsw3CyHGD2e547umPMm4smqKhhYd96B0pDRpITILaLATrYu/jCBZ/skWo/QWn9dSszeYuWqqlxakTna/M9OwvGGeBDZL2m/2jyD5YJHqTXL4NvMK5xk7lQf0LORCmfrnf5iwvfhRPfVnIU9cYfPJVz7GClj5l4+GX5Zpkg/CTt303L7HhdzB8HvI3zjpUluqfmzcFPAd1fWxgUo0EHaJ7Fm+v+rfYfGAMoijnqaweuatd9b/cdcWBvW8ncG6JsRXyAemerrF6sh5KCFwtcLS2AxvzgAsn3d82Af1vhaYSrEfjXP7R6ENvW3Ih+iOAn1euyE3/3JuR80hYeRYm9ciXLkdNGYNImUZxngwWfW17IXKdWYwD4j1LVCU5KErhMLPO1Sj5FV9ZvzJ91IN+QBMUxxMWTOvTwu/VKBjXbpJaVO9tueGuRfsmAD7W2221hEx6f0SUlIyfJYVkKZZjmXl5lmU+k4iapbqxZyo1xvRwZZqfiZwtEL02Rt1kud7gBY4TqEZZup1r3Nd3NLvEVzysai0b/lglLCB2tHiKlJTFWuSUlX4gCYv1/rqrzLjyCPVo4u77dQf2LTb7rvu311nwxkcKrs3u2417w61RNWJ3/MBQYmJUsGatw5YDj0MLw9d/gc6U6hRdbYaaQkpeyehTfGkk1jiwpYpIqB4l60Erf586vxGMdNoYdnNQkGK3vks3Bevsqj0sXwu1bi7hT13d/WdP8Gw8SbuQ/u4v9oUbnLL/CESq5FlsdUlDyscxpi8ywUDaqirIV3BYglAV1WpTy8lqhrXGb4C291HZU8IYxnaq6620+RS/wtpxEvBwiTOFkPL4bxL9RoH998kw1glM8qRKmXKvTpvpZRJo3ly1F0katBGEMasUbbzd/yvGyTxmc/HSubWsgNwkiZaT0shZyfUuxR10SRbEtIQ6gLrnu5FD7hWpy/JQcynXg/MoyjHolhhPtjp9XReKoRgSGQBGrjfQTHozt3dSrbYo1fyIHjzFgjLVKfLa9PiBLpJESuhGO368xYh5AGUouz1i7UjITMLTEXuZIdYsqxHYRZI3Igz84tDd52jlOq2NXpQ2pICo6VI+/qQpUZTRA7Nc7RJumD49/ZLI1VeHU3tzHXjoKIX/em0gisva4sUvuxaRK6O93R5FYTT6cgCvjfZXAupOJExTk9qyIFvhn5T0SDh7s4Nh+5aDTXId/81+y3g/sW3Q0f1TPyzRNYpjpkYRV7uy9aQJvq+eA4QQ/BFFnzP2gNWgiogl34x8JjLkHcXqPOWQQs7SCYT8pQjHdwLlzjPavHhYyIuhaW0yDzYbmvNT8zuSpkx7VsLAmnScrCk2WZ8mUl0zq8xE7O2DoxeoP2ciLurkEORI0j4Y88RyYeWduUp8PSaQPiIUsvD7VQBVaO8w6TLeWsgvm4qDpJg2ns0l3GDErULHsx02HzA1PZkK/hXWmJdvM5pR2dCVLfFhmz6bLmQxvcnZY7CrbYvAuJh3gZPVjwikSm8XR0+lvYlOEQNJM734FqaRCpHl4PcFxyJoOO3fQTqtGNs9lwMtCezVy5Y6Rx9U2uROvH0L/aryg5uvDBpccXLpG5bnXVYeqwPFrIZoSSI8p4BK2rTtrXx45BffzlftCbvQMgx5AtFcgower14H0rtn11ZpG60Q582d8R9+1iwMUDnvTUbDwOjCA5+hrgBLSSoejo1zG2UhFVNXOafzbuqdrJlqZIGBOZ+FMqT+2Qdda32YfbL3NehK3Yfpq1Pi2Gerz6Sf3V02TcdkCbebilqYaWeTPLbixrYre+g7p9L8grT2nYd9nXu/X5/uwmCgb+CGc9Y7GP6Y8ufAxGqtL874Y8vkjImoGGHnLI3ll7pTgxL1sMNeEUBX85yVubDBi4xiH0Aj/7WvsY868AgFyDws30wd4+KW8WGPzKsxjkSMKf7MpCMne3RU2jnsABtt3GeYfYY7ePmNiRVwHR5+yp/F6bgQwin/Em9XV7/b+AJCaoQ2YNdxqhqeE3E1WAFZyQoMsubqZ1gwRSPuwKv0jEw1Se1/GBz63jQOnXcilci7V+AmFOhhA7UFNoXY9WpVP7EzZn73Gi7rq2nWAqH2S5w6m3k1UwYELI8pqZq4/Cup/YLNL5BhWcquJkkMKlhfLqltAFfrXtnlDtFJcgduuhbMrDofyOnna84VmzFtC6YrwhdwkP2rephv+U/JeS5Y+WRbl32siy8k0JnjrS/R9OzVHokMnNvZIo42+/TLi0+nlg18DCZyZpHIeE9xxNsN5vYeAtvrBoUqcb23OSaUUfdcNePBFrdc3aObucALCvCln/eqiop16ZsupPQLTj8mV0aSiy/espS8+0y64GRWzKtInAlc2LzsEktuJka5to+1CVyFrON2jmzZl42yacKh/vf3MKoQzqxwE1fs0kI7zx7bTWg2DVxbUbkHdyc8+zcVGRmJAUInLULg8DaMgn0X1D07N1UhowDmRoT7YdGvDZgc4hIepUzT+OWFZF6ufPnKjoj1690Cgg6SRbJeu6B/uaRK3RD8Te32AAXotTbAKTazfMo1vKoNeEPoHOViO59gAAAAA=');
