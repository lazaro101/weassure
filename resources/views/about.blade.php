@extends('layouts.web')

@section('content')

<div class="main">
        <div class="wrapper">
            <div class="section" style="background-image: url('assets/img/bg3.png')">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6" style="position: relative;">
                            <nav id="sidebar">
                                <ul>
                                    
                                        <br><br><br><br>
                                        <h2 style="text-shadow: 2px 2px yellow">Contents</h2>
                                    <li>
                                        <a href="#mission" style="color: red; font-size: 120%"><b> Mission</b></a>
                                    </li>
                                    <li>
                                        <a href="#vision" style="color: red; font-size: 120%"><b> Vision</b></a>
                                    </li>
                                    <li>
                                        <a href="#weassure" style="color: red; font-size: 120%"><b> Who is WEASSURE</b></a>
                                    </li>
                                    <li>
                                        <a href="#upp" style="color: red; font-size: 120%"><b>Universal Protection Program</b></a>
                                    </li>
                                    <li>
                                        <a href="#location" style="color: red; font-size: 120%"><b>Location & Schedule</b></a>
                                    </li>
                                    <li>
                                        <a href="#dealers" style="color: red; font-size: 120%"><b>Dealers</b></a>
                                    </li>
                                    <li>
                                        <a href="#provider" style="color: red; font-size: 120%"><b>Our Providers</b></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-lg-8 col-md-12">
                            
                           <div id="MS"></div>
                           <br>
                            <div class="tim-row tim-row-first">

                           <div id="mission"></div>
                           <br>
                            <div class="tim-row tim-row-first">
                                <h2 class="text-center title" style="text-shadow: 2px 2px yellow"><b>Mission</b></h2>
                                <legend></legend>
                                <center><p>
                                    To help Filipinos secure themselves first, by providing insurance products and services for life, health, retirement, investment, property and final expenses accessible and available in affordable packages. 
                                </p></center>
                            </div><br><br>
                            
                           <div id="vision"></div>
                           <br>
                            <div class="tim-row" id="vision">
                                <h2 class="text-center title" style="text-shadow: 2px 2px yellow"><b>Vision</b></h2>
                                <legend ></legend>
                                <center><p>
                                    To provide today, accessible products and services available in affordable packages for all. 
                                </p></center>
                            </div><br><br>

                             <div id="weassure"></div>
                           <br>
                            <div class="tim-row" id="vision">
                                <h2 class="text-center title" style="text-shadow: 2px 2px yellow"><b>Who is WEASSURE?</b></h2>
                                <legend></legend>
                                <center><p>
                                    World Expert Assurance Agency Inc. was formed from the synergy of five (5) seasoned insurance leaders who were motivated by their social responsibility to make  INSURANCE within the reach of the common people.  
                                </p></center>
                            </div><br><br>

                            <div id="upp"></div>
                           <br>
                            <div class="tim-row" id="vision">
                                <h2 class="text-center title" style="text-shadow: 2px 2px yellow"><b>Universal Protection Program</b></h2>
                                <legend></legend>
                                <center><p>
                                    A Comprehensive Multi-lines Coverage that will protect you and your family from the hazards of life, 24/7 for one year, anywhere in the world! Plus the convenience of securing too your car/s and property/ies from any future loss or damage.  
                                </p></center>
                            </div><br><br>
                            
                            
                            <div id="location"></div>
                            <br>
                            <div class="tim-row" style="background-image: url('assets/img/bg3.png')">
                                <!-- buttons row -->
                                <div class="tim-row" id="schedule">
                                    <h2 class="text-center title" style="text-shadow: 2px 2px yellow"><b>Location and Schedule</b></h2>
                                    <legend></legend>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m25!1m11!1m3!1d111.75230034348522!2d121.02662945851264!3d14.64280541906234!2m2!1f0!2f0.44477396671773667!3m2!1i1024!2i768!4f45.40714752069232!4m11!3e6!4m3!3m2!1d14.642783099999999!2d121.0266139!4m5!1s0x3397b6568edab4ed%3A0xa5eac3bda8586aa!2s43+Del+Monte+Ave%2C+Quezon+City%2C+1104+Metro+Manila!3m2!1d14.642396!2d121.02683599999999!5e1!3m2!1sen!2sph!4v1516093507344" width="800" width="750" height="350" frameborder="1" style="border:1" allowfullscreen></iframe></div>
                                    <br>
                                    <strong>Address:</strong> 2F One Night Cargo Forwarders Copr. Hub, Unit C Don Alex Bldg., Del Monte Ave. Near Corner West Ave., Quezon City<br>
                                        <strong>Open:</strong> Tuesday-Friday<br>
                                        <strong>Time:</strong> 9:00 am to 6:00 pm<br>
                                        <strong>Tel Nos:</strong> 722-4544/576-5357<br>
                                        <br><br>
                                    
                                <div id="dealers"></div>
                                <br>   
                                <div class="tim-row" id="doctor">
                                    <h2 class="text-center title" style="text-shadow: 2px 2px yellow"><b>Dealers</b></h2>
                                    <legend></legend><br>
                                    
                                    <center><img src="GSD/gsd/assets/img/tarp.jpg" class="img-thumbnail img-spin img-dog" style="height: 350px"></center>

                                    @foreach($emp as $emp)

                                        <h4 style="text-shadow: 1px 1px #3F51B5"><b>{{$emp->name}}</b></h4>
                                        <strong>Position:<b style="color: #ef5350">&nbsp;{{$emp->position}}</b></strong><hr>
                                    @endforeach
                        
                                        
                                        </div><br><br>
                                        <div id="provider"></div>
                                       <br>
                                        <div class="tim-row" id="vision">
                                            <h2 class="text-center title"><b>Our Providers</b></h2>
                                            <legend></legend>
                                            <p>
                                                <center><img src="GSD/gsd/assets/img/providers.jpg" class="img-thumbnail img-spin img-dog" style="height: 350px"></center>
                                            </p>
                                        </div><br><br>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js?ver=1.3.2'></script>
    <script type="text/javascript">
        $(function() {
            var offset = $("#sidebar").offset();
            var topPadding = 15;
            $(window).scroll(function() {
                if ($(window).scrollTop() > offset.top) {
                    if ($(window).scrollTop() > 3000) {
                        $("#sidebar").stop().animate({
                            marginTop: 0
                        });
                    } else {
                        $("#sidebar").stop().animate({
                            marginTop: $(window).scrollTop() - offset.top - 30
                        });
                    }
                } else {
                    $("#sidebar").stop().animate({
                        marginTop: 0
                    });
                }; 
            }); 
        });
    </script>
@endsection