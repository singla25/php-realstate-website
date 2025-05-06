<?php
include('../base/base_header.php');
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="cum_width">
                <div class="contact_us">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="office_details">

                                <h1 class="font25">Contact Us</h1>
                                <p class="office_details_p">
                                    We appreciate your Interest in CP67 Group. Please submit your Business Query Below<br>
                                    WHY DON’T YOU JOIN US OVER A CUP OF TEA AND TELL US ABOUT YOUR DREAM HOME?
                                </p>

                                <h5>Corporate Office Address:</h5>
                                <p class="office_details_p">
                                    PLOT NO. 1265-C<br>SECTOR-82 J.L.P.L.,<br>INDUSTRIAL AREA, SAS NAGAR MOHALI<br>SAS Nagar, Punjab<br>Pin Code – 140308
                                </p>
                                <div class="why">
                                    <label>WHY NOT RING US ON?</label>
                                    <p class="office_details_p">Call: <a href="#">9886 00 9898</a></p>
                                    <p class="office_details_p">E-mail: <a href="#">digital@cp67group.in</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div id="sidebarWrap" class="fixed_sidebar">

                                <h5>Send us your query</h5>
                                <form action="#" id="contact_form_S" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="url" value="#">
                                    <input type="hidden" name="type" value="Contact Form">
                                    <div class="form">
                                        <div class="form-block">
                                            <input type="text" class="form-control" name="yourname" placeholder="Full Name" required="">
                                        </div>
                                        <div class="form-block">
                                            <select>
                                                <option>+91</option>
                                            </select>
                                            <input type="text" class="form-control" name="phone" placeholder=" Phone Number" required="">
                                        </div>
                                        <div class="form-block">
                                            <input type="email" class="form-control" name="youremail" placeholder=" Email Address" required="">
                                        </div>
                                        <div class="form-block">
                                            <textarea class="form-control" name="message" placeholder=" Purpose" required=""></textarea>
                                        </div>
                                        <div class="check">
                                            <label class="label">
                                                <input type="checkbox" name="interested_in_home_loan" value="yes"> I am interested in home loans.
                                            </label>
                                            <label class="label">
                                                <input type="checkbox" name="checkbox" value="text" required=""> I agree to be contacted by CP67 Group and their partners via WhatsApp, SMS, Phone, Email etc.
                                            </label>
                                        </div>

                                        <div class="submit">
                                            <button type="submit" name="submit1" value="submit" fdprocessedid="dlgohh">Submit</button>
                                        </div>
                                        <p>By continuing, you agree to our T&amp;Cs and Privacy Policy.</p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="officeslist">
                <div class="one_offi_01">
                    <div class="ofice_img">
                        <a href="https://maps.app.goo.gl/NpD3FWXbtCbkVL4s6" target="_blank"><img src="https://www.sbpgroup.in/wp-content/uploads/2023/12/location1.jpg"></a>
                    </div>
                    <div class="ofice_content">
                        <h3>CP67 CITY OF DREAMS (Mohali)</h3>
                        <p>Kharar-Landran Highway, Sector 127, Mohali</p>
                    </div>
                </div>

                <div class="one_offi_01">
                    <div class="ofice_img">
                        <a href="https://maps.app.goo.gl/uEk6dXR6MBKU62N58" target="_blank"><img src="https://www.sbpgroup.in/wp-content/uploads/2023/12/location2.jpg"></a>
                    </div>
                    <div class="ofice_content">
                        <h3>CP67 CITY OF DREAMS (Zirakpur)</h3>
                        <p>High Ground Road, Zirakpur</p>
                    </div>
                </div>

                <div class="one_offi_01">
                    <div class="ofice_img">
                        <a href="https://maps.app.goo.gl/M2W11be6s9Z9uxoN8" target="_blank"><img src="https://www.sbpgroup.in/wp-content/uploads/2023/12/map3.jpg"></a>
                    </div>
                    <div class="ofice_content">
                        <h3>CP67 Housing Park (Derabassi)</h3>
                        <p>Chandigarh-Delhi Highway, Sector 18, NH-22, Derabassi, Punjab</p>
                    </div>
                </div>

                <div class="one_offi_01">
                    <div class="ofice_img">
                        <a href="https://maps.app.goo.gl/qNz9n6xH45UgDZbJ9" target="_blank"><img src="https://www.sbpgroup.in/wp-content/uploads/2023/12/map4.jpg"></a>
                    </div>
                    <div class="ofice_content">
                        <h3>CP67 F-Towers (Ludhiana)</h3>
                        <p>Tower No. K-10, Feroz Gandhi Market, Ludhiana</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php
include('./exploring.php');
?>

<?php
include('../base/base_footer.php');
?>