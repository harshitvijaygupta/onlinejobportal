
    <section id="content">
        <div class="container content">     
        <!-- Service Blcoks -->
            
 <table id="dash-table" class="table table-hover">
     <thead>
         <th>Job Title</th>
         <th>Company</th>
         <th>Location</th>
         <th>Date Posted</th>
     </thead>
     <tbody>
        <?php
 if (isset($_GET['search'])) {
     # code...
    $COMPANYNAME = $_GET['search'];
 }else{
     $COMPANYNAME = '';

 }
    $sql = "SELECT * FROM `tblcompany` c,`tbljob` j WHERE c.`COMPANYID`=j.`COMPANYID` AND COMPANYNAME LIKE '%" . $COMPANYNAME ."%' ORDER BY DATEPOSTED DESC" ;
    $mydb->setQuery($sql);
    $cur = $mydb->loadResultList();


    foreach ($cur as $result) {
        echo '<tr>';
        echo '<td><a href="'.web_root.'index.php?q=viewjob&search='.$result->JOBID.'">'.$result->OCCUPATIONTITLE.'</a></td>';
        echo '<td>'.$result->COMPANYNAME.'</td>';
        echo '<td>'.$result->COMPANYADDRESS.'</td>';
        echo '<td>'.date_format(date_create($result->DATEPOSTED),'m/d/Y').'</td>';
        echo '</tr>';

    }
        ?> 
     </tbody>
 </table>
 <?php
 // if (isset($_GET['search'])) {
 //     # code...
 //    $companyid = $_GET['search'];
 // }else{
 //     $companyid = '';

 // }
 //    $sql = "SELECT * FROM `tblcompany` c,`tbljob` j WHERE c.`COMPANYID`=j.`COMPANYID` AND c.COMPANYID LIKE '%" . $companyid ."%' ORDER BY DATEPOSTED DESC" ;
 //    $mydb->setQuery($sql);
 //    $cur = $mydb->loadResultList();


 //    foreach ($cur as $result) {
 //        # code...
 
 // // `OCCUPATIONTITLE`, `REQ_NO_EMPLOYEES`, `SALARIES`, `DURATION_EMPLOYEMENT`, `QUALIFICATION_WORKEXPERIENCE`, `PREFEREDSEX`, `SECTOR_VACANCY`, `DATEPOSTED`
  ?>    
            <!--  <div class="container">
             <div class="mg-available-rooms">
                    <h5 class="mg-sec-left-title">Date Posted :  <?php echo date_format(date_create($result->DATEPOSTED),'M d, Y'); ?></h5>
                        <div class="mg-avl-rooms">
                            <div class="mg-avl-room">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <a href="#"><span class="fa fa-building-o" style="font-size: 50px"></span> </a>
                                    </div>
                                    <div class="col-sm-10">
                                        <h2 class="mg-avl-room-title"><?php echo $result->COMPANYNAME . '/ '. $result->OCCUPATIONTITLE ;?> </h2>
                                        <p><?php echo $result->JOBDESCRIPTION ;?></p>
                                        <div class="row mg-room-fecilities">
                                            <div class="col-sm-6">
                                                <ul>
                                                    <li><i class="fp-ht-bed"></i>Required No. of Employee's : <?php echo $result->REQ_NO_EMPLOYEES; ?></li>
                                                    <li><i class="fp-ht-food"></i>Salaries : <?php echo number_format($result->SALARIES,2);  ?></li>
                                                    <li><i class="fa fa-sun-"></i>Duration of Employment : <?php echo $result->DURATION_EMPLOYEMENT; ?></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-6">
                                                <ul>
                                                    <li><i class="fp-ht-dumbbell"></i>Qualification/Work Experience : <?php echo $result->QUALIFICATION_WORKEXPERIENCE; ?></li>
                                                    <li><i class="fp-ht-tv"></i>Prefered Sex : <?php echo $result->PREFEREDSEX; ?></li>
                                                    <li><i class="fp-ht-computer"></i>Sector of Vacancy : <?php echo $result->SECTOR_VACANCY; ?></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <a href="<?php echo web_root; ?>index.php?q=apply&job=<?php echo $result->JOBID;?>&view=personalinfo" class="btn btn-main btn-next-tab">Apply Now !</a>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
        </div>                         -->

     
   </div>
    </section> 