
		$(document).ready(function(){
      $(".btn").click(function(){

       if ($(this).parents(".trum").find(".content").hasClass("d-none")) {
            
          $(this).parents(".trum").find(".content").fadeIn();
          $(this).parents(".trum").find(".content").removeClass("d-none");

          $(this).parents(".trum").siblings().find(".content").fadeOut();
          $(this).parents(".trum").siblings().find(".content").addClass("d-none");
        }
        else{
          $(this).parents(".trum").find(".content").fadeOut();
          $(this).parents(".trum").find(".content").addClass("d-none");

          $(this).parents(".trum").siblings().find(".content").addClass("d-none");
        }
      });
    });


