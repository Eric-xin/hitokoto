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
    <script>
        function ajax(url) {
            if (window.XMLHttpRequest) {
                var oAjax = new XMLHttpRequest();
            } else
            {
                var oAjax = new ActiveXObject("Microsoft.XMLHTTP"); //IE6浏览器创建ajax对象
            }
            oAjax.open("GET", url, true); //把要读取的参数的传过来。
            oAjax.send();
            oAjax.onreadystatechange = function() {
                if (oAjax.readyState == 4) {
                    if (oAjax.status == 200) {
                        xianshi(oAjax.responseText); //成功的时候调用这个方法
                    } else
                    {}
                }
            };
        }
        function xianshi(str) {
            $("div#1").html(str); //将读取的内容输出
            console.log(str);
        }
        // setInterval("ajax('https://v1.hitokoto.cn/?d=f&encode=text')", 9000);
        // setInterval("ajax('http://ericxin.cf:234/beta/hitokoto-master/api')", 3000);
        // setInterval("ajax('./api')", 3000);
        // setInterval("ajax('./api')");
    </script>
    <script>
        // ajax('https://v1.hitokoto.cn/?d=f&encode=text');
        // ajax('http://ericxin.cf:234/beta/hitokoto-master/api');
        function change_sen() {
            ajax('./api');
        }
        var id;
        function auto_change_sen() {
            id = setInterval("ajax('./api')", 3000);
        }
        function stop_auto_change_sen() {
            clearInterval(id);
        }

        var tmp = 0;
        function auto_change() {
            tmp++;
            if (tmp%2 == 0) {
                stop_auto_change_sen();
            } else {
                auto_change_sen();
            }
        }
        </script>
        
        <script>
        function nyan_cat() {
            var include = document.createElement('iframe');
            include.style.position = 'fixed';
            include.style.left = '0';
            include.style.top = '0';
            include.style.width = '100%';
            include.style.height = '100%';
            include.frameBorder = '0';

            // make sure that iframe is the first element in body
            if (document.body.hasChildNodes()) {
                document.body.insertBefore(include, document.body.firstChild);
            } else {
                document.body.appendChild(include);
            }

            // listen to the hash url change to load the page
            function loadUrl() {
                if (window.location.hash === '') {
                    include.src = document.referrer;
                } else {
                    include.src = window.location.hash.substr(1);
                }
            }
            loadUrl();
            window.addEventListener('hashchange', loadUrl, false);

            // return a int random num
            function getRandomNum(min, max) {
                var range = max - min;
                var rand = Math.random();
                return(min + Math.round(rand * range));
            }

            // cat class
            function Cat() {

                // reset position xy and speed
                this.reset = function() {
                    this.img.width = getRandomNum(100, 200);
                    this.x = -this.img.width;
                    this.y = getRandomNum(0, window.innerHeight - 100);
                    this.img.style.left = this.x + 'px';
                    this.img.style.top = this.y + 'px';
                    this.speed = getRandomNum(1, 5);
                };

                this.img = document.createElement('img');
                this.img.src = 'nyancat/img/nyancat.gif';
                this.img.style.position = 'fixed';
                this.wait = true; // ture is not display
                document.body.appendChild(this.img);
                this.reset();

                // this should call in loop update callback
                this.update = function(dt) {
                    if (this.wait) {
                        if (getRandomNum(0, 180) === 0) {
                            // about 3 seconds
                            this.wait = false;
                            this.reset();
                        }
                    } else {
                        this.x += this.speed;
                        this.img.style.left = this.x + 'px';
                        if (this.x > window.innerWidth + this.img.width) {
                            this.wait = true;
                        }
                    }
                };

            }

            // cat array used to manage
            var cats = [];

            // load callback
            function load() {
                // init cats
                for (var n = 0; n < 20; n++) {
                    cats[n] = new Cat();
                }
                // play bgm
                var bgm = document.createElement('audio');
                bgm.autoplay = true;
                bgm.loop = true;
                var src1 = document.createElement('source');
                src1.src = 'nyancat/bgm/nyancat.mp3';
                src1.type = 'audio/mpeg';
                bgm.appendChild(src1);
                var src2 = document.createElement('source');
                src2.src = 'nyancat/bgm/nyancat.ogg';
                src2.type = 'audio/ogg';
                bgm.appendChild(src2);
                document.body.appendChild(bgm);
            }

            // update callback
            function update(dt) {
                cats.forEach(function (cat) {
                    cat.update(dt);
                });
            }

            // start loop engine
            function start() {
                // make a fps loop frame
                var fps = 60;
                var lastTime = new Date().getTime();
                var loop = function() {
                    var nowTime = new Date().getTime();
                    var deltaTime = nowTime - lastTime;
                    if (deltaTime - 1000 / fps >= 0) {
                        lastTime = nowTime;
                        update(deltaTime / 1000);
                    }
                };
                // load callback
                load();
                // start loop as soon as possible
                window.setInterval(loop, 1);
            }
            start();
        }
        ajax('./api');
        console.log("没想到你打开了F12!\n这是由ericxin开发的真鸡汤系统\n提供api ./api\n可以使试一下毒鸡汤 ericxin.cf:234");
        // confirm("欢迎来到真鸡汤");
    </script>

</head>
<body>
    <div class="top-wrap" style="position: absolute; top: 1vh;width: 100%;z-index: 999">
        <div class="container">
            <div class="row" style="margin-top: 30px;">
                <div class="col">
                    <img src="./img/logo.png">
                </div>
                <div class="col">
                    <div class="float-right" style="padding-top: 0px;">
                        <a class="btn btn-primary btn-filled btn-xs" onclick="auto_change();">自动</a>
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
            <a class="btn btn-primary btn-xs" onclick="change_sen();">换一句</a>
            <a class="btn btn-primary btn-xs" onclick="nyan_cat();">鬼畜</a></a>
        </div>
    </div>

    <div class="foot-1" style="position: absolute; bottom: 7vh;width: 100%;">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <p class="lead text">
                        截屏分享朋友
                    </p>
                    <span class="btn btn-primary btn-filled btn-xs"><a class="btn btn-primary btn-filled btn-xs" href="http://ericxin.cf">ericxin.cf</a></span>
                </div>
            </div>
        </div>
    </div>
    <div style="display:none;">
        <script type="text/javascript" src="https://s9.cnzz.com/z_stat.php?id=5406879&web_id=5406879"></script>
    </div>

</body>
</html>