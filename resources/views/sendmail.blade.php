<!DOCTYPE html>
<html>
<head>
    <title>Laravel Mail</title>
</head>
<body>
    <p>{{ $maildata['body'] }}</p>

    <a href="{{route('login')}}"class="btn btn-success">Login</a>
    
    <p>{{ $maildata['thanks'] }}</p>
</body>
</html>