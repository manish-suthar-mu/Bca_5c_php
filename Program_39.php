<input type="text" class="num" value="20">
<input type="text" class="num" value="10">

<button class="sub">Subtract</button>

<p id="result"></p>

<script>
$(".sub").click(function() {
    var a = Number($(".num").eq(0).val());
    var b = Number($(".num").eq(1).val());

    $("#result").text("Result = " + (a - b));
});
</script>