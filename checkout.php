<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Roorkee Delivers</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="style.css" />
	<script type="text/javascript" src="rkdl.js"></script>

  <script type='text/javascript' src='jquery.js'></script>
  <link rel="stylesheet" href="jquery-ui-1.10.3.custom/css/redmond/jquery-ui-1.10.3.custom.min.css">
  <script type='text/javascript' src='jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.min.js'></script>


<!--
<link rel='prev' title='Contact Us' href='http://www.fortyonetwenty.com/contact-us/' />
<link rel='next' title='Aerial' href='http://www.fortyonetwenty.com/aerial/' />
-->

<link rel='canonical' href='checkout.php' />

<style type="text/css">

.fve-video-wrapper {
	position: relative;
	overflow: hidden;
	height: 0;
	padding-bottom: 56.25%;
	margin: 0.5em 0;
}

.fve-video-wrapper iframe,  
.fve-video-wrapper object,  
.fve-video-wrapper embed {
	position: absolute;
	display: block;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}
#center-images img{
  max-width: 800px;
}
#menu-item-21 img {
  max-width: 100%;
}
span.work-section {
  padding-bottom: 80px;
}
</style>

	<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>

	<style>
		#logo h1 a {
			background: transparent url(content/uploads/2012/10/4120_logo.png) no-repeat center center;
			width: 112px;
			height: 112px;
		}

		#mainNav ul a {
			line-height: 112px;
		}
		#mainNav li.nav-logo a {
			width: 112px;
			height: 112px;
		}
	</style>

	
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<link rel="stylesheet" href="content/themes/rkdl/css/ie8.css" />
	<script src="content/themes/rkdl/js/plugins/swipe_ie.js"></script>
  <script src="content/themes/rkdl/js/ie.js"></script>
	<![endif]-->
	
	

</head>

<body class="home page page-id-19 page-template page-template-page-home-php" >

<div class="full-width header">
	<header class="container">
		<nav class="site-nav">
			<ul id="menu-main-navigation" class="desktop"><li id="menu-item-17" class="work menu-item menu-item-type-post_type menu-item-object-page menu-item-17"><a href="ordernow.php" >Order Now</a></li>
        <li id="menu-item-14" class="about menu-item menu-item-type-post_type menu-item-object-page menu-item-14"><a href="#" >About Us</a></li>
        <li id="menu-item-21" class="menu-item menu-item-type-post_type menu-item-object-page page_item page-item-19 current_page_item menu-item-21"><a href="#" >Home</a></li>
        <li id="menu-item-15" class="blog menu-item menu-item-type-post_type menu-item-object-page menu-item-15"><a href="#" >Login/Register</a></li>
        <li id="menu-item-16" class="contact menu-item menu-item-type-post_type menu-item-object-page menu-item-16"><a href="#" >Contact Us</a></li>
      </ul>

      <ul id="menu-main-navigation-1" class="mobile clearfix"><li class="work menu-item menu-item-type-post_type menu-item-object-page menu-item-17"><a href="#" >Our Work</a></li>
        <li class="about menu-item menu-item-type-post_type menu-item-object-page menu-item-14"><a href="#" >About Us</a></li>
        <li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-19 current_page_item menu-item-21"><a href="#" >Home</a></li>
        <li class="blog menu-item menu-item-type-post_type menu-item-object-page menu-item-15"><a href="#" >Blog</a></li>
        <li class="contact menu-item menu-item-type-post_type menu-item-object-page menu-item-16"><a href="#" >Contact Us</a></li>
      </ul>
    </nav>
	</header>
    <div class="social">
      <ul>
        <li title="Follow us on Twitter"><a class="twitter" href="#" target="_blank"></a></li>
        <li title="Like us on Facebook"><a class="facebook" href="#" target="_blank"></a></li>
      </ul>
    </div>
</div>

