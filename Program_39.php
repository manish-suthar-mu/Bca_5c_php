<!DOCTYPE html>
<html>
<head>
    <title>Subtraction</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>

    <h2>Subtraction using Class Selector</h2>

    <input type="number" class="num" placeholder="Enter number 1">
    <input type="number" class="num" placeholder="Enter number 2">

    <button id="sub">Subtract</button>

    <p id="result"></p>

    <script>
        $("#sub").click(function() {
            var a = Number($(".num").eq(0).val());
            var b = Number($(".num").eq(1).val());

            $("#result").text("Result = " + (a - b));
        });
    </script>

</body>
</html>