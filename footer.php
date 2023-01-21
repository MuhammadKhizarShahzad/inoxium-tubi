<?php 
  $footer_links = [
    "Home" => $URL,
    "Managment" => $URL . "management.php",
    "History" => $URL . "history.php",
    "Factory Advantages" => $URL . "factory-advantages.php",
    "Products" => $URL . "products.php",
    "Quality Policy" => $URL . "quality-policy.php",
    "Certificates" => $URL . "certificates.php",
    "Inspection System" => $URL . "inspection-system.php",
    "Weight Charts" => $URL . "weight-charts.php",
  ];
?>

<footer class="border-t-2 border-black mt-4">
  <ul class="flex flex-wrap pt-3 text-xs xl:text-base">
    <?php foreach ($footer_links as $k => $v) { ?>
      <li>
        <a class="border-r border-indigo-500 px-2 w-1/2 md:w-auto text-center" href="<?php echo $v ?>">
          <?php echo $k ?>
        </a>
      </li>
    <?php } ?>
    <li class="px-2 w-1/2 md:w-auto text-center">
      <a href="<?php echo $URL?>applications.php">
        Applications
      </a>
    </li>
  </ul>
  <div class="flex flex-col-reverse md:flex-row items-center md:justify-between pt-4">
    <p class="text-xs md:text-base copyright">
      © Copyrights Inoxiumtubi. <?php echo date("Y") ?>, All rights reserved.
    </p>
    <div class="logo">
      <a href="http://www.superiormetals.ae/" target="_blank">
        <img src="<?php echo $URL ?>f-logo.jpg" alt="superiormetals logo">
      </a>
    </div>
  </div>
</footer>

</body>
</html>