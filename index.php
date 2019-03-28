<!DOCTYPE html>
<html>
<head>
	<title>PHP Code Tester</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="txtarea/tln.min.css"/>
    <script type="text/javascript" src="txtarea/tln.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/editorwrapper.css"/>
</head>
<body>
	<nav class="navbar navbar-dark bg-dark">
  		<span class="navbar-brand mb-0 h1">Code Tester</span>
	</nav><br>

	<div class="container-fluid">
		<div class="row">
			<div class="col" id="panelcodearea">
				<div class="nav nav-tabs" id="nav-tab" role="tablist">
				    <a class="nav-item nav-link active" id="nav-php-tab" data-toggle="tab" href="#nav-php" role="tab" aria-controls="nav-php" aria-selected="true">PHP</a>
				    <a class="nav-item nav-link" id="nav-js-tab" data-toggle="tab" href="#nav-js" role="tab" aria-controls="nav-js" aria-selected="false">Javascript</a>
				    <a class="nav-item nav-link" id="nav-hjp-tab" data-toggle="tab" href="#nav-hjp" role="tab" aria-controls="nav-hjp" aria-selected="false">Webpage</a>
				  </div>

				<div class="tab-content" id="nav-tabContent">
				  		<div class="tab-pane fade show active" id="nav-php" role="tabpanel" aria-labelledby="nav-php-tab">
				  			<div class="alert alert-primary">
				  				<div id="wrapper">
						        	<textarea id="codearea-php" class="banana-cake"><?php echo '<?php

?>';?></textarea>
						    	</div>
				  				<button type="button" class="compilecode-php btn btn-primary btn-lg btn-block">Run</button>
				  				<a href="php/downloadfile.php?val=tempfile.php" type="button" id="download-php" class="btn btn-primary btn-lg btn-block">Save as a .php file</a>
				  			</div>
				  		</div>
				  		<div class="tab-pane fade" id="nav-js" role="tabpanel" aria-labelledby="nav-js-tab">
				  			<div class="alert alert-primary">
				  				<div id="wrapper">
						        	<textarea id="codearea-js" class="banana-cake"></textarea>
						    	</div>
				  				<button type="button" class="compilecode-js btn btn-primary btn-lg btn-block">Run</button>
				  				<a href="php/downloadfile.php?val=tempfilejs.js" type="button" id="download-js" class="btn btn-primary btn-lg btn-block">Save as a .js file</a>
				  			</div>
				  		</div>
				  		<div class="tab-pane fade" id="nav-hjp" role="tabpanel" aria-labelledby="nav-hjp-tab">
				  			<div class="alert alert-primary">
				  				<div id="wrapper">
						        	<textarea id="codearea-hjp" class="banana-cake"></textarea>
						    	</div>
				  				<button type="button" class="compilecode-hjp btn btn-primary btn-lg btn-block">Run</button>
				  				<a href="php/downloadfile.php?val=hjpfile.php" type="button" id="download-hjp" class="btn btn-primary btn-lg btn-block">Save as a .php file</a>
				  			</div>

				  		</div>
				</div>
			
			</div>

			<div class="col" id="ouputarea">
				<div class="card" id="custpanel">
				  <div class="card-header">
				    Output
				  </div>
				  <div class="card-body">
				    <h5 class="card-title"><div class="output"></div></h5>
				  </div>
				</div>
			</div>
		
		</div>
	</div>

<nav class="navbar bottom navbar-dark bg-dark">
  <a class="navbar-brand" data-toggle="modal" data-target="#exampleModalCenter" href="#">About</a>
</nav>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">About</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="myjs/compile.js"></script>
<script type="text/javascript" src="myjs/txttab.js"></script>
</body>
</html>