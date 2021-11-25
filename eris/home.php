  <section id="banner">
   
  <!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
              <li>
                <img src="<?php echo web_root; ?>plugins/home-plugins/img/slides/1.jpg" alt="" />
                <div class="flex-caption">
                    <h3>innovation</h3> 
          <p>We create the opportunities</p> 
           
                </div>
              </li>
              <li>
                <img src="<?php echo web_root; ?>plugins/home-plugins/img/slides/2.jpg" alt="" />
                <div class="flex-caption">
                    <h3>Specialize</h3> 
          <p>Success depends on work</p> 
           
                </div>
              </li>
            </ul>
        </div>
  <!-- end slider -->
 
  </section> 
  <section id="call-to-action-2">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-sm-9">
          <h3>Partner with Business Leaders</h3>
          <p>Development of successful, long term, strategic relationships between customers and suppliers, based on achieving best practice and sustainable competitive advantage. In the business partner model, HR professionals work closely with business leaders and line managers to achieve shared organisational objectives.</p>
        </div>
       <!--  <div class="col-md-2 col-sm-3">
          <a href="#" class="btn btn-primary">Read More</a>
        </div> -->
      </div>
    </div>
  </section>
  
  <section id="content">
  
  
  <div class="container">
        <div class="row">
      <div class="col-md-12">
        <div class="aligncenter"><h2 class="aligncenter">Company</h2><!-- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus ovident, doloribus omnis minus temporibus perferendis nesciunt.. --></div>
        <br/>
      </div>
    </div>

    <?php 
      $sql = "SELECT * FROM `tblcompany`";
      $mydb->setQuery($sql);
      $comp = $mydb->loadResultList();


      foreach ($comp as $company ) {
        # code...
    
    ?>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-building-o"></i>
                <div class="info-blocks-in">
                    <h3><?php echo $company->COMPANYNAME;?></h3>
                    <!-- <p><?php echo $company->COMPANYMISSION;?></p> -->
                    <p>Address :<?php echo $company->COMPANYADDRESS;?></p>
                    <p>Contact No. :<?php echo $company->COMPANYCONTACTNO;?></p>
                </div>
            </div>

    <?php } ?> 
  </div>
  </section>
  
  <section class="section-padding gray-bg">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-title text-center">
            <h2 >Popular Jobs</h2>  
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 ">
          <?php 
            $sql = "SELECT * FROM `tblcategory`";
            $mydb->setQuery($sql);
            $cur = $mydb->loadResultList();

            foreach ($cur as $result) {
              echo '<div class="col-md-3" style="font-size:15px;padding:5px">* <a href="'.web_root.'index.php?q=category&search='.$result->CATEGORY.'">'.$result->CATEGORY.'</a></div>';
            }

          ?>
        </div>
      </div>
 
    </div>
  </section>    
  <section id="content-3-10" class="content-block data-section nopad content-3-10">
  <div class="image-container col-sm-6 col-xs-12 pull-left">
    <div class="background-image-holder">

    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-6 col-xs-12 content">
        <div class="editContent">
          <h3>Our Team</h3>
        </div>
        <div class="editContent"  style="height:235px;">
          <p> 
          &nbsp;&nbsp;Our "one team" attitude breaks down silos and helps us engage equally effectively from the C-suite to the front line. Our collaborative working style emphasizes teamwork, trust, and tolerance for diverging opinions. People tell us we are down-to-earth, approachable and fun.<br/><br/>

          &nbsp;&nbsp;We have a passion for our clients' true results and a pragmatic drive for action that starts Monday morning 8am and doesn't let up. We rally clients with our infectious energy, to make change stick.<br/><br/>

          &nbsp;&nbsp;And we never go it alone. We support and are supported to develop our own personal results stories. We balance challenging and co-creating with our clients, building the internal capabilities required for them to create repeatable results. </p>
        </div> 
      </div>
    </div><!-- /.row-->
  </div><!-- /.container -->
</section>
  
  <div class="about home-about">
        <div class="container">
            
            <div class="row">
              <div class="col-md-4">
                <!-- Heading and para -->
                <div class="block-heading-two">
                  <h3><span>Programes</span></h3>
                </div>
                <p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur. <br><br>Sed ut perspiciaatis iste natus error sit voluptatem probably haven't heard of them accusamus.</p>
              </div>
              <div class="col-md-4">
                <div class="block-heading-two">
                  <h3><span>Latest News</span></h3>
                </div>    
                <!-- Accordion starts -->
                <div class="panel-group" id="accordion-alt3">
                 <!-- Panel. Use "panel-XXX" class for different colors. Replace "XXX" with color. -->
                  <div class="panel"> 
                  <!-- Panel heading -->
                   <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseOne-alt3">
                      <i class="fa fa-angle-right"></i> Latest News #1
                      </a>
                    </h4>
                   </div>
                   <div id="collapseOne-alt3" class="panel-collapse collapse">
                    <!-- Panel body -->
                    <div class="panel-body">
                      Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                    </div>
                   </div>
                  </div>
                  <div class="panel">
                   <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseTwo-alt3">
                      <i class="fa fa-angle-right"></i> Latest News #2
                      </a>
                    </h4>
                   </div>
                   <div id="collapseTwo-alt3" class="panel-collapse collapse">
                    <div class="panel-body">
                      Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                    </div>
                   </div>
                  </div>
                  <div class="panel">
                   <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseThree-alt3">
                      <i class="fa fa-angle-right"></i> Latest News #3
                      </a>
                    </h4>
                   </div>
                   <div id="collapseThree-alt3" class="panel-collapse collapse">
                    <div class="panel-body">
                      Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                    </div>
                   </div>
                  </div>
                  <div class="panel">
                   <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseFour-alt3">
                      <i class="fa fa-angle-right"></i> Latest News #4
                      </a>
                    </h4>
                   </div>
                   <div id="collapseFour-alt3" class="panel-collapse collapse">
                    <div class="panel-body">
                      Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                    </div>
                   </div>
                  </div>
                </div>
                <!-- Accordion ends -->
                
              </div>
              
              <div class="col-md-4">
                <div class="block-heading-two">
                  <h3><span>Testimonials</span></h3>
                </div>  
                     <div class="testimonials">
                    <div class="active item">
                      <blockquote><p>Lorem ipsum dolor met consectetur adipisicing. Aorem psum dolor met consectetur adipisicing sit amet, consectetur adipisicing elit, of them jean shorts sed magna aliqua. Lorem ipsum dolor met.</p></blockquote>
                      <div class="carousel-info">
                      <img alt="" src="admin/chat_img1.png" class="pull-left">
                      <div class="pull-left">
                        <span class="testimonials-name">Alon Musk</span>
                        <span class="testimonials-post">Technical Director</span>
                      </div>
                      </div>
                    </div>
                  </div>
              </div>
              
            </div>
            
                        
             
            <br>
           
            </div>
            
          </div>