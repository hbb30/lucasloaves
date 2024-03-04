<!-- confirm Logout -->
<div class="modal fade" tabindex="-1" role="dialog" id="log_out" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
  <div class="modal-dialog">
    <div class="modal-content rounded-4 shadow bg-dark text-light">
      <div class="modal-body p-4 text-center">
        <h5 class="mb-0">Logout?</h5>
        <p class="mb-0">Are you sure you want to leave?</p>
      </div>
      <div class="modal-footer flex-nowrap p-0   border-top-0">
        <button type="button" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 py-3 m-0 rounded-0 border-end text-danger" id="logout"><strong>Logout</strong></button>
        <button type="button" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 py-3 m-0 rounded-0 text-light" data-bs-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>

<!-- confirm add -->
<div class="modal fade" tabindex="-1" role="dialog" id="confirmSave" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
  <div class="modal-dialog">
    <div class="modal-content rounded-4 bg-light shadow">
      <div class="modal-body p-4 text-center">
        <h5 class="mb-0 text-warning">New record?</h5>
        <p class="mb-0">Make sure that all information are correct.</p>
      </div>
      <div class="modal-footer flex-nowrap p-0 border-top-0">
        <button type="button" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 py-3 m-0 rounded-0 border-end text-warning" id="confirm_add_save"><strong>Yes</strong></button>
        <button type="button" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 py-3 m-0 rounded-0 text-muted" data-bs-dismiss="modal">Back</button>
      </div>
    </div>
  </div>
</div>

<!-- success -->
<div class="modal fade" role="dialog" id="success">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-4 shadow bg-success">
      <div class="modal-header border-bottom-0">
        <h1 class="modal-title fs-5 text-light">Success</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body py-0">
        <hp class="text-light">Process Completed!</p>
      </div>
    </div>
  </div>
</div>

<!-- failed -->
<div class="modal fade" role="dialog" id="failed">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-4 shadow bg-danger">
      <div class="modal-header border-bottom-0">
        <h1 class="modal-title fs-5 text-light">Failed</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body py-0">
        <p class="text-light">Something went wrong!</p>
      </div>
    </div>
  </div>
</div>