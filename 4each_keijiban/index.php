<!DOCTUPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>演習17</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
    <body>
        <?php
        mb_internal_encoding("utf8");
        $pdo = new PDO("mysql:dbname=lesson01_fujita;host=localhost;","root","mysql");
        $stmt = $pdo->query("select * from 4each_keijiban");
        ?>
        
        
        
        
        <div class="logo">
            <img src="4eachblog_logo.jpg" width="200">
        </div>
        
        <header>
            <div class="head">
                <ul>
                    <li>トップ</li>
                    <li>プロフィール</li>
                    <li>4eachについて</li>
                    <li>登録フォームについて</li>
                    <li>問い合わせ</li>
                    <li>その他</li>
                </ul>
            </div>
        </header>
            <div class="left">
                <div class="taitol">
                プログラミングに役立つ掲示板
                </div>
                
                <div class="aa">
                    <div class="aa_title">
                        入力フォーム
                    </div>
                    <form method="post" action="insert.php">
                        <div class="name">
                            ハンドルネーム<br>
                            <input type="text" name="handlename" size="40px">
                        </div>
                        <div class="title">
                            タイトル<br>
                            <input type="text" name="title" size="40px">
                        </div>
                        <div class="comments">
                            コメント<br>
                            <textarea rows="8" cols="60" name="comments"></textarea>
                        </div>
                        <div>
                            <input type="submit" value="投稿する">
                             <input type="hidden" value="<?php echo $_POST['handlename']; ?>">
                             <input type="hidden" value="<?php echo $_POST['title']; ?>" >
                              <input type="hidden" value="<?php echo $_POST['comments']; ?>">
                        </div>
                    </form>    
                </div>
                
                <?php
                while($row = $stmt->fetch()){
                echo "<div class='commentran1'>";
                    echo "<h3>".$row['title']."</h3>";
                    echo "<div class='commentran1_title'>";
                    echo $row['comments']; 
                    echo "<div class='handlename'>posted by".$row['handlename']."</div>";
                    echo "</div>";
                echo "</div>";
                    }
                ?>
            </div>
                
            <div class="right">
                <h2>人気の記事</h2>
                <p>PHP オススメ本</p>
                <p>PHP MyAdminの使い方</p>
                <p>今人気のエディタTop5</p>
                <p>HTMLの基礎</p>
                <h2>オススメリンク</h2>
                <p>インターノウス株式会社</p>
                <p>XAMPPのダウンロード</p>
                <p>Eclipseのダウンロード</p>
                <p>Bracketsのダウンロード</p>
                <p>HTMLの基礎</p>
                <h2>カテゴリ</h2>
                <p>HTML</p>
                <p>PHP</p>
                <p>MySQL</p>
                <p>JavaScript</p>
            </div>
            
        <footer>copyright internous | 4each blog is the one which provides A to Z about programing.
        </footer>
        
        
    </body>
    
    
</html>