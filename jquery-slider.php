<?php
/**"customizable jquery slider"
 * Plugin Name: jquery easy custom slider
 * Description: adds jquery custom slider via shortcode
 * version 1.0
 **/
?>

<?php

	function jquery_scripts() {
		wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js');
		wp_enqueue_script('jssor', 'https://cdnjs.cloudflare.com/ajax/libs/jssor-slider/27.3.0/jssor.slider.min.js');
		?>

    <script type="text/javascript">
                 jQuery(document).ready(function ($) {

	                 var jssor_1_options = {
		                 $AutoPlay: 1,
              $SlideWidth: 720,
              $ArrowNavigatorOptions: {
			                 $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
			                 $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 980;

            function ScaleSlider() {
	            var containerElement = jssor_1_slider.$Elmt.parentNode;
	            var containerWidth = containerElement.clientWidth;

	            if (containerWidth) {

		            var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

		            jssor_1_slider.$ScaleWidth(expectedWidth);
	            }
	            else {
		            window.setTimeout(ScaleSlider, 30);
	            }
            }

            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        });
    </script>
    <style>
        /*jssor slider loading skin spin css*/
        .jssorl-009-spin img {
			animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
			from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /*jssor slider bullet skin 051 css*/
        .jssorb051 .i {position:absolute;cursor:pointer;}
        .jssorb051 .i .b {fill:#fff;fill-opacity:0.5;}
			.jssorb051 .i:hover .b {fill-opacity:.7;}
        .jssorb051 .iav .b {fill-opacity: 1;}
        .jssorb051 .i.idn {opacity:.3;}

        /*jssor slider arrow skin 051 css*/
        .jssora094 {display:block;position:absolute;cursor:pointer;}
        .jssora094 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
				.jssora094:hover {opacity:.8;}
        .jssora094.jssora094dn {opacity:.5;}
        .jssora094.jssora094ds {opacity:.3;pointer-events:none;}
    </style>
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
	        <div>
		        <img src="<?php echo plugin_dir_url( __FILE__ ) . 'img/001.jpg'; ?>">"
	        </div>
	        <div>
		        <img src="<?php echo plugin_dir_url( __FILE__ ) . 'img/001.jpg'; ?>">"
	        </div>
	        <div>
		        <img src="<?php echo plugin_dir_url( __FILE__ ) . 'img/001.jpg'; ?>">"
            </div>
            <div>
	            <img src="<?php echo plugin_dir_url( __FILE__ ) . 'img/001.jpg'; ?>">"
            </div>
            <div>
	            <img src="<?php echo plugin_dir_url( __FILE__ ) . 'img/001.jpg'; ?>">"
            </div>
            <div>
	            <img src="<?php echo plugin_dir_url( __FILE__ ) . 'img/001.jpg'; ?>">"
            </div>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb051" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:16px;height:16px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora094" style="width:65px;height:65px;top:0px;left:35px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora094" style="width:65px;height:65px;top:0px;right:35px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
            </svg>
        </div>
    </div>
    <!-- #endregion Jssor Slider End -->
	<?php } ?>
	<?php
		add_shortcode('jquery-slider', 'jquery_scripts');
		?>



