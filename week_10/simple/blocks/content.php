<?php
  $cat = 1;
  if(isset($_GET['cat'])){
    $cat = $_GET['cat'];
  }
  $text_query = "SELECT text FROM menu WHERE id='$cat'";
  $result_query = mysqli_query($con, $text_query);
  $row_text = mysqli_fetch_assoc($result_query);
 ?>
<div class="content">
    <?php
        echo $row_text['text'];
     ?>
</div>
