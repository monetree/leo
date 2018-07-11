<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from zoyothemes.com/blogezy/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 May 2018 06:46:12 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php echo $data->row()->meta_description;?>">
        <meta name="keywords" content="<?php echo $data->row()->meta_keywords;?>">
        <meta name="author" content="<?php echo $data->row()->meta_author;?>">
        <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.ico">
        <title><?php echo $data->row()->blog_title;?></title>


        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,600,700" rel="stylesheet">

        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

        <!-- MENU CSS -->
        <link href="<?php echo base_url();?>assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />

        <!-- MATERIALDESIGN ICON -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/materialdesignicons.min.css">

        <!-- CUSTOM STYLESHEET -->
        <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/css/default.css" rel="stylesheet" type="text/css" />


<style media="screen">
      .videoWrapper {
      position: relative;
      padding-bottom: 56.25%; /* 16:9 */
      padding-top: 25px;
      height: 0;
      }
      .videoWrapper iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      }
      pre{
        border-radius:10px;
        background:#f0f4f7;
        border:none;
        padding:10px;
      }
</style>
    </head>

    <body>
        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar-mobile">
                <div class="logo">
                    <a href="<?php echo base_url();?>"></a>
                    <button class="button-menu-mobile">
                        <i class="mdi mdi-menu"></i>
                    </button>
                </div>
            </div>
            <!-- Top Bar End -->
            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">

                <div class="slimscroll-menu" id="remove-scroll">

                  <div class="logo">
                      <a href="<?php echo base_url()?>"><h3 style="color:#0db3e3;">Monetimes</h3></a>
                      <p class="text-muted" style="font-size:15px;">
                        You can find all kind of technolgy, educations tutorials,programming languages from here.
                        We accept paid works.We will happy to help you out if you have any business goals related
                        to information technology. Contact us to make your dream success. monetimes will be always with you.
                       </p>
                  </div>

                  <!--- Sidemenu -->
                  <div id="sidebar-menu">
                      <!-- Left Menu Start -->
                        <img src="<?php echo base_url();?>assets/images/quote.jpg" alt="" style="width:280px;height:190px">
                  </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <div class="page-wrapper">
                <section class="pb-5">
                    <div class="container">

                        <div class="row pt-5">
                            <!-- Content-->
                            <div class="col-xl-8">

                                <!-- Post-->
                                <article class="post">
                                    <div class="post-header">
                                        <h2 class="post-title"><a href="#"><?php echo $data->row()->blog_title;?></a></h2>
                                        <ul class="post-meta">
                                            <li><i class="mdi mdi-calendar"></i><?php echo $data->row()->blog_added;?></li>
                                            <li><i class="mdi mdi-tag-text-outline"></i> <?php echo $data->row()->blog_type;?></li>
                                            <li><i class="mdi mdi-comment-multiple-outline"></i>3 Comments</li>
                                        </ul>
                                    </div>

                                    <?php
                                    $youtube_link=$data->row()->youtube_link;
                                    if(empty($youtube_link)){
                                     ?>
                                   <div class="post-preview">
                                        <img src="<?php echo base_url();?>assets/uploads/<?php echo $data->row()->blog_file;?>" alt="" class="img-fluid rounded">
                                    </div>
                                    <?php
                                  }else{
                                    ?>
                                    <div class="videoWrapper">
                                      <iframe style="border-radius:5px;" src="<?php echo $youtube_link."?showinfo=0&?modestbranding=1&rel=0";?>" frameborder="0" allowfullscreen></iframe>
                                      <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/Z6ytvzNlmRo?rel=0&amp;controls=1&amp&amp;showinfo=0&amp;modestbranding=0" frameborder="0"></iframe> -->
                                    </div>
                                    <br>
                                    <?php
                                  }
                                  ?>

                                    <div class="blog-detail-description">
                                      <?php echo $data->row()->blog_content;?>

                                        <div class="mt-5">
                                            <h6>Tags:</h6>
                                            <div class="tagcloud">
                                                <a href="#">logo</a>
                                                <a href="#">business</a>
                                                <a href="#">agency</a>
                                            </div>
                                        </div>



                                        <div class="mt-5 text-center">
                                            <h5 class="page-title-alt"><span>You Might Also Like</span></h5>
                                        </div>

                                        <div class="row">
                                          <?php
                                          foreach($related->result() as $rel){
                                           ?>
                                            <div class="col-sm-4">
                                                <article class="related-post">

                                                      <?php
                                                      $youtube_link=$rel->youtube_link;
                                                      if(empty($youtube_link)){
                                                       ?>
                                                     <div class="post-preview">
                                                          <a href="<?php echo base_url();?>index.php/Base_controller/single_content/<?php echo $rel->blog_id;?>"><img src="<?php echo base_url();?>assets/uploads/<?php echo $rel->blog_file;?>" alt="" class="img-fluid rounded"></a>
                                                      </div>
                                                      <?php
                                                    }else{
                                                      ?>
                                                      <div class="videoWrapper">
                                                        <iframe style="border-radius:5px;" src="<?php echo $youtube_link."?showinfo=0&?modestbranding=1&rel=0";?>" frameborder="0" allowfullscreen></iframe>
                                                        <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/Z6ytvzNlmRo?rel=0&amp;controls=1&amp&amp;showinfo=0&amp;modestbranding=0" frameborder="0"></iframe> -->
                                                      </div>
                                                      <br>
                                                      <?php
                                                    }
                                                    ?>
                                                    <div class="post-header">
                                                        <h6><a href="<?php echo $rel->blog_id;?>" title=""><?php echo $rel->blog_title;?></a></h6>
                                                        <p class="post-date"><?php echo $rel->blog_added;?></p>
                                                    </div>
                                                </article>
                                            </div>
                                            <?php
                                          }
                                             ?>

                                        </div>

                                        <div class="mt-5">
                                            <h5 class="page-title-alt"><span>Comments</span></h5>
                                        </div>

                                        <ul class="media-list list-unstyled">

                                            <li class="media">
                                                <img class="d-flex mr-3 rounded-circle" src="<?php echo base_url();?>assets/images/user/user-5.png" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <a href="#" class="text-custom reply-btn"><i class="mdi mdi-reply"></i>&nbsp; Reply</a>
                                                    <h4 class="media-heading"><a href="#">Michelle Durant</a></h4>
                                                    <p class="text-muted post-date">Jun 23, 2018, 11:45 am</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
                                                </div>
                                            </li>

                                            <li class="media">
                                                <img class="d-flex mr-3 rounded-circle" src="<?php echo base_url();?>assets/images/user/user-2.png" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <a href="#" class="text-custom reply-btn"><i class="mdi mdi-reply"></i>&nbsp; Reply</a>
                                                    <h4 class="media-heading"><a href="#">Ronda Otoole</a></h4>
                                                    <p class="text-muted post-date">Jun 23, 2018, 11:45 am</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>

                                                    <div class="media">
                                                        <img class="d-flex mr-3 rounded-circle" src="<?php echo base_url();?>assets/images/user/user-3.png" alt="Generic placeholder image">
                                                        <div class="media-body">
                                                            <a href="#" class="text-custom reply-btn"><i class="mdi mdi-reply"></i>&nbsp; Reply</a>
                                                            <h4 class="media-heading"><a href="#">James Whitley</a></h4>
                                                            <p class="text-muted post-date">Jun 23, 2018, 11:45 am</p>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="media">
                                                <img class="d-flex mr-3 rounded-circle" src="<?php echo base_url();?>assets/images/user/user-4.png" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <a href="#" class="text-custom reply-btn"><i class="mdi mdi-reply"></i>&nbsp; Reply</a>
                                                    <h4 class="media-heading"><a href="#">Kimberly Chretien</a></h4>
                                                    <p class="text-muted post-date">Jun 23, 2018, 11:45 am</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
                                                </div>
                                            </li>

                                            <li class="media">
                                                <img class="d-flex mr-3 rounded-circle" src="<?php echo base_url();?>assets/images/user/user-6.png" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <a href="#" class="text-custom reply-btn"><i class="mdi mdi-reply"></i>&nbsp; Reply</a>
                                                    <h4 class="media-heading"><a href="#">Michelle Durant</a></h4>
                                                    <p class="text-muted post-date">Jun 23, 2018, 11:45 am</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
                                                </div>
                                            </li>

                                        </ul>

                                        <div class="mt-5">
                                            <h5 class="page-title-alt"><span>Leave a reply</span></h5>
                                        </div>

                                        <form action="#" method="post" class="mt-4">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <input id="author" class="form-control" placeholder="Name*" name="author" type="text" required="">
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <input id="email" class="form-control" placeholder="Email*" name="email" type="text" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <input id="subject" class="form-control" placeholder="Website" name="subject" type="text">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <textarea id="comment" class="form-control" rows="5" placeholder="Your Message*" name="comment" required=""></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <button name="submit" type="submit" id="submit" class="btn btn-dark">Post Comment</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                    </div>

                                </article>
                                <!-- Post end-->

                            </div>
                            <!-- Content end-->

                            <!-- Sidebar-->
                            <div class="col-xl-4">
                                <div class="sidebar">

                                    <!-- Search widget-->
                                    <aside class="widget widget_search">
                                        <form>
                                            <input class="form-control pr-5" type="search" placeholder="Search...">
                                            <button class="search-button" type="submit"><span class="mdi mdi-magnify"></span></button>
                                        </form>
                                    </aside>

                                    <aside class="widget about-widget">
                                        <div class="widget-title">About Me</div>

                                        <div class="text-center">
                                            <img src="<?php echo base_url();?>assets/images/srk.jpg" alt="About Me" class="rounded-circle">
                                            <h6><a href="https://www.facebook.com/kiransyoutubechannel/" style="color:#0db3e3;">Sobhagya Kumar - FullStack Developer</a></h6>
                                            <p>I am a Professional Developer,freelancer, <a href="https://www.youtube.com/channel/UCT6wywQKNrfR-H1wwWzMrUA" style="color:red;">Youtuber.</a> <span style="color:#0db3e3;">I accept Paid works. </span> For any Kind Of Development(web,apps) Please contact Us. We are Working On All Trending Technologies.</p>
                                        </div>

                                    </aside>

                                    <aside class="widget about-widget">
                                        <div class="widget-title">Subscribe & Follow</div>

                                        <ul class="socials">
                                            <li><a href="http://facebook.com/"><i class="mdi mdi-facebook"></i></a></li>
                                            <li><a href="http://twitter.com/"><i class="mdi mdi-twitter"></i></a></li>
                                            <li><a href="http://instagram.com/"><i class="mdi mdi-instagram"></i></a></li>
                                            <li><a href="http://pinterest.com/"><i class="mdi mdi-pinterest"></i></a></li>
                                        </ul>

                                    </aside>

                                    <!-- Categories widget-->
                                    <aside class="widget widget_categories">
                                        <div class="widget-title">Categories</div>
                                        <ul>
                                            <li><a href="#">Journey</a> (40)</li>
                                            <li><a href="#">srkgraphy</a> (08)</li>
                                            <li><a href="#">Lifestyle</a> (11)</li>
                                            <li><a href="#">Food & Drinks</a> (21)</li>
                                        </ul>
                                    </aside>

                                    <!-- Recent entries widget-->
                                    <aside class="widget widget_recent_entries_custom">
                                        <div class="widget-title">Popular Posts</div>
                                        <ul>
                                          <?php
                                          foreach($related->result() as $rel){
                                           ?>
                                            <li class="clearfix">
                                                <div class="wi">
                                                    <a href="<?php echo $rel->blog_id;?>"><img src="<?php echo base_url();?>assets/images/works/img1.jpg" alt="" class="img-fluid"></a>
                                                </div>
                                                <div class="wb"><a href="<?php echo $rel->blog_id;?>"><?php echo $rel->blog_title;?></a> <span class="post-date"><?php echo $rel->blog_added;?></span></div>
                                            </li>
                                            <?php
                                          }
                                            ?>
                                        </ul>
                                    </aside>

                                    <!-- Text widget-->
                                    <aside class="widget">
                                        <div class="widget-title">Text Widget</div>

                                        <p class="text-muted text-widget-des">Exercitation srk booth stumptown tote bag Banksy, elit small batch freegan sed. Craft beer elit seitan exercitation, srk booth et 8-bit kale chips proident chillwave deep v laborum. Aliquip veniam delectus, Marfa eiusmod Pinterest in do umami readymade swag. </p>

                                    </aside>

                                    <!-- Archives widget-->
                                    <aside class="widget">
                                        <div class="widget-title">Archives</div>

                                        <ul>
                                            <li><a href="#">March 2018</a> (40)</li>
                                            <li><a href="#">April 2018</a> (08)</li>
                                            <li><a href="#">May 2018</a> (11)</li>
                                            <li><a href="#">Jun 2018</a> (21)</li>
                                        </ul>

                                    </aside>

                                    <!-- Tags widget-->
                                    <aside class="widget widget_tag_cloud">
                                        <div class="widget-title">Tags</div>
                                        <div class="tagcloud">
                                            <a href="#">logo</a>
                                            <a href="#">business</a>
                                            <a href="#">corporate</a>
                                            <a href="#">e-commerce</a>
                                            <a href="#">agency</a>
                                            <a href="#">responsive</a>
                                        </div>
                                    </aside>
                                </div>
                            </div>
                            <!-- Sidebar end-->
                        </div>

                    </div>
                    <!-- end container -->
                </section>
            </div>
        </div>
        <!-- js placed at the end of the document so the pages load faster -->
        <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.easing.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/metisMenu.min.js"></script>
        <!--common script for all pages-->
        <script src="<?php echo base_url();?>assets/js/jquery.app.js"></script>
    </body>



<!-- Mirrored from zoyothemes.com/blogezy/standard-post.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 May 2018 06:47:50 GMT -->
</html>
