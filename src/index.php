<?php include('header.php') ?>

<div class="row">
    <div class="col-md-3">
        <p>hello</p>
    </div>
    <div class="col-md-9">
        <div class="col-md-8">
            <?php
            function get_elements(){

            }
            for ($i=0; $i<5 ; $i++) {
                echo '<div class="element">
                        <h4>סיכום שנה מבנה נתונים</h4>
                        <div class="tags">
                            <span class="label label-default">מבנה נתונים</span> <span class="label label-primary">סיכום</span> <span class="label label-success">אירנה רבייב</span>
                        </div>
                        <div class="details">
                            <span>נוסף/עודכן לפני 53 דקות ע"י גיא אלוק</span>
                        </div>
                    </div>';
            }
            ?>
        </div>
        <div class="col-md-1">

        </div>
    </div>
</div>

<?php include('footer.php'); ?>