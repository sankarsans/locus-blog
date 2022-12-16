<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('common/header-include.php');?>
</head>

<body>        
        <?php include('common/breadcrumb.php');?>

        <?php include('common/banner.php');?>

        <?php include('common/category-navigation.php');?>

        <!-- latest blogs start-->
        <section class="latest-blog sec-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-8 col-md-12 theme-heading">
                        <?php include('common/latest-blog.php');?>

                        <?php include('common/navigation.php');?>

                    </div>
                    <div class="col-12 col-lg-4 col-md-12 popular-section">
                        
                        <?php include('common/most-popular.php');?>

                        <?php include('common/picks.php');?>

                        <?php include('common/feed.php');?>
                    </div>
                </div>

            </div>
        </section>
        <!-- latest blogs end-->

        <?php include('common/video.php');?>

        <?php include('common/events.php');?>

        <?php include('common/webinar.php');?>

        <?php include('common/subscribe.php');?>
        
    </div>

    <?php include('common/footer-include.php');?>
</body>

</html>