<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="External\w3.css">
    <link rel="stylesheet" href="css\master.css">
    <title></title>
  </head>
  <body>
    <div class="w3-container w3-teal">
      <h1>Header</h1>
    </div>
    <div class="w3-bar w3-red w3-large sticky">
      <a href="#" class="w3-bar-item w3-button">Home</a>
      <a href="#" class="w3-bar-item w3-button w3-hide-small">Link 1</a>
      <a href="#" class="w3-bar-item w3-button w3-hide-small">Link 2</a>
      <a href="#" class="w3-bar-item w3-button w3-hide-small">Link 3</a>
      <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="myFunction()">&#9776;</a>
    </div>

    <div id="demo" class="w3-bar-block w3-red w3-hide w3-hide-large w3-hide-medium">
      <a href="#" class="w3-bar-item w3-button">Link 1</a>
      <a href="#" class="w3-bar-item w3-button">Link 2</a>
      <a href="#" class="w3-bar-item w3-button">Link 3</a>
    </div>

    <div id="formWrap" class="w3-container w3-margin">
      <div class="w3-card-2 w3-half">
        <div class="w3-container w3-blue">
          <h2>Input Form</h2>
        </div>

        <form class="w3-container">
          <p>
          <input class="w3-input w3-border" type="text" placeholder="First Name">
          <label>First Name</label></p>
          <p>
          <input class="w3-input w3-border" type="text" placeholder="Last Name">
          <label>Last Name</label></p>
          <p>
            <textarea class="w3-input w3-border" placeholder="Ask a question..."></textarea>
            <label>Subject</label>
          </p>
        </form>
      </div>
    </div>

    <div class="w3-row">
      <div class="w3-container w3-half w3-center">
        <div class="w3-card-2">
          <img src="https://via.placeholder.com/400" alt="">
          <div class="w3-container w3-green">
            <p>textarea</p>
          </div>
        </div>
      </div>
      <div class="w3-card-2 w3-half w3-center">
        <img src="https://via.placeholder.com/400" alt="">
        <div class="w3-container">
          <p>textarea</p>
        </div>
      </div>
    </div>

    <div class="w3-row">
      <div class="w3-container w3-half w3-center">
        <div class="w3-card-2">
          <img src="https://via.placeholder.com/400" alt="">
          <div class="w3-container w3-green">
            <p>textarea</p>
          </div>
        </div>
      </div>
      <div class="w3-card-2 w3-half w3-center">
        <img src="https://via.placeholder.com/400" alt="">
        <div class="w3-container">
          <p>textarea</p>
        </div>
      </div>
    </div>

    <div class="w3-container w3-pale-blue">
      <h5>Footer</h5>
    </div>

    <script>
      function myFunction() {
          var x = document.getElementById("demo");
          if (x.className.indexOf("w3-show") == -1) {
              x.className += " w3-show";
          } else {
              x.className = x.className.replace(" w3-show", "");
          }
      }
    </script>
  </body>
</html>
