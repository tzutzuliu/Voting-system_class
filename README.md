# 投票系統作業(上課練習製作)_測試版

投票系統範例

# USER STORY 

### 共用 
* 主畫面切割為上中下三塊
    * 上方為標題輪播放或選單列皆可
    * 中間區塊為主要content區
    * 下方區塊為公司名稱及footer版權宣告、聯絡方式
* 選單列有以下列內容
    * 首頁按鈕
    * 登入按鈕
    * 投票列按鈕
* 會員註冊時須提供以下資料，供投票使用
    * 生日
    * 性別
    * 聯絡方式:E-mail
    * LINE ID


### 使用者端
* 進入首頁時，可以看到投票項目列表
* 可以選擇想要了解的項目進行點選
* 未登入的使用者只可以看到投票的結果
* 已登入的使用者可以看到投票結果及"我要投票按鈕"
* 按下我要投票時會顯示投票項目
* 選擇項目後，使用者可按下送出，並完成投票
* 完成投票後，跳至投票結果頁面
* 使用者可按下按鈕返回首頁
* 使用者端可以選擇投票分類
* 使用者端可以排序投票
* 投票列表可以加入分頁
* 會員中心可查看參與過的投票

### 管者端
* 要透過登入才能進入管理者端 
* 登入後可以看到所有的投票LIST
* 有"新增投票"按鈕
* 點選新增投票後進入新增投票表單頁面
* 在新增頁面可以設定投票主題
* 選項可動態增加投票主題
    * 在主題旁有一個增加選項的按鈕
    * 每按下一次"增加選項"就會在下方增加一個項目
    * 有刪除的選項供管理者端管理
* 完成設定後按下"新增"，即增加一個投票主題
* 管理者端可查看投票結果(同時顯示統計分析圖)
* 管理者端可修改投票Topic或option
* 管理者端可刪除投票

# 功能需求
* 註冊/登入系統
* 前/後端頁面切版
* 前端讀出功能(列表/註冊表單/會員中心)
* 新增投票
* 修改投票
* 刪除投票
* 投票結果的統計分析
* 投票參與者的資料分析

## 資料表設計

### 資料庫名稱:Voting system
* users
    |名稱|型態|預設值|A_I|備註|
    |--|--|--|--|--|
    |id|int(11)|--|true|序號|
    |acc|varchar(12)|--|--|帳號|
    |pw|varchar(16)|--|--|--|
    |name|varchar(12)|--|--|--|
    |birthday|date|--|--|--|
    |gender|tinyint(1)|--|--|--|
    |addr|varchar(64)|--|--|--|
    |education|varchar(32)|--|--|--|
    |reg_date|date|--|--|--|

* admins
    |名稱|型態|預設值|A_I|備註|
    |--|--|--|--|--|
    |id|int(11)|--|true|序號|
    |acc|varchar(12)|--|--|帳號|
    |pw|varchar(16)|--|--|--|
    |name|varchar(12)|--|--|--|


* `supervisor`
    |名稱|型態|預設值|A_I|備註|
    |--|--|--|--|--|
    |id|int(11)|--|true|序號|
    |acc|varchar(12)|--|--|帳號|
    |pw|varchar(16)|--|--|--|
    |name|varchar(12)|--|--|--|


* subjects
    |名稱|型態|預設值|A_I|備註|
    |--|--|--|--|--|
    |id|int(11)|--|true|序號|
    |type_id|int(11)|--|--|--|
    |subjects|varchar(128)|--|--|主題描述|
    |start|date|--|--|--|
    |end|date|--|--|--|
    |total|int(11)|--|--|--|

* options
    |名稱|型態|預設值|A_I|備註|
    |--|--|--|--|--|
    |id|int(11)|--|true|序號|
    |option|varchar(128)|--|--|選項描述|
    |subject_id|int(11)|--|--|--|
    |total|int(11)|--|--|--|

* log
    |名稱|型態|預設值|A_I|備註|
    |--|--|--|--|--|
    |id|int(11)|--|true|序號|
    |user_id|int(11)|--|--|投票者|
    |subject_id|int(11)|--|--|--|
    |option_id|int(11)|--|--|--|
    |vote_time|timestamp|--|--|--|


* type
    |名稱|型態|預設值|A_I|備註|
    |--|--|--|--|--|
    |id|int(11)|--|true|序號|
    |name|varchar(128)|--|--|分類名稱|



* 若有要新增subject複選欄位可這樣做
    |multiple|boolean(1)|--|--|單/複選|
    |mulit_limit|tinyint(2)|1|--|--|單/複選項目數|

======================================================

**額外自己的筆記** <!--voting-system procedure-->

Step1 : 
* 先製作文件(README.md)寫整個文件流程和各部份需要什麼

Step2 : 
* 再去phpmyadmin建立資料庫並製作資料表(記得要對照本身readme文件的欄位型態)

Step3 :
* 製作使用者投票畫面&管理者端管理投票畫面，先製作出來(用CSS先美化即可)也可用Boostrap製作
  >>先把使用者端介面和管理者端介面切版切出來
  >>再製作List
  >>接著製作管理端的介面-button(新增/編輯修改/刪除)投票按鈕
  >>在back.php製作新增投票按紐時,須注意使用網頁傳值(GET、POST)傳送
  >>完成後會有動態機制的頁面出來
  >>完成基礎新增投票頁面
  >>接著 會在api/add_vote.php & back/add_vote.php  & upload/back.php裡運作
  >>並在back_file夾裡面的add_vote.php運用js function製作投票主題選項

Step 4:
* 在投票系統中按下新增可以送出資料到資料庫
* 到這步算完成新增投票頁面和可新增投票選項送出之後到資料庫
* 最後美化css管理者端的介面(有列表有hover)




  

========================================================