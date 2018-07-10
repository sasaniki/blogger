<?php

$t=time();
echo($t . "<br>");
echo(date("Y-m-d h:i:s",$t));
?>
<div class="card my-4">
  <h5 class="card-header">Categories</h5>
  <div class="card-body">
    <div class="row">
      <div class="col-lg-6">
        <ul class="list-unstyled mb-0">
          <li>
            <a href="sbc.php<?php $_SESSION['cat']="sports"; ?>">Sports</a>
          </li>
          <li>
            <a href="sbc.php<?php $_SESSION['cat']="health";?>">health</a>
          </li>
          <li>
            <a href="sbc.php<?php $_SESSION['cat']="poetry"; ?>">Poetry</a>
          </li>
        </ul>
      </div>
      <div class="col-lg-6">
        <ul class="list-unstyled mb-0">
          <li>
            <a href="sbc.php<?php $_SESSION['cat']="project"; ?>">Project</a>
          </li>
          <li>
            <a href="sbc.php<?php $_SESSION['cat']="travel"; ?>">Travel</a>
          </li>
          <li>
            <a href="sbc.php<?php $_SESSION['cat']="informational"; ?>">Informational</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
