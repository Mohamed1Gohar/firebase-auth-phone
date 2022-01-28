<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Firebase Phone SignIn</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>


  <div class="container">
    <div class="row">
      <div class="col">
        <h3>Firebase Phone SignIn</h3>

        <form>
          <div class="form-group">
            <label for="uname"><strong>Phone Number</strong></label>
            <input type="text" id="number" class="form-control" placeholder="Enter phone number" name="uname" required>
            <span>use this Phone Number For Test : </span><br>
            <span>phone: " <strong>+201099371188 </strong>"    And  verification code : " <strong>000000 </strong>" </span><br>
            <span>phone: " <strong>+201099371199 </strong>"    And  verification code : " <strong>111111 </strong>" </span><br>

          </div>
          <div class="form-check">
            <div id="recaptcha-container"></div>
          </div>

          <button type="button" class="btn btn-primary" onclick="phoneAuth();">Send Otp</button>
        </form>

      </div>

      <div class="col">


      </div>

    </div>

    <div class="row d-none" id="verifiCode">
      <div class="col pt-5">
        <form>
   
        <h3>verification code</h3>

          <div class="form-group">
            <label><strong>verification code</strong></label>
            <input type="text" id="verificationCode" placeholder="Enter verification code">
          </div>

          <button type="button" class="btn btn-primary" onclick="codeverify();">Verify code</button>

        </form>
      </div>
      <div class="col"></div>
    </div>

  </div>


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <script src="https://www.gstatic.com/firebasejs/8.3.1/firebase.js"></script>
  <script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
      appId: "1:718989392018:web:376da59a77b1073ba84e4b",
      apiKey: "AIzaSyC86qryO620yFET5Wug1PPgfxGSpSH74Jk",
      authDomain: "penta-value.firebaseapp.com",
      projectId: "penta-value",
      storageBucket: "penta-value.appspot.com",
      messagingSenderId: "718989392018",
      measurementId: "G-M7QHZJWX71"
    };

    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    firebase.analytics();
  </script>
  <script src="firebase.js" type="text/javascript"></script>

</body>

</html>