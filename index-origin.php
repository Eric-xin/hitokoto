<html>
<head>
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
            $("div#1078").html(str); //将读取的内容输出
        }
        // setInterval("ajax('https://v1.hitokoto.cn/?d=f&encode=text')", 9000);
        // setInterval("ajax('http://ericxin.cf:234/beta/hitokoto-master/api')", 3000);
        setInterval("ajax('./api')", 3000);
    </script>
    <script>
        // ajax('https://v1.hitokoto.cn/?d=f&encode=text');
        // ajax('http://ericxin.cf:234/beta/hitokoto-master/api');
        ajax('./api');
    </script>
    <style>
        .hitokoto {
            border-left: 5px solid #0073d8;
            border-right: 5px solid #0073d8;
            background-color: #3288d31a;
            padding: 10px;
            text-align: center;
            color: #0073d8;
            margin: 5px 0 5px 0;
        }
    </style>
</head>
<body>
    <div class="hitokoto">
        <div id="1078"></div>
    </div>
</body>
</html>