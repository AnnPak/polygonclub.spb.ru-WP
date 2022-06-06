<div class="posters__wrapper__poster">
    
    <a href="<?=get_sub_field('tours_artist') ? get_permalink(get_sub_field('tours_artist')) : '#'?>" 
       class="<?=!get_sub_field('tours_artist') ? 'no-link' : ''?> posters__overlay" >

        <? if (get_sub_field('tours_label')) { ?>
            <p class="posters__label"><?= get_sub_field('tours_label'); ?></p>
        <? } ?>

        <div class="posters__wrapper__poster__img" style="background-image: url('<?= get_sub_field('tours_img'); ?>');">
            <p class="posters__wrapper__poster__info__date"><?= get_sub_field('tours_date'); ?> </p>
        </div>
    </a>

   
    <div class="posters__wrapper__poster__info">
        <?if(get_sub_field('tours_ticket_link')){?>
            <a href ="<?=get_sub_field('tours_ticket_link')?>" class="button posters__wrapper__poster__info__ticket-link" target="_blank">Купить билет</a>
        <?}?>
        <!-- <p class="posters__wrapper__poster__info__name"><?= get_sub_field('tours_title'); ?></p> -->
    </div>
   
</div>