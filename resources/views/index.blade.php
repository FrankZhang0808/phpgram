<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recruitment page</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        nav {
            background-color: #3498db;
            color: white;
            padding: 15px;
            text-align: center;
            display: flex;
            justify-content: center; /* 将导航链接居中显示 */
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-size: 16px;
        }

        .login-button {
            background-color: #e74c3c;
            color: white;
            padding: 10px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            font-size: 14px;
            margin-left: auto;
        }

        .search-container {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            background-color: #ecf0f1;
        }

        .search-box {
            flex: 1;
            margin-right: 10px;
            padding: 10px;
            border: 1px solid #bdc3c7;
            border-radius: 5px;
            font-size: 14px;
        }

        .search-box input{
           width: 800px;
            height: 30px;
        }

        .search-dropdown {
            flex: 1;
            margin-right: 10px;
            padding: 10px;
            border: 1px solid #bdc3c7;
            border-radius: 5px;
            font-size: 14px;
            position: relative;
        }

        .search-dropdown select {
            width: 100%;
            padding: 8px;
            font-size: 14px;
        }

        .search-button {
            background-color: #3498db;
            color: white;
            padding: 10px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            font-size: 14px;
        }

        .job-container {
            display: flex;
            justify-content: space-between;
            margin: 20px;
            background-color: white;
            border: 1px solid #ecf0f1;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .job-image {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 5px;
            margin-left: 20px;
        }

        .job-details {
            flex: 1;
            padding: 20px;
        }

        .job-title {
            font-size: 20px;
            color: #333;
            margin-bottom: 10px;
        }

        .job-description {
            color: #666;
            margin-bottom: 15px;
        }

        .job-apply-button {
            background-color: #27ae60;
            color: white;
            padding: 10px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            font-size: 14px;
        }

    </style>
</head>
<body>

<nav>
    <div>
        <a href="#">Business</a>
        <a href="#">Accountant</a>
        <a href="#">IT</a>
    </div>
    <button class="login-button" >
        <a href="logina">Login</a>
    </button>
</nav>
<form action="" method="get">
<div class="search-container">
    <div class="search-box">
        <input type="text" placeholder="Enter employer name" name="employer">
    </div>
    <div class="search-dropdown" >
        <select name="type">
            <option value=""></option>
            <option value="business">Business</option>
            <option value="accountant">Accountant</option>
            <option value="information">IT</option>
        </select>
    </div>
{{--    <div class="search-box">--}}
{{--        <input type="text" placeholder="">--}}
{{--    </div>--}}
    <button class="search-button" type="submit">Search</button>
</div>
</form>
@foreach($data as $value)
<div class="job-container">
    <div class="job-details">
        <div class="job-title">{{$value['position']}}</div>
        <div class="job-description">{{$value['desc']}}</div>
        <div class="job-description">{{$value['employer']}}</div>
        <button class="job-apply-button">Apply it!</button>
    </div>
    <img class="job-image" src="{{asset("").'/'.$value['img']}}" alt="Job Image">
</div>


@endforeach





</body>
</html>
