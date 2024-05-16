<div
    class="row justify-content-center align-items-center g-2"
>    
    <div class="col">
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="images\default-image.png" class="img-thumbnail" alt="name of item here" style="height:100%; object-fit:cover;">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">[ITEM NAME]</h5>
                        <p class="card-text">[ITEM DESCRIPTION]</p>
                        <p class="card-text"><small class="text-muted"><b>₱[ITEM PRICE]</b> | [ITEM STOCK] in stock</small></p>
                    <a class="btn btn-secondary" href="#" data-bs-toggle="modal" data-bs-target="#modalUpdateItem[ITEMID]"> Update Details</a>
                    <a class="btn btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#modalDeleteItem[ITEMID]"> Delete Item</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<!-- Menu Item -->
<!-- <button class="btn btn-secondary">DELETE</button> -->
<div class="modal fade" id="modalMenuItem[ITEMID]" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <form method="post" action="api/login.php">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">[ITEM NAME]</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
                <img src="images\default-image.png" class="img-thumbnail" alt="name of item here" style = "width:30%;">
                <p>Description: <br>[ITEM DESCRIPTION]</p>
                <br>
                <p>Price: ₱[ITEM PRICE]</p>

                <!-- <label for="variation" class="form-label">Variation</label>
                <select class="form-select" aria-label="variation">
                    <option selected>Choose variation...</option>
                    <option value="1">[Variation One]</option>
                    <option value="2">[Variation Two]</option>
                    <option value="3">[Variation Three]</option>
                </select>                 -->
                <label for="quantity" class="form-label">Quantity ([ITEM STOCK] in stock)</label>
                <input type="number" class="form-control" id="input1" placeholder="Enter quantity...">
            </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add to Cart</button>
        </div>
    </form>
    </div>
    </div>
</div>

<!-- UPDATE Menu Item -->
    <div class="modal fade" id="modalUpdateItem[ITEMID]" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <form method="post" action="api/updateitem.php">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update Item Details</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    
                    <input type="hidden" name="menuid" value="[MENUID]">
                    <input type="hidden" name="itemid" value="[ITEMID]">
                    <!-- <img src="images\default-image.png" class="img-thumbnail" alt="name of item here" style = "width:30%;"> -->
                    <label for="addItemName" class="form-label">Item Name: </label>
                    <input type="text" name="editItemName" class="form-control" id="addItemName" aria-describedby="addItemName" value="[ITEM NAME]">
                    <label for="addItemDescription" class="form-label">Item Description: </label>
                    <input type="text" name="editDescription" class="form-control" id="addItemDescription" aria-describedby="addItemDescription" value="[ITEM DESCRIPTION]">
                    <label for="quantity" class="form-label">Quantity:</label>
                    <input type="number" class="form-control" name="editStock" id="input2" placeholder="Enter quantity..." value="[ITEM STOCK]">
                    <label for="price" class="form-label">Price: </label>
                    <input type="number" class="form-control" name="editPrice" id="input1" placeholder="Enter price..." value="[ITEM PRICE]">
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Confirm Changes</button>
            </div>
        </form>
        </div>
        </div>
    </div>

<!-- DELETE Menu Item -->
    <div class="modal fade" id="modalDeleteItem[ITEMID]" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
        <form method="post" action="api/deleteitem.php">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Item Deletion </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">                    
                    <input type="hidden" name="itemid" value="[ITEMID]">
                    <input type="hidden" name="itemname" value="[ITEM NAME]">
                    <p>Are you sure you want to delete <b>[ITEM NAME]</b>?</p>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Confirm Deletion</button>
            </div>
        </form>
        </div>
        </div>
    </div>