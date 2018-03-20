<?php
    $page = 'Index';
    $page_css = '../_css/index.css';
    $page_icon = '../_media/logo/favicon.png';
    $description = 'Landing page for various works by Matt T Myers.';    
?>

<?php include('../_include/_base.php')?>

<?php include('../_include/_header.php')?>

    <main>
        <div class="cycle-slideshow"
            data-cycle-fx = "scrollHorz"
            data-cycle-speed = "800"
            data-cycle-timeout = "3000"
            data-cycle-pager = "#cycle-pager"
            data-cycle-pager-template = "<a href='#'><img src='{{src}}' height=100 width=100 />"
            data-cycle-next = "#next"
            data-cycle-prev = "#prev"
            data-cycle-manual-fx = "scrollHorz"
            data-cycle-manual-speed = "400"
            data-cycle-pager-fx = "fadeout">

            <div id="cycle-pager"></div>

            <img src="../_media/slides/1.png" alt="">
            <img src="../_media/slides/2.png" alt="">
            <img src="../_media/slides/3.png" alt="">
            <img src="../_media/slides/4.png" alt="">
            <img src="../_media/slides/5.png" alt="">
        </div>
        

        <!-- / Loop Through Recent Objects / -->
        <div class="container">
            <div class="well_book">
                <div class="well_book_image">
                    <img src="../_media/covers/book_1.png" alt="Book Cover" />
                </div>
                <div class="well_book_content">
                    <h3>This Header Is In Verdana</h3>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras feugiat rhoncus finibus. Sed viverra, tortor quis rutrum aliquet, sem sapien condimentum nisi, volutpat feu magna purus quis nisi. Max 250 Characters.</p>
                    <div class="well_book_url">
                        <ul>
                            <li><a href="#">Synopsis</a></li>
                            <li><a href="#">Characters</a></li>
                            <li><a href="#">Downloads</a></li>
                            <li><a href="#">Completion Status</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="well_book">
                <div class="well_book_image">
                    <img src="../_media/covers/book_1.png" alt="Book Cover" />
                </div>
                <div class="well_book_content">
                    <h3>This Header Is In Verdana</h3>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras feugiat rhoncus finibus. Sed viverra, tortor quis rutrum aliquet, sem sapien condimentum nisi, volutpat feugiat magna purus quis nisi.</p>
                    <div class="well_book_url">
                        <ul>
                            <li><a href="#">Synopsis</a></li>
                            <li><a href="#">Characters</a></li>
                            <li><a href="#">Downloads</a></li>
                            <li><a href="#">Completion Status</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="well_book">
                <div class="well_book_image">
                    <img src="../_media/covers/book_1.png" alt="Book Cover" />
                </div>
                <div class="well_book_content">
                    <h3>This Header Is In Verdana</h3>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras feugiat rhoncus finibus. Sed viverra, tortor quis rutrum aliquet, sem sapien condimentum nisi, volutpat feugiat magna purus quis nisi.</p>
                    <div class="well_book_url">
                        <ul>
                            <li><a href="#">Synopsis</a></li>
                            <li><a href="#">Characters</a></li>
                            <li><a href="#">Downloads</a></li>
                            <li><a href="#">Completion Status</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="well_book">
                <div class="well_book_image">
                    <img src="../_media/covers/book_1.png" alt="Book Cover" />
                </div>
                <div class="well_book_content">
                    <h3>This Header Is In Verdana</h3>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras feugiat rhoncus finibus. Sed viverra, tortor quis rutrum aliquet, sem sapien condimentum nisi, volutpat feugiat magna purus quis nisi.</p>
                    <div class="well_book_url">
                        <ul>
                            <li><a href="#">Synopsis</a></li>
                            <li><a href="#">Characters</a></li>
                            <li><a href="#">Downloads</a></li>
                            <li><a href="#">Completion Status</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!--/ End Container / -->

        <div class="container">
            <div style="height: 400px;background-color: #141414;">

            </div>
        </div>
    </main>

<?php include('../_include/_footer.php')?>
