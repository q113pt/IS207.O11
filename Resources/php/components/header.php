<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/admin.css">
    <link rel="shortcut icon" href="../logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php include_once("dependencies.php")?>
  <title>8Clothes</title>
</head>
<body>
  <div class="flex page-container relative min-h-screen dark:bg-gray-800">
  <header class="dark:bg-gray-800 dark:shadow-none">
    <div id="header__logo" class="h-[100%] !flex items-center">       
      <div id="shadow"></div>
      <a href="index.php">
        <img src="./../logo3.png" class="box-shadow: 20px 3px 15px 13px #376796" alt="logo">
      </a>
    </div>
        <!-- <div class="sort w-full">
                <div class="sortHigh">
                    <button type="submit" id="sortHi">a-z</button>
                </div>   
                <div class="sortLow">
                    <button type="submit" id="sortLo">z-a</button>
                </div> 
              </div> -->
              
        <!-- <form action="index.php" class="searchBar" method="">
            <input class="dark:bg-gray-800 outline-none text-slate-900 dark:text-gray-100"  type="text" id="input" name="input" placeholder="Nhập sản phẩm cần tìm...">
            <div class="searchIcon">
            <button type="submit" name="submit" id="searchButton">
                    <i class="fa-solid fa-magnifying-glass dark:!text-gray-100"></i>
                </button>
            </div>
        </form> -->
    <div class="searchBar">
      <div class="searchIcon">
        <button type="submit" id="searchButton" onclick="search()">
          <i class="fa-solid fa-magnifying-glass dark:!text-gray-100"></i>
        </button>
      </div>
      <input class="dark:bg-gray-800 outline-none text-slate-900 dark:text-gray-100" type="text" id="input" name="input" value="" placeholder="Nhập sản phẩm cần tìm...">
    </div>
      <ul id="header__nav" class="!flex items-center">
        <?php 
            if(isset($_SESSION['valid']) && $_SESSION['valid'] === "admin@gmail.com"){
              session_unset();
            }  

            if(isset($_SESSION['username'])){
                echo '<i class="fa-regular fa-user"></i>';
                echo '<li style="padding: 0 10px;">' . $_SESSION['username'] . '</li>';
                // session_destroy();
            }?>  
        <li><a class="dark:!text-gray-100 dark:hover:!bg-indigo-600 " href="cart.php">GIỎ HÀNG</a></li>
          <!-- href="index.php" -->
        <?php
          if(isset($_SESSION['valid'])){
            echo '<li><a id="logOutBtn" class="dark:!text-gray-100 dark:hover:!bg-indigo-600" href="#">ĐĂNG XUẤT</a></li>';
          }
          else {
            echo '<li><a class="dark:!text-gray-100 dark:hover:!bg-indigo-600 "  href="./login.php">ĐĂNG NHẬP</a></li>';
          }?>
        <button
          id="theme-toggle"
          type="button"
          class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5"
        >
          <svg
            id="theme-toggle-light-icon"
            class="hidden w-5 h-5"
            fill="currentColor"
            viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"
            ></path>
          </svg>
          <svg
            id="theme-toggle-dark-icon"
            class="hidden w-5 h-5"
            fill="currentColor"
            viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
              fill-rule="evenodd"
              clip-rule="evenodd"
            ></path>
          </svg>
        </button>
      </ul>
  </header>
  <script>
  </script>