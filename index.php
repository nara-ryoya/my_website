<!DOCTYPE html>
<?php require_once('data.php') ?>
<html>
    <head>
        <title>Ryoya Naraのポートフォリオ</title>
        <link rel = "stylesheet" href = "css/stylesheet.css">
    </head>
    <body>
        <header></header>
        <div class = "top_wrapper">
            <div class = "title_container">
                <div class = "title">
                    <h1>Ryoya NaraのWebsite</h1>
                    <p>HTML, CSS, PHP等の練習用サイトです</p>
                </div>
            </div>
            <div class = "profile_container">
                <h2>経歴</h2>
                <ul>
                    <li>2013年　市立谷戸第二小学校　卒業</li>
                    <li>2016年　私立開成中学　卒業</li>
                    <li>2019年　私立開成高校　卒業</li>
                    <li>同年　東京大学理科一類　入学</li>
                    <li>2021年現在　東京大学工学部電子情報工学科　在学</li>
                </ul>
                <h2>プログラミング職歴</h2>
                <ul>
                    <li>株式会社ナガセ AI研究員</li>
                    <ul>
                        <li>アンサンブル学習による模試の得点率の伸びの向上率分析</li>
                        <li>マーケティング分析による適正講座価格の算出</li>
                    </ul>
                </ul>
                <h2>好きなこと・趣味</h2>
                <p>中高でバドミントンを部活でやっていました。大学からマジックのサークルに入り、のんびり楽しんでいます。
                    他には、ボウリング・散歩・Youtube鑑賞が好きです。</p>
                <h2>写真</h2>
                <div class='photos-container'>
                    <?php foreach ($images as $image):?>
                        <div class='photo-container'>
                            <a href="photo_show.php?img_path=<?php echo $image->getImg()?>">
                                <img src=<?php echo $image->getImg()?>>
                            </a>
                            <h3><?php echo $image->getDates()?></h3>
                            <p><?php echo $image->getCaption()?></p>
                        </div>
                    <?php endforeach?>
                </div>
                </ul>
            </div>
        </div>
    </body>
</html>