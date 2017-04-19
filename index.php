<?php
require_once('./Database.php');

$db = new Database();

$all = $db->Acquisition();

?>

<!DOCTYPE html>
<html lang = "ja">
    <head>
        <meta charset = "utf-8">
        <title>グラ速</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link href="assets/css/reset.css" type="text/css" rel="stylesheet">
        <!--index.cssのリンクタブ-->
        <link href="assets/css/index.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <!--ここからヘッダー-->
        <header>
            <div class = "container">
                <div class = "header-list selected"> <a href="index.php">トップページ</a> </div>
                <div class = "header-list"> <a>政治</a> </div>
                <div class = "header-list"> <a>小説</a> </div>
                <div class = "header-list"> <a>エンタメ</a> </div>
                <div class = "header-list"> <a>アニメ・漫画</a> </div>
                <div class = "header-list"> <a>ゲーム</a> </div>
                <div class = "header-list"> <a>IT</a> </div>
                <div class = "header-list"> <a>スポーツ</a> </div>
                <div class = "header-list"> <a>フレンズ</a> </div>
                <div class = "header-list"> <a>その他</a> </div>
            </div>
        </header>
        <!--ここからタイトル-->
        <div class = "top">
            <div class = "title-box">
                <p>Scientific Glasses 速報</p> 
            </div>
        </div>
        <!--ここからメイン-->
        <div class = "main">
            <div class = "article-container">
                <!--ここからメインボックス-->
                <div class = "main-box">
                    <!--記事ボックス-->
                    <div class = "article-box">
                    </div>
                </div>
                <!--ここから記事欄-->
                <div class = "articles">
                    <!--ここから記事バー-->
                    <div class = "article-bar">
                        <p>＜人気記事まとめ＞</p>
                    </div>
                    <!--ここから記事-->
                    <div class = "article-list">
                        <?php foreach($all as $one) { ?>
                        <div class = "article">
                            <div class = "article-title">
                                <a href="article.php?article_id=<?php echo $one[0]//ID ?>"><?php echo $one[2]//タイトル; ?></a>
                            </div>
                            <div class = "article-content">
                                <a href="article.php?article_id=<?php echo $one[0]//ID ?>"><?php echo $one[3]; // 内容?></a>
                            </div>
                            <div class = "genreImage">
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <!--ここから偽広告などなど-->
                <div class = "sideBar">
                    <div class = "tagFirst-box"> 
                        <div class = "tagFirst"> 
                            <p>＜PR＞</p> 
                        </div>
                        <div class = "fakeAdvertisement-first">
                        </div>
                    </div>
                    <div class = "tagSecond-box">
                        <div class = "tagSecond"> 
                            <p>＜PR＞</p> 
                        </div> 
                        <div class = "fakeAdvertisement-second"></div>
                    </div>
                    <div class = "profile-box">
                        <div class = "profile-bar"> 
                            <p>＜管理人＞</p> 
                        </div>
                        <div class = "profile"></div>
                    </div>
                </div>
                <!--ここから投稿ボタン-->
                <div class = "post-box">
                    <div class = "post-btn"> <a href="post.php">投稿ページへ</a> </div>
                </div>
            </div>
        </div>
        <!--ここからフッター-->
        <footer>
        </footer>
        <!--スクロールボタン-->
        <p id = "pageTop"><a href = "#"><i class = "fa fa-chevron-up"></i></a></p>
        <!--js読み込み-->
        <!--jQuery読み込み-->
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src = "assets/js/pagetop.js" type = "text/javascript"></script>
    </body>
</html>