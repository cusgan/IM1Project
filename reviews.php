
<?php require_once 'includes/head.php'; ?>

<!-- individual review -->
<div class="card">
  <div class="card-body">
    <h5 class="card-title">4 stars</h5>
    <h6 class="card-title">Username</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>

<!-- Button trigger modal sample lang not for real use -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- create review modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Leave a Review</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div
            class="row justify-content-center align-items-center g-2"
        >
            <div class="col">
                <label for="rating" class="form-label">My Rating:</label>
            </div>
            <div class="col">
                <input type="number" min="0" max="5" step="0.5" class="form-control" name="rating" id="input2" placeholder="Enter rating..." value="[]">
            </div>
        </div>
        <label for="comment" class="form-label">Comment: </label>
        <input type="text" name="comment" class="form-control" id="addItemName" aria-describedby="addItemName" placeholder="How was your experience?" value="">
                    
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Post Review</button>
    </div>
    </div>
  </div>
</div>