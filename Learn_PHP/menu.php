<?php

echo "Cookie Value : " . $_COOKIE["user"]."<br>";
// setcookie("user","", time() - 3600, "/");  //cookie deletion

echo '<a href="/default.asp">Home</a> -
<a href="/html/default.asp">HTML Tutorial</a> -
<a href="/css/default.asp">CSS Tutorial</a> -
<a href="/js/default.asp">JavaScript Tutorial</a> -
<a href="default.asp">PHP Tutorial</a>';
?>