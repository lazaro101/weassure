@extends('layouts.web')

@section('content')

<div class="main">
    <br>
    <h1 class="text-center">World Expert Assurance Inc. <br><small class="small" style="color: gray">"Our Service is your Assurance!"</small></h1>
    <br><br><br>

    <center>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3>Our Products</h3><a href="/Products">
                    <img src="GSD/gsd/assets/img/product.png" alt="Circle Image" class="img-thumbnail img-spin" style="border-radius: 17px; background-color: #FFEB3B; width: 200px"></a>
             
                </div>
                <div class="col-md-4">
                    <h3>Our Dealers</h3><a href="/About">
                    <img src="GSD/gsd/assets/img/dealers.png" alt="Circle Image" class="img-thumbnail img-spin img-dog" style="border-radius: 17px; background-color: #FFEB3B; width: 200px"></a>
                   
                </div>
                <div class="col-md-4">
                    <h3>Contact Us</h3><a href="#contacts">
                    <img src="GSD/gsd/assets/img/contact.png" alt="Circle Image" class="img-thumbnail img-spin" style="border-radius: 17px; background-color: #FFEB3B; width: 200px"></a>
                    
                </div>

            </div>
        </div>
    </center><br><br><br><br><br><br>



    <div class="container" style="background-image: url('GSD/gsd/assets/img/bg3.png')">
        <h1 class="text-center" style="color: red; text-shadow: 2px 2px yellow; font-family: Verdana;" ><big><strong>Why Choose Us?</strong></big></h1>

        <div class="container tim-container" style="background-image: url('GSD/gsd/assets/img/bg3.png')">
            <div id="extras">
                <div class="space"></div>
                <div class="row">
                    <div class="col-md-7">
                        <h1 class="text-center">Quality at a Reasonable Price</h1>
                        <hr>
                        <p>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text 
                        </p>
                    </div>
                    <div class="col-md-5">
                        <div class="text-center">
                            <img src="GSD/gsd/assets/img/qual.jpg" style="height: 330px; width: 500px;border-radius: 5%;" alt="Rounded Image" class="img-thumbnail img-responsive img-dog">
                        </div>
                    </div>
                </div>
            </div>   
        </div>

        <div class="container tim-container" style="background-image: url('GSD/gsd/assets/img/bg3.png')">
            <div id="extras">
                <div class="space"></div>
                <div class="row">
                    <div class="col-md-5 col-sm-offset-">
                        <div class="text-center">
                            <img src="GSD/gsd/assets/img/cc.jpg" style="height: 330px; width: 500px;border-radius: 5%;" alt="Rounded Image" class="img-thumbnail img-responsive img-dog">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <h1 class="text-center">Excellent Customer Service</h1>
                        <hr>
                        <p>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text  
                        </p>
                    </div>
                </div>
            </div>  
        </div>

        <div class="container tim-container" style="background-image: url('GSD/gsd/assets/img/bg3.png')">
            <div id="extras">
                <div class="space"></div>
                <div class="row">
                    <div class="col-md-7">
                        <h1 class="text-center">Owned and Managed by Experts</h1>
                        <hr>
                        <p>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text
                        </p>
                    </div>
                    <div class="col-md-5">
                        <div class="text-center">
                            <img src="GSD/gsd/assets/img/owner.jpg" style="height: 330px; width: 500px;border-radius: 5%;" alt="Rounded Image" class="img-thumbnail img-responsive img-dog">
                        </div>
                    </div>
                </div>
            </div>  
        </div>

        <div class="container">
            <center><h2><a href="#contacts" style="font-size: 70%"><b>Apply Now!</b></a></h2></center>
            <img src="GSD/gsd/assets/img/career.jpg" alt="Circle Image" class="img-thumbnail img-spin" style="background-color: #fef200; "></a>
            <i id="contacts"></i>  
        </div><br><br><br><br><br>

        <div class="row">
            <div class="col-md-6">
                <center><strong><big><big style="font-family: sans-serif">For Inquiries</big></big></strong></center><br>
                <big><big><big><big><i class="fa fa-mobile"></i><label></label><br>
                <i class="fa fa-mobile"></i><label></label><br>
                <i class="fa fa-mobile"></i><label></label></big></big></big></big>
            </div>

            <div class="col-md-6">
                <div class="card card-background">
                    <div class="image">
                        <div id="card-product-carousel" class="carousel slide" data-ride="carousel">
                          <!-- Wrapper for slides -->
                          <div class="carousel-inner">
                            <div class="item active">
                              <img src="GSD/gsd/assets/img/product.jpg" alt="">
                            </div>
                            <div class="item">
                              <img src="GSD/gsd/assets/img/product.jpg" alt="">
                            </div>
                            <div class="item">
                              <img src="GSD/gsd/assets/img/product.jpg" alt="">
                            </div>
                          </div>

                          <!-- Controls -->
                          <a class="left carousel-control" href="#card-product-carousel" data-slide="prev">
                            <span class="fa fa-angle-left"></span>
                          </a>
                          <a class="right carousel-control" href="#card-product-carousel" data-slide="next">
                            <span class="fa fa-angle-right"></span>
                          </a>
                        </div>
                    </div>
                </div> <!-- end card -->
            </div>

        </div>
    </div>
</div>

@endsection