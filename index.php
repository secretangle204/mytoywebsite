<!doctype html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</head>

<body>
    <a href="insert.php" class="text-decoration-none">
        <h3 class="text-success p-3 ">Add New</h3>
    </a>
    <div>
        <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" class="text-center">ID</th>
                    <th scope="col" class="text-center">Name </th>
                    <th scope="col" class="text-center">Price</th>
                    <th scope="col" class="text-center">Image</th>
                    <th scope="col" class="text-center">Details</th>
                    <th scope="col" class="text-center">Action</th>
                </tr>
            </thead>
            <?php
            include('productCRUD.php');
            $obj = new productCRUD();
            $list = $obj->readProduct();
            foreach ($list as $item) {
            ?>
            <tbody>
                <tr>

                    <td class="text-center"><?php echo $item["code"] ?> </td>
                    <td class="text-center"><?php echo $item["name"] ?> </td>
                    <td class="text-center"><?php echo $item["price"] ?> </td>
                    <td class="text-center"><img src="assets\<?= $item["img"] ?> " width="241" height="135" /></td>
                    <td class="text-center"><?php echo $item["details"] ?> </td>
                    <td class="text-center"><a href="#"><button type="button"
                                class="btn btn-secondary">Update</button></a> &nbsp; | &nbsp; <a href="#"><button
                                type="button" class="btn btn-danger">Delete</button></a> </td>
                    <td class="text-center"><a href="delete.php" onclick="return confirm('Delete ?');"><button
                                type="button" class="btn btn-secondary">Delete</button></a> &nbsp; | &nbsp; <a
                            href="#"><button type="button" class="btn btn-danger">Delete</button></a> </td>

                </tr>

            </tbody>
            <?php } ?>
        </table>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>

</html>