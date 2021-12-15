<div class="modal fade" id="add_plants" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" style="color:black">Add New Plant</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="plants/add_plants.php" method="post">
        <div class="modal-body" style="color:black">
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="name" name="name" placeholder="Name">
              <label for="floatingInput">Name</label>
            </div>

            <div class="form-floating mb-3">
              <select class="form-select" id="type_id" name="type_id" aria-label="Floating label select example">
                <option selected>None</option>
                <option value="Climbers">Climbers</option>
                <option value="Creepers">Creepers</option>
                <option value="Herbs">Herbs</option>
                <option value="Shrubs">Shrubs</option>
                <option value="Trees">Trees</option>
              </select>
              <label for="floatingSelect">Type Id</label>
            </div>

            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="color" name="color" placeholder="Name">
              <label for="floatingInput">Color</label>
            </div>

            <div class="form-floating mb-3">
              <input type="number" class="form-control" id="price_range" name="price_range" placeholder="Name">
              <label for="floatingInput">Price Range</label>
            </div>

            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="remarks" name="remarks" placeholder="Name">
              <label for="floatingInput">Remarks</label>
            </div>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" name="add" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>