<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<form role="form" method="post" action="update" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{$find->id}}">
    <div class="form-group">
        <label for="name">employer</label>
        <input type="text" class="form-control" id="employer" value="{{$find->employer}}" name="employer">
    </div>
    <div class="form-group">
        <label for="name">type</label>
        <input type="text" class="form-control" id="type" name="type" value="{{$find->type}}" >
    </div>
    <div class="form-group">
        <label for="name">position</label>
        <input type="text" class="form-control" id="position" name="position" value="{{$find->position}}" >
    </div>
    <div class="form-group">
        <label for="name">brief introduction</label>
        <input type="text" class="form-control" id="position" name="desc" value="{{$find->desc}}">
    </div>

    <div class="form-group">
        <label for="inputfile">photos</label>
        <input type="file" id="inputfile" name="file">
    </div>
    <button type="submit" class="btn btn-default">submit</button>
</form>







</body>
</html>
<!-- jQuery.should use in bootstrap.min.js  -->
<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>

<!-- New Bootstrap corn JavaScript document -->
<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
