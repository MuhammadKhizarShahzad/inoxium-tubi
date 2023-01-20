<?php include_once("../header.php") ?>
<?php require("./slider.php") ?>

<section class="flex md:items-center flex-col-reverse md:flex-row">
  <div class="left-section md:pr-3 md:border-r border-black w-full md:w-9/12">
    <div class="scroll-section h-full md:h-64 overflow-y-auto">
      <h1>Conversion Table</h1>

      <h2 class=" bg-gray-300 text-sm md:text-lg p-2 w-full md:w-3/4 ">TABLE FOR CONVERSION OF MM INTTO GAUGES</h2>
      <table class="table-auto w-full text-center md:w-3/4">
        <tbody>
          <tr class="bg-black text-white">
            <td>MM</td>
            <td>SWG</td>
            <td>MM</td>
            <td>SWG</td>
          </tr>
          <tr>
            <td>0.20</td>
            <td>33</td>
            <td>1.50</td>
            <td>16</td>
          </tr>
          <tr>
            <td>0.25</td>
            <td>32</td>
            <td>2.10</td>
            <td>14</td>
          </tr>
          <tr>
            <td>0.30</td>
            <td>30</td>
            <td>2.60</td>
            <td>12</td>
          </tr>
          <tr>
            <td>0.40</td>
            <td>28</td>
            <td>3.00</td>
            <td>11</td>
          </tr>
          <tr>
            <td>0.50</td>
            <td>25</td>
            <td>3.25</td>
            <td>10</td>
          </tr>
          <tr>
            <td>0.60</td>
            <td>24</td>
            <td>4.00</td>
            <td>8</td>
          </tr>
          <tr>
            <td>0.70</td>
            <td>23</td>
            <td>4.50</td>
            <td>6</td>
          </tr>
          <tr>
            <td>0.80</td>
            <td>21</td>
            <td>6.00</td>
            <td>----</td>
          </tr>
          <tr>
            <td>0.90</td>
            <td>20</td>
            <td>8.00</td>
            <td>----</td>
          </tr>
          <tr>
            <td>1.00</td>
            <td>19</td>
            <td>12.00</td>
            <td>----</td>
          </tr>
          <tr>
            <td>1.20</td>
            <td>18</td>
            <td>50.00</td>
            <td>----</td>
          </tr>
        </tbody>
      </table>
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
          <a class="active" href="<?php echo $URL ?>types-of-ss/conversion-table.php">
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

<?php include_once("../footer.php") ?>