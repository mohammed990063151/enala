@extends('frontend.layouts.master')
<style>
.hotel-about {
    padding: 80px 20px;
    background: #fff;
    font-family: 'Cairo', sans-serif;
}

.hotel-container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 50px;
    max-width: 1200px;
    margin: 0 auto;
    flex-wrap: wrap;
}

/* الصور */
.hotel-images {
    position: relative;
    flex: 1 1 450px;
}

.hotel-img {
    width: 100%;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    transition: transform 0.4s ease;
}

.hotel-img.main:hover {
    transform: scale(1.03);
}

.hotel-img.overlay {
    position: absolute;
    bottom: -30px;
    right: -30px;
    width: 60%;
    border: 6px solid #fff;
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
}

/* النصوص */
.hotel-text {
    flex: 1 1 400px;
}

.hotel-text h2 {
    font-size: 2.2rem;
    color: #D9EF82;
    margin-bottom: 20px;
}

.hotel-text p {
    font-size: 1rem;
    color: #444;
    line-height: 1.8;
    margin-bottom: 20px;
}

.hotel-text ul {
    list-style: none;
    padding: 0;
    margin-bottom: 30px;
}

.hotel-text ul li {
    font-size: 1rem;
    color: #333;
    margin-bottom: 10px;
    display: flex;
    align-items: center;
    gap: 5px;
}

/* الزر */
.btn {
    display: inline-block;
    background-color: #D9EF82;
    color: #fff;
    text-decoration: none;
    padding: 12px 25px;
    border-radius: 10px;
    font-weight: bold;
    transition: 0.3s;
}

.btn:hover {
    background-color: #c4e366;
}

/* ==== التجاوب ==== */
@media (max-width: 1024px) {
    .hotel-container {
        gap: 40px;
    }
}

@media (max-width: 768px) {
    .hotel-container {
        flex-direction: column;
        text-align: center;
    }

    .hotel-images {
        order: 2;
        width: 100%;
    }

    .hotel-text {
        order: 1;
    }

    .hotel-img.overlay {
        position: static;
        width: 80%;
        margin: 20px auto 0;
        display: block;
    }

    .hotel-text h2 {
        font-size: 1.8rem;
    }

    .hotel-text p {
        font-size: 0.95rem;
    }
}

@media (max-width: 480px) {
    .hotel-text h2 {
        font-size: 1.6rem;
    }

    .hotel-text ul li {
        font-size: 0.9rem;
    }

    .btn {
        padding: 10px 20px;
        font-size: 0.95rem;
    }
}
</style>

