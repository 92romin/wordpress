<section class="image">
    <figure>
        <?php
                $params = [
                'tag'           => 'picture',
                'alt'           => $block['image']['title'],
                'image'         => $block['image']['url'],
                'settings'      => [
                    'media'     => '(max-width: 768px)',
                    'settings'  => '&resize=1000,600',
                ],
                'breakpoints'   => [
                    [
                        'media'     => '(min-width: 768px)',
                        'settings'  => '&resize=2400,2000',
                    ],
                ],
            ];

            get_img_srcset($params);
        ?>
    </figure>
</section>