<div class="container">
    <h1 class="heading text-center">Ask a Question </h1>
    <form action="./server/requests.php" method="post">


        <div class="col-6 offset-sm-3 margin-bottom-15">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Enter Question">
        </div>

        <div class="col-6 offset-sm-3 margin-bottom-15">
            <label for="description" class="form-label">Description</label>
            <textarea type="description" name="description" class="form-control" id="description" placeholder="Enter Description"></textarea>
        </div>
        <div class="col-6 offset-sm-3 margin-bottom-15">
            <label for="category">Category</label>
            <?php
            include('category.php');
            ?>
        </div>

        <div class="col-6 mt-2 offset-sm-3 margin-bottom-15">
            <button type="submit" name="ask" class="btn btn-primary">Ask A Question</button>

        </div>

    </form>

</div>