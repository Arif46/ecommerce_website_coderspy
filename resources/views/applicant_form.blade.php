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
        <h3>Position: {{$position}}</h3>
        <h4>Name: {{$name}}</h4>
        <h5>Email: {{$email}}</h5>
        <h4>Area Of Interest: {{$area_of_interest}}</h4>
        <p>{{$cover_letter}}</p>

        <a class="btn btn-Primary" href="{{asset('/')}}{{$resume}}">View Resume</a>
    </div>
</body>
</html>
