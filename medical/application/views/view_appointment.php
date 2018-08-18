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
    
    <div style="border: 1px solid black; padding: 30px; margin: 40px; border-radius: 40px;" align="center">
        <h5 class="btn-warning w3-padding-8">তালিকা</h5> <br> <br>

            
            <?php if($appoint) : ?>
                <table class=" w3-table-all" align="center">
            <thead>
                <tr>
                <td> Mobile </td>
                <td> Doctor </td>
                <td> Day </td>
                <td> Time </td>
                <td> Status </td>
                </tr>
            </thead>
            <?php foreach ($appoint as $index => $appointment) : ?>
            <tbody>
                <tr>
                    <td> <?php echo $appointment -> Mobile ?> </td>
                    <td> <?php echo $appointment -> Doctor ?> </td>
                    <td> <?php echo $appointment -> Day ?> </td>
                    <td> <?php echo $appointment -> Time ?> </td>
                    <td> <?php echo $appointment -> Status ?> </td>
                    
                </tr>
                
            </tbody>
            <?php endforeach; ?>
            
            <?php else : ?>
            <tbody>
                <tr> <strong>  No data is in database! </strong> </tr>  
            </tbody>
            <?php endif; ?>
         </table>
    </div>
    
    
</div>


<?php include_once('footer.php'); ?>


