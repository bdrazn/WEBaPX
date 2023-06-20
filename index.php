<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
  <script type="text/javascript" src="js/jquery.js"></script>
 
</head>

<body>

  <div class="main">
    <div class="over-head">
      <div class="container">

      </div>
    </div>

    <div class="div-content">
      <div class="div-content">
      <header>
          <div>
                  <h1 style="font-family: Comic Sans MS, cursive;margin-left:2%;color:green">
                    BOOM Car Inventory
                  </h1>
          </div>
        </header>
        <div id="content">
          <div class="container">
            <div class="row">
              <div class="span12 ">
                <h2 class="bgh2">Login</h2>
              </div>
              <div class="span12 clearfix">
                <form action="authenticate.php" onsubmit="return validation()" method="POST" style="margin-left:2%">
                  <label>Username (case sensitive):</label><br>
                  <input type="text" id="user" name="user" /><br>
                  <label>Password(case sensitive):</label><br>
                  <input type="password" id="pass" name="pass" /><br />

                  
                  <hr>
                  <input type="submit" value="Login">
                </form>
              </div>
              <script>
                function validation() {
                  var id = document.f1.user.value;
                  var ps = document.f1.pass.value;

                  if (id.length == "" && ps.length == "") {
                    alert("User Name and Password fields are empty");
                    return false;
                  }
                  else {
                    if (id.length == "") {
                      alert("User Name is empty");
                      return false;
                    }
                    if (ps.length == "") {
                      alert("Password field is empty");
                      return false;
                    }
                  }
                }  
              </script>

              <article class="span12 clearfix">
                <h6 class="bgh2">
                  **If you forgot your username/password, contact your an Admin to restore your account.
                </h6>
              </article>
              <article class="span12 clearfix">
                <div class="divider"></div>
              </article>
            </div>
          </div>
        </div>
      </div>
      <footer>
        <div class="container" style="color:black;margin-left:40%;margin-right:40%;"> ClassOf2023Group@CSU</div>
      </footer>
    </div>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>