<div class="full-width flush-bottom" id="cart_items_description">
	<div class="container clearfix">
    <div id="urcart">
    <p>Your cart contains following items:</p>
    <table>
    <tr><td>Image</td>
    <td>Name</td>
    <td>Quantity</td>
    <td></td>
    </tr>
    <?php foreach($_SESSION['basket'] as $i){
		if(is_int($i)) continue;
	
		echo '<tr><td><p><img src="products_images/'.$i['name'].'.jpg" width="50px" height="50px"></td><td>'.$i['name'].'</td><td>'.'<input type="number" min = "1" size="10" value="'.$i['count'].'"?</td><td><input type="hidden" class ="hiddenDelete" title="'.$i['name'].'"><button></button></td></tr>';
	}
?>
<script> 
$("table tr td button").css({
			"background-image":"url(images/delete.png)",
			"width":"45px",
			"height":"45px",
			"color":"#fff",
			"background-color":"rgba(256,256,256,0)",
			"border":"none"
		});
;
$("table tr td button").click(function(){
	var name = $(this).parent().find(".hiddenDelete").attr('title');
	$.post("update_cart.php",{itemName:name},function(){
	});
	$(this).parent().parent().remove();
	if($("table tr").find(".hiddenDelete")==-1){
		$("#urcart").remove();
	}
});
          </script>
        </table>
	  </div>
      <br/>
<button class="red_button">Shop More</button>

<button class="red_button" id="checkout_button">Checkout!</button> 

   
	</div>
</div>
    

<div class="full-width red" id="formfield">
  <div class="container">
              
              <blockquote id="formBlock"> Please fill the following information to proceed:-<br/>
                          <form method="post" action="complete_order.php">
                          <table>
                          <tr><td>
                          <input type="text" title="name" name="name" class="input_field" placeholder="Name" required><br/>
                          </td>
                          </tr>
                          <tr>
                          <td>
                          <input type="email" title="email" name="email" class="input_field" placeholder="Email">
                          </td>
                     
                          <td>
                          <input type="tel" pattern="/^d{10}$/" name="phoneno" placeholder="Phone No." required>
                          </td>
                          </tr>
                          <tr>
                          <td>
                          <input type="text" name="address" placeholder="Address" required/>
                          </td>
                          </tr>
                          <tr>
                          <td>
                          <input id="captchaField" type="text" name="captcha" placeholder="Enter the image text here">
                          </td>
                          <td id="captcharow">
                          <img id="captcha" src="captcha.php" alt="verification"/>		
                          </td>
                          <td>
                          <img src="images/dress.png" id="refreshCaptcha">Refresh Captcha</button>
                          </td>
                          </tr>

                          </table>
                          <div id="captchaError">Wrong Captcha. Fill the Captcha correctly to click Submit button</div>
                          <button disabled formaction="completeorder.php" class="red_button" id="submitButton" type="submit">Submit</button>
                          </form>
                          <script>
						  $("#formfield").toggle();
						  
						  $("#refreshCaptcha").css({
							  "cursor":"pointer"});
						  $("#refreshCaptcha").click(function(){
							  $("#captcha").remove();
							 var img= $('<img id="captcha" src="captcha.php" alt="verification">');
							 $("#captcharow").append(img);

							  
						  });
						  $("#checkout_button").click(function(){
						  $("#formfield").toggle();
						  $("#cart_items_description").toggle();});
						  </script>
                          <script>
						  $("#captchaField").blur(function(){
							 
							  var value= $(this).val();
							  $.post("update_cart.php",{value:value},function(data){
								  
								if(data==1){
									
									  $("#submitButton").attr("disabled",false);
									  
									  alert("yes");
								  } else {
									  	$("#captchaError").dialog({
			  title:'Error',
			  buttons: { "OK": function() { $(this).dialog("close"); 
										  }
						}
				   });

							$("#captcha").remove();
							 var img= $('<img id="captcha" src="captcha.php" alt="verification">');
							 $("#captcharow").append(img);


									  
								  }
									  
							  
							  });});
						  </script>    
			  
          
      </div>
    </div>
  </div>
</div>

