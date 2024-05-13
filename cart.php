<!doctype html>
<html lang="en">
    
    <?php require_once 'includes/head.php'; ?>

    <body>
        <?php include_once 'includes/header.php'; ?>
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
                                <tr
                                    class="table-primary"
                                >
                                    <td scope="row">Item Name</td>
                                    <td class="w-25">                                        
                                        <input type="number" class="form-control w-50" name="inptStock" id="input2" placeholder="Qty.">
                                    </td>
                                    <td>₱00.00</td>
                                    <td>₱00.00</td>
                                </tr>
                                <tr
                                    class="table-primary"
                                >
                                    <td scope="row">Item Name</td>
                                    <td class="w-25">                                        
                                        <input type="number" class="form-control w-50" name="inptStock" id="input2" placeholder="Qty.">
                                    </td>
                                    <td>₱00.00</td>
                                    <td>₱00.00</td>
                                </tr>
                                <tr
                                    class="table-primary"
                                >
                                    <td scope="row">Item Name</td>
                                    <td class="w-25">                                        
                                        <input type="number" class="form-control w-50" name="inptStock" id="input2" placeholder="Qty.">
                                    </td>
                                    <td>₱00.00</td>
                                    <td>₱00.00</td>
                                </tr>
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
                            <h4 style="text-align: center;">₱00.00</h4>
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
