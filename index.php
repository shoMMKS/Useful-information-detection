<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>glasoku</title>
        <link href="reset.css" type="text/css" rel="stylesheet">
        <link href="scrol.js" type="text/javascript" rel="stylesheet">
        <link href="stylesheet.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link href="jquery.js" type="text/js" rel="stylesheet">
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    </head>
    <body>
        <header>
            <div class=container>
                <div class=header-list>
                    <a href="index.html">トップページ</a>
                </div>
                <div class=header-list>
                    <a>じゃんる</a>
                </div>
                <div class=header-list>
                    <a>interesting</a>
                </div>
                <div class=header-list>
                    <a>mod</a>
                </div>
                <div class=header-list>
                    <a>2チャンネル</a>
                </div>
            </div>
        </header>
        <div class=header-title>
            <p>タイトル</p>
        </div>
        <div class=articles>
            <div class=article>
                <div class=text-box>
                    <div class=janleImage>
                    </div>
                    <div class=article-title>
                        <a href="indexSub.html">タイトル</a>
                    </div>
                    <div class=article-wrap>
                        <a href="indexSub.html">ここに記事を...</a>
                    </div>
                    <span class="good btn">いいね</span>
                </div>
            </div>
            <div class=article>
                <div class=text-box>
                    <div class=janleImage>
                    </div>
                    <div class=article-title>
                        <a href="indexSub.html">タイトル</a>
                    </div>
                    <div class=article-wrap>
                        <a href="indexSub.html">ここに記事を...</a>
                    </div>
                    <span class="good btn">いいね</span>
                </div>
            </div>
            <div class=article>
                <div class=text-box>
                    <div class=janleImage>
                    </div>
                    <div class=article-title>
                        <a href="indexSub.html">タイトル</a>
                    </div>
                    <div class=article-wrap>
                        <a href="indexSub.html">ここに記事を...</a>
                    </div>
                    <span class="good btn">いいね</span>
                </div>
            </div>
            <div class=article>
                <div class=text-box>
                    <div class=janleImage>
                    </div>
                    <div class=article-title>
                        <a href="indexSub.html">タイトル</a>
                    </div>
                    <div class=article-wrap>
                        <a href="indexSub.html">ここに記事を...</a>
                    </div>
                    <span class="good btn">いいね</span>
                </div>
            </div>
            <div class=article>
                <div class=text-box>
                    <div class=janleImage>
                    </div>
                    <div class=article-title>
                        <a href="indexSub.html">タイトル</a>
                    </div>
                    <div class=article-wrap>
                        <a href="indexSub.html">ここに記事を...</a>
                    </div>
                    <span class="good btn">いいね</span>
                </div>
            </div>
            <div class=article>
                <div class=text-box>
                    <div class=janleImage>
                    </div>
                    <div class=article-title>
                        <a href="indexSub.html">タイトル</a>
                    </div>
                    <div class=article-wrap>
                        <a href="indexSub.html">ここに記事を...</a>
                    </div>
                    <span class="good btn">いいね</span>
                </div>
            </div>
            <div class=article>
                <div class=text-box>
                    <div class=janleImage>
                    </div>
                    <div class=article-title>
                        <a href="indexSub.html">タイトル</a>
                    </div>
                    <div class=article-wrap>
                        <a href="indexSub.html">ここに記事を...</a>
                    </div>
                    <span class="good btn">いいね</span>
                </div>
            </div>
            <div class=article>
                <div class=text-box>
                    <div class=janleImage>
                    </div>
                    <div class=article-title>
                        <a href="indexSub.html">タイトル</a>
                    </div>
                    <div class=article-wrap>
                        <a href="indexSub.html">ここに記事を...</a>
                    </div>
                    <span class="good btn">いいね</span>
                </div>
            </div>
            <div class=article>
                <div class=text-box>
                    <div class=janleImage>
                    </div>
                    <div class=article-title>
                        <a href="indexSub.html">タイトル</a>
                    </div>
                    <div class=article-wrap>
                        <a href="indexSub.html">ここに記事を...</a>
                    </div>
                    <a href="indexSub.html">ここ</a>
                    <span class="good btn">いいね</span>
                </div>
            </div>
            <div class=article>
                <div class=text-box>
                    <div class=janleImage>
                    </div>
                    <div class=article-title>
                        <a href="indexSub.html">タイトル</a>
                    </div>
                    <div class=article-wrap>
                        <a href="indexSub.html">ここに記事を...</a>
                    </div>
                    <span class="good btn">いいね</span>
                </div>
            </div>
        </div>
        <div class=fakeAdvertisement>
       </div>
       <?php
            /*  ----初期化_開始----- 
		    // 連想配列($array)
		    $array = array(
			"title" => ["合宿所で!?カメムシ大量発生!!", "男は辛いよ"],
			"contents" => ["合宿所でカメムシが大量発生する事件が起きました。皆様電球の穴には気をつけて下さい!", "はい。そのまんま。男は辛いよ!"]
		    );
		    // 連想配列($array)をJSONに変換(エンコード)する
		    $json = json_encode( $array , JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE| JSON_UNESCAPED_SLASHES ) ;
		    file_put_contents("data.json" , $json);
		     -----初期化_終了----- */
            // JSONファイルのURL
		    $jsonUrl = "data.json";
		    // JSONファイルの中身を取得
		    $json = file_get_contents($jsonUrl);
		    // JSON($json)を連想配列に変換(デコード)する
		    $json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
		    $array = json_decode( $json , true ) ;
       ?>
       	<form action="indexSub.php" method="post">
            <div class=post>
                <div class=post-logo>
            　   　<p>投稿</p>
                </div>
                <div class=post-title>
                    <p>タイトル</p>
                    <input type="text" name="title" maxlength="20">
                </div>
                <div class=post-titleBox>
                </div>
                <div class=post-article>
                    <p>記事</p>
                    <textarea name="contents" rows="4"cols="40">ここに記事をお書きください</textarea>
                    <input type="submit" name="send" value="投稿">
                </div>
                <div class=post-articleBox>
                </div>
            </div>
        </form>
        <footer>
        </footer>
        <p id="pageTop"><a href="#"><i class="fa fa-chevron-up"></i></a></p>
        
        <!--js読み込み-->
        <script type="text/javascript" src="script.js"></script>
    </body>
</html>