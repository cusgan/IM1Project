<!doctype html>
<html lang="en">
    
    <?php require_once 'includes/head.php'; ?>
    <head>
        <style>
            
            .nav.tabletab {
                background-color: #CC222A !important;
                border-color: #CC222A;
                color: #F9D802;
            }
        </style>
    </head>
    

    <body>        
        <?php 
        // session_start();
        include_once('api/connect.php');
        include_once 'includes/header.php'; ?>
        <main>
            <?php require_once 'includes/login.php'; ?>
            <?php require_once 'includes/signup.php'; ?>
            <?php require_once('includes/signupbusiness.php'); 
                                        require_once("api/admin.php");?>
            <?php
            ?>
            <br>
            <div class="row justify-content-center align-items-center g-2">
                <div class="col-1"></div>
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <h2>Administrator Overview</h2>
                        </div>
                        <div class="col-3">
                            <a name="" id="btnReturnToBusiness" class="btn btn-secondary" href="business.php" "button">Return to my Business Page</a>
                         </div>
                    </div><br>
                    <ul class="nav nav-pills nav-fill">
                        <li class="nav-item">
                            <a class="nav-link active tabletab" aria-current="page" data-bs-toggle="pill" data-bs-target="#report1" href="#pills-home">Users</a>
                        </li>
                        <li class="nav-item tabletab">
                            <a class="nav-link" data-bs-toggle="pill" data-bs-target="#report2" href="#pills-profile">Businesses</a>
                        </li>
                        <li class="nav-item tabletab">
                            <a class="nav-link" data-bs-toggle="pill" data-bs-target="#report3" href="#pills-contact">Reviews</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent"><br>
                        <!-- first tab -->
                        <div class="tab-pane fade show active" id="report1" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                            <h3>Manage Users</h3>
                            <div
                                class="table-responsive"
                            >
                                <table
                                    class="table table-striped"
                                >
                                    <thead>
                                        <tr>
                                            <th scope="col">User ID</th>
                                            <th scope="col">First Name</th>
                                            <th scope="col">Last Name</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">Birthdate</th>
                                            <th scope="col">Deleted</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $item = 1;
                                            $item_res = mysqli_query($connection,"SELECT * FROM tbluser ORDER BY userid ASC");
                                            while($item = mysqli_fetch_array($item_res)){
                                                $isdel = "Active";
                                                if($item[6]) $isdel="Deleted";
                                                $delbtn = "deleteUser";
                                                if($item[6]) $delbtn="restoreUser";
                                                $deltxt = "Delete";
                                                if($item[6]) $deltxt="Restore";
                                                echo "<tr>
                                                        <td scope=\"row\">#$item[0]</td>
                                                        <td>$item[2]</td>
                                                        <td>$item[3]</td>
                                                        <td>$item[4]</td>
                                                        <td>$item[5]</td>
                                                        <td>$isdel</td>
                                                        <td class=\"col\">
                                                            <form method=\"post\" action=\"api/adminquery.php\">
                                                            <a class=\"btn btn-secondary\" data-bs-toggle=\"modal\" data-bs-target=\"#modalEditUser$item[0]\" >Edit</a>
                                                                <input type=\"hidden\" name=\"adminUserID\" value=\"$item[0]\">
                                                                <input type=\"hidden\" name=\"adminQueryType\" value=\"$delbtn\">
                                                                <button type=\"submit\" class=\"btn btn-primary\">$deltxt</button>
                                                            </form>
                                                        </td>
                                                    </tr>";
                                                editUserModal($item[0], $item[2], $item[3], $item[4], $item[5], $item[6], $item[7]);
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <br>

                            
                            <br>

                            
                            
                        </div>
                        <!-- second tab -->
                        <div class="tab-pane fade" id="report2" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                        <h3>Manage Businesses</h3>
                            <div
                                class="table-responsive"
                            >
                                <table
                                    class="table table-striped"
                                >
                                    <thead>
                                        <tr>
                                            <th scope="col">Business ID</th>
                                            <th scope="col">Business Name</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">Deleted</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $item = 1;
                                            $item_res = mysqli_query($connection,"select * from tblbusiness");
                                            while($item = mysqli_fetch_array($item_res)){
                                                $isdel = "Active";
                                                if($item[5]) $isdel="Deleted";
                                                echo "<tr>
                                                        <td scope=\"row\">#$item[0]</td>
                                                        <td>$item[2]</td>
                                                        <td>$item[3]</td>
                                                        <td>$item[4]</td>
                                                        <td>$isdel</td>
                                                        <td>edit</td>
                                                    </tr>";
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- third tab -->
                        <div class="tab-pane fade" id="report3" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                        <h3>Manage Menu Items</h3>
                            <div
                                class="table-responsive"
                            >
                                <table
                                    class="table table-striped"
                                >
                                    <thead>
                                        <tr>
                                            <th scope="col">Total Assets</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <td>ass</td>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-1"></div>
                
                
            </div>
            
            
            
        </main>

        <footer>
            
            <?php include_once 'includes/footer.php'; ?>
        </footer>

        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
