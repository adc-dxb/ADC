<?php /* Template Name: PageCustom */ ?>
<?php get_header(); ?>
    <!--  header starts  -->
    <?php
    if ( defined( 'ICL_LANGUAGE_CODE' ) ) {
        // grab the value
        $value = constant( 'ICL_LANGUAGE_CODE' );
        if ( !empty( $value ) ) {
            if ( $value === 'ar' ) {
                ?>
                <nav class="navbar navbar-expand-lg m_header">
                    <div class="container">
                        <a class="navbar-brand" href="/"><img src="https://dev.adcspac.com/wp-content/uploads/2022/05/adc-logo.svg" alt="ADC Logo"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"><i class="lnr lnr-menu"></i></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link smoothScroll" href="#about">نبذة عن <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link smoothScroll" href="#board-of-directors">مجلس الإدارة</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link smoothScroll" href="#management-team">فريق الإدارة</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link smoothScroll " href="#faq">الأسئلة الشائعة</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link smoothScroll " href="#contact-us">اتصل بنا</a>
                                </li>
                            </ul>
                            <ul class="navbar-nav lang_menu">
                                <li class="nav-item">
                                    <a class="nav-link en" href="/">EN</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link ar" href="/ar">AR</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <?php
            } else {
                ?>
                <nav class="navbar navbar-expand-lg  m_header">
                    <div class="container">
                        <a class="navbar-brand" href="/"><img src="<?php echo get_field('site_logo');?>" alt="ADC Logo"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"><i class="lnr lnr-menu"></i></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link smoothScroll" href="#about">ABOUT <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link smoothScroll" href="#board-of-directors">BOARD OF DIRECTORS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link smoothScroll" href="#management-team">MANAGEMENT TEAM</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link smoothScroll " href="#faq">FAQ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link smoothScroll " href="#contact-us">CONTACT US</a>
                                </li>
                            </ul>


                            <ul class="navbar-nav lang_menu">
                                <li class="nav-item">
                                    <a class="nav-link en" href="/">EN</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link ar" href="/ar">AR</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </nav>
                <?php
            }
        }
    }
    ?>
    <!--  header ends  -->


    <section class="sec_hero">
        <div class="container-fluid">
            <div class="row">
                <div class="wrapper">
                    <img class="hero_bg" src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>">
                </div>
            </div>
        </div>
    </section>


    <section class="sec_about_intro" id="about">
        <div class="container">
            <div class="row">
                <div class="wrapper">
                    <?php the_content(); ?>

                    <div class="row about_grid">
                        <?php
                        $count = 1;
                        // Check rows exists.
                        if( have_rows('boxed_intro') ):

                            // Loop through rows.
                            while( have_rows('boxed_intro') ) : the_row();

                                // Load sub field value.
                                $title = get_sub_field('title');
                                $description = get_sub_field('description');
                                $icon = get_sub_field('icon');
                                ?>
                                <div class="col-6 item<?php echo $count ?>">
                                    <div class="desc">
                                        <div class="text_wrap">
                                            <h2><?php echo $title ?></h2>
                                            <p><?php echo $description ?></p>
                                        </div>
                                        <img class="ftrd_icon" src="<?php echo $icon ?>">
                                    </div>
                                </div>
                            <?php
                                $count++;
                                // End loop.
                            endwhile;
                        endif;

                        ?>
                    </div>

                    <?php echo get_field('supplement_content')?>


                    <div class="timeline_row">
						<?php if(ICL_LANGUAGE_CODE  == 'ar'): ?>
							<h3>الجدول الزمني الإرشادي</h3>
						<?php else: ?>
							<h3>INDICATIVE TIMELINE</h3>
						<?php endif; ?>
						
                        <div class="timeline_wrap row">
                            <?php
                            // Check rows exists.
                            if( have_rows('timeline_items') ):

                                // Loop through rows.
                                while( have_rows('timeline_items') ) : the_row();

                                    // Load sub field value.
                                    $date = get_sub_field('date');
                                    $description = get_sub_field('description');
                                    ?>
                                    <div class="col-4 item">
                                        <span class="date"><?php echo $date ?></span>
                                        <p><?php echo $description ?></p>
                                    </div>
                                    <?php
                                    // End loop.
                                endwhile;
                            endif;
                            ?>
                        </div>

                        <strong><?php echo get_field('supplement_content_timeline')?></strong>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <?php
    $count = 1;
    // Check rows exists.
    if( have_rows('about_adc') ):

        // Loop through rows.
        while( have_rows('about_adc') ) : the_row();

            // Load sub field value.
            $logo = get_sub_field('logo');
            $title = get_sub_field('title');
            $description = get_sub_field('description');
            ?>
            <section class="<?php if($count === 1){echo 'about_adq';}else{echo 'about_chimera';}?> about_cstm_sec bg_light">
                <div class="container">
                    <div class="wrapper row">
                        <div class="col-4 ftrd_img">
                            <div class="wrap"><img src="<?php echo $logo ?>"></div>
                        </div>

                        <div class="col-8 desc">
                            <h3><?php echo $title ?></h3>
                            <?php echo $description ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php
            $count++;
            // End loop.
        endwhile;
    endif;
    ?>


    <section class="sec_board_directors " >
        <div class="container">
            <div class="row_wrapper" id="board-of-directors">
				<?php if(ICL_LANGUAGE_CODE  == 'ar'): ?>
					 <h2>مجلس الإدارة</h2>
				<?php else: ?>
					 <h2>BOARD OF DIRECTORS</h2>
				<?php endif; ?>
               
                <div class="wrapper row team_gallery">
                    <?php
                    $count = 1;
                    // Check rows exists.
                    if( have_rows('director_profiles') ):

                        // Loop through rows.
                        while( have_rows('director_profiles') ) : the_row();

                            // Load sub field value.
                            $thumbnail = get_sub_field('thumbnail');
                            $large_photo = get_sub_field('large_photo');
                            $name = get_sub_field('name');
                            $designation = get_sub_field('designation');
                            $profile = get_sub_field('profile');
                            ?>
                            <div class="col-4">
                                <div class="item">
                                    <a href="#slide<?php echo $count ?>">
                                        <img src="<?php echo $thumbnail ?>">
                                        <div class="desc">
                                            <h3><?php echo $name ?></h3>
                                            <span><?php echo $designation ?></span>
                                        </div>

                                        <div id="slide<?php echo $count ?>" class="mfp-hide">
                                            <div class="team_popup">
                                                <img class="popup_img" src="<?php echo $large_photo ?>">
                                                <div class="inner">
                                                    <h3><?php echo $name ?></h3>
                                                    <span><?php echo $designation ?></span>

                                                    <div class="inner_desc">
                                                        <?php echo $profile ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <?php
                            $count++;
                            // End loop.
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>


            <div class="row_wrapper" id="management-team">
				<?php if(ICL_LANGUAGE_CODE  == 'ar'): ?>
					 <h2>فريق الإدارة</h2>
				<?php else: ?>
					 <h2>MANAGEMENT TEAM</h2>
				<?php endif; ?>
               
                <div class="wrapper row team_gallery2">
                    <?php
                    $count = 1;
                    // Check rows exists.
                    if( have_rows('management_profiles') ):

                        // Loop through rows.
                        while( have_rows('management_profiles') ) : the_row();

                            // Load sub field value.
                            $thumbnail = get_sub_field('photo');
                            $large_photo = get_sub_field('large_photo');
                            $name = get_sub_field('name');
                            $designation = get_sub_field('designation');
                            $profile = get_sub_field('profile');
                            ?>
                            <div class="col-4">
                                <div class="item">
                                    <a href="#slide_<?php echo $count ?>">
                                        <img src="<?php echo $thumbnail ?>">
                                        <div class="desc">
                                            <h3><?php echo $name ?></h3>
                                            <span><?php echo $designation ?></span>
                                        </div>

                                        <div id="slide_<?php echo $count ?>" class="mfp-hide">
                                            <div class="team_popup">
                                                <img class="popup_img" src="<?php echo $large_photo ?>">
                                                <div class="inner">
                                                    <h3><?php echo $name ?></h3>
                                                    <span><?php echo $designation ?></span>

                                                    <div class="inner_desc">
                                                        <?php echo $profile ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <?php
                            $count++;
                            // End loop.
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </section>


    <section class="sec_faq bg_light" id="faq">
        <div class="container">
            <div class="row">
                <div class="wrapper">
					<?php if(ICL_LANGUAGE_CODE  == 'ar'): ?>
						<h2>الأسئلة الشائعة</h2>
					<?php else: ?>
						<h2>FREQUENTLY ASKED QUESTIONS</h2>
					<?php endif; ?>
                    
                    <div id="accordion">
                        <?php
                        $count = 1;
                        // Check rows exists.
                        if( have_rows('faq_items') ):

                            // Loop through rows.
                            while( have_rows('faq_items') ) : the_row();

                                // Load sub field value.
                                $question = get_sub_field('question');
                                $answer = get_sub_field('answer');
                                $num_faq = sprintf("%02d", $count);
                                ?>
                                <div class="card">
                                    <div class="card-header" id="heading<?php echo $count ?>">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse<?php echo $count ?>" aria-expanded="false" aria-controls="collapse<?php echo $count ?>">
                                                <span><?php echo $num_faq ?></span><?php echo $question ?></button>
                                        </h5>
                                    </div>

                                    <div id="collapse<?php echo $count ?>" class="collapse " aria-labelledby="heading<?php echo $count ?>" data-parent="#accordion">
                                        <div class="card-body">
                                            <?php echo $answer ?>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                $count++;
                                // End loop.
                            endwhile;
                        endif;
                        ?>


                    </div>

                    <div class="disclaimer">

                         <?php echo get_field('partial_disclaimer'); ?>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sec_contact bg_dark" id="contact-us">
        <div class="container">
            <div class="row">
                <div class="wrapper">
					<?php if(ICL_LANGUAGE_CODE  == 'ar'): ?>
						 <h2>اتصل بنا</h2>
                    	 <h3>شركة ADC Acquisition Corporation PJSC</h3>
					<?php else: ?>
						 <h2>CONTACT US</h2>
                    	 <h3>ADC Acquisition Corporation PJSC</h3>
					<?php endif; ?>
                   
                </div>
            </div>

            <div class="row add_ress">
                <?php
                $count = 1;
                // Check rows exists.
                if( have_rows('contact_details') ):

                    // Loop through rows.
                    while( have_rows('contact_details') ) : the_row();

                        // Load sub field value.
                        $company_name = get_sub_field('company_name');
                        $full_contact_details = get_sub_field('full_contact_details');
                        $marker = get_sub_field('marker');
                        $google_map_center = get_sub_field('google_map_center');
                        $google_map_coordinates = get_sub_field('google_map_coordinates');
                        $google_map_contents = get_sub_field('google_map_contents');
                        ?>
                        <div class="col-6">
                            <div class="loca_tion">
                                <div id="map">
                                    <!-- Google map code from EZ Map - https://ezmap.co -->
                                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyANt6Xy9LQccwaqMhnj1MQ9_CFVftSYuKA&callback=initMap"></script>
                                    <script>
                                        function init() {
                                            var mapOptions = { "center": {  <?php echo $google_map_center ?> }, "clickableIcons": true, "disableDoubleClickZoom": false, "draggable": true, "fullscreenControl": false, "keyboardShortcuts": false, "mapTypeControl": false, "mapTypeControlOptions": {  "text": "Default (depends on viewport size etc.)",  "style": 0 }, "mapTypeId": "roadmap", "rotateControl": true, "scaleControl": false, "scrollwheel": true, "streetViewControl": false, "styles": [  {   "featureType": "water",   "elementType": "geometry.fill",   "stylers": [    {     "color": "#d3d3d3"    }   ]  },  {   "featureType": "transit",   "stylers": [    {     "color": "#808080"    },    {     "visibility": "off"    }   ]  },  {   "featureType": "road.highway",   "elementType": "geometry.stroke",   "stylers": [    {     "visibility": "on"    },    {     "color": "#b3b3b3"    }   ]  },  {   "featureType": "road.highway",   "elementType": "geometry.fill",   "stylers": [    {     "color": "#ffffff"    }   ]  },  {   "featureType": "road.local",   "elementType": "geometry.fill",   "stylers": [    {     "visibility": "on"    },    {     "color": "#ffffff"    },    {     "weight": 1.8    }   ]  },  {   "featureType": "road.local",   "elementType": "geometry.stroke",   "stylers": [    {     "color": "#d7d7d7"    }   ]  },  {   "featureType": "poi",   "elementType": "geometry.fill",   "stylers": [    {     "visibility": "on"    },    {     "color": "#ebebeb"    }   ]  },  {   "featureType": "administrative",   "elementType": "geometry",   "stylers": [    {     "color": "#a7a7a7"    }   ]  },  {   "featureType": "road.arterial",   "elementType": "geometry.fill",   "stylers": [    {     "color": "#ffffff"    }   ]  },  {   "featureType": "road.arterial",   "elementType": "geometry.fill",   "stylers": [    {     "color": "#ffffff"    }   ]  },  {   "featureType": "landscape",   "elementType": "geometry.fill",   "stylers": [    {     "visibility": "on"    },    {     "color": "#efefef"    }   ]  },  {   "featureType": "road",   "elementType": "labels.text.fill",   "stylers": [    {     "color": "#696969"    }   ]  },  {   "featureType": "administrative",   "elementType": "labels.text.fill",   "stylers": [    {     "visibility": "on"    },    {     "color": "#737373"    }   ]  },  {   "featureType": "poi",   "elementType": "labels.icon",   "stylers": [    {     "visibility": "off"    }   ]  },  {   "featureType": "poi",   "elementType": "labels",   "stylers": [    {     "visibility": "off"    }   ]  },  {   "featureType": "road.arterial",   "elementType": "geometry.stroke",   "stylers": [    {     "color": "#d6d6d6"    }   ]  },  {   "featureType": "road",   "elementType": "labels.icon",   "stylers": [    {     "visibility": "off"    }   ]  },  {},  {   "featureType": "poi",   "elementType": "geometry.fill",   "stylers": [    {     "color": "#dadada"    }   ]  } ], "zoom": 13, "zoomControl": false};

                                            var mapElement = document.getElementById('ez-map<?php echo $count ?>');
                                            var map = new google.maps.Map(mapElement, mapOptions);

                                            var marker0 = new google.maps.Marker({title: "<?php echo $company_name ?>", icon:'<?php echo $marker ?>', position: new google.maps.LatLng(<?php echo $google_map_coordinates ?>), map: map});

                                            var infowindow0 = new google.maps.InfoWindow({content: "<?php echo $google_map_contents ?>",map: map});
                                            marker0.addListener('click', function () { infowindow0.open(map, marker0) ;});infowindow0.close();


                                            var heatmap = new google.maps.visualization.HeatmapLayer({data: []});heatmap.setOptions({"dissipating":false,"opacity":0.6,"radius":2});heatmap.setMap(map);
                                            google.maps.event.addDomListener(window, "resize", function() { var center = map.getCenter(); google.maps.event.trigger(map, "resize"); map.setCenter(center); });
                                        }
                                        google.maps.event.addDomListener(window, 'load', init);
                                    </script>

                                    <div id='ez-map<?php echo $count ?>'></div>
                                    <!-- End of EZ Map code - https://ezmap.co -->
                                </div>
                            </div>


                            <div class="desc">
                                <h4><?php echo $company_name ?></h4>
                                <?php echo $full_contact_details ?>
                            </div>
                        </div>
                        <?php
                        $count++;
                        // End loop.
                    endwhile;
                endif;
                ?>

            </div>
        </div>
    </section>



    <div class="mfp-hide" id="ipo-prospectus-en" >
        <div class="inner_desc">

            <!-- disclaimer -->
             <?php echo get_field('full_disclaimer_en'); ?>



            <div class="bt_wrap">
                <a  class="ipo_close">Decline</a>
                <a target="_blank" class="bt_blue" target="_blank" href="<?php echo get_field('prospectus_en'); ?>">Accept</a>
            </div>

        </div>
    </div>

    <div class="mfp-hide" id="ipo-prospectus-ar" >
        <div class="inner_desc ar_disclaimer">

            <!-- disclaimer -->
             <?php echo get_field('full_disclaimer_ar'); ?>



            <div class="bt_wrap">
                <a  class="ipo_close">غير موافق</a>
                <a target="_blank" class="bt_blue" target="_blank" href="<?php echo get_field('prospectus_ar'); ?>">موافق</a>
            </div>

        </div>
    </div>


    <script type="text/javascript">
        jQuery( document ).ready(function($) {
            $('.modal_link').magnificPopup({});

            $('.ipo_close').click(function(){
                $('.mfp-close').trigger('click');
            });

            //Team popup gallery starts
            $('.team_gallery, .team_gallery2').each(function () {
                $(this).magnificPopup({
                    delegate:'a',
                    type: 'inline',
                    gallery: {
                        enabled: true,
                        navigateByImgClick: true
                    },
                    callbacks: {
                        buildControls: function() {
                            // re-appends controls inside the main container
                            this.contentContainer.append(this.arrowLeft.add(this.arrowRight));
                        }

                    },
                    fixedContentPos: false
                });
            });
            //Team popup gallery ends

            //smoothscroll starts
            $(function() {
                $('.smoothScroll').click(function() {
                    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                        var target = $(this.hash);
                        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                        if (target.length) {
                            $('html,body').animate({
                                scrollTop: target.offset().top-140
                            }, 900); return false;
                        }
                    }
                });
            });
            //smoothscroll ends
        });

    </script>

<?php get_footer(); ?>