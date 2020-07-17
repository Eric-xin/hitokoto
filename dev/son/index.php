<!DOCTYPE html>
<!-- saved from http://nows.fun/ -->
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>真鸡汤 - 壮士可要来一碗！</title>
    <meta name="description" content="我们精心熬制了有屎以来最毒1000多条经典真鸡汤,句句“治愈”人心! 只为了帮你更好的看清人生认识自己，直面现实,直面惨淡的人生,不给你励志,不给你慰藉,像一根鞭猛的抽你一下,使你清醒,知道这个世界和你自己最真实的一面,是青少年手机里的必备宝典。">
    <meta name="keywords" content="鸡汤,真鸡汤,馊鸡汤">
    <meta http-equiv="Cache-Control" content="no-siteapp">
    <meta name="author" content="yatang@126.com" />
    <meta property="og:title" content="真鸡汤 - 壮士可要来一碗！" />
    <meta property="og:url" content="http://ericxin.cf/" />
    <meta property="og:image" content="http://ericxin.cf/icon.png" />
    <meta property="og:site_name" content="真鸡汤 - 壮士可要来一碗！" />
    <meta property="og:description" content="我们精心熬制了有屎以来最毒1000多条经典真鸡汤,句句“治愈”人心! 只为了帮你更好的看清人生认识自己，直面现实,直面惨淡的人生,不给你励志,不给你慰藉,像一根鞭猛的抽你一下,使你清醒,知道这个世界和你自己最真实的一面,是青少年手机里的必备宝典。" />
    <link rel="icon" href="/favicon.ico" type="image/x-icon" id="page_favionc">
    <link href="./img/min.css" rel="stylesheet">
    <link rel="alternate icon" type="image/png" href="icon.png">

    <script src="./script/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.bootcss.com/html2canvas/0.5.0-beta3/html2canvas.js"></script>
    <script>
        var word_list=new Array("孙子","儿子","同学","爸爸","爷爷");
        function change_word(){
            var word_num=Math.round(Math.random()*4);
            xianshi(word_list[word_num]);
            ei(word_num);
        }
        
        setInterval("change_word()",200);
        
        function xianshi(str) {
            $("div#1").html(str); //将读取的内容输出
            console.log(str);
        }
        
        function ei(word_id){
            // var id = 2;
            $("div#2").html('<a class=\"btn btn-primary btn-xs\" onclick=\"click_jump('+word_id+')\");>诶!</a>')
        }
        
        function click_jump(word_id){
            url='./result.php?id='+word_id;
            jump(url);
        }
        
        function jump(url){
            window.location.href=url;
        }
        // setInterval("ajax('https://v1.hitokoto.cn/?d=f&encode=text')", 9000);
        // setInterval("ajax('http://ericxin.cf:234/beta/hitokoto-master/api')", 3000);
        // setInterval("ajax('./api')", 3000);
        // setInterval("ajax('./api')");
    </script>

    <script>
        console.log("没想到你打开了F12!\n这是由ericxin开发的真鸡汤系统\n提供api ./api\n可以使试一下毒鸡汤 ericxin.cf:234");
        // confirm("欢迎来到真鸡汤");
    </script>
    <script>
    
        function get_image() {
            var userAgent = navigator.userAgent;
            var isIE = userAgent.indexOf("compatible") > -1 && userAgent.indexOf("MSIE") > -1;
            html2canvas($('#content'), {
                allowTaint: false,
                taintTest: false,
                useCORS: true, //火狐浏览器添加项
                background: "#FFFFFF",
                onrendered: function (canvas) {

                    var image = canvas.toDataURL("image/png").replace("image/png", "image/octet-stream");
                    // .setAttribute("crossOrigin",'Anonymous')
                    var userAgent = navigator.userAgent;
                    //判断是否是IE11
                    debugger
                    if (-1 !== userAgent.indexOf("Trident")) {
                        var arr = image.split(',');
                        var mime = arr[0].match(/:(.*?);/)[1];
                        var bstr = atob(arr[1]);
                        var n = bstr.length;
                        var u8arr = new Uint8Array(n);
                        while (n--) {
                            u8arr[n] = bstr.charCodeAt(n);
                        }
                        window.navigator.msSaveBlob(new Blob([u8arr], {
                            type: mime
                        }), "download.png");
                    } else {
                        canvas.id = "mycanvas";
                        //生成base64图片数据
                        var dataUrl = canvas.toDataURL();
                        var newImg = document.createElement("img");
                        newImg.src = dataUrl;
                        var a = $("<a></a>").attr("href", dataUrl).attr("download", "img.png");
                        $("body").append(a); //火狐浏览器添加项
                        a[0].click();
                        a.remove();
                    }
                }
            });
        }
    </script>

    <script>
        console.log("\n %c REAL-SOUP by ERICXIN %c http://ericxin.cf \n", "color: #fadfa3; background: #030307; padding:5px 0;", "background: #fadfa3; padding:5px 0;");
    </script>
    <link rel="stylesheet" href="./script/APlayer.min.css">
    <script src="./script/APlayer.min.js"></script>
    <script src="./script/Meting.min.js"></script>
</head>
<body>
    <div id="content">
        <div class="top-wrap" style="position: absolute; top: 1vh;width: 100%;z-index: 999">
            <div class="container">
                <div class="row" style="margin-top: 30px;">
                    <div class="col">
                        <img src="./img/logo.png">
                    </div>
                    <div class="col">
                        <div class="float-right" style="padding-top: 0px;">
                            <!--<a class="btn btn-primary btn-filled btn-xs" onclick="auto_change();">自动</a>-->
                            <!--<a class="btn btn-primary btn-filled btn-xs" onclick="stop_acs();">停止</a>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-wrapper" style="position: relative; top: -6vh;">
            <div class="container main-sentence justify-content-center text-center">
                <!--<div id="1"><span id="sentence" style="font-size: 2rem;"></span></div>-->
                <span id="sentence" style="font-size: 2rem;"><div id="1"></div>
                </span>
                <!--<br>-->
                <!--<a class="btn btn-primary btn-xs" onclick="change_sen();">换一句</a>-->
                <!--<a class="btn btn-primary btn-xs" onclick="nyan_cat();">鬼畜</a>-->
                <!--<a class="诶!" onclick="nyan_cat();">鬼畜</a>-->
                <div id="2"></div>
            </a>
        </div>
    </div>

    <div class="foot-1" style="position: absolute; bottom: 7vh;width: 100%;">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <p class="lead text">
                        <!--截屏分享朋友-->
                        <a onclick="get_image();">截屏分享朋友</a>
                    </p>
                    <span class="btn btn-primary btn-filled btn-xs"><a class="btn btn-primary btn-filled btn-xs" onclick="get_image();">ericxin.cf</a></span>
                </div>
            </div>
        </div>
    </div>
    <div class="foot-1" style="position: absolute; bottom: 10vh;width: 100%;">
    <div class="container">
        <meting-js
            mini="true"
            server="netease"
            type="playlist"
            id="147838655">
        </meting-js>
    </div>
</div>
    <div style="display:none;">
        <script type="text/javascript" src="./script/disply.js"></script>
    </div>
</div>

</body>
</html>