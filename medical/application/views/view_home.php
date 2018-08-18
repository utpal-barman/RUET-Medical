<?php include_once('header.php'); ?>
<!-----Starting 1st row------>
<br> <br>
<div class="w3-row">
<!--    Left-->


<div class="w3-quarter">

     <div class="w3-card-4" style="height: 240px">
        <ul class="w3-ul w3-border w3-hoverable">
            <li class="w3-blue-gray w3-padding-12"><h4><center>নোটিশ বোর্ড</center></h4></li>
            <li class="w3-padding-12"> রুয়েট মেডিকেল সেন্টার আগামী ২১ ফেব্রুয়ারী বন্ধ থাকবে </li>
            <li class="w3-padding-12"> প্রতি বৃহস্পতিবার রাত ৯ টা পর্যন্ত খোলা </li>
            <li class="w3-padding-12"> ২৪ ঘন্টা ফ্রী ইমার্জেন্সি এম্বুলেন্স সার্ভিস </li>
        </ul>
    </div>
    
    <br>
        <div class="w3-card-4" style="height: 270px">
        <ul class="w3-ul w3-border w3-hoverable">
            <li class="w3-blue-gray w3-padding-12"><h4><center>Message from VC</center></h4></li>
        </ul>
            <div style="padding: 30px;">
                <p align="justify"> Welcome to the RUET website. It is my great pleasure to welcome you to
            Rajshahi University of Engineering & Technology
            which is the 2nd oldest prestigious engineering university in Bangladesh. </p>
            </div>
    </div>

    </div>
    
    
<!--    Middle -->
    <div class="w3-half w3-center">

<!--    Image Slider -->
<div id="sliderFrame" class="w3-card-4">
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
<div align="justify" style="padding: 30px">
       "রাজশাহী প্রকৌশল ও প্রযুক্তি বিশ্ববিদ্যালয়" বাংলাদেশের অন্যতম একটি শীর্ষস্থানীয় প্রকৌশল বিশ্ববিদ্যালয়। শিক্ষার্থীদের উন্নত সুযোগ সুবিধা প্রদানের লক্ষ্যে আবাসিক হলের ব্যবস্থার পাশাপাশি বিশ্ববিদ্যালয়টির নিজস্ব মেডিকেল সেন্টার রয়েছে। যার মাধ্যমে শিক্ষার্থীসহ শিক্ষক ও অন্যান্য স্টাফ তাৎক্ষণিক চিকিৎসা লাভ করে। কেবল মাত্র (আবাসিক ও অনাবাসিক উভয়) শিক্ষার্থীদের জন্য মেডিকেল সেন্টারটি চিকিৎসার পাশাপাশি বিনামূল্যে ওষুধ প্রদান করে। অভিজ্ঞ চিকিৎসকদের দ্বারা মেডিকেল সেন্টারটি পরিচালিত হয়।
</div>
        </div>

<!--    Right Division -->
<div class="w3-quarter w3-card-4" style="height: 536px" >
                
            <ul class="w3-ul w3-border w3-center">
            <li class="w3-blue-gray w3-padding-8 w3-round"><h4><center><img src="img/doc.png" class="w3-border img-responsive img-circle" style="width: 50px"/> Quick Links</center></h4></li>
            <li class="w3-padding-12"> <button data-target="#myModal" data-toggle="modal" class="w3-btn w3-green w3-round w3-animate-zoom w3-hover-light-grey" style="width: 200px"> <h5> সময়সূচী  </h5> </button></li>
            <li class="w3-padding-12"> <button data-target="#myModalAmbu" data-toggle="modal" class="w3-btn w3-green w3-round w3-animate-zoom w3-hover-light-grey" style="width: 200px"> <h5> এম্বুলেন্স </h5></button> </li>
            <li class="w3-padding-12"> <button onclick="location.href='';" class="w3-btn w3-green w3-round w3-animate-zoom w3-hover-light-grey" style="width: 200px"> <h5> জরুরী চিকিৎসা </h5></button> </li>
            <li class="w3-padding-12"> <button data-target="#myModalMap" data-toggle="modal" class="w3-btn w3-green w3-round w3-animate-zoom w3-hover-light-grey" style="width: 200px"> <h5> ভৌগোলিক অবস্থান </h5></button> </li>
            <li class="w3-padding-12"> <button onclick="location.href='fund';" class="w3-btn w3-green w3-round w3-animate-zoom w3-hover-light-grey" style="width: 200px"> <h5> সাহায্য </h5></button> </li>
            
            </ul>
    </div>

</div>



<!-- Modal Schedule-->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
<!------->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">সময়সূচী</h4>
      </div>
      <div class="modal-body">
          <img src="img/routine.jpg" class="img-responsive" />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!--Modal Ambulance-->
<div id="myModalAmbu" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
<!-- --- -->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">এম্বুল্যান্স</h4>
      </div>
      <div class="modal-body">
          <center> <img src="img/ambulance.png" class="img-responsive"/>
          <br/> <br/>
          <h1> Ambulance এর জন্য কল করুন 01915997662 </h1>
          </center>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!--Modal Map-->
<div id="myModalMap" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
<!-- --- -->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">ভৌগোলিক অবস্থান</h4>
      </div>
      <div class="modal-body">
          <center> <img src="img/map.png" class="img-responsive"/>
          
          </center>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


 

 <!--End of 1st row-->





<?php include_once('footer.php'); ?> 

