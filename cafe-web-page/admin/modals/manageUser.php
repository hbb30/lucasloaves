<!-- Modal for form(Adding) -->
<div class="modal fade shadow" id="add_user" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content rounded-4">
      <div class="modal-header border-bottom-0">
        <h1 class="modal-title fs-5">Add Product</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="adduser_form">
        <div class="modal-body py-0">
          <div class="form-floating mb-2">
            <input class="form-control" type="text" placeholder="Name" id="product_name" name="product_name" aria-label="default input example" autocomplete="off" required>
            <label for="product_name"> Name</label>
          </div>
          <div class="form-floating mb-2">
            <input class="form-control" type="text" placeholder="Price" id="product_price" name="product_price" aria-label="default input example" autocomplete="off" required>
            <label for="product_price">Price</label>
          </div>
          <div class="form-floating mb-2">
            <input class="form-control" type="text" placeholder="Description" id="product_description" name="product_description" aria-label="default input example" autocomplete="off" required>
            <label for="product_description">Description</label>
          </div>
          <div class="form-floating mb-2">
            <input class="form-control" type="text" placeholder="Image" id="product_image" name="product_image" aria-label="default input example" autocomplete="off" required>
            <label for="product_image">Image</label>
          </div>
        </div>
        <div class="modal-footer flex-column align-items-stretch w-100 gap-2 pb-3 border-top-0">
          <button type="submit" class="btn btn-lg btn-warning"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
          <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
          <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
          </svg> Add Product</button>
          <button type="button" class="btn btn-lg btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        
      </form>
    </div>
  </div>
</div>


<!-- update -->
<div class="modal modal-sheet fade p-4 py-md-5" tabindex="-1" role="dialog" id="updateUser">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-header border-bottom-0">
        <h1 class="modal-title fs-5">Update Product (#<span id="product_id"></span>)</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="update_user">
        <div class="modal-body py-0">
          <div class="form-floating mb-2">
            <input class="form-control" type="text" placeholder="Name" id="u_product_name" aria-label="default input example" autocomplete="off" required>
            <label for="u_product_name"> Name</label>
          </div>
          <div class="form-floating mb-2">
            <input class="form-control" type="text" placeholder="Price" id="u_product_price" aria-label="default input example" autocomplete="off" required>
            <label for="u_product_price">Price</label>
          </div>
          <div class="form-floating mb-2">
            <input class="form-control" type="text" placeholder="Description" id="u_product_description" aria-label="default input example" autocomplete="off" required>
            <label for="u_product_description">Description</label>
          </div>
          <div class="form-floating mb-2">
            <input class="form-control" type="text" placeholder="Image" id="u_product_image" aria-label="default input example" autocomplete="off" required>
            <label for="u_product_image">Image</label>
          </div>
        </div>
        <div class="modal-footer flex-column align-items-stretch w-100 gap-2 pb-3 border-top-0">
          <button type="submit" class="btn btn-lg btn-warning">Save changes</button>
          <button type="button" class="btn btn-lg btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </form>
    </div>
  </div>
</div>
