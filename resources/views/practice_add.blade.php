<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<form role="form" method="post" action="adds" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">employer</label>
        <input type="text" class="form-control" id="employer" placeholder="Please enter employer name" name="employer">
    </div>
    <div class="form-group">
        <label for="name">type</label>
        <input type="text" class="form-control" id="type" name="type" placeholder="Please enter the category name">
    </div>
    <div class="form-group">
        <label for="name">position</label>
        <input type="text" class="form-control" id="position" name="position" placeholder="Please enter job position">
    </div>
    <div class="form-group">
        <label for="name">brief introduction</label>
        <input type="text" class="form-control" id="position" name="desc" placeholder="Please enter job description">
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