@section('content')
    <div id="main">


        <!-- ** Container ** -->
        <div class="wdt-elementor-container-fluid">
            <div data-elementor-type="wp-page" data-elementor-id="15720" class="elementor elementor-15720">
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-244fe39 elementor-section-height-min-height elementor-section-items-stretch elementor-section-content-middle wdt-dark-bg wdt-header-with-section animated-fast elementor-section-boxed elementor-section-height-default animated fadeIn"
                    data-id="244fe39" data-element_type="section"
                    data-settings="{&quot;background_background&quot;:&quot;video&quot;,&quot;wdt_bg_image&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;,&quot;alt&quot;:&quot;&quot;,&quot;source&quot;:&quot;library&quot;},&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:&quot;100&quot;,&quot;background_video_link&quot;:&quot;https:\/\/wedesignthemes.s3.us-east-1.amazonaws.com\/grassroot\/grass+root+flip.mp4  &quot;,&quot;background_play_on_mobile&quot;:&quot;yes&quot;,&quot;background_privacy_mode&quot;:&quot;yes&quot;,&quot;wdt_bg_image_laptop&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;wdt_bg_image_tablet_extra&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;wdt_bg_image_tablet&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;wdt_bg_image_mobile_extra&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;wdt_bg_image_mobile&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;wdt_bg_position&quot;:&quot;center center&quot;,&quot;wdt_animation_effect&quot;:&quot;none&quot;}">
                    <div class="elementor-background-video-container">
                        <video class="elementor-background-video-hosted" autoplay="" muted="" playsinline=""
                            loop=""
                            src="https://wedesignthemes.s3.us-east-1.amazonaws.com/grassroot/grass+root+flip.mp4  "
                            style="width: 1528.89px; height: 860px;"></video>
                    </div>
                    <div class="elementor-background-overlay"></div>
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-9b79fe1 animated-fast animated fadeInLeft"
                            data-id="9b79fe1" data-element_type="column"
                            data-settings="{&quot;animation&quot;:&quot;fadeInLeft&quot;,&quot;animation_delay&quot;:100}">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-657ec91 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                    data-id="657ec91" data-element_type="section"
                                    data-settings="{&quot;wdt_bg_image&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;wdt_bg_image_laptop&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;wdt_bg_image_tablet_extra&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;wdt_bg_image_tablet&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;wdt_bg_image_mobile_extra&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;wdt_bg_image_mobile&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;wdt_bg_position&quot;:&quot;center center&quot;,&quot;wdt_animation_effect&quot;:&quot;none&quot;}">
                                    <div class="elementor-container elementor-column-gap-no">
                                        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-5dde00f"
                                            data-id="5dde00f" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-7026bca elementor-widget__width-initial elementor-widget-mobile__width-inherit before-title elementor-widget elementor-widget-wdt-heading"
                                                    data-id="7026bca" data-element_type="widget"
                                                    data-settings="{&quot;wdt_animation_effect&quot;:&quot;none&quot;}"
                                                    data-widget_type="wdt-heading.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="wdt-heading-holder " id="wdt-heading-7026bca">
                                                            <div
                                                                class="wdt-heading-subtitle-wrapper wdt-heading-align- wdt-heading-deco-wrapper">
                                                                <span class="wdt-heading-subtitle"><span
                                                                        class="wdt-heading-deco-inner wdt-left-part"><span
                                                                            class="wdt-heading-deco-icon"><span
                                                                                class="wdt-content-icon-wrapper"><span
                                                                                    class="wdt-content-icon"><span><i><svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                x="0px" y="0px"
                                                                                                viewBox="0 0 100 100"
                                                                                                style="enable-background:new 0 0 100 100;"
                                                                                                xml:space="preserve">
                                                                                                <g>
                                                                                                    <g>
                                                                                                        <path
                                                                                                            d="M37.8,65.1c2.1,4.3,3.7,8.9,4.8,13.5c-0.4,2.1-0.8,4.2-1.1,6.3c-0.2,1.5-0.4,3-0.6,4.5c-0.3,2.4,1.5,4.5,4,4.7l2.5,0.2   c0-1.5,0-2.9,0-4.3c1.4-2.8,3.2-5.5,5.2-8c1.1-1.3,2.3-2.6,3.6-3.8c2.2-1.9,4.6-3.5,7.1-4.9c3.3-1.7,6.8-3.1,10.4-3.7   c-3.5,1-6.7,2.8-9.7,4.8c-2.9,2.1-5.5,4.6-7.7,7.3c-0.2,0.3-0.4,0.6-0.6,0.9c8.5,2.8,21.8-3.1,22.3-15.3   c-11.8-5.9-24.3,0.2-25.8,11.4c-0.5,0.4-1,0.9-1.5,1.3c-1,0.9-1.9,1.9-2.8,2.9c0.7-7.9,2.3-15.8,4.7-23.5   c2.4-7.4,5.7-14.6,9.8-21.3c1-1.4,2-2.9,3-4.2c2.8-3.6,5.8-7.1,9-10.3c3.3-3.2,6.7-6.1,10.5-8.6c-3.5,2.6-20,18.9-27.4,44.7   c22.1,0.3,48.3-26.4,37.5-55C62.5,2.9,40.5,29.6,49.4,56.6c-0.2,0.5-0.5,1-0.7,1.6c-1.7,4.1-3.1,8.3-4.3,12.6   c-1.2-2.6-2.5-5.1-3.9-7.5c-1-1.7-2.1-3.4-3.3-5c-1.9-2.9-4-5.6-6.3-8.2c-2-2.2-4.2-4.3-6.6-6.2c-2.4-1.9-4.8-3.7-7.6-5.1   c2.5,1,15.1,6.7,23.7,18.7c-0.3-17.1-17-30.1-37.3-25.9C-1.8,53.8,22.4,70.5,37.8,65.1L37.8,65.1z">
                                                                                                        </path>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </svg></i></span></span></span></span></span>استمتع بإقامة فندقية استثنائية حيث يلتقي الجمال الطبيعي بالتصميم العصري.<span
                                                                        class="wdt-heading-deco-inner wdt-right-part"></span></span>
                                                            </div>
                                                            <h2 class="wdt-heading-title-wrapper wdt-heading-align- "><span
                                                                    class="wdt-heading-title">نحن نحرص على راحتك من لحظة
                                                                    وصولك، لنمنحك تجربة لا تُنسى وسط أجواء فخمة وخدمة
                                                                    راقية</span></h2>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- <div class="elementor-element elementor-element-b37674f elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-wdt-heading"
                                                    data-id="b37674f" data-element_type="widget"
                                                    data-settings="{&quot;wdt_animation_effect&quot;:&quot;none&quot;}"
                                                    data-widget_type="wdt-heading.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="wdt-heading-holder " id="wdt-heading-b37674f">
                                                            <div class="wdt-heading-content-wrapper">ي</div>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                                <div class="elementor-element elementor-element-762456b elementor-widget__width-initial elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                                    data-id="762456b" data-element_type="widget"
                                                    data-settings="{&quot;wdt_animation_effect&quot;:&quot;none&quot;}"
                                                    data-widget_type="divider.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-divider">
                                                            <span class="elementor-divider-separator">
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-37f9989 elementor-widget__width-auto elementor-widget elementor-widget-wdt-button"
                                                    data-id="37f9989" data-element_type="widget"
                                                    data-settings="{&quot;item_normal_background_background&quot;:&quot;classic&quot;,&quot;item_hover_background_background&quot;:&quot;classic&quot;,&quot;wdt_animation_effect&quot;:&quot;none&quot;}"
                                                    data-widget_type="wdt-button.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="wdt-button-holder wdt-template-filled wdt-button-link wdt-button-style-default wdt-button-size-nm wdt-animation- wdt-button-icon-after"
                                                            id="wdt-button-37f9989"><a class="wdt-button"
                                                                href="{{ route('book.now') }}">
                                                                <div class="wdt-button-text"><span>احجز الآن</span></div>
                                                            </a></div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-314ef6e wdt-cus-rating-style elementor-widget__width-auto elementor-widget elementor-widget-wdt-testimonial"
                                                    data-id="314ef6e" data-element_type="widget"
                                                    data-settings="{&quot;carousel_arrows_prev_arrow_vertical_top_indent&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_prev_arrow_vertical_top_indent_laptop&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_prev_arrow_vertical_top_indent_tablet_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_prev_arrow_vertical_top_indent_tablet&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_prev_arrow_vertical_top_indent_mobile_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_prev_arrow_vertical_top_indent_mobile&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_prev_arrow_horizontal_left_indent&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_prev_arrow_horizontal_left_indent_laptop&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_prev_arrow_horizontal_left_indent_tablet_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_prev_arrow_horizontal_left_indent_tablet&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_prev_arrow_horizontal_left_indent_mobile_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_prev_arrow_horizontal_left_indent_mobile&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_next_arrow_vertical_top_indent&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_next_arrow_vertical_top_indent_laptop&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_next_arrow_vertical_top_indent_tablet_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_next_arrow_vertical_top_indent_tablet&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_next_arrow_vertical_top_indent_mobile_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_next_arrow_vertical_top_indent_mobile&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_next_arrow_horizontal_left_indent&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_next_arrow_horizontal_left_indent_laptop&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_next_arrow_horizontal_left_indent_tablet_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_next_arrow_horizontal_left_indent_tablet&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_next_arrow_horizontal_left_indent_mobile_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_next_arrow_horizontal_left_indent_mobile&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;wdt_animation_effect&quot;:&quot;none&quot;}"
                                                    data-widget_type="wdt-testimonial.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="wdt-testimonial-holder wdt-content-item-holder wdt-column-holder wdt-rc-template-custom-template"
                                                            id="wdt-testimonial-314ef6e"
                                                            data-settings="{&quot;item_contents&quot;:[{&quot;media_image&quot;:{&quot;url&quot;:&quot;https://wdtthemes.kinsta.cloud/mezan/wp-content/uploads/sites/4/2024/02/Rating-image.png&quot;,&quot;id&quot;:982,&quot;size&quot;:&quot;&quot;,&quot;alt&quot;:&quot;&quot;,&quot;source&quot;:&quot;library&quot;},&quot;media_image_size&quot;:&quot;thumbnail&quot;,&quot;media_icon&quot;:{&quot;value&quot;:&quot;&quot;,&quot;library&quot;:&quot;&quot;},&quot;media_icon_style&quot;:&quot;default&quot;,&quot;media_icon_shape&quot;:&quot;circle&quot;,&quot;item_title&quot;:&quot;+10,000 عميل سعيد بخدماتنا&quot;,&quot;item_sub_title&quot;:&quot;&quot;,&quot;item_description&quot;:&quot;&quot;,&quot;item_link&quot;:{&quot;url&quot;:&quot;&quot;,&quot;is_external&quot;:true,&quot;nofollow&quot;:true,&quot;custom_attributes&quot;:&quot;&quot;},&quot;item_button_text&quot;:&quot;Click Here&quot;,&quot;rating&quot;:5,&quot;_id&quot;:&quot;cfd8154&quot;,&quot;item_additional_title&quot;:&quot;Sed ut perspiciatis unde omnis iste natus error sit, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.&quot;,&quot;item_type&quot;:&quot;default&quot;,&quot;facebook_link&quot;:{&quot;url&quot;:&quot;&quot;,&quot;is_external&quot;:&quot;&quot;,&quot;nofollow&quot;:&quot;&quot;,&quot;custom_attributes&quot;:&quot;&quot;},&quot;twitter_link&quot;:{&quot;url&quot;:&quot;&quot;,&quot;is_external&quot;:&quot;&quot;,&quot;nofollow&quot;:&quot;&quot;,&quot;custom_attributes&quot;:&quot;&quot;},&quot;youtube_link&quot;:{&quot;url&quot;:&quot;&quot;,&quot;is_external&quot;:&quot;&quot;,&quot;nofollow&quot;:&quot;&quot;,&quot;custom_attributes&quot;:&quot;&quot;},&quot;linkedin_link&quot;:{&quot;url&quot;:&quot;&quot;,&quot;is_external&quot;:&quot;&quot;,&quot;nofollow&quot;:&quot;&quot;,&quot;custom_attributes&quot;:&quot;&quot;}}],&quot;layout&quot;:&quot;&quot;,&quot;template&quot;:&quot;custom-template&quot;,&quot;group1_content_positions&quot;:[{&quot;element_value&quot;:&quot;image&quot;,&quot;_id&quot;:&quot;7beba07&quot;,&quot;module&quot;:&quot;wdtRepeaterTestimonialContent&quot;}],&quot;group1_element_group_content_positions&quot;:[],&quot;group2_content_positions&quot;:[{&quot;_id&quot;:&quot;538f162&quot;,&quot;element_value&quot;:&quot;rating&quot;,&quot;module&quot;:&quot;wdtRepeaterTestimonialContent&quot;},{&quot;_id&quot;:&quot;a9aab4a&quot;,&quot;element_value&quot;:&quot;title&quot;,&quot;module&quot;:&quot;wdtRepeaterTestimonialContent&quot;}],&quot;group2_element_group_content_positions&quot;:[],&quot;item_align&quot;:&quot;start&quot;,&quot;_css_classes&quot;:&quot;wdt-cus-rating-style&quot;,&quot;wdt_ame_custom_directions&quot;:null,&quot;__globals__&quot;:{&quot;name_normal_color&quot;:&quot;globals/colors?id=9884a02&quot;,&quot;ratings_normal_color&quot;:&quot;globals/colors?id=9884a02&quot;},&quot;item_align_tablet&quot;:&quot;center&quot;,&quot;_padding&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;10&quot;,&quot;right&quot;:&quot;0&quot;,&quot;bottom&quot;:&quot;5&quot;,&quot;left&quot;:&quot;0&quot;,&quot;isLinked&quot;:false},&quot;_padding_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;10&quot;,&quot;right&quot;:&quot;0&quot;,&quot;bottom&quot;:&quot;5&quot;,&quot;left&quot;:&quot;0&quot;,&quot;isLinked&quot;:false},&quot;_padding_mobile_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;10&quot;,&quot;right&quot;:&quot;10&quot;,&quot;bottom&quot;:&quot;10&quot;,&quot;left&quot;:&quot;10&quot;,&quot;isLinked&quot;:false},&quot;_element_width&quot;:&quot;auto&quot;,&quot;item_align_mobile&quot;:&quot;start&quot;,&quot;_padding_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;20&quot;,&quot;right&quot;:&quot;0&quot;,&quot;bottom&quot;:&quot;0&quot;,&quot;left&quot;:&quot;0&quot;,&quot;isLinked&quot;:false},&quot;columns&quot;:null,&quot;columns_laptop&quot;:null,&quot;columns_tablet_extra&quot;:null,&quot;columns_tablet&quot;:null,&quot;columns_mobile_extra&quot;:null,&quot;columns_mobile&quot;:null,&quot;column_gap&quot;:null,&quot;wdt_snap_scroll&quot;:null,&quot;wdt_snap_scroll_on_devices&quot;:null,&quot;direction&quot;:null,&quot;effect&quot;:null,&quot;slides_to_show_opts&quot;:null,&quot;slides_to_show_opts_laptop&quot;:null,&quot;slides_to_show_opts_tablet_extra&quot;:null,&quot;slides_to_show_opts_tablet&quot;:null,&quot;slides_to_show_opts_mobile_extra&quot;:null,&quot;slides_to_show_opts_mobile&quot;:null,&quot;slides_to_scroll_opts&quot;:null,&quot;marquee_class&quot;:null,&quot;mouse_wheel_scroll&quot;:null,&quot;pagination&quot;:null,&quot;arrows&quot;:null,&quot;arrows_prev_icon&quot;:null,&quot;arrows_next_icon&quot;:null,&quot;speed&quot;:null,&quot;unequal_height_compatability&quot;:null,&quot;gap&quot;:null,&quot;gap_laptop&quot;:null,&quot;gap_tablet_extra&quot;:null,&quot;gap_tablet&quot;:null,&quot;gap_mobile_extra&quot;:null,&quot;gap_mobile&quot;:null,&quot;autoplay&quot;:null,&quot;autoplay_speed&quot;:null,&quot;autoplay_direction&quot;:null,&quot;allow_touch&quot;:null,&quot;loop&quot;:null,&quot;centered_slides&quot;:null,&quot;pause_on_interaction&quot;:null,&quot;overflow_type&quot;:null,&quot;overflow_opacity&quot;:null,&quot;title_subtitle_position&quot;:&quot;below&quot;,&quot;item_normal_background_background&quot;:&quot;&quot;,&quot;item_normal_background_color&quot;:null,&quot;item_normal_background_color_b&quot;:null,&quot;item_normal_background_image&quot;:null,&quot;item_normal_background_video_link&quot;:null,&quot;item_normal_background_video_start&quot;:null,&quot;item_normal_background_video_end&quot;:null,&quot;item_normal_background_play_once&quot;:null,&quot;item_normal_background_play_on_mobile&quot;:null,&quot;item_normal_background_privacy_mode&quot;:null,&quot;item_normal_background_slideshow_gallery&quot;:null,&quot;item_normal_background_slideshow_loop&quot;:null,&quot;item_normal_background_slideshow_slide_duration&quot;:null,&quot;item_normal_background_slideshow_slide_transition&quot;:null,&quot;item_normal_background_slideshow_transition_duration&quot;:null,&quot;item_normal_background_slideshow_lazyload&quot;:null,&quot;item_normal_background_slideshow_ken_burns&quot;:null,&quot;item_normal_background_slideshow_ken_burns_zoom_direction&quot;:null,&quot;item_hover_background_background&quot;:&quot;&quot;,&quot;item_hover_background_color&quot;:null,&quot;item_hover_background_color_b&quot;:null,&quot;item_hover_background_image&quot;:null,&quot;item_hover_background_video_link&quot;:null,&quot;item_hover_background_video_start&quot;:null,&quot;item_hover_background_video_end&quot;:null,&quot;item_hover_background_play_once&quot;:null,&quot;item_hover_background_play_on_mobile&quot;:null,&quot;item_hover_background_privacy_mode&quot;:null,&quot;item_hover_background_slideshow_gallery&quot;:null,&quot;item_hover_background_slideshow_loop&quot;:null,&quot;item_hover_background_slideshow_slide_duration&quot;:null,&quot;item_hover_background_slideshow_slide_transition&quot;:null,&quot;item_hover_background_slideshow_transition_duration&quot;:null,&quot;item_hover_background_slideshow_lazyload&quot;:null,&quot;item_hover_background_slideshow_ken_burns&quot;:null,&quot;item_hover_background_slideshow_ken_burns_zoom_direction&quot;:null,&quot;icon_default_normal_background_background&quot;:&quot;&quot;,&quot;icon_default_normal_background_color&quot;:null,&quot;icon_default_normal_background_color_b&quot;:null,&quot;icon_default_normal_background_image&quot;:null,&quot;icon_default_normal_background_video_link&quot;:null,&quot;icon_default_normal_background_video_start&quot;:null,&quot;icon_default_normal_background_video_end&quot;:null,&quot;icon_default_normal_background_play_once&quot;:null,&quot;icon_default_normal_background_play_on_mobile&quot;:null,&quot;icon_default_normal_background_privacy_mode&quot;:null,&quot;icon_default_normal_background_slideshow_gallery&quot;:null,&quot;icon_default_normal_background_slideshow_loop&quot;:null,&quot;icon_default_normal_background_slideshow_slide_duration&quot;:null,&quot;icon_default_normal_background_slideshow_slide_transition&quot;:null,&quot;icon_default_normal_background_slideshow_transition_duration&quot;:null,&quot;icon_default_normal_background_slideshow_lazyload&quot;:null,&quot;icon_default_normal_background_slideshow_ken_burns&quot;:null,&quot;icon_default_normal_background_slideshow_ken_burns_zoom_direction&quot;:null,&quot;icon_default_hover_background_background&quot;:&quot;&quot;,&quot;icon_default_hover_background_color&quot;:null,&quot;icon_default_hover_background_color_b&quot;:null,&quot;icon_default_hover_background_image&quot;:null,&quot;icon_default_hover_background_video_link&quot;:null,&quot;icon_default_hover_background_video_start&quot;:null,&quot;icon_default_hover_background_video_end&quot;:null,&quot;icon_default_hover_background_play_once&quot;:null,&quot;icon_default_hover_background_play_on_mobile&quot;:null,&quot;icon_default_hover_background_privacy_mode&quot;:null,&quot;icon_default_hover_background_slideshow_gallery&quot;:null,&quot;icon_default_hover_background_slideshow_loop&quot;:null,&quot;icon_default_hover_background_slideshow_slide_duration&quot;:null,&quot;icon_default_hover_background_slideshow_slide_transition&quot;:null,&quot;icon_default_hover_background_slideshow_transition_duration&quot;:null,&quot;icon_default_hover_background_slideshow_lazyload&quot;:null,&quot;icon_default_hover_background_slideshow_ken_burns&quot;:null,&quot;icon_default_hover_background_slideshow_ken_burns_zoom_direction&quot;:null,&quot;carousel_arrows_default_normal_background_background&quot;:&quot;&quot;,&quot;carousel_arrows_default_normal_background_color&quot;:null,&quot;carousel_arrows_default_normal_background_color_b&quot;:null,&quot;carousel_arrows_default_normal_background_image&quot;:null,&quot;carousel_arrows_default_normal_background_video_link&quot;:null,&quot;carousel_arrows_default_normal_background_video_start&quot;:null,&quot;carousel_arrows_default_normal_background_video_end&quot;:null,&quot;carousel_arrows_default_normal_background_play_once&quot;:null,&quot;carousel_arrows_default_normal_background_play_on_mobile&quot;:null,&quot;carousel_arrows_default_normal_background_privacy_mode&quot;:null,&quot;carousel_arrows_default_normal_background_slideshow_gallery&quot;:null,&quot;carousel_arrows_default_normal_background_slideshow_loop&quot;:null,&quot;carousel_arrows_default_normal_background_slideshow_slide_duration&quot;:null,&quot;carousel_arrows_default_normal_background_slideshow_slide_transition&quot;:null,&quot;carousel_arrows_default_normal_background_slideshow_transition_duration&quot;:null,&quot;carousel_arrows_default_normal_background_slideshow_lazyload&quot;:null,&quot;carousel_arrows_default_normal_background_slideshow_ken_burns&quot;:null,&quot;carousel_arrows_default_normal_background_slideshow_ken_burns_zoom_direction&quot;:null,&quot;carousel_arrows_default_hover_background_background&quot;:&quot;&quot;,&quot;carousel_arrows_default_hover_background_color&quot;:null,&quot;carousel_arrows_default_hover_background_color_b&quot;:null,&quot;carousel_arrows_default_hover_background_image&quot;:null,&quot;carousel_arrows_default_hover_background_video_link&quot;:null,&quot;carousel_arrows_default_hover_background_video_start&quot;:null,&quot;carousel_arrows_default_hover_background_video_end&quot;:null,&quot;carousel_arrows_default_hover_background_play_once&quot;:null,&quot;carousel_arrows_default_hover_background_play_on_mobile&quot;:null,&quot;carousel_arrows_default_hover_background_privacy_mode&quot;:null,&quot;carousel_arrows_default_hover_background_slideshow_gallery&quot;:null,&quot;carousel_arrows_default_hover_background_slideshow_loop&quot;:null,&quot;carousel_arrows_default_hover_background_slideshow_slide_duration&quot;:null,&quot;carousel_arrows_default_hover_background_slideshow_slide_transition&quot;:null,&quot;carousel_arrows_default_hover_background_slideshow_transition_duration&quot;:null,&quot;carousel_arrows_default_hover_background_slideshow_lazyload&quot;:null,&quot;carousel_arrows_default_hover_background_slideshow_ken_burns&quot;:null,&quot;carousel_arrows_default_hover_background_slideshow_ken_burns_zoom_direction&quot;:null,&quot;carousel_arrows_prev_arrow_vertical_align&quot;:&quot;flex-start&quot;,&quot;carousel_arrows_prev_arrow_vertical_top_indent&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_prev_arrow_vertical_top_indent_laptop&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_prev_arrow_vertical_top_indent_tablet_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_prev_arrow_vertical_top_indent_tablet&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_prev_arrow_vertical_top_indent_mobile_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_prev_arrow_vertical_top_indent_mobile&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_prev_arrow_vertical_bottom_indent&quot;:null,&quot;carousel_arrows_prev_arrow_vertical_bottom_indent_laptop&quot;:null,&quot;carousel_arrows_prev_arrow_vertical_bottom_indent_tablet_extra&quot;:null,&quot;carousel_arrows_prev_arrow_vertical_bottom_indent_tablet&quot;:null,&quot;carousel_arrows_prev_arrow_vertical_bottom_indent_mobile_extra&quot;:null,&quot;carousel_arrows_prev_arrow_vertical_bottom_indent_mobile&quot;:null,&quot;carousel_arrows_prev_arrow_horizontal_align&quot;:&quot;left&quot;,&quot;carousel_arrows_prev_arrow_horizontal_left_indent&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_prev_arrow_horizontal_left_indent_laptop&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_prev_arrow_horizontal_left_indent_tablet_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_prev_arrow_horizontal_left_indent_tablet&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_prev_arrow_horizontal_left_indent_mobile_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_prev_arrow_horizontal_left_indent_mobile&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_prev_arrow_horizontal_right_indent&quot;:null,&quot;carousel_arrows_prev_arrow_horizontal_right_indent_laptop&quot;:null,&quot;carousel_arrows_prev_arrow_horizontal_right_indent_tablet_extra&quot;:null,&quot;carousel_arrows_prev_arrow_horizontal_right_indent_tablet&quot;:null,&quot;carousel_arrows_prev_arrow_horizontal_right_indent_mobile_extra&quot;:null,&quot;carousel_arrows_prev_arrow_horizontal_right_indent_mobile&quot;:null,&quot;carousel_arrows_next_arrow_vertical_align&quot;:&quot;flex-start&quot;,&quot;carousel_arrows_next_arrow_vertical_top_indent&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_next_arrow_vertical_top_indent_laptop&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_next_arrow_vertical_top_indent_tablet_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_next_arrow_vertical_top_indent_tablet&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_next_arrow_vertical_top_indent_mobile_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_next_arrow_vertical_top_indent_mobile&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_next_arrow_vertical_bottom_indent&quot;:null,&quot;carousel_arrows_next_arrow_vertical_bottom_indent_laptop&quot;:null,&quot;carousel_arrows_next_arrow_vertical_bottom_indent_tablet_extra&quot;:null,&quot;carousel_arrows_next_arrow_vertical_bottom_indent_tablet&quot;:null,&quot;carousel_arrows_next_arrow_vertical_bottom_indent_mobile_extra&quot;:null,&quot;carousel_arrows_next_arrow_vertical_bottom_indent_mobile&quot;:null,&quot;carousel_arrows_next_arrow_horizontal_align&quot;:&quot;left&quot;,&quot;carousel_arrows_next_arrow_horizontal_left_indent&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_next_arrow_horizontal_left_indent_laptop&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_next_arrow_horizontal_left_indent_tablet_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_next_arrow_horizontal_left_indent_tablet&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_next_arrow_horizontal_left_indent_mobile_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_next_arrow_horizontal_left_indent_mobile&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_next_arrow_horizontal_right_indent&quot;:null,&quot;carousel_arrows_next_arrow_horizontal_right_indent_laptop&quot;:null,&quot;carousel_arrows_next_arrow_horizontal_right_indent_tablet_extra&quot;:null,&quot;carousel_arrows_next_arrow_horizontal_right_indent_tablet&quot;:null,&quot;carousel_arrows_next_arrow_horizontal_right_indent_mobile_extra&quot;:null,&quot;carousel_arrows_next_arrow_horizontal_right_indent_mobile&quot;:null,&quot;carousel_dots_default_normal_background_background&quot;:&quot;&quot;,&quot;carousel_dots_default_normal_background_color&quot;:null,&quot;carousel_dots_default_normal_background_color_b&quot;:null,&quot;carousel_dots_default_normal_background_image&quot;:null,&quot;carousel_dots_default_normal_background_video_link&quot;:null,&quot;carousel_dots_default_normal_background_video_start&quot;:null,&quot;carousel_dots_default_normal_background_video_end&quot;:null,&quot;carousel_dots_default_normal_background_play_once&quot;:null,&quot;carousel_dots_default_normal_background_play_on_mobile&quot;:null,&quot;carousel_dots_default_normal_background_privacy_mode&quot;:null,&quot;carousel_dots_default_normal_background_slideshow_gallery&quot;:null,&quot;carousel_dots_default_normal_background_slideshow_loop&quot;:null,&quot;carousel_dots_default_normal_background_slideshow_slide_duration&quot;:null,&quot;carousel_dots_default_normal_background_slideshow_slide_transition&quot;:null,&quot;carousel_dots_default_normal_background_slideshow_transition_duration&quot;:null,&quot;carousel_dots_default_normal_background_slideshow_lazyload&quot;:null,&quot;carousel_dots_default_normal_background_slideshow_ken_burns&quot;:null,&quot;carousel_dots_default_normal_background_slideshow_ken_burns_zoom_direction&quot;:null,&quot;carousel_dots_default_hover_background_background&quot;:&quot;&quot;,&quot;carousel_dots_default_hover_background_color&quot;:null,&quot;carousel_dots_default_hover_background_color_b&quot;:null,&quot;carousel_dots_default_hover_background_image&quot;:null,&quot;carousel_dots_default_hover_background_video_link&quot;:null,&quot;carousel_dots_default_hover_background_video_start&quot;:null,&quot;carousel_dots_default_hover_background_video_end&quot;:null,&quot;carousel_dots_default_hover_background_play_once&quot;:null,&quot;carousel_dots_default_hover_background_play_on_mobile&quot;:null,&quot;carousel_dots_default_hover_background_privacy_mode&quot;:null,&quot;carousel_dots_default_hover_background_slideshow_gallery&quot;:null,&quot;carousel_dots_default_hover_background_slideshow_loop&quot;:null,&quot;carousel_dots_default_hover_background_slideshow_slide_duration&quot;:null,&quot;carousel_dots_default_hover_background_slideshow_slide_transition&quot;:null,&quot;carousel_dots_default_hover_background_slideshow_transition_duration&quot;:null,&quot;carousel_dots_default_hover_background_slideshow_lazyload&quot;:null,&quot;carousel_dots_default_hover_background_slideshow_ken_burns&quot;:null,&quot;carousel_dots_default_hover_background_slideshow_ken_burns_zoom_direction&quot;:null,&quot;description_normal_background_background&quot;:&quot;&quot;,&quot;description_normal_background_color&quot;:null,&quot;description_normal_background_color_b&quot;:null,&quot;description_normal_background_image&quot;:null,&quot;description_normal_background_video_link&quot;:null,&quot;description_normal_background_video_start&quot;:null,&quot;description_normal_background_video_end&quot;:null,&quot;description_normal_background_play_once&quot;:null,&quot;description_normal_background_play_on_mobile&quot;:null,&quot;description_normal_background_privacy_mode&quot;:null,&quot;description_normal_background_slideshow_gallery&quot;:null,&quot;description_normal_background_slideshow_loop&quot;:null,&quot;description_normal_background_slideshow_slide_duration&quot;:null,&quot;description_normal_background_slideshow_slide_transition&quot;:null,&quot;description_normal_background_slideshow_transition_duration&quot;:null,&quot;description_normal_background_slideshow_lazyload&quot;:null,&quot;description_normal_background_slideshow_ken_burns&quot;:null,&quot;description_normal_background_slideshow_ken_burns_zoom_direction&quot;:null,&quot;description_hover_background_background&quot;:&quot;&quot;,&quot;description_hover_background_color&quot;:null,&quot;description_hover_background_color_b&quot;:null,&quot;description_hover_background_image&quot;:null,&quot;description_hover_background_video_link&quot;:null,&quot;description_hover_background_video_start&quot;:null,&quot;description_hover_background_video_end&quot;:null,&quot;description_hover_background_play_once&quot;:null,&quot;description_hover_background_play_on_mobile&quot;:null,&quot;description_hover_background_privacy_mode&quot;:null,&quot;description_hover_background_slideshow_gallery&quot;:null,&quot;description_hover_background_slideshow_loop&quot;:null,&quot;description_hover_background_slideshow_slide_duration&quot;:null,&quot;description_hover_background_slideshow_slide_transition&quot;:null,&quot;description_hover_background_slideshow_transition_duration&quot;:null,&quot;description_hover_background_slideshow_lazyload&quot;:null,&quot;description_hover_background_slideshow_ken_burns&quot;:null,&quot;description_hover_background_slideshow_ken_burns_zoom_direction&quot;:null,&quot;button_normal_background_background&quot;:&quot;&quot;,&quot;button_normal_background_color&quot;:null,&quot;button_normal_background_color_b&quot;:null,&quot;button_normal_background_image&quot;:null,&quot;button_normal_background_video_link&quot;:null,&quot;button_normal_background_video_start&quot;:null,&quot;button_normal_background_video_end&quot;:null,&quot;button_normal_background_play_once&quot;:null,&quot;button_normal_background_play_on_mobile&quot;:null,&quot;button_normal_background_privacy_mode&quot;:null,&quot;button_normal_background_slideshow_gallery&quot;:null,&quot;button_normal_background_slideshow_loop&quot;:null,&quot;button_normal_background_slideshow_slide_duration&quot;:null,&quot;button_normal_background_slideshow_slide_transition&quot;:null,&quot;button_normal_background_slideshow_transition_duration&quot;:null,&quot;button_normal_background_slideshow_lazyload&quot;:null,&quot;button_normal_background_slideshow_ken_burns&quot;:null,&quot;button_normal_background_slideshow_ken_burns_zoom_direction&quot;:null,&quot;button_hover_background_background&quot;:&quot;&quot;,&quot;button_hover_background_color&quot;:null,&quot;button_hover_background_color_b&quot;:null,&quot;button_hover_background_image&quot;:null,&quot;button_hover_background_video_link&quot;:null,&quot;button_hover_background_video_start&quot;:null,&quot;button_hover_background_video_end&quot;:null,&quot;button_hover_background_play_once&quot;:null,&quot;button_hover_background_play_on_mobile&quot;:null,&quot;button_hover_background_privacy_mode&quot;:null,&quot;button_hover_background_slideshow_gallery&quot;:null,&quot;button_hover_background_slideshow_loop&quot;:null,&quot;button_hover_background_slideshow_slide_duration&quot;:null,&quot;button_hover_background_slideshow_slide_transition&quot;:null,&quot;button_hover_background_slideshow_transition_duration&quot;:null,&quot;button_hover_background_slideshow_lazyload&quot;:null,&quot;button_hover_background_slideshow_ken_burns&quot;:null,&quot;button_hover_background_slideshow_ken_burns_zoom_direction&quot;:null,&quot;separator_normal_background_background&quot;:&quot;&quot;,&quot;separator_normal_background_color&quot;:null,&quot;separator_normal_background_color_b&quot;:null,&quot;separator_normal_background_image&quot;:null,&quot;separator_normal_background_video_link&quot;:null,&quot;separator_normal_background_video_start&quot;:null,&quot;separator_normal_background_video_end&quot;:null,&quot;separator_normal_background_play_once&quot;:null,&quot;separator_normal_background_play_on_mobile&quot;:null,&quot;separator_normal_background_privacy_mode&quot;:null,&quot;separator_normal_background_slideshow_gallery&quot;:null,&quot;separator_normal_background_slideshow_loop&quot;:null,&quot;separator_normal_background_slideshow_slide_duration&quot;:null,&quot;separator_normal_background_slideshow_slide_transition&quot;:null,&quot;separator_normal_background_slideshow_transition_duration&quot;:null,&quot;separator_normal_background_slideshow_lazyload&quot;:null,&quot;separator_normal_background_slideshow_ken_burns&quot;:null,&quot;separator_normal_background_slideshow_ken_burns_zoom_direction&quot;:null,&quot;separator_hover_background_background&quot;:&quot;&quot;,&quot;separator_hover_background_color&quot;:null,&quot;separator_hover_background_color_b&quot;:null,&quot;separator_hover_background_image&quot;:null,&quot;separator_hover_background_video_link&quot;:null,&quot;separator_hover_background_video_start&quot;:null,&quot;separator_hover_background_video_end&quot;:null,&quot;separator_hover_background_play_once&quot;:null,&quot;separator_hover_background_play_on_mobile&quot;:null,&quot;separator_hover_background_privacy_mode&quot;:null,&quot;separator_hover_background_slideshow_gallery&quot;:null,&quot;separator_hover_background_slideshow_loop&quot;:null,&quot;separator_hover_background_slideshow_slide_duration&quot;:null,&quot;separator_hover_background_slideshow_slide_transition&quot;:null,&quot;separator_hover_background_slideshow_transition_duration&quot;:null,&quot;separator_hover_background_slideshow_lazyload&quot;:null,&quot;separator_hover_background_slideshow_ken_burns&quot;:null,&quot;separator_hover_background_slideshow_ken_burns_zoom_direction&quot;:null,&quot;media_image_type&quot;:&quot;default&quot;,&quot;group1_elementsgroup_normal_background_background&quot;:&quot;&quot;,&quot;group1_elementsgroup_normal_background_color&quot;:null,&quot;group1_elementsgroup_normal_background_color_b&quot;:null,&quot;group1_elementsgroup_normal_background_image&quot;:null,&quot;group1_elementsgroup_normal_background_video_link&quot;:null,&quot;group1_elementsgroup_normal_background_video_start&quot;:null,&quot;group1_elementsgroup_normal_background_video_end&quot;:null,&quot;group1_elementsgroup_normal_background_play_once&quot;:null,&quot;group1_elementsgroup_normal_background_play_on_mobile&quot;:null,&quot;group1_elementsgroup_normal_background_privacy_mode&quot;:null,&quot;group1_elementsgroup_normal_background_slideshow_gallery&quot;:null,&quot;group1_elementsgroup_normal_background_slideshow_loop&quot;:null,&quot;group1_elementsgroup_normal_background_slideshow_slide_duration&quot;:null,&quot;group1_elementsgroup_normal_background_slideshow_slide_transition&quot;:null,&quot;group1_elementsgroup_normal_background_slideshow_transition_duration&quot;:null,&quot;group1_elementsgroup_normal_background_slideshow_lazyload&quot;:null,&quot;group1_elementsgroup_normal_background_slideshow_ken_burns&quot;:null,&quot;group1_elementsgroup_normal_background_slideshow_ken_burns_zoom_direction&quot;:null,&quot;group1_elementsgroup_hover_background_background&quot;:&quot;&quot;,&quot;group1_elementsgroup_hover_background_color&quot;:null,&quot;group1_elementsgroup_hover_background_color_b&quot;:null,&quot;group1_elementsgroup_hover_background_image&quot;:null,&quot;group1_elementsgroup_hover_background_video_link&quot;:null,&quot;group1_elementsgroup_hover_background_video_start&quot;:null,&quot;group1_elementsgroup_hover_background_video_end&quot;:null,&quot;group1_elementsgroup_hover_background_play_once&quot;:null,&quot;group1_elementsgroup_hover_background_play_on_mobile&quot;:null,&quot;group1_elementsgroup_hover_background_privacy_mode&quot;:null,&quot;group1_elementsgroup_hover_background_slideshow_gallery&quot;:null,&quot;group1_elementsgroup_hover_background_slideshow_loop&quot;:null,&quot;group1_elementsgroup_hover_background_slideshow_slide_duration&quot;:null,&quot;group1_elementsgroup_hover_background_slideshow_slide_transition&quot;:null,&quot;group1_elementsgroup_hover_background_slideshow_transition_duration&quot;:null,&quot;group1_elementsgroup_hover_background_slideshow_lazyload&quot;:null,&quot;group1_elementsgroup_hover_background_slideshow_ken_burns&quot;:null,&quot;group1_elementsgroup_hover_background_slideshow_ken_burns_zoom_direction&quot;:null,&quot;group2_elementsgroup_normal_background_background&quot;:&quot;&quot;,&quot;group2_elementsgroup_normal_background_color&quot;:null,&quot;group2_elementsgroup_normal_background_color_b&quot;:null,&quot;group2_elementsgroup_normal_background_image&quot;:null,&quot;group2_elementsgroup_normal_background_video_link&quot;:null,&quot;group2_elementsgroup_normal_background_video_start&quot;:null,&quot;group2_elementsgroup_normal_background_video_end&quot;:null,&quot;group2_elementsgroup_normal_background_play_once&quot;:null,&quot;group2_elementsgroup_normal_background_play_on_mobile&quot;:null,&quot;group2_elementsgroup_normal_background_privacy_mode&quot;:null,&quot;group2_elementsgroup_normal_background_slideshow_gallery&quot;:null,&quot;group2_elementsgroup_normal_background_slideshow_loop&quot;:null,&quot;group2_elementsgroup_normal_background_slideshow_slide_duration&quot;:null,&quot;group2_elementsgroup_normal_background_slideshow_slide_transition&quot;:null,&quot;group2_elementsgroup_normal_background_slideshow_transition_duration&quot;:null,&quot;group2_elementsgroup_normal_background_slideshow_lazyload&quot;:null,&quot;group2_elementsgroup_normal_background_slideshow_ken_burns&quot;:null,&quot;group2_elementsgroup_normal_background_slideshow_ken_burns_zoom_direction&quot;:null,&quot;group2_elementsgroup_hover_background_background&quot;:&quot;&quot;,&quot;group2_elementsgroup_hover_background_color&quot;:null,&quot;group2_elementsgroup_hover_background_color_b&quot;:null,&quot;group2_elementsgroup_hover_background_image&quot;:null,&quot;group2_elementsgroup_hover_background_video_link&quot;:null,&quot;group2_elementsgroup_hover_background_video_start&quot;:null,&quot;group2_elementsgroup_hover_background_video_end&quot;:null,&quot;group2_elementsgroup_hover_background_play_once&quot;:null,&quot;group2_elementsgroup_hover_background_play_on_mobile&quot;:null,&quot;group2_elementsgroup_hover_background_privacy_mode&quot;:null,&quot;group2_elementsgroup_hover_background_slideshow_gallery&quot;:null,&quot;group2_elementsgroup_hover_background_slideshow_loop&quot;:null,&quot;group2_elementsgroup_hover_background_slideshow_slide_duration&quot;:null,&quot;group2_elementsgroup_hover_background_slideshow_slide_transition&quot;:null,&quot;group2_elementsgroup_hover_background_slideshow_transition_duration&quot;:null,&quot;group2_elementsgroup_hover_background_slideshow_lazyload&quot;:null,&quot;group2_elementsgroup_hover_background_slideshow_ken_burns&quot;:null,&quot;group2_elementsgroup_hover_background_slideshow_ken_burns_zoom_direction&quot;:null,&quot;_title&quot;:&quot;&quot;,&quot;_element_width_laptop&quot;:&quot;&quot;,&quot;_element_width_tablet_extra&quot;:&quot;&quot;,&quot;_element_width_tablet&quot;:&quot;&quot;,&quot;_element_width_mobile_extra&quot;:&quot;&quot;,&quot;_element_width_mobile&quot;:&quot;&quot;,&quot;_position&quot;:&quot;&quot;,&quot;_element_id&quot;:&quot;&quot;,&quot;_element_cache&quot;:&quot;&quot;,&quot;wdt_animation_effect&quot;:&quot;none&quot;,&quot;wdt_mme_speed&quot;:null,&quot;wdt_mme_speed_laptop&quot;:null,&quot;wdt_mme_speed_tablet_extra&quot;:null,&quot;wdt_mme_speed_tablet&quot;:null,&quot;wdt_mme_speed_mobile_extra&quot;:null,&quot;wdt_mme_speed_mobile&quot;:null,&quot;wdt_mme_depth&quot;:null,&quot;wdt_mme_depth_laptop&quot;:null,&quot;wdt_mme_depth_tablet_extra&quot;:null,&quot;wdt_mme_depth_tablet&quot;:null,&quot;wdt_mme_depth_mobile_extra&quot;:null,&quot;wdt_mme_depth_mobile&quot;:null,&quot;wdt_mme_move_along&quot;:null,&quot;wdt_mme_invert_movement&quot;:null,&quot;wdt_sle_parallax_x_direction&quot;:null,&quot;wdt_sle_parallax_x_depth&quot;:null,&quot;wdt_sle_parallax_x_depth_laptop&quot;:null,&quot;wdt_sle_parallax_x_depth_tablet_extra&quot;:null,&quot;wdt_sle_parallax_x_depth_tablet&quot;:null,&quot;wdt_sle_parallax_x_depth_mobile_extra&quot;:null,&quot;wdt_sle_parallax_x_depth_mobile&quot;:null,&quot;wdt_sle_parallax_y_direction&quot;:null,&quot;wdt_sle_parallax_y_depth&quot;:null,&quot;wdt_sle_parallax_y_depth_laptop&quot;:null,&quot;wdt_sle_parallax_y_depth_tablet_extra&quot;:null,&quot;wdt_sle_parallax_y_depth_tablet&quot;:null,&quot;wdt_sle_parallax_y_depth_mobile_extra&quot;:null,&quot;wdt_sle_parallax_y_depth_mobile&quot;:null,&quot;wdt_sle_rotate_x&quot;:null,&quot;wdt_sle_rotate_x_angle&quot;:null,&quot;wdt_sle_rotate_x_angle_laptop&quot;:null,&quot;wdt_sle_rotate_x_angle_tablet_extra&quot;:null,&quot;wdt_sle_rotate_x_angle_tablet&quot;:null,&quot;wdt_sle_rotate_x_angle_mobile_extra&quot;:null,&quot;wdt_sle_rotate_x_angle_mobile&quot;:null,&quot;wdt_sle_rotate_y&quot;:null,&quot;wdt_sle_rotate_y_angle&quot;:null,&quot;wdt_sle_rotate_y_angle_laptop&quot;:null,&quot;wdt_sle_rotate_y_angle_tablet_extra&quot;:null,&quot;wdt_sle_rotate_y_angle_tablet&quot;:null,&quot;wdt_sle_rotate_y_angle_mobile_extra&quot;:null,&quot;wdt_sle_rotate_y_angle_mobile&quot;:null,&quot;wdt_sle_rotate_z&quot;:null,&quot;wdt_sle_rotate_z_angle&quot;:null,&quot;wdt_sle_rotate_z_angle_laptop&quot;:null,&quot;wdt_sle_rotate_z_angle_tablet_extra&quot;:null,&quot;wdt_sle_rotate_z_angle_tablet&quot;:null,&quot;wdt_sle_rotate_z_angle_mobile_extra&quot;:null,&quot;wdt_sle_rotate_z_angle_mobile&quot;:null,&quot;wdt_sle_scale&quot;:null,&quot;wdt_sle_scale_value&quot;:null,&quot;wdt_sle_scale_value_laptop&quot;:null,&quot;wdt_sle_scale_value_tablet_extra&quot;:null,&quot;wdt_sle_scale_value_tablet&quot;:null,&quot;wdt_sle_scale_value_mobile_extra&quot;:null,&quot;wdt_sle_scale_value_mobile&quot;:null,&quot;wdt_sle_blur&quot;:null,&quot;wdt_sle_blur_value&quot;:null,&quot;wdt_sle_blur_value_laptop&quot;:null,&quot;wdt_sle_blur_value_tablet_extra&quot;:null,&quot;wdt_sle_blur_value_tablet&quot;:null,&quot;wdt_sle_blur_value_mobile_extra&quot;:null,&quot;wdt_sle_blur_value_mobile&quot;:null,&quot;wdt_sle_opacity&quot;:null,&quot;wdt_sle_opacity_value&quot;:null,&quot;wdt_sle_opacity_value_laptop&quot;:null,&quot;wdt_sle_opacity_value_tablet_extra&quot;:null,&quot;wdt_sle_opacity_value_tablet&quot;:null,&quot;wdt_sle_opacity_value_mobile_extra&quot;:null,&quot;wdt_sle_opacity_value_mobile&quot;:null,&quot;wdt_ame_duration&quot;:null,&quot;wdt_ame_iteration&quot;:null,&quot;wdt_ame_direction&quot;:null,&quot;wdt_bound_to&quot;:null,&quot;wdt_mqe_width&quot;:null,&quot;wdt_mqe_height&quot;:null,&quot;wdt_mqe_speed&quot;:null,&quot;wdt_mqe_direction&quot;:null,&quot;wdt_mqe_bound_to&quot;:null,&quot;wdt_enable_inview_status&quot;:&quot;&quot;,&quot;wdt_enable_inview_loop&quot;:&quot;&quot;,&quot;_animation&quot;:&quot;&quot;,&quot;_animation_laptop&quot;:&quot;&quot;,&quot;_animation_tablet_extra&quot;:&quot;&quot;,&quot;_animation_tablet&quot;:&quot;&quot;,&quot;_animation_mobile_extra&quot;:&quot;&quot;,&quot;_animation_mobile&quot;:&quot;&quot;,&quot;animation_duration&quot;:null,&quot;_animation_delay&quot;:null,&quot;_transform_rotate_popover&quot;:&quot;&quot;,&quot;_transform_rotateZ_effect&quot;:null,&quot;_transform_rotateZ_effect_laptop&quot;:null,&quot;_transform_rotateZ_effect_tablet_extra&quot;:null,&quot;_transform_rotateZ_effect_tablet&quot;:null,&quot;_transform_rotateZ_effect_mobile_extra&quot;:null,&quot;_transform_rotateZ_effect_mobile&quot;:null,&quot;_transform_rotate_3d&quot;:null,&quot;_transform_rotateX_effect&quot;:null,&quot;_transform_rotateX_effect_laptop&quot;:null,&quot;_transform_rotateX_effect_tablet_extra&quot;:null,&quot;_transform_rotateX_effect_tablet&quot;:null,&quot;_transform_rotateX_effect_mobile_extra&quot;:null,&quot;_transform_rotateX_effect_mobile&quot;:null,&quot;_transform_rotateY_effect&quot;:null,&quot;_transform_rotateY_effect_laptop&quot;:null,&quot;_transform_rotateY_effect_tablet_extra&quot;:null,&quot;_transform_rotateY_effect_tablet&quot;:null,&quot;_transform_rotateY_effect_mobile_extra&quot;:null,&quot;_transform_rotateY_effect_mobile&quot;:null,&quot;_transform_perspective_effect&quot;:null,&quot;_transform_perspective_effect_laptop&quot;:null,&quot;_transform_perspective_effect_tablet_extra&quot;:null,&quot;_transform_perspective_effect_tablet&quot;:null,&quot;_transform_perspective_effect_mobile_extra&quot;:null,&quot;_transform_perspective_effect_mobile&quot;:null,&quot;_transform_translate_popover&quot;:&quot;&quot;,&quot;_transform_translateX_effect&quot;:null,&quot;_transform_translateX_effect_laptop&quot;:null,&quot;_transform_translateX_effect_tablet_extra&quot;:null,&quot;_transform_translateX_effect_tablet&quot;:null,&quot;_transform_translateX_effect_mobile_extra&quot;:null,&quot;_transform_translateX_effect_mobile&quot;:null,&quot;_transform_translateY_effect&quot;:null,&quot;_transform_translateY_effect_laptop&quot;:null,&quot;_transform_translateY_effect_tablet_extra&quot;:null,&quot;_transform_translateY_effect_tablet&quot;:null,&quot;_transform_translateY_effect_mobile_extra&quot;:null,&quot;_transform_translateY_effect_mobile&quot;:null,&quot;_transform_scale_popover&quot;:&quot;&quot;,&quot;_transform_keep_proportions&quot;:&quot;yes&quot;,&quot;_transform_scale_effect&quot;:null,&quot;_transform_scale_effect_laptop&quot;:null,&quot;_transform_scale_effect_tablet_extra&quot;:null,&quot;_transform_scale_effect_tablet&quot;:null,&quot;_transform_scale_effect_mobile_extra&quot;:null,&quot;_transform_scale_effect_mobile&quot;:null,&quot;_transform_scaleX_effect&quot;:null,&quot;_transform_scaleX_effect_laptop&quot;:null,&quot;_transform_scaleX_effect_tablet_extra&quot;:null,&quot;_transform_scaleX_effect_tablet&quot;:null,&quot;_transform_scaleX_effect_mobile_extra&quot;:null,&quot;_transform_scaleX_effect_mobile&quot;:null,&quot;_transform_scaleY_effect&quot;:null,&quot;_transform_scaleY_effect_laptop&quot;:null,&quot;_transform_scaleY_effect_tablet_extra&quot;:null,&quot;_transform_scaleY_effect_tablet&quot;:null,&quot;_transform_scaleY_effect_mobile_extra&quot;:null,&quot;_transform_scaleY_effect_mobile&quot;:null,&quot;_transform_skew_popover&quot;:&quot;&quot;,&quot;_transform_skewX_effect&quot;:null,&quot;_transform_skewX_effect_laptop&quot;:null,&quot;_transform_skewX_effect_tablet_extra&quot;:null,&quot;_transform_skewX_effect_tablet&quot;:null,&quot;_transform_skewX_effect_mobile_extra&quot;:null,&quot;_transform_skewX_effect_mobile&quot;:null,&quot;_transform_skewY_effect&quot;:null,&quot;_transform_skewY_effect_laptop&quot;:null,&quot;_transform_skewY_effect_tablet_extra&quot;:null,&quot;_transform_skewY_effect_tablet&quot;:null,&quot;_transform_skewY_effect_mobile_extra&quot;:null,&quot;_transform_skewY_effect_mobile&quot;:null,&quot;_transform_flipX_effect&quot;:&quot;&quot;,&quot;_transform_flipY_effect&quot;:&quot;&quot;,&quot;_transform_rotate_popover_hover&quot;:&quot;&quot;,&quot;_transform_rotateZ_effect_hover&quot;:null,&quot;_transform_rotateZ_effect_hover_laptop&quot;:null,&quot;_transform_rotateZ_effect_hover_tablet_extra&quot;:null,&quot;_transform_rotateZ_effect_hover_tablet&quot;:null,&quot;_transform_rotateZ_effect_hover_mobile_extra&quot;:null,&quot;_transform_rotateZ_effect_hover_mobile&quot;:null,&quot;_transform_rotate_3d_hover&quot;:null,&quot;_transform_rotateX_effect_hover&quot;:null,&quot;_transform_rotateX_effect_hover_laptop&quot;:null,&quot;_transform_rotateX_effect_hover_tablet_extra&quot;:null,&quot;_transform_rotateX_effect_hover_tablet&quot;:null,&quot;_transform_rotateX_effect_hover_mobile_extra&quot;:null,&quot;_transform_rotateX_effect_hover_mobile&quot;:null,&quot;_transform_rotateY_effect_hover&quot;:null,&quot;_transform_rotateY_effect_hover_laptop&quot;:null,&quot;_transform_rotateY_effect_hover_tablet_extra&quot;:null,&quot;_transform_rotateY_effect_hover_tablet&quot;:null,&quot;_transform_rotateY_effect_hover_mobile_extra&quot;:null,&quot;_transform_rotateY_effect_hover_mobile&quot;:null,&quot;_transform_perspective_effect_hover&quot;:null,&quot;_transform_perspective_effect_hover_laptop&quot;:null,&quot;_transform_perspective_effect_hover_tablet_extra&quot;:null,&quot;_transform_perspective_effect_hover_tablet&quot;:null,&quot;_transform_perspective_effect_hover_mobile_extra&quot;:null,&quot;_transform_perspective_effect_hover_mobile&quot;:null,&quot;_transform_translate_popover_hover&quot;:&quot;&quot;,&quot;_transform_translateX_effect_hover&quot;:null,&quot;_transform_translateX_effect_hover_laptop&quot;:null,&quot;_transform_translateX_effect_hover_tablet_extra&quot;:null,&quot;_transform_translateX_effect_hover_tablet&quot;:null,&quot;_transform_translateX_effect_hover_mobile_extra&quot;:null,&quot;_transform_translateX_effect_hover_mobile&quot;:null,&quot;_transform_translateY_effect_hover&quot;:null,&quot;_transform_translateY_effect_hover_laptop&quot;:null,&quot;_transform_translateY_effect_hover_tablet_extra&quot;:null,&quot;_transform_translateY_effect_hover_tablet&quot;:null,&quot;_transform_translateY_effect_hover_mobile_extra&quot;:null,&quot;_transform_translateY_effect_hover_mobile&quot;:null,&quot;_transform_scale_popover_hover&quot;:&quot;&quot;,&quot;_transform_keep_proportions_hover&quot;:&quot;yes&quot;,&quot;_transform_scale_effect_hover&quot;:null,&quot;_transform_scale_effect_hover_laptop&quot;:null,&quot;_transform_scale_effect_hover_tablet_extra&quot;:null,&quot;_transform_scale_effect_hover_tablet&quot;:null,&quot;_transform_scale_effect_hover_mobile_extra&quot;:null,&quot;_transform_scale_effect_hover_mobile&quot;:null,&quot;_transform_scaleX_effect_hover&quot;:null,&quot;_transform_scaleX_effect_hover_laptop&quot;:null,&quot;_transform_scaleX_effect_hover_tablet_extra&quot;:null,&quot;_transform_scaleX_effect_hover_tablet&quot;:null,&quot;_transform_scaleX_effect_hover_mobile_extra&quot;:null,&quot;_transform_scaleX_effect_hover_mobile&quot;:null,&quot;_transform_scaleY_effect_hover&quot;:null,&quot;_transform_scaleY_effect_hover_laptop&quot;:null,&quot;_transform_scaleY_effect_hover_tablet_extra&quot;:null,&quot;_transform_scaleY_effect_hover_tablet&quot;:null,&quot;_transform_scaleY_effect_hover_mobile_extra&quot;:null,&quot;_transform_scaleY_effect_hover_mobile&quot;:null,&quot;_transform_skew_popover_hover&quot;:&quot;&quot;,&quot;_transform_skewX_effect_hover&quot;:null,&quot;_transform_skewX_effect_hover_laptop&quot;:null,&quot;_transform_skewX_effect_hover_tablet_extra&quot;:null,&quot;_transform_skewX_effect_hover_tablet&quot;:null,&quot;_transform_skewX_effect_hover_mobile_extra&quot;:null,&quot;_transform_skewX_effect_hover_mobile&quot;:null,&quot;_transform_skewY_effect_hover&quot;:null,&quot;_transform_skewY_effect_hover_laptop&quot;:null,&quot;_transform_skewY_effect_hover_tablet_extra&quot;:null,&quot;_transform_skewY_effect_hover_tablet&quot;:null,&quot;_transform_skewY_effect_hover_mobile_extra&quot;:null,&quot;_transform_skewY_effect_hover_mobile&quot;:null,&quot;_transform_flipX_effect_hover&quot;:&quot;&quot;,&quot;_transform_flipY_effect_hover&quot;:&quot;&quot;,&quot;_background_color&quot;:null,&quot;_background_color_b&quot;:null,&quot;_background_image&quot;:null,&quot;_background_video_link&quot;:null,&quot;_background_video_start&quot;:null,&quot;_background_video_end&quot;:null,&quot;_background_play_once&quot;:null,&quot;_background_play_on_mobile&quot;:null,&quot;_background_privacy_mode&quot;:null,&quot;_background_slideshow_gallery&quot;:null,&quot;_background_slideshow_loop&quot;:null,&quot;_background_slideshow_slide_duration&quot;:null,&quot;_background_slideshow_slide_transition&quot;:null,&quot;_background_slideshow_transition_duration&quot;:null,&quot;_background_slideshow_lazyload&quot;:null,&quot;_background_slideshow_ken_burns&quot;:null,&quot;_background_slideshow_ken_burns_zoom_direction&quot;:null,&quot;_background_hover_color&quot;:null,&quot;_background_hover_color_b&quot;:null,&quot;_background_hover_image&quot;:null,&quot;_background_hover_video_link&quot;:null,&quot;_background_hover_video_start&quot;:null,&quot;_background_hover_video_end&quot;:null,&quot;_background_hover_play_once&quot;:null,&quot;_background_hover_play_on_mobile&quot;:null,&quot;_background_hover_privacy_mode&quot;:null,&quot;_background_hover_slideshow_gallery&quot;:null,&quot;_background_hover_slideshow_loop&quot;:null,&quot;_background_hover_slideshow_slide_duration&quot;:null,&quot;_background_hover_slideshow_slide_transition&quot;:null,&quot;_background_hover_slideshow_transition_duration&quot;:null,&quot;_background_hover_slideshow_lazyload&quot;:null,&quot;_background_hover_slideshow_ken_burns&quot;:null,&quot;_background_hover_slideshow_ken_burns_zoom_direction&quot;:null,&quot;_mask_switch&quot;:&quot;&quot;,&quot;_mask_notice&quot;:null,&quot;hide_desktop&quot;:&quot;&quot;,&quot;hide_laptop&quot;:&quot;&quot;,&quot;hide_tablet_extra&quot;:&quot;&quot;,&quot;hide_tablet&quot;:&quot;&quot;,&quot;hide_mobile_extra&quot;:&quot;&quot;,&quot;hide_mobile&quot;:&quot;&quot;,&quot;module_id&quot;:&quot;314ef6e&quot;,&quot;module_class&quot;:&quot;testimonial&quot;,&quot;classes&quot;:[&quot;wdt-rc-template-custom-template&quot;]}">
                                                            <div class="wdt-content-item">
                                                                <div class="wdt-content-media-group">
                                                                    <div class="wdt-content-image-wrapper ">
                                                                        <div class="wdt-content-image"><span></span></div>
                                                                    </div>
                                                                </div>
                                                                <div class="wdt-content-detail-group">
                                                                    <div class="wdt-rating-container">
                                                                        <ul class="wdt-rating">
                                                                            <li><span class="fas fa-star"
                                                                                    data-value="1"></span></li>
                                                                            <li><span class="fas fa-star"
                                                                                    data-value="2"></span></li>
                                                                            <li><span class="fas fa-star"
                                                                                    data-value="3"></span></li>
                                                                            <li><span class="fas fa-star"
                                                                                    data-value="4"></span></li>
                                                                            <li><span class="fas fa-star"
                                                                                    data-value="5"></span></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="wdt-content-title">
                                                                        <h5>+10,000 عميل سعيد بخدماتنا</h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-498b415 elementor-widget__width-initial elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                                    data-id="498b415" data-element_type="widget"
                                                    data-settings="{&quot;wdt_animation_effect&quot;:&quot;none&quot;}"
                                                    data-widget_type="divider.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-divider">
                                                            <span class="elementor-divider-separator">
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-405a9b1 elementor-hidden-tablet elementor-hidden-mobile_extra elementor-hidden-mobile"
                            data-id="405a9b1" data-element_type="column">
                            <div class="elementor-widget-wrap">
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-40938b7 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                    data-id="40938b7" data-element_type="section"
                    data-settings="{&quot;wdt_bg_image&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;wdt_bg_image_laptop&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;wdt_bg_image_tablet_extra&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;wdt_bg_image_tablet&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;wdt_bg_image_mobile_extra&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;wdt_bg_image_mobile&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;wdt_bg_position&quot;:&quot;center center&quot;,&quot;wdt_animation_effect&quot;:&quot;none&quot;}">
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0d09a29"
                            data-id="0d09a29" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-d1505ba e-transform e-transform elementor-widget elementor-widget-spacer"
                                    data-id="d1505ba" data-element_type="widget"
                                    data-settings="{&quot;_transform_flipY_effect&quot;:&quot;transform&quot;,&quot;_transform_flipX_effect&quot;:&quot;transform&quot;,&quot;wdt_animation_effect&quot;:&quot;none&quot;}"
                                    data-widget_type="spacer.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-spacer">
                                            <div class="elementor-spacer-inner"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- قسم الفندق -->
