<?php
$title = get_field('title');
$services = get_field('services');
$cta = get_field('cta');

$class_name = 'b-services ';
if (!empty($block['className'])) {
    $class_name .= ' ' . $block['className'];
}
?>

<div class="<?php echo $class_name; ?>">
    <h2><?php echo $title; ?></h2>
    <div class="b-services__wrap">
        <?php
        if ($services): ?>
            <ul>
                <?php foreach ($services as $service):
                    $permalink = get_permalink($service->ID);
                    $title = get_the_title($service->ID);
                    $custom_title = get_field('title', $service->ID);
                    $icon = get_field('icon', $service->ID);
                ?>
                    <li>
                        <?php if ($icon) : ?>
                            <?php echo wp_get_attachment_image($icon, 'thumbnail', false, array('class' => 'ico')); ?>
                        <?php else : ?>
                            <svg class="ico" width="51" height="50" viewBox="0 0 51 50" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M50.25 33.2035V33.3992C50.0765 34.3219 49.4716 34.8072 48.6039 35.0548C48.198 35.1703 47.798 35.319 47.4118 35.4892C46.7118 35.7975 46.0363 35.8669 45.3902 35.3581C44.949 36.7583 44.4941 37.1311 43.2098 37.1634C42.9157 38.5832 42.0333 39.271 40.601 39.181C40.5245 39.4374 40.5167 39.6996 40.3853 39.862C39.9186 40.4393 40.0029 41.1057 39.998 41.7642C39.9951 42.1223 39.9863 42.4804 39.9598 42.8366C39.8127 44.8327 38.1059 46.5851 36.1069 46.7642C35.8069 46.7906 35.701 46.9022 35.598 47.1634C34.9029 48.9296 33.3206 49.999 31.4275 50C22.5226 50.002 13.6186 50.0029 4.71373 50C2.66176 50 0.933333 48.6389 0.438235 46.6507C0.360784 46.3366 0.311765 46.0186 0.25 45.7035C0.25 32.9432 0.25 20.183 0.25 7.42172C0.281373 7.29648 0.32549 7.17417 0.342157 7.04697C0.595098 5.02544 2.22157 3.41683 4.23431 3.23386C4.52255 3.20744 4.60294 3.07436 4.69412 2.84149C5.16275 1.65068 6.00196 0.807241 7.18431 0.311155C7.47843 0.187867 7.7902 0.10274 8.09314 0C17.5049 0 26.9167 0 36.3284 0C36.6461 0.111546 36.9755 0.196673 37.2794 0.337573C39.151 1.20548 40.0069 2.69569 40.0039 4.73288C39.9951 11.4159 40.001 18.0978 40.001 24.7808C40.001 24.9276 39.9833 25.0773 40.0098 25.2182C40.0284 25.3151 40.0902 25.4491 40.1676 25.4804C40.6275 25.6644 41.0971 25.8229 41.6314 26.0147C41.5569 24.7534 42.2176 24.1722 43.2539 23.8738C43.7059 23.7436 44.1402 23.5519 44.5824 23.3894C45.7618 22.956 46.5853 23.3249 47.0206 24.4961C48.1 27.3973 49.1726 30.3004 50.249 33.2035H50.25ZM34.5147 25.3601C34.5147 25.0753 34.5147 24.9159 34.5147 24.7554C34.5147 19.1409 34.5147 13.5264 34.5127 7.91194C34.5127 7.68493 34.5 7.45597 34.4794 7.22994C34.3216 5.50294 32.5706 4.24951 30.8284 4.64677C30.8284 4.81409 30.8284 4.99022 30.8284 5.16732C30.8284 7.34834 30.8265 9.52838 30.8304 11.7094C30.8304 12.0665 30.7931 12.3943 30.4333 12.5851C30.0833 12.7701 29.8078 12.5939 29.5314 12.407C28.3961 11.6419 27.2549 10.8845 26.1265 10.1086C25.8882 9.9452 25.7265 9.94227 25.4804 10.1115C24.3275 10.908 23.151 11.6712 21.9951 12.4628C21.5961 12.7358 21.1775 12.8209 20.7529 12.6243C20.3441 12.4344 20.3814 12.0166 20.3814 11.6389C20.3814 9.49119 20.3814 7.34247 20.3814 5.19472C20.3814 5.00489 20.3814 4.81409 20.3814 4.60274C20.25 4.58806 20.1725 4.57143 20.0951 4.57143C14.9167 4.57241 9.73726 4.55773 4.55882 4.59002C3.3 4.59785 2.39314 5.29061 1.92941 6.44521C1.74216 6.90998 1.69706 7.45793 1.69706 7.96771C1.68529 20.3845 1.68725 32.8014 1.68824 45.2182C1.68824 45.3973 1.68922 45.5763 1.69804 45.7554C1.77549 47.363 3.07941 48.6321 4.69804 48.6331C13.6343 48.6389 22.5716 48.638 31.5078 48.6331C32.801 48.6331 34.0265 47.7916 34.3353 46.5509C34.5382 45.7348 34.502 44.8601 34.5745 43.9912C33.3078 44.0949 32.5598 43.5303 32.05 42.5841C31.0598 42.8014 30.2676 42.5382 29.6461 41.7485C29.5765 41.6605 29.3363 41.6507 29.1931 41.682C27.9853 41.9491 26.8647 41.3092 26.5725 40.1536C26.5137 39.9227 26.5137 39.6761 26.4843 39.4139C25.6539 39.2916 25.0118 38.9139 24.6608 38.1223C24.3127 37.3366 24.5225 36.6125 24.9176 35.9041C24.7304 35.9041 24.5745 35.9393 24.4431 35.8982C23.4951 35.6076 22.5314 35.3522 21.6157 34.9824C20.9304 34.7055 20.6304 33.8963 20.8294 33.1732C20.9804 32.6262 21.1618 32.0881 21.3373 31.5479C22.0863 29.2329 22.8343 26.9178 23.5882 24.6047C23.9353 23.5411 24.7804 23.1135 25.8559 23.453C26.5235 23.6634 27.2029 23.8483 27.8431 24.1223C28.1824 24.2671 28.5451 24.5235 28.7255 24.8297C28.9333 25.181 29.15 25.2622 29.498 25.2035C29.6422 25.1791 29.7882 25.1654 29.9324 25.138C31.4441 24.8425 32.9549 24.545 34.5147 25.3601ZM6.08726 3.18982H6.72157C14.8412 3.18982 22.9618 3.18591 31.0814 3.19863C31.6461 3.19863 32.2333 3.24266 32.7706 3.40117C34.7206 3.97652 35.9098 5.682 35.9118 7.84247C35.9167 13.3924 35.9137 18.9413 35.9137 24.4912C35.9137 24.682 35.9137 24.8738 35.9137 24.9814C36.8265 24.9266 37.6912 24.8748 38.5882 24.8209C38.5922 24.7476 38.6049 24.6204 38.6049 24.4922C38.6049 17.8366 38.6098 11.18 38.6029 4.52446C38.601 2.62035 37.3088 1.36595 35.3873 1.36595C28.3618 1.36497 21.3373 1.36595 14.3118 1.36595C12.4657 1.36595 10.6196 1.36008 8.77353 1.36888C7.61078 1.37476 6.49706 2.11644 6.08922 3.19178L6.08726 3.18982ZM26.4755 33.7094C27.7127 33.3258 28.501 33.4286 29.0637 34.2378C29.499 34.864 29.9157 35.2926 30.7118 35.4481C31.4255 35.5871 31.7549 36.2681 31.9686 36.9305C33.0255 36.9266 33.7784 37.3738 34.2216 38.3337C34.5814 38.002 34.9186 38.0616 35.2804 38.2691C35.7892 38.5597 36.3127 38.8249 36.8314 39.0988C37.2196 39.3043 37.6029 39.5225 38.001 39.7074C38.449 39.9159 38.8863 39.772 39.0951 39.3777C39.2951 39 39.1775 38.5871 38.7824 38.32C38.648 38.229 38.5 38.1585 38.3559 38.0812C37.6088 37.682 36.8549 37.2955 36.1176 36.8787C35.7627 36.6781 35.6265 36.3532 35.8324 35.9658C36.0353 35.5841 36.3657 35.5186 36.75 35.6673C36.8706 35.7143 36.9814 35.7877 37.0961 35.8493C38.2304 36.4569 39.3608 37.0724 40.501 37.6693C41.0804 37.9726 41.65 37.7397 41.7716 37.1624C41.8667 36.7113 41.6265 36.4256 41.248 36.2211C40.1294 35.6184 39.0078 35.0215 37.9 34.3992C37.7039 34.2887 37.4735 34.0841 37.4373 33.8904C37.398 33.6781 37.5069 33.3767 37.6559 33.2055C37.8882 32.9393 38.2078 33.0147 38.5069 33.1761C39.9824 33.9746 41.4569 34.7759 42.9461 35.547C43.1775 35.6663 43.6088 35.7642 43.7294 35.6478C43.9118 35.4716 43.9765 35.093 43.9529 34.8112C43.9343 34.5841 43.752 34.3297 43.5706 34.1663C43.2578 33.8855 42.9098 33.6292 42.5402 33.4286C41.3088 32.7632 40.0255 32.1849 38.8314 31.4609C38.0245 30.9716 37.2892 30.9883 36.4667 31.3004C35.798 31.5538 35.1186 31.7857 34.4294 31.9755C33.2931 32.2887 32.2284 32.1331 31.301 31.3581C30.2441 30.4746 30.2157 30.0577 31.1314 29.0401C31.2951 28.8581 31.4618 28.68 31.6314 28.5039C32.2863 27.8249 32.9431 27.1487 33.6941 26.3718C33.051 26.317 32.4569 26.1918 31.8745 26.2329C30.9186 26.3014 29.9676 26.4667 29.0206 26.6243C28.8833 26.6468 28.7147 26.8317 28.6647 26.9775C28.2912 28.0665 27.9422 29.1644 27.5873 30.2603C27.2245 31.3806 26.8627 32.502 26.4725 33.7104L26.4755 33.7094ZM21.8157 10.9168C23.002 10.1223 24.1078 9.40509 25.1853 8.64873C25.6304 8.33659 26.001 8.34442 26.4284 8.65362C26.9833 9.05382 27.5618 9.41976 28.1304 9.80137C28.5431 10.0783 28.9559 10.3562 29.4186 10.6673V4.60568H21.8157V10.9159V10.9168ZM42.2167 27.4804C41.4088 27.2759 40.7206 27.1174 40.0431 26.9227C39.6853 26.82 39.3461 26.6517 38.998 26.5147C37.6578 25.9873 36.3686 26.1204 35.2676 27.0245C34.1147 27.9726 33.0608 29.0391 31.9471 30.0685C32.5176 30.6477 33.1029 30.8943 33.7941 30.6996C34.8265 30.41 35.8382 30.0479 36.8725 29.7652C37.5971 29.5675 38.3196 29.6135 39.0059 29.9843C40.7196 30.909 42.4402 31.82 44.1804 32.7485C43.5098 30.9491 42.8343 29.135 42.2167 27.4795V27.4804ZM45.4451 24.5323C44.6157 24.8454 43.8814 25.1096 43.1647 25.4129C43.0882 25.4452 43.052 25.7358 43.101 25.8689C44.102 28.592 45.1196 31.3102 46.1304 34.0303C46.2333 34.3072 46.3775 34.4159 46.6853 34.2906C47.2726 34.0519 47.8667 33.8288 48.4686 33.6292C48.8049 33.5176 48.8549 33.3307 48.7402 33.0352C48.5882 32.6419 48.4431 32.2466 48.2951 31.8513C47.4451 29.5734 46.598 27.2935 45.7412 25.0176C45.6765 24.8454 45.548 24.6977 45.4441 24.5313L45.4451 24.5323ZM22.1343 33.5616C22.2255 33.6468 22.3274 33.8141 22.4706 33.8659C23.0667 34.0822 23.6755 34.2622 24.2784 34.4579C24.6029 34.5626 24.7755 34.4765 24.8873 34.1252C25.7569 31.3914 26.6402 28.6614 27.5392 25.9374C27.6598 25.5714 27.5392 25.4335 27.2157 25.3366C26.6549 25.1683 26.0902 25.0068 25.5461 24.7945C25.1255 24.6301 24.9696 24.7789 24.848 25.1673C24.2382 27.0988 23.6078 29.0254 22.9843 30.9521C22.7147 31.7847 22.4431 32.6164 22.1353 33.5626L22.1343 33.5616ZM30.5941 37.3483C30.6245 37.318 30.6549 37.2877 30.6863 37.2573C30.4873 37.0519 30.3235 36.775 30.0814 36.6575C29.7676 36.5059 29.4167 36.6164 29.2343 36.9393C28.7882 37.7299 28.352 38.5274 27.95 39.3415C27.7843 39.6771 27.8784 40.0254 28.2167 40.2348C28.5382 40.4344 28.949 40.4569 29.1431 40.137C29.6618 39.2808 30.1029 38.3777 30.5725 37.4922C30.5941 37.4521 30.5882 37.3973 30.5961 37.3493L30.5941 37.3483ZM35.9382 45.3787C37.5118 45.32 38.9657 43.5499 38.5588 42.0607C38.2275 42.3532 37.898 42.8004 37.4578 42.9892C37.0186 43.1771 36.4676 43.1047 35.9392 43.1497V45.3796L35.9382 45.3787ZM26.7627 38.0108C26.8608 37.9384 27.1382 37.8278 27.2657 37.6243C27.6088 37.0753 27.8922 36.4892 28.1931 35.9149C28.4176 35.4863 28.1863 35.1888 27.8559 34.9706C27.4941 34.7309 27.1284 34.8454 26.9206 35.181C26.5539 35.772 26.2186 36.3885 25.9333 37.0215C25.7108 37.5147 26.0637 37.9951 26.7627 38.0117V38.0108ZM32.9569 39.0695C32.9843 39.0362 33.0108 39.0029 33.0382 38.9697C32.8382 38.7691 32.6706 38.5029 32.4304 38.3855C32.0853 38.2162 31.75 38.3708 31.5569 38.7006C31.2706 39.1888 31 39.6869 30.7529 40.1957C30.5598 40.593 30.7098 41.0147 31.0627 41.1967C31.4333 41.3875 31.8382 41.2828 32.0706 40.8914C32.351 40.4188 32.601 39.9276 32.8529 39.4393C32.9108 39.3278 32.9235 39.1937 32.9578 39.0695H32.9569ZM35.3392 40.9198C35.099 40.7172 34.9333 40.5352 34.7314 40.4168C34.3941 40.2182 34.0667 40.362 33.8559 40.6184C33.6235 40.9012 33.4275 41.2387 33.3108 41.5851C33.1814 41.9677 33.3951 42.3072 33.7324 42.4795C33.9108 42.5714 34.298 42.591 34.3784 42.4843C34.7235 42.0254 34.9902 41.5078 35.3392 40.9207V40.9198ZM36.4784 41.68C36.8186 41.9129 37.0461 41.7613 37.1873 41.4638C37.3598 41.0998 37.1422 40.7867 36.6412 40.635C36.5892 40.9687 36.5373 41.3023 36.4784 41.68Z"
                                    fill="white" />
                                <path
                                    d="M18.1422 17.3776C21.3775 17.3776 24.6128 17.3776 27.8481 17.3776C27.9952 17.3776 28.1422 17.3756 28.2893 17.3825C28.7059 17.402 28.9236 17.6623 28.9422 18.038C28.9599 18.4011 28.7314 18.6457 28.3697 18.7269C28.2295 18.7582 28.0765 18.7425 27.9305 18.7425C21.3785 18.7425 14.8256 18.7425 8.27359 18.7425C8.15889 18.7425 8.04418 18.7494 7.93045 18.7386C7.52751 18.7005 7.24026 18.4059 7.24418 18.0449C7.2481 17.6829 7.54026 17.3903 7.94614 17.3834C8.66477 17.3707 9.38438 17.3776 10.103 17.3776C12.7824 17.3776 15.4628 17.3776 18.1422 17.3776Z"
                                    fill="white" />
                                <path
                                    d="M13.1527 30.1486C11.5351 30.1486 9.9174 30.1506 8.30074 30.1467C8.12329 30.1467 7.94093 30.1359 7.76839 30.0958C7.4174 30.0136 7.1978 29.7396 7.26937 29.4226C7.32231 29.1868 7.57427 28.9657 7.78799 28.8062C7.90956 28.7161 8.13407 28.7494 8.3125 28.7494C11.5311 28.7465 14.7498 28.7475 17.9684 28.7475C18.0007 28.7475 18.0341 28.7475 18.0664 28.7475C18.6998 28.7553 19.0576 29.0116 19.0517 29.4529C19.0468 29.8933 18.69 30.1467 18.0537 30.1477C16.4203 30.1506 14.786 30.1477 13.1527 30.1477V30.1486Z"
                                    fill="white" />
                                <path
                                    d="M13.1451 24.4265C11.4814 24.4265 9.81868 24.4285 8.15495 24.4255C7.58338 24.4246 7.25789 24.1839 7.24319 23.769C7.2275 23.3326 7.57456 23.0547 8.15691 23.0547C11.5 23.0527 14.8432 23.0547 18.1863 23.0518C18.5853 23.0518 18.9481 23.1682 18.9942 23.5831C19.0197 23.8189 18.8579 24.1251 18.6853 24.314C18.5765 24.4334 18.2922 24.4216 18.0863 24.4226C16.4393 24.4304 14.7922 24.4265 13.1451 24.4265Z"
                                    fill="white" />
                                <path
                                    d="M13.1835 34.4696C14.8962 34.4696 16.608 34.4647 18.3207 34.4725C18.7531 34.4745 19.0796 34.7856 19.0443 35.1584C19.006 35.5645 18.7658 35.8022 18.3443 35.8326C18.2796 35.8375 18.2139 35.8345 18.1482 35.8345C14.8051 35.8345 11.4619 35.8355 8.11879 35.8336C7.57271 35.8336 7.23545 35.5567 7.2433 35.134C7.25114 34.7279 7.57075 34.4705 8.09526 34.4686C9.79134 34.4647 11.4874 34.4676 13.1835 34.4676V34.4696Z"
                                    fill="white" />
                            </svg>
                        <?php endif; ?>

                        <h3><a href="<?php echo esc_url($permalink); ?>">
                                <?php if ($custom_title) : ?>
                                    <?php echo $custom_title; ?>
                                <?php else : ?>
                                    <?php echo esc_html($title); ?>
                                <?php endif; ?>
                            </a></h3>
                        <a href="<?php echo esc_url($permalink); ?>"
                            class="btn-rev"><?php echo _e('czytaj więcej', 'go'); ?></a>
                    </li>
                <?php endforeach; ?>
                <?php if ($cta): ?>
                    <li class="cta">
                        <div class="cta-img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/blocks/services/cta-img-icon.avif"
                                alt="<?php echo $title; ?>">
                        </div>
                        <div class="cta-content">
                            <?php if ($cta['title']) : ?>
                                <h4><?php echo $cta['title']; ?></h4>
                            <?php endif; ?>
                            <?php if ($cta['descriptions']) : ?>
                                <p><?php echo $cta['descriptions']; ?></p>
                            <?php endif; ?>
                            <div class="cta-contact">
                                <?php if ($cta['mobile']) : ?>
                                    <a href="tel:<?php echo $cta['mobile']; ?>">
                                        <svg width="22" height="21" viewBox="0 0 22 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M19.7502 14.8051V17.4301C19.7512 17.6738 19.7013 17.915 19.6037 18.1383C19.5061 18.3615 19.3629 18.562 19.1833 18.7267C19.0037 18.8915 18.7917 19.0169 18.5609 19.095C18.3301 19.173 18.0854 19.202 17.8427 19.1801C15.1502 18.8875 12.5639 17.9675 10.2915 16.4938C8.17735 15.1504 6.38492 13.358 5.0415 11.2438C3.56273 8.96114 2.64246 6.3622 2.35525 3.65758C2.33338 3.41562 2.36214 3.17175 2.43968 2.94151C2.51723 2.71126 2.64187 2.49969 2.80567 2.32025C2.96946 2.14082 3.16883 1.99746 3.39106 1.89929C3.6133 1.80113 3.85354 1.75031 4.0965 1.75008H6.7215C7.14614 1.74591 7.55781 1.89628 7.87979 2.17318C8.20176 2.45007 8.41206 2.8346 8.4715 3.25508C8.58229 4.09514 8.78777 4.91997 9.084 5.71383C9.20172 6.02702 9.2272 6.36738 9.15742 6.6946C9.08763 7.02182 8.9255 7.32218 8.69025 7.56008L7.579 8.67133C8.82461 10.8619 10.6384 12.6757 12.829 13.9213L13.9402 12.8101C14.1781 12.5748 14.4785 12.4127 14.8057 12.3429C15.1329 12.2731 15.4733 12.2986 15.7865 12.4163C16.5804 12.7126 17.4052 12.918 18.2452 13.0288C18.6703 13.0888 19.0585 13.3029 19.336 13.6304C19.6135 13.9579 19.7609 14.376 19.7502 14.8051Z"
                                                stroke="#FD5B39" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <span><?php echo $cta['mobile']; ?></span>
                                    </a>
                                <?php endif; ?>
                                <?php if ($cta['email']) : ?>
                                    <a href="mailto:<?php echo $cta['email']; ?>">
                                        <svg width="26" height="25" viewBox="0 0 26 25" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M23.4168 6.25008C23.4168 5.10425 22.4793 4.16675 21.3335 4.16675H4.66683C3.521 4.16675 2.5835 5.10425 2.5835 6.25008M23.4168 6.25008V18.7501C23.4168 19.8959 22.4793 20.8334 21.3335 20.8334H4.66683C3.521 20.8334 2.5835 19.8959 2.5835 18.7501V6.25008M23.4168 6.25008L13.0002 13.5417L2.5835 6.25008"
                                                stroke="#FD5B39" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <span><?php echo $cta['email']; ?></span>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </li>
                <?php endif; ?>
            </ul>
        <?php endif; ?>
    </div>
</div>