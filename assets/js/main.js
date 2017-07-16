function setupPageDimensions() {
  var window_width = new Number();
  
  var page_width = new Number();
  
  window_width = $(window).width();
  
  if (window_width === 320)  {
    page_width = 320;
  } else {
    if (window_width > 320 && window_width <= 360) {
      page_width = 360;
    } else {
      if (window_width > 360 && window_width <= 375)  {
        page_width = 375;
      } else {
        if (window_width > 375 && window_width <= 414)  {
          page_width = 414;
        } else {
          if (window_width > 414 && window_width <= 768) {
            page_width = 768;
          } else {
            if (window_width > 768 && window_width <= 1200) {
              page_width = 1024;
            } else  {
              if (window_width > 1200)  {
                page_width = 1280;
              }
            }
          }
        }
      }
    }
  }

  return page_width;
}

function activateMobileMenu() {
  var menu_nav_on_css = new Object();
  var menu_nav_sm_on_css = new Object();
  var menu_nav_lg_on_css = new Object();
  var menu_on_css = new Object();
  var menu_li_on_css = new Object();
  var menu_a_on_css = new Object();
  var bkgrnd_on_css = new Object();

  var menu_nav_base_css = new Object();
  var menu_nav_base_sm_css = new Object();
  var menu_nav_base_lg_css = new Object();
  var menu_base_css = new Object();
  var menu_li_base_css = new Object();
  var menu_a_base_css = new Object();
  var bkgrnd_base_css = new Object();

  var menu_mobile_button_on_html = new String();
  var menu_mobile_button_base_html = new String();
  var support_at_html = new String();

  var page_dimensions = new Number();

  menu_nav_sm_on_css = {
    height: "16.75em"
  };

  menu_nav_lg_on_css = {
    height: "19.25em"
  };

  menu_on_css = {
    display: "block", 
    width: "20em"
  };

  menu_li_on_css = {
    display: "block",
    margin: "0.75em auto"
  };

  menu_a_on_css = {
    textAlign: "left"
  };

  bkgrnd_on_css = {
    marginTop: "10.5em"
  };

  menu_nav_base_sm_css = {
    height: "1.9em"
  };

  menu_nav_base_lg_css = {
    height: "3.1em"
  };

  menu_base_css = {
    display: "none", 
    width: "61.5em"
  };

  menu_li_base_css = {
    display: "inline-block",
    margin: "0"
  };

  menu_a_base_css = {
    textAlign: "center"
  };

  bkgrnd_base_css = {
    marginTop: "1.9em"
  };


  menu_mobile_button_base_html = "<div id=\"menu-mobile_button\"><a href=\"#nav\" title=\"Touch to show menu\">Touch to show menu</a></div>";
  menu_mobile_button_on_html = "<div id=\"menu-mobile_button\"><a href=\"#nav\" title=\"Touch to hide menu\">Touch to hide menu</a></div>";
  
  page_dimensions = setupPageDimensions();

  if (page_dimensions <= 414)  {
    menu_nav_on_css = menu_nav_sm_on_css;
    menu_nav_base_css = menu_nav_base_sm_css;
  } else {
    menu_nav_on_css = menu_nav_lg_on_css;
    menu_nav_base_css = menu_nav_base_lg_css;
  }

  if ($("#menu").css("display") === "none") {
    $(".menu-nav").css(menu_nav_on_css);
    $("#menu").css(menu_on_css);
    $("#menu > li").css(menu_li_on_css);
    $("#menu > li > a").css(menu_a_on_css);
    $("#bkgrnd").css(bkgrnd_on_css);

    $("#menu-mobile_button").html(menu_mobile_button_on_html);
  } else {
    $(".menu-nav").css(menu_nav_base_css);
    $("#menu").css(menu_base_css);
    $("#menu > li").css(menu_li_base_css);
    $("#menu > li > a").css(menu_a_base_css);
    $("#bkgrnd").css(bkgrnd_base_css);

    $("#menu-mobile_button").html(menu_mobile_button_base_html);
  }


}
function renderPage() {
  var img_src = new String();
  var img_width = new String();
  var img_splash_height = new String();
  var img_about_at_height = new String();

  var menu_html = new String();
  var social_media_html = new String();

  var page_width = new Number();
  
  var social_media_links_Array = new Array();


  page_width = setupPageDimensions();
  
  menu_html = "<div id=\"menu-mobile_button\"><a href=\"#nav\" title=\"Touch to show menu\">Touch to show menu</a></div>";
  social_media_html = "<h6>Touch the icons to view the social media</h6>";
  support_at_html = "<li id=\"menu-item-bttn\"><input type=\"button\" value=\"Support Around Town\" id=\"bttn-support_at-mobile\"></li>";

  $(".menu-nav").prepend(menu_html);

  $("#menu").append(support_at_html);

  social_media_links_Array = 
    [
      "'https://www.facebook.com/wearefergusonusa/'", 
      "'http://periscope.tv/'",
      "'https://www.instagram.com/discussionswithdallas/'", 
      "'http://www.twitter.com/1raejohnson'", 
      "'https://www.youtube.com/channel/UC6Q3i7XY9-dg5tJxEKwgJ5g'"
    ];

  $("#level_4 > div").each (
    function (inc) {
      $(this).attr("onclick", "window.location.href = " + social_media_links_Array[inc]);
      inc++;
    }
  );     
  
  if (page_width <= 1024)  {
    if (page_width >= 768 && page_width <= 1024) {
      $("#box-l2-right > h4").appendTo("#box-l2-right");
      $("#box-l2-right > p:first-of-type").appendTo("#box-l2-right");
      $("#box-l2-right > p:nth-child(1)").appendTo("#box-l2-right");
      $("#box-l2-right > a:first-of-type").appendTo("#box-l2-right");
    }

    $("#level_4 > h1").after(social_media_html);
    $("#level_4 > h6").css("display", "block");
  }
  

}

