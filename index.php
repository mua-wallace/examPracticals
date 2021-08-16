<?php
include "logic.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Blog With Mysql</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <?php
        if (isset($_REQUEST['info'])) { ?>
            <?php
            if ($_REQUEST['info'] === "added") { ?>
                <div class="alert alert-success" role="alert">
                    Post successfully added
                </div>
            <?php } else   if ($_REQUEST['info'] === "updated") { ?>
                <div class="alert alert-success" role="alert">
                    Post successfully updated
                </div>

            <?php } else   if ($_REQUEST['info'] === "deleted") { ?>
                <div class="alert alert-danger" role="alert">
                    Post successfully deleted
                </div>
            <?php } ?>

        <?php } ?>
        <div class="text-center">
            <a href="create.php?img=image" class="btn btn-outline-secondary"> + Create a new post</a>
        </div>
        <div class="row">
            <?php foreach ($query as $q) { ?>
                <div class="col-4 d-flex justify-content-center align-items-center">
                    <div class="card text-white bg-dark mt-5">
                        <img src="" alt="" class="card-img-top mt--10" id="3" name="image1">
                        <div class="card-body" style="width : 18rem;">
                            <h5 class="card-title"><?php echo $q['title']; ?></h5>
                            <p class="card-text"><?php echo $q['content']; ?></p>
                            <a href="view.php?id=<?php echo $q['id']; ?>" class="btn btn-light">Read More <span class="text-danger">&rarr;</span></a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>







    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</body>

</html>