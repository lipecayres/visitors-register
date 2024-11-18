<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "visitors_register_db";

// create connection
$connection = new mysqli($server, $username, $password, $dbname);


$id = "";
$fname = "";
$city = "";

$errorMessage = "";
$successMessage = "";

if( $_SERVER['REQUEST_METHOD'] == 'GET') {

    if(!isset($_GET['id'])) {
        header("location:php-classes/ass2/read.php");
        exit;
    }

    $id = $_GET["id"];

        $sql = "SELECT * FROM people WHERE id=$id";
        $result = $connection->query($sql);
        $row = $result->fetch_assoc();
    
        if(!$row) {
            header("location:php-classes/ass2/read.php");
            exit;
        }

        $fname = $row["fname"];
        $city = $row["city"];

        
    } 
    else {

        $id = $_POST["id"];
        $fname = $_POST["fname"];
        $city = $_POST["city"];

        do {
            if (empty($id) || empty($fname) || empty($city)) {
                $errorMessage = "All fields required";
                break;
            }
    
            // update client to database
            $sql = "UPDATE people SET fname = '$fname', city = '$city' WHERE id = $id ";
            $result = $connection->query($sql);
        
            if(!$result) {
                $errorMessage = "Invalid querry: " . $connection->error;
                break;
            }
    
    
            $fname = "";
            $city = "";
        
            $successMessage = "Client updated";
    
            header("location: read.php");
            exit;
    
        } while(false);
    };

    

?>

<?php
  require '../inc/header.php';
?>
    <div class="container my-5">
        <h2>New visitor</h2>

        <?php
        if(!empty($errorMessage)){
            echo "
            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>$errorMessage</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close' ></button>
            </div>
            ";
        }
        ?>
        <form action="" method="POST" autocomplete="off">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="row mb-3">
                <label class="com-sm-3 col-form-label"> Name </label>
                <div class="col-sm-6">
                    <input class="form-control" type="text" name="fname" value="<?php echo $fname; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="com-sm-3 col-form-label"> City </label>
                <div class="col-sm-6">
                    <input class="form-control" type="text" name="city" value="<?php echo $city; ?>" >
                </div>
            </div>

            <?php 
                if(!empty($successMessage)) {
                    echo "
                        <div class='row mb-3'>
                            <div class='offset-sm-3 col-sm-6'>
                                <div class='alert alert-success alert-dismissible fade show' role='alert'>
                                    <strong>$successMessage</strong>
                                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close' ></button>
                                </div>
                            </div>
                        </div>
                    ";
                }
            ?>

            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary" >Submit</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a href="read.php" class="btn btn-outline-primary" role="button">Cancel</a>
                </div>
        </form>

    </div>
<?php
  require '../inc/footer.php';
?>