function setupFormForInput(input_element)  {
  var input_value = input_element.val();
  
  if ($("#input-submit_contact").attr("disabled") === "disabled")  {
    $("#input-submit_contact").prop("disabled", false);
    $("#input-submit_contact").css({"backgroundColor": "#e4c877", "color": "#a67737"});
  }
  
  if (input_value === "Enter your name" || 
      input_value === "Enter your email address" || 
      input_value === "Please enter your email address again" ||
      input_value === "Enter your message") {
    input_element.val("");
    input_element.css("color", "#000");
    input_element.css("border-color", "#a5a29e");
  }
}

function resetFormForInput(input_element)  {
  var input_value = input_element.val();
  var input_name_value = input_element.attr("name");
  
  if (input_value === "")  {
    $("#input-submit_contact").prop("disabled", true);
    $("#input-submit_contact").css({"backgroundColor": "#a5a29e", "color": "#66686a"});
    input_element.css("color", "#9e0b0f");

    $(input_element).css("border", "1px solid #9e0b0f");

    if (input_name_value === "name")  {
      input_element.val("Enter your name"); 
    } else {
      if (input_name_value === "email") {
        input_element.val("Enter your email address");
      } else {
        input_element.val("Enter your message");
      }
    }
  } else  {
    var input_element_val_length = index_value.length;
    var input_element_val_dot_index = index_value.indexOf(".");
    var input_element_val_at_index = index_value.indexOf("@");

    if (input_name_value === "email")  {
      if ($("#input-submit_contact").attr("disabled") === "disabled") {
        $("#input-submit_contact").prop("disabled", true);
        $("#input-submit_contact").css({"backgroundColor": "#a5a29e", "color": "#66686a"});
      }
      
      if (input_element_val_at_index === -1 || 
           (input_element_val_dot_index !== (input_element_val_length - 3) && 
            input_element_val_dot_index !== (input_element_val_length - 4) && 
            input_element_val_dot_index !== (input_element_val_length - 5))) {
        input_element.css("color", "#9e0b0f");
        input_element.css("border", "1px solid #9e0b0f");

        input_element.val("Please enter your email address again")
      }
     }  
  }
}

$(document).ready(
  function () {
    renderPage();

    $("#menu-mobile_button").on("click", 
      function () {
        activateMobileMenu();
      }
    );

    $("#bttn-support_at, #bttn-support_at-mobile").on("click", 
      function () {
        window.open("https://www.paypal.me/raejjohnson");
      }
    );

    $("form > div > input").on("focus", 
      function () {
        setupFormForInput($(this));
      }
    );

    $("form > div > input").on("blur", 
      function () {
        resetFormForInput($(this));
      }
    );

    $("form > div > textarea").on("focus", 
      function () {
        setupFormForInput($(this));
      }
    );

    $("form > div > textarea").on("blur", 
      function () {
        resetFormForInput($(this));
      }
    );
   
    if (window.location.href.indexOf("complete") !== -1)  {
      $("#level_3 > p").css("display", "none");
      $("#level_3 > form > div").html("<p>Thank you for contacting us. We will respond within a day or two.</p>");
      $("#input-submit_contact").css("display", "none");
      $("#level_3, #bkgrnd-level_3").css("height", "16.5em");
      $("#bkgrnd-level_4").css("height", "48em");
    }

    var brwsr_app_vrsn = new String();

    brwsr_app_vrsn = navigator.appVersion;
    
    if (brwsr_app_vrsn.indexOf("NT") === -1) {
      $("form > div > textarea").attr("cols", "89");
      $("form > div > textarea").attr("rows", "6");
    } else {
      if (brwsr_app_vrsn.indexOf(".NET") !== -1) {
        $("form > div > textarea").attr("cols", "90");
      }
    }
  }
);

