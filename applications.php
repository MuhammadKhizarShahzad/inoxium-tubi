<?php include_once("header.php") ?>
<script defer>
  const data = [
    {
      heading: "Stainless Steel Industrial Pipes:",
      list: [
        "Instrumentation", 
        "Automobiles", 
        "Heat Exchanger", 
        "Surface Condensers", 
        "Digesters", 
        "Fluid Piping",
        "LP/HP Heaters",
        "Evaporators"
      ]
    },
    {
      heading: "STAINLESS STEEL ORNAMENTAL TUBES APPLICATION:",
      list: [
        "Boat Rails & Ladders", 
        "Automotive Step Bars & Grille Guards", 
        "Washroom Grab Bars", 
        "Architecture", 
        "Swimming Pool Rails", 
        "Ovens, Refrigerators, Restaurant Equipment",
        "Medical Equipment	",
        "Exercise Equipment",
        "Rain showers",
        "handrail",
        "stair rail",
        "Industrial kitchen furniture",
        "ovens",
        "refrigerators"
      ]
    },
    {
      heading: "INDUSTRIES SERVED:",
      list: [
        "Industrial Kitchen equipment factories", 
        "Medical equipment factories", 
        "Ship building", 
        "Chemical Processing", 
        "Sugar Mills", 
        "Heat exchangers",
        "Pharmaceutical factories",
        "Textile Machinery",
        "Fertilizers",
        "Dairy and Food Processing",
        "Power Plants",
        "Construction",
        "Modern Architecture",
        "Oil and Gas Processing",
        "Water treatment facilities",
        "Desalination",
        "Synthetic Fibers",
        "Pulp and Paper",
        "Breweries",
        "Refinery & Petrochemicals",
        "Energy industries"
      ]
    }
  ]
</script>

<section class="flex md:items-center flex-col-reverse md:flex-row">
  <div class="left-section md:pr-3 md:border-r border-black w-full md:w-3/4">
    <h1 class="text-2xl">Applications</h1>
    <h2 class="heading"></h2>
    <ul class="list-disc pl-5"></ul>

    <script defer>
      let i = 0;
      const ul = document.querySelector(".list-disc");
      const h2 = document.querySelector(".heading");

      h2.innerHTML = `${data[i].heading}`
      let listData = data[i].list;
      for (let i = 0; i < listData.length; i++)
        ul.innerHTML += `<li>${listData[i]}</li>`;

      const index = (inc) => {
        i = inc;
        listData = data[i].list;
        h2.innerHTML = `${data[i].heading}`
        ul.innerHTML = "";
        for (let i = 0; i < listData.length; i++)
          ul.innerHTML += `<li>${listData[i]}</li>`;
      }
    </script>
  </div>

  <div class="p-0 md:p-5 md:pr-0 w-full md:w-1/4 mb-4 md:mb-0">
    <nav class="right-tabs">
      <ul class="flex flex-col divide > * bg-none border-0">
        <li class="mb-1 border cursor-pointer" onclick="index(0)">
          <a class="active px-4 py-3">
            Stainless Steel Industrial Pipes 
          </a>
        </li>
        <li class="mb-1 border cursor-pointer" onclick="index(1)">
          <a class="px-4 py-3">
            Stainless Steel Oonamental Tubes Application
          </a>
        </li>
        <li class="mb border cursor-pointer" onclick="index(2)">
          <a class="px-4 py-3">
          	INDUSTRIES SERVED
          </a>
        </li>
      </ul>
    </nav>
  </div>
</section>

<!-- <link href="<?php echo $URL ?>assests/css/slider.css" rel="stylesheet">
<link href="<?php echo $URL ?>assests/css/ken-burn.css" rel="stylesheet">
<script src="<?php echo $URL ?>assests/js/slider.js"></script> -->

<?php include_once("footer.php") ?>