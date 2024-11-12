<!DOCTYPE html>
<html lang="tw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>密室逃脫</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    
</head>
<body>
    <nav>
        <div class="header">
            <ul>
                <li>logo</li>
                <li><a href="#">遊戲類型</li>
                <li><a href="#">遊戲難度</li>
                <li><a href="#">遊戲模式</li>
                <li><a href="#">線上/實體遊戲</li>
                <li><a href="#">特別活動</li>
                <li><a href="#">遊戲攻略與資源</li>
                <li><a href="#">社群與活動</li>
                <li style="margin-left: 4rem"><input type="text" name="keytext" placeholder="輸入關鍵字" ></li>
                <li><a href="#"><a href="#">鈴鐺圖案</a></li>
                <li><a href="#">會員</a></li>
            </ul>
        </div>
    </nav>

    <main>
        <div class="session_1">
            <div class="search">
                <h2>這次，你想扮演甚麼角色?</h2>
                <p>逃脫吧!暫別你的現實人生，在一場實境遊戲中放肆沉浸!</p>
                <form action="gamer.php" method="post">
                    <font>遊玩城市</font> <font>遊玩人數</font><br>
                    <select name="search_city" >
                        <option value="">請選擇城市</option>
                        <option value="大台北">大台北</option>
                        <option value="台北市">台北市</option>
                        <option value="新北市">新北市</option>
                    </select>
                    <select name="search_people" >
                        <option value="">不限</option>
                        <option value="1人">1人</option>
                        <option value="2人">2人</option>
                        <option value="3人">3人</option>
                    </select>
                    <input type="submit" value="望遠鏡">
                </form>

            </div>
        </div>
    </main>
</body>
</html>