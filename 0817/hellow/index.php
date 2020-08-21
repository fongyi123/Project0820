<?php
    session_start();
    if (isset($_POST["btnOK"])){
        $_SESSION["who"] = $_POST["txtUserName"];
        header("Location: hellow.php");
        // 見到Location網頁要跳轉到目標
        exit();
    }
    // var_dump($_POST);
    // dump把一個字串，變數，陣列show出來
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method = "post" action = "">
        <!-- action動作改為空字串後會丟給自己執行 -->
        Your name:
        <input type = " text" name = "txtUserName">
        <input type = "submit" name = "btnOK" value ="OK">
        <!-- value設定按鈕的名稱 -->
        <input type = "submit" name = "btnOK">

    </form>
</body>
</html>