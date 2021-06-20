 
 					setREVStartSize({c: 'rev_slider_1_2',rl:[1240,1024,778,480],el:[500,768,960,520],gw:[1170,1024,778,480],gh:[500,768,960,520],type:'standard',justify:'',layout:'fullscreen',offsetContainer:'',offset:'',mh:"0"});
					var	revapi1,
						tpj;
					function revinit_revslider12() {
					jQuery(function() {
						tpj = jQuery;
						revapi1 = tpj("#rev_slider_1_2");
						tpj.noConflict();
						if(revapi1==undefined || revapi1.revolution == undefined){
							revslider_showDoubleJqueryError("rev_slider_1_2");
						}else{
							revapi1.revolution({
								sliderLayout:"fullscreen",
								duration:6000,
								visibilityLevels:"1240,1024,778,480",
								gridwidth:"1170,1024,778,480",
								gridheight:"500,768,960,520",
								perspectiveType:"local",
								editorheight:"500,768,960,520",
								responsiveLevels:"1240,1024,778,480",
								progressBar:{disableProgressBar:true},
								navigation: {
									mouseScrollNavigation:false,
									touch: {
										touchenabled:true
									},
									arrows: {
										enable:true,
										style:"hesperiden",
										hide_onmobile:true,
										hide_under:"678px",
										hide_onleave:true,
										left: {

										},
										right: {

										}
									},
									bullets: {
										enable:true,
										tmp:"<span class=\"tp-bullet-image\"></span>",
										style:"hebe"
									}
								},
								fallbacks: {
									allowHTML5AutoPlayOnAndroid:true
								},
							});
						}
						
					});
					} // End of RevInitScript
				var once_revslider12 = false;
				if (document.readyState === "loading") {document.addEventListener('readystatechange',function() { if((document.readyState === "interactive" || document.readyState === "complete") && !once_revslider12 ) { once_revslider12 = true; revinit_revslider12();}});} else {once_revslider12 = true; revinit_revslider12();}
				 
				
	
					var htmlDivCss = unescape("%23rev_slider_1_2_wrapper%20.hesperiden.tparrows%20%7B%0A%09cursor%3Apointer%3B%0A%09background%3Argba%280%2C0%2C0%2C0.5%29%3B%0A%09width%3A40px%3B%0A%09height%3A40px%3B%0A%09position%3Aabsolute%3B%0A%09display%3Ablock%3B%0A%09z-index%3A1000%3B%0A%20%20%20%20border-radius%3A%2050%25%3B%0A%7D%0A%23rev_slider_1_2_wrapper%20.hesperiden.tparrows%3Ahover%20%7B%0A%09background%3A%23000000%3B%0A%7D%0A%23rev_slider_1_2_wrapper%20.hesperiden.tparrows%3Abefore%20%7B%0A%09font-family%3A%20%27revicons%27%3B%0A%09font-size%3A20px%3B%0A%09color%3A%23ffffff%3B%0A%09display%3Ablock%3B%0A%09line-height%3A%2040px%3B%0A%09text-align%3A%20center%3B%0A%7D%0A%23rev_slider_1_2_wrapper%20.hesperiden.tparrows.tp-leftarrow%3Abefore%20%7B%0A%09content%3A%20%27%5Ce82c%27%3B%0A%20%20%20%20margin-left%3A-3px%3B%0A%7D%0A%23rev_slider_1_2_wrapper%20.hesperiden.tparrows.tp-rightarrow%3Abefore%20%7B%0A%09content%3A%20%27%5Ce82d%27%3B%0A%20%20%20%20margin-right%3A-3px%3B%0A%7D%0A%0A%23rev_slider_1_2_wrapper%20.hebe.tp-bullets%3Abefore%20%7B%0A%20%20content%3A%27%20%27%3B%0A%20%20position%3Aabsolute%3B%0A%20%20width%3A100%25%3B%0A%20%20height%3A100%25%3B%0A%20%20background%3Atransparent%3B%0A%20%20padding%3A10px%3B%0A%20%20margin-left%3A-10px%3Bmargin-top%3A-10px%3B%0A%20%20box-sizing%3Acontent-box%3B%0A%7D%0A%0A%23rev_slider_1_2_wrapper%20.hebe%20.tp-bullet%20%7B%0A%20%20width%3A3px%3B%0A%20%20height%3A3px%3B%0A%20%20position%3Aabsolute%3B%0A%20%20background%3A%23ffffff%3B%20%20%0A%20%20cursor%3A%20pointer%3B%0A%20%20border%3A5px%20solid%20%23000000%3B%0A%20%20border-radius%3A50%25%3B%0A%20%20box-sizing%3Acontent-box%3B%0A%20%20-webkit-perspective%3A400%3B%0A%20%20perspective%3A400%3B%0A%20%20-webkit-transform%3Atranslatez%280.01px%29%3B%0A%20%20transform%3Atranslatez%280.01px%29%3B%0A%20%20%20transition%3Aall%200.3s%3B%0A%7D%0A%23rev_slider_1_2_wrapper%20.hebe%20.tp-bullet%3Ahover%2C%0A%23rev_slider_1_2_wrapper%20.hebe%20.tp-bullet.selected%20%7B%0A%20%20background%3A%23000000%3B%0A%20%20border-color%3A%23ffffff%3B%0A%7D%0A%0A%23rev_slider_1_2_wrapper%20.hebe%20.tp-bullet-image%20%7B%0A%20%20position%3Aabsolute%3B%0A%20%20width%3A70px%3B%0A%20%20height%3A70px%3B%0A%20%20background-position%3Acenter%20center%3B%0A%20%20background-size%3Acover%3B%0A%20%20visibility%3Ahidden%3B%0A%20%20opacity%3A0%3B%0A%20%20bottom%3A3px%3B%0A%20%20transition%3Aall%200.3s%3B%0A%20%20-webkit-transform-style%3Aflat%3B%0A%20%20transform-style%3Aflat%3B%0A%20%20perspective%3A600%3B%0A%20%20-webkit-perspective%3A600%3B%0A%20%20transform%3A%20scale%280%29%20translateX%28-50%25%29%20translateY%280%25%29%3B%0A%20%20-webkit-transform%3A%20scale%280%29%20translateX%28-50%25%29%20translateY%280%25%29%3B%0A%20%20transform-origin%3A0%25%20100%25%3B%0A%20%20-webkit-transform-origin%3A0%25%20100%25%3B%0A%20%20margin-bottom%3A15px%3B%0A%20border-radius%3A6px%3B%0A%7D%0A%23rev_slider_1_2_wrapper%20.hebe%20.tp-bullet%3Ahover%20.tp-bullet-image%20%7B%0A%20%20display%3Ablock%3B%0A%20%20opacity%3A1%3B%0A%20%20transform%3A%20scale%281%29%20translateX%28-50%25%29%20translateY%280%25%29%3B%0A%20%20-webkit-transform%3A%20scale%281%29%20translateX%28-50%25%29%20translateY%280%25%29%3B%0A%20%20visibility%3Avisible%3B%0A%7D%0A%0A%0A%2F%2A%20VERTICAL%20%2A%2F%0A%0A%23rev_slider_1_2_wrapper%20.hebe.nav-dir-vertical%20.tp-bullet-image%20%7B%0A%20%20bottom%3Aauto%3B%0A%20%20margin-right%3A15px%3B%0A%20%20margin-bottom%3A0px%3B%0A%20%20right%3A3px%3B%0A%20%20transform%3A%20scale%280%29%20translateX%280px%29%20translateY%28-50%25%29%3B%0A%20%20-webkit-transform%3A%20scale%280%29%20translateX%280px%29%20translateY%28-50%25%29%3B%0A%20%20transform-origin%3A100%25%200%25%3B%0A%20%20-webkit-transform-origin%3A100%25%200%25%3B%0A%7D%0A%0A%23rev_slider_1_2_wrapper%20.hebe.nav-dir-vertical%20.tp-bullet%3Ahover%20.tp-bullet-image%20%7B%0A%20%20transform%3A%20scale%281%29%20translateX%280px%29%20translateY%28-50%25%29%3B%0A%20%20-webkit-transform%3A%20scale%281%29%20translateX%280px%29%20translateY%28-50%25%29%3B%0A%7D%0A%0A%2F%2A%20VERTICAL%20LEFT%20%2A%2F%0A%0A%23rev_slider_1_2_wrapper%20.hebe.nav-dir-vertical.nav-pos-hor-left%20.tp-bullet-image%20%7B%0A%20%20bottom%3Aauto%3B%0A%20%20margin-left%3A15px%3B%0A%20%20margin-bottom%3A0px%3B%0A%20%20left%3A3px%3B%0A%20%20transform%3A%20scale%280%29%20translateX%280px%29%20translateY%28-50%25%29%3B%0A%20%20-webkit-transform%3A%20scale%280%29%20translateX%280px%29%20translateY%28-50%25%29%3B%0A%20%20transform-origin%3A0%25%200%25%3B%0A%20%20-webkit-transform-origin%3A0%25%200%25%3B%0A%7D%0A%0A%23rev_slider_1_2_wrapper%20.hebe.nav-dir-vertical.nav-pos-hor-left%20.tp-bullet%3Ahover%20.tp-bullet-image%20%7B%0A%20%20transform%3A%20scale%281%29%20translateX%280px%29%20translateY%28-50%25%29%3B%0A%20%20-webkit-transform%3A%20scale%281%29%20translateX%280px%29%20translateY%28-50%25%29%3B%0A%7D%0A%0A%2F%2A%20HORIZONTAL%20TOP%20%2A%2F%0A%23rev_slider_1_2_wrapper%20.hebe.nav-pos-ver-top.nav-dir-horizontal%20.tp-bullet-image%20%7B%0A%20%20bottom%3Aauto%3B%0A%20%20top%3A3px%3B%0A%20%20transform%3A%20scale%280%29%20translateX%28-50%25%29%20translateY%280%25%29%3B%0A%20%20-webkit-transform%3A%20scale%280%29%20translateX%28-50%25%29%20translateY%280%25%29%3B%0A%20%20transform-origin%3A0%25%200%25%3B%0A%20%20-webkit-transform-origin%3A0%25%200%25%3B%0A%20%20margin-top%3A15px%3B%0A%20%20margin-bottom%3A0px%3B%20%20%0A%7D%0A%23rev_slider_1_2_wrapper%20.hebe.nav-pos-ver-top.nav-dir-horizontal%20.tp-bullet%3Ahover%20.tp-bullet-image%20%7B%0A%20%20transform%3A%20scale%281%29%20translateX%28-50%25%29%20translateY%280%25%29%3B%0A%20%20-webkit-transform%3A%20scale%281%29%20translateX%28-50%25%29%20translateY%280%25%29%3B%0A%7D%0A");
					var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
					if(htmlDiv) {
						htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
					}else{
						var htmlDiv = document.createElement('div');
						htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
						document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
					}
			 
			 	 
					var htmlDivCss = unescape("%0A%0A%0A%0A%0A%0A");
					var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
					if(htmlDiv) {
						htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
					}else{
						var htmlDiv = document.createElement('div');
						htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
						document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
					}
 	
	
		