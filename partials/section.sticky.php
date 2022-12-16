<section class="sticky <?php if ( isset($classes) && $classes ) echo implode( ' ', $classes ); ?>">
    <div class="container">
    
        <div class="content" id="pin">
            <aside>
                <div class="pin">
                    <h3><?php echo $block['sub_heading']; ?></h3>
                    <h2 data-scroll data-scroll-sticky data-scroll-target="#pin">
                        <?php echo $block['heading']; ?>
                    </h2>
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
                    </figure>
                </div>
            </aside>
            <?php if(isset($block['information']) && $block['information']): ?>
                <section>
                    <?php foreach($block['information'] as $single): ?>
                        <article>
                            <h4>
                                <?php echo $single['heading']; ?>
                            </h4>
                            
                            <?php echo $single['description']; ?>
                        </article>
                    <?php endforeach; ?>
                </section>
            <?php endif; ?>
        </div>
        
    </div>
</section>