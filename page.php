
<?php 
    get_header();
?>

<div class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-content">
                    <h4><?php the_title(); ?></h4>
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>

</div>


<?php 
    get_footer();
?>