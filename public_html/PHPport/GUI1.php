<!DOCTYPE html>
<html>
  <meta charset="utf-8">

  <!--
      File: http://weblab.cs.uml.edu/~cburbine/A3_index_Assign.html
      Christopher Burbine, UMass Lowell Compter Science Student, christopher_burbine@student.uml.edu
      91.461 GUI Programming I, Assignment 3: Styling Your First Web Page With CSS
      Created on September 21, 2013 at 2:20 PM

      This file is a description of past and present assignments with links leading to the assignment outlines 
      on Prof. Heines' site and old builds of the page(s).  
    -->

  <title>GUI 1</title>
  <link href="styles.css" type="text/css" rel="stylesheet">
  <body>
    <?php include 'menu.php'; ?>
    <!-- <div class="main">
      <h1><strong> GUI 1</strong> Christopher Burbine</h1>
      <div class="main_list">
	<ul>
	  
	      List design taken from (http://www.w3schools.com/css/css_navbar.asp) and modified in shape and
	      color for my home page. This can be seen on all pages currently.
	    
	  <li><a href="http://www.cs.uml.edu/~cburbine/">Home</a></li>
	  <li><a href="http://www.cs.uml.edu/~cburbine/A3_index_AboutMe.html">About Me</a></li>
	  <li><a href="http://www.cs.uml.edu/~cburbine/A3_index_Assign.html">Assignments</a></li>
	  <li><a href="http://www.cs.uml.edu/~cburbine/A3_index_Contact.html">Contact Me</a></li>
	</ul>
      </div>-->
    
      <h2>Past GUI 1 Assignments</h2>
      <!--
	  Idea for assignment table taken from Jacob Nappi's index page 
	  (http://weblab.cs.uml.edu/~jnappi/index.html) 
	  code taken from (http://www.w3schools.com/tags/tag_table.asp) and then modified. 
	-->
	  <table class="main_table">
	    <tr>
	      <th>Assignment Number</th>
	      <th>Assignment Name</th>
	      <th>Assignment Description</th>
	    </tr>
	    <tr>
	      <td>1</td>
	      <!-- 
		   This link and the ones that follow it lead to the different assignment outlines on 
		   Prof. Heines' site except for the third link down, which leads to an old build of the 
		   index page. 
		-->
	      <td><a href="https://teaching.cs.uml.edu/~heines/91.461/91.461-2013-14f/461-assn/InstallingXAMPP-v01.jsp">Installing XAMPP</a></td>
	      <td>The "setup" assignment, where we were tasked to install and setup XAMPP as well as NetBeans.</td>
	    </tr>
	    <tr>
	      <td>2</td>
	      <td><a href="https://teaching.cs.uml.edu/~heines/91.461/91.461-2013-14f/461-assn/FirstWebPage-v03.jsp">Creating Your First Web Page</a></td>
	      <td>The creation of a basic index web page that we will build off of in future assignments. Old build can be found <a href="http://www.cs.uml.edu/~cburbine/A2_index_old.html">here</a>.</td>
	    </tr>
	    <tr>
	      <td>3</td>
	      <td><a href="https://teaching.cs.uml.edu/~heines/91.461/91.461-2013-14f/461-assn/FirstCSS-v02.jsp">Styling Your First Web Page With CSS</a></td>
	      <td>The styling and improvement of the basic web page started in A2.</td>
	    </tr>
	    <tr>
	      <td>4</td>
	      <td><a href="https://teaching.cs.uml.edu/~heines/91.461/91.461-2013-14f/461-assn/FormattingText-v03.jsp">Formatting Dynamic Text</a></td>
	      <td>The styling and formatting of text that is read in form a data structure instead of hard coded into a HTML document. Build can be found <a href="http://www.cs.uml.edu/~cburbine/A4_1984ratcage.html">here</a>.</td>
	    </tr>
	    <tr>
	      <td>5</td>
	      <td><a href="https://teaching.cs.uml.edu/~heines/91.461/91.461-2013-14f/461-assn/CreatingADynamicTable-v02.jsp">Creating an Interactive Dynamic Table</a></td>
	      <td>Build a multiplication table dynamically from user input from the URL parameters created by the page and checks for any user error. I hope to add more error checks at a later date. Current build can be found <a href="http://www.cs.uml.edu/~cburbine/A5_multTbl.html">here</a>.</td>
	    </tr>
	    <tr>
	      <td>6</td>
	      <td><a href="https://teaching.cs.uml.edu/~heines/91.461/91.461-2013-14f/461-assn/UsingThejQueryValidationPlugin-v02.jsp">Using the jQuery Validation Plugin with Your Dynamic Table</a></td>
	      <td>Using jQuery we checked user input to prevent any errors going through the table building process. Used same CSS and same table building method, just now with more user friendly error checking. Current build can be found <a href="http://www.cs.uml.edu/~cburbine/A6_jQuery_multTbl.html">here</a>. Old version can be seen <a href="http://www.cs.uml.edu/~cburbine/A6_jQuery_multTbl_old.html">here</a>.</td>
	    </tr>
	    <tr>
	      <td>7</td>
	      <td><a href="https://teaching.cs.uml.edu/~heines/91.461/91.461-2013-14f/461-assn/CreatingAGraphingCalculator-v01.jsp">Creating a Graphing Calculator Using the HTML Canvas</a></td>
	      <td>Used HTML Canvas to build a graphing calculator. At the moment the calculator handles x and t value. The addition of t to the equation will animate the curve, showing the line plotting in real time. Current build can be seen <a href="http://www.cs.uml.edu/~cburbine/A7_GrphCalc_Canvas.html">here</a>. Old build can be seen <a href="http://www.cs.uml.edu/~cburbine/A7_GrphCalc_Canvas_old.html">here</a>.</td>
	    </tr>
	    <tr>
	      <td>8</td>
	      <td><a href="https://teaching.cs.uml.edu/~heines/91.461/91.461-2013-14f/461-assn/PHPandMySQL-v01.jsp">Saving Graphing Formulae in a Server-Side Database</a></td>
	      <td>Built off of A7's HTML and JavaScript and added the ability to save curve formulas server-side. Current build can be seen <a href="http://www.cs.uml.edu/~cburbine/A8_GraphCalc.php">here</a>.</td>
	    </tr>
	  </table>  
    </div>
  </body>
</html>

