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
        <?php include_once 'includes/header.php'; ?>
        <main>
            <?php require_once 'includes/login.php'; ?>
            <?php require_once 'includes/signup.php'; ?>
            <?php require_once('includes/signupbusiness.php'); ?>

            <br>
            <div
                class="row justify-content-center align-items-center g-2"
            >
                <div class="col-1"></div>
                <div class="col"><h2>[BUSINESS NAME] Report</h2><br>
                    <ul class="nav nav-pills nav-fill">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#pills-home">Customer Demographics</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#pills-profile">Item Report</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#pills-contact">Order Quantity Report</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent"><br>
                        <!-- first tab -->
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                            <h3>Customers from Cebu City</h3>
                            <div
                                class="table-responsive"
                            >
                                <table
                                    class="table table-primary"
                                >
                                    <thead>
                                        <tr>
                                            <th scope="col">Customer Account ID</th>
                                            <th scope="col">Customer Name</th>
                                            <th scope="col">First Name</th>
                                            <th scope="col">Last Name</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">Birth Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="">
                                            <td scope="row">R1C1</td>
                                            <td>R1C2</td>
                                            <td>R1C3</td>
                                            <td>R1C3</td>
                                            <td>R1C3</td>
                                            <td>R1C3</td>
                                        </tr>
                                        <tr class="">
                                            <td scope="row">Item</td>
                                            <td>Item</td>
                                            <td>Item</td>
                                            <td>Item</td>
                                            <td>Item</td>
                                            <td>Item</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                        <!-- second tab -->
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                            <h3>Customers that have bought Item Name</h3>
                            <div
                                class="table-responsive"
                            >
                                <table
                                    class="table table-primary"
                                >
                                    <thead>
                                        <tr>
                                            <th scope="col">Customer Account ID</th>
                                            <th scope="col">Customer Name</th>
                                            <th scope="col">First Name</th>
                                            <th scope="col">Last Name</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">Birth Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="">
                                            <td scope="row">R1C1</td>
                                            <td>R1C2</td>
                                            <td>R1C3</td>
                                            <td>R1C3</td>
                                            <td>R1C3</td>
                                            <td>R1C3</td>
                                        </tr>
                                        <tr class="">
                                            <td scope="row">Item</td>
                                            <td>Item</td>
                                            <td>Item</td>
                                            <td>Item</td>
                                            <td>Item</td>
                                            <td>Item</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <!-- third tab -->
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                            <h3>No. of Customers that have bought Item Name</h3>
                            <div
                                class="table-responsive"
                            >
                                <table
                                    class="table table-primary"
                                >
                                    <thead>
                                        <tr>
                                            <th scope="col">Customer Account ID</th>
                                            <th scope="col">Customer Name</th>
                                            <th scope="col">First Name</th>
                                            <th scope="col">Last Name</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">Birth Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="">
                                            <td scope="row">R1C1</td>
                                            <td>R1C2</td>
                                            <td>R1C3</td>
                                            <td>R1C3</td>
                                            <td>R1C3</td>
                                            <td>R1C3</td>
                                        </tr>
                                        <tr class="">
                                            <td scope="row">Item</td>
                                            <td>Item</td>
                                            <td>Item</td>
                                            <td>Item</td>
                                            <td>Item</td>
                                            <td>Item</td>
                                        </tr>
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
