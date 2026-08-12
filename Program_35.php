<!DOCTYPE html>
<html>
<head>
    <title>jQuery Selectors</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>

<h2>Heading</h2>
<p>Paragraph 1</p>
<p>Paragraph 2</p>
<button>Click Me</button>

<script>
$("h2, p, button").css("background-color", "red");
</script>

</body>
</html>