<!DOCTYPE html>
<html>
<head>
    <title>Addition</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>

    <h2>Addition using ID Selector</h2>

    <input type="number" id="num1" placeholder="Enter number 1">
    <input type="number" id="num2" placeholder="Enter number 2">

    <button id="add">Add</button>

    <p id="result"></p>

    <script>
        $("#add").click(function() {
            var a = Number($("#num1").val());
            var b = Number($("#num2").val());

            $("#result").text("Result = " + (a + b));
        });
    </script>

</body>
</html>