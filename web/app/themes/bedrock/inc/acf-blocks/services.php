<?php 
$services = get_field( 'url_json' );

if( $services ):
    
    $request = wp_remote_get( $services, array(
		'headers' => array(
			'Accept' => 'application/json',
		)
	) );

    if( is_wp_error( $request ) ) :
        return false;
    endif;

    $body = wp_remote_retrieve_body( $request );
    $data = json_decode( $body );
    $parts = array_slice($data, 0, 5);
    
?>
    <div class="row row-cols-3 justify-content-md-center services">
        <?php
            foreach( $parts as $service ) :
                if ( $service->id <= 3):
        ?>
                    <div class="col">
                        <div class="serviceID col-2"><?= $service->id; ?></div><div class="serviceTitle col-10"><?php echo $service->title;?></div>
                    </div>
        <?php   elseif ( $service->id >= 4):    ?>
                    <div class="col-5">
                        <div class="serviceID col-2"><?= $service->id; ?></div><div class="serviceTitle col-10"><?php echo $service->title;?></div>
                    </div>
        <?php
                endif;
            endforeach;
        ?>
    </div>
<?php endif; ?>