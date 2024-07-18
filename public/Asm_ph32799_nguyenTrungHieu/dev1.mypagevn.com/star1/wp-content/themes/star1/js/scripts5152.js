jQuery(document).ready(function(){
	jQuery('.search_toggle').click(function(){
		jQuery(this).parent().find('.search_form_header').slideToggle('fast');
	});

  jQuery('.next_prev_wrap .forward').click(function(){
    if(jQuery(this).hasClass('disable')){
      return false;
    }
    bt = jQuery(this);
    elm = jQuery(this).parent().parent();
    number = elm.attr('number');
    template = elm.attr('template');
    var id = elm.attr('filter');
    var offset = parseInt(elm.attr('offset'))+parseInt(number);
    load_post_ajax(id, offset, number, template, elm, bt);
    return false;
  });

  jQuery('.next_prev_wrap .rewind').click(function(){
    if(jQuery(this).hasClass('disable')){
      return false;
    }
    bt = jQuery(this);
    elm = jQuery(this).parent().parent();
    number = elm.attr('number');
    template = elm.attr('template');
    var id = elm.attr('filter');
    var offset = elm.attr('offset')-number;
    load_post_ajax(id, offset, number, template, elm, bt);
    return false;
  });

  jQuery('header.section-header ul li a').click(function(){
    if(jQuery(this).hasClass('active')){
      return false;
    }
    jQuery(this).parent().parent().find('a').removeClass('active');
    jQuery(this).addClass('active');
    new_id = jQuery(this).attr('filter');
    elm = jQuery(this).parent().parent().parent().parent();
    bt = elm.find('.forward');
    elm.attr('filter',new_id);
    number = elm.attr('number');
    template = elm.attr('template');
    var id = new_id;
    var offset = 0;
    load_post_ajax(id, offset, number, template, elm, bt);
    return false;
  });

  jQuery('#mobile_nav > ul > li.menu-item-has-children').append('<div class="menu_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>');
  jQuery('#mobile_nav > ul > li.menu-item-has-children .menu_arrow').click(function(){
    li = jQuery(this).parent();
    li.toggleClass('active');
    li.find('ul').slideToggle('fast');

  });

  jQuery('.mobile_menu_toggle, #mobile_nav .close').click(function(){
    jQuery('#mobile_nav').toggleClass('active');
  });

function load_post_ajax(id, offset, number, template, elm, bt){
  jQuery.ajax({
      type: 'POST',
      url: ajax_url_custom.ajax_url,
      data:{
        'action': 'load_post_ajax',
        'id': id,
        'offset': offset,
        'number': number,
        'template': template,
      },
      beforeSend: function(){
        elm.find('.post_loading').css('display','block');
      },
      success: function(data){
        elm.find('.post_loading').css('display','none');
        if(data.length){
          elm.find('.article-list').html('');
          elm.find('.article-list').append(data);
          elm.attr('offset',offset);
          if(offset==0){
            bt.parent().find('.rewind').addClass('disable');
          }else{
            bt.parent().find('.rewind').removeClass('disable');
          }
          bt.parent().find('.forward').removeClass('disable');
        }else{
          bt.parent().find('.forward').addClass('disable');
        }
      },
      error: function(errorThrown) {

            }
    });
  }

  jQuery('.toggle_submenu_cate').click(function(){
    jQuery(this).toggleClass('active');
    jQuery(this).parent().children('ul').slideToggle('fast');
  })

  if(jQuery(window).width()<= 767){
    margin_header();
  }

  var swiper = new Swiper('.swiper-container.slider', {
      slidesPerView: 'auto',
      spaceBetween: 20,
      slidesPerGroup: 2,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });

  var swiper_big = new Swiper('.swiper-container.big_slider', {
      slidesPerView: 2,
      spaceBetween: 20,
      slidesPerGroup: 2,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });

});


jQuery(window).resize(function(){
  if(jQuery(window).width()<= 767){
    margin_header();
  } else{
    margin_header_reset();
  }
});


function margin_header(){
    height_header_banner = jQuery('.header_banner').height();
    jQuery('header#masthead').css('margin-bottom',height_header_banner);
}
function margin_header_reset(){
    height_header_banner = jQuery('.header_banner').height();
    jQuery('header#masthead').css('margin-bottom',0);
}