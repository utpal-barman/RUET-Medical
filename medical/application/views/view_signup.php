<?php include_once('header.php'); ?> 

<div class="w3-row">
<!--    Left Division -->
        <div class="w3-col s6 w3-center" style="padding: 80px 30px 80px 30px">

<!--    Image Slider -->
            <div id="sliderFrame">
                <div id="slider">
                    <img src="img/slide1.jpg" alt="রুয়েট গেট" />
                    <img src="img/slide2.jpg" alt="রুয়েট শহীদ মিনার"/>
                    <img src="img/slide3.jpg" alt="মেডিকেল রাস্তা"/>
                    <img src="img/slide4.jpg" alt="মেডিকেল সেন্টার"/>
                    <img src="img/slide5.jpg" alt="মেডিকেল রাস্তা"/>
                </div>
            </div>
             <br> <br> <br>
             
<!--       Some Text About Ruet Medical-->
            <p align="justify">
                "রাজশাহী প্রকৌশল ও প্রযুক্তি বিশ্ববিদ্যালয়" বাংলাদেশের অন্যতম একটি শীর্ষস্থানীয় প্রকৌশল বিশ্ববিদ্যালয়। শিক্ষার্থীদের উন্নত সুযোগ সুবিধা প্রদানের লক্ষ্যে আবাসিক হলের ব্যবস্থার পাশাপাশি বিশ্ববিদ্যালয়টির নিজস্ব মেডিকেল সেন্টার রয়েছে। যার মাধ্যমে শিক্ষার্থীসহ শিক্ষক ও অন্যান্য স্টাফ তাৎক্ষণিক চিকিৎসা লাভ করে। কেবল মাত্র (আবাসিক ও অনাবাসিক উভয়) শিক্ষার্থীদের জন্য মেডিকেল সেন্টারটি চিকিৎসার পাশাপাশি বিনামূল্যে ওষুধ প্রদান করে। অভিজ্ঞ চিকিৎসকদের দ্বারা মেডিকেল সেন্টারটি পরিচালিত হয়।
            </p>
        </div>

<!--    Right Division -->

        <div class="w3-col s5 w3-center w3-card-8" style="padding: 60px; margin: 20px">
            <center>
                <h2> রুয়েট মেডিকেলে স্বাগতম</h2>
                <br> 
                <h4 class="w3-container w3-teal w3-padding-12 w3-round-jumbo">  নতুন একাউন্ট তৈরি করুন   </h4>

                <br>
                
                <style> span{color: red}</style>

<form method="post" action = "<?php echo site_url('signup/register'); ?>" class="formstyle" >
                    <h5 style="color: red;"> *ইংরেজিতে পুরণ করুন</h5>

                    <?php $not_success_msg = $this->session->userdata('not_success_msg'); ?>
                    <?php if($not_success_msg): ?>
                    <h5 style="color: red;"><?php echo $this->session->userdata('not_success_msg') ?></h5>
                    <?php $this->session->unset_userdata('not_success_msg') ?>
                    <?php endif; ?>
                    <br>
        
                    <table>

                        <tr>
                            <td> <label for="id" style="height: 30px" class="w3-right-align"> রুয়েট আইডি :</label> </td>
                            <td> <input type="text" name="id" placeholder="13XXXX" style="height: 30px; margin-left: 30px"/> <span> * </span> </td>
                        </tr>

                        <tr>
                            <td> <label for="name" style="height: 30px" class="w3-right-align"> নাম  :</label> </td>
                            <td> <input type="text" name="name" placeholder="Utpal Barman" style="height: 30px; margin-left: 30px"/> <span> * </span> </td>
                        </tr>

                        <tr>
                            <td> <label for="mobile" style="height: 30px" class="w3-right-align"> মোবাইল  :</label> </td>
                            <td> <input type="text" name="mobile" placeholder="016XXXXXXXX" style="height: 30px; margin-left: 30px"/> <span> * </span> </td>
                        </tr>

                        <tr>
                            <td> <label for="username" style="height: 30px" class="w3-right-align"> ইউজারনেম  :</label> </td>
                            <td> <input type="text" name="username" placeholder="username" style="height: 30px; margin-left: 30px"/> <span> * </span> </td>
                        </tr>

                        <tr>
                            <td> <label for="password" style="height: 30px" class="w3-right-align"> পাসওয়ার্ড  :</label> </td>

                            <td> <input type="password" name="password" style="height: 30px; margin-left: 30px"/> <span> * </span> </td>
                        </tr>

                        <tr>
                            <td> <label for="repassword" style="height: 30px" class="w3-right-align"> পুণরায় পাসওয়ার্ড  :</label> </td>

                            <td> <input type="password" name="repassword" style="height: 30px; margin-left: 30px"/> <span> * </span> </td>
                        </tr>


                    </table>
                    <br>
    
                    <input type="submit" class="btn btn-success btn-large" value="নতুন একাউন্ট তৈরি"/>
                </form>
                <a href="signin" class="w3-hover-text-green"> I already have an account. Sign in here! </a>
            </center>        
        </div>
</div>


<?php include_once('footer.php'); ?> 
