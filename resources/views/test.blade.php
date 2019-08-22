<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/download" method="post" enctype="multipart/form-data">
    @csrf

    <input type="text" name="token">
    <input type="text" name="secret">
    <input type="file" name="file">

    <select name="function">
        <option value="public">public</option>
        <option value="private">private</option>
    </select>
    <input type="submit">
    </form>
</body>
</html>