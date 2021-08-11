<?php 
    require "../db_connect.php";
    $output_query = "SELECT * FROM `dishes` WHERE 1;";
    $result = mysqli_query($connect, $output_query);
    // var_dump(mysqli_fetch_assoc($result)["dishID"]);
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
            # `dishID`, `name`, `price`, `description`, `image`
            function CreateFoodd($row) {
                return "
                <div class='col col-md-6 col-lg-3'>                
                    <div class='card h-100 overflow-box'>
                        <img src='img/{$row["image"]}' class='img-fluid rounded-start' alt='{$row["name"]}'>
                        <div class='card-body'>
                            <h5 class='card-title'>{$row["name"]}</small></h5>
                            <p class='card-text'>{$row["description"]}</p>
                            <p class='card-text fw-bold'>&euro;{$row["price"]}</p>
                        </div>
                        <div class='card-footer'>
                            <a class='card-text muted' href='remove.php?id={$row["dishID"]}'>Delete '{$row["name"]} from the menu</a>
                        </div>
                    </div>
                </div>                
                ";
            }

            echo '
            <h2 class="text-center mt-3 mt-md-4 mb-2 mb-mb-3">Main Courses</h2>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 g-xxl-5 px-2 px-md-4 pb-4 mx-auto">
            ';
            
            while ($row = mysqli_fetch_assoc($result)) echo CreateFoodd($row);
            
            echo '</div>';

        ?>

        </div>
    </div> <!-- END MAIN CONTAINER -->

    <?php include "footer.php"; ?>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>