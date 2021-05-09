<!DOCTYPE html>
<head><title>Md Shohanoor Rahman MD5 Password Cracker</title></head>
<body>
<h1>MD5 cracker</h1>
<p>This application takes an MD5 hash of a four digit PIN string and attempts to hash all four-digit combinations 
to determine the original four digits.</p>
<pre>
Debug Output:
<?php
$goodtext = "Not found";
// If there is no parameter, this code is all skipped
if ( isset($_GET['md5']) ) {
    $time_pre = microtime(true);
    $md5 = $_GET['md5'];

    // This is my numbers
    $txt = "1234597890"; //String for iterating four digit pin
    $show = 15;

    // Outer loop go go through the alphabet for the
    // first position in our "possible" pre-hash
    // text
    for($i=0; $i<strlen($txt); $i++ ) {
        $ch1 = $txt[$i];   // The first of four numbers
        // Our inner loop for the second of four numbers
        // $j and $ch2 
        for($j=0; $j<strlen($txt); $j++ ) {
            $ch2 = $txt[$j];  // Our second number
            for($a=0; $a<strlen($txt); $a++ ) {
                $ch3 = $txt[$a]; // Our third number
                for($b=0; $b<strlen($txt); $b++ ) {
                    $ch4 = $txt[$b]; // Our fourth number
                    $try = $ch1.$ch2.$ch3.$ch4;
            // Concatenating the two characters together
            // forming the "possible" pre-hash text

            // Running the hash to check matching
$check = hash('md5', $try); //$try comes from,$ch1..$ch4; $ch1..$ch4 comes from $txt which is a string
if ( $check == $md5 ) {
    $goodtext = $try;
    
    break;   // Exit the inner loop
}
// Debug output until $show hits 0
if ( $show > 0 ) {
    print "$check $try\n";
    $show = $show - 1;
} 
            
                }
            }
        }
    }
    // Compute elapsed time
    $time_post = microtime(true);
    print "Elapsed time: ";
    print $time_post-$time_pre;
    print "\n";
}
?>
</pre>
<!-- Use of very short syntax and call htmlentities() -->
<p>PIN: <?= htmlentities($goodtext); ?></p>
<form>
<input type="text" name="md5" size="60" />
<input type="submit" value="Crack MD5"/>
</form>
<ul>
<li><a href="index.php">Reset</a></li>
<li><a href="md5.php">MD5 Encoder</a></li>
<li><a href="makecode.php">MD5 Code Maker</a></li>
<li><a
href="https://github.com/csev/wa4e/tree/master/code/crack"
target="_blank">Source code for this application</a></li>
</ul>
</body>
</html>

