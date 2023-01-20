<?php include_once("../header.php") ?>

<?php require("./slider.php") ?>

<section class="flex md:items-center flex-col-reverse md:flex-row">
  <div class="left-section md:pr-3 md:border-r border-black w-full md:w-3/4">
    <div class="scroll-section h-full md:h-64 overflow-y-auto">
      <h1>Classification</h1>
      <p class="text-sm">Stainless steels come in several types depending on their microstructure.</p>
      <h2>Austenitic stainless steels:</h2>
      <p class="text-sm">Contain at least 6 percent nickel and austenite—carbon-containing iron with a face-centered
        cubic structure—and
        have good corrosion resistance and high ductility (the ability of the material to bend without breaking). They
        are
        commonly used in food processing equipment, kitchen sinks, chemical plants, Kitchen furniture, etc.</p>
      <h2>Some of the different grades in austenitic stainless steel:</h2>
      <ul class="text-sm">
        <li>301</li>
        <li>304</li>
        <li>316L</li>
        <li>321</li>
        <li>310</li>
      </ul>
      <h2>Ferritic stainless steels:</h2>
      <p class="text-sm">(ferrite has a body-centered cubic structure) have better resistance to stress corrosion than
        austenitic, but
        they
        are difficult to weld. They are used in water coolers, hot water tanks, automobiles exhausts, etc.</p>
      <h2>Some of the different grades in ferritic stainless steel:</h2>
      <ul class="text-sm">
        <li>430</li>
        <li>409</li>
        <li>4003</li>
        <li>403</li>
      </ul>
      <h2>Duplex stainless steels:</h2>
      <p class="text-sm">which generally contain equal amounts of ferrite and austenite, provide better resistance to
        pitting and crevice
        corrosion in most environments. They also have superior resistance to cracking due to chloride stress corrosion,
        and
        they are about twice as strong as the common austenitics. Therefore, duplex stainless steels are widely used in
        the
        chemical industry in refineries, gas-processing plants, pulp and paper plants, and sea water piping
        installations.
      </p>
      <h2>Some of the different grades in Duplex stainless steel:</h2>
      <ul class="text-sm">
        <li>2205</li>
        <li>2304</li>
        <li>2507</li>
        <li>3RE60</li>
        <li>329</li>
      </ul>
      <h2>Martensitic stainless steels</h2>
      <p class="text-sm">Contain iron having a needle-like structure. They are plain chromium steels containing between
        12 and 18%
        chromium.
        Martensitic stainless steels are used in making shafts, surgical instruments, knife blades, spindles and pins.
      </p>
      <h2>Some of the different grades in Martensitic stainless steel:</h2>
      <ul class="text-sm">
        <li>410</li>
        <li>420</li>
        <li>431</li>
        <li>416</li>
        <li>440C</li>
      </ul>
    </div>
  </div>

  <div class="p-0 md:p-5 md:pr-0 w-full md:w-1/4 mb-4 md:mb-0">
    <nav class="right-tabs">
      <ul class="flex flex-col divide > * bg-none border-0">
        <li class="mb-1 border">
          <a class="active" href="<?php echo $URL ?>types-of-ss/classification.php">
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
          <a href="<?php echo $URL ?>types-of-ss/weight-calculation.php">
            Weight Calculation
          </a>
        </li>
      </ul>
    </nav>
  </div>
</section>

<!-- <link href="<?php echo $URL ?>assests/css/slider.css" rel="stylesheet">
<link href="<?php echo $URL ?>assests/css/ken-burn.css" rel="stylesheet">
<script src="<?php echo $URL ?>assests/js/slider.js"></script> -->

<?php include_once("../footer.php") ?>