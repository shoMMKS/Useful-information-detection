<?php
require_once('./Database.php');
require_once('./databaseComment.php');
$dbc = new DatabaseComment();
$db = new Database();
$allc = $dbc->Acquisition();
$all = $db->Acquisition();
$article_id = $_GET['article_id'];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>glasoku</title>
        <!-- jQuery -->
        <link href="assets/css/reset.css" type="text/css" rel="stylesheet">
        <link href="assets/css/index.css" type="text/css" rel="stylesheet">
        <link href="assets/css/article.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    </head>
    <body>
        <!--ここからヘッダー-->
        <header>
            <div class=container>
                <div class=header-list>
                    <a href="index.php">トップページ</a>
                </div>
                <div class=header-list>
                    <a>じゃんる</a>
                </div>
                <div class=header-list>
                    <a>ニュース</a>
                </div>
                <div class=header-list>
                    <a>おもしろ画像</a>
                </div>
                <div class=header-list>
                    <a>動画</a>
                </div>
                <div class=header-list>
                    <a>アニメ</a>
                </div>
                <div class=header-list>
                    <a>萌え</a>
                </div>
                <div class=header-list>
                    <a>政治・経済</a>
                </div>
                <div class=header-list>
                    <a href="http://kemono-friends.jp">ふれんず</a>
                </div>
                <div class=header-list>
                    <a>アダルト</a>
                </div>
            </div>
        </header>
        <!--ここからページタイトル-->
        <div class=header-title>
            <p>Scientific Glasses 速報</p>
        </div>
        <diV class=sidebar>
            <div class=sidebar-left>
                <div class=sidebar-box>
                </div>
            </div>
            <div class=sidebar-right>
                <div class=sidebar-box>
                </div>
            </div>
        </diV>
        <!--ここから偽広告-->
        <div class=design>
            <div class=side-tagFirst>
                <p>＜PR＞</p>
            </div>
            <div class=side-tagSecond>
                <p>＜PR＞</p>
            </div>
            <div class=fakeAdvertisement>
                <div class=fakeAdvertisement-first>
                </div>
                <div class=fakeAdvertisement-second>
                </div>
            </div>
        </div>
        <!--ここから管理者プロフィール-->
        <div class=producerProfile>
            <div class=producerProfile-bar>
                <p>管理人</p>
            </div>
            <div class=producerProfile-container>
            </div>
        </div>
        <?php foreach($all as $one) { 
        if ($one[0] == $_GET['article_id']) { ?>
        <!--ここから記事欄-->
        <div class=articles>
            <div class=containerArea>
                 <div class=title-box>
                    <p>
                        <?php echo $one[2]; // 記事タイトル ?>
                     </p>
                 </div>
                 <div class=article-box>
                    <p>
                        <?php echo $one[3]; // 記事内容 ?>
                    </p>
                 </div>
                <form action="" method="post">
                    <input type="submit" name="send" value="いいね">
                </form>
            </div>
        </div>
        <?php } }?>
        <!--ここからコメント-->
        <?php foreach($allc as $one) { 
            if ($one[1] == $_GET['article_id']) { ?>
            <div class=comments>
                <div class=comment-list>
                    <div class=content-box>
                        <p>
                        <?php echo $one[3]; // コメント内容 ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php } }?>
        <!--ここからコメント投稿-->
        <form action="addComment.php?article_id=<?php echo $article_id ?>" method="post">
            <div class=post>
                <div class=post-logo>
                    <p>コメント投稿</p>
                </div>
                <div class=post-article>
                    <p>コメント</p>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method ="post">
                        <textarea name="comment" rows="4"cols="40" placeholder="ここにコメントをお書きください"></textarea>
                        <input type="submit" name="send" href="article.php" value="投稿">
                    </form>
                </div>
            </div>
        </form>
        <!--ここからフッター-->
        <footer>
        </footer>
        <p id="pageTop"><a href="#"><i class="fa fa-chevron-up"></i></a></p>
        <!--js読み込み-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="assets/js/pagetop.js" type="text/javascript"></script>
    </body>
</html>