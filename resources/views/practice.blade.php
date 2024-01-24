<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!--  Bootstrap corn CSS document -->
    <link href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<button class="btn btn-info">
    <a href="practice_add">Post internship information</a>
</button>

<table class="table table-hover">
    <tr>
        <th>ID</th>
        <th>employer</th>
        <th>type</th>
        <th>position</th>
        <th>brief introduction</th>
        <th>photos</th>
        <th>option</th>
    </tr>
    @foreach($data as $v)
        <tr>
            <td>{{$v['id']}}</td>
            <td>{{$v['employer']}}</td>
            <td>{{$v['type']}}</td>
            <td>{{$v['position']}}</td>
            <td>{{$v['desc']}}</td>
            <td>
                <img src="{{asset("").'/'.$v['img']}}" alt="" style="width: 100px">
            </td>

            <td>
                <button>
                    <a href="find?id={{$v['id']}}">change</a>
                </button>
            </td>
        </tr>

    @endforeach


</table>
</body>
</html>
<!-- jQuery.should use in bootstrap.min.js  -->
<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>

<!-- New Bootstrap corn JavaScript document -->
<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
