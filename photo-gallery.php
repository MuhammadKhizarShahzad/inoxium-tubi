<?php include_once("./header.php") ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />

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

<!-- Content Section -->
<style>
     .mobile-img {
        width: 150px;
        margin-bottom: 10px;
    }
    .desktop-img{
        width: 130px;
        display: none;
    }

   /* @media (min-width: 786px) {
        img {
            width: 130px;
        }
    } */
</style>
<section class="flex flex-col-reverse lg:flex-row items-center">
    <!-- Left Section -->
    <div class="left-section md:pr-3 md:border-r border-black w-full md:w-3/4">
        <h1>Photo Gallery >> Photo Gallery</h1><br>
        <div class="scroll-section h-full md:h-64 overflow-y-auto" style="background-color: #ececec">

            <div class="flex flex-wrap lg:flex-no-wrap  justify-evenly md:justify-start lg:gap-4 md:pr-6 md:pl-2" style="margin-top: 10px;">
                <div>
                    <a href="<?php echo $URL ?>assests/imgs/photo-gallery/gen-gallery-image-thumb-15.jpg"
                        data-fancybox="gallery" data-caption="Stainless Steel Sheet Coil">
                        <img class="mobile-img" src="<?php echo $URL ?>assests/imgs/photo-gallery/gen-gallery-image-thumb-small-15.jpg"
                            style="border: #90a5bd solid 2px" />
                    </a>
                </div>

                <div>
                    <a href="<?php echo $URL ?>assests/imgs/photo-gallery/gen-gallery-image-thumb-13.jpg"
                        data-fancybox="gallery" data-caption="Stainless Steel Sheet Coil">
                        <img class="mobile-img md:desktop-img" src="<?php echo $URL ?>assests/imgs/photo-gallery/gen-gallery-image-thumb-small-13.jpg"
                            style="border: #90a5bd solid 2px" />
                    </a>
                </div>

                <div>
                    <a href="<?php echo $URL ?>assests/imgs/photo-gallery/gen-gallery-image-thumb-9.jpg"
                        data-fancybox="gallery" data-caption="Stainless Steel Sheet Coil">
                        <img class="mobile-img md:desktop-img" src="<?php echo $URL ?>assests/imgs/photo-gallery/gen-gallery-image-thumb-small-9.jpg"
                            style="border: #90a5bd solid 2px" />
                    </a>
                </div>

                <div>
                    <a href="<?php echo $URL ?>assests/imgs/photo-gallery/gen-gallery-image-thumb-10.jpg"
                        data-fancybox="gallery" data-caption="Stainless Steel Sheet Coil">
                        <img class="mobile-img md:desktop-img" src="<?php echo $URL ?>assests/imgs/photo-gallery/gen-gallery-image-thumb-small-10.jpg"
                            style="border: #90a5bd solid 2px" />
                    </a>
                </div>

                <div>
                    <a href="<?php echo $URL ?>assests/imgs/photo-gallery/gen-gallery-image-thumb-11.jpg"
                        data-fancybox="gallery" data-caption="Stainless Steel Sheet Coil">
                        <img class="mobile-img md:desktop-img" src="<?php echo $URL ?>assests/imgs/photo-gallery/gen-gallery-image-thumb-small-11.jpg"
                            style="border: #90a5bd solid 2px" />
                    </a>
                </div>

                <div>
                    <a href="<?php echo $URL ?>assests/imgs/photo-gallery/gen-gallery-image-thumb-12.jpg"
                        data-fancybox="gallery" data-caption="Stainless Steel Sheet Coil">
                        <img class="mobile-img md:desktop-img" src="<?php echo $URL ?>assests/imgs/photo-gallery/gen-gallery-image-thumb-small-12.jpg"
                            style="border: #90a5bd solid 2px" />
                    </a>
                </div>
            </div>

            <div class="flex flex-wrap lg:flex-no-wrap justify-evenly md:justify-start lg:gap-4 md:pr-6 md:pl-2">
                <div>
                    <a href="<?php echo $URL ?>assests/imgs/photo-gallery/gen-gallery-image-thumb-14.jpg"
                        data-fancybox="gallery" data-caption="Stainless Steel Sheet Coil">
                        <img class="mobile-img md:desktop-img" src="<?php echo $URL ?>assests/imgs/photo-gallery/gen-gallery-image-thumb-small-14.jpg"
                            style="border: #90a5bd solid 2px" />
                    </a>
                </div>

                <div>
                    <a href="<?php echo $URL ?>assests/imgs/photo-gallery/gen-gallery-image-thumb-16.jpg"
                        data-fancybox="gallery" data-caption="Stainless Steel Sheet Coil">
                        <img class="mobile-img md:desktop-img" src="<?php echo $URL ?>assests/imgs/photo-gallery/gen-gallery-image-thumb-small-16.jpg"
                            style="border: #90a5bd solid 2px" />
                    </a>
                </div>

                <div>
                    <a href="<?php echo $URL ?>assests/imgs/photo-gallery/gen-gallery-image-thumb-17.jpg"
                        data-fancybox="gallery" data-caption="Stainless Steel Sheet Coil">
                        <img class="mobile-img md:desktop-img" src="<?php echo $URL ?>assests/imgs/photo-gallery/gen-gallery-image-thumb-small-17.jpg"
                            style="border: #90a5bd solid 2px" />
                    </a>
                </div>

                <div>
                    <a href="<?php echo $URL ?>assests/imgs/photo-gallery/gen-gallery-image-thumb-18.jpg"
                        data-fancybox="gallery" data-caption="Stainless Steel Sheet Coil">
                        <img class="mobile-img md:desktop-img" src="<?php echo $URL ?>assests/imgs/photo-gallery/gen-gallery-image-thumb-small-18.jpg"
                            style="border: #90a5bd solid 2px" />
                    </a>
                </div>

                <div>
                    <a href="<?php echo $URL ?>assests/imgs/photo-gallery/gen-gallery-image-thumb-19.jpg"
                        data-fancybox="gallery" data-caption="Stainless Steel Sheet Coil">
                        <img class="mobile-img md:desktop-img" src="<?php echo $URL ?>assests/imgs/photo-gallery/gen-gallery-image-thumb-small-19.jpg"
                            style="border: #90a5bd solid 2px" />
                    </a>
                </div>

                <div>
                    <a href="<?php echo $URL ?>assests/imgs/photo-gallery/gen-gallery-image-thumb-20.jpg"
                        data-fancybox="gallery" data-caption="Stainless Steel Sheet Coil">
                        <img class="mobile-img md:desktop-img" src="<?php echo $URL ?>assests/imgs/photo-gallery/gen-gallery-image-thumb-small-20.jpg"
                            style="border: #90a5bd solid 2px" />
                    </a>
                </div>
            </div>

            <div class="flex flex-wrap lg:flex-no-wrap justify-evenly md:justify-start lg:gap-4 md:pr-4 md:pl-2 md:w-4/6 md:p-0">
                <div>
                    <a href="<?php echo $URL ?>assests/imgs/photo-gallery/gen-gallery-image-thumb-21.jpg"
                        data-fancybox="gallery" data-caption="Stainless Steel Sheet Coil">
                        <img class="mobile-img md:desktop-img" src="<?php echo $URL ?>assests/imgs/photo-gallery/gen-gallery-image-thumb-small-21.jpg"
                            style="border: #90a5bd solid 2px" />
                    </a>
                </div>

                <div>
                    <a href="<?php echo $URL ?>assests/imgs/photo-gallery/gen-gallery-image-thumb-6.jpg"
                        data-fancybox="gallery" data-caption="Stainless Steel Sheet Coil">
                        <img class="mobile-img md:desktop-img" src="<?php echo $URL ?>assests/imgs/photo-gallery/gen-gallery-image-thumb-small-6.jpg"
                            style="border: #90a5bd solid 2px" />
                    </a>
                </div>

                <div>
                    <a href="<?php echo $URL ?>assests/imgs/photo-gallery/gen-gallery-image-thumb-7.jpg"
                        data-fancybox="gallery" data-caption="Stainless Steel Sheet Coil">
                        <img class="mobile-img md:desktop-img" src="<?php echo $URL ?>assests/imgs/photo-gallery/gen-gallery-image-thumb-small-7.jpg"
                            style="border: #90a5bd solid 2px" />
                    </a>
                </div>

                <div>
                    <a href="<?php echo $URL ?>assests/imgs/photo-gallery/gen-gallery-image-thumb-8.jpg"
                        data-fancybox="gallery" data-caption="Stainless Steel Sheet Coil">
                        <img class="mobile-img md:desktop-img" src="<?php echo $URL ?>assests/imgs/photo-gallery/gen-gallery-image-thumb-small-8.jpg"
                            style="border: #90a5bd solid 2px" />
                    </a>
                </div>

            </div>
        </div>
    </div>


    <div class="p-0 md:p-5 md:pr-0 self-start w-full md:w-1/4 mb-4">
        <nav class="right-tabs">
            <ul class="flex flex-col divide > * bg-none border-0">
                <li class="mb-1 border">
                    <a class="active" href="<?php echo $URL ?>photo-gallery.php"> Photo Gallery</a>
                </li>
            </ul>
        </nav>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
<?php include_once("./footer.php") ?>