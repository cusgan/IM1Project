<!doctype html>
<html lang="en">
    <head>
        <title>Business Report</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <link rel="stylesheet" href="css/styles.css">
        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>        
        <?php 
        session_start();
        include_once 'includes/header.php';
        include_once 'api/connect.php';
        $bname = $_SESSION['bname'];
        $menuid = $_SESSION['menuid'];
         ?>
         
        <main>
            <?php require_once 'includes/login.php'; ?>
            <?php require_once 'includes/signup.php'; ?>
            <?php require_once('includes/signupbusiness.php'); ?>
            <?php
                                    $sql ="SELECT SUM(buyprice*qty) FROM tblMenuItem WHERE menuid='$menuid'";
                                    $result = mysqli_query($connection,$sql);
                                    $profits = mysqli_fetch_array($result)[0];
                                ?>
            <br>
            <div
                class="row justify-content-center align-items-center g-2"
            >
                <div class="col-1"></div>
                <div class="col"><h2><?php echo $bname;?> Report</h2><br>
                    <ul class="nav nav-pills nav-fill">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"  data-bs-toggle="pill" data-bs-target="#report1" href="#pills-home">Customer Demographics</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"  data-bs-toggle="pill" data-bs-target="#report2" href="#pills-profile">Item Report</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="pill" data-bs-target="#report3" href="#pills-contact">Order Quantity Report</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent"><br>
                        <!-- first tab -->
                        <div class="tab-pane fade show active" id="report1" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                            <h3>Items priced less than ₱30</h3>
                            <div
                                class="table-responsive"
                            >
                                <table
                                    class="table table-primary"
                                >
                                    <thead>
                                        <tr>
                                            <th scope="col">Item ID</th>
                                            <th scope="col">Item Name</th>
                                            <th scope="col">Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $items = array();
                                            $item=1;
                                            $count = 0;
                                            $item_res = mysqli_query($connection,"select itemid,itemname,buyprice from tblmenuitem where menuid='".$menuid."' AND buyprice<=30");
                                            while($item = mysqli_fetch_array($item_res)){
                                                echo "
                                                <tr class=\"\">
                                                    <td scope=\"row\">$item[0]</td>
                                                    <td>$item[1]</td>
                                                    <td>$item[2]</td>
                                                </tr>
                                                ";
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                        <!-- second tab -->
                        <div class="tab-pane fade" id="report2" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                            <h3>Items with more than 10 in stock</h3>
                            <div
                                class="table-responsive"
                            >
                                <table
                                    class="table table-primary"
                                >
                                    <thead>
                                        <tr>
                                            <th scope="col">Item ID</th>
                                            <th scope="col">Item Name</th>
                                            <th scope="col">Quantity</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $items = array();
                                            $item=1;
                                            $count = 0;
                                            $item_res = mysqli_query($connection,"select itemid,itemname,qty from tblmenuitem where menuid='".$menuid."' AND qty>=10");
                                            while($item = mysqli_fetch_array($item_res)){
                                                echo "
                                                <tr class=\"\">
                                                    <td scope=\"row\">$item[0]</td>
                                                    <td>$item[1]</td>
                                                    <td>$item[2]</td>
                                                </tr>
                                                ";
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <!-- third tab -->
                        <div class="tab-pane fade" id="report3" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                            <h3>Total Company Profits</h3>
                            <h5>
                                <?php echo "₱".$profits." - TOTAL PROFITS IN PESOS";?>
                            </h5>

                        </div>
                    </div>
                </div>
                <div class="col-1"></div>
            </div>
            

            
        </main>

        <footer>
            <!-- place footer here -->
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
