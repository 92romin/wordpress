<?php
    $heading = $block['heading'];
?>
<section class="hero <?php if ( isset($classes) && $classes ) echo implode( ' ', $classes ); ?>">
    <div class="container">
        <h1>
            <span>
                <?php echo $heading['primary']; ?>
            </span>
            <span>
                <?php echo $heading['secondary']; ?>
            </span>
        </h1>
        <h3>
            <?php echo $block['lead']; ?>
        </h3>
        <h2>
            <?php echo $block['description']; ?>
        </h2>

        <aside class="scroll">
            Scroll To Discover
        </aside>

        <div class="media">
            <figure>
                <?php
                    $params = [
                        'tag'           => 'picture',
                        'alt'           => $block['image']['title'],
                        'image'         => $block['image']['url'],
                        'settings'      => [
                            'media'     => '(max-width: 768px)',
                            'settings'  => '&resize=550,717'
                        ],
                        'breakpoints'   => [
                            [
                                'media'     => '(min-width: 768px)',
                                'settings'  => '&resize=1500,1800',
                            ],
                        ],
                    ];

                    get_img_srcset($params);
                ?>
                <div class="background"></div>
            </figure>
        </div>
    </div>
</section>