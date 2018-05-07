<html>
<head>
<link rel="stylesheet" href="index.css">

</head>
        <body>
        <form method="get" action="">
            <h1>Caesar Text , Enter Text </h1>
            <div class="bloop" id="blooper">
                <input type="text" name="text">
            </div>
            <input type="submit" name="go" value="Go">
        </form>
        </body>
                <?php
                function encrypt($str, $offset) {
                    $encrypted_text = "";
                    $offset = $offset % 26;
                    if($offset < 0) {
                        $offset += 26;
                    }
                    $i = 0;
                    while($i < strlen($str)) {
                        $c = strtoupper($str{$i});
                        if(($c >= "A") && ($c <= 'Z')) {
                            if((ord($c) + $offset) > ord("Z")) {
                                $encrypted_text .= chr(ord($c) + $offset - 26);
                            } else {
                                $encrypted_text .= chr(ord($c) + $offset);
                            }
                        } else {
                            $encrypted_text .= " ";
                        }
                        $i++;
                    }
                    return $encrypted_text;
                }

//                function decrypt($str, $offset) {
//                    $decrypted_text = "";
//                    $offset = $offset % 26;
//                    if($offset < 0) {
//                        $offset += 26;
//                    }
//                    $i = 0;
//                    while($i < strlen($str)) {
//                        $c = strtoupper($str{$i});
//                        if(($c >= "A") && ($c <= 'Z')) {
//                            if((ord($c) - $offset) < ord("A")) {
//                                $decrypted_text .= chr(ord($c) - $offset + 26);
//                            } else {
//                                $decrypted_text .= chr(ord($c) - $offset);
//                            }
//                        } else {
//                            $decrypted_text .= " ";
//                        }
//                        $i++;
//                    }
//                    return $decrypted_text;
//                }


                if (isset($_GET['go']))
                    {
                        $text  = $_GET['text'] ;
                        $offset = 3 ;
                        $new_text = encrypt($text , $offset) ;
                        echo "The new Text is : " ; 
                        echo "<br>" ;
                        echo $new_text ;
                    }

                ?>
</html>