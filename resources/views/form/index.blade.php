<!DOCTYPE html>
<head>

<!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->
</head>
<body>
<form action="" method="POST">
@csrf
    <button type="submit" name="action" value="save">Save</button>
    <button type="submit" name="action" value="view">Preview</button>
    <button type="submit" name="action" value="edit">Advanced edit</button>

</form>
</html>