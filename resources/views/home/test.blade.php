<!DOCTYPE html>
<html>
<head>
    <title>Test Page</title>
</head>
<body>

<h1>Test laravel</h1>


<a href=""{{route('home')}}">Ana Sayfa</a>
<form action ="/param" method ="get">
    <label for="fname">First name:</label><br>
    <input type="text" id="fname" name="fname"><br>
    <label for="lname">Last name:</label><br>
    <input type="text" id="lname" name="lname">
    <input type="submit">
</form>



</body>
</html>
