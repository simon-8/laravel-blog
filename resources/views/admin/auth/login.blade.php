<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">

    <title>后台登录</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link href="{{ skin_path() }}css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="{{ skin_path() }}css/font-awesome.min.css?v=4.4.0" rel="stylesheet">

    <link href="{{ skin_path() }}css/animate.min.css" rel="stylesheet">
    <link href="{{ skin_path() }}css/style.min.css?v=4.0.0" rel="stylesheet">
</head>

<body class="gray-bg">

<div class="middle-box text-center loginscreen  animated fadeInDown">
    <div>
        <div>

            <h1 class="logo-name">SC</h1>

        </div>
        <h3>欢迎使用</h3>

        @if($errors)
            @foreach($errors->all() as $k => $error)
                <p class="text-danger">
                    {{ $error }}
                </p>
            @endforeach
        @endif

        <form class="m-t" role="form" action="{{ route('admin.login.post') }}" method="post">

            {!! csrf_field() !!}

            <div class="form-group">
                <input name="username" type="text" class="form-control" placeholder="用户名" required="" value="{{ old('username') }}">
            </div>
            <div class="form-group">
                <input name="password" type="password" class="form-control" placeholder="密码" required="" value="{{ old('password') }}">
            </div>
            <button type="submit" class="btn btn-primary block full-width m-b">登 录</button>

            <p class="text-muted text-center">
                <a href="login.html#"><small>忘记密码了？</small></a>
                {{--| <a href="{{ route('getAdminRegister') }}">注册一个新账号</a>--}}
            </p>

        </form>
    </div>
</div>



<script src="{{ skin_path() }}js/jquery.min.js?v=2.1.4"></script>
<script src="{{ skin_path() }}js/bootstrap.min.js?v=3.4.0"></script>
<script>
    $(function(){
        $('input[name=username]').focus();
    });
</script>
</body>
</html>