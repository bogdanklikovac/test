<?php require_once "../app/views/layout/header.php"?>
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">

            <h2 class="mt-5">CITRUS systems</h2>
            <p class="lead">PHP Developer Test</p>
        </div>
    </div>
</div>

<?php
$comments = $data['comments'];
$products = $data['products'];
$errors = $data['errors'];
?>


<div class="container">
    <div class="row">
        <?php foreach ($products as $product): ?>
            <div class="col-sm" >
                <div class="card mb-4 box-shadow" style="width: 18rem;">
                    <img class="card-img-top" src="images/<?=$product['image']?>" alt="Card image cap">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal"><?=$product['title']?></h4>
                    </div>
                    <div class="card-body">
                        <p><?=substr($product['description'],0,95)?>...</p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="my-3 p-3 bg-white rounded shadow-sm">

        <h5 class="border-bottom border-gray pb-2 mb-0">Recent comments</h5>

        <?php foreach ($comments as $comment): ?>
        <div class="media text-muted pt-3">
            <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                <strong class="d-block text-gray-dark"><?= $comment['name']?></strong>
                <?= $comment['comment']?>
            </p>
        </div>
        <?php endforeach;?>

    </div>

    <div class="my-3 p-3 bg-white rounded shadow-sm">
        <h5 class="border-bottom border-gray pb-2 mb-0">Comment</h5>
        <div class="text-muted">
            <form action="?url=home/create" method="POST">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="">
                    <small id="passwordlHelp" class="form-text text-danger"><?= $data['errors']['name']?></small>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="">
                    <small id="passwordlHelp" class="form-text text-danger"><?= $data['errors']['email']?></small>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Comment</label>
                    <textarea class="form-control" name="comment" id="exampleFormControlTextarea1" rows="3"></textarea>
                    <small id="passwordlHelp" class="form-text text-danger"><?= $data['errors']['comment']?></small>
                </div>
                <button type="submit" class="btn btn-primary mb-2">Save comment</button>
            </form>
        </div>
    </div>


</div>



