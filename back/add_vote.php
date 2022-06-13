<!--重要提及備註-->
<!--往上一層去api資料夾找add_vote.php的檔案-->
<!--並把form表單資料全部寫進去(存進去資料庫)-->
<!--存完之後會在upload資料夾看到back.php檔案看到資料-->

<form action="../api/add_vote.php" method="post">    
    <div>
        <label for="subject">投票主題：</label>
        <input type="text" name="subject" id="subject">
        <input type="submit" value="新增選項" onclick="more()">
    </div>

    <div id="options">
        <div>
            <label>選項:</label><input type="text" name="option[]">
            <label>選項:</label><input type="text" name="option[]">

        </div>

    </div>
    <input type="submit" value="新增add">

</form> 

<script>
    function more(){
        //每次function函數在呼叫的時候,就把div id的options塞進這裡
        let opt=`<div><label>選項:</label><input type="text" name="option[]"></div>`;
        let opts=document.getElementById('option').innerHTML;
        opts=opts+opt;
        document.getElementById('options').innerHTML=opts;
    }
</script>
