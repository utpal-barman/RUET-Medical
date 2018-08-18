<?php include_once('header.php');

if (!$this->session->userdata('username')==""): ?>
<div class="container-fluid" style="padding: 40px 20px 40px 20px;" align="center">
    <h2> মেডিকেল সেন্টারে আপনাকে স্বাগতম </h2> <br/>
    <button onclick="location.href='stu_main';" class="btn btn-success"> Schedule </button>
    <button onclick="location.href='appointment';" class="btn btn-success"> Appointment List </button>
    <button onclick="location.href='apply';" class="btn btn-success"> Apply for a meet </button>
    <button onclick="location.href='previous';" class="btn btn-success"> Previous Details </button>
    <button onclick="location.href='about';" class="btn btn-success"> About Medical </button>
    <button onclick="location.href='ambulance';" class="btn btn-success"> Ambulance </button>
</div>
<?php else:?>
<div class="container-fluid" style="padding: 40px 20px 40px 20px;" align="center">
    <h1> <b> RUET Medical <font color="red"> LIVE!</font> </b> </h1>
</div>
<?php endif; ?>


<!--The Brown Box Time, Date-->
    <br> 
    <div class="w3-card-24 w3-padding-16 w3-round w3-hover-blue-grey w3-brown w3-round-jumbo" align="center">
        <?php
            date_default_timezone_set("asia/dhaka");
            echo date("h:ia"); ?> <br> 
        <?php echo date("l"); ?> <br>
        <?php echo date("d M Y"); ?> <br> <br>
        <div class="w3-card-8 w3-blue w3-padding-12 container w3-round-jumbo"> Doctor in Chamber:
            <b>
                <?php
                $day = date("l");
                $Hour = date('G');
                if($day!="Friday"){
                    if ($Hour >= 8 && $Hour <= 13) {
                        echo "Dr. Md. Moksed Ali";
                    } elseif ($Hour > 13 && $Hour <= 15) {
                        echo "No Doctor in chamber! Lunch Time. Next Doctor will be available at 3pm";
                    } elseif ($Hour > 15 && $Hour <= 17) {
                        echo "Dr. Md. Azizul Hauque";
                    } elseif ($Hour > 17 && $Hour <= 22) {
                        echo "Dr. Farida Yasmin";
                    } else {
                        echo "No Doctor in chamber! Please call if it is emergency.";
                    }
                }
                
                else{
                    echo "No Doctor in chamber! Today is Weekly Off day.";
                }
                
                ?>
            </b>
        </div>
    </div>
      <br> <br> <br>
    
<!--      The Slider, Texts-->
    <div class="container w3-card-8" style="padding: 50px">
    
    <div id="sliderFrame">
                <div id="slider">
                    <img src="img/slide1.jpg" alt="রুয়েট গেট"/>
                    <img src="img/slide2.jpg" alt="রুয়েট শহীদ মিনার"/>
                    <img src="img/slide3.jpg" alt="মেডিকেল রাস্তা" />
                    <img src="img/slide4.jpg" alt="মেডিকেল সেন্টার" />
                    <img src="img/slide5.jpg" alt="মেডিকেল রাস্তা"/>
                </div>
        </div>
             <br> <br> <br>
             
             
<!--       Some Text About Ruet Medical-->
<p align="justify">
                "রাজশাহী প্রকৌশল ও প্রযুক্তি বিশ্ববিদ্যালয়" বাংলাদেশের অন্যতম একটি শীর্ষস্থানীয় প্রকৌশল বিশ্ববিদ্যালয়। শিক্ষার্থীদের উন্নত সুযোগ সুবিধা প্রদানের লক্ষ্যে আবাসিক হলের ব্যবস্থার পাশাপাশি বিশ্ববিদ্যালয়টির নিজস্ব মেডিকেল সেন্টার রয়েছে। যার মাধ্যমে শিক্ষার্থীসহ শিক্ষক ও অন্যান্য স্টাফ তাৎক্ষণিক চিকিৎসা লাভ করে। কেবল মাত্র (আবাসিক ও অনাবাসিক উভয়) শিক্ষার্থীদের জন্য মেডিকেল সেন্টারটি চিকিৎসার পাশাপাশি বিনামূল্যে ওষুধ প্রদান করে। অভিজ্ঞ চিকিৎসকদের দ্বারা মেডিকেল সেন্টারটি পরিচালিত হয়।
            </p>
    </div>
      <br> <br>
    
    <?php include_once('footer.php'); ?> 
    
  
   