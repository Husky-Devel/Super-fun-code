<!DOCTYPE html>
<head>
<link rel="stylesheet" type="text/css" href="CSS/sineup.css" />
<title>West Rolleston</title>
    <link rel="stylesheet" type="text/css" href="CSS/styles.css" />
    <link rel="stylesheet" type="text/css" href="CSS/Topnav.css" />
    <script src="https://apis.google.com/js/platform.js" async defer></script>

    <function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  console.log('Name: ' + profile.getName());
  console.log('Image URL: ' + profile.getImageUrl());
  console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
} >


  </head>
<body>
  <div class="wrapper">
  <header role="banner">
    <nav role="navigation">
      <p>
        <a href="index.php">
          <img src="./Images/small-logo2.png" />
        </a>
      </p>

      <div class="topnav">
        <a class="active" href="index.php">Home</a>
        <a href="Contact.php">Contact</a>
        <a href="About-us.php">About </a> 
        <a href="Our-story.php">Reference</a> 
        <a href="Where-are-we.php">Where are we?</a>
        <a href="Sineup.php ">Sign up</a>
    </nav>
</head>
<body>
  <meta name="google-signin-client_id" content="606387351884-maak4t0lmlpn57i8iiumkh4p0u62gtjc.apps.googleusercontent.com">

  <div class="g-signin2" data-onsuccess="onSignIn"></div>
  

</body>




</html>