<section class="hotel-about">
    <div class="hotel-container">
        <div class="hotel-images">
            <img src="../img/bedroom-2593500_1280.jpg" alt="غرفة فندقية فاخرة" class="hotel-img main">
            <img src="../img/bedroom-7349893_1280.jpg" alt="جناح مميز في الفندق" class="hotel-img overlay">
        </div>

        <div class="hotel-text">
            <h2>تجربة إقامة استثنائية في فندقنا</h2>
            <p>
                نقدم لك أجواء راقية تجمع بين الراحة والفخامة.
                غرفنا مصممة بأناقة لتمنحك تجربة مميزة مع خدمة تفوق التوقعات.
                سواء كنت في رحلة عمل أو عطلة، نحن نضمن لك إقامة لا تُنسى.
            </p>

            <ul>
                <li>🌿 غرف بإطلالة ساحرة على المدينة</li>
                <li>🍽 مطعم يقدم أشهى الأطباق العالمية</li>
                <li>🏊 مسبح فاخر وصالة لياقة حديثة</li>
                <li>💼 خدمات فندقية على مدار الساعة</li>
            </ul>

            <a href="{{ route('book.now') }}" class="btn">احجز الآن</a>
        </div>
    </div>
</section>

<!-- ===== CSS ===== -->



                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-a5c0556 wdt-cus-half-overlay-bg-style wdt-black-bg elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                    data-id="a5c0556" data-element_type="section"
                    data-settings="{&quot;background_background&quot;:&quot;gradient&quot;,&quot;wdt_bg_image&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;wdt_bg_image_laptop&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;wdt_bg_image_tablet_extra&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;wdt_bg_image_tablet&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;wdt_bg_image_mobile_extra&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;wdt_bg_image_mobile&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;wdt_bg_position&quot;:&quot;center center&quot;,&quot;wdt_animation_effect&quot;:&quot;none&quot;}">
                    <div class="elementor-background-overlay"></div>
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2e1ba8b"
                            data-id="2e1ba8b" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-906ff77 elementor-widget elementor-widget-spacer"
                                    data-id="906ff77" data-element_type="widget"
                                    data-settings="{&quot;wdt_animation_effect&quot;:&quot;none&quot;}"
                                    data-widget_type="spacer.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-spacer">
                                            <div class="elementor-spacer-inner"></div>
                                        </div>
                                    </div>
                                </div>
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-6b1a61c elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="6b1a61c" data-element_type="section"
                                    data-settings="{&quot;wdt_bg_image&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;wdt_bg_image_laptop&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;wdt_bg_image_tablet_extra&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;wdt_bg_image_tablet&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;wdt_bg_image_mobile_extra&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;wdt_bg_image_mobile&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;wdt_bg_position&quot;:&quot;center center&quot;,&quot;wdt_animation_effect&quot;:&quot;none&quot;}">
                                    <div class="elementor-container elementor-column-gap-no">
                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-43a5360 animated-fast elementor-invisible"
                                            data-id="43a5360" data-element_type="column"
                                            data-settings="{&quot;animation&quot;:&quot;fadeInLeft&quot;,&quot;animation_delay&quot;:&quot;100&quot;}">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-f7f3c1b before-title wdt-dark-bg elementor-widget elementor-widget-wdt-heading"
                                                    data-id="f7f3c1b" data-element_type="widget"
                                                    data-settings="{&quot;wdt_animation_effect&quot;:&quot;none&quot;}"
                                                    data-widget_type="wdt-heading.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="wdt-heading-holder " id="wdt-heading-f7f3c1b">
                                                            <div
                                                                class="wdt-heading-subtitle-wrapper wdt-heading-align- wdt-heading-deco-wrapper">
                                                                <span class="wdt-heading-subtitle"><span
                                                                        class="wdt-heading-deco-inner wdt-left-part"><span
                                                                            class="wdt-heading-deco-icon"><span
                                                                                class="wdt-content-icon-wrapper"><span
                                                                                    class="wdt-content-icon"><span><i><svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                x="0px" y="0px"
                                                                                                viewBox="0 0 100 100"
                                                                                                style="enable-background:new 0 0 100 100;"
                                                                                                xml:space="preserve">
                                                                                                <g>
                                                                                                    <g>
                                                                                                        <path
                                                                                                            d="M37.8,65.1c2.1,4.3,3.7,8.9,4.8,13.5c-0.4,2.1-0.8,4.2-1.1,6.3c-0.2,1.5-0.4,3-0.6,4.5c-0.3,2.4,1.5,4.5,4,4.7l2.5,0.2   c0-1.5,0-2.9,0-4.3c1.4-2.8,3.2-5.5,5.2-8c1.1-1.3,2.3-2.6,3.6-3.8c2.2-1.9,4.6-3.5,7.1-4.9c3.3-1.7,6.8-3.1,10.4-3.7   c-3.5,1-6.7,2.8-9.7,4.8c-2.9,2.1-5.5,4.6-7.7,7.3c-0.2,0.3-0.4,0.6-0.6,0.9c8.5,2.8,21.8-3.1,22.3-15.3   c-11.8-5.9-24.3,0.2-25.8,11.4c-0.5,0.4-1,0.9-1.5,1.3c-1,0.9-1.9,1.9-2.8,2.9c0.7-7.9,2.3-15.8,4.7-23.5   c2.4-7.4,5.7-14.6,9.8-21.3c1-1.4,2-2.9,3-4.2c2.8-3.6,5.8-7.1,9-10.3c3.3-3.2,6.7-6.1,10.5-8.6c-3.5,2.6-20,18.9-27.4,44.7   c22.1,0.3,48.3-26.4,37.5-55C62.5,2.9,40.5,29.6,49.4,56.6c-0.2,0.5-0.5,1-0.7,1.6c-1.7,4.1-3.1,8.3-4.3,12.6   c-1.2-2.6-2.5-5.1-3.9-7.5c-1-1.7-2.1-3.4-3.3-5c-1.9-2.9-4-5.6-6.3-8.2c-2-2.2-4.2-4.3-6.6-6.2c-2.4-1.9-4.8-3.7-7.6-5.1   c2.5,1,15.1,6.7,23.7,18.7c-0.3-17.1-17-30.1-37.3-25.9C-1.8,53.8,22.4,70.5,37.8,65.1L37.8,65.1z">
                                                                                                        </path>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </svg></i></span></span></span></span></span><span
                                                                        class="wdt-heading-deco-inner wdt-right-part"></span></span>
                                                            </div>
                                                            <h2 class="wdt-heading-title-wrapper wdt-heading-align- "><span
                                                                    class="wdt-heading-title">الغرف الاكثر طلبا</span></h2>
                                                                    <p>تحقق من أفضل غرفنا الآن</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-3d90231 animated-fast elementor-invisible"
                                            data-id="3d90231" data-element_type="column"
                                            data-settings="{&quot;animation&quot;:&quot;fadeInRight&quot;,&quot;animation_delay&quot;:&quot;100&quot;}">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-d698f72 elementor-widget__width-auto animated-fast elementor-invisible elementor-widget elementor-widget-wdt-button"
                                                    data-id="d698f72" data-element_type="widget"
                                                    data-settings="{&quot;item_normal_background_background&quot;:&quot;classic&quot;,&quot;item_hover_background_background&quot;:&quot;classic&quot;,&quot;_animation&quot;:&quot;fadeInLeft&quot;,&quot;_animation_delay&quot;:&quot;100&quot;,&quot;item_hover_background_color&quot;:&quot;#D9EF82&quot;,&quot;wdt_animation_effect&quot;:&quot;none&quot;}"
                                                    data-widget_type="wdt-button.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="wdt-button-holder wdt-template-filled wdt-button-link wdt-button-style-default wdt-button-size-nm wdt-animation- wdt-button-icon-after"
                                                            id="wdt-button-d698f72"><a class="wdt-button"
                                                                href="{{ route('rooms.show') }}">
                                                                <div class="wdt-button-text"><span>عرض المزيد</span>
                                                                </div>
                                                            </a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-e2ebb3b animated-fast elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible"
                                    data-id="e2ebb3b" data-element_type="section"
                                    data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:&quot;100&quot;,&quot;wdt_bg_image&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;wdt_bg_image_laptop&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;wdt_bg_image_tablet_extra&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;wdt_bg_image_tablet&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;wdt_bg_image_mobile_extra&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;wdt_bg_image_mobile&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;wdt_bg_position&quot;:&quot;center center&quot;,&quot;wdt_animation_effect&quot;:&quot;none&quot;}">
                                    <div class="elementor-container elementor-column-gap-no">
                                        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-861b2ec"
                                            data-id="861b2ec" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-fb4e61f elementor-widget-mobile_extra__width-initial elementor-widget-mobile__width-inherit wdt-cus-service-style-01 elementor-widget elementor-widget-wdt-image-box"
                                                    data-id="fb4e61f" data-element_type="widget"
                                                    data-settings="{&quot;slides_to_show_opts_tablet_extra&quot;:&quot;3&quot;,&quot;gap&quot;:{&quot;unit&quot;:&quot;dpt&quot;,&quot;size&quot;:30,&quot;sizes&quot;:[]},&quot;button_normal_background_background&quot;:&quot;classic&quot;,&quot;button_hover_background_background&quot;:&quot;classic&quot;,&quot;gap_laptop&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:20,&quot;sizes&quot;:[]},&quot;gap_tablet_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:20,&quot;sizes&quot;:[]},&quot;gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:20,&quot;sizes&quot;:[]},&quot;gap_mobile_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:20,&quot;sizes&quot;:[]},&quot;gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:20,&quot;sizes&quot;:[]},&quot;direction&quot;:&quot;horizontal&quot;,&quot;effect&quot;:&quot;default&quot;,&quot;slides_to_show_opts&quot;:4,&quot;slides_to_show_opts_laptop&quot;:4,&quot;slides_to_show_opts_tablet&quot;:2,&quot;slides_to_show_opts_mobile_extra&quot;:1,&quot;slides_to_show_opts_mobile&quot;:1,&quot;slides_to_scroll_opts&quot;:&quot;single&quot;,&quot;mouse_wheel_scroll&quot;:&quot;false&quot;,&quot;speed&quot;:300,&quot;allow_touch&quot;:&quot;yes&quot;,&quot;centered_slides&quot;:&quot;no&quot;,&quot;carousel_arrows_prev_arrow_vertical_top_indent&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_prev_arrow_vertical_top_indent_laptop&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_prev_arrow_vertical_top_indent_tablet_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_prev_arrow_vertical_top_indent_tablet&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_prev_arrow_vertical_top_indent_mobile_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_prev_arrow_vertical_top_indent_mobile&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_prev_arrow_horizontal_left_indent&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_prev_arrow_horizontal_left_indent_laptop&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_prev_arrow_horizontal_left_indent_tablet_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_prev_arrow_horizontal_left_indent_tablet&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_prev_arrow_horizontal_left_indent_mobile_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_prev_arrow_horizontal_left_indent_mobile&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_next_arrow_vertical_top_indent&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_next_arrow_vertical_top_indent_laptop&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_next_arrow_vertical_top_indent_tablet_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_next_arrow_vertical_top_indent_tablet&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_next_arrow_vertical_top_indent_mobile_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_next_arrow_vertical_top_indent_mobile&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_next_arrow_horizontal_left_indent&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_next_arrow_horizontal_left_indent_laptop&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_next_arrow_horizontal_left_indent_tablet_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_next_arrow_horizontal_left_indent_tablet&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_next_arrow_horizontal_left_indent_mobile_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;carousel_arrows_next_arrow_horizontal_left_indent_mobile&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;wdt_animation_effect&quot;:&quot;none&quot;}"
                                                    data-widget_type="wdt-image-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="wdt-image-box-holder  wdt-content-item-holder wdt-carousel-holder wdt-rc-template-custom-template"
                                                            id="wdt-image-box-fb4e61f" data-id="fb4e61f"
                                                            data-settings="{&quot;enable_popup&quot;:&quot;&quot;,&quot;enable_hover_class&quot;:&quot;&quot;}">
                                                            <div class="wdt-image-box-container swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-rtl swiper-watch-progress"
                                                                data-settings="{&quot;direction&quot;:&quot;horizontal&quot;,&quot;effect&quot;:&quot;default&quot;,&quot;slides_to_show&quot;:4,&quot;slides_to_scroll&quot;:1,&quot;arrows&quot;:&quot;&quot;,&quot;pagination&quot;:&quot;&quot;,&quot;mouse_wheel_scroll&quot;:&quot;false&quot;,&quot;speed&quot;:300,&quot;autoplay&quot;:&quot;&quot;,&quot;autoplay_speed&quot;:null,&quot;autoplay_direction&quot;:null,&quot;allow_touch&quot;:&quot;yes&quot;,&quot;loop&quot;:&quot;&quot;,&quot;centered_slides&quot;:&quot;no&quot;,&quot;pause_on_interaction&quot;:null,&quot;overflow_type&quot;:&quot;&quot;,&quot;overflow_opacity&quot;:&quot;&quot;,&quot;unequal_height_compatability&quot;:null,&quot;gap&quot;:30,&quot;responsive&quot;:[{&quot;breakpoint&quot;:319,&quot;toshow&quot;:1,&quot;toscroll&quot;:1},{&quot;breakpoint&quot;:480,&quot;toshow&quot;:1,&quot;toscroll&quot;:1},{&quot;breakpoint&quot;:768,&quot;toshow&quot;:2,&quot;toscroll&quot;:1},{&quot;breakpoint&quot;:1025,&quot;toshow&quot;:3,&quot;toscroll&quot;:1},{&quot;breakpoint&quot;:1281,&quot;toshow&quot;:4,&quot;toscroll&quot;:1},{&quot;breakpoint&quot;:1541,&quot;toshow&quot;:4,&quot;toscroll&quot;:1}],&quot;space_between_gaps&quot;:{&quot;desktop&quot;:30,&quot;mobile&quot;:20,&quot;mobile_extra&quot;:20,&quot;tablet&quot;:20,&quot;tablet_extra&quot;:20,&quot;laptop&quot;:20}}"
                                                                id="wdt-image-box-swiper-fb4e61f">
                                                                <div class="wdt-image-box-wrapper swiper-wrapper"
                                                                    id="swiper-wrapper-5f1073a1b1388ebe6"
                                                                    aria-live="polite"
                                                                    style="transform: translate3d(0px, 0px, 0px);">
                                                                    <div class="swiper-slide swiper-slide-visible swiper-slide-active"
                                                                        style="width: 335px; margin-left: 20px;"
                                                                        role="group" aria-label="1 / 4">
                                                                        <div class="wdt-content-item">
                                                                            <div class="wdt-content-media-group">
                                                                                <div
                                                                                    class="wdt-content-elements-group wdt-media-group wdt-media-image-cover">
                                                                                    <div
                                                                                        class="wdt-content-image-wrapper ">
                                                                                        <div class="wdt-content-image"><a
                                                                                                href=""
                                                                                                target="_blank"
                                                                                               ><img
                                                                                                    loading="lazy"
                                                                                                    decoding="async"
                                                                                                    width="766"
                                                                                                    height="800"
                                                                                                    src="../img/bedroom-5664221_1280.jpg"
                                                                                                    class="attachment-full size-full wp-image-15748"
                                                                                                    alt=""
                                                                                                    srcset="../img/bedroom-5664221_1280.jpg"
                                                                                                    sizes="(max-width: 766px) 100vw, 766px"></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="wdt-media-image-cover-container">
                                                                                        <div
                                                                                            class="wdt-content-button wdt-button-clone">
                                                                                            <a href="{{ route('rooms.show') }}"
                                                                                                >
                                                                                                <div
                                                                                                    class="wdt-button-text">
                                                                                                    <span>عرض</span></div>
                                                                                            </a></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="wdt-content-detail-group">
                                                                                <div class="wdt-content-title">
                                                                                    <h5><a href="{{ route('rooms.show') }}"
                                                                                            >سوبيريور
                                                                                            كينج</a></h5>
                                                                                </div>
                                                                                <div class="wdt-content-description">
                                                                                     </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="swiper-slide swiper-slide-visible swiper-slide-next"
                                                                        style="width: 335px; margin-left: 20px;"
                                                                        role="group" aria-label="2 / 4">
                                                                        <div class="wdt-content-item">
                                                                            <div class="wdt-content-media-group">
                                                                                <div
                                                                                    class="wdt-content-elements-group wdt-media-group wdt-media-image-cover">
                                                                                    <div
                                                                                        class="wdt-content-image-wrapper ">
                                                                                        <div class="wdt-content-image"><a
                                                                                                href="{{ route('rooms.show') }}"
                                                                                                target="_blank"
                                                                                                rel="nofollow"><img
                                                                                                    loading="lazy"
                                                                                                    decoding="async"
                                                                                                    width="766"
                                                                                                    height="800"
                                                                                                    src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/Service-img-2.jpg"
                                                                                                    class="attachment-full size-full wp-image-15749"
                                                                                                    alt=""
                                                                                                    srcset="../img/bedroom-7349893_1280.jpg"
                                                                                                    sizes="(max-width: 766px) 100vw, 766px"></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="wdt-media-image-cover-container">
                                                                                        <div
                                                                                            class="wdt-content-button wdt-button-clone">
                                                                                            <a href="{{ route('rooms.show') }}"
                                                                                                target="_blank"
                                                                                                rel="nofollow">
                                                                                                <div
                                                                                                    class="wdt-button-text">
                                                                                                    <span>عرض</span></div>
                                                                                            </a></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="wdt-content-detail-group">
                                                                                <div class="wdt-content-title">
                                                                                    <h5><a href="{{ route('rooms.show') }}"
                                                                                            target="_blank"
                                                                                            rel="nofollow">غرفة ديلوكس
                                                                                            كينج</a></h5>
                                                                                </div>
                                                                                <div class="wdt-content-description">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="swiper-slide swiper-slide-visible"
                                                                        style="width: 335px; margin-left: 20px;"
                                                                        role="group" aria-label="3 / 4">
                                                                        <div class="wdt-content-item">
                                                                            <div class="wdt-content-media-group">
                                                                                <div
                                                                                    class="wdt-content-elements-group wdt-media-group wdt-media-image-cover">
                                                                                    <div
                                                                                        class="wdt-content-image-wrapper ">
                                                                                        <div class="wdt-content-image"><a
                                                                                                href="{{ route('rooms.show') }}"
                                                                                                target="_blank"
                                                                                                rel="nofollow"><img
                                                                                                    loading="lazy"
                                                                                                    decoding="async"
                                                                                                    width="766"
                                                                                                    height="800"
                                                                                                    src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/Service-img-3.jpg"
                                                                                                    class="attachment-full size-full wp-image-15750"
                                                                                                    alt=""
                                                                                                    srcset="../img/break-649351_1280.jpg"
                                                                                                    sizes="(max-width: 766px) 100vw, 766px" style="height: 230px;"></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="wdt-media-image-cover-container">
                                                                                        <div
                                                                                            class="wdt-content-button wdt-button-clone">
                                                                                            <a href="{{ route('rooms.show') }}"
                                                                                                target="_blank"
                                                                                                rel="nofollow">
                                                                                                <div
                                                                                                    class="wdt-button-text">
                                                                                                    <span>عرض</span></div>
                                                                                            </a></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="wdt-content-detail-group">
                                                                                <div class="wdt-content-title">
                                                                                    <h5><a href="{{ route('rooms.show') }}"
                                                                                            target="_blank"
                                                                                            rel="nofollow">غرفة ديلوكس
                                                                                            كينغ</a></h5>
                                                                                </div>
                                                                                <div class="wdt-content-description"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="swiper-slide swiper-slide-visible"
                                                                        role="group" aria-label="4 / 4"
                                                                        style="width: 335px; margin-left: 20px;">
                                                                        <div class="wdt-content-item">
                                                                            <div class="wdt-content-media-group">
                                                                                <div
                                                                                    class="wdt-content-elements-group wdt-media-group wdt-media-image-cover">
                                                                                    <div
                                                                                        class="wdt-content-image-wrapper ">
                                                                                        <div class="wdt-content-image"><a
                                                                                                href="{{ route('rooms.show') }}"
                                                                                                target="_blank"
                                                                                                rel="nofollow"><img
                                                                                                    loading="lazy"
                                                                                                    decoding="async"
                                                                                                    width="766"
                                                                                                    height="800"
                                                                                                    src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/Service-img-4.jpg"
                                                                                                    class="attachment-full size-full wp-image-15751"
                                                                                                    alt=""
                                                                                                    srcset="../img/bedroom-349701_1280.jpg"
                                                                                                    sizes="(max-width: 766px) 100vw, 766px" style="height: 230px;"></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="wdt-media-image-cover-container">
                                                                                        <div
                                                                                            class="wdt-content-button wdt-button-clone">
                                                                                            <a href="{{ route('rooms.show') }}"
                                                                                                target="_blank"
                                                                                                rel="nofollow">
                                                                                                <div
                                                                                                    class="wdt-button-text">
                                                                                                    <span>عرض</span></div>
                                                                                            </a></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="wdt-content-detail-group">
                                                                                <div class="wdt-content-title">
                                                                                    <h5><a href=""
                                                                                            target="_blank"
                                                                                            rel="nofollow">غرفة ديلوكس كينغ
                                                                                            مع إطلالة على المدينة</a></h5>
                                                                                </div>
                                                                                <div class="wdt-content-description">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div><span class="swiper-notification"
                                                                    aria-live="assertive" aria-atomic="true"></span>
                                                            </div>
                                                            <div class="wdt-carousel-pagination-wrapper">
                                                                <div
                                                                    class="wdt-swiper-pagination wdt-swiper-pagination-fb4e61f">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </section>


                <!-- روابط Owl Carousel -->
                <link rel="stylesheet"
                    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
                <link rel="stylesheet"
                    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

                <div class="container" style="
    text-align: center;
