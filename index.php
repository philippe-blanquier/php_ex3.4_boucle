<!DOCTYPE html>
<html lang='fr'>
	<head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>PHP ex 3.4 boucle</title>
    </head>
    <body >
        <p>
            <?php
            $v1=1.0;
            while ($v1 <= 10)
            {
               echo nl2br( $v1."\n");
               $v1+= $v1/2; 
            }
            ?>
       </p>
    </body>
</html>