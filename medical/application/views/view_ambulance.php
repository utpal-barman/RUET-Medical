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
 <?php else :?>
    <div class="container-fluid" style="padding: 40px 20px 40px 20px;" align="center">
        <h1> <b>Ambulance</b> </h1>
   
    <?php     endif; ?>
	<br> <br>
    <img src="img/ambulance.png" class="img-responsive"/>
    <br/> <br/>
    <h1> Ambulance এর জন্য কল করুন 01915997662 </h1>
     </div>
    
  
    
    
</div>


<?php include_once('footer.php'); ?> 