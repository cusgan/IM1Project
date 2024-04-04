<!-- Login -->
<div class="modal fade" id="modalLogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <form method="post" action="api/login.php">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Log In</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <div class="mb-3">
            <label for="loginEmail" class="form-label">Username or Email</label>
            <input type="username" name="inptEmailUsername" class="form-control" id="loginEmail" aria-describedby="usernameHelp">
        </div>
        <div class="mb-3">
            <label for="loginPassword" class="form-label">Password</label>
            <input type="password" name="inptPassword" class="form-control" id="loginPassword">
        </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Log In</button>
        </div>
    </form>
    </div>
    </div>
</div>