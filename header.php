<?php
  $URL = "http://";
$DIR = "/inoxium-tubi/"; 
$URL .= $_SERVER['HTTP_HOST'].$DIR; //. $_SERVER['REQUEST_URI'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo $URL ?>assests/css/output.css">
  <link rel="stylesheet" href="<?php echo $URL ?>assests/css/hamburger.css">
  <link rel="stylesheet" href="<?php echo $URL ?>assests/css/global.css">
  <script src="<?php echo $URL ?>assests/js/navigation.js" defer></script>
  <script defer src="<?php echo $URL ?>assests/js/active-page.js"></script>
  <title>Stainless Steel Stockists UAE-Pipes & Tubes-Stainless Steel Dubai</title>
</head>

<body class="container mx-auto">
  <header class="mb-4">
    <div class="relative flex justify-between items-center">
      <div class="logo">
        <a href="./">
          <img class="w-64 md:w-auto" src="<?php echo $URL ?>logo.jpg" alt="Mideastmetal logo">
        </a>
      </div>
      <button class="mobile-nav-toggle" aria-controls="primary-navigation" style="z-index: 100">
        <span class="sr-only" aria-expanded="false">Menu</span>
      </button>
      <div class="hidden xl:block">
        <div>
          <ul data-visible="false" class="flex items-center gap-3 justify-end">
            <li>
              <a href="tel:+97148862992">
                <img class="inline-block w-4 mb-1" src="<?php echo $URL ?>assests/imgs/icons/phone-icon.svg">
                +971-4-8862992
              </a>
            </li>
            <li>
              <a href="mailto:info@mideastmetal.com">
                <img class="inline-block w-4 mb-1"
                  src="<?php echo $URL ?>assests/imgs/icons/envelope-icon.svg">
                info@mideastmetal.com
              </a>
            </li>
            <li>
              <a href="https://www.facebook.com/mideastmetal" target="_blank">
                <img class="w-4" src="<?php echo $URL ?>assests/imgs/icons/facebook-icon.svg">
              </a>
            </li>
            <li>
              <a href="https://twitter.com/mideastmetal" target="_blank">
                <img class="w-4" src="<?php echo $URL ?>assests/imgs/icons/twitter-icon.svg">
              </a>
            </li>
          </ul>
        </div>
        <div class="xl:flex items-center gap-4 md:block">
          <a href="<?php echo $URL ?>tube-mill.php">
            <img src="<?php echo $URL ?>inoxium.png" alt="inoxium logo">
          </a>
          <ul class="flex divide-x lg:text-sm xl:text-base">
            <li class="border-indigo-500 px-2">
              <a href="<?php echo $URL ?>photo-gallery.php">
                Photo Gallery
              </a>
            </li>
            <li class="border-indigo-500 px-2">
              <a href="<?php echo $URL ?>video-gallery.php">
                Video Gallery
              </a>
            </li>
            <li class="border-indigo-500 pl-2">
              <a href="<?php echo $URL ?>contact-us.php">
                Contact Us
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <nav class="header-nav">
      <ul class="flex lg:divide-x > * primary-navigation" data-visible="false" style="z-index: 9">
        <li>
          <a href="<?php echo $URL ?>">
            Home
          </a>
        </li>
        <li>
          <a href="<?php echo $URL ?>about-us/company-management.php">
            Managment
          </a>
        </li>
        <li>
          <a href="<?php echo $URL ?>products.php">
            History
          </a>
        </li>
        <li>
          <a href="<?php echo $URL ?>Stretcher-Leveler/coil-processing.php">
            Factory Advantages
          </a>
        </li>
        <li>
          <a href="<?php echo $URL ?>tube-mill.php">
            Products
          </a>
        </li>
        <li>
          <a href="<?php echo $URL ?>stainless-steel-service-center.php">
            Quality Policy
          </a>
        </li>
        <li>
          <a href="<?php echo $URL ?>stainless-steel/history.php">
            Certificates
          </a>
        </li>
        <li>
          <a href="<?php echo $URL ?>types-of-ss/classification.php">
            Inspection System
          </a>
        </li>
        <li>
          <a href="<?php echo $URL ?>types-of-ss/classification.php">
            Weight Charts
          </a>
        </li>
        <li>
          <a href="<?php echo $URL ?>types-of-ss/classification.php">
            Applications

          </a>
        </li>
        <li class="lg:hidden">
          <a href="<?php echo $URL ?>useful-links.php">
            Useful Links
          </a>
        </li>
        <li class="lg:hidden">
          <a href="<?php echo $URL ?>photo-gallery.php">
            Photo Gallery
          </a>
        </li>
        <li class="lg:hidden">
          <a href="<?php echo $URL ?>video-gallery.php">
            Video Gallery
          </a>
        </li>
        <li class="lg:hidden">
          <a href="<?php echo $URL ?>contact-us.php">
            Contact Us
          </a>
        </li>
      </ul>
    </nav>
  </header>