<?php include_once("./header.php") ?>


<!-- Banner Section -->
<section class="mb-4">
    <div class="main-top-banner border-b-2 border-black relative">
        <div class="flex parent overflow-x-hidden">

            <!-- slide 1 -->
            <div class="child flex w-full bg-no-repeat bg-cover bg-left md:bg-center"
                style='background-image: url("<?php echo $URL ?>assests/imgs/gen_29.jpg"); height: 316px'>
            </div>
        </div>
    </div>
</section>


<section>
    <h1>Video Gallery</h1><br>
    <div class="flex flex-wrap md:flex-no-wrap gap-2 mb-2">
        <div class="w-full md:w-1/2">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/HaLrC5yEYxM"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
        </div>
        <div class="w-full md:w-1/2">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/8-LMbRFTGNM"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
        </div>
    </div>

    <div class="flex flex-wrap md:flex-no-wrap gap-2">
        <div class="w-full md:w-1/2">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/Wp9rTDVH0_o"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
        </div>
        <div class="w-full md:w-1/2">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/jJdHE9Fi2rI"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
        </div>
    </div>
</section>

<?php include_once("./footer.php") ?>