<div>
    <h1 class="heading">Category</h1>
    <?php
    include('./common/db.php');
    $query = 'SELECT * FROM category';
    $result = $conn->query($query);

    foreach ($result as $row) {
        $name = ucfirst($row['name']);  // Security measure
        $id = $row['id'];
        echo "<div class='question'>  <!-- Changed class to match CSS -->
                <h4><a href='?c-id=$id'>$name</a></h4>
            </div>";
    }
    ?>
</div>