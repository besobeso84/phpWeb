<?php
    $query_nav = "SELECT id, title FROM menu";
    $result_nav = mysqli_query($con, $query_nav);
 ?>
<nav>
    <ul>
      <?php
          while($row_nav = mysqli_fetch_assoc($result_nav))
          {
       ?>
      <li> <a href="?cat=<?=$row_nav['id']?>"><?=$row_nav['title']?></a> </li>
      <?php
          }
       ?>
    </ul>
</nav>