</div>

                <iframe style='display:none;width:0px; height:0px;' src='about:blank' name='gform_ajax_frame_1' id='gform_ajax_frame_1'></iframe>

                <script type='text/javascript'>function gformInitSpinner_1(){jQuery('#gform_1').submit(function(){if(jQuery('#gform_ajax_spinner_1').length == 0){jQuery('#gform_submit_button_1').attr('disabled', true).after('<' + 'img id="gform_ajax_spinner_1"  class="gform_ajax_spinner" src="http://www.fortyonetwenty.com/content/plugins/gravityforms/images/spinner.gif" alt="" />');jQuery('#gform_wrapper_1 .gform_previous_button').attr('disabled', true); jQuery('#gform_wrapper_1 .gform_next_button, #gform_wrapper_1 .gform_image_button').attr('disabled', true).after('<' + 'img id="gform_ajax_spinner_1"  class="gform_ajax_spinner" src="http://www.fortyonetwenty.com/content/plugins/gravityforms/images/spinner.gif" alt="" />');}} );}jQuery(document).ready(function($){gformInitSpinner_1();jQuery('#gform_ajax_frame_1').load( function(){var contents = jQuery(this).contents().find('*').html();var is_postback = contents.indexOf('GF_AJAX_POSTBACK') >= 0;if(!is_postback){return;}var form_content = jQuery(this).contents().find('#gform_wrapper_1');var is_redirect = contents.indexOf('gformRedirect(){') >= 0;jQuery('#gform_submit_button_1').removeAttr('disabled');var is_form = !(form_content.length <= 0 || is_redirect);if(is_form){jQuery('#gform_wrapper_1').html(form_content.html());jQuery(document).scrollTop(jQuery('#gform_wrapper_1').offset().top);if(window['gformInitDatepicker']) {gformInitDatepicker();}if(window['gformInitPriceFields']) {gformInitPriceFields();}var current_page = jQuery('#gform_source_page_number_1').val();gformInitSpinner_1();jQuery(document).trigger('gform_page_loaded', [1, current_page]);}else if(!is_redirect){var confirmation_content = jQuery(this).contents().find('#gforms_confirmation_message').html();if(!confirmation_content){confirmation_content = contents;}setTimeout(function(){jQuery('#gform_wrapper_1').replaceWith('<' + 'div id=\'gforms_confirmation_message\' class=\'gform_confirmation_message_1\'' + '>' + confirmation_content + '<' + '/div' + '>');jQuery(document).scrollTop(jQuery('#gforms_confirmation_message').offset().top);jQuery(document).trigger('gform_confirmation_loaded', [1]);}, 50);}else{jQuery('#gform_1').append(contents);if(window['gformRedirect']) {gformRedirect();}}jQuery(document).trigger('gform_post_render', [1, current_page]);} );} );</script><script type='text/javascript'> jQuery(document).ready(function(){jQuery(document).trigger('gform_post_render', [1, 1]) } ); </script>      <script>
      <!--
      jQuery(function($){
        $('.mini-contact .gfield input, .mini-contact .gfield_error input').live('focus',function(){
          console.log('focus');
          $(this).parent().parent().find('label').fadeOut('fast');
        }).live('blur',function(){
          if ($(this).val() == '' || $(this).val() == ' '){
            $(this).parent().parent().find('label').fadeIn('fast');
          }
        });
      });
      -->
      </script>
    </div>
  </div>
</div>
<div class="full-width dark-grey flat footer">
  <div class="container">
    <div class="footer-foot">
      <div class="info">
        <p><span>Roorkee Delivers, Roorkee, Uttarakhand, India</span></p>
        <p>© Copyright 2013 Roorkee Delivers. All Rights Reserved.</p>
      </div>
      <div class="footer-icons">
        <ul>
          <li><a class="video-icon" href="#"></a></li>
          <li>|</li>
          <li><a class="wedding-icon" href="#"></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<script>
$(document).tooltip({
	  items:'.social ul li',
	  show:500,
	  show:'',
	  hide:500}); 
</script>

</body>
</html>
