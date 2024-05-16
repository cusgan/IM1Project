<!-- Signup Business -->
<div class="modal fade" id="modalSignupBusiness" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register Business</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="post" action="api/signupbusiness.php">
            <div class="modal-body">
                <div class="mb-3">
                <label for="signupEmailB" class="form-label">Email address</label>
                <input type="email" name="busMail" class="form-control" id="signupEmailB" aria-describedby="emailHelp">
                </div>
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
                <div class="mb-3">
                <label for="signupPasswordB" class="form-label">Password</label>
                <input type="password" name="busPass" class="form-control" id="signupPasswordB">
                </div>
                <!--<button type="submit" class="btn btn-primary">Submit</button>-->                  
            </div>
            <div class="modal-footer">
                <button type="button" data-bs-target="#modalLogin" class="btn w-25 btn-secondary" data-bs-toggle="modal">Return</button>
                <button type="submit" class="btn w-50 btn-primary">Register Business</button>
            </div>
        </form> 
    </div>
    </div>
</div>