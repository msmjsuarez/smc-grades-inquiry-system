<!DOCTYPE html>
<html>
    <head>	
    	<title>SMC Grades Inquiry System</title>	
    	<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<script src="http://smcgrades.websitebuilderteam.com/www/js/jquery-1.9.1.min.js"></script>
		<script src="http://smcgrades.websitebuilderteam.com/www/js/jquery.ui.map.min.js"></script>
		<script src="http://smcgrades.websitebuilderteam.com/www/js/jquery.mobile-1.3.1.min.js"></script>
		<link rel="stylesheet" href="http://smcgrades.websitebuilderteam.com/www/css/jquery.mobile-1.3.1.min.css" />
		
        <link rel="stylesheet" type="text/css" href="http://smcgrades.websitebuilderteam.com/www/css/mystyle.css" />
        <script src="http://smcgrades.websitebuilderteam.com/www/js/plugin.js"></script>
        <script type="text/javascript" src="http://smcgrades.websitebuilderteam.com/www/cordova.js"></script>
        
        <script>
			    //onDeviceReady is called when PhoneGap is initial
			    function onDeviceReady() {        
				    $(document).ready(function() {            
				    //Call any jQuery functions here        
				    });
			    }
			    document.addEventListener("deviceready", onDeviceReady);
		</script>   
  
    </head>
    <body>   
    		
    	
<!-- Login Page -->
    	<div data-role="page" data-theme="e" id="login">
    		<div data-role="header" data-position="fixed" data-theme="e">
    			<h1>Grades Inquiry</h1>   	
	    			<nav data-role="navbar">
	    			<ul>
	    				<li><a href="../home.html" data-icon="home" id="home" data-transition="none">Home</a></li>
	    				<li><a href="../about.html" data-icon="info" id="about" data-transition="none">About Us</a></li>
	    				<li><a href="../contact.html" data-icon="info" id="contact" data-transition="none">Contact Us</a></li>
	    				<li><a href="#" data-icon="arrow-r" class="ui-btn-active ui-state-persist" id="login" data-transition="none">Login</a></li>
	    			</ul>
	    			</nav>	
    		</div>
    		<div data-role="content" data-theme="e"> 
	
				<script src="../js/ajax_framework.js" language="javascript"></script>
				<div align="center" id="login_response"></div>
				<form action="javascript:login()" method="post">
    				<fieldset data-role="fieldcontain">
    					<label for="idnumber">ID Number: </label>
    					<input type="text" name="idnumber" id="idnumber" value="" placeholder="ID Number" />
    					<label for="password">Password: </label>
    					<input type="password" name="password" id="password" value="" placeholder="format: ID Number-First Letter of First Name-First Letter of Last Name" />
    				<fieldset>
    				
    				<div><p></p></div>
					
					<fieldset class="ui-grid-a" align="center">
    					<div class="ui-block-a">
            				<input type="reset" name="reset" value="Clear" data-role="button" data-icon="delete" />
    					</div>
    					<div class="ui-block-b">
            				<input type="submit" name="Submit" id="submit" value="Login" data-type="button" data-icon="check" />
    					</div>
					</fieldset>
    			</form>	    		         
    		</div>
    		<div data-role="footer" class="ui-bar" data-theme="e" data-position="fixed">
				<p class="copyright">&copy; SMC Grades Inquiry System 2013. All Rights Reserved.</p>	
    		</div>
    	</div>
<!-- End of Login Page -->
    	
 
    </body>
</html>
