<?php
require 'header.php';
require 'Process.php';
?>
<br><br><br>
<div class="container mt-5 ">
  <div class='insertform'>

    <form action="Process.php" method="POST">

      <div class="form-group col-md-">

        <label for="Street" class="label">Street</label>
        <input type="text" class="form-control " name="Street" autofocus placeholder="Enter Street">
      </div>

      <div class="form-group col-md-">

        <label for="Number" class="label">Number</label>
        <input type="text" class="form-control" id="Number" name="Number" placeholder="Enter House Number">

      </div>
      <div class="form-group col-md-">

        <label for="Unit" class="label">Unit</label>
        <input type="text" class="form-control" name="Unit" placeholder="Enter Unit">

      </div>

      <div class="form-group col-md-">

        <label for="Code">Code</label>

        <select class="form-control " id="Code" name="Code">
          <option class="active">Select Code</option>
          <option>DS</option>
          <option>C4</option>
          <option>WE</option>
          <option>WS</option>
          <option>SO</option>
          <option>MF</option>
        </select>

      </div>
      <div class="form-group col-md-">
        <label for="Papers">Papers</label>
        <input type="text" class="form-control " name="Papers" placeholder="Enter Papers">

      </div>
      <div class="form-group col-md-">
        <label for="TVGuide">TV Guide</label>
        <input type="checkbox" class="form-control " name="TVGuide" id="TVGuide">

      </div>

      <div class="form-group col-md-">
        <label for="Path">Path</label>
        <input type="text" class="form-control  " name="Path" placeholder="Enter Path">

      </div>
      <div class="form-group col-md-">
        <label for="Seq">Seq</label>
        <input type="text" class="form-control  " name="Seq" placeholder="Enter Seq">

      </div>
      <div class="form-group col-md-">
        <label for="Delivery">Delivery</label>
        <input type="text" class="form-control  " name="Delivery" placeholder="Enter Delivery">

      </div>

      <div class="form-group col-md-">
        <label for="TempStop">Temp Stop</label>

        <input type="text" class="form-control  " name="TempStop" placeholder="Enter TempStop">
      </div>

      <div class="form-group col-md-">

        <label for="TSDate">TSDate</label>
        <input type="text" class="form-control  " name="TSDate" placeholder="Enter TSDate">
      </div>
      <div class="form-group col-md-">

        <label for="Update">Update</label>
        <input type="text" class="form-control  " name="Update" value="<?php echo (date('l, F j, Y, g:i a')) ?>">
      </div>
  </div>
</div>
<br><br>
<Button type="submit" class="btn btn-primary" name="Cancel">Cancel</Button>
<Button type="submit" class="btn btn-primary" name="Save">Save</Button>
<br><br>
</form>
</div>
</div>

<?php require 'footer.php'; ?>
