<?php

//fetch_comment.php

$connect = new PDO('mysql:host=localhost;dbname=bio_comment', 'bio_comment', 'COMv0d0i');

$query = "
  SELECT * FROM tbl_comment_vi 
  WHERE parent_comment_id = '0' 
  ORDER BY comment_id DESC
";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();
$output = '';
foreach($result as $row)
{
  $output .= '
  <div class="card mb-4">
  <div class="card-header">Bởi <b>'.$row["comment_sender_name"].'</b> vào <i>'.$row["date"].'</i></div>
  <div class="card-body">'.$row["comment"].'</div>
  <div class="card-footer" align="right"><button type="button" class="btn btn-info reply" id="'.$row["comment_id"].'">Trả lời</button></div>
  </div>
  ';
  $output .= get_reply_comment($connect, $row["comment_id"]);
}

echo $output;

function get_reply_comment($connect, $parent_id = 0, $marginleft = 0)
{
  $query = "
    SELECT * FROM tbl_comment_vi WHERE parent_comment_id = '".$parent_id."'
  ";
  $output = '';
  $statement = $connect->prepare($query);
  $statement->execute();
  $result = $statement->fetchAll();
  $count = $statement->rowCount();
  if($parent_id == 0)
  {
    $marginleft = 0;
  }
  else
  {
    $marginleft = $marginleft + 48;
  }
  if($count > 0)
  {
    foreach($result as $row)
    {
      $output .= '
        <div class="card mb-4" style="margin-left:'.$marginleft.'px">
        <div class="card-header">Bởi <b>'.$row["comment_sender_name"].'</b> vào <i>'.$row["date"].'</i></div>
        <div class="card-body">'.$row["comment"].'</div>
        <div class="card-footer" align="right"><button type="button" class="btn btn-info reply" id="'.$row["comment_id"].'">Trả lời</button></div>
        </div>
      ';
      $output .= get_reply_comment($connect, $row["comment_id"], $marginleft);
    }
  }
  return $output;
}

?>