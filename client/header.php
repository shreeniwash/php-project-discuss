<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a href="./"><img src="./public/logo.png" alt="" srcset=""></a>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="./">Home</a>

                <?php if (isset($_SESSION['user']) && isset($_SESSION['user']['username'])) { ?>
                    <a class="nav-link" href="./server/requests.php?logout=true">Logout(<?php echo $_SESSION['user']['username'] ?>)</a>
                    <a class="nav-link" href="?ask=true">Ask a Question</a>
                    <a class="nav-link" href="?u-id=<?php echo $_SESSION['user']['user_id'] ?>">My Question</a>

                <?php } else { ?>
                    <a class="nav-link" href="?login=true">Login</a>
                    <a class="nav-link" href="?signup=true">Signup</a>
                <?php } ?>



                <a class="nav-link" href="?latest=true">Latest Questions</a>
            </div>

        </div>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" name="search" placeholder="Search Questions...">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>
</nav>