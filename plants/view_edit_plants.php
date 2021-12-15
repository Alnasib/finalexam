<div class="modal fade" id="edit_plants<?php echo $row['id']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"style="color:black">Edit Plant</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="plants/edit_plants.php?id=<?php echo $row['id']; ?>" method="post">
        <div class="modal-body">


            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name']; ?>" >
              <label for="floatingInput">Name</label>
            </div>


            <div class="form-floating mb-3">
              <select class="form-select" id="type_id" name="type_id" aria-label="Floating label select example" value="<?php echo $row['class']; ?>">
                <option <?php if ($row['type_id'] == "None") {echo "selected";} ?>>None</option>
                <option value='Climbers' <?php if ($row['type_id'] == "Climbers") {echo "selected";} ?>>Climbers</option>
                <option value='Creepers' <?php if ($row['type_id'] == "Creepers") {echo "selected";} ?>>Creepers</option>
                <option value='Herbs' <?php if ($row['type_id'] == "Herbs") {echo "selected";} ?>>Herbs</option>
                <option value='Shrubs' <?php if ($row['type_id'] == "Shrubs") {echo "selected";} ?>>Shrubs</option>
                <option value='Trees' <?php if ($row['type_id'] == "Trees") {echo "selected";} ?>>Trees</option>
              </select>
              <label for="floatingSelect">Type Id</label>


            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="color" name="color" value="<?php echo $row['color']; ?>">
              <label for="floatingInput">Color</label>
            </div>

            <div class="form-floating mb-3">
              <input type="number" class="form-control" id="price_range" name="price_range" value="<?php echo $row['price_range']; ?>">
              <label for="floatingInput">Price Range</label>
            </div>

            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="remarks" name="remarks" value="<?php echo $row['remarks']; ?>">
              <label for="floatingInput">Remarks</label>
            </div>

            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" name="edit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>