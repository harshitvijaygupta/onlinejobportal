 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 
    <!-- Main content -->
    <section class="content">
      <div class="row"> 
        <!-- /.col -->
        <?php if (!isset($_GET['p'])) {  ?>
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Applied Jobs</h3> 
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="table-responsive mailbox-messages">
                <table id="dash-table" class="table table-hover table-striped">
                  <thead> 
                    <tr>
                      <th>Job Title</th>
                      <th>Company</th>
                      <th>Location</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $sql="SELECT * FROM `tblcompany` c,`tbljobregistration` r, `tbljob` j WHERE c.`COMPANYID`=r.`COMPANYID` AND r.`JOBID`=j.`JOBID` and r.`APPLICANTID` = {$_SESSION['APPLICANTID']}";
                      $mydb->setQuery($sql);
                      $cur = $mydb->loadResultList();  
                      foreach ($cur as $result) {
                        # code...
                          echo '<tr>';
                          echo '<td class="mailbox-star"><a href="index.php?view=appliedjobs&p=job&id='.$result->REGISTRATIONID.'"><i class="fa fa-pencil-o text-yellow"></i> '.$result->OCCUPATIONTITLE.'</a></td>';
                          echo '<td class="mailbox-attachment">'.$result->COMPANYNAME.'</td>';
                          echo '<td class="mailbox-attachment">'.$result->COMPANYADDRESS.'</td>';
                          echo '<td class="mailbox-attachment">'.$result->REMARKS.'</td>'; 
                          echo '</tr>';
                      } 
                    ?>
       
                  </tbody>
                </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div> 
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
        <?php }else{
          require_once ("viewjob.php");          
        } ?>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
   
 