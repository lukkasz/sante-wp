<?php

// Advance Custom Field
    $lead_text_primary      = get_field('lead_text_primary', 73);
    $lead_text_secondary    = get_field('lead_text_secondary', 73);
    $lead_text_accent       = get_field('lead_text_accent', 73);
    // working time
    $working_day            = get_field('mon_fri', 70);
    $saturday               = get_field('saturday', 70);
    $sunday                 = get_field('sunday', 70);
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
