<?php include_once("../header.php") ?>
<?php require("./slider.php") ?>

<section class="flex md:items-center flex-col-reverse md:flex-row">
  <div class="left-section md:pr-3 md:border-r border-black w-full md:w-9/12">
    <div class="scroll-section h-full md:h-64 overflow-y-auto">
      <h1>History</h1><br>

      <p class="text-sm">The stainless steel was invented in the year 1900-1915. Berthier who was a Frenchman found that
        the iron can be
        combined with chromium and is resistant to several acids. Other people studied the properties of chromium in an
        iron template and used a low proportion of chromium. About 10.5 percent chromium substance is used in order to
        make stainless steel.<br><br> Harry Brearley considered as a leader of the research department who runs a lab
        along with Thomas Firth and Sons and John Brown And Company and is usually recognized as the inventor of the
        manufacturing period of stainless steel. Most of his work was on 430 (the chemical analysis was patented in
        1919).
        The first product was table cutlery and it is still used today.</p>
    </div>
  </div>

  <div class="p-0 md:p-5 md:pr-0 w-full md:w-3/12 mb-4 md:mb-0">
    <nav class="right-tabs">
      <ul class="flex flex-col divide > * bg-none border-0">
        <li class="mb-1 border">
          <a class="active" href="<?php echo $URL ?>stainless-steel/history.php">
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
          <a href="<?php echo $URL ?>stainless-steel/statistics-of-stainless-steel.php">
            Statistics of Stainless Steel
          </a>
        </li>
      </ul>
    </nav>
  </div>
</section>

<?php include_once("../footer.php") ?>