<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact Form</title>
  <link rel="stylesheet" href="style7.css" />

  <!-- jQuery CDN -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
  <section class="contact">
    <div class="container">
      <form id="contactForm">
        <h2>Contact Us</h2>

        <div class="inputBox">
          <input type="text" name="full_name" />
          <span>Full Name</span>
        </div>

        <div class="inputBox">
          <input type="email" name="email" />
          <span>Email</span>
        </div>

        <div class="inputBox">
          <input type="date" name="dob" />
          <span>Date of Birth</span>
        </div>

        <div class="inputBox">
          <textarea name="user_message"></textarea>
          <span>Type your Message...</span>
        </div>

        <div class="inputBox">
          <input type="submit" value="Send" />
        </div>
      </form>

      <!-- Optional response message area -->
      <div id="responseMessage" style="margin-top: 1em; font-weight: bold;"></div>
    </div>
  </section>

  <script>
    $(document).ready(function () {
      $("#contactForm").on("submit", function (e) {
        e.preventDefault();

        let xmlData = `
            <Contacts>
                <contact Message="OK">
                <Name>`+$("input[name='full_name']").val()+`</Name>
                <Email>`+$("input[name='email']").val()+`</Email>
                <dob>`+$("input[name='dob']").val()+`</dob>
                <UserMessage>`+$("textarea[name='user_message']").val()+`</UserMessage>
                </contact>
            </Contacts>
            `;  

        console.log(xmlData);

        $.ajax({
            url: 'soap-client-proxy.php',
            type: 'POST',
            data: xmlData,
            contentType: 'text/xml',
            dataType: 'text', // Expect raw text or XML back
        success: function(response) {
            console.log("SOAP Response:", response);
        },
        error: function(xhr) {
            console.error("Error:", xhr.responseText);
        }
        });        

        
      });
    });
  </script>
</body>
</html>
