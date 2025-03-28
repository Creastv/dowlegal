<?php
$faq = get_field('faq');
$colOne = $faq['accordion_one'];
$colTwo = $faq['accordion_two'];
?>
<div id="faq">
    <div class="faq js">
        <div class="faq__wraper" itemscope itemtype="https://schema.org/FAQPage">
            <?php if ($colOne) { ?>
                <div class="col">
                    <?php foreach ($colOne as $acc) { ?>
                        <div class="accordion js " itemscope itemprop="mainEntity" itemtype="https://schema.org/Question"
                            data-aos="fade-up">
                            <h3 class="question h5">
                                <span itemprop="name"><?php echo $acc['accordion_name']; ?></span>
                            </h3>
                            <div class="answer">
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <!-- <p itemprop="text"> -->
                                    <?php echo $acc['accordion_content']; ?>
                                    <!-- </p> -->
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
            <?php if ($colTwo) { ?>
                <div class="col">
                    <?php foreach ($colTwo as $acc) { ?>
                        <div class="accordion js " itemscope itemprop="mainEntity" itemtype="https://schema.org/Question"
                            data-aos="fade-up">
                            <h3 class="question h5">
                                <span itemprop="name"><?php echo $acc['accordion_name']; ?></span>
                            </h3>
                            <div class="answer">
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <!-- <p itemprop="text"> -->
                                    <?php echo $acc['accordion_content']; ?>
                                    <!-- </p> -->
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>

    </div>
</div>