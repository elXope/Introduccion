<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password</title>
</head>
<body>
    <?php
        function rand_Pass ($upper = 1, $lower = 5, $numeric = 3, $other = 2) {
            $password = "";
            for ($i=0; $i < $upper; $i++) { 
                $password .= chr(rand(65, 90));
            }
            for ($i=0; $i < $lower; $i++) { 
                $password .= chr(rand(97, 122));
            }
            for ($i=0; $i < $numeric; $i++) { 
                $password .= chr(rand(48, 57));
            }

            $otherStr = "";
            for ($i=32; $i < 48; $i++) { 
                $otherStr .= chr($i);
            }
            for ($i=58; $i < 65; $i++) { 
                $otherStr .= chr($i);
            }
            for ($i=91; $i < 97; $i++) { 
                $otherStr .= chr($i);
            }
            for ($i=123; $i < 126; $i++) { 
                $otherStr .= chr($i);
            }

            for ($i=0; $i < $other; $i++) { 
                $password .= $otherStr[rand(0, strlen($otherStr) - 1)];
            }

            return str_shuffle($password);
        }

        echo rand_Pass();
    ?>
</body>
</html>