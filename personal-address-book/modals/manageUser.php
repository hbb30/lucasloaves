<!-- Modal for form(Adding) -->
<div class="modal fade shadow" id="add_user" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content rounded-4">
      <div class="modal-header border-bottom-0">
        <h1 class="modal-title fs-5">Add User</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="adduser_form">
        <div class="modal-body py-0">
          <div class="form-floating mb-2">
            <input class="form-control" type="text" placeholder="Name" id="name" name="name" aria-label="default input example" autocomplete="off" required>
            <label for="name"> Name</label>
          </div>
          <div class="form-floating mb-2">
            <input class="form-control" type="text" placeholder="Address" id="address" name="address" aria-label="default input example" autocomplete="off" required>
            <label for="address">Address</label>
          </div>
          <div class="form-floating mb-2">
            <input class="form-control" type="text" placeholder="Email" id="email" name="email" aria-label="default input example" autocomplete="off" required>
            <label for="email">Email</label>
          </div>
          <div class="form-floating mb-2">
            <input class="form-control" type="text" placeholder="Phone number" id="phonenumber" name="phonenumber" aria-label="default input example" autocomplete="off" required>
            <label for="phonenumber">Phone Number</label>
          </div>
        </div>
        <div class="modal-footer flex-column align-items-stretch w-100 gap-2 pb-3 border-top-0">
          <button type="submit" class="btn btn-lg btn-warning"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
          <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
          <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
          </svg> Add User</button>
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
        <h1 class="modal-title fs-5">Update User (#<span id="userid"></span>)</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="update_user">
        <div class="modal-body py-0">
          <div class="form-floating mb-2">
            <input class="form-control" type="text" placeholder="Name" id="u_name" aria-label="default input example" autocomplete="off" required>
            <label for="name"> Name</label>
          </div>
          <div class="form-floating mb-2">
            <input class="form-control" type="text" placeholder="Address" id="u_address" aria-label="default input example" autocomplete="off" required>
            <label for="address">Address</label>
          </div>
          <div class="form-floating mb-2">
            <input class="form-control" type="text" placeholder="Email" id="u_email" aria-label="default input example" autocomplete="off" required>
            <label for="email">Email</label>
          </div>
          <div class="form-floating mb-2">
            <input class="form-control" type="text" placeholder="Phone number" id="u_phonenumber" aria-label="default input example" autocomplete="off" required>
            <label for="phonenumber">Phone Number</label>
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
