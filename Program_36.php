<!DOCTYPE html>
<html>
<head>
    <title>Scroll Top</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <style>
        body {
            height: 1200px;
        }
    </style>
</head>
<body>

<h2>My Web Page</h2>

<button id="top">Go to Top</button>

<script>
$("#top").click(function() {
    $("html, body").animate({
        scrollTop: 0
    }, 1000);
});
</script>

</body>
</html>