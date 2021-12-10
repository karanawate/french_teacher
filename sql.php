if you add to cron job url this 

curl --silent https://www.vedictreeschool.com/preschool/api/sendremindersmsapi/1




                        <div class="col-md-6 col-sm-12 col-lg-6">
                                <div class="reason-desc w-100">
                                    <div class="reason-desc-inner">
                                        <div class="sec-title mb-25 w-100">
                                            <div class="sec-title-inner pt-0 d-inline-block">
                                                <span class="d-block thm-clr">Reasons To Attend</span>
                                                <h3 class="mb-0">WHY THIS WEBINAR?</h3>
                                            </div>
                                        </div><!-- Sec Title -->
                                        <p class="mb-0"><?php echo $get_whythis_webinars[0]['description1']; ?></p>
                                        <ul class="nav nav-tabs">
                                            <?php 
                                                 if($get_whythis_webinars) {
                                                 foreach($get_whythis_webinars as $value){
                                                 
                                                 if($value['web_id']==1){
                                                    $class="active";
                                                 }else{
                                                     $class="";
                                                 }
                                                 
                                                 ?>
                                            <li class="nav-item">
                                                <a class="nav-link <?= $class ; ?>" data-toggle="tab" href="#reason-img<?php echo $value['web_id']; ?>">
                                                    <i class="far fa-calendar-check"></i><?php echo $value['title'] ?><span class="d-block"><?php echo $value['description'] ?></span>
                                                </a>
                                            </li>
                                            
                                             <?php } } ?>
                                          
                                        </ul>
                                    </div>
                                </div>
                            </div>





