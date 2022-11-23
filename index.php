<?php $url = !empty($_GET['url']) ? $_GET['url'] : "S_rpcEQLw9c3NTAy"; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Измени свою жизнь</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="pril.css">
</head>
<body>
    <div class="wrapper">
        <div class="balance">
            <div class="balance-title">Количество подписчиков</div>
            <div id="out-1" class="out-num">6903</div>
            <div class="currency"> </div>
        </div>
        <h1 class="title">Нажми «Подписаться»</h1>
        <p class="subtitle">И начни менять свою жизнь</p>

        <div class="item button-hand" style="--bg-color: #3498db">
            <button>
                <a href="/subscribe.php/?url=<? echo $url ?>"> Подписаться</a>
              <div class="hands"></div>
            </button>
          </div>
      </div>
  <script src="pril.js"></script>
</body>
</html>
