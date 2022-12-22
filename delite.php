<?php
    if (isset($_GET['id']))
    {
        
        $id = $_GET['id'];
        $xml = simplexml_load_file("data.xml");

        $i = 0;
        foreach($xml->user_friend as $friend)
        { if  ($friend['id'] == $id)
            {
                unset($xml->user_friend[$i]);
                break;
            }
            $i++;
        }

        $xml->saveXML("data.xml");
        echo "<script>alert('Успешно удалено!');
        location.href = 'index.php';
        </script>";
    }
?>