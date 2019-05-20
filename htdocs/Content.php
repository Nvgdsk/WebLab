<?php
include_once ("../config/db.php");
Class Content{




    public function DownloadNews(){
        global $mysqli;


        $a = $mysqli->query("SELECT * FROM `news` WHERE 1");
        $arrayNews=[];
        while ($row = mysqli_fetch_assoc($a)){
            $arrayNews[$row['id']]['header'] = $row['titlle'];
            $arrayNews[$row['id']]['text'] = $row['text'];
        }

        $mysqli->close();
        $arrayNewsJson=json_encode($arrayNews);
        echo $arrayNewsJson;
    }
    public function UploadNews($arr){
        global $mysqli;
        $headernews = mysqli_real_escape_string($mysqli,$arr['news']['header']);
        $contentnews = mysqli_real_escape_string($mysqli,$arr['news']['content']);
        $sql = "INSERT INTO `news`(  `titlle`, `text`) VALUES ('$headernews','$contentnews')";

      $mysqli->query($sql);

        $mysqli->close();
    }



}

function getNews($arr){

    $content = new Content();
    $content->DownloadNews();
}
function uploadNews($arr){
    $content = new Content();
    $content->UploadNews($arr);

}
