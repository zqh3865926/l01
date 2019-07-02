<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')-这是一个搞笑的博客</title>
</head>
<body>
@section('sidebar')
    <p>this is a sidebar</p>
@show
<div class="content">
    @yield('content')
</div>
</body>
</html>