<!-- Signup Business -->
<div class="modal fade" id="modalSignupBusiness" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apply as Business</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="post" action="api/signup.php">
            <div class="modal-body">
                <div class="mb-3">
                <label for="signupUsernameB" class="form-label">Business Name</label>
                <input type="username" name="busName" class="form-control" id="signupUsernameB" aria-describedby="usernameHelp">
                </div>
                <div class="mb-3">
                <label for="signupFirstnameB" class="form-label">Business Description</label>
                <input type="username" name="busDesc" class="form-control" id="signupFirstnameB" aria-describedby="usernameHelp">
                </div>
                <div class="mb-3">
                <label for="signupLastnameB" class="form-label">Business Address</label>
                <input type="username" name="busAddr" class="form-control" id="signupLastnameB" aria-describedby="usernameHelp">
                </div>
                <div class="mb-3">
                <label for="signupLastnam1eB" class="form-label">Menu Description</label>
                <input type="username" name="busMenu" class="form-control" id="signupLastnam1eB" aria-describedby="usernameHelp">
                </div>
                <!--<button type="submit" class="btn btn-primary">Submit</button>-->                  
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Apply</button>
            </div>
        </form> 
    </div>
    </div>
</div>