<?php
error_reporting(E_ALL); ini_set('display_errors', 1);
include("conn.php");
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
    <script src="https://kit.fontawesome.com/78405a3e6e.js" crossorigin="anonymous"></script>
    <title>Displaying News Admin</title>
</head>

<body class="font-normal box-content">
    <div class="text-end p-3 px-5 text-lg text-gray-700 underline duration-700">
        <a href="newsform.php" class="hover:text-black">Post a New one?</a><br>
        <a href="newsdelete.php" class="hover:text-black">Delete a Post?</a><br>
        <a href="blogs.php" class="hover:text-black">Go to the main News Page</a>

    </div>
    <h1 class="text-4xl font-titleo font-bold text-center text-secondary">News display</h1>
    <div class="flex justify-start">
        <div class="w-[40%] h-1 bg-gradient-to-t from-sec to-transparent mx-auto"></div>
    </div>
    <div class="md:pt-10 pt-4">
        <?php
        $select = "select * from new";
        $rs = mysqli_query($con, $select);
        $count = mysqli_num_rows($rs);
        if ($count > 0) {
            while ($result = mysqli_fetch_assoc($rs)) {
        ?>
                <div class="md:flex justify-evenly md:mb-14 mb-10">
                    <div class="w-1/2 hidden md:block">
                        <video src="uploads/<?= $result['video'] ?>" class="w-[80%] mx-auto h-auto" controls></video>
                    </div>
                    <div class="md:w-1/2 md:p-0 p-4 items-center">
                        <div class="md:w-[90%]">
                        <h1 class="md:text-5xl text-4xl font-bold font-title text-gray-800 border-b-2 b0rder-gray-500 ">ID:<?php echo $result['counter'] ?></h2>
                            <h1 class="md:text-4xl text-3xl font-bold font-title text-gray-800 border-b-2 b0rder-gray-500 "><?php echo $result['title'] ?></h2>
                                <h3 class="p-3 pl-0 text-gray-800"><?php echo $result['description'] ?></h3>
                                <img src="uploads/<?= $result['image'] ?>" alt="whats new" class="w-full h-auto">
                                <p class="text-base text-gray-600 text-end">Uploaded on: <?php echo $result['date'] ?></p>
                    </div>
                    </div>
                    <div class="[100%] md:hidden block p-4">
                        <video src="uploads/<?= $result['video'] ?>" class="w-full h-auto" controls></video>
                    </div>
                </div>
        <?php
            }
        } else {
            echo "<h2>no records found</h2>";
        }
        ?>

    </div>
</body>

</html>

<?php
$con->close();
?>