<form class="offset-sm-3 col-6 mt-4" method="post" action="./server/requests.php">
    <h1 class="text-center">Signup</h1>
    <div class="mb-3">
        <label for="username" class="form-label">User Name</label>
        <input type="text" name="username"  class="form-control" id="username">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email"  class="form-control" id="email">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password"  class="form-control" id="password">
    </div>
    <div class="mb-3">
        <label for="address" class="form-label">Address</label>
        <input type="text" name="address"  class="form-control" id="address">
    </div>
    <button type="submit" name="signup"  class="btn btn-primary">Signup</button>
</form>