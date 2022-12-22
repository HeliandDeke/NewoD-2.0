<?php
        if ($_SERVER['REQUEST_METHOD'] === 'GET')
        {
            $xml = simplexml_load_file("data.xml");
            $id = $_GET['id'];

            foreach($xml->user_friend as $frnd)
            { if ($frnd['id'] == $id)
                {
                    $name = $frnd->name;
                    $avatar = $frnd->avatar;
                    $status = $frnd->status;
                    break;
                }
            }
        } else if ($_SERVER['REQUEST_METHOD']==='POST')
        {

            $xml = simplexml_load_file("data.xml");
            $id = $_GET['id'];
            foreach($xml->user_friend as $frnd)
        
            {
            if ($frnd['id'] == $id){
                $frnd->name = $_POST['namefr'];
                $frnd->avatar = $_POST['avatarfr'];
                $frnd->status = $_POST['statusfr'];
                break;
            }
        }

            $xml->saveXML("data.xml");

            echo "<script>alert('Успешно обновлено!');location.href='index.php'</script>";
        }

        //echo "<script>alert('Успешно дабавлена кника в список наш!')</script>";
        //echo "<script>location.href='index.php'</script>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<hr>
    <body>
    <div class="friends">
    <div class = "friend img_hover">
        <img class="img_small" src="<?php echo $frnd->avatar ?>" alt="">
        <div class="name"><?php echo $frnd->name?></div>
        <a href="delite.php?id=<?php echo $frnd['id']?>">Удалить</a>
    </div>
</div>
    
    <hr>
        <form action="" method="POST">
            <input type="text" name="avatarfr" value=<?php echo $avatar?>>
            <br>
            <input type="text" name="namefr" value=<?php echo $name?>>
            <br>
            <input type="text" name="statusfr" value=<?php echo $status?>>
            <br>
            <button type="submit" name="submit">Обновить друга</button>
        </form>
        
        <a href="friends.php">назад</a>
    </body>
</html>