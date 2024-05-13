<!doctype html>
<html lang="en">
    <head>
        <title>My Cart</title>
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
        require_once 'api/connect.php'; ?>
        <main>            
            <?php require_once 'includes/login.php'; ?>
            <?php require_once 'includes/signup.php'; ?>
            <?php require_once('includes/signupbusiness.php'); ?>

            <div
                class="row justify-content-center align-items-center g-2"
            >
                <div class="col-1"></div>
                <div class="col">
                    <br>
                    <h2>My Cart</h2>
                    <div
                        class="table-responsive"
                    >
                        <table
                            class="table table-striped table-hover table-borderless table-primary align-middle"
                        >
                            <thead class="table-light">
                                <tr>
                                    <th>Item Details</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <?php //require_once 'includes/cartitem.php'; 
                                    $userid = $_SESSION['userid'];
                                    $template = file_get_contents("includes/cartitem.php");
                                    $total = 0;
                                    $citem_res = mysqli_query($connection,"select cartitemid,tblcartitem.itemid,tblcartitem.userid,itemname,itemdesc,cartqty,buyprice,cartqty*buyprice from tblcartitem,tblmenuitem where userid='".$userid."' AND tblcartitem.itemid=tblmenuitem.itemid");
                                    while($citem = mysqli_fetch_array($citem_res)){
                                        $res = $template;
                                        $res = str_replace("[CARTITEMID]",$citem[0],$res);
                                        $res = str_replace("[ITEMID]",$citem[1],$res);
                                        $res = str_replace("[NAME]",$citem[3],$res);
                                        $res = str_replace("[DESCRIPTION]",$citem[4],$res);
                                        $res = str_replace("[QUANTITY]",$citem[5],$res);
                                        $res = str_replace("[PRICE]",number_format($citem[6],2),$res);
                                        $res = str_replace("[TOTAL]",number_format($citem[7],2),$res);
                                        $total += $citem[7];
                                        echo $res;
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>

                    <div
                        class="row justify-content-center align-items-center g-2"
                    >
                        <div class="col">
                            <h3 style="text-align: right;">Discount</h3> 
                        </div>
                        <div class="col" style="text-align: center;">
                            - ₱00.00 (00.00%)
                        </div>
                        <div class="col">
                            <h3 style="text-align: right;">Total Cost</h3>
                        </div>
                        <div class="col">
                            <h4 style="text-align: center;">₱ <?php echo number_format($total,2);?></h4>
                        </div>
                    </div>
                    <br>

                    <div
                        class="row g-2"
                    >
                        <div class="col">
                            <a
                                name=""
                                id=""
                                class="btn btn-outline-primary w-50"
                                href="#"
                                role="button"
                                >Continue browsing...</a
                            >
                        </div>
                        <div class="col d-md-flex justify-content-md-end">
                            <a
                                name=""
                                id=""
                                class="btn btn-primary w-50"
                                href="#"
                                role="button"
                                >Confirm Check Out</a
                            >
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
