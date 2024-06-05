<div class="modal fade" id="modalEditUser[USERID]" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <form method="post" action="api/adminquery.php">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit User #[USERID]'s Info</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
                <label class="form-label">First Name</label>
                <input type="username" name="adminUserFname" class="form-control" aria-describedby="ausernameHelp" value="[FIRST NAME]">
            </div>      
            <div class="mb-3">
                <label class="form-label">Last Name</label>
                <input type="username" name="adminUserLname" class="form-control" aria-describedby="ausernameHelp" value="[LAST NAME]">
            </div>      
            <div class="mb-3">
                <label class="form-label">Address</label>
                <input type="username" name="adminUserAddress" class="form-control" aria-describedby="ausernameHelp" value="[ADDRESS]">
            </div>      
            <div class="mb-3">
                <label class="form-label">Birthdate</label>
                <input type="username" name="adminUserBirthday" class="form-control" aria-describedby="ausernameHelp" value="[BIRTHDAY]">
            </div>      
            <div class="mb-3">
                <label class="form-label">Phone Number</label>
                <input type="username" name="adminUserPhone" class="form-control" aria-describedby="ausernameHelp" value="[PHONE]">
            </div>      
            <input type="hidden" name="adminUserID" value="[USERID]">
            <input type="hidden" name="adminQueryType" value="updateUser">
            <button type="submit" class="btn w-100 btn-secondary">Confirm Edit</button>
            <br><br>
        </div>
        <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Log In</button>
        </div> -->
    </form>
    </div>
    </div>
</div>