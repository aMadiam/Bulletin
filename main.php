<link rel="stylesheet" href="style.css">
<?php
$today = date("m/d/Y");
require("Sql.php");

$sql = "SELECT subject, details FROM new_table";
$result = $connection->query($sql);

if ($result->num_rows > 0) {?>

  <h1 class="bulletin">Bulletin Board View</h1>
<?php
  while($row = $result->fetch_assoc()) { ?>
    <h2 class="subject"><?= $today;?> - <?= $row["subject"];?></h2>
    <p class="details"><?= $row["details"];?></p>
    <div class="line"></div>
<?php  }
}
?>


