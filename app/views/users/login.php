<?php require_once "../app/views/layout/header.php"?>

    <div class="col-md-4 mx-auto">
        <h1>Log In</h1>
        <form action="?url=users/run" method="POST">
            <div class="form-group">
                <label for="">Username</label>
                <input type="text" name="username" class="form-control" id="username" aria-describedby="" placeholder="Enter username">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

<?php require_once "../app/views/layout/footer.php"?>