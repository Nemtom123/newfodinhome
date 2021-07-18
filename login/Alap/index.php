<?php
include_once './Kozos.php';

Fejlec();
print "
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-9 col-md-7 col-lg-5 mx-auto\">
        <div class=\"card card-signin my-5\">
          <div class=\"card-body\">
            <h5 class=\"card-title text-center\">Sign In</h5>
            <form class=\"form-signin\"  method=\"POST\" action=\"belepes.php\">
              <div class=\"form-label-group\">
                <input type=\"text\" id=\"inputEmail\" name=\"inputEmail\" class=\"form-control\" placeholder=\"Email address\" required autofocus>
                <label for=\"inputEmail\">Email address</label>
              </div>

              <div class=\"form-label-group\">
                <input type=\"password\" id=\"inputPassword\" name=\"inputPassword\" class=\"form-control\" placeholder=\"Password\" required>
                <label for=\"inputPassword\">Password</label>
              </div>
              
              <button class=\"btn btn-lg btn-primary btn-block text-uppercase\" type=\"submit\">Sign in</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
 "; 
Lablec();
?>