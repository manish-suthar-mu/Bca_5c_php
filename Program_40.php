<input value="6">
<input value="4">

<button>Multiply</button>

<p id="result"></p>

<script>
$("button").click(function() {
    var a = Number($("input").eq(0).val());
    var b = Number($("input").eq(1).val());

    $("#result").text("Result = " + (a * b));
});
</script>