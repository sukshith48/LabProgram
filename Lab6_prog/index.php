<html>
<head>
    <title>Program 6</title>
</head>
<body>
    <h1>Welcome to my webpages</h1>
    <?php
        $handle = fopen("Count.txt","r");
        $count =fread($handle,2);
        fclose($handle);
        $count = intval($count);
        $count+=1;
        echo "<h2>Number of times web page is visited is $count</h2>";
        $handle1 = fopen("Count.txt","w",2);
        fwrite($handle1,$count);
        fclose($handle1);
    ?>
</body>
</html>
