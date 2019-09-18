$(function(){
   //add tooltip
   $("[data-toggle='tooltip']").tooltip({'placement': 'top',animation:true});


  //highlight nav , id home, contain anchor tag with id home and find the parent
  $("#home a:contains('Home')").parent().addClass("active");
  $("#artist a:contains('Artists')").parent().addClass("active");
  $("#register a:contains('Register')").parent().addClass("active");
  //$("#privacy a:contains('Home')").parent().addClass("active");
  //$("#about a:contains('Home')").parent().addClass("active");
  $("#schedule a:contains('Schedule')").parent().addClass("active");
  $("#venue a:contains('Venue')").parent().addClass("active");

  $("ul.nav li.dropdown").hover(function(){
     $(".dropdown-menu",this).fadeIn();
  }, function(){ $(".dropdown-menu",this).fadeOut();
  });

  });