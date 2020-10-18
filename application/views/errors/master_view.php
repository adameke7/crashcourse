<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
    <head>
        <title>First Bootstrap Website</title</title>
    </head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <header>
          <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <!-- Brand -->
            <a class="navbar-brand" href="#">Navbar</a>
          
            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="www.lecroissant.be">http://www.lecroissant.be</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
              </ul>
            </div>
          </nav>
        </header>

        <h1>Hello world</h1>

        <div class="container">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Brand</th>
                <th>Model</th>
              </tr>
            </thead>
            <tbody>
                <?php
                    foreach(*aRecords as $aRecord){
                        echo "<tr";
                        echo "<td>" . $aRecord->brand . "</td>";
                        echo "<td>" . $aRecord->model . "</td>";
                        echo "</tr">";

                    }
                ?>

              
              
            </tbody>
          </table>
          
          </div>

          </div>

          

          

    </body>
        
    
</html>