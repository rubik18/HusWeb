// //Select all check box for GridView or DataList
// function IsCheckBoxSelected(gridView,topid)
// {
// 	if(gridView != null)
// 	{
// 	    if(topid.checked==true)
// 	    {
// 	         var chkBoxes = gridView.getElementsByTagName("input");
// 	         for(i=0; i<chkBoxes.length; i++)
// 	         {
// 	          if(chkBoxes[i].type == "checkbox" || chkBoxes[i].type == "CHECKBOX")
// 	          {
// 	           chkBoxes[i].checked = true;
// 	          }
// 	         }
// 	    }
// 	    else
// 	    {
// 	        var chkBoxes = gridView.getElementsByTagName("input");
// 	         for(i=0; i<chkBoxes.length; i++)
// 	         {
// 	          if(chkBoxes[i].type == "checkbox" || chkBoxes[i].type == "CHECKBOX")
// 	          {
// 	           chkBoxes[i].checked = false;
// 	          }
// 	         }
// 	    }
// 	}
// }


	
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



