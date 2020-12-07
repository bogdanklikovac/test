<?php require_once "../app/views/layout/header.php"?>

    <div class="col-md-4 mx-auto">
        <h1>Sign Up</h1>
        <form action="?url=users/create" method="POST">
            <div class="form-group">
                <label for="exampleInputUsername">Username</label>
                <input type="text" name="username" class="form-control" id="exampleInputEmail1"  placeholder="Enter username">
                <small id="usernamelHelp" class="form-text text-danger"><?= $data['errors']['username']?></small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-danger"><?= $data['errors']['email']?></small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                <small id="passwordlHelp" class="form-text text-danger"><?= $data['errors']['password']?></small>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

<?php require_once "../app/views/layout/footer.php"?>