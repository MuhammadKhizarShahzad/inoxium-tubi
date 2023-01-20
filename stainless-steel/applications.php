<?php include_once("../header.php") ?>
<?php require("./slider.php") ?>
<section class="flex md:items-center flex-col-reverse md:flex-row">
  <div class="left-section md:pr-3 md:border-r border-black w-full md:w-9/12">
    <div class="scroll-section h-full md:h-64 overflow-y-auto">
      <h1>Applications</h1>

      <p class="text-sm">Stainless steel is used in an almost endless number of applications and industries like:</p>
      <ul class="list-disc px-6 py-4 text-sm">
        <li>Building exteriors and roofing:</li>
        <li>Automobile components (exhaust, trim/decorative, engine, chassis, fasteners, tubing for fuel lines).</li>
        <li>Chemical processing plants (scrubbers and heat exchangers).</li>
        <li>Pulp and paper manufacturing.</li>
        <li>Petroleum refining.</li>
        <li>Water supply piping.</li>
        <li>Kitchen equipment manufacturing (Kitchen cabinets/ exhaust hoods, cookware).</li>
        <li>Cutlery/ scissors.</li>
        <li>Dental/surgical equipment.</li>
        <li>Consumer products like watches, kettles, knives, ovens etc.</li>
        <li>Marine and shipbuilding.</li>
        <li>Pollution control.</li>
        <li>Smoke Control duct work.</li>
        <li>Transportation (rail cars, Chemical transportation tanks).</li>
      </ul>
      <ul class="flex flex-wrap gap-4 justify-center md:justify-start">
        <li><img src="<?php echo $URL ?>assests/imgs/stainless-steel/04.jpg"></li>
        <li><img src="<?php echo $URL ?>assests/imgs/stainless-steel/06.jpg"></li>
        <li><img src="<?php echo $URL ?>assests/imgs/stainless-steel/07.jpg"></li>
        <li><img src="<?php echo $URL ?>assests/imgs/stainless-steel/08.jpg"></li>
        <li><img src="<?php echo $URL ?>assests/imgs/stainless-steel/09.jpg"></li>
        <li><img src="<?php echo $URL ?>assests/imgs/stainless-steel/12.jpg"></li>
        <li><img src="<?php echo $URL ?>assests/imgs/stainless-steel/13.jpg"></li>
        <li><img src="<?php echo $URL ?>assests/imgs/stainless-steel/14.jpg"></li>
      </ul>
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
          <a class="active" href="<?php echo $URL ?>stainless-steel/applications.php">
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