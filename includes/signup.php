<!-- Signup -->
<div class="modal fade" id="modalSignup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sign Up</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="post" action="api/signup.php">
            <div class="modal-body">                  
                <div class="mb-3">
                <label for="signupEmail" class="form-label">Email address</label>
                <input type="email" name="inptEmail" class="form-control" id="signupEmail" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                <label for="signupUsername" class="form-label">Username</label>
                <input type="username" name="inptName" class="form-control" id="signupUsername" aria-describedby="usernameHelp">
                </div>
                <div class="mb-3">
                <label for="signupFirstname" class="form-label">First Name</label>
                <input type="username" name="inptFirstName" class="form-control" id="signupFirstname" aria-describedby="usernameHelp">
                </div>
                <div class="mb-3">
                <label for="signupLastname" class="form-label">Last Name</label>
                <input type="username" name="inptLastName" class="form-control" id="signupLastname" aria-describedby="usernameHelp">
                </div>
                <div class="mb-3">
                <label for="signupAddress" class="form-label">Address</label>
                <input type="username" name="inptAddress" class="form-control" id="signupAddress" aria-describedby="usernameHelp">
                </div>
                <div class="mb-3">
                <label for="signupBirthDate" class="form-label">BirthDate</label>
                <input type="date" name="inptBirthDate" class="form-control" id="signupBirthDate" aria-describedby="usernameHelp">
                </div>
                <div class="mb-3">
                <label for="signupPassword" class="form-label">Password</label>
                <input type="password" name="inptPassword" class="form-control" id="signupPassword">
                </div>
                <!--<button type="submit" class="btn btn-primary">Submit</button>-->                  
            </div>
            <div class="modal-footer">
                <button type="button" data-bs-target="#modalLogin" class="btn w-25 btn-secondary" data-bs-toggle="modal">Return</button>
                <button type="submit" class="btn w-50 btn-primary">Sign Up</button>
            </div>
        </form> 
    </div>
    </div>
</div>