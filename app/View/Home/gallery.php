<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
    <div class="container">

        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-web">Web</li>
                </ul>
            </div>
        </div>

        <div class="row portfolio-container">
            <?php
                $dir = 'assets/my-img/gallery';
                $files = scandir($dir);
                foreach ($files as $file) {
                    if ($file != '.' && $file != '..') {
                        echo '<div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="/assets/my-img/gallery/'.$file.'" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>'. $file .'</h4>
                                <div class="portfolio-links">
                                
                                </div>
                            </div>
                        </div>
                    </div>';
                    }
                }
            ?>

        </div>

    </div>
</section><!-- End Portfolio Section -->