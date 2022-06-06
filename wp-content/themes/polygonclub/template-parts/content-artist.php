<?
$size = get_sub_field('size_artist'); 
// $class = '';
// if($size == 'little') { 
//     $class = 'small-poster ';
// }
?>

<a href="<?= get_permalink(get_sub_field('selected_artist')); ?>" class="posters__wrapper__poster col-lg-3">
    <div class="posters__wrapper__poster__wrap">
        
        <div class="posters__wrapper__poster__img" style="background-image: url('<?= get_the_post_thumbnail_url(get_sub_field('selected_artist')); ?>');"></div>
        <?php if(get_sub_field('lable_artist')) { ?><p class="posters__label"><?=get_sub_field('lable_artist'); ?></p> <? } ?>
    </div>

    <div class="posters__wrapper__poster__info">
        <div class="posters__wrapper__poster__info__name"><?= get_the_title(get_sub_field('selected_artist')); ?></div>
    </div>

</a>