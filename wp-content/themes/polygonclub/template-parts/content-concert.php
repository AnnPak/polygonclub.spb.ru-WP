<?
$date = get_sub_field('concert_date');
$datenow = date('Y-m-d');
$class = '';
$date_show = date('d.m', strtotime($date));
$date_day = date_i18n('l', strtotime($date));

if ($date < $datenow) {
    $class = "not-active";
}

?>



<div class="performances-list__item <?= $class; ?>">
    <div class="performances-list__item__info date-info">
        <p><?= $date_show; ?> </p>
        <p class="gray-txt"> <?= get_sub_field('concert_time'); ?> / <?= $date_day; ?></p>
    </div>

    <div class="performances-list__item__info city-info">
        <p><?= get_sub_field('concert_city'); ?></p>
        <p class="gray-txt"><?= get_sub_field('concert_place'); ?></p>
    </div>
 
    <div class="performances-list__item__info btns-wrapper">
        <div class="performances-list__item__info-wrap">
            <? if(get_sub_field('concert_vk')) { ?>
            <a href="<?= get_sub_field('concert_vk'); ?>" target="_blank" class="performances-list__item__info__img vk">
                <img src="<?= get_template_directory_uri(); ?>/assets/img/icons/icon-vk-white.png" alt="vk.com">
            </a>
            <? } ?>
            <? if(get_sub_field('concert_facebook')) { ?>
            <a href="<?= get_sub_field('concert_facebook'); ?>" target="_blank" class="performances-list__item__info__img fb">
                <img src="<?= get_template_directory_uri(); ?>/assets/img/icons/icon-fb-white.png" alt="facebook.com">
            </a>
            <? } ?> 
        </div>

        <a href="<?= get_sub_field('concert_buy'); ?>" target="_blank" class="button active-tour-btn">Купить билет</a>
        <a href="#" class="button not-active-tour-btn">Завершен</a>
    </div>

</div>