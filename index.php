<?php
require_once 'includes/header.php';

?>



<!-- THIS IS THE TOP ICON SECTION -->
<div class="container pb-5 mb-5 pt-4">
    <div class="row">
        <img src="./images/Group 99.png" width="50" class="img-fluid icon text-right" alt="">
        <h2 style="color: #FD7B08;" class="pl-3 pt-1 icon-text font-weight-bold">Nemos</h2>
    </div>
</div>
<!-- ################################################# -->




<section class="ml-4 mb-5">
    <div class=" container">
        <div class="row">
            <div class="col-md-6 noPadding mt-3 text-left hero text-white pt-5">
                <h1 style="font-size: 40px;" class="font-weight-bold">Bring Your Uncaptured</h1>
                <h1 style="font-size: 40px;" class="font-weight-bold">Memories to Life</h1>
                <p class="pt-3">This App generates pictures of you as a baby, child or a young adult based on your
                    recent picture
                    and descriptions of memories given by you.
                </p>
                <p class="font-weight-bold coming"><span style="color: #FD7B08;">Coming Soon!</span> Get notified
                    when
                    we
                    launch
                </p>

                <form action="db/conn.php" method="post">
                    <div class="container">
                        <div class="row">
                            <input type="email" name="email" id='email' style="width: 70%;" placeholder="Enter your Email Address" class="form-control input1 rounded-pill mr-2" id="">
                            <button style="background-color: #FD7B08;" id='submit' class="btn input1 font-weight-bold rounded-pill" type="submit">Notify Me</button>
                            <div class="form-group pt-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">I WILL LIKE TO BE A BETA TESTER</label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6 text-center heroImages">
                <img style="width: 18%; left: 16px; " src="./images/Karan-Brar-during-the-world-premiere-of-Disney-s-Maleficent-in-2014 1.png" class="animi baby3Iphone position-absolute karan img-fluid" alt="">
                <img style="width: 18%; right: 128px; bottom: 370px; left: 200px;" src="./images/Baby 1.png" class="img-fluid baby1Iphone animi baby position-absolute" alt="">
                <img style="width: 18%; right: 50px;" src="./images/Babiest 1.png" class="animi img-fluid baby2Iphone babiest position-absolute" alt="">
                <img src="./images/Now 1.png" style="width: 46%; top: 150px; left: 77px;" class="img-fluid pic animi position-relative now1 pt-4" alt="">
            </div>
        </div>
    </div>
</section>

<!-- THIS IS FOR THE BUBBLE ANIMATION -->
<div id="background-wrap">
    <div class="bubble x1"></div>
    <div class="bubble x2"></div>
    <div class="bubble x3"></div>
    <div class="bubble x4"></div>
    <div class="bubble x5"></div>
    <div class="bubble x6"></div>
    <div class="bubble x7"></div>
    <div class="bubble x8"></div>
    <div class="bubble x9"></div>
    <div class="bubble x10"></div>
</div>
<!-- ################################# -->




<!-- THIS IS NUMBER ONE AND TWO SECTION -->

<div style="background-image: url(./images/Rectangle.png); height: fit-content; background-repeat: no-repeat;">
    <div data-aos="fade-up-right" data-aos-duration="1000" class="container mt-5 pt-2">
        <h2 class="text-center font-weight-bold mt-5 pt-5 text-white">How <span style="color: #FD7B08;">Nemos</span>
            works
        </h2>
        <div class="row mx-auto pb-5 text-center mt-5">
            <div class="col-md-5">
                <img style="width: 70%;" src="./images/iPhone 11 Pro Outline.png" class="img-fluid mt-4 text-right" alt="">
            </div>
            <div class="col-md-7 d-flex align-items-center">
                <div class="row">
                    <img src="./images/1.png" class="img-fluid mr-3 mage numImage" alt="">
                    <h2 style="letter-spacing: 1px; font-size: 29px;" class="font-weight-bold texti text-left mx-auto text-white d-flex align-items-center pl-3">
                        Select Camera or
                        Gallery
                        to <br> Upload a Picture </h2>
                </div>
            </div>
        </div>
    </div>

    <!-- THIS IS NUMBER TWO -->
    <section data-aos="fade-down" data-aos-duration="1000" class="">
        <div class="container pb-5 mt-5 pt-2">
            <div class="row mx-auto text-center t-5">
                <div class="col-md-7 d-flex align-items-center">
                    <div class="row">
                        <img src="./images/2.png" class="img-fluid mr-5 numImage" alt="">
                        <h2 style="letter-spacing: 1px; font-size: 29px;" class="font-weight-bold mx-auto texti text-white text-left d-flex align-items-center pl-3">
                            Give a detailed description of <br> your memory
                        </h2>
                    </div>
                </div>
                <div class="col-md-5">
                    <img src="./images/iPhone 11 Pro Outline (1).png" style="width: 70%;" class=" img-fluid mt-4
                            text-right" alt="">
                </div>
            </div>
        </div>
    </section>
