jQuery(document).ready(function($){   
        jQuery('input#phone').attr("placeholder", "Ваш телефон...");
        jQuery('input#Name').attr("placeholder", "Ваше имя...");
        jQuery('input#namec').attr("placeholder", "Введите Ваше имя...");
        jQuery('input#phonec').attr("placeholder", "Введите Ваш телефон...");
        jQuery('input#marka').attr("placeholder", "Марка кондиционера...");
        
        
        jQuery('#knpdown').click(function(){  
        jQuery('#slideprice').slideDown(900); 
        jQuery('tr#trknp').addClass('slidepri');  
        jQuery('table#tbknp').removeClass('bordbot');       
        });  
        jQuery('#knpup').click(function(){  
        jQuery('#slideprice').slideUp(900); 
        jQuery('tr#trknp').removeClass('slidepri'); 
        jQuery('table#tbknp').addClass('bordbot'); 
        jQuery("html,body").animate({scrollTop:jQuery('#titprlist').offset().top}, 1000);     
        });  
 });