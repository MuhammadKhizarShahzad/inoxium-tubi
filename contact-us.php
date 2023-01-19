<?php include_once("header.php") ?>

<style>
  .ml-11 {
    margin-left: 2.75rem;
  }

  @media (max-width:768px) {
    .ml-11 {
      margin-left: 0;
    }
  }
</style>

<!-- Banner Section -->
<section class="mb-4">
    <div class="main-top-banner border-b-2 border-black relative">
        <div class="flex parent overflow-x-hidden">

            <!-- slide 1 -->
            <div class="child flex w-full bg-no-repeat bg-cover bg-left md:bg-center"
                style='background-image: url("https://www.mideastmetal.com/items/gen/gen_10.jpg"); height: 316px'>
            </div>
        </div>
    </div>
</section>

<section>
  <h1>Contact Us</h1>
  <p>“Our dedicated sales team with a wealth of experience are waiting to take your call and assist with
    any enquiries
    you have.”</p>
  <div class="flex flex-col md:flex-row mt-5">
    <div class="md:w-2/5 md:border-r-2 border-gray-500">
      <h2 class="text-blue-700">Jebel Ali Office:</h2>
      <address>
        <p class="my-4">Plot # S20701, Jebel Ali Free Zone, South 2,<br>P.O. Box 262328, Dubai, UAE.</p>
        <p>
          Tel: +971-4-8862992<br>
          Fax: +971-4-8862932<br>
          Mob: +971-50-4843946/+971-50-4843944<br>
          <br>
          Email: <a href="mailto:info@mideastmetal.com">info@mideastmetal.com</a><br>
        </p>
      </address>
    </div>
    <div class="md:w-3/5">
      <h2 class="text-blue-700 ml-11">Feedback Form</h2>
      <p class="my-4 ml-11">Note: Following fields are required with <span class="text-red-600">*</span></p>
      <form class="flex flex-wrap md:flex-no-wrap md:justify-evenly">
        <div class="w-full md:w-auto">
          <label>
            Your Name: <span class="text-red-600">*</span>
            <input type="text" required>
          </label>
          <label>
            Company: <span class="text-red-600">*</span>
            <input type="text" required>
          </label>
          <label>
            Phone: <span class="text-red-600">*</span>
            <input type="tel" required>
          </label>
          <label>
            Fax:
            <input type="tel">
          </label>
          <label>
            Email: <span class="text-red-600">*</span>
            <input type="email" required>
          </label>
          <label>
            Country:
            <input type="text">
          </label>
        </div>
        <div class="w-full md:w-auto">
          <label>
            Inquiry type:
            <select>
              <option value="Local">Local</option>
              <option value="Export">Export</option>
            </select>
          </label>
          <label>
            Address:
            <input type="text">
          </label>
          <label>
            Message: <span class="text-red-600">*</span>
            <textarea cols="30" rows="6" required></textarea>
          </label>
          <button class="text-white py-1 px-2">Submit</button>
          <button class="text-white py-1 px-2" type="button" onclick="document.querySelector('form').reset()">
            Cancel
          </button>
        </div>
      </form>
    </div>
  </div>
</section>

<?php include_once("footer.php") ?>