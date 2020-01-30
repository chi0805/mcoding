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
                        <time class="date" datetime="2015-09-01">2015.09.01 Tue</time>
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
            </div>
        </div>
        <footer class="footer">
        </footer>
    </body>
</html>

