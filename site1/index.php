<!DOCTYPE html>
<html>
<head>
<title>Welcome to CYRUSTY nginx on Debian!</title>
<style>
    body {
	background-image: url("http://blog.moltenstore.com/wp-content/uploads/2016/02/jpX5JMB.jpg");
        width: 35em;
        margin: 0 auto;
        font-family: Tahoma, Verdana, Arial, sans-serif;
    }
</style>
</head>
<body>
<h1>Welcome to nginx on Debian Cyrustys site 1!!</h1>
<?php
echo "Your IP address is <strong>" . $_SERVER ['REMOTE_ADDR'] . "</strong>";

echo "<br>";

echo "<p>" . " Today is " . date("l d/m/Y") . "<span style='color:yellow;'>" . date(" h:i:sa") . "</span style='color:yellow;'>";
"</p>" ?>

<p style="color:maroon;"> yo yo yo this is another test edit using the W3school tutorials I'm working on
check this link out <a href="http://www.organicdesign.co.nz"> OD </a>  </p> 

<?php
echo "<h2>PHP wtf PHP arrrrghhhh</h2>";

$txt = "<a href='https://www.organicdesign.co.nz/User:Cyrusty'>this link</a>";
$x = "NARAN";
echo "I post my latest lessons to $txt " . "$x $x $x $x $x $x $x $x $x $x $x $x $x $x $x "
 . "<strong>how do I get a complete word count of my NARANS without typing all of them in...</strong>";

echo "<br>";
echo str_word_count("NARAN");
?>

<!-- a comment for naran naran if he ever reads it -->
<p>
     Goodmorning, good afternoon and goodnight </p>

<p><em>Thank you for using debian and nginx AND REMOVING WINDOWS piece of shiat.</em></p>


</body>
</html>
