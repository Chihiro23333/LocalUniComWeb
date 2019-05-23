<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>联通沃扫码</title>
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"> -->
        <link rel="stylesheet" type="text/css" href="/css/unicome.css">
    </head>
    <body>

        @if ($errors->any())
            <div class="alert alert-danger" style="display: none">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form id="form" method="POST" action="{{url('unicom/submit')}}">

            <table>
                <tr>
                    <td class="desc">联系人姓名:</td>
                    <td>
                        <input class="input" type="text" name="name" placeholder="请输入联系姓名">
                    </td>
                </tr>
                <tr>
                    <td class="desc">联系电话:</td>
                    <td>
                        <input class="input" type="tel" name="phone" placeholder="请输入联系电话">
                    </td>
                </tr>
                <tr>
                    <td class="desc">身份证号:</td>
                    <td>
                        <input class="input" type="text" name="cardnum" placeholder="请输入身份证号">
                    </td>
                </tr>
                <tr>
                    <td class="desc">详细地址:</td>
                    <td>
                        <textarea class="input" type="text" name="addr" placeholder="请输入详细地址" rows="4" maxlength="200"></textarea>
                    </td>
                </tr>
                <tr>
                    <td class="desc">电子邮箱:</td>
                    <td>
                        <input class="input" type="email" name="email" placeholder="请输入电子邮箱">
                    </td>
                </tr>
                <tr>
                    <td class="desc">备注:</td>
                    <td>
                        <textarea class="input" type="text" name="remark" placeholder="备注" rows="4" maxlength="200"></textarea>
                    </td>
                </tr>

            </table>

            <div id="submitDiv">
                <input id="submit" type="submit" value="立即办理">
            </div>
            <input name="feeset" type="hidden" value="{{$feeset}}">
            <input type="hidden" name="_token" value="{{csrf_token() }}" />

        </form>

        <script type="text/javascript" src="/js/unicom.js"></script>
    </body>
</html>
