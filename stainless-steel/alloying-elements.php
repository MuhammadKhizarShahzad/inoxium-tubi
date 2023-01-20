<?php include_once("../header.php") ?>
<?php require("./slider.php") ?>

<section class="flex md:items-center flex-col-reverse md:flex-row">
  <style>
    tr,
    th {
      border: 1px solid #ccc;
      padding-inline: .2rem;
    }

    td {
      padding: .2rem;
    }
  </style>
  <div class="left-section md:pr-3 md:border-r border-black w-full md:w-9/12">
    <div class="scroll-section h-full md:h-64 overflow-y-auto">
      <h1>Alloying Elements</h1>

      <p class="text-sm">THE INFLUENCE OF ALLOYING ELEMENTS ON THE PROPERTIES OF STAINLESS STEEL</p>
      <table class=" table-auto mb-4 text-sm md:mr-2">
        <thead>
          <tr>
            <th>ELEMENT</th>
            <td>EFFECT ON STAINLESS STEEL</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>Chromium</th>
            <td>Forms a passive film with oxygen that prevent the further diffusion of oxygen into the
              surface Composition needs to contain at least 10.5% to be a stainless steel.</td>
          </tr>
          <tr>
            <th>Nickel</th>
            <td>Increases ductility and toughness. Increase corrosion resistance to acids Addition
              creates non-magnetic structure.</td>
          </tr>
          <tr>
            <th>Molybdenum</th>
            <td>Increases pitting and crevice corrosion resistance. Increase resistance to chlorides.
            </td>
          </tr>
          <tr>
            <th>Copper</th>
            <td>Increase corrosion resistance to sulfuric acid.</td>
          </tr>
          <tr>
            <th>Titianium/Niobium</th>
            <td>Ties up carbon and prevents inter-granular corrosion in welded zone of ferritic grades.
            </td>
          </tr>
          <tr>
            <th>Nitrogen</th>
            <td>Increase strength and corrosion resistance in austenitic and duplex grades.</td>
          </tr>
          <tr>
            <th>Silicon</th>
            <td>Improves resistance to high temperature scaling.</td>
          </tr>
          <tr>
            <th>Sulfur</th>
            <td>Usually kept low except for “free-machining” grades.</td>
          </tr>
          <tr>
            <th>Carbon</th>
            <td>Usually kept low. Used in martensitic grades to increase strength and hardness.</td>
          </tr>
        </tbody>
      </table>
      <p class="text-sm">REFERENCE: “Alloying Elements in Stainless Steel” Pierre-Jean Cunat Published by the
        International Chromium
        Development Association.</p>
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
          <a class="active" href="<?php echo $URL ?>stainless-steel/alloying-elements.php">
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