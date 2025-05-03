<div class="container">
    <h5>Answers:</h5>
    <?php

    $query = "select * from answer where question_id=$qid";
    $result = $conn->query($query);
    foreach ($result as $row) {
        $answer = $row['answer'];

        echo "<div class='row'>
        <p class='answer-wrapper'>$answer</p>
        </div>";
    }

    ?>
</div>