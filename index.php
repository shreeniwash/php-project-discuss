<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discuss</title>
    <link rel="stylesheet" href="./public/style.css">
    <?php include('./client/commonFiles.php') ?>
</head>

<body>
    <?php
    session_start();
    include('./client/header.php');

    if (isset($_GET['signup']) && (!isset($_SESSION['user']) || !isset($_SESSION['user']['username']))) {
        include('./client/signup.php');
    } elseif (isset($_GET['login']) && (!isset($_SESSION['user']) || !isset($_SESSION['user']['username']))) {
        include('./client/login.php');
    } elseif (isset($_GET['ask'])) {
        include('./client/ask.php');
    } elseif (isset($_GET['q-id'])) {
        $qid = $_GET['q-id'];
        include('./client/question-detail.php');
    } else if (isset($_GET['c-id'])) {
        $cid = $_GET['c-id'];
        include('./client/question.php');
    } else if (isset($_GET['u-id'])) {
        $uid = $_GET['u-id'];
        include('./client/question.php');
    } else if (isset($_GET['latest'])) {
        include('./client/question.php');
    }else if (isset($_GET['search'])) {
        $search=$_GET['search'];
        include('./client/question.php');
    }
     else {
        include('./client/question.php');
    }





    ?>
</body>

</html>