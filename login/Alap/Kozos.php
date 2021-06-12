<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (session_id() == "" ){
    session_start();
}

function Fejlec(){
header('Cache-Control: no-cache, no-store, must-revalidate'); // HTTP 1.1.
header('Pragma: no-cache'); // HTTP 1.0.
header('Expires: 0'); // Proxies.        
//<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">
        print "<!DOCTYPE html>
                <html>
                <head>
                <title>DEV</title>
				<meta http-equiv=\"cache-control\" content=\"max-age=0\" />
				<meta http-equiv=\"cache-control\" content=\"no-cache\" />
				<meta http-equiv=\"expires\" content=\"0\" />
				<meta http-equiv=\"expires\" content=\"Tue, 01 Jan 1980 1:00:00 GMT\" />
				<meta http-equiv=\"pragma\" content=\"no-cache\" />
                <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">";
        print "<link href=\"jsandcss/css/bootstrap.css\" rel=\"stylesheet\" type=\"text/css\"/>";
			print "<link href=\"jsandcss/datatables.css\" rel=\"stylesheet\" type=\"text/css\"/>";
                        print "<link href=\"jsandcss/datatables.min.css\" rel=\"stylesheet\" type=\"text/css\"/>";
			print "<script src=\"jsandcss/jquery.js\" type=\"text/javascript\"></script>";	
                        print "<script src=\"jsandcss/kozos.js\" type=\"text/javascript\"></script>";
                        print "<script src=\"jsandcss/redirect.js\" type=\"text/javascript\"></script>";	
                        print "<script src=\"jsandcss/js/bootstrap.js\" type=\"text/javascript\"></script>";
                        print "<script src=\"jsandcss/datatables.js\" type=\"text/javascript\"></script>";
				
				    
                print "<script language=\"Javascript\" type=\"text/Javascript\"> ";
			
				
                print "var kezdes = ".ini_get("session.gc_maxlifetime")."; ";
                print "function VisszaSzamlalas(){ ";
                print " kezdes = kezdes-1;
                        if ( kezdes <= 10 ){
                            window.location='index.php';
                        }
                      ";
                print "}";
                print "</script>";
         print "</head>";
         print "<body >\n";    
}

function Lablec(){
     print "</body></html>";
}

function Menu(){
print "<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
  <a class=\"navbar-brand\" href=\"#\">Navbar</a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>

  <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <ul class=\"navbar-nav mr-auto\">
      <li class=\"nav-item active\">
        <a class=\"nav-link\" href=\"#\">Projektek <span class=\"sr-only\">(current)</span></a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"#\">Megrendelések</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"#\">Kapacitások</a>
      </li>     
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"#\">Logisztika</a>
      </li>      
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"#\">Kimutatások</a>
      </li>       
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          Törzsadatok
        </a>
        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
          <a class=\"dropdown-item\" href=\"partnerek.php\">Partnerek</a>
          <div class=\"dropdown-divider\"></div>
          <a class=\"dropdown-item\" href=\"#\">Another action</a>
          <div class=\"dropdown-divider\"></div>
          <a class=\"dropdown-item\" href=\"#\">Something else here</a>
        </div>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"index.php\">Kilépés</a>
      </li>  
    </ul>
  </div>
</nav>   ";

}
 function Beallitas_POST($nev,$ertek)
{
    global $_POST;

    if ( !isset($_POST[$nev]) )
    {
        $_POST[$nev] = $ertek;
    }
    return $_POST[$nev];
}//function Beallitas_POST($nev,$ertek) vege     

 function Beallitas_GET($nev,$ertek)
{
    global $_GET;

    if ( !isset($_GET[$nev]) )
    {
        $_GET[$nev] = $ertek;
    }
    return $_GET[$nev];
}//function Beallitas_GET($nev,$ertek) vege

?>




