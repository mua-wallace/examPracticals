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
        <?php foreach ($query as $q) { ?>
            <div class="bg-dark p-5 rounded-lg text-white  text-center">
                <h1><?php echo $q['title']; ?></h1>
                <div class="d-flex mt-2 justify-content-center align-items-center">
                    <a href="edit.php?id=<?php echo $q['id']; ?>" class="btn btn-light btn-sm m-2">Edit</a>

                    <form method="POST">
                        <input type="text" hidden name="id" value="<?php echo $q['id']; ?>">
                        <button class="btn btn-danger btn-sm ml-2" name="delete">Delete</button>
                    </form>

                </div>

            </div>
            <p class="mt-5 border-left border-dark pl-3"><?php echo $q['content']; ?></p>
        <?php } ?>
    </div>







    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</body>

</html>