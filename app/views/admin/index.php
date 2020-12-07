<?php require_once "../app/views/layout/header.php"?>
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5">Admin Panel</h1>
            <p class="lead">Comments</p>
        </div>
    </div>
</div>

<?php
$comments = $data['res'];
?>
<div class="container">
    <ul class="list-group">
        <?php foreach ($comments as $comment):?>
        <li class="list-group-item">
            <?=$comment['name']?>
            <small class="text-success"><?= $comment['status'] == 1 ? '(Approved)':''?></small>
            <div class="float-right">
                <a type="button"  href="?url=admin/approveComment/<?=$comment['id']?>" class="btn btn-primary">Approve</a>
                <a type="button"  href="?url=admin/deleteComment/<?=$comment['id']?>" class="btn btn-danger">Delete</a>
            </div>
        </li>
        <?php endforeach;?>
    </ul>
</div>

<script src="js/script.js"></script>


