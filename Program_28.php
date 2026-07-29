<?php

if(isset($_COOKIE["visitor"]))
{
    echo "<h2>Welcome Back!</h2>";
    echo "You are a Repeated User.";
}
else
{
    setcookie("visitor", "yes", time()+86400); // Cookie valid for 1 day

    echo "<h2>Welcome!</h2>";
    echo "You are a New User. Cookie has been created.";
}

?>