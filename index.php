<!DEOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>スタンダードレイアウト</title>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <header class="header">
            <h1 class="logo">
                <a href="/">SAMPLE SITE</a>
            </h1>
            <nav class="global-nav">
                <ul>
                    <li class="nav-item active"><a href="#">HOME</a></li>
                    <li class="nav-item"><a href="#">ABOUT</a></li>
                    <li class="nav-item"><a href="#">NEWS</a></li>
                    <li class="nav-item"><a href="#">TOPICS</a></li>
                    <li class="nav-item"><a href="#">DOCS</a></li>
                    <li class="nav-item"><a href="#">BLOG</a></li>
                </ul>
            </nav>
        </header>
        <div class="wrapper clearflex">
            <main class="main">
                <h2 class="hidden">HOT TOPIC</h2>
                <a href="#" class="hot-topic clear-fix">
                    <img class="image" src="../mcoding/standard-layout/images/hot-topic.jpg" alt="コーディング画面">
                    <div class="content">
                        <h3 class="title">実務で使えるHTML/CSS<br>モダンコーディングTIPS</h3>
                        <p class="desc">Webフロントエンドの進化の勢いはとどまるとことを知りません。新しい要素が増えて大幅に表現力が広がったHTML5/CSS3を活用して...
                        <time class="date" datetime="2015-09-01">2015.09.01 TUE</time>
                    </div>
                </a>
                <h2 class="heading">NEWS</h2>
                <ul class="scroll-list">
                    <li class="scroll-item">
                        <a href="#">
                            <time class="date" datetime="2015-08-23">2015.08.23 SUN</time>
                            <span class="category news">NEWS</span>
                            <span class="title">WORKSを更新しました</span>
                        </a>
                    </li>
                    <li class="scroll-item">
                        <a href="#">
                            <time class="date" datetime="2015-08-12">2015.08.12 WED</time>
                            <span class="category">TOPIC</span>
                            <span class="title">CSSでここまでできる！？ホントに使えるCSSセレクタ</span>
                        </a>
                    </li>
                </ul>
                <div class="news">
                    <!-- NEWS -->
                </div>
                <h2 class="hidden">ARTICLES</h2>
                <div class="clearfix">
                    <a href="#" class="article-box">
                        <h3 class="title">実務で使えるHTML/CSSモダンコーディングTIPS</h3>
                        <p class="desc">新しい要素が増えて大幅に広がったHTML5/CSS3を活用し、モダンなコーディングにチャレンジしましょう！</p>
                        <time class="date" datetime="2015-06-17">2015.06.17 WED</time>
                        <img class="image" src="../mcoding/standard-layout/images/article.jpg" alt="コーディング画面">
                    </a>
                    <a href="#" class="article-box">
                        <h3 class="title">実務で使えるHTML/CSSモダンコーディングTIPS</h3>
                        <p class="desc">新しい要素が増えて大幅に広がったHTML5/CSS3を活用し、モダンなコーディングにチャレンジしましょう！</p>
                        <time class="date" datetime="2015-06-17">2015.06.17 WED</time>
                        <img class="image" src="../mcoding/standard-layout/images/article.jpg" alt="コーディング画面">
                    </a>
                </div>
            </main>
            <div class="sidemenu">
                <h2 class="heading">RANKING</h2>
                <ol class="ranking">
                    <li class="ranking-item">
                        <a href="#">
                            <img class="iamge" src="../mcoding/standard-layout/images/ranking.jpg" alt="グラフの画像">
                            <span class="order"></span>
                            <p class="text">HTML/CSSコーディングと切っても切れないwebブラウザのシェア動向をチェックしよう</p>
                        </a>
                    </li>
                    <li class="ranking-item">
                        <a href="#">
                            <img class="iamge" src="../mcoding/standard-layout/images/ranking.jpg" alt="グラフの画像">
                            <span class="order"></span>
                            <p class="text">HTML/CSSコーディングと切っても切れないwebブラウザのシェア動向をチェックしよう</p>
                        </a>
                    </li>
                    <li class="ranking-item">
                        <a href="#">
                            <img class="iamge" src="../mcoding/standard-layout/images/ranking.jpg" alt="グラフの画像">
                            <span class="order"></span>
                            <p class="text">HTML/CSSコーディングと切っても切れないwebブラウザのシェア動向をチェックしよう</p>
                        </a>
                    </li>
                    <li class="ranking-item">
                        <a href="#">
                            <img class="iamge" src="../mcoding/standard-layout/images/ranking.jpg" alt="グラフの画像">
                            <span class="order"></span>
                            <p class="text">HTML/CSSコーディングと切っても切れないwebブラウザのシェア動向をチェックしよう</p>
                        </a>
                    </li>
                </ol>
                <h2 class="heading">DOCUMENT</h3>
                <ul class="documents">
                <li>
                    <h3 class="title">HTML5</h3>
                    <ul>
                        <li><a href="#">追加された要素</a></li>
                        <li><a href="#">削除された要素</a></li>
                        <li><a href="#">意味が変わった要素</a></li>
                        <li><a href="#">HTML5のコンテンツモデル</a></li>
                    </ul>
                </li>
                <li>
                    <h3 class="title">CSS3</h3>
                    <ul>
                        <li><a href="#">追加されたプロパティ</a></li>
                        <li><a href="#">削除されたセレクタ</a></li>
                        <li><a href="#">追加された単位</a></li>
                    </ul>
                </li>
                <li>
                    <h3 class="title">JavaScript</h3>
                    <ul>
                        <li><a href="#">JavaScriptの言語仕様</a></li>
                        <li><a href="#">ECMAScriptとは？</a></li>
                        <li><a href="#">jQueryとは？</a></li>
                    </ul>
                </li>
                <h2 class="hidden">SEARCH</h2>
                <form class="search-box">
                    <input class="search-input" type="text" name="search" placeholder="SEARCH">
                    <input class="search-button" type="submit" value="検索">
                    <p class="text">サイト内の文章を検索できます</p>
                </form>
                </div>
        </div>
        <footer class="footer">
            <ul class="horizontal-list">
                <li class="horizontal-item"><a href="#">ABOUT ME</a></li>
                <li class="horizontal-item"><a href="#">SITE MAP</a></li>
                <li class="horizontal-item"><a href="#">SNS</a></li>
                <li class="horizontal-item"><a href="#">CONTACT</a></li>
            </ul>
            <p class="copyright">Copyright © 2015 SAMPLE SITE</p>
        </footer>
    </body>
</html>

