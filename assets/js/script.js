var pages = {
  '#!home' : {id: '#home'},
  '#!article' : {id: '#article_link'},
  '#!gallery' : {id: '#gallery_link'},
  '#!event' : {id: '#event_link'},
};

function getContent(fragment){
  fragment = fragment.slice(1).replace('!', '');
  var url = site_url+fragment;
  $('#page_content').fadeOut('slow', function(){
    $('#middle').append('<div id="loadingContent"></div>');
    $('#page_content').load(url, function(response, status, xhr){
      $('#loadingContent').remove();
      $('#page_content').fadeIn('slow');
      load_jquery();
    });
  });
}

function getContent_gallery(fragment){
  fragment = fragment.slice(1).replace('!', '');
  var url = site_url+fragment;
  $('.list_gallery').fadeOut('slow', function(){
    $('.gallery_page').append('<div id="loadingContent" style="top: 52%;left: 30%;"></div>');
    $('.list_gallery').load(url+'/category_loader', function(response, status, xhr){
      $('#loadingContent').remove();
      $('.list_gallery').fadeIn('slow');
      load_jquery();
    });
   });
}

function load_content(id_link){
    fragment = $(id_link).attr('href').substring(url_length);
    var fragment_arr = new Array();
    fragment_arr = fragment.split('/');

    if(id_link == '#home'){
      jQuery('.selected', $('#main_menu')).attr('class', '');
      getContent(fragment);
    }else{
      if(pages[fragment_arr[0]] != undefined){
        var A = $(pages[fragment_arr[0]].id);
        jQuery('.selected', A.parents('#main_menu')).attr('class', '');
        A.attr('class', 'selected'); 
        getContent(fragment);
      }    
    }
  }

function load_first(){
  var fragment = window.location.hash;
      
  if (fragment){
    var fragment_arr = new Array();
    fragment_arr = fragment.split('/');

    if(pages[fragment_arr[0]] != undefined){
      var A = $(pages[fragment_arr[0]].id);
      jQuery('.selected', A.parents('#main_menu')).attr('class', '');
      A.attr('class', 'selected');  
    }

    getContent(fragment);
  }else{
    jQuery('.selected', $('#main_menu')).attr('class', '');
    getContent('#!home');
  }    
}

$(document).ready(function(){
    var initpopstate = false;
    window.addEventListener('popstate', function (e){
      if(!('state' in window.history) && !initpopstate){
        initpopstate = true; 
        return;
      }
      load_first();          
    });

  load_first();
  load_jquery();

  $('#main_menu a').click(function(){
    var A = $(this);
    jQuery('.selected', A.parents('#main_menu')).attr('class', '');
    A.attr('class', 'selected');
    fragment = this.hash;
    getContent(fragment);
  });  

});