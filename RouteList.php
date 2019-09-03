<?php require 'header.php'; ?>
<div> <br> <br> </div>
<div class="container mt-5 ">

  <?php
  require 'Config.php';

  $sql = "SELECT * FROM customers;";

  $result = mysqli_query($Conn, $sql);
  $holdPath = 0;

  // output data of each row

  while ($row = mysqli_fetch_assoc($result)) {

    // Path / Street Line
    if ($holdPath != $row['Path']) {
      $color = "PAcolor";
      ?>

      <br>
      <div class=' <?php echo $color ?> '>
        <strong> <?php echo $row['Street'] ?> </strong>
      </div>
      <br>

    <?php
  }
  $holdPath = $row['Path'];
  $VacStop = $row['TempStop'];

  // Set the color
  $hold = Trim($row['Code']);
  if ($hold == "DS") {
    $color = "DScolor";
  } elseif ($hold == "WE") {
    $color = "WEcolor";
  } elseif ($hold == "WS") {
    $color = "WScolor";
  } elseif ($hold == "SO") {
    $color = "SOcolor";
  } elseif ($hold == "MF") {
    $color = "MFcolor";
  } elseif ($hold == "C4") {
    $color = "C4color";
  }

  // Set color for TV Guide
  if (Trim($row['TVGuide']) == "TRUE") {
    $TVGcolor = "TVG";
  } else {
    $TVGcolor = "NoTVG";
  }
  $Number = $row['Number'];

  // Get Left/Right side from the datatable
  $Side = 'text-' . strtolower($row['Side']);

  ?>

    <!--// Write a record -->
    <div class=' <?php echo $color ?> '>
      <div class=' <?php echo $TVGcolor ?>'>
        <div class=' <?php echo $Side ?> '>
          <?php echo $Number; ?>
        </div>
      </div>
    </div>

  <?php
}
mysqli_close($Conn);
?>

</div>
<?php require 'footer.php'; ?>