<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div id="demo">
        <h1>Hello Manish</h1>
        <button onclick="changeText()">Click Me</button>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/4.0.0/jquery.min.js"></script>
   <script> 
        function changeText() {
            $("#demo").html("<h1>Hello World</h1>");
        }
   </script>
    
</body>
</html>