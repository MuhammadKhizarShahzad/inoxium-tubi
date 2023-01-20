<?php
  $URL = "http://";
  $DIR = "/inoxium-tubi/"; 
  $URL .= $_SERVER['HTTP_HOST'].$DIR; //. $_SERVER['REQUEST_URI'];

  $nav_links = [
    "Home" => $URL,
    "Managment" => $URL . "about-us/company-management.php",
    "History" => $URL . "products.php",
    "Factory Advantages" => $URL . "Stretcher-Leveler/coil-processing.php",
    "Products" => $URL . "tube-mill.php",
    "Quality Policy" => $URL . "stainless-steel-service-center.php",
    "Certificates" => $URL . "stainless-steel/history.php",
    "Inspection System" => $URL . "types-of-ss/classification.php",
    "Weight Charts" => $URL . "types-of-ss/classification.php",
    "Applications" => $URL . "types-of-ss/classification.php",
  ];

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

<body class="xl:container mx-auto px-6">
  <header class="my-4">
    <div class="relative flex justify-between items-center">
      <div class="logo">
        <a href="<?php echo $URL ?>">
          <img src="<?php echo $URL ?>inoxium.png" alt="inoxium logo">
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
                +0900-XXX-XXX
              </a>
            </li>
            <li>
              <a href="mailto:info@inoxiumtubi.com">
                <img class="inline-block w-4 mb-1"
                  src="<?php echo $URL ?>assests/imgs/icons/envelope-icon.svg">
                info@inoxiumtubi.com
              </a>
            </li>
            <li>
              <a href="#" target="_blank">
                <img class="w-4" src="<?php echo $URL ?>assests/imgs/icons/facebook-icon.svg">
              </a>
            </li>
            <li>
              <a href="#" target="_blank">
                <img class="w-4" src="<?php echo $URL ?>assests/imgs/icons/twitter-icon.svg">
              </a>
            </li>
          </ul>
        </div>
        <div class="xl:flex items-center gap-4 md:block">
          <a href="<?php echo $URL ?>tube-mill.php">
            <img class="w-64 md:w-auto" src="<?php echo $URL ?>logo.jpg" alt="inoxiumtubi logo">
          </a>
          <!-- <ul class="flex divide-x lg:text-sm xl:text-base">
            <li class="border-indigo-500 px-2">
              <a href="<?php// echo $URL ?>photo-gallery.php">
                Photo Gallery
              </a>
            </li>
            <li class="border-indigo-500 px-2">
              <a href="<?php// echo $URL ?>video-gallery.php">
                Video Gallery
              </a>
            </li>
            <li class="border-indigo-500 pl-2">
              <a href="<?php// echo $URL ?>contact-us.php">
                Contact Us
              </a>
            </li>
          </ul> -->
        </div>
      </div>
    </div>
    <nav class="header-nav">
      <ul class="flex lg:divide-x > * primary-navigation" data-visible="false" style="z-index: 9">
        <?php foreach ($nav_links as $k => $v) { ?>
          <li>
            <a class="py-2 2xl:px-6 px-4" href="<?php echo $v ?>">
              <?php echo $k ?>
            </a>
        </li>
        <?php } ?>
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