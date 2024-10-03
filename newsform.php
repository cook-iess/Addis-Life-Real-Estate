<?php
error_reporting(E_ALL); ini_set('display_errors', 1);
include("conn.php");

if (isset($_POST['submit']) && isset($_FILES['myimage']) && isset($_FILES['myvideo'])) {

    $title=$_POST['title'];
    $description=$_POST['description'];
    $passworduser=$_POST['password'];

    $password="2121";

    if($passworduser == $password){

    $imagename = $_FILES['myimage']['name'];
    $tmpname = $_FILES['myimage']['tmp_name'];
    $error = $_FILES['myimage']['error'];


    if ($error === 0) {
        $imageex = pathinfo($imagename, PATHINFO_EXTENSION);

        $imageexlc = strtolower($imageex);

        $allowedex = array('jpg', 'jpeg', 'png');

        if (in_array($imageexlc, $allowedex)) {
            $newimgname=uniqid("IMG-",true).'.'.$imageexlc;
            $imguploadpath='uploads/'.$newimgname;
            move_uploaded_file($tmpname, $imguploadpath);
        } else {
            echo "<h4>Image this Type not supported!</h4>";
        }
    }



    $videoname = $_FILES['myvideo']['name'];
    $tmpname1 = $_FILES['myvideo']['tmp_name'];
    $errorr = $_FILES['myvideo']['error'];

    if ($errorr === 0) {
        $videoex = pathinfo($videoname, PATHINFO_EXTENSION);

        $videoexlc = strtolower($videoex);

        $allowedexx = array('mp4', 'webm', 'avi', 'flv');

        if (in_array($videoexlc, $allowedexx)) {
            $newvidname=uniqid("video-",true).'.'.$videoexlc;
            $videouploadpath='uploads/'.$newvidname;
            move_uploaded_file($tmpname1, $videouploadpath);
        } else {
            echo "<h4>Video this Type not supported!</h4>";
        }

    }


    $insert = "INSERT INTO `new` (`counter`, `title`, `description`, `image`, `video`, `date`) 
    VALUES (NULL, \"$title\", \"$description\", \"$newimgname\", \"$newvidname\", current_timestamp())";
    $yes=mysqli_query($con, $insert);
    if ($yes) {
        echo '<script type="text/javascript">alert("Content Added Successfully!!!")</script>';
        header("Location: newsdisp.php");
    } else {
        echo '<script type="text/javascript">alert("Couldn\'t Add Content")</script>';
    }
}
else{
    echo '<script type="text/javascript">alert("Password Incorrect")</script>';
}


}



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="icon.css" />
  <link rel="stylesheet" href="animation.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/78405a3e6e.js" crossorigin="anonymous"></script>
  <title>Form</title>
</head>

<body class="font-normal box-content">
    <div class="md:w-[70%] w-[85%] bg-gray-300 mx-auto shadow-2xl">
        <div class="w-full">
            <img src="logo1.png" class="md:w-25 w-72 mb-3 mx-auto" alt="">
            <h2 class="text-center font-bold text-4xl text-gray-700">Post Daily</h2>

            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" class=" w-full p-10" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter your Title" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" cols="3" rows="5" placeholder="Enter Detailed Information" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="imgfile" class="form-label">Upload Your Image:</label>
                    <input class="form-control" type="file" id="imgfile" name="myimage" required>
                </div>
                <div class="mb-3">
                    <label for="vifile" class="form-label">Upload Your Videos:</label>
                    <input class="form-control" type="file" id="vidfile" name="myvideo" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="text" class="form-control" id="Password" name="password" placeholder="Enter Password" required>
                </div>
                <div class="mb-3 py-2">
                    <input type="submit" name="submit" value="Send" class="p-2 bg-gray-900 hover:bg-gray-600 duration-500 text-gray-100 rounded-xl px-3">
                    <input class="p-2 bg-gray-900 hover:bg-gray-600 text-gray-100 duration-500 rounded-xl px-3 inline" type="reset" name="clear" value="Clear">
                </div>
                <a href="newsdisp.php" class="text-center text-gray-700 hover:text-black duration-700 ">View Previously Posted?</a>
            </form>
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