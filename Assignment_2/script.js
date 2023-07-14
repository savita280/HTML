$(document).ready(function() {
    // Initialize RateYo plugin
    $("#ratingInput").rateYo({
      starWidth: "20px",
      spacing: "10px",
      fullStar: true,
      onSet: function(rating) {
        $("#rating").val(rating);
      }
    });
  
    // Handle form submission
    $("#feedbackForm").submit(function(event) {
      event.preventDefault(); // Prevent the default form submission
  
      // Get the form data
      var name = $("#nameInput").val();
      var email = $("#emailInput").val();
      var comment = $("#commentInput").val();
      var rating = $("#rating").val();
  
      // Display a thank you message with the user's name
      alert("Thank you, " + name + ", for your feedback!");
  
      // Optionally, you can send the form data to a server using AJAX
      // and handle the submission on the server side
    });
  });
  