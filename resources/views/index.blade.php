<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>联通沃扫码</title>
        <link rel="stylesheet" type="text/css" href="/css/unicome.css">
    </head>

    <body>
        <p id="welecom_title">渣树坪村-李怀青</p>
        <ul>
            @foreach($feeset as $v)
                <li class="taocan_active" name="{{$v->feeset}}">
                {{$v->name}}
                </li>
            @endforeach
        </ul>

        <div id="submitDiv">
                <input id="submit" type="submit" value="立即申请">
        </div>

        <img id="ad_img" src="/images/welcome_01.png">

        <script type="text/javascript" src="/js/welcome.js"></script>
    </body>
</html>
