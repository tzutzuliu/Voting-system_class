<?php

include_once "../api/base.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>吱吱投票管理中心</title>    
    <link rel="stylesheet" href="../css/basic.css">
    <link rel="stylesheet" href="../css/back.css">

</head>

<body>
    <!--後端給管理的畫面-->
    <div id="header">
        <!--要用php include包-->
        <?php include "../layout/header.php";
              include "../layout/back_nav.php";
        ?> 
    </div>

    <div id="container">
    <?php
        if(isset($_GET['do'])){  //如果使用get這個傳值傳送是true的話(有get參數的話)
            $file="./back/". $_GET['do'].".php";  //就傳回當前(現在)傳回file這個變數目錄底下的這個"檔案"
        }
            if(isset($file) && file_exists($file)){
                include $file;
            }else{

    ?>
        <button class="btn btn-primary" onclick="location.href='?do=add_vote'">新增投票</button>

        <div>
            <ul>
            <?php
                $subjects=all('subjects');
                foreach($subjects as $subject){
                    echo "<li class='list-items'>";
                    //echo "subjects['subjects']";
                    echo "<li>";
                }

            ?>

            </ul>
         

        </div>

        <div>投票列表</div>
    <?php
    }
    ?>
    
        <!--額外自己筆記-->
        <!--這步很重要,因為這邊會會再按下新增投票紐之後到投票的頁面,這步用到網頁傳值-->
        <!--button class="btn btn-primary" onclick="location.href='?do=add_vote'">新增投票</button>-->
    
        <button class="btn">編輯投票 </button>
        <button class="btn">刪除投票 </button>

    </div>

    <div id="container">
        <?php include "../layout/footer.php";?>
    </div>

</body>
</html>