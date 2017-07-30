#!/usr/bin/php
<?php
    $fd = fopen("php://stdin", "r");
    while (true) {
        echo "Enter a number: ";
        $line = fgets($fd);
        if (!$line) {
            echo "\n";
            exit();
        }
        $line = trim($line);
        if (!is_numeric($line)) {
            echo "'$line' is not a number\n";
        }
        else {
            $nb = intval($line);
            if ($nb % 2 == 0)
                echo "The number $nb is even\n";
            else
								echo "The number $nb is odd\n";
        }
    }
?>
