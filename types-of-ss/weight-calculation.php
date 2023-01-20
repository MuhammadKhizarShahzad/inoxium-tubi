<?php include_once("../header.php") ?>
<?php require("./slider.php") ?>

<section class="flex md:items-center flex-col-reverse md:flex-row">
  <div class="left-section md:pr-3 md:border-r border-black w-full md:w-9/12">
    <div class="scroll-section h-full md:h-64 overflow-y-auto">
    <h1>Weight Calculation</h1>
    <p><img src="<?php echo $URL ?>assests/imgs/types-of-ss/tb4.jpg" width="600"></p>
    <p><img src="<?php echo $URL ?>assests/imgs/types-of-ss/tb5.jpg" width="600"></p>
  </div>
  </div>

  <div class="p-0 md:p-5 md:pr-0 w-full md:w-3/12 mb-4 md:mb-0">
    <nav class="right-tabs">
      <ul class="flex flex-col divide > * bg-none border-0">
        <li class="mb-1 border">
          <a href="<?php echo $URL ?>types-of-ss/classification.php">
            Classification
          </a>
        </li>
        <li class="mb-1 border">
          <a href="<?php echo $URL ?>types-of-ss/chemical-composition.php">
            Chemical Composition
          </a>
        </li>
        <li class="mb-1 border">
          <a href="<?php echo $URL ?>types-of-ss/conversion-table.php">
            Conversion Table
          </a>
        </li>
        <li class="mb border">
          <a class="active" href="<?php echo $URL ?>types-of-ss/weight-calculation.php">
            Weight Calculation
          </a>
        </li>
      </ul>
    </nav>
  </div>
</section>

<?php include_once("../footer.php") ?>