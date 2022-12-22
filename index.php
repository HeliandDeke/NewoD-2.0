<?php

$xml = simplexml_load_file("data.xml");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <title>Невод</title>
</head>
<body>
    <header class="header">
        <div class="line_up">
            <div class="header_logo">
                <img class="logo" src="img\NeWoD.png" alt="">
            </div>
            <div class="header_settings">
                <div>Настройки</div>
            </div>
        </div>
        

    </header>
    
    <main class="main container">
        <div class="main_list">
            <ul class="list_items">
                <li class="list_item button">
                    <!--<a href="#">Профиль</a>-->
                    Профиль
                </li> 
                <li class="list_item button">Новости</li>
                <li class="list_item button">Сообщения</li>
                <li class="list_item button"><a href="friends.php">Друзья</a></li>
                <li class="list_item button">Сообщества</li>
                <li class="list_item button">Фотографии</li>
                <li class="list_item button">Музыка</li>
                <li class="list_item button">Видео</li>
            </ul>
        </div>
        <div class = "right">
        <div class = "user_line">
            
            <div class = "nameofpage"><?php echo $xml->user_admin->name?></div>
            <div class = "online_status"><?php echo $xml->user_admin->status?></div>

            </div>
            <div class="main_page">
                <section class="leftside">
                    <div class = "avatar">
                        <img class = "img_big" src="<?php echo $xml->user_admin->avatar?>" alt="">                
                        <div class="actions">
                            <div class="action button">Написать сообщение</div>
                            <div class="action button">Добавить в друзья</div>
                        </div>
                        <div class = "subs">Количество побписчиков: <?php echo $xml->user_admin->subs?></div>
                    </div>
                    <div class="all_friends vision_pc">
                        <div class="friends_main">
                            <div class="friends_amount">
                                Друзья
                            </div>
                            <div class="friends">
                            <?php
                                $i=0;
                                foreach($xml->user_friend as $user)
                                {   
                                    if ($user->status == "offline" && $i<4)
                                    {
                                        ?>
                                            <a href="update.php?id=<?php echo $user['id']?>" class = "friend img_hover">
                                                <img class="img_small" src="<?php echo $user->avatar ?>" alt="">
                                                <div class="name"><?php echo $user->name?></div>
                                            </a>
                                        <?php
                                        $i += 1;
                                    }
                                    
                                } ?>
                            </div>
                        </div>
                        <div class="friends_main">
                            <div class="friends_amount">
                                Друзья онлайн
                            </div>
                            <div class="friends">
                            <?php
                                $i=0;
                                foreach($xml->user_friend as $user)
                                {   
                                    if ($user->status == "online" && $i<4)
                                    {
                                        ?>
                                            <a href="update.php?id=<?php echo $user['id']?>" class = "friend img_hover">
                                                <img class="img_small" src="<?php echo $user->avatar ?>" alt="">
                                                <div class="name"><?php echo $user->name?></div>
                                            </a>
                                        <?php
                                        $i += 1;
                                    }
                                    
                                } ?>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="rightside">
                    <div class = "status_lable">Статус</div>
                    <div class="info">
                        <div class="inf">
                            <div class="inf1">
                                Город:
                            </div>
                            <div class="inf2">
                                <?php echo $xml->user_admin->city?>
                            </div>
                        </div>
                        <div class="inf">
                            <div class="inf1">
                                Дата рождения:
                            </div>
                            <div class="inf2">
                                <?php echo $xml->user_admin->birthday?>
                            </div>
                        </div>
                        <div class="inf">
                            <div class="inf1">
                                Семейное положение:
                            </div>
                            <div class="inf2">
                                <?php echo $xml->user_admin->family_status?>
                            </div>
                        </div>

                        <div class="inf3 text_hover">
                            Показать подробную информацию
                        </div>
                    </div>

                    <div class="all_friends vision_telefon">
                    <div class="friends_main">
                            <div class="friends_amount">
                                Друзья
                            </div>
                            <div class="friends">
                            <?php
                                $i=0;
                                foreach($xml->user_friend as $user)
                                {   
                                    if ($user->status == "offline" && $i<6)
                                    {
                                        ?>
                                            <a href="update.php?id=<?php echo $user['id']?>" class = "friend img_hover">
                                                <img class="img_small" src="<?php echo $user->avatar ?>" alt="">
                                                <div class="name"><?php echo $user->name?></div>
                                            </a>
                                        <?php
                                        $i += 1;
                                    }
                                    
                                } ?>
                            </div>
                        </div>
                        <div class="friends_main">
                            <div class="friends_amount">
                                Друзья онлайн
                            </div>
                            <div class="friends">
                            <?php
                                $i=0;
                                foreach($xml->user_friend as $user)
                                {   
                                    if ($user->status == "online" && $i<6)
                                    {
                                        ?>
                                            <a href="update.php?id=<?php echo $user['id']?>" class = "friend img_hover">
                                                <img class="img_small" src="<?php echo $user->avatar ?>" alt="">
                                                <div class="name"><?php echo $user->name?></div>
                                            </a>
                                        <?php
                                        $i += 1;
                                    }
                                    
                                } ?>
                            </div>
                        </div>
                    </div>

                    <div class="photos_main">
                        <div class="photos_amount text_hover">
                            Фотографии
                        </div>
                        <ul class = "photos">
                        <?php
                                $i=0;
                                foreach($xml->photos as $photo)
                                {   
                                    if ($i<3)
                                    {
                                        ?>
                                            <li class="photo">
                                                <img class="img_small_ph" src="<?php echo $photo->img ?>" alt="" title="<?php echo $photo->title?>">
                                            </li>
                                        <?php
                                        $i += 1;
                                    }
                                    
                                } ?>
                        </ul>
                    </div>

                    <div class="records_main">
                        <div class="records_amount">
                            <div class="record_amount"> Все записи: 4 </div>
                            <div class="search">
                                <input class = "inp" placeholder="искать запись">
                                <div class="srch_btn button">Поиск</div>
                        </div>
                        </div>
                        
                            <div class="records">
                            <?php
                                $i=0;
                                foreach($xml->post as $record)
                                {   
                                    if ($i<5)
                                    {
                                        ?>
                                            <div class="record">
                                                <div class="record_left">
                                                    <img class="img_small" src="<?php echo $xml->user_admin->avatar?>" alt="">
                                                </div>
                                                <div class="record_right">
                                                    <div class="record_name">
                                                        <?php echo $record->title?>
                                                    </div>
                                                    <div class="record_post">
                                                    <ul class="list_items" wight="100%">

                                                        <?php
                                                            $inf = $record->img;
                                                            if ($inf!="")
                                                            {
                                                                ?>
                                                                    <li>
                                                                        <img class="img_small_ph" src="<?php echo $record->img?>" alt="">
                                                                    </li>
                                                                <?php
                                                            }
                                                        ?>

                                                        <?php
                                                        $inf = $record->video;
                                                        if ($inf!="")
                                                        {
                                                            ?>
                                                                <li>
                                                                    <video class="videwo" controls="controls"><source src="<?php echo $record->video?>"></video>
                                                                </li>
                                                            <?php
                                                        }
                                                        ?>

                                                        

                                                        <?php
                                                        $inf = $record->text;
                                                        if ($inf!="")
                                                        {
                                                            ?>
                                                                <li>
                                                                    <p class="post_text"><?php echo $record->text?></p>
                                                                </li>
                                                            <?php
                                                        }
                                                        ?>
                                                    
                                                    </ul>
                                                        
                                                        
                                                    </div>
                                                
                                                </div>
                                </div>
                                        <?php
                                        $i += 1;
                                    }
                                    
                                } ?>
                                
                            </div>
                        </div>

                    </div>
                </section>
            </div>
        </div>
    </main>
</body>
</html>