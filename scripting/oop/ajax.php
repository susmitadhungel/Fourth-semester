<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <script>
        var request = new XMLHttpRequest();
        request.open("GET","http://localhost/scripting/oop/exception.php");
        request.send();

        request.onreadystatechange = function() {
            if(request.readyState == 4 ){
                if (request.status == 200 ){
                    alert(request.responseText);
                }else("Error:" + request.status);
            }
        }
    </script>

</body>
</html>c