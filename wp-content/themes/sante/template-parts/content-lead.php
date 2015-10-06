<?php

// Advance Custom Field
    $lead_text_primary      = get_field('lead_text_primary');
    $lead_text_secondary    = get_field('lead_text_secondary');
    $lead_text_accent       = get_field('lead_text_accent');
    // working time
    $working_day            = get_field('mon_fri' );
    $saturday               = get_field('saturday');
    $sunday                 = get_field('sunday');
?>
<section class="lead">
    <div class="lead__image">
        <div class="lead__text">
            <p class="lead__text--primary"><?php echo $lead_text_primary; ?></p>
            <p class="lead__text--accent"><?php echo $lead_text_accent; ?></p>
            <p class="lead__text--secondary"><?php echo $lead_text_secondary; ?></p>
        </div><!-- end .lead__text -->
        <div class="working-time">
            <div class="working-time__item">
                PON-PET <span><?php echo $working_day; ?></span>
            </div>
            <div class="working-time__item">
                SUBOTA <span><?php echo $saturday; ?></span>
            </div>
            <div class="working-time__item">
                Nedjelja <span><?php echo $sunday; ?></span>
            </div>
        </div><!-- end .working-time -->
    </div><!-- end .lead__image -->
</section><!-- end .lead -->