">
                    <h1>معرض الصور</h1>
                    <p>معرض صور الفنادق والمنتجعات</p>
                </div>
                <!-- معرض الصور -->
                <div class="owl-carousel owl-theme" id="hotel-gallery">
                    <div class="item">
                        <img src="../img/break-649351_1280.jpg" alt="فندق اناله تبوك" style="
    height: 186px;
">
                        <p class="caption">فندق اناله تبوك</p>
                    </div>
                    <div class="item">
                        <img src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?auto=format&fit=crop&w=800&q=80" alt="منتجع كيو ريزورت">
                        <p class="caption">منتجع كيو ريزورت</p>
                    </div>
                    <div class="item">
                        <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=800&q=80" alt="فندق اناله تبوك">
                        <p class="caption">فندق اناله تبوك</p>
                    </div>
                    <div class="item">
                        <img src="../img/657dc1172faec_azy-34961jpg.jpg" alt="منتجع كيو ريزورت">
                        <p class="caption">منتجع كيو ريزورت</p>
                    </div>
                </div>

                <style>
                    h1 {
                        margin-top: 40px;
                        font-size: 36px;
                        color: #333;
                    }

                    p {
                        font-size: 18px;
                        color: #666;
                        margin-bottom: 30px;
                    }

                    #hotel-gallery .item {
                        text-align: center;
                    }

                    #hotel-gallery .item img {
                        width: 100%;
                        border-radius: 8px;
                    }

                    #hotel-gallery .caption {
                        margin-top: 5px;
                        font-size: 0.9em;
                        color: #555;
                    }
                </style>

                <script>
                    $(document).ready(function() {
                        $("#hotel-gallery").owlCarousel({
                            loop: true,
                            margin: 15,
                            nav: false,
                            autoplay: true,
                            autoplayTimeout: 2000,
                            autoplayHoverPause: false,
                            rtl: true, // لتحريك الصور من اليمين لليسار
                            responsive: {
                                0: {
                                    items: 1
                                },
                                600: {
                                    items: 3
                                },
                                1000: {
                                    items: 5
                                }
                            }
                        });
                    });
                </script>




                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-9752043 elementor-section-full_width wdt-black-bg elementor-section-height-default elementor-section-height-default"
                    data-id="9752043" data-element_type="section"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;wdt_bg_image&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;wdt_bg_image_laptop&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;wdt_bg_image_tablet_extra&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;wdt_bg_image_tablet&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;wdt_bg_image_mobile_extra&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;wdt_bg_image_mobile&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;wdt_bg_position&quot;:&quot;center center&quot;,&quot;wdt_animation_effect&quot;:&quot;none&quot;}">
                    <div class="elementor-background-overlay"></div>
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-000c596"
                            data-id="000c596" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-49f3305 elementor-widget elementor-widget-spacer"
                                    data-id="49f3305" data-element_type="widget"
                                    data-settings="{&quot;wdt_animation_effect&quot;:&quot;none&quot;}"
                                    data-widget_type="spacer.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-spacer">
                                            <div class="elementor-spacer-inner"></div>
                                        </div>
                                    </div>
                                </div>
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-00e3a03 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="00e3a03" data-element_type="section"
                                    data-settings="{&quot;wdt_bg_image&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;wdt_bg_image_laptop&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;wdt_bg_image_tablet_extra&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;wdt_bg_image_tablet&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;wdt_bg_image_mobile_extra&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;wdt_bg_image_mobile&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;wdt_bg_position&quot;:&quot;center center&quot;,&quot;wdt_animation_effect&quot;:&quot;none&quot;}">
                                    <div class="elementor-container elementor-column-gap-no">
                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-8acb961 elementor-invisible"
                                            data-id="8acb961" data-element_type="column"
                                            data-settings="{&quot;animation&quot;:&quot;fadeInLeft&quot;}">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-9df234e before-title wdt-dark-bg elementor-widget elementor-widget-wdt-heading"
                                                    data-id="9df234e" data-element_type="widget"
                                                    data-settings="{&quot;wdt_animation_effect&quot;:&quot;none&quot;}"
                                                    data-widget_type="wdt-heading.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="wdt-heading-holder " id="wdt-heading-9df234e">
                                                            <div
                                                                class="wdt-heading-subtitle-wrapper wdt-heading-align- wdt-heading-deco-wrapper">
                                                                <span class="wdt-heading-subtitle"><span
                                                                        class="wdt-heading-deco-inner wdt-left-part"><span
                                                                            class="wdt-heading-deco-icon"><span
                                                                                class="wdt-content-icon-wrapper"><span
                                                                                    class="wdt-content-icon"><span><i><svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                x="0px" y="0px"
                                                                                                viewBox="0 0 100 100"
                                                                                                style="enable-background:new 0 0 100 100;"
                                                                                                xml:space="preserve">
                                                                                                <g>
                                                                                                    <g>
                                                                                                        <path
                                                                                                            d="M37.8,65.1c2.1,4.3,3.7,8.9,4.8,13.5c-0.4,2.1-0.8,4.2-1.1,6.3c-0.2,1.5-0.4,3-0.6,4.5c-0.3,2.4,1.5,4.5,4,4.7l2.5,0.2   c0-1.5,0-2.9,0-4.3c1.4-2.8,3.2-5.5,5.2-8c1.1-1.3,2.3-2.6,3.6-3.8c2.2-1.9,4.6-3.5,7.1-4.9c3.3-1.7,6.8-3.1,10.4-3.7   c-3.5,1-6.7,2.8-9.7,4.8c-2.9,2.1-5.5,4.6-7.7,7.3c-0.2,0.3-0.4,0.6-0.6,0.9c8.5,2.8,21.8-3.1,22.3-15.3   c-11.8-5.9-24.3,0.2-25.8,11.4c-0.5,0.4-1,0.9-1.5,1.3c-1,0.9-1.9,1.9-2.8,2.9c0.7-7.9,2.3-15.8,4.7-23.5   c2.4-7.4,5.7-14.6,9.8-21.3c1-1.4,2-2.9,3-4.2c2.8-3.6,5.8-7.1,9-10.3c3.3-3.2,6.7-6.1,10.5-8.6c-3.5,2.6-20,18.9-27.4,44.7   c22.1,0.3,48.3-26.4,37.5-55C62.5,2.9,40.5,29.6,49.4,56.6c-0.2,0.5-0.5,1-0.7,1.6c-1.7,4.1-3.1,8.3-4.3,12.6   c-1.2-2.6-2.5-5.1-3.9-7.5c-1-1.7-2.1-3.4-3.3-5c-1.9-2.9-4-5.6-6.3-8.2c-2-2.2-4.2-4.3-6.6-6.2c-2.4-1.9-4.8-3.7-7.6-5.1   c2.5,1,15.1,6.7,23.7,18.7c-0.3-17.1-17-30.1-37.3-25.9C-1.8,53.8,22.4,70.5,37.8,65.1L37.8,65.1z">
                                                                                                        </path>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </svg></i></span></span></span></span></span>خدماتنا الرائعة<span
                                                                        class="wdt-heading-deco-inner wdt-right-part"></span></span>
                                                            </div>
                                                            <h2 class="wdt-heading-title-wrapper wdt-heading-align-1 ">
                                                                <span class="wdt-heading-title">تحقق من خدماتنا الرائعة</span></h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-86c6da3 elementor-invisible"
                                            data-id="86c6da3" data-element_type="column"
                                            data-settings="{&quot;animation&quot;:&quot;fadeInRight&quot;}">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-31589d1 elementor-widget__width-auto animated-fast elementor-invisible elementor-widget elementor-widget-wdt-button"
                                                    data-id="31589d1" data-element_type="widget"
                                                    data-settings="{&quot;item_normal_background_background&quot;:&quot;classic&quot;,&quot;item_hover_background_background&quot;:&quot;classic&quot;,&quot;_animation&quot;:&quot;fadeInLeft&quot;,&quot;_animation_delay&quot;:&quot;100&quot;,&quot;item_hover_background_color&quot;:&quot;#D9EF82&quot;,&quot;wdt_animation_effect&quot;:&quot;none&quot;}"
                                                    data-widget_type="wdt-button.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="wdt-button-holder wdt-template-filled wdt-button-link wdt-button-style-default wdt-button-size-nm wdt-animation- wdt-button-icon-after"
                                                            id="wdt-button-31589d1"><a class="wdt-button"
                                                                href="{{ route('rooms.show') }}">
                                                                <div class="wdt-button-text"><span>عرض الكل</span></div>
                                                            </a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-4a6f173 animated-fast elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible"
                                    data-id="4a6f173" data-element_type="section"
                                    data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:100,&quot;wdt_bg_image&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;wdt_bg_image_laptop&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;wdt_bg_image_tablet_extra&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;wdt_bg_image_tablet&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;wdt_bg_image_mobile_extra&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;wdt_bg_image_mobile&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;wdt_bg_position&quot;:&quot;center center&quot;,&quot;wdt_animation_effect&quot;:&quot;none&quot;}">
                                    <div class="elementor-container elementor-column-gap-no">
                                        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-3c6a639"
                                            data-id="3c6a639" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-0e5ac48 elementor-widget elementor-widget-wdt-widget-df-listings-listing"
                                                    data-id="0e5ac48" data-element_type="widget"
                                                    data-settings="{&quot;wdt_animation_effect&quot;:&quot;none&quot;}"
                                                    data-widget_type="wdt-widget-df-listings-listing.default">
                                                    <div class="elementor-widget-container">
                                                        <div
                                                            class="wdt-listing-output-data-container wdt-direct-list-items wdt-listing-no-map ">
                                                            <div class="wdt-listing-output-data-holder" data-type="type3"
                                                                data-gallery="featured_image" data-postperpage="6"
                                                                data-columns="3" data-applyisotope="false"
                                                                data-isotopefilter="" data-showisotopefiltercount="false"
                                                                data-applychildof="false" data-featureditems="false"
                                                                data-featuresimageoricon="" data-featuresinclude=""
                                                                data-noofcattodisplay="4" data-excerptlength="20"
                                                                data-applyequalheight="false" data-paginationtype=""
                                                                data-moduleid="0e5ac48" data-customoptions=""
                                                                data-listitemids="" data-categoryids="" data-tagids=""
                                                                data-showimagepopup="no" data-enableviewdetailsbtn=""
                                                                data-masonaryoneitems="" data-masonaryonehalfitems=""
                                                                data-masonaryonethirditems=""
                                                                data-masonarytwothirditems=""
                                                                data-masonaryonefourthitems=""
                                                                data-masonarythreefourthitems=""
                                                                data-carouselresponsive="">
                                                                <div
                                                                    class="wdt-listings-container    wdt-portfolio-module-id-8888">
                                                                    <div class="wdt-listings-item-container ">
                                                                        <div
                                                                            class="wdt-listings-item-wrapper  type3 post-8613 type-wdt_listings status-publish has-post-thumbnail hentry wdt_listings_category-garden-design wdt_listings_amenity-plant-care format-standard wdt-column wdt-one-third first">
                                                                            <div class="wdt-listings-item-top-section">
                                                                                <div class="wdt-listings-item-image-gallery"
                                                                                    data-media-gallery="[&quot;https://wdtgrassroot.wpengine.com/rtl-demo/wp-content/uploads/sites/3/2025/01/portfolio-1-01.jpg&quot;,&quot;https://wdtgrassroot.wpengine.com/rtl-demo/wp-content/uploads/sites/3/2025/01/portfolio-1-02.jpg&quot;,&quot;https://wdtgrassroot.wpengine.com/rtl-demo/wp-content/uploads/sites/3/2025/01/portfolio-1-03.jpg&quot;,&quot;https://wdtgrassroot.wpengine.com/rtl-demo/wp-content/uploads/sites/3/2025/01/portfolio-1-04.jpg&quot;]">
                                                                                    <div
                                                                                        class="wdt-listings-feature-image-holder ">
                                                                                        <img src="../img/6315b138554a6_restaurant.webp"
                                                                                            title="Featured Image"
                                                                                            alt="Featured Image"
                                                                                            width="1000" height="1000">
                                                                                    </div><a
                                                                                        class="custom-button-style wdt-listing-view-details"
                                                                                        href="{{ route('rooms.show') }}">View
                                                                                        Details<span
                                                                                            class="detail-icon"><svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                x="0px" y="0px"
                                                                                                viewBox="0 0 159 95.6"
                                                                                                style="enable-background:new 0 0 159 95.6;"
                                                                                                xml:space="preserve">
                                                                                                <g class="eye-wrap">
                                                                                                    <path class="eye-inner"
                                                                                                        d="M79.5,19.3C63.8,19.3,51,32.1,51,47.8s12.8,28.5,28.5,28.5S108,63.5,108,47.8C108,32.1,95.2,19.3,79.5,19.3z M79.5,67.3 C68.7,67.3,60,58.6,60,47.8s8.7-19.5,19.5-19.5S99,37,99,47.8l0,0C99,58.6,90.3,67.3,79.5,67.3z">
                                                                                                    </path>
                                                                                                    <path class="eye-outer"
                                                                                                        d="M158.4,45.6C133.2,2,77.5-12.9,33.9,12.2c-13.8,8-25.3,19.5-33.3,33.3c-0.8,1.4-0.8,3.1,0,4.5 c25.2,43.6,80.9,58.5,124.5,33.3c13.8-8,25.3-19.5,33.3-33.3C159.2,48.7,159.2,47,158.4,45.6z M79.5,86.6 c-28.4,0-54.7-14.7-69.8-38.8C33.7,9.3,84.3-2.5,122.8,21.4c10.7,6.7,19.8,15.7,26.4,26.4C134.2,71.9,107.9,86.5,79.5,86.6 L79.5,86.6z">
                                                                                                    </path>
                                                                                                </g>
                                                                                            </svg></span></a>
                                                                                </div>
                                                                                <div
                                                                                    class="wdt-listings-item-top-section-content">
                                                                                    <div
                                                                                        class="wdt-listings-taxonomy-container type1 ">
                                                                                        <ul
                                                                                            class="wdt-listings-taxonomy-list">
                                                                                            <li>
                                                                                                <a
                                                                                                    href="{{ route('rooms.show') }}">
                                                                                                    <span> </span></a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                    <div class="wdt-listings-item-title">
                                                                                        <a
                                                                                            href="{{ route('rooms.show') }}">مطاعم</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="wdt-listings-item-wrapper  type3 post-8614 type-wdt_listings status-publish has-post-thumbnail hentry wdt_listings_category-outdoor-landscaping wdt_listings_amenity-nature-inspired format-standard wdt-column wdt-one-third">
                                                                            <div class="wdt-listings-item-top-section">
                                                                                <div class="wdt-listings-item-image-gallery"
                                                                                    data-media-gallery="[&quot;https://wdtgrassroot.wpengine.com/rtl-demo/wp-content/uploads/sites/3/2025/01/portfolio-1-02.jpg&quot;,&quot;https://wdtgrassroot.wpengine.com/rtl-demo/wp-content/uploads/sites/3/2025/01/portfolio-1-03.jpg&quot;,&quot;https://wdtgrassroot.wpengine.com/rtl-demo/wp-content/uploads/sites/3/2025/01/portfolio-1-05.jpg&quot;,&quot;https://wdtgrassroot.wpengine.com/rtl-demo/wp-content/uploads/sites/3/2025/01/portfolio-1-11.jpg&quot;]">
                                                                                    <div
                                                                                        class="wdt-listings-feature-image-holder ">
                                                                                        <img src="../img/657dc1172faec_azy-34961jpg.jpg"
                                                                                            title="Featured Image"
                                                                                            alt="Featured Image"
                                                                                            width="1000" height="1000">
                                                                                    </div><a
                                                                                        class="custom-button-style wdt-listing-view-details"
                                                                                        href="{{ route('rooms.show') }}">View
                                                                                        Details<span class="detail-icon">
                                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                x="0px" y="0px"
                                                                                                viewBox="0 0 159 95.6"
                                                                                                style="enable-background:new 0 0 159 95.6;"
                                                                                                xml:space="preserve">
                                                                                                <g class="eye-wrap">
                                                                                                    <path class="eye-inner"
                                                                                                        d="M79.5,19.3C63.8,19.3,51,32.1,51,47.8s12.8,28.5,28.5,28.5S108,63.5,108,47.8C108,32.1,95.2,19.3,79.5,19.3z M79.5,67.3 C68.7,67.3,60,58.6,60,47.8s8.7-19.5,19.5-19.5S99,37,99,47.8l0,0C99,58.6,90.3,67.3,79.5,67.3z">
                                                                                                    </path>
                                                                                                    <path class="eye-outer"
                                                                                                        d="M158.4,45.6C133.2,2,77.5-12.9,33.9,12.2c-13.8,8-25.3,19.5-33.3,33.3c-0.8,1.4-0.8,3.1,0,4.5 c25.2,43.6,80.9,58.5,124.5,33.3c13.8-8,25.3-19.5,33.3-33.3C159.2,48.7,159.2,47,158.4,45.6z M79.5,86.6 c-28.4,0-54.7-14.7-69.8-38.8C33.7,9.3,84.3-2.5,122.8,21.4c10.7,6.7,19.8,15.7,26.4,26.4C134.2,71.9,107.9,86.5,79.5,86.6 L79.5,86.6z">
                                                                                                    </path>
                                                                                                </g>
                                                                                            </svg></span></a>
                                                                                </div>
                                                                                <div
                                                                                    class="wdt-listings-item-top-section-content">
                                                                                    <div
                                                                                        class="wdt-listings-taxonomy-container type1 ">
                                                                                        <ul
                                                                                            class="wdt-listings-taxonomy-list">
                                                                                            <li><a
                                                                                                    href="https://wdtgrassroot.wpengine.com/rtl-demo/listing-category/outdoor-landscaping/"><span></span></a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                    <div class="wdt-listings-item-title"><a
                                                                                            href="{{ route('rooms.show') }}">قاعة اجتماعات </a></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="wdt-listings-item-wrapper  type3 post-6506 type-wdt_listings status-publish has-post-thumbnail hentry wdt_listings_category-botanical-wonders wdt_listings_amenity-plant-care format-standard wdt-column wdt-one-third">
                                                                            <div class="wdt-listings-item-top-section">
                                                                                <div class="wdt-listings-item-image-gallery"
                                                                                    data-media-gallery="[&quot;https://wdtgrassroot.wpengine.com/rtl-demo/wp-content/uploads/sites/3/2025/01/portfolio-1-03.jpg&quot;,&quot;https://wdtgrassroot.wpengine.com/rtl-demo/wp-content/uploads/sites/3/2025/01/portfolio-1-04.jpg&quot;,&quot;https://wdtgrassroot.wpengine.com/rtl-demo/wp-content/uploads/sites/3/2025/01/portfolio-1-05.jpg&quot;,&quot;https://wdtgrassroot.wpengine.com/rtl-demo/wp-content/uploads/sites/3/2025/01/portfolio-1-06.jpg&quot;]">
                                                                                    <div
                                                                                        class="wdt-listings-feature-image-holder ">
                                                                                        <img src="../img/6323224c2d9c5_63136758b69271662216024.webp"
                                                                                            title="Featured Image"
                                                                                            alt="Featured Image"
                                                                                            width="1000" height="1000">
                                                                                    </div><a
                                                                                        class="custom-button-style wdt-listing-view-details"
                                                                                        href="{{ route('rooms.show') }}">View
                                                                                        Details<span class="detail-icon">
                                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                x="0px" y="0px"
                                                                                                viewBox="0 0 159 95.6"
                                                                                                style="enable-background:new 0 0 159 95.6;"
                                                                                                xml:space="preserve">
                                                                                                <g class="eye-wrap">
                                                                                                    <path class="eye-inner"
                                                                                                        d="M79.5,19.3C63.8,19.3,51,32.1,51,47.8s12.8,28.5,28.5,28.5S108,63.5,108,47.8C108,32.1,95.2,19.3,79.5,19.3z M79.5,67.3 C68.7,67.3,60,58.6,60,47.8s8.7-19.5,19.5-19.5S99,37,99,47.8l0,0C99,58.6,90.3,67.3,79.5,67.3z">
                                                                                                    </path>
                                                                                                    <path class="eye-outer"
                                                                                                        d="M158.4,45.6C133.2,2,77.5-12.9,33.9,12.2c-13.8,8-25.3,19.5-33.3,33.3c-0.8,1.4-0.8,3.1,0,4.5 c25.2,43.6,80.9,58.5,124.5,33.3c13.8-8,25.3-19.5,33.3-33.3C159.2,48.7,159.2,47,158.4,45.6z M79.5,86.6 c-28.4,0-54.7-14.7-69.8-38.8C33.7,9.3,84.3-2.5,122.8,21.4c10.7,6.7,19.8,15.7,26.4,26.4C134.2,71.9,107.9,86.5,79.5,86.6 L79.5,86.6z">
                                                                                                    </path>
                                                                                                </g>
                                                                                            </svg></span></a>
                                                                                </div>
                                                                                <div
                                                                                    class="wdt-listings-item-top-section-content">
                                                                                    <div
                                                                                        class="wdt-listings-taxonomy-container type1 ">
                                                                                        <ul
                                                                                            class="wdt-listings-taxonomy-list">
                                                                                            <li><a
                                                                                                    href="{{ route('rooms.show') }}"><span>حمام سباحة</span></a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                    <div class="wdt-listings-item-title"><a
                                                                                            href="{{ route('rooms.show') }}"></a></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="wdt-listings-item-wrapper  type3 post-6504 type-wdt_listings status-publish has-post-thumbnail hentry wdt_listings_category-garden-design wdt_listings_amenity-nature-inspired format-standard wdt-column wdt-one-third first">
                                                                            <div class="wdt-listings-item-top-section">
                                                                                <div class="wdt-listings-item-image-gallery"
                                                                                    data-media-gallery="[&quot;https://wdtgrassroot.wpengine.com/rtl-demo/wp-content/uploads/sites/3/2025/01/portfolio-1-10.jpg&quot;,&quot;https://wdtgrassroot.wpengine.com/rtl-demo/wp-content/uploads/sites/3/2025/01/portfolio-1-05.jpg&quot;,&quot;https://wdtgrassroot.wpengine.com/rtl-demo/wp-content/uploads/sites/3/2025/01/portfolio-1-06.jpg&quot;,&quot;https://wdtgrassroot.wpengine.com/rtl-demo/wp-content/uploads/sites/3/2025/01/portfolio-1-07.jpg&quot;]">
                                                                                    <div
                                                                                        class="wdt-listings-feature-image-holder ">
                                                                                        <img src="../img/cheese-4797440_1280.jpg"
                                                                                            title="Featured Image"
                                                                                            alt="Featured Image"
                                                                                            width="1000" height="1000">
                                                                                    </div><a
                                                                                        class="custom-button-style wdt-listing-view-details"
                                                                                        href="{{ route('rooms.show') }}">View
                                                                                        Details<span
                                                                                            class="detail-icon"><svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                x="0px" y="0px"
                                                                                                viewBox="0 0 159 95.6"
                                                                                                style="enable-background:new 0 0 159 95.6;"
                                                                                                xml:space="preserve">
                                                                                                <g class="eye-wrap">
                                                                                                    <path class="eye-inner"
                                                                                                        d="M79.5,19.3C63.8,19.3,51,32.1,51,47.8s12.8,28.5,28.5,28.5S108,63.5,108,47.8C108,32.1,95.2,19.3,79.5,19.3z M79.5,67.3 C68.7,67.3,60,58.6,60,47.8s8.7-19.5,19.5-19.5S99,37,99,47.8l0,0C99,58.6,90.3,67.3,79.5,67.3z">
                                                                                                    </path>
                                                                                                    <path class="eye-outer"
                                                                                                        d="M158.4,45.6C133.2,2,77.5-12.9,33.9,12.2c-13.8,8-25.3,19.5-33.3,33.3c-0.8,1.4-0.8,3.1,0,4.5 c25.2,43.6,80.9,58.5,124.5,33.3c13.8-8,25.3-19.5,33.3-33.3C159.2,48.7,159.2,47,158.4,45.6z M79.5,86.6 c-28.4,0-54.7-14.7-69.8-38.8C33.7,9.3,84.3-2.5,122.8,21.4c10.7,6.7,19.8,15.7,26.4,26.4C134.2,71.9,107.9,86.5,79.5,86.6 L79.5,86.6z">
                                                                                                    </path>
                                                                                                </g>
                                                                                            </svg></span></a>
                                                                                </div>
                                                                                <div
                                                                                    class="wdt-listings-item-top-section-content">
                                                                                    <div
                                                                                        class="wdt-listings-taxonomy-container type1 ">
                                                                                        <ul
                                                                                            class="wdt-listings-taxonomy-list">
                                                                                            <li><a
                                                                                                    href="{{ route('rooms.show') }}"><span>خدمة الغرف</span></a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                    <div class="wdt-listings-item-title"><a
                                                                                            href="{{ route('rooms.show') }}"></a></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="wdt-listings-item-wrapper  type3 post-6502 type-wdt_listings status-publish has-post-thumbnail hentry wdt_listings_category-outdoor-landscaping wdt_listings_amenity-plant-care format-standard wdt-column wdt-one-third">
                                                                            <div class="wdt-listings-item-top-section">
                                                                                <div class="wdt-listings-item-image-gallery"
                                                                                    data-media-gallery="[&quot;https://wdtgrassroot.wpengine.com/rtl-demo/wp-content/uploads/sites/3/2025/01/portfolio-1-05.jpg&quot;,&quot;https://wdtgrassroot.wpengine.com/rtl-demo/wp-content/uploads/sites/3/2025/01/portfolio-1-06.jpg&quot;,&quot;https://wdtgrassroot.wpengine.com/rtl-demo/wp-content/uploads/sites/3/2025/01/portfolio-1-07.jpg&quot;,&quot;https://wdtgrassroot.wpengine.com/rtl-demo/wp-content/uploads/sites/3/2025/01/portfolio-1-08.jpg&quot;]">
                                                                                    <div
                                                                                        class="wdt-listings-feature-image-holder ">
                                                                                        <img src="../img/architecture-4376923_1280.jpg"
                                                                                            title="Featured Image"
                                                                                            alt="Featured Image"
                                                                                            width="1000" height="1000">
                                                                                    </div><a
                                                                                        class="custom-button-style wdt-listing-view-details"
                                                                                        href="{{ route('rooms.show') }}">View
                                                                                        Details<span
                                                                                            class="detail-icon"><svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                x="0px" y="0px"
                                                                                                viewBox="0 0 159 95.6"
                                                                                                style="enable-background:new 0 0 159 95.6;"
                                                                                                xml:space="preserve">
                                                                                                <g class="eye-wrap">
                                                                                                    <path class="eye-inner"
                                                                                                        d="M79.5,19.3C63.8,19.3,51,32.1,51,47.8s12.8,28.5,28.5,28.5S108,63.5,108,47.8C108,32.1,95.2,19.3,79.5,19.3z M79.5,67.3 C68.7,67.3,60,58.6,60,47.8s8.7-19.5,19.5-19.5S99,37,99,47.8l0,0C99,58.6,90.3,67.3,79.5,67.3z">
                                                                                                    </path>
                                                                                                    <path class="eye-outer"
                                                                                                        d="M158.4,45.6C133.2,2,77.5-12.9,33.9,12.2c-13.8,8-25.3,19.5-33.3,33.3c-0.8,1.4-0.8,3.1,0,4.5 c25.2,43.6,80.9,58.5,124.5,33.3c13.8-8,25.3-19.5,33.3-33.3C159.2,48.7,159.2,47,158.4,45.6z M79.5,86.6 c-28.4,0-54.7-14.7-69.8-38.8C33.7,9.3,84.3-2.5,122.8,21.4c10.7,6.7,19.8,15.7,26.4,26.4C134.2,71.9,107.9,86.5,79.5,86.6 L79.5,86.6z">
                                                                                                    </path>
                                                                                                </g>
                                                                                            </svg></span></a>
                                                                                </div>
                                                                                <div
                                                                                    class="wdt-listings-item-top-section-content">
                                                                                    <div
                                                                                        class="wdt-listings-taxonomy-container type1 ">
                                                                                        <ul
                                                                                            class="wdt-listings-taxonomy-list">
                                                                                            <li><a
                                                                                                    href="{{ route('rooms.show') }}"><span>مواقف السيارات </span></a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                    <div class="wdt-listings-item-title"><a
                                                                                            href="{{ route('rooms.show') }}"></a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="wdt-listings-item-wrapper  type3 post-1205 type-wdt_listings status-publish has-post-thumbnail hentry wdt_listings_category-botanical-wonders wdt_listings_amenity-nature-inspired format-standard wdt-column wdt-one-third">
                                                                            <div class="wdt-listings-item-top-section">
                                                                                <div class="wdt-listings-item-image-gallery"
                                                                                    data-media-gallery="[&quot;https://wdtgrassroot.wpengine.com/rtl-demo/wp-content/uploads/sites/3/2025/01/portfolio-1-06.jpg&quot;,&quot;https://wdtgrassroot.wpengine.com/rtl-demo/wp-content/uploads/sites/3/2025/01/portfolio-1-07.jpg&quot;,&quot;https://wdtgrassroot.wpengine.com/rtl-demo/wp-content/uploads/sites/3/2025/01/portfolio-1-09.jpg&quot;,&quot;https://wdtgrassroot.wpengine.com/rtl-demo/wp-content/uploads/sites/3/2025/01/portfolio-1-12.jpg&quot;]">
                                                                                    <div
                                                                                        class="wdt-listings-feature-image-holder ">
                                                                                        <img src="../img/657dc085f1dcb_151jpg.jpg"
                                                                                            title="Featured Image"
                                                                                            alt="Featured Image"
                                                                                            width="1000" height="1000">
                                                                                    </div><a
                                                                                        class="custom-button-style wdt-listing-view-details"
                                                                                        href="{{ route('rooms.show') }}">View
                                                                                        Details<span
                                                                                            class="detail-icon"><svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                x="0px" y="0px"
                                                                                                viewBox="0 0 159 95.6"
                                                                                                style="enable-background:new 0 0 159 95.6;"
                                                                                                xml:space="preserve">
                                                                                                <g class="eye-wrap">
                                                                                                    <path class="eye-inner"
                                                                                                        d="M79.5,19.3C63.8,19.3,51,32.1,51,47.8s12.8,28.5,28.5,28.5S108,63.5,108,47.8C108,32.1,95.2,19.3,79.5,19.3z M79.5,67.3 C68.7,67.3,60,58.6,60,47.8s8.7-19.5,19.5-19.5S99,37,99,47.8l0,0C99,58.6,90.3,67.3,79.5,67.3z">
                                                                                                    </path>
                                                                                                    <path class="eye-outer"
                                                                                                        d="M158.4,45.6C133.2,2,77.5-12.9,33.9,12.2c-13.8,8-25.3,19.5-33.3,33.3c-0.8,1.4-0.8,3.1,0,4.5 c25.2,43.6,80.9,58.5,124.5,33.3c13.8-8,25.3-19.5,33.3-33.3C159.2,48.7,159.2,47,158.4,45.6z M79.5,86.6 c-28.4,0-54.7-14.7-69.8-38.8C33.7,9.3,84.3-2.5,122.8,21.4c10.7,6.7,19.8,15.7,26.4,26.4C134.2,71.9,107.9,86.5,79.5,86.6 L79.5,86.6z">
                                                                                                    </path>
                                                                                                </g>
                                                                                            </svg></span></a>
                                                                                </div>
                                                                                <div
                                                                                    class="wdt-listings-item-top-section-content">
                                                                                    <div
                                                                                        class="wdt-listings-taxonomy-container type1 ">
                                                                                        <ul
                                                                                            class="wdt-listings-taxonomy-list">
                                                                                            <li><a
                                                                                                    href="{{ route('rooms.show') }}"><span>صالة العاب رياضية</span></a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                    <div class="wdt-listings-item-title"><a
                                                                                            href="{{ route('rooms.show') }}"></a></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="wdt-ajax-load-image " style="display: none;">
                                                                <div class="wdt-loader-inner">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-eb75ccb elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                    data-id="eb75ccb" data-element_type="section"
                    data-settings="{&quot;wdt_bg_image&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;wdt_bg_image_laptop&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;wdt_bg_image_tablet_extra&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;wdt_bg_image_tablet&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;wdt_bg_image_mobile_extra&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;wdt_bg_image_mobile&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;wdt_bg_position&quot;:&quot;center center&quot;,&quot;wdt_animation_effect&quot;:&quot;none&quot;}">
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e46c4fd"
                            data-id="e46c4fd" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-598c091 e-transform elementor-widget elementor-widget-spacer"
                                    data-id="598c091" data-element_type="widget"
                                    data-settings="{&quot;_transform_flipY_effect&quot;:&quot;transform&quot;,&quot;wdt_animation_effect&quot;:&quot;none&quot;}"
                                    data-widget_type="spacer.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-spacer">
                                            <div class="elementor-spacer-inner"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-c017382 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="c017382" data-element_type="section"
                    data-settings="{&quot;wdt_bg_image&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;wdt_bg_image_laptop&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;wdt_bg_image_tablet_extra&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;wdt_bg_image_tablet&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;wdt_bg_image_mobile_extra&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;wdt_bg_image_mobile&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;wdt_bg_position&quot;:&quot;center center&quot;,&quot;wdt_animation_effect&quot;:&quot;none&quot;}">
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6015b57 animated-fast elementor-invisible"
                            data-id="6015b57" data-element_type="column"
                            data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:100}">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-daf6ba9 elementor-widget__width-inherit before-title elementor-widget elementor-widget-wdt-heading"
                                    data-id="daf6ba9" data-element_type="widget"
                                    data-settings="{&quot;wdt_animation_effect&quot;:&quot;none&quot;}"
                                    data-widget_type="wdt-heading.default">
                                    <div class="elementor-widget-container">
                                        <div class="wdt-heading-holder " id="wdt-heading-daf6ba9">
                                            <div
                                                class="wdt-heading-subtitle-wrapper wdt-heading-align- wdt-heading-deco-wrapper">
                                                <span class="wdt-heading-subtitle"><span
                                                        class="wdt-heading-deco-inner wdt-left-part"><span
                                                            class="wdt-heading-deco-icon"><span
                                                                class="wdt-content-icon-wrapper"><span
                                                                    class="wdt-content-icon"><span><i><svg
                                                                                xmlns="http://www.w3.org/2000/svg" x="0px"
                                                                                y="0px" viewBox="0 0 100 100"
                                                                                style="enable-background:new 0 0 100 100;"
                                                                                xml:space="preserve">
                                                                                <g>
                                                                                    <g>
                                                                                        <path
                                                                                            d="M37.8,65.1c2.1,4.3,3.7,8.9,4.8,13.5c-0.4,2.1-0.8,4.2-1.1,6.3c-0.2,1.5-0.4,3-0.6,4.5c-0.3,2.4,1.5,4.5,4,4.7l2.5,0.2   c0-1.5,0-2.9,0-4.3c1.4-2.8,3.2-5.5,5.2-8c1.1-1.3,2.3-2.6,3.6-3.8c2.2-1.9,4.6-3.5,7.1-4.9c3.3-1.7,6.8-3.1,10.4-3.7   c-3.5,1-6.7,2.8-9.7,4.8c-2.9,2.1-5.5,4.6-7.7,7.3c-0.2,0.3-0.4,0.6-0.6,0.9c8.5,2.8,21.8-3.1,22.3-15.3   c-11.8-5.9-24.3,0.2-25.8,11.4c-0.5,0.4-1,0.9-1.5,1.3c-1,0.9-1.9,1.9-2.8,2.9c0.7-7.9,2.3-15.8,4.7-23.5   c2.4-7.4,5.7-14.6,9.8-21.3c1-1.4,2-2.9,3-4.2c2.8-3.6,5.8-7.1,9-10.3c3.3-3.2,6.7-6.1,10.5-8.6c-3.5,2.6-20,18.9-27.4,44.7   c22.1,0.3,48.3-26.4,37.5-55C62.5,2.9,40.5,29.6,49.4,56.6c-0.2,0.5-0.5,1-0.7,1.6c-1.7,4.1-3.1,8.3-4.3,12.6   c-1.2-2.6-2.5-5.1-3.9-7.5c-1-1.7-2.1-3.4-3.3-5c-1.9-2.9-4-5.6-6.3-8.2c-2-2.2-4.2-4.3-6.6-6.2c-2.4-1.9-4.8-3.7-7.6-5.1   c2.5,1,15.1,6.7,23.7,18.7c-0.3-17.1-17-30.1-37.3-25.9C-1.8,53.8,22.4,70.5,37.8,65.1L37.8,65.1z">
                                                                                        </path>
                                                                                    </g>
                                                                                </g>
                                                                            </svg></i></span></span></span></span></span><span
                                                        class="wdt-heading-deco-inner wdt-right-part"></span></span></div>
                                            <h2 class="wdt-heading-title-wrapper wdt-heading-align- "><span
                                                    class="wdt-heading-title">مدونة المواضيع</span></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-6d13f2e elementor-widget elementor-widget-wdt-blog-posts"
                                    data-id="6d13f2e" data-element_type="widget"
                                    data-settings="{&quot;wdt_animation_effect&quot;:&quot;none&quot;}"
                                    data-widget_type="wdt-blog-posts.default">
                                    <div class="elementor-widget-container">
                                        <div class="wdt-posts-list-wrapper  wdt-post-list-carousel-6d13f2e">
                                            <div class="tpl-blog-holder  apply-isotope "
                                                style="position: relative; height: 485.763px;">
                                                <div class="grid-sizer  entry-grid-layout wdt-minimal-style wdt-fadeinleft-hover wdt-default-overlay alignnone column wdt-one-third wdt-post-entry "
                                                    style="position: absolute; left: 0px; top: 0px;"></div>
                                                <div class=" entry-grid-layout wdt-minimal-style wdt-fadeinleft-hover wdt-default-overlay alignnone column wdt-one-third wdt-post-entry  "
                                                    style="position: absolute; left: 0px; top: 0px;">
                                                    <article id="post-16411"
                                                        class="post-16411 post type-post status-publish format-standard has-post-thumbnail hentry category-medicinal-plants tag-organic-plants blog-entry">


                                                        <!-- Featured Image -->
                                                        <div class="entry-thumb">

                                                            <a href="{{  route('blog.index') }}"
                                                                title="Permalink to Low-Maintenance Garden Tips"><img
                                                                    loading="lazy" decoding="async" width="1920"
                                                                    height="912"
                                                                    src="../img/6522c6d2b2c19_8ffa17d576b2d03e1ff2e9ea86dd6b2cjpg.jpg"
                                                                    class="attachment-wdt-blog-iii-column size-wdt-blog-iii-column wp-post-image"
                                                                    alt=""
                                                                    srcset="../img/downloadwebp.webp"
                                                                    sizes="(max-width: 1920px) 100vw, 1920px" style="height: 260px;"></a>
                                                        </div><!-- Featured Image -->
                                                        <!-- Entry Date -->
                                                        <div class="entry-date">
                                                            مارس 12, 2025</div><!-- Entry Date -->
                                                        <!-- Entry Title -->
                                                        <div class="entry-title">
                                                            <h4> <a href="{{  route('blog.index') }}"
                                                                    title="Permalink to Low-Maintenance Garden Tips">أ. فالح الفالح رئيس لجنة السياحة والترفيه والفعاليات بـ #غرفة_الرياض متحدثاً عن تطلعات اللجنة نحو خدمة القطاع.</a>
                                                            </h4>
                                                        </div><!-- Entry Title -->
                                                        <div class="entry-body">
                                                            <p>أ. فالح الفالح رئيس لجنة السياحة والترفيه والفعاليات بـ #غرفة_الرياض متحدثاً عن تطلعات اللجنة نحو خدمة القطاع....</p>
                                                       </div>

                                                        <!-- Entry Button -->
                                                        <div class="entry-button wdt-core-button"><a
                                                                href=" {{ route('blog.index') }} "
                                                                title="Low-Maintenance Garden Tips"
                                                                class="wdt-button">اقرأ المزيد<span> <svg
                                                                        xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                                        viewBox="0 0 100 100"
                                                                        style="enable-background:new 0 0 100 100;"
                                                                        xml:space="preserve">
                                                                        <path
                                                                            d="M2.5,55.7c0,0.3,0.2,0.5,0.5,0.5c0.1,0,0.1,0,0.2,0c5.4-2.1,10.9-2.5,15.8-2.6C36.4,90,72.7,69.3,97.5,50 C74.4,32,41.1,12.8,22.7,39.9C45.4,39,70,48.1,70,48.1S17.2,43,2.8,48.8c-0.2,0.1-0.3,0.3-0.3,0.5L2.5,55.7z">
                                                                        </path>
                                                                    </svg>
                                                                </span></a></div><!-- Entry Button -->
                                                    </article>
                                                </div>
                                                <div class=" entry-grid-layout wdt-minimal-style wdt-fadeinleft-hover wdt-default-overlay alignnone column wdt-one-third wdt-post-entry  "
                                                    style="position: absolute; left: 476.612px; top: 0px;">
                                                    <article id="post-16412"
                                                        class="post-16412 post type-post status-publish format-standard has-post-thumbnail hentry category-medicinal-plants tag-green-living blog-entry">


                                                        <!-- Featured Image -->
                                                        <div class="entry-thumb">

                                                            <a href="{{  route('blog.index') }}"
                                                                title="Permalink to Why Crop Rotation Is Important?"><img
                                                                    loading="lazy" decoding="async" width="1920"
                                                                    height="912"
                                                                    src="../img/673c451c83232_yom-alrgl-lynkd-an-otoytrjpg.jpg"
                                                                    class="attachment-wdt-blog-iii-column size-wdt-blog-iii-column wp-post-image"
                                                                    alt=""
                                                                    srcset="../img/673c451c83232_yom-alrgl-lynkd-an-otoytrjpg.jpg"
                                                                    sizes="(max-width: 1920px) 100vw, 1920px" style="height: 260px;
