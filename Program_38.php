<!DOCTYPE html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>

<input type="text" id="num1" value="10">
<input type="text" id="num2" value="5">

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