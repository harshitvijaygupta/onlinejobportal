
    <section id="content">
        <div class="container content">     
        <!-- Service Blcoks -->  
        <div class="row">
            <?php 
                  $sql = "SELECT * FROM `tblcompany`";
                  $mydb->setQuery($sql);
                  $comp = $mydb->loadResultList(); 

                  foreach ($comp as $company ) { 
            ?>
                    <div class="col-sm-4 info-blocks">
                        <i class="icon-info-blocks fa fa-building-o"></i>
                        <div class="info-blocks-in">
                            <h3><?php echo '<a href="'.web_root.'index.php?q=hiring&search='.$company->COMPANYNAME.'">'.$company->COMPANYNAME.'</a>';?></h3>
                            <!-- <p><?php echo $company->COMPANYMISSION;?></p> -->
                            <p>Address :<?php echo $company->COMPANYADDRESS;?></p>
                            <p>Contact No. :<?php echo $company->COMPANYCONTACTNO;?></p>
                        </div>
                    </div>

            <?php } ?>

 
 
         </div> 
        </div>
    </section>