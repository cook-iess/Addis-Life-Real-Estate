<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include("conn.php");

if (isset($_POST['delete'])) {

    $deleteid = $_POST['deleteid'];
    $passworduser = $_POST['password'];

    $password = "2121";

    if ($passworduser == $password) {
        $select = "SELECT * FROM new";
        $rs = mysqli_query($con, $select);
        $count = mysqli_num_rows($rs);
        if ($count > 0) {
            $sql = "SELECT * FROM new WHERE counter='$deleteid'";
            $result = mysqli_query($con, $sql);
            $count2 = mysqli_num_rows($result);
            if ($count2 > 0) {
                $results = mysqli_fetch_assoc($result);
                $vid = $results['video'];
                $img = $results['image'];
                $pathi = "uploads/$img";
                $pathv = "uploads/$vid";
                unlink($pathi);
                unlink($pathv);
                $query = "DELETE FROM new WHERE counter='$deleteid'";
                $result = mysqli_query($con, $query);
                if ($result) {
                    echo '<script type="text/javascript">alert("Post Deleted successfully!!!")</script>';
                } else {
                    echo '<script type="text/javascript">alert("Couldn\'t Delete Post")</script>';
                }
            } else { ?>
                <h4 class="text-danger text-bold p-2"><?php echo 'No Such Post With this ID num!!!' ?></h4>
            <?php
            }
        } else { ?>
            <h4 class="text-danger text-bold p-2"><?php echo 'News is Empty!!!' ?></h4>
        <?php
        }
    } else { ?>
        <h4 class="text-danger text-bold p-2"><?php echo 'Password not Correct!!' ?></h4>
<?php
    }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/78405a3e6e.js" crossorigin="anonymous"></script>
    <title>Delete News</title>
</head>

<body class="font-normal box-content">
    <div class="flex justify-end p-3 mt-10">
        <a href="newsdisp.php" class="text-gray-700 hover:text-black duration-700">View Previously Posted?</a>
    </div>
    <div class="md:w-[70%] w-[85%] bg-gray-300 mx-auto shadow-2xl flex items-center mt-4">
        <div class="w-full">
            <div class="bg-gray-300 w-[80%] mx-auto rounded-lg md:p-10 md:py-10 py-4 mb-10 flex items-center">
                <div>
                    <p class="text-3xl text-gray-800 font-bold text-center">Want to delete a Post?</p>
                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" class=" w-full md:p-10 p-0 pb-0 pt-0" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="delete" class="text-base text-bold text-gray-800">Enter ID Number Of The Post You Want To Delete:</label>
                            <input type="text" class="" id="delete" name="deleteid" placeholder="Enter ID" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="">Password:</label>
                            <input type="text" class="text-base text-bold text-gray-800" id="Password" name="password" placeholder="Enter Password" required>
                        </div>
                        <div class="mb-3 py-2 md:space-x-3">
                            <input type="submit" name="delete" value="Delete" class="p-2 bg-gray-900 hover:bg-gray-600 duration-500 text-gray-100 rounded-xl px-5">
                            <input class="p-2 bg-gray-900 hover:bg-gray-600 text-gray-100 duration-500 rounded-xl px-5 md:inline md:mt-0 mt-3 " type="reset" name="clear" value="Clear">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>

<?php
$con->close();
?>