<form method="get">
    <p>名前</p>
    <input type="text" name="name">
    <p>メールアドレス</p>
    <input type="email" name="email">
    <input type="submit" value="送信">
</form>

<div>
    <h1>結果</h1>
    <p>名前：
        <?php
        if (isset($_GET["name"])) {
            echo $_GET["name"];
        }
        ?>
    </p>
    <p>メールアドレス：
        <?php
        if (isset($_GET["email"])) {
            echo $_GET["email"];
        }
        ?>
    </p>
</div>