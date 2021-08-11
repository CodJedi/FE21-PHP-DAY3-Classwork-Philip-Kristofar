<?php 
    require "../db_connect.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- Own CSS File -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/home.css">

</head>
<body class="d-flex flex-column min-vh-100 bg-white"> <!-- Some stuff for footer handling-->

    <!-- START MAIN CONTAINER -->
    <div class="container-fluid bg-white p-0 m-0">

        <?php 
            include "navbar.php";
        ?>

        <!-- Form add stuff -->
        <div class="container mt-5 mb-5 mx-auto">
            <h2 class="text-center mb-3">Add new food to order for people</h2>
            <!-- `dishID`, `name`, `price`, `description`, `image` -->
            <form method="POST">
                <!-- Food name -->
                <div class="row g-3 mb-3">
                    <div class="col">
                        <div class="mb-3 form-floating">
                            <input name="name" id="FormAddFoodName" class="form-control" type="text" placeholder="Food name" />
                            <label for="FormAddFoodName" class="text-dark">Name</label>
                        </div>
                    </div>
                
                <!-- Food description -->
                <div class="row g-3 mb-3">
                    <div class="col">
                        <div class="mb-3 form-floating">
                            <textarea name="desc" id="FormAddFoodDescription" class="form-control" type="textarea" placeholder="Type your food description here (optional)."></textarea>
                            <label for="FormAddFoodDescription" class="text-dark">Description</label>
                        </div>
                    </div>
                </div>

                <!-- Food Price & image upload -->
                <div class="row g-3 mb-3 d-flex flex-row align-items-stretch align-self-stretch">
                    <div class="col-12 col-md-2">
                        <div class="mb-3 form-floating">
                            <input name="price" id="FormAddFoodPrice" class="form-control" type="number" placeholder="0" />
                            <label for="FormAddFoodPrice" class="text-dark">Price</label>
                        </div>
                    </div>

                    <div class="col-12 col-md-10">
                        <label for="FormAddFoodImgUpload" class="form-label"><small>Upload food image</small></label>
                        <input name="img" class="form-control form-control-sm" id="FormAddFoodImgUpload" type="file">
                    </div>

                </div>

                <!-- submit button -->
                <div class="text-center">
                    <button name="submit" type="submit" class="btn btn-primary btn-block">Add new food</button>
                </div>
                
            </form>
        </div>

        <?php 
            if (isset($_POST["submit"])) {
                $fname = $_POST["name"];
                $fdesc = $_POST["desc"];
                $fprice = $_POST["price"];
                $fimage = $_POST["img"];
                // default image value isn't taken in DB on empty string, so doing a workaround
                if (strlen($fimage) == 0) $fimage = "default_image.jpg";
                debug_to_console([$fname, $fdesc, $fprice, $fimage]);
        
                $update_query = "
                INSERT INTO `dishes`(`dishID`, `name`, `price`, `description`, `image`) 
                VALUES 
                (NULL , '$fname', '$fprice', '$fdesc' , '$fimage')
                ";
                $result = mysqli_query($connect, $update_query);
                if ($result) echo "<p class='text-center'>Food item has been added successfully <a href='index.php'>go back to home</a></p>"; 
            }
        
        ?>
    </div> <!-- END MAIN CONTAINER -->

    <?php include "footer.php"; ?>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>