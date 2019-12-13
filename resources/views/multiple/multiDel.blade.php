<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
<script>
    var r = confirm("Confirm to delete !!!");
    if (r == true) {
        window.location.assign('http://localhost:8000/admin/multiple/delete/{{$idd->id}}');
    } else {
        window.location.assign('http://localhost:8000/admin/multiple');
    }
</script>
</html>
