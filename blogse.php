<?php
error_reporting(E_ALL); ini_set('display_errors', 1);
include("conn.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Whether you are seeking your dream home, a profitable investment opportunity, or a strategic commercial space, we here at Addis Life Real Estate, are here to guide you every step of the way" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="icon.css" />
  <link rel="stylesheet" href="animation.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css">
  <script src="https://kit.fontawesome.com/78405a3e6e.js" crossorigin="anonymous"></script>
  <title>ዜና</title>
</head>

<body class="font-normal box-content">
  <!-- nav starts here -->

  <header>
    <nav class="bg-secondary text-secondary fixed md:hidden z-[9999]">
      <div class="pr-4">
        <div class="flex items-center h-14">
          <div class="flex justify-between w-screen items-center">
            <div class="flex items-center bg-white rounded-e-full pr-3 py-2 px-3">
              <img src="img/logo11.png" alt="logo" class="w-24 h-auto cursor-pointer" />
              <p class="text-secondary md:text-2xl font-bold mt-2 -ml-1 md:hidden lg:block">
              አዲስ ላይፍ
              </p>
            </div>
            <div class="pr-14 flex justify-center">
              <a href="#"><img src="img/ethio-removebg-preview.png" alt="ethioflag" class="w-7 h-6 mr-3 ml-3"></a>
              <a href="blogs.php"><img src="img/usa-removebg-preview.png" alt="usaflag" class="w-7 h-6"></a>
          </div>
          </div>
          <div class="flex md:hidden -ml-12">
            <button id="mobile-menu-button" type="button" class="bg-transparent inline-flex items-center justify-center p-1 rounded-md text-primary focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-offset-secondary" aria-controls="mobile-menu" aria-expanded="false">
              <span class="sr-only">Open main menu</span>
              <!-- Burger icon -->
              <svg class="burger-icon h-8 w-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
              </svg>
              <!-- Close button -->
              <svg class="close-button h-8 w-8 hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
              </svg>
            </button>
          </div>
        </div>
      </div>
      <div id="mobile-menu" class="md:hidden hidden flex justify-center text-primary bg-secondary">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
          <a href="indexe.html" class="block px-3 pb-2 text-lg font-extrabold text-center">መነሻ</a>
          <a href="apartmentse.html" class="block px-3 py-2 text-lg font-extrabold text-center">የእኛ አፓርታማዎች</a>
          <a href="blogse.php" class="block px-3 py-2 text-lg font-extrabold text-center border-b-2 border-pri">ዜና</a>
          <a href="aboute.html" class="block px-3 py-2 text-lg font-extrabold text-center">ስለ እኛ</a>
          <a href="contacte.html" class="block px-3 py-2 text-lg font-extrabold text-center">አግኙን</a>
        </div>
      </div>
    </nav>
    <nav class="bg-secondary hidden md:block font-normal font-bold fixed w-full z-[9999]">
      <div class="md:flex md:justify-between">
        <span class="flex justify-between items-center">
          <div class="flex bg-white rounded-e-full">
            <img src="img/logo11.png" alt="" class="w-28 h-16 p-2 pt-4 cursor-pointer" />
            <p class="md:text-xl font-titleo mt-6 -ml-2 md:hidden lg:block text-secondary pr-5">አዲስ ላይፍ</p>
          </div>
        </span>

        <div class="flex mr-6 h-16">
          <ul id="nav" class="absolute md:relative flex lg:text-lg md:text-sm font-bold text-primary items-center">
            <li class="">
              <a id="first" href="indexe.html" class="nav-link md:ml-6 md:hover:bg-white md:hover:p-5 md:hover:text-secondary rounded-b-2xl duration-500 md:mt-0">
              መነሻ
              </a>
            </li>
            <li class="">
              <a id="second" href="apartmentse.html" class="nav-link md:ml-6 md:hover:bg-white md:hover:p-5 md:hover:text-secondary rounded-b-2xl duration-500">
              የእኛ አፓርታማዎች
              </a>
            </li>
            <li class="">
              <a id="second" href="blogse.php" class="border-primary border-b-2 nav-link md:ml-6 md:hover:bg-white md:hover:p-5 md:hover:text-secondary duration-500">
              ዜና
              </a>
            </li>
            <li class="">
              <a id="third" href="aboute.html" class="nav-link md:ml-6 md:hover:bg-white md:hover:p-5 md:hover:text-secondary rounded-b-2xl duration-500">
              ስለ እኛ
              </a>
            </li>
            <li class="">
              <a id="fourth" href="contacte.html" class="nav-link active md:ml-6 md:mr-5 md:hover:bg-white md:hover:p-5 md:hover:text-secondary rounded-b-2xl duration-500">
              አግኙን
              </a>
            </li>
            <li>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="lg:w-4 lg:h-4 w-3 h-3 inline-block">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
              </svg>
              <a href="tel:+251930696969" class="pr-4 lg:text-base text-sm underline inline-block">+251930696969</a>
            </li>
            <li class="flex">
              <a href="#"><img src="img/ethio-removebg-preview.png" alt="ethioflag" class="lg:w-7 lg:h-6 w-5 h-4 mr-3 ml-3"></a>
              <a href="blogs.php"><img src="img/usa-removebg-preview.png" alt="usaflag" class="lg:w-7 lg:h-6 w-5 h-4"></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- nav ends here -->
  <h1 class="md:text-5xl text-3xl font-titleo font-bold text-center text-sec pt-28">ምን አዲስ ነገር አለ?</h1>
  <div class="flex justify-start">
    <div class="w-[40%] h-1 bg-gradient-to-t from-sec to-transparent mx-auto"></div>
  </div>
  <div class="md:pt-10 pt-4">
    <?php
    $select = "select * from newe";
    $rs = mysqli_query($con, $select);
    $count = mysqli_num_rows($rs);
    if ($count > 0) {
      while ($result = mysqli_fetch_assoc($rs)) {
    ?>
        <div class="md:flex justify-around md:pb-20 pb-10">
          <div class="w-1/2 hidden md:block">
            <video src="upload/<?= $result['video'] ?>" class="w-[80%] mx-auto h-auto rounded-2xl" controls></video>
          </div>
          <div class="md:w-1/2 md:p-0 mr-4 p-4 items-center">
            <div class="md:w-[90%]">
            <h1 class="md:text-5xl text-3xl text-center md:text-start font-bold font-title text-gray-800 border-b-2 border-gray-500 pb-1"><?php echo $result['title'] ?></h2>
              <h3 class="p-3 pl-0 text-gray-800"><?php echo $result['description'] ?></h3>
              <img src="upload/<?= $result['image'] ?>" alt="whats new" class="w-full h-auto rounded-2xl hover:scale-110 duration-700">
              <p class="text-base text-gray-600 text-end">የተለቀቀው በ፡ <?php echo $result['date'] ?></p>
          </div>
          </div>
          <div class="[100%] md:hidden block p-4">
            <video src="upload/<?= $result['video'] ?>" class="w-full h-auto rounded-2xl " controls></video>
          </div>
        </div>
    <?php
      }
    } else {
      echo "<h2 class='text-center text-3xl font-bold mb-5 text-blue-800'>ምንም መዝገቦች አልተገኙም።</h2>";
    }
    ?>
  </div>

        <!-- footer starts -->

        <footer class="font-normal foot bg-sec pt-4 box-border">
            <div class="grid grid-cols-1 grid-rows-4
                md:flex md:justify-evenly mb-4">
                <div class="col-span-1 row-span-1 
                  flex-col items-center ">
                    <img class=" mx-auto mt-3 w-40 md:pl-5 md:w-52 lg:w-45" src="img/logo.png" alt="logo" />
                    <div class="flex justify-center mx-auto">
                        <p class="text-pri font-bold text-2xl ml-2">አዲስ</p>
                        <p class="text-white font-bold ml-2 text-2xl ">ላይፍ</p>
                    </div>
                </div>
                <ul class="relative col-span-1 row-span-1 md:mx-auto mt-2 pl-5 md:pl-0 md:pt-8 
                md:flex-col md:justify-center">
                    <li class="font-bold">
                        <h1 class="text-2xl font-medium text-pri underline mb-1">
                            ፈጣን አገናኞች
                        </h1>
                    </li>
                    <li class="absolute duration-700 hover:text-xl font-normal mb-3"><a href="indexe.html"
                            class="text-white no-underline hover:text-pri">መነሻ</a></li>
                    <li class="absolute mt-4 duration-700 hover:text-xl mb-3"><a href="apartmentse.html"
                            class="text-white no-underline hover:text-pri">አፓርታማዎች
                    </li>
                    <li class="absolute mt-9  duration-700 hover:text-xl mb-3"><a href="blogse.php"
                            class="text-white no-underline hover:text-pri">ዜና</a></li>
                    <li class="absolute mt-14  duration-700 hover:text-xl mb-3"><a href="aboute.html"
                            class="text-white no-underline hover:text-pri">ስለ እኛ</a></li>
                    <li class="absolute mt-16 pt-3 duration-700 hover:text-xl mb-3"><a href="contacte.html"
                            class="text-white no-underline hover:text-pri">አግኙን</a></li>
                </ul>

                <ul class="relative col-span-1 row-span-1 md:mx-auto mt-2 pl-5 md:pl-0 md:pt-8
                md:flex-col md:justify-center">
                    <li class="font-bold">
                        <h1 class="text-2xl font-medium text-pri underline mb-1">
                            አግኙን
                        </h1>
                    </li>
                    <li class="absolute duration-700 hover:text-xl hover:text-pri"><a class="text-white no-underline hover:text-pri duration-700"
                            href="tel:+251930696969">+251930696969</a>
                    </li>
                    <li class="absolute mt-6 duration-700 hover:text-xl hover:text-pri"><a
                            class="text-white no-underline hover:text-pri duration-700"
                            href="tel:+251930656565">+251930656565</a></a>
                    </li>
                    <li class="absolute mt-12"><a class="duration-700 text-white hover:text-pri no-underline"
                            href="mailto:addisliferealestateinfo@gmail.com">addisliferealestateinfo@gmail.com</a></li>
                </ul>

                <ul class="col-span-1 row-span-1 md:mx-auto mt-2 pl-5 md:pl-0 md:pt-8
                 md:flex-col md:justify-center">
                    <li class="font-bold">
                        <h1 class="text-2xl font-medium text-pri underline mb-1">
                            አድራሻ
                        </h1>
                    </li>
                    <li class=""><p class="text-white no-underline">ከአፍሪካ ህብረት ዋና መሥሪያ ቤት
                            <br>ፊት ለፊት
                            አዲስ አበባ፣<br>
                            ኢትዮጵያ</p></li>
                </ul>
            </div>

            <!--end of the first part of footer like quick link contact us etc...-->

            <!-- horizontal breaker of footer starts here-->

            <div class="flex justify-center mb-4 md:mb-8 md:mt-10 mt-2">
                <div class="w-3/4 h-1 bg-gradient-to-t from-sec to-white rounded-full"></div>
            </div>

            <!-- horizontal breaker of footer ends here-->

            <!-- social media icons are found here -->
        <div class="md:flex justify-center text-white">
            <div class="flex md:justify-normal justify-center">
                <div
                    class="flex items-center justify-center h-7 md:h-8 w-7 md:w-8 hover:w-9 hover:h-9 m-3 border-2 border-white rounded-full icon icon1">
                    <a href="tel:+251930696969"><i class="fa-solid fa-phone "></i></a>
                </div>
                <div
                    class="flex items-center justify-center h-7 md:h-8 w-7 md:w-8  hover:w-9  hover:h-9 m-3 rounded-full icon icon2">
                    <a href="https://www.facebook.com/addisliferealestate/"><i class="fa-brands fa-facebook "></i></a>
                </div>
                <div
                    class="flex items-center justify-center h-7 md:h-8 w-7 md:w-8  hover:w-9  hover:h-9 m-3 border-2 border-white rounded-full icon icon3">
                    <a href="https://www.tiktok.com/@addislifereal.e?_t=8gjVYwHZVig&_r=1"><i
                            class="fa-brands fa-tiktok "></i></a>
                </div>
                <div
                    class="flex items-center justify-center h-7 md:h-8 w-7 md:w-8  hover:w-9  hover:h-9 m-3 border-2 border-white rounded-full icon icon4">
                    <a href="https://instagram.com/addislifereal.e?igshid=OGQ5ZDc2ODk2ZA%3D%3D&utm_source=qr"><i
                            class="fa-brands fa-instagram"></i></a>
                </div>
                <div
                    class="flex items-center justify-center h-7 md:h-8 w-7 md:w-8  hover:w-9  hover:h-9 m-3 border-2 border-white rounded-full icon icon5">
                    <a href="mailto:addisliferealestateinfo@gmail.com"><i class="fa-regular fa-envelope"></i></a>
                </div>
            </div>

            <div class="flex md:justify-normal justify-center">
                <div
                    class="flex items-center justify-center h-7 md:h-8 w-7 md:w-8  hover:w-9  hover:h-9 m-3 border-2 border-white rounded-full icon icon6">
                    <a href="https://www.linkedin.com/in/addisliferealestate/"><i class="fa-brands fa-linkedin"></i></a>
                </div>
                <div
                    class="flex items-center justify-center h-7 md:h-8 w-7 md:w-8  hover:w-9  hover:h-9 m-3 border-2 border-white rounded-full icon icon7">
                    <a href="https://t.me/+UB_SxqX2gShmMzdk"><i class="fa-brands fa-telegram"></i></a>
                </div>
                <div
                    class="flex items-center justify-center h-7 md:h-8 w-7 md:w-8  hover:w-9  hover:h-9 m-3 border-2 border-white rounded-full icon icon8">
                    <a href="https://chat.whatsapp.com/KLEr4VCltBDB3t7DxcFXCZ"><i class="fa-brands fa-whatsapp"></i></a>
                </div>
            </div>
        </div>

            <!-- social media icons ends here -->

            <!-- copyright notifier starts here -->

            <div class="flex w-full justify-center">
                <p class=" text-white text-xs md:text-base">
                    &copy;የቅጂ መብት. መብቱ የተጠበቀ</p>
            </div>

            <!-- copyright notifier starts here -->

            <!-- go up button starts here -->

            <a href="#" class="flex justify-end pr-4 pb-2 md:pt-0  lg:mt-0 text-white">
                <div
                    class="p-2 border border-white rounded-full text-xl flex justify-end hover:bg-white hover:text-pri font-bold hover:scale-110 duration-700">
                    <svg class="w-5 h-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5L12 3m0 0l7.5 7.5M12 3v18" />
                    </svg>
                </div>
            </a>

            <!-- go up button starts here -->

        </footer>

        <!-- footer ends -->

        <!-- powered by starts here -->
        <div class="flex md:flex-row justify-between items-center bg-gray-100 w-full md:px-4 text-gray-800">
            <div class="font-bold flex items-center md:text-base text-sm">
                የተጎላበተው በ
                <div class="text-orange-400 flex md:text-base text-sm">
                    <span>
                        <img class="w-3 pt-1 ml-2" src="img/E2N-2.png" alt="E2N LOGO" />
                    </span>
                    2N
                </div>
            </div>
            <a class="hover:text-orange-400 text-gray-800 no-underline font-bold pr-2 text-sm md:text-base"
                href="tg://resolve?domain=E2NwebDesign">
                ከእኛ ጋር ይገናኙ
            </a>
        </div>

        <!-- powered by ends here -->

  <script>
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    mobileMenuButton.addEventListener('click', () => {
      const expanded = mobileMenuButton.getAttribute('aria-expanded') === 'true' || false;
      mobileMenuButton.setAttribute('aria-expanded', !expanded);
      mobileMenu.classList.toggle('hidden', expanded);

      // Toggle the burger icon and close button
      const burgerIcon = mobileMenuButton.querySelector('.burger-icon');
      const closeButton = mobileMenuButton.querySelector('.close-button');
      burgerIcon.classList.toggle('hidden', !expanded);
      closeButton.classList.toggle('hidden', expanded);
    });
  </script>


  <script src="script.js"></script>
  <script>
    const btn = document.querySelector('.btn1');
    btn.onmousemove = function(e) {
      const x = e.pageX - btn.offsetLeft;
      const y = e.pageY - btn.offsetTop;

      btn.style.setProperty('--x', x + 'px');
      btn.style.setProperty('--y', y + 'px');
    }
  </script>
</body>

</html>

<?php
$con->close();
?>