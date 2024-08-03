<?php
include('header.php');
?>


<!--Breadcrumb-->
        <section class="breadcrumb_banner half p_100">
            <div class="bread-left"></div>
            <div class="bread-right" style="background-image:url('assets/images/Cardiology.jpg');"></div>
            <div class="container">
                <div class="breadcrumb-container">
                    <div style="--bs-breadcrumb-divider: '-';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Book an Appointment</li>
                        </ol>
                    </div>
                    <div class="breadcrumb-content">
                        <h2>Book an Appointment</h2>
                    </div>
                </div>
            </div>
        </section>
        
        
        <!--Breadcrumb section End-->

<main class="book-an-appointment-page">
    <section class="p_100 book-an-appointment-form_section">
            <div class="container">
            <!--    <div class="home_speciality_top">-->
            <!--    <div class="main_heading">-->
            <!--        <h2>-->
            <!--            Book an Appointment-->
            <!--        </h2>-->
            <!--    </div>-->
            <!--</div>-->
                <div class="contact_right">
    					<div class="row">
                            <div class="col-md-6">
                                <div class="contact_input">
                                    <input type="text" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact_input">
                                    <input type="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact_input">
                                    <input type="text" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact_input">
                                    <select class="form-select" aria-label="Default select Speciality">
                                      <option selected>Select Speciality</option>
                                      <option value="1">One</option>
                                      <option value="2">Two</option>
                                      <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact_input">
                                    <select class="form-select" aria-label="Default select Doctor">
                                      <option selected>Select Doctor</option>
                                      <option value="1">One</option>
                                      <option value="2">Two</option>
                                      <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact_input">
                                    <input type="text" placeholder="Address (optional)">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact_input">
                                    <input type="date" class="form-control" placeholder="Select Date">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact_input">
                                    <input type="time" class="form-control" placeholder="Select Time">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="contact_input">
                                    <textarea placeholder="Messsage"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                    <a class="main_btn" href="#">
                                        Submit
                                    </a>
                                </div>
                        </div>
                    </div>
            </div>
        </section>
        
        
        <section class="patient-sec p_100">
            <div class="container">
                <div class="main_heading">
                    <h2>Patient Speaks</h2>
                </div>
                <div class="our-patient-slider">
                    <div class="owl-carousel patient-carousel owl-theme">
                        <a href="#">
                            <div class="patient-carousel-box">
                                <img src="assets/images/image 75.png" />
                                <div class="patient-carousel-content">
                                    <p>Successfully Performed CABG & Mitral Valve Replacement at Jaypee Hospital, Noiday</p>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="patient-carousel-box">
                                <img src="assets/images/image 76.png" />
                                <div class="patient-carousel-content">
                                    <p>Heart surgery of a baby from Bangladesh (বাংলাদেশি শিশুর হার্ট অপারেশন)</p>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="patient-carousel-box">
                                <img src="assets/images/image 70.png" />
                                <div class="patient-carousel-content">
                                    <p>At Jaypee, Iraqi Child treated successfully for Correction of Tetralogy of Fallot</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        
        
        
        
        
        
        
        
        
</main>


        
    
 <?php
include('footer.php');
?>