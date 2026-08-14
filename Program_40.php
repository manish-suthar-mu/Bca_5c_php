<!DOCTYPE html>
<html>
<head>
    <title>Multiplication</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>

    <h2>Multiplication using Element Selector</h2>

    <input type="number" placeholder="Enter number 1">
    <input type="number" placeholder="Enter number 2">

    <button id="multiply">Multiply</button>

    <p id="result"></p>

    <script>
        $("#multiply").click(function() {
            var a = Number($("input").eq(0).val());
            var b = Number($("input").eq(1).val());

            $("#result").text("Result = " + (a * b));
        });
    </script>

</body>
</html>