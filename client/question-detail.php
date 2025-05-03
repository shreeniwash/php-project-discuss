<div class="container">
    <h1 class="text-center">Question</h1>
    <div class="row">
        <div class="col-8">
            <?php
            include('./common/db.php');
            $query = " select * from question where id=$qid";
            $result = $conn->query($query);
            $row = $result->fetch_assoc();
            $cid = $row['category_id'];
            echo "<h4 class='question-title'> Question  : " . $row['title'] . "</h4>
    <p class='question-desc'>" . $row['description'], "</p>";
            include('./client/answers.php');
            ?>
            <form action="./server/requests.php" method="post">
                <textarea class="form-control " name="answer" placeholder="your answer..."></textarea>
                <input type="hidden" name="question_id" value="<?php echo $qid ?>">
                <button class="btn btn-primary mt-3">Write Your answer</button>
            </form>
        </div>
        <div class="col-4">
            <?php
            $categoryQuery = "select name from category where id=$cid";
            $categoryResult = $conn->query($categoryQuery);
            $categoryRow = $categoryResult->fetch_assoc();
            echo "<h1>" . ucfirst($categoryRow['name']) . "</h1>";


            $query = "select * from question where category_id=$cid and id!=$qid";
            $result = $conn->query($query);
            foreach ($result as $row) {
                $id = $row['id'];
                $title = $row['title'];
                echo "<div class='question'>
                <h4><a href='?q-id=$id'>$title</a></h4>
                </div>";
            }
            ?>
        </div>
    </div>

</div>