<!DEOTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>グリッドレイアウト</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/reset.css">
</head>
<body>
    <section class="item item-maindish">
        <a href="#">
        <img class="image" src="images/image_S_1.jpg" alt="メインディッシュ">
        <div class="category">MAIN DISH</div>
        <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </a>
    </section>
    <section class="item item-appetizer">
        <a href="#">
        <img class="image" src="images/image_S_2.jpg" alt="前菜">
        <div class="category">APPETIZER</div>
        <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
        </a>
    </section>
    <section class="item item-column">
        <a href="#">
        <img class="image" src="images/image_S_3.jpg" alt="コラム">
        <div class="category">COLUMN</div>
        <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </a>
    </section>
    <section class="item item-breaktime">
        <a href="#">
        <img class="image" src="images/image_S_4.jpg" alt="おやつの時間">
        <div class="category">BREAK TIME</div>
        <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
        </a>
    </section>
    <section class="item item-maindish">
        <a href="#">
        <img class="image" src="images/image_S_5.jpg" alt="メインディッシュ">
        <div class="category">MAIN DISH</div>
        <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </a>
    </section>
    <section class="item item-breaktime">
        <a href="#">
        <img class="image" src="images/image_S_6.jpg" alt="おやつの時間">
        <div class="category">BREAK TIME</div>
        <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </a>
    </section>
    <section class="item item-maindish">
        <a href="#">
        <img class="image" src="images/image_S_7.jpg" alt="メインディッシュ">
        <div class="category">MAIN DISH</div>
        <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
        </a>
    </section>
    <section class="item item-breaktime">
        <a href="#">
        <img class="image" src="images/image_S_8.jpg" alt="おやつの時間">
        <div class="category">BREAK TIME</div>
        <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
        </a>
    </section>
    <section class="item item-column">
        <a href="#">
        <img class="image" src="images/image_S_9.jpg" alt="コラム">
        <div class="category">COLUMN</div>
        <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
        </a>
    </section>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.0/masonry.pkgd.js"></script>
    <section class="item item-maindish">
        <a href="#">
        <img class="image" src="images/image_S_10.jpg" alt="メインディッシュ">
        <div class="category">MAIN DISH</div>
        <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
        </a>
    </section>
    <script>
        new Masonry('body', {
            itemSelector: '.item',
            columnWidth: 180,
            gutter: 4
        });
    </script>

</body>
</html>
