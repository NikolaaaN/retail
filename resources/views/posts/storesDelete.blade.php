<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method='POST' action="/storesDelete">
    @csrf
    @method('delete')
        <label for="code">Code:</label>
        <input type="text" id="code" name="code">
        <button>Delete</button>
     </form>
    
</body>
</html>