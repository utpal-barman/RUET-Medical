<?php include_once('header.php'); ?> 

<div class="container-fluid" style="padding: 40px 20px 40px 20px;" align="center">
    <h2> মেডিকেল সেন্টারে আপনাকে স্বাগতম </h2> <br/>
    <button onclick="location.href='stu_main';" class="btn btn-success"> Schedule </button>
    <button onclick="location.href='appointment';" class="btn btn-success"> Appointment List </button>
    <button onclick="location.href='apply';" class="btn btn-success"> Apply for a meet </button>
    <button onclick="location.href='previous';" class="btn btn-success"> Previous Details </button>
    <button onclick="location.href='about';" class="btn btn-success"> About Medical </button>
    <button onclick="location.href='ambulance';" class="btn btn-success"> Ambulance </button>
	<br> <br>
<form method="post" action = <?php echo site_url('apply/insert_db'); ?> class="formstyle" >
 
    <h2> Appoint a doctor </h2> <br>           
    <img src="img/doc.png" class="img-responsive img-circle" style="width: 150px"/>
                    <br/> <br/>

        
                    <div class="w3-card-8" style="padding: 30px">
                        <table>

                        <tr>
                            <td> <label for="mobile" style="height: 30px" class="w3-right-align"> মোবাইল  :</label> </td>
                            <td> <input type="text" name="mobile" placeholder="016XXXXXXXX" style="height: 30px; margin-left: 30px"/> <span> * </span> </td>
                        </tr>

                        <tr>
                            <td> <label for="doctor" style="height: 30px" class="w3-right-align"> ডাক্তার  :</label> </td>
                            <td> <select name="doctor"style="height: 30px; margin-left: 30px">
                                    <option value="Dr. Md. Moksed Ali"> Dr. Md. Moksed Ali </option>
                                    <option value="Dr. Md. Azizul Haque"> Dr. Md. Azizul Haque </option>
                                    <option value="Dr. Farida Yasmin"> Dr. Farida Yasmin </option>
                                    </select> <span> * </span>
                            </td>
                        </tr>

                        <tr>
                            <td> <label for="day" style="height: 30px" class="w3-right-align"> দিন  :</label> </td>
                            <td> <select name="day" style="height: 30px; margin-left: 30px">
                                    <option value="Saturday"> শনিবার </option>
                                    <option value="Sunday"> রবিবার </option>
                                    <option value="Monday"> সোমবার </option>
                                    <option value="Tuesday"> মঙ্গলবার </option>
                                    <option value="Wednesday"> বুধবার </option>
                                    <option value="Thursday"> বৃহস্পতিবার </option>
                                    </select> <span> * </span>
                            </td>
                        </tr>
                        
                        <tr>
                            <td> <label for="time" style="height: 30px" class="w3-right-align"> সময়  :</label> </td>
                            <td> <select name="time" style="height: 30px; margin-left: 30px">
                                    <option value="7:00pm"> 7:00pm </option>
                                    <option value="7:30pm"> 7:30pm </option>
                                    <option value="8:00pm"> 8:00pm </option>
                                    <option value="8:30pm"> 8:30pm </option>
                                    <option value="9:00pm"> 9:00pm </option>
                                    </select> <span> * </span>
                            </td>
                        </tr>




                    </table>
                    
                    <br>
    
                    <input type="submit" class="btn btn-success btn-large" value="সাবমিট"/>
                    </div>
                </form>
    

    
  
    
    
</div>


<?php include_once('footer.php'); ?> 