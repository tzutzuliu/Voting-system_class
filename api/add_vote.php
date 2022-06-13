<?php
//echo "<pre>";
//print_r($_POST);
//echo "</pre>";

include_once "base.php";

$subject=$_POST['subject'];
$add_subject=[
    'subject'=>$subject,
    'type_id'=>1,
    'start'=>date("Y-m-d"),
    'end'=>date("Y-m-d",strtotime("+10 days")),
];
save('subjects',$add_subject);
$id=find('subjects',['subject'=>$subject])['id'];

if(isset($_POST['optional'])){
    foreach($_POST['optional'] as $opt){
        if($opt!=""){
            $add_optional=[
                'optional'=>$opt,
                'subject_id'=>$id
            ];
            save("optional",$add_optional);
        }
    }
}

to('../back.php'); //結束後回到upload的back.php
?>