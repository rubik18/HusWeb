$(document).ready(function(){
      $(".btn .btn").click(function(){

       if ($(this).parents(".trum").find(".content1").hasClass("d-none")) {
            
          $(this).parents(".trum").find(".content1").fadeIn();
          $(this).parents(".trum").find(".content1").removeClass("d-none");

          $(this).parents(".trum").siblings().find(".content1").fadeOut();
          $(this).parents(".trum").siblings().find(".content1").addClass("d-none");
        }
        else{
          $(this).parents(".trum").find(".content1").fadeOut();
          $(this).parents(".trum").find(".content1").addClass("d-none");

          $(this).parents(".trum").siblings().find(".content1").addClass("d-none");
        }
      });
    });