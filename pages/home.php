<?php
include('../base/base_header.php');
?>

<!-- banner card - user name on login, sign by session -->
<div class="container my-2">
    <div class="row">
        <div class="col-md-12">
            <div class="card welcome_card text-center" style="height: 225px;">
                <!-- <img src="../public/images/cardimg.jpeg" class="card-img img-fluid h-100" alt="cardImg"> -->
                <div class="card-img-overlay">
                    <div class="card-body">
                        <h2> Welcome home <?php echo ucfirst($_SESSION['user']['username']) ?>! </h2>
                        <p>This is your email address: <?php echo $_SESSION['user']['email'] ?></p>
                        <button class="btn btn-success">please verify</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section>
    <div class="container">
        <div class="more_about">
            <div class="row">
                <div class="col-md-6">
                    <div class="excellence_h4 d-flex justify-content-center py-4">
                        <h4 class="text-left pt-5">Excellence that Delights Commitment that Empowers</h4>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="excellence_explanation">
                        CP67 Group is a trusted name in the real estate market of the Tricity region, named as the No. 1 housing company in Punjab, India.
                        Having delivered over 12000+ homes in the last 17 years, CP67 group is a reliable and credible developer leading the charge of the real estate industry in the region through a deep understanding of buyer demand and market sentiment via innovation and research.

                        With CP67 Group, the buyer can avail of the chance to build their dream home at desirable locations amidst unique features and enriching lives by elevating standards.

                        <a class="knowmore d-inline-block text-decoration-none" href="./about.php"> Know More <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="below_excellence m-0 pr-0">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="one_num_box d-flex h-100 rounded-2">
                        <div class="one_num_img">
                            <img src="../public/images/one_box_item01.webp">

                        </div>
                        <div class="one_num_content w-100 text-start p-0 ps-3">
                            <h3>17</h3>
                            <p>Years of Trust &amp; Commitment</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-12">

                    <div class="one_num_box d-flex h-100 rounded-2">
                        <div class="one_num_img">
                            <img src="../public/images/one_box_item02.webp">
                        </div>

                        <div class="one_num_content w-100 text-start p-0 ps-3">
                            <h3> 28 </h3>
                            <p> Delivered Projects</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-12">
                    <div class="one_num_box d-flex h-100 rounded-2">
                        <div class="one_num_img">
                            <img src="../public/images/one_box_item03.webp">

                        </div>
                        <div class="one_num_content w-100 text-start p-0 ps-3">
                            <h3>12K</h3>
                            <p>Homes Delivered</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-12">
                    <div class="one_num_box d-flex h-100 rounded-2">
                        <div class="one_num_img">
                            <img src="../public/images/one_box_item04.webp">

                        </div>
                        <div class="one_num_content w-100 text-start p-0 ps-3">
                            <h3>08</h3>
                            <p>Ongoing Projects</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12"><br><br>
                    <p class="text-center a_believe"><strong> A belief of Delivering in 1 Lakh Dream Home Keys in the Next 14 Years </strong></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="news_blog_tab p-0 py-5">
    <div class="container">
        <div class="">
            <h3 class="title mb-3 text-center"> News &amp; Blog </h3>
            <div>
                <nav>
                    <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">
                            <img src="../public/images/blog_icon_blue.webp" alt="" class="blog_blue">
                            Blogs
                        </button>
                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
                            <img src="../public/images/news_icon_blue.webp" alt="" class="blog_blue">
                            News
                        </button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                        <div class="one_blog_list mt-3 d-flex">
                            <div class="one_blog_tab">
                                <h5> Nov 01, 2023 <a href="#" target="_blank"><img src="../public/images/arrow_icon.webp" alt="arrow-icon"></a></h5>
                                <h2><a href="#" target="_blank"> Pros and Cons of Buying a Second Home in Tricity </a></h2>
                                <p> </p>
                                <p><!-- wp:paragraph -->
                                </p>
                                <p>In the northern region of the country, Tricity is the best place to live in. Chandigarh, Panchkula and Mohali are connected w... </p>
                            </div>

                            <div class="one_blog_tab">
                                <h5> Nov 01, 2023 <a href="#" target="_blank"><img src="../public/images/arrow_icon.webp" alt="arrow-icon"></a></h5>
                                <h2><a href="#" target="_blank"> Which is the Best Society to Live in Mohali? </a></h2>
                                <p> </p>
                                <p><!-- wp:paragraph -->
                                </p>
                                <p>Whenever someone talks about Urban Development, the city Mohali is always mentioned. Not only Mohali has set benchmarks for o... </p>

                            </div>

                            <div class="one_blog_tab">
                                <h5> Nov 01, 2023 <a href="#" target="_blank"><img src="../public/images/arrow_icon.webp" alt="arrow-icon"></a></h5>
                                <h2><a href="#" target="_blank"> Which is the Best Society to Live in Zirakpur? </a></h2>
                                <p> </p>
                                <p><!-- wp:paragraph -->
                                </p>
                                <p>In northern region, Zirakpur is transforming into one of the most advanced economies in the nation at this moment. The consis... </p>
                            </div>

                            <div class="one_blog_tab">
                                <h5> Nov 01, 2022 <a href="#" target="_blank"><img src="../public/images/arrow_icon.webp" alt="arrow-icon"></a></h5>
                                <h2><a href="#" target="_blank"> How Investing In Mohali Properties Can Be An Asset For You </a></h2>
                                <p> </p>
                                <p><!-- wp:paragraph -->
                                </p>
                                <p>Hey! Are you looking for house rentals or are you after purchasing your dream house? If yes, then definitely you might be sea... </p>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                        <div class="newlist p-0 mt-4">
                            <ul id="news" class="w-100 list-unstyled">

                                <li class="m-0">
                                    <h5 class="newdteails"><a href="#" target="_blank">
                                            <strong>CP67 Group:</strong>
                                            The Impact of Location on Property Value: Unraveling Key Factors </a></h5>
                                    <div class="nesdesom">In the ever-evolving world of real estate, one aspect remains timeless and paramount: the profound influence of location on property value. Whether you are an aspiring homeowner or a seasoned investor, understanding the significance of location is fundamental to making informed decisions. This article delves...</div>
                                    <p class="date_news"> Nov 07, 2023</p>
                                </li>

                                <li class="m-0">
                                    <h5 class="newdteails"><a href="#" target="_blank">
                                            <strong>CP67 Group:</strong>
                                            Festival Impact on Real Estate Market </a></h5>
                                    <div class="nesdesom">Festivals are a time of celebration, joy, and togetherness. But did you know that they can also have a significant impact on the real estate market? As the calendar turns towards festive seasons like Diwali, Christmas, Thanksgiving, and more, the real estate sector experiences a...</div>
                                    <p class="date_news"> Nov 07, 2023</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="news_blog_tab featuredlist_p">
    <div class="container">
        <div class="">
            <h3 class="title mb-3 text-center"> Featured Projects </h3>
            <div>
                <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Residential Projects</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Commercial Projects</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">

                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                        <div class="regi_proj_caro">
                            <div class="owl-carousel" id="resi_proj">
                                <div class="owl-stage-outer">
                                    <div class="owl-stage">
                                        <div class="owl-item active">
                                            <div class="item">
                                                <div class="showcaseimg01">
                                                    <img src="../public/images/fp_Buiding-Facade.webp" alt="fp_Buiding-Facade">
                                                    <div class="showcase_conten_slide">
                                                        <h4><a href="#"> CP67 F Towers
                                                            </a></h4>
                                                        <div class="showlcoation">
                                                            <p>Canal Road, West, Ludhiana</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item active">
                                            <div class="item">
                                                <div class="showcaseimg01">
                                                    <img src="../public/images/fp_Montefiorenew.webp" alt="Montefiorenew">
                                                    <div class="showcase_conten_slide">
                                                        <h4><a href="#"> Montefiore
                                                            </a></h4>
                                                        <div class="showlcoation">
                                                            <p>High Ground Road, Zirakpur</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item">
                                            <div class="item">
                                                <div class="showcaseimg01">
                                                    <img src="../public/images/fp_super-tree.webp" alt="super-tree">
                                                    <div class="showcase_conten_slide">
                                                        <h4><a href="#"> Super Tree
                                                            </a></h4>
                                                        <div class="showlcoation">
                                                            <p>City of Dreams, Mohali</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item">
                                            <div class="item">
                                                <div class="showcaseimg01">

                                                    <img src="../public/images/fp_cityOfDreams.webp" alt="cityOfDreams">
                                                    <div class="showcase_conten_slide">
                                                        <h4><a href="#"> City of Dreams Zirakpur
                                                            </a></h4>
                                                        <div class="showlcoation">
                                                            <p>High Ground Road, Zirakpur</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item">
                                            <div class="item">
                                                <div class="showcaseimg01">
                                                    <img src="../public/images/fp_housingPark.webp" alt="housingPark">
                                                    <div class="showcase_conten_slide">
                                                        <h4><a href="#"> CP67 Housing Park
                                                            </a></h4>
                                                        <div class="showlcoation">
                                                            <p>Chandigarh-Delhi Highway Near Zirakpur</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                        <div class="regi_proj_caro">
                            <div class="owl-carousel" id="comm_proj">
                                <div class="owl-stage-outer">
                                    <div class="owl-stage">
                                        <div class="owl-item active">
                                            <div class="item">
                                                <div class="showcaseimg01">
                                                    <img src="../public/images/fp_Aerial-Cam-RGB-1.webp" alt="Aerial-Cam-RGB-1">
                                                    <div class="showcase_conten_slide">
                                                        <h4>CP67 City Gate </h4>
                                                        <div class="showlcoation">
                                                            <p>Zirakpur</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="home_contact">
    <div class="container">
        <div class="home-form">
            <h3 class="title mb-4 text-center"> Have a Question? We are Glad to <br>
                Consult You! </h3>
            <form action="#" id="enquiry" method="post" enctype="multipart/form-data">

                <!-- <input type="hidden" name="url" value="https://www.cp67group.in/">
                <input type="hidden" name="type" value="Home Enquiry"> -->

                <div class="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group position-relative mb-3">
                                <label for="yourname" class="icon_bt"><i class="fa fa-user fs-5" aria-hidden="true"></i>
                                </label>
                                <input type="text" name="yourname" class="form-control" placeholder="Enter your full name" id="yourname" required="">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group position-relative mb-3">
                                <label for="email" class="icon_bt"><i class="fa fa-envelope fs-5" aria-hidden="true"></i>
                                </label>
                                <input type="email" name="email" class="form-control" placeholder="Enter your email address" id="email" required="">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group position-relative mb-3">
                                <label for="phone" class="icon_bt"><i class="fa fa-phone fs-5" aria-hidden="true"></i>
                                </label>
                                <input type="tel" name="phone" class="form-control" placeholder="Enter your contact " id="phone" required="">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group position-relative mb-3">
                                <label class="icon_bt"><i class="fa fa-hospital-o fs-5" aria-hidden="true"></i>
                                </label>
                                <select class="form-control" name="project" required="">
                                    <option value=""> Select your project </option>
                                    <option value="City of Dreams Mohali"> City of Dreams Mohali </option>
                                    <option value="City of Dreams Zirakpur"> City of Dreams Zirakpur </option>
                                    <option value="CP67 Housing Park"> CP67 Housing Park </option>
                                    <option value="CP67 Housing Park"> CP67 Parivaas </option>
                                    <option value="CP67 Homes Gardenia "> CP67 Homes Gardenia </option>
                                    <option value="Elite Homes"> Elite Homes </option>
                                    <option value="CP67 City Gate"> CP67 City Gate </option>
                                    <option value="CP67 Townsquare"> CP67 Townsquare </option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group position-relative mb-3">
                                <button type="submit" name="submit" value="submit" class="btn btn-primary">Book a Free Consultation</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<section class="com_res_abo_git_property">
    <div class="container">
        <div class="col-md-12">
            <div>
                <h3 class="text-center">Best Real Estate Developer in Chandigarh</h3>
                <div>
                    <div>
                        <div class="short_content01">For 17 years, CP67 Group has been the name to reckon with in the real estate industry of Tricity (comprising Mohali, Zirakpur, and Derabassi). Our journey began with a simple yet profound mission: to offer unique architectural solutions. Today, we take pride in being recognized as one of the most reputable and customer-centric best builders in Chandigarh. Our foundation is built on a commitment to quality and client satisfaction.

                            <div class="more_content">
                                <p>Over the past 17 years, CP67 Group has woven a rich tapestry of excellence, adorning classy locations with top-notch interiors. This journey has positioned us as one of the most appealing and trusted brands in the region. Our presence in prime locations of Chandigarh, Mohali, and Zirakpur stands as a testament to our dedication to enhancing the living experience of our customers.</p>

                                <p>We celebrate our ability to deliver prestigious projects with efficiency, earning us a reputation as one of the best real estate developers in Chandigarh. Our success story is authored by the hard work and dedication of our team, which consistently strives for excellence in every facet of our business.</p>

                                <p>As a top real estate developer in Chandigarh, we recognize the importance of staying attuned to the ever-evolving demands of the real estate industry. Mohali, one of India's fastest-growing cities, has become a magnet for investors from Delhi and Haryana. Boasting 200 acres of parks and lakes, a sprawling international airport, and its proximity to the Chandigarh-Delhi Highway, Mohali is where dreams come to life.</p>

                                <p>Derabassi, another rising star in the real estate sector, has the potential to rival Noida and Gurgaon in terms of geography and growth. Being one of the fastest-growing IT cities in North India, it is poised for substantial capital appreciation in the coming months or year. Its proximity to Chandigarh and affordability compared to Delhi/NCR makes it an attractive investment opportunity.</p>

                                <p> Zirakpur, strategically located on the Chandigarh-Delhi Highway, is another hotspot for investors from Delhi and Haryana. With its immense potential and ongoing infrastructural advancements, Zirakpur presents an excellent investment opportunity for those seeking the right property.</p>

                                <p> We take immense pride in having delivered over 12,000 homes, earning the distinction of being the <strong>No.1 housing company in the Punjab</strong> region. Our team has successfully completed 28 projects, each of which is a testament to our commitment to quality and excellence.</p>

                                <p> At CP67 Group, we're committed to creating homes that reflect the aspirations and lifestyles of our customers. Our focus on innovation, quality, and, most&nbsp;importantly, customer satisfaction has made us one of the most trusted and sought-after brands in the real estate industry.</p>

                                <p> As we celebrate our 17th year of successful operations, we extend our heartfelt gratitude to our customers, employees, and partners for their unwavering support and trust in us. We eagerly anticipate continuing to provide innovative and quality solutions to our customers for years to come.</div></p>
                            </div>
                            <div class="more">
                                <a class="show_hide" data-content="toggle-text">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<?php
include('../base/base_footer.php');
?>