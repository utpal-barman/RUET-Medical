<?php include_once('header.php'); ?> 

<div class="container-fluid" style="padding: 40px 20px 40px 20px;" align="center">
    <h2> মেডিকেল সেন্টারে আপনাকে স্বাগতম </h2> <br/>
    <button onclick="location.href='stu_main';" class="btn btn-success"> Schedule </button>
    <button onclick="location.href='appointment';" class="btn btn-success"> Appointment List </button>
    <button onclick="location.href='apply';" class="btn btn-success"> Apply for a meet </button>
    <button onclick="location.href='previous';" class="btn btn-success"> Previous Details </button>
    <button onclick="location.href='about';" class="btn btn-success"> About Medical </button>
    <button onclick="location.href='ambulance';" class="btn btn-success"> Ambulance </button>
    <br> <br> <br>

    
    <div class="w3-round-jumbo"
         style="border: 1px black solid;
                padding: 10px;
                width: 500px;
                background: #ccffcc">

        <form method="post" action = "<?php echo site_url('previous/fsearch'); ?>" class="formstyle" >
        <label for="search_mobile">
            <h4 class="w3-green w3-padding-12 w3-round-jumbo"
                style="width: 200px;">
                    মোবাইল নাম্বার
            </h4>
        </label>

        <br>

        <input class="w3-round-jumbo"
               type="text"
               name="input_mobile"
               style="height: 30px;"
               placeholder="016XXXXXXXX"/>

        <br>
        
        <h6>
            <input type="submit" value="Search"
                    class="w3-green w3-hover-blue w3-round-jumbo"/>
        </h6>
        </form>
    
    </div>
    
    <br>
    
    <div style="border: 1px solid black;
                padding: 30px;
                margin: 40px;
                border-radius: 40px;"
         align="center">

        <h5 class="btn-warning w3-padding-8">পূর্ববর্তী রেকর্ড</h5>

    <br>

        
<!--        Making the table-->
<table class=" w3-table-all" align="center">
            <?php if($filtering) : ?>
            <thead>
                <tr>
                <td> Mobile </td>
                <td> Doctor </td>
                <td> Day </td>
                <td> Time </td>
                <td> Status </td>
                </tr>
            </thead>
            
            
            <?php foreach ($filtering as $index => $search_by_result) : ?>
            <tbody>
                <tr>
                    <td> <?php echo $search_by_result -> Mobile ?> </td>
                    <td> <?php echo $search_by_result -> Doctor ?> </td>
                    <td> <?php echo $search_by_result -> Day ?> </td>
                    <td> <?php echo $search_by_result -> Time ?> </td>
                    <td> <?php echo $search_by_result -> Status ?> </td>
                    
                </tr>
                
            </tbody>
            <?php endforeach; ?>
            
            <?php else : ?>
            <tbody>
                <tr> <strong>  No data is in database! </strong> </tr>  
            </tbody>
            <?php endif; ?>
         </table>
        





<!--End of table-->
    </div>
    
    
</div>


<?php include_once('footer.php'); ?> 




