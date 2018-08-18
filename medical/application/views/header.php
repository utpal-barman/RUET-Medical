<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>RUET Medical</title>

<!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
<!--  W3 CSS -->
        <link href="css/w3.css" rel="stylesheet">
        
<!--        Time Script-->
<script type="text/javascript">
    function display_ct(){
    var strcount;
    var x = new Date();
    var x1 = x.getHours() +" : "+ x.getMinutes() +" : "+ x.getSeconds();
    document.getElementById('ct').innerHTML = x1;
    } 
</script>



<!--   For Slider Only -->
        <link href="slider/js-image-slider.css" rel="stylesheet" type="text/css" />
        <script src="slider/js-image-slider.js" type="text/javascript"></script>

        
<!--  Adding Navigation Hover Style -->
        <style>
            .nav > li > a:hover {
                background-color:#FCC;
            }
        </style>
    </head>



    <body>


          <div>
          <ul class="w3-navbar w3-large w3-black w3-left-align navbar-fixed-top">
                   <li class="w3-hide-medium w3-hide-large w3-black w3-opennav w3-right">
                             <a href="javascript:void(0);" onclick="myFunction()">☰</a>
                   </li>

                    <li class=""> <a href="home">প্রথম পাতা</a></li>
                    <li class=""><a href="signup">সাইন আপ</a></li>
                    <li class=""><a href="signin">লগইন</a></li>
                    <li class=""><a href="fund">Save a RUETIAN's Life!</a></li>
          </ul>

           <div id="demo" class="w3-hide w3-hide-large w3-hide-medium">
                   <ul class="w3-navbar w3-left-align w3-large w3-black">
                            <li><a href="signup">সাইন আপ</a></li>
                            <li><a href="signin">লগইন</a></li>
                            <li class=""><a href="fund">Save a RUETIAN'S LIFE!</a></li>
                   </ul>
           </div>
          </div> <br>
      



<!--    RUET Logo-->
        <div class="container-fluid" style="background: linear-gradient(-90deg, #002200 , #23db38);">
            
            <div class="w3-row">
                <div class="w3-quarter">
                    <br> <br>
                    <center>
                     <div class="w3-btn w3-deep-purple w3-round-large">রুয়েট মেডিকেলে স্বাগতম </div>
                    </center>
                </div>
                
                <div class="w3-half"> 
                    <center>
                        <img src="img/ruet.png" class="img-responsive" style="padding-top: 20px; padding-bottom: 20px;"/>
                    </center>
                </div>
                

                <div class="w3-quarter">
                    <br> <br>
                    <center>
                        
<!--             If logged in-->
                   <?php if (!$this->session->userdata('username')=="") : ?>
                        <div class="w3-dropdown-hover">
                            <button class="w3-btn w3-blue">
                                <?php echo 'স্বাগতম! '.$this->session->userdata('username');?>
                            </button>
                            <div class="w3-dropdown-content w3-border">
                                <a href="stu_main">আপনার একাউন্ট</a>
                                <a href="signin/logout">লগ আউট (Logout)</a>
                            </div>
                        </div>
                    <?php else : ?>
                        <button onclick="location.href='signin';" class="w3-btn w3-green w3-round w3-animate-zoom w3-hover-light-grey"> লগ ইন </button>
                        <button onclick="location.href='signup';" class="w3-btn w3-green w3-round w3-animate-zoom w3-hover-light-grey"> একাউন্ট নেই? সাইন আপ </button>
                    <?php endif; ?>
                    </center> 
                </div>
            </div>
        </div>

<!--    Latest Medical Information Marquee Scroll -->
        <div class="container-fluid" style="background: black; color: white; padding: 5px;">
            <marquee>
                    **রুয়েট মেডিকেলে স্বাগতম।       
                    **শুক্রবার সাপ্তাহিক বন্ধ।
                    **এম্বুলেন্সের জন্য কল করুন- ডঃ মোঃ মোকসেদ আলী, চীফ মেডিকেল অফিসার, মোবাইলঃ 01915997662, 
                      ফোনঃ 07217507423 অথবা 111.
                    **২৪ ঘন্টা ফ্রী ইমার্জেন্সি এম্বুলেন্স সার্ভিস।
            </marquee>
        </div>

<!--    Main Body -->
        <div class="container-fluid">
<!--    Start Container -->