<?php include_once("../header.php") ?>
<?php require("./slider.php") ?>

<section class="flex md:items-center flex-col-reverse md:flex-row">
  <div class="left-section md:pr-3 md:border-r border-black w-full md:w-9/12">
    <div class="scroll-section h-full md:h-64 overflow-y-auto">
      <h1>Statistics of Stainless Steel</h1>
      <p><img src="<?php echo $URL ?>assests/imgs/stainless-steel/5.jpg" width="700"></p>
      <p><img src="<?php echo $URL ?>assests/imgs/stainless-steel/7.jpg" width="700"></p>
      <p><img src="<?php echo $URL ?>assests/imgs/stainless-steel/8.jpg" width="700"></p>
      <p><img src="<?php echo $URL ?>assests/imgs/stainless-steel/9.jpg" width="700"></p>
      <p><img src="<?php echo $URL ?>assests/imgs/stainless-steel/ss-10.jpg" width="700"></p>
      <p><img src="<?php echo $URL ?>assests/imgs/stainless-steel/ss-11.jpg" width="700"></p>
    </div>
  </div>

  <div class="p-0 md:p-5 md:pr-0 w-full md:w-3/12 mb-4 md:mb-0">
    <nav class="right-tabs">
      <ul class="flex flex-col divide > * bg-none border-0">
        <li class="mb-1 border">
          <a href="<?php echo $URL ?>stainless-steel/history.php">
            History
          </a>
        </li>
        <li class="mb-1 border">
          <a href="<?php echo $URL ?>stainless-steel/what-is-stainless-steel.php">
            What is Stainless Steel
          </a>
        </li>
        <li class="mb-1 border">
          <a href="<?php echo $URL ?>stainless-steel/benefits.php">
            Benefits
          </a>
        </li>
        <li class="mb-1 border">
          <a href="<?php echo $URL ?>stainless-steel/alloying-elements.php">
            Alloying Elements
          </a>
        </li>
        <li class="mb-1 border">
          <a href="<?php echo $URL ?>stainless-steel/applications.php">
            Applications
          </a>
        </li>
        <li class="mb border">
          <a class="active" href="<?php echo $URL ?>stainless-steel/statistics-of-stainless-steel.php">
            Statistics of Stainless Steel
          </a>
        </li>
      </ul>
    </nav>
  </div>
</section>

<?php include_once("../footer.php") ?>