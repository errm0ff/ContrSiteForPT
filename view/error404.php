 <?php
 ob_start();
 ?>
<body id="home">


    <!-- begin:main-title -->
    <div class="main-title block-section padd-40-top padd-60-btm bg-grey">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <h1 class="main-title-primary">404 Not Found</h1>
          </div><!-- .col-## -->
        </div><!-- .row -->
      </div><!-- .container -->
    </div><!-- .main-title -->
    <!-- end:main-title -->

    <!-- begin:breadcrumb -->
    <div class="breadcrumbs">
      <div class="container">
        <div class="row">
          
          <div class="row">
            <div class="col-md-12">
              <div class="entry-content">
                <article class="blog-entry">
                  <div class="blog-entry-content">
                    <div class="row">
                      <div class="col-md-8 col-md-offset-2 text-center">
                        <h5 class="text-upper">OOPS! THAT PAGE CAN’T BE FOUND.</h5>
                        <p>It looks like nothing was found at this location. Maybe try one of the links below or a one of another keyword to search.</p>
                        <form class="search-form">
                          <div class="form-group">
                            <label for="search" class="sr-only">Search</label>
                            <input type="text" class="form-control search-field" placeholder="Search...">
                          </div><!-- .form-group -->
                          <button type="submit" class="btn btn-default search-submit"><i class="fa fa-search"></i></button>
                        </form>

                        <section class="widget widget_tag_cloud">
                          <h2 class="widget-title"><span>Tags</span></h2>
                          <div class="tagcloud">
                            <a href="#">design <span>52</span></a> <a href="#">interior <span>86</span></a>
                            <a href="#">thoughts <span>13</span></a> <a href="#">inspiring <span>7</span></a>
                            <a href="#">tips <span>64</span></a> <a href="#">dowork <span>9</span></a>
                          </div>
                        </section>
                      </div><!-- .col-## -->
                    </div><!-- .row -->
                  </div><!-- .blog-entry-content -->
                </article><!-- .blog-entry -->

              </div><!-- .entry-content -->
            </div><!-- .col-## -->
          </div><!-- .row -->
        </div><!-- .row -->
      </div><!-- .container -->
    </div><!-- .site-breadcrumb -->
    <!-- end:breadcrumb -->


 <?php
 $content=ob_get_clean();
 include_once 'view/layout.php';