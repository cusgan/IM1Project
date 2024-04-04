<!-- Menu Item -->
<div class="modal fade" id="modalMenuItem" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <form method="post" action="api/login.php">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">NAME OF ITEM</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
                <img src="images\default-image.png" class="img-thumbnail" alt="name of item here">
                <p>[Item description]</p>

                <label for="variation" class="form-label">Variation</label>
                <select class="form-select" aria-label="variation">
                    <option selected>Choose variation...</option>
                    <!-- VARIATIONS -->
                    <option value="1">[Variation One]</option>
                    <option value="2">[Variation Two]</option>
                    <option value="3">[Variation Three]</option>
                </select>                
                <label for="quantity" class="form-label">Quantity</label>
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