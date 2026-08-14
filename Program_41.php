<input id="a" value="20">
<input id="b" value="5">

<button id="calc">Calculate</button>

<p id="result"></p>

<script>
$("#calc").click(function() {
    var a = Number($("#a").val());
    var b = Number($("#b").val());

    
    $("#result").html(
        "Addition = " + (a + b) + "<br>" +
        "Subtraction = " + (a - b) + "<br>" +
        "Multiplication = " + (a * b) + "<br>" +
        "Division = " + (a / b)
    );
});
</script>