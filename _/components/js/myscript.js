$(function(){
   //add tooltip
   $("[data-toggle='tooltip']").tooltip({'placement': 'top',animation:true});
    //show-modals
   $(".modalphotos img").click(function(){
      $("#modal").modal({
         show:true,
      })
      var mysrc=this.src.substr(0,this.src.length-7)+".jpg";
      $('#modalimage').attr("src",mysrc);
   });
  //hide-modals
   $("#modalimage").click(function(){
      $(".modal").modal("hide")
   });


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