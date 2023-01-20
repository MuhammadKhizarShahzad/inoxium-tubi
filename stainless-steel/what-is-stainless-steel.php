<?php include_once("../header.php") ?>
<?php require("./slider.php") ?>

<section class="flex md:items-center flex-col-reverse md:flex-row">
  <div class="left-section md:pr-3 md:border-r border-black w-full md:w-9/12">
    <div class="scroll-section h-full md:h-64 overflow-y-auto">
      <h1>What is Stainless Steel</h1>
      <h2>General Information:</h2>
      <p class="text-sm">The many unique values provided by stainless steel make it a powerful candidate in materials
        selection. Engineers and designers often underestimate or overlook these values because of what is viewed as the higher initial cost
        of stainless steel. However, over the total life of a project, stainless is often the best value option.</p>
      <h2>Stainless Steel:</h2>
      <p class="text-sm">
        Stainless steel is essentially a low carbon steel which contains chromium at 10% or more by
        weight. It is this addition of chromium that gives the steel its unique stainless, corrosion resisting properties.<br> <br> The
        chromium content of the steel allows the formation of a rough, adherent, invisible, corrosion-resisting chromium
        oxide film on the steel surface. If damaged mechanically or chemically, this film is self-healing, providing
        that oxygen, even in very small amounts, is present. The corrosion resistance and other useful properties of the
        steel are enhanced by increased chromium content and the addition of other elements such as molybdenum, nickel and
        nitrogen.<br> <br> There are more than 60 grades of stainless steel. However, the entire group can be divided
        into four classes. Each is identified by the alloying elements which affect their microstructure and for which each
        is named.</p>
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
          <a class="active" href="<?php echo $URL ?>stainless-steel/what-is-stainless-steel.php">
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