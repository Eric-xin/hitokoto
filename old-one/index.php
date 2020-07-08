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
                        <a class="btn btn-primary btn-filled btn-xs" href="">下一句</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-wrapper" style="position: relative; top: -6vh;">
        <div class="container main-sentence justify-content-center text-center">

            <?php
            // header('X-Powered-By:Xiaojun API (api.xjdog.cn)');
            header('access-control-allow-origin:*');

            $array = file('hitokoto.txt');
            $rand = rand(0, 3154);
            $string = $array[$rand];
            function arrayToXml($arr, $dom = null, $node = null, $root = 'xml', $cdata = false) {
                if (!$dom) {
                    $dom = new DOMDocument('1.0', 'utf-8');
                }
                if (!$node) {
                    $node = $dom->createElement($root);
                    $dom->appendChild($node);
                }
                foreach ($arr as $key => $value) {
                    $child_node = $dom->createElement(is_string($key) ? $key : 'node');
                    $node->appendChild($child_node);
                    if (!is_array($value)) {
                        if (!$cdata) {
                            $data = $dom->createTextNode($value);
                        } else {
                            $data = $dom->createCDATASection($value);
                        }
                        $child_node->appendChild($data);
                    } else {
                        arrayToXml($value, $dom, $child_node, $root, $cdata);
                    }
                }
                return $dom->saveXML();
            }
            header('Content-Type: text/html; charset=UTF-8');
            //
            ?>
            <span id="sentence" style="font-size: 2rem;"><?php echo trim($string); ?></span>
            <br>
            <span id="src" style="font-size: 1rem;"> <a href="<?php echo "./id.php?id=" . $rand ?>"> id = <?php echo $rand; ?></a></span>
            <br>
            <a class="btn btn-primary btn-xs" href="">换一句</a>
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