</div>
<!-- ############################################################# -->



<!-- THIS IS NUMBER THREE -->

<section data-aos="fade-down" data-aos-duration="1000" class="">
    <div class="container mt-5 pt-2">
        <div class="row mx-auto pb-5 text-center mt-5">
            <div class="col-md-5">
                <img src="./images/iPhone 11 Pro Outline (2).png" style="width: 70%;" class=" img-fluid mt-4
                            text-right" alt="">
            </div>
            <div class="col-md-7 d-flex align-items-center">
                <div class="row">
                    <img src="./images/3.png" class="img-fluid mr-3 numImage" alt="">
                    <h2 style="letter-spacing: 1px; font-size: 29px;" class="font-weight-bold texti mx-auto text-white d-flex text-left align-items-center pl-3">Scroll
                        through
                        the
                        pictures <br> generated and select the edit <br> or save button</h2>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ################################## -->


<!-- THIS IS NUMBER FOUR AND FIVE SECTION -->

<div style="background-image: url(./images/Rectangle.png); height: fit-content; background-repeat: no-repeat;">
    <section data-aos-duration="1000" data-aos="fade-left" class="">
        <div class="container mt-5 pt-4">
            <div class="row pb-5 mx-auto text-center t-5">
                <div class="col-md-7 d-flex align-items-center">
                    <div class="row">
                        <img src="./images/4.png" class="img-fluid mr-3 numImage" alt="">
                        <h2 style="letter-spacing: 1px; font-size: 29px;" class="font-weight-bold mx-auto texti text-white text-left d-flex align-items-center pl-3">
                            Explore the different edit <br> options you have till you are <br> satisfied with your
                            picture
                        </h2>
                    </div>
                </div>
                <div data-aos="fade-up-right" data-aos-duration="1000" class="col-md-5">
                    <img src="./images/iPhone 11 Pro Outline (3).png" style="width: 70%;" class=" img-fluid mt-4
                            text-right" alt="">
                </div>
            </div>
        </div>
    </section>

    <div data-aos="fade-up-right" data-aos-duration="1000" class="container mt-5 pt-4">
        <div class="row mx-auto pb-5 text-center mt-5">
            <div class="col-md-5">
                <img style="width: 70%;" src="./images/iPhone 11 Pro Outline (4).png" class="img-fluid mt-4 text-right" alt="">
            </div>
            <div class="col-md-7 d-flex align-items-center">
                <div class="row">
                    <img src="./images/5.png" class="img-fluid mr-3 numImage" alt="">
                    <h2 style="letter-spacing: 1px; font-size: 29px;" class="font-weight-bold mx-auto texti text-white text-left d-flex align-items-center pl-3">
                        Click save to save your picture
                    </h2>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- ############################################################# -->









<!-- THIS IS NUMBER SIX -->

<section data-aos="fade-down" data-aos-duration="1000" class="">
    <div class="container mt-5 pt-2">
        <div class="row mx-auto text-center t-5">
            <div class="col-md-7 d-flex align-items-center">
                <div class="row">
                    <img src="./images/6.png" class="img-fluid mr-3 numImage" alt="">
                    <h2 style="letter-spacing: 1px; font-size: 29px;" class="font-weight-bold text-white mx-auto texti text-left d-flex align-items-center pl-3">
                        Share your picture to friends <br> and family on your social <br> media
                    </h2>
                </div>
            </div>
            <div class="col-md-5">
                <img src="./images/iPhone 11 Pro Outline (5).png" style="width: 70%;" class=" img-fluid mt-4
                            text-right" alt="">
            </div>
        </div>
    </div>
</section>

<!-- ############################# -->




<!-- THIS IS THE FOOTER -->


<div class="mt-5">
    <footer style="background-color: #FD7B08;">
        <div class="container pb-5 pt-5">
            <h3 style="color: black;" class="font-weight-bold text-center">Subscribe to our newsletter to get more
                info</h3>
            <form method="post" action="db/conn.php">
                <div class="row pt-3">
                    <div class="text-right ml-auto" style="width: 60%;">
                        <div class="mr-4 form-froup">
                            <input class="form-control rounded-pill" placeholder="Enter your Email Addres" type="email">
                        </div>
                    </div>
                    <button style="background-color: black; color: #FD7B08;" class="btn rounded-pill mr-auto" type="submit">Subscribe</button>
                </div>
            </form>

            <h3 style="color: black;" class="font-weight-bold text-center mt-5">Follow us on social media</h3>
            <div class="container">
                <div style="color: black;" class="row mt-4">
                    <i class="fab mx-auto fa-2x fa-instagram"></i>
                    <i class="fab mx-auto fa-2x fa-facebook-f"></i>
                    <i class="fab mx-auto fa-2x fa-twitter"></i>
                </div>
            </div>
        </div>
    </footer>
</div>







<?php require_once 'includes/footer.php'; ?>