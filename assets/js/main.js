function setupFormForInput(inputElement)  {
  var inputValue = inputElement.val();
  if (inputValue === "Enter your name" || 
      inputValue === "Enter your email address" || 
      inputValue === "Enter your message")
  inputElement.val("");
  inputElement.css("color", "#000");
}

function resetFormForInput(inputElement)  {
  var inputValue = inputElement.val();
  var inputNameValue = inputElement.attr("name");
  
  if (inputValue === "")  {
    inputElement.css("color", "#a2a29e");

    if (inputNameValue === "name")  {
      inputElement.val("Enter your name"); 
    } else {
      if (inputNameValue === "email") {
        inputElement.val("Enter your email address");
      } else {
        inputElement.val("Enter your message");
      }
    }
  }
}

$(document).ready(
  function () {
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
      $("#level_3 > form > div").html("<p>Thank you for contacting us. We will respond within a day or two.</p>");
      $("#input-submit_contact").css("display", "none");
    }
  }
);

