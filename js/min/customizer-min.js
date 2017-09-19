jQuery(window).load(function (){
	( function( $ ) {

		//Scroll to section
		$('body').on('click', '#accordion-panel-gcwoo_front_page_sections .control-subsection .accordion-section-title', function(event) {
			if ( !$(this).parent('.control-subsection').hasClass('open') ) {
				return false;
			};
			var section_id = $(this).parent('.control-subsection').attr('id');
			scrollToSection( section_id );
			
		});

		function scrollToSection( section_id ){
			var section_class = "welcome-section";
			var $contents = $('#customize-preview iframe').contents();
			switch ( section_id ) {
				case 'accordion-section-welcome':
			        section_class = "welcome-section";
			        break;
				case 'accordion-section-services':
			        section_class = "services-section";
			        break;
			    case 'accordion-section-gcwoo_quote_section':
			        section_class = "quote-section";
			        break;
			    case 'accordion-section-gcwoo_video_section':
			        section_class = "video-section";
			        break;
			    case 'accordion-section-gcwoo_testimonials_section':
			        section_class = "testimonials-section";
			        break;
			    case 'accordion-section-gcwoo_image_section':
			        section_class = "image-section";
			        break;
			    case 'accordion-section-gcwoo_team_section':
			        section_class = "team-section";
			        break;
			    case 'accordion-section-gcwoo_phone_section':
			        section_class = "phone-section";
			        break;
			    case 'accordion-section-gcwoo_tagline_section':
			        section_class = "tagline-section";
			        break;
			    case 'accordion-section-gcwoo_clients_section':
			        section_class = "clients-section";
			        break;
			    case 'accordion-section-gcwoo_map_section':
			        section_class = "map-section";
			        break;
			    case 'accordion-section-gcwoo_pricing_section':
			        section_class = "pricing-section";
			        break;
			    case 'accordion-section-gcwoo_portfolio_section':
			        section_class = "portfolio-section";
			        break;
			    case 'accordion-section-gcwoo_blog_section':
			        section_class = "blog-section";
			        break;
			}
			$contents.find("html, body").animate({
		    	scrollTop: $contents.find( "." + section_class ).offset().top - 30
		    }, 1000);

		}

		//console.log("a");
		//console.log( wp.customize.control( 'gcwoo_quote' ).section() );
		


		/*
		 * Links to different sections in the Customizer
		 * Just create a link like this: <a href="#" data-section="section-id">link</a>
		 */
		$('body').on('click', 'a[data-section]', function(event) {
			wp.customize.section( $(this).attr( 'data-section' ) ).focus();
		});

	} )( jQuery );
});

