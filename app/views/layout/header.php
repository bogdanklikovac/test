<html>
<head>
    <meta charset="UTF-8">
    <title>Test</title>
    <link rel="stylesheet" href="modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
    <script src="modules/jquery/dist/jquery.js"></script>
    <script src="modules/bootstrap/dist/js/bootstrap.js"></script>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="?url=home/index">Products</a>
                </li>
                <?php if(isset($data['logged']) && $data['logged'] == 1): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="?url=admin/index">Comments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?url=users/logout">Log Out</a>
                    </li>
                <?php else:?>
                    <li class="nav-item">
                        <a class="nav-link" href="?url=users/login">Log In</a>
                    </li>
                <?php endif; ?>
                <li class="nav-item">
                    <a class="nav-link" href="?url=users/register">Sign Up</a>
                </li>
            </ul>
        </div>
    </nav>