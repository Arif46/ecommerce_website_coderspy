<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Applicant Form</title>
</head>
<body>
    <div style="text-align: center">
        <img src="{{asset('/')}}{{$logo}}" alt="">
        <h2>Site Name: {{$siteName}}</h2>
        <h4>Name: {{$siteName}}</h4>
        <h5>Email: {{$siteEmail}}</h5>

        <a class="btn btn-Primary" href="{{url('public')}}/{{$file}}">View File</a>
    </div>
</body>
</html>