"></a>
                                                        </div><!-- Featured Image -->
                                                        <!-- Entry Date -->
                                                        <div class="entry-date">
                                                            مارس 9, 2025</div><!-- Entry Date -->
                                                        <!-- Entry Title -->
                                                        <div class="entry-title">
                                                            <h4> <a href="{{  route('blog.index') }}"
                                                                    title="Permalink to Why Crop Rotation Is Important?">اليوم العالمي للرجل ومنتجعات إناله السياحية في الرياض</a>
                                                            </h4>
                                                        </div><!-- Entry Title -->
                                                        <div class="entry-body">
                                                            <p>يجسد اليوم العالمي للرجل فرصة لتقدير دور الرجال في المجتمع، بينما يمثل منتجع أناله الترفيهي مكانًا ملائمًا للاحتفاء بهذه المناسبة من خلال الأنشطة الترفيهية التي ت�...</p>
                                                        </div>

                                                        <!-- Entry Button -->
                                                        <div class="entry-button wdt-core-button"><a
                                                                href=" {{ route('blog.index') }} "
                                                                title="Why Crop Rotation Is Important?"
                                                                class="wdt-button">اقرأ المزيد<span> <svg
                                                                        xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                                        viewBox="0 0 100 100"
                                                                        style="enable-background:new 0 0 100 100;"
                                                                        xml:space="preserve">
                                                                        <path
                                                                            d="M2.5,55.7c0,0.3,0.2,0.5,0.5,0.5c0.1,0,0.1,0,0.2,0c5.4-2.1,10.9-2.5,15.8-2.6C36.4,90,72.7,69.3,97.5,50 C74.4,32,41.1,12.8,22.7,39.9C45.4,39,70,48.1,70,48.1S17.2,43,2.8,48.8c-0.2,0.1-0.3,0.3-0.3,0.5L2.5,55.7z">
                                                                        </path>
                                                                    </svg>
                                                                </span></a></div><!-- Entry Button -->
                                                    </article>
                                                </div>
                                                <div class=" entry-grid-layout wdt-minimal-style wdt-fadeinleft-hover wdt-default-overlay alignnone column wdt-one-third wdt-post-entry  "
                                                    style="position: absolute; left: 953.224px; top: 0px;">
                                                    <article id="post-16413"
                                                        class="post-16413 post type-post status-publish format-standard has-post-thumbnail hentry category-natural-grass tag-garden-aesthetics blog-entry">


                                                        <!-- Featured Image -->
                                                        <div class="entry-thumb">

                                                            <a href="{{  route('blog.index') }}"
                                                                title="Permalink to The Future Of Soil-Free Gardening"><img
                                                                    loading="lazy" decoding="async" width="1920"
                                                                    height="912"
                                                                    src="./RTL GrassRoot Site – Your SUPER-powered WP Engine Site_files/blog-07.jpg"
                                                                    class="attachment-wdt-blog-iii-column size-wdt-blog-iii-column wp-post-image"
                                                                    alt=""
                                                                    srcset="../img/6522c6d2b2c19_8ffa17d576b2d03e1ff2e9ea86dd6b2cjpg.jpg"
                                                                    sizes="(max-width: 1920px) 100vw, 1920px" style="height: 260px;"></a>
                                                        </div><!-- Featured Image -->
                                                        <!-- Entry Date -->
                                                        <div class="entry-date">
                                                            مارس 7, 2025</div><!-- Entry Date -->
                                                        <!-- Entry Title -->
                                                        <div class="entry-title">
                                                            <h4> <a href="{{  route('blog.index') }}"
                                                                    title="Permalink to The Future Of Soil-Free Gardening">أملج: بوابة الجمال والتاريخ على ساحل البحر الأحمر</a>
                                                            </h4>
                                                        </div><!-- Entry Title -->
                                                        <div class="entry-body">
                                                            <p>أملج: بوابة الجمال والتاريخ على ساحل البحر الأحمر...</p>
                                                        </div>

                                                        <!-- Entry Button -->
                                                        <div class="entry-button wdt-core-button"><a
                                                                href=" {{ route('blog.index') }} "
                                                                title="The Future Of Soil-Free Gardening"
                                                                class="wdt-button">اقرأ المزيد<span> <svg
                                                                        xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                                        viewBox="0 0 100 100"
                                                                        style="enable-background:new 0 0 100 100;"
                                                                        xml:space="preserve">
                                                                        <path
                                                                            d="M2.5,55.7c0,0.3,0.2,0.5,0.5,0.5c0.1,0,0.1,0,0.2,0c5.4-2.1,10.9-2.5,15.8-2.6C36.4,90,72.7,69.3,97.5,50 C74.4,32,41.1,12.8,22.7,39.9C45.4,39,70,48.1,70,48.1S17.2,43,2.8,48.8c-0.2,0.1-0.3,0.3-0.3,0.5L2.5,55.7z">
                                                                        </path>
                                                                    </svg>
                                                                </span></a></div><!-- Entry Button -->
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


            </div>
        </div><!-- ** Container End ** -->
    </div><!-- **Main - End ** -->
@endsection
