<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
        <title>Your online books here</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
        <link rel="stylesheet" type="text/css"  href="css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css"/>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link rel="stylesheet" type="text/css" href="css/normalize.css"/>
        

        <style>
            .multi-item-carousel .carousel-inner > .item {/*for the Carousel (Starting)*/
                transition: .02ms left;
                transition-timing-function: ease-in-out;
            }
            .multi-item-carousel .carousel-inner .active.left {
                left: -20%;
            }
            .multi-item-carousel .carousel-inner .active.right {
                left: 20%;
            }
            .multi-item-carousel .carousel-inner .next {
               left: 20%;
            }
            .multi-item-carousel .carousel-inner .prev {
               left: -20%;
            }
            @media all and (transform-3d), (-webkit-transform-3d) {
                .multi-item-carousel .carousel-inner > .item {
                    transition-timing-function: ease;
                    transition: .02ms  left;
                    transition: .02ms  all;
                    backface-visibility: visible;
                    transform: none!important;
                }
            }
            .multi-item-carousel .carouse-control.left,
            .multi-item-carousel .carouse-control.right {
                background-image: none;
                background-color: red;
                color: red;
            }
            .grid-container {
                display:  block;
                row-gap: 0;
                column-gap:unset;
                grid-template-columns: 200px;
                background-color: activecaption;
                margin-right: 15px;
                margin-top: 30px;
                padding: 0px;
                width:290px;
                height: 550px;
                border-radius: 25px;
                box-shadow: 1px 10px 15px rgb(102, 153, 153);
                //box-sizing: border-box;
            }
            #details_recommend_item:before{
                content: "";
                width:0;
                height: 0;
                top: 50%;
                left: 50%;
                transform: translate(-50%,-50%);
                background-color: transparent;
                transition: .50ms;
                z-index: -1;
                position: relative;
                border-radius: 5px;
            }
            .grid-container:hover{
                position: relative;
                background-color: azure;
                transform: scale(1.01);
                box-shadow: 2px 2px 2px #000;
                z-index: 7;
            }

            .grid-item {
                width: 290px;
                height: 250px;
                background-color: rgba(255, 255, 255, 0.8);
                border: 5px solid rgba(0, 0, 0, 0.8);
                font-size: 20px;
                text-align: center;
                align-items:center;
                //margin: 0px 0px 0px 0px;
                padding: 0px;
            }
            #img_recommendDivID{
                width: 290px;
                height:270px;
                object-fit: fill;
            }
            #img_recommend{
                width: 280px;
                height:270px;
                display: block;
                margin-left: auto;
                margin-right: auto;
            }
            #details_recommend_item{
                width: 290px;
                height:280px;
                z-index: 1;
                transition: .5ms;
            }
            .btnread_more_div{
                position: absolute;
                right: 0;
                left: 0;
                bottom: 0px;
                padding-bottom: 10px;
            }
            .paragraph_details_more{
                width: 290px;
                height:150px;
                text-align: inherit;
                padding-right: 25px;
                margin: 5px;
                overflow: hidden;
            }
            #popularItemSliderID > .rowSlider > .col-md-12 > .carousel > .head-recommend > .text-in-center > h1 {/*Starting head content of the recommend section*/
                display: grid;
                grid-template-columns: 1fr auto 1fr;
                gap: 5px;
                border-bottom: 1px solid buttonface;
                padding: 5px;
                margin: 5px;
            }
            #popularItemSliderID > .rowSlider > .col-md-12 > .carousel > .head-recommend > .text-in-center > h1::after, h1::before {/*Ending head content of the recommend section*/
                content: "__________________";
                text-align: center;
                margin: 5px;
            }/*for the Carousel(Ending)*/


        </style>
    </head>

        <div class="container"><!--Start the main container-->
            <div class="box" id="header"><!--Starting the header section-->
                <div class="labSidenav" id="sidenav">
                    <ul class="nav nav-pills nav_list" id="ul_header_list">
                        <li><!--Starting the hidden sidbar in the header section-->
                            <div id="mySidepanel" class="sidepanel">
                                <div class="nav_content">
                                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><span style='font-size:25px;'>&#10006;</span></a>
                                    <h1 class="text-justify"> Subjects</h1><hr style="border:5px solid darkblue;">
                                    <a href="#">Agriculture, Aquaculture & Food Science</a>
                                    <a href="#">Architecture & Planning</a>
                                    <a href="#">Business, Economics, Finance & Accounting</a>
                                    <a href="#">Chemistry</a>
                                    <a href="#">Computer Science & Information Technology</a>
                                    <a href="#">Earth, Space & Environmental Sciences</a>
                                    <a href="#">Humanities</a>
                                    <a href="#">Law & Criminology</a>
                                    <a href="#">Life Sciences</a>
                                    <a href="#">Mathematics & Statistics</a>
                                    <a href="#">Medicine</a>
                                    <a href="#">Nursing, Dentistry & Healthcare</a>
                                    <a href="#"> Physical Sciences & Engineering</a>
                                    <a href="#">Psychology</a>
                                    <a href="#">Social & Behavioral Sciences</a>
                                    <a href="#">Veterinary Medicine</a>
                                    <br style="border:1px solid springgreen"><h2 class="text-justify"><em>And More</em></h2>
                                    <a href="#">Services</a>
                                    <a href="#">Clients</a>
                                    <a href="#">Contact</a> 
                                    <hr style="border:10px solid blue;">
                                </div>
                            </div>
                        </li><!--End the hidden sidbar in the header section-->
                        <li><button onclick="openNav()" class="btn btn-link bd-search-docs-toggle d-md-none p-0 ml-3 openbtn" type="button" data-toggle="collapse" data-target="#bd-docs-nav" aria-controls="bd-docs-nav"  aria-label="Toggle docs navigation"><svg viewbox="0 0 30 30" width="30" height="30"><path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M4 7h22M4 15h22M4 23h22"/></svg></button></li>
                        <li class="nav-item active"><a href="#">Home</a></li>
                        <li><a href="#">Main Categories</a></li>
                        <li class="nav-item">
                            <a class="dropdown-toggle focus" data-toggle="dropdown">Discover Me
                            <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action & Adventure</a></li>
                                <li><a href="#">Bios & History</a></li>
                                <li><a href="#">Children's</a></li>
                                <li><a href="#">Historical Fiction</a></li>
                                <li><a href="#">Fantasy</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a  href="#" class="nav-link">Authors</a></li>
                        <li class="nav-item"><a  href="#" class="nav-link">Popular Books</a></li>
                        <li class="nav-item"  ><a id="lastList" href="#" class="nav-link">Contacts</a></li>
                        <!--<li class="nav-item"><a  href="#" class="nav-link">About</a></li>-->
                        <li> <input type="submit" class="btn btn-primary" id="login" value="Login"></li>
                        <li> <input type="submit" class="btn btn-primary" id="sinup" value="Sign up">
                   </ul>
                </div>
                <div class="labSidenav" id="login_sinup_div">
                    <ul class="list-inline">
                        <!--div for login user-->
                   </ul>
                </div>
                <div class="labSidenav" id="search_group">
                    <form class="bd-search d-flex align-items-center form-group" role="form">
                        <div class="container-fluid ">
                          <div class="row">
                              <div class="col-md-4">
                              </div>
                            <div class="col-md-4" id="div_search_input"><input type="search" class="form-control" style="width:370px;" id="search-input" placeholder="Search..." aria-label="Search for..."></div>
                            <div class="col-md-4" id="div_search_button"> <button type="submit" class="btn btn-primary" id="searchbtn"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button></div>
                          </div>
                        </div>
                    </form>
                </div>
            </div><!--End  the header section-->
            <div class="box" id="nav"><!--Start the content in the nav section-->
                <div class="container-fluid left_bar_class" id="leftNav" style="background-color:  #eff5f5;">
                    <div class="f_sideBarSection">
                        <h2>First title</h2>
                        <ul>
                            <li><a href="">hi</a></li>
                            <li><a href="">hey</a></li>
                            <li><a href="">Hello</a></li>
                        </ul>
                        
                    </div>
                    <div class="s_sideBarSection">
                        <h2>second title</h2>
                        <ul>
                            <li>hi</li>
                            <li>hello</li>
                            <li>welcome</li>
                        </ul>
                    </div>                  
                    <div class="t_sideBarSection">
                        <h2 style="">third title</h2>
                        <ul>
                            <li>hi</li>
                            <li>hello</li>
                            <li>welcome</li>
                        </ul>
                    </div>           
                    <div>
                        <h2>four title</h2>
                        <ul>
                            <li>hi</li>
                            <li>hello</li>
                            <li>welcome</li>
                        </ul>
                    </div>
                </div>
            </div><!--Ending the nav section-->
            <div class="box" id="main"><!--Start the content of the body section-->
                <div class="mainContent">
                    <div class="mainbox card" id="product_template">
                        <img src="./images/books/books1.jpg" alt="books" id="imgcon">
                        <div id="product_view" class="container-fluid view_book">
                        <h2><strong>John Doe </strong></h2>
                        <p>Architect & Engineer Architect & Engineer Architect & Engineer Architect & EngineerArchitect & Engineer Architect & Engineer
                        nice books here good books</p>
                        </div>
                        <div class="read_more">
                            <button class="btn btn-secandary" style="background-color: #1aa3ff;" type="submit">Read More...</button>
                        </div>
                    </div>
                     <div class="mainbox card">
                        <img src="./images/books/books4.jpg" alt="books" style="width:100%">
                        <div class="container-fluid view_book">
                        <h2><strong>John Doe </strong></h2>
                        <p>Architect & Engineer</p>
                        </div>
                        <div class="read_more"><button class="btn btn-secandary" style="background-color: #1aa3ff;" type="submit">Read More...</button></div>
                    </div>
                    <div class="mainbox card">
                        <img src="./images/books/books3.jpg" alt="books" style="width:100%">
                        <div class="container-fluid view_book">
                        <h2><strong>3John Doe </strong></h2>
                        <p>Architect & Engineer</p>
                        <p>nice books here good books nice books here good books nice books here good books nice books here good books
                           nice books here good books here good books here good books here good books
                        </p>
                        </div>
                        <div class="read_more">
                               <button class="btn btn-secandary" style="background-color: #1aa3ff;" type="submit">Read More...</button>
                        </div>
                    </div>
                    <div class="mainbox card">
                        <img src="./images/books/books2.jpg" alt="books" style="width:100%">
                        <div class="container-fluid view_book">
                        <h2><strong>John Doe </strong></h2>
                        <p>Architect & Engineer</p>
                        <p>nice books here good books</p>
                        </div>
                        <div class="read_more">
                            <button class="btn btn-secandary" style="background-color: #1aa3ff;" type="submit">Read More</button>
                        </div>
                    </div>  
                    <div class="mainbox card">
                        <img src="./images/books/book6.jpg" alt="books" style="width:100%">
                        <div class="container-fluid view_book">
                        <h2><strong>John Doe </strong></h2>
                        <p>Architect & Engineer</p>
                        <p>nice books here good books</p>
                        </div>
                        <div class="read_more">
                            <button class="btn btn-secandary" style="background-color: #1aa3ff;" type="submit">Read More</button>
                        </div>
                    </div>        
                    <div class="mainbox card">
                        <img src="./images/books/book7.jpg" alt="books" style="width:100%">
                        <div class="container-fluid view_book">
                        <h2><strong>John Doe </strong></h2>
                        <p>Architect & Engineer</p>
                        <p>nice books here good books</p>
                        </div>
                        <div class="read_more">
                            <button class="btn btn-secandary" style="background-color: #1aa3ff;" type="submit">Read More</button>
                        </div>
                    </div>                    <div class="mainbox card">
                        <img src="./images/books/book8.jpg" alt="books" style="width:100%">
                        <div class="container-fluid view_book">
                        <h2><strong>John Doe </strong></h2>
                        <p>Architect & Engineer</p>
                        <p>nice books here good books</p>
                        </div>
                        <div class="read_more">
                            <button class="btn btn-secandary" style="background-color: #1aa3ff;" type="submit">Read More</button>
                        </div>
                    </div>                
                    <div class="mainbox card">
                        <img src="./images/books/book9.jpg" alt="books" style="width:100%">
                        <div class="container-fluid view_book">
                        <h2><strong>John Doe </strong></h2>
                        <p>Architect & Engineer</p>
                        <p>nice books here good books</p>
                        </div>
                        <div class="read_more">
                            <button class="btn btn-secandary" style="background-color: #1aa3ff;" type="submit">Read More</button>
                        </div>
                    </div>                                 
                </div>
            </div><!--End the content of the body section-->               
            <div class="box popularItemSlider" id="popularItemSliderID" style="width: 100%; height: 700px;"><!--Start the recommend section-->
                <div class="row rowSlider">
                    <div class="col-md-12">
                        <div class="carousel slide multi-item-carousel" id="theCarousel">
                            <div class="head-recommend" style="display: block; text-align: center;">
                                <div class="text-in-center"><!--Content of the the heading of the recommended div under the items-->
                                        <h1>May You Love...</h1>
                                </div>
                            </div>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="col-xs-4">
                                            <div class="grid-container">
                                                <div class="grid-item" id="img_recommendDivID">
                                                    <img id="img_recommend" src="./images/books/books1.jpg" class=""> 
                                                </div>
                                                <div class="grid-item" id="details_recommend_item" >
                                                    <h2>Hi i'm developer!!!</h2>
                                                    <p class="paragraph_details_more">your  title details hi i'm etc...
                                                         Tacos actually microdosing, pour-over semiotics banjo chicharrones 
                                                         Tacos actually microdosing, pour-over semiotics banjo chicharrones 
                                                         Tacos actually microdosing, pour-over semiotics banjo chicharrones 
                                                         Tacos actually microdosing, pour-over semiotics banjo chicharrones 
                                                         Tacos actually microdosing, pour-over semiotics banjo chicharrones 
                                                         Tacos actually microdosing, pour-over semiotics banjo chicharrones 
                                                         Tacos actually microdosing, pour-over semiotics banjo chicharrones 
                                                    </p>
                                                    <div class="btnread_more_div">
                                                        <button  class="btn btn-secandary" style="background-color: #1aa3ff;" type="submit">Read More...</button>
                                                    </div>
                                                </div>  
                                            </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-xs-4">
                                        <div class="grid-container">
                                            <div class="grid-item" id="img_recommendDivID">
                                                <img id="img_recommend" src="./images/books/books2.jpg" class=""> 
                                            </div>
                                            <div class="grid-item" id="details_recommend_item" >
                                                <h2>Hi i'm nie!!!</h2>
                                                <p class="paragraph_details_more">your  title details hi i'm etc...
                                                 actually microdosing, pour-over semiotics banjo chicharrones 
                                                 actually microdosing, pour-over semiotics banjo chicharrones 
                                                 actually microdosing, pour-over semiotics banjo chicharrones 
                                                 actually microdosing, pour-over semiotics banjo chicharrones 
                                                 actually microdosing, pour-over semiotics banjo chicharrones 
                                                  actually microdosing, pour-over semiotics banjo chicharrones 
                                                </p>
                                                <div class="btnread_more_div">
                                                    <button  class="btn btn-secandary" style="background-color: #1aa3ff;" type="submit">Read More...</button>
                                                </div> 
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-xs-4">
                                        <div class="grid-container">
                                            <div class="grid-item" id="img_recommendDivID">
                                                <img id="img_recommend" src="./images/books/books3.jpg" class=""> 
                                            </div>
                                            <div class="grid-item" id="details_recommend_item" >
                                                <h2>Hi i'm okay!!!</h2>
                                                <p class="paragraph_details_more">your  title details hi i'm etc...
                                                       good  actually microdosing, pour-over semiotics banjo chicharrones 
                                                       good actually microdosing, pour-over semiotics banjo chicharrones 
                                                       good actually microdosing, pour-over semiotics banjo chicharrones 
                                                       good actually microdosing, pour-over semiotics banjo chicharrones 
                                                       good actually microdosing, pour-over semiotics banjo chicharrones 
                                                       good actually microdosing, pour-over semiotics banjo chicharrones 
                                                       good actually microdosing, pour-over semiotics banjo chicharrones 
                                                </p>
                                                <div class="btnread_more_div">
                                                        <button  class="btn btn-secandary" style="background-color: #1aa3ff;" type="submit">Read More...</button>
                                                </div> 
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-xs-4">
                                        <div class="grid-container">
                                            <div class="grid-item" id="img_recommendDivID">
                                                   <img id="img_recommend" src="./images/books/books4.jpg" class=""> 
                                            </div>
                                            <div class="grid-item" id="details_recommend_item" >
                                                    <h2>Hi i'm designer!!!</h2>
                                                    <p class="paragraph_details_more">your  title details hi i'm etc...
                                                       fine actually microdosing, pour-over semiotics banjo chicharrones 
                                                       fine actually microdosing, pour-over semiotics banjo chicharrones 
                                                       fine actually microdosing, pour-over semiotics banjo chicharrones 
                                                       fine actually microdosing, pour-over semiotics banjo chicharrones 
                                                       fine actually microdosing, pour-over semiotics banjo chicharrones 
                                                       fine actually microdosing, pour-over semiotics banjo chicharrones 
                                                       fine actually microdosing, pour-over semiotics banjo chicharrones 
                                                    </p>
                                                    <div class="btnread_more_div">
                                                        <button  class="btn btn-secandary" style="background-color: #1aa3ff;" type="submit">Read More...</button>
                                                    </div>                     
                                                </div>   
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-xs-4">
                                        <div class="grid-container">
                                            <div class="grid-item" id="img_recommendDivID">
                                                <img id="img_recommend" src="./images/books/books5.jpg" class=""> 
                                                </div>
                                                <div class="grid-item" id="details_recommend_item" >
                                                    <h2>Hi i'm User!!!</h2>
                                                    <p class="paragraph_details_more">your  title details hi i'm etc...
                                                       nice actually microdosing, pour-over semiotics banjo chicharrones 
                                                       nice actually microdosing, pour-over semiotics banjo chicharrones 
                                                       nice actually microdosing, pour-over semiotics banjo chicharrones 
                                                       nice actually microdosing, pour-over semiotics banjo chicharrones 
                                                       nice actually microdosing, pour-over semiotics banjo chicharrones 
                                                    </p>
                                                    <div class="btnread_more_div">
                                                        <button  class="btn btn-secandary" style="background-color: #1aa3ff;" type="submit">Read More...</button>
                                                    </div>                     
                                                </div>   
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-xs-4">
                                        <div class="grid-container">
                                                <div class="grid-item" id="img_recommendDivID">
                                                   <img id="img_recommend" src="./images/books/Essential-Books.jpg" class=""> 
                                                </div>
                                                <div class="grid-item" id="details_recommend_item" >
                                                    <h2>Hi i'm HR!!!</h2>
                                                    <p class="paragraph_details_more">your  title details hi i'm etc...
                                                        microdosing, pour-over semiotics banjo chicharrones 
                                                        actually microdosing, pour-over semiotics banjo chicharrones 
                                                        actually microdosing, pour-over semiotics banjo chicharrones 
                                                        actually microdosing, 
                                                        pour-over semiotics banjo chicharrones 
                                                       Tacos actually microdosing, pour-over semiotics banjo chicharrones 
                                                    </p>
                                                    <div class="btnread_more_div">
                                                        <button  class="btn btn-secandary" style="background-color: #1aa3ff;" type="submit">Read More...</button>
                                                    </div>                     
                                                </div>   
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-xs-4">
                                        <div class="grid-container">
                                            <div class="grid-item" id="img_recommendDivID">
                                                 <img id="img_recommend" src="./images/books/books5.jpg" class=""> 
                                            </div>
                                            <div class="grid-item" id="details_recommend_item" >
                                                  <h2>Hi i'm GOOd!!!</h2>
                                                  <p class="paragraph_details_more">your  title details hi i'm etc...
                                                     Tacos actually microdosing, pour-over semiotics banjo chicharrones 
                                                     Tacos actually microdosing, pour-over semiotics banjo chicharrones 

                                                  </p>
                                                  <div class="btnread_more_div">
                                                      <button  class="btn btn-secandary" style="background-color: #1aa3ff;" type="submit">Read More...</button>
                                                  </div>                     
                                            </div>   
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a style="width: 50px;" class="left carousel-control" href="#theCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                            <a style="width: 50px;" class="right carousel-control" href="#theCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div><!--Ending the recommend section-->
            
            <div class="box footer" id="footer"><!--Start the footer section-->
                <br>
                <div class="footercontent"> 
                    <p> ?? 2021  All Rights Reserved, Abdallah Mahmoud </p>
                </div>
            </div><!--End the footer section-->
        </div>

        <script src="js/jquery-3.2.1.min.js"><!--loading the js file section-->
        </script>
        <script src="js/bootstrap.js"></script>  
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script>
        
         // Instantiate the Bootstrap carousel
        $('.multi-item-carousel').carousel({
          interval: false
        });

        // for every slide in carousel, copy the next slide's item in the slide.
        // Do the same for the next, next item.
        $('.multi-item-carousel .item').each(function(){
          var next = $(this).next();
          if (!next.length) {
            next = $(this).siblings(':first');
          }
          next.children(':first-child').clone().appendTo($(this));

          if (next.next().length>0) {
            next.next().children(':first-child').clone().appendTo($(this));
          } else {
                $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
          }
        });
        </script>
        <script>            
        function openNav() { /*js fun to open the hidden horizontal nav on the left */
            document.getElementById("mySidepanel").style.width = "250px";
        }
        
        function closeNav() { /*js fun to  hide the horizontal nav on the left  */
            document.getElementById("mySidepanel").style.width = "0";
        }
        $(window).on('load', function() { /*js fun to  open  the horizontal nav on the left when the page is loading  */
            document.getElementById("mySidepanel").style.width = "250px";
        });

    </script>

    </body>   
</html>
