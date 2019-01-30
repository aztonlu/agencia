<html>
  <head>    
    <meta charset="UTF-8">
    <title>Email</title>
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700|Lobster|Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
  </head>
 <body style="background-color: #0e4817; color: #fff;">
 <div class="bg">
	 <div class="bg-color">
		  <div class="container content">
				<div class="row">
						<div class="col-sm-12">
							<center>
				            	<img src="<?php echo $message->embed('img/terandes-logo.png'); ?>">
				            </center>
                            <h1>{{ $name }}</h1>
                            <br><br>
                            <p>{{ $description }}</p>
                            <center>
                            	<a href="www.terandes.com" style="color: #fff;">Visítanos</a>	
                            </center>
						</div>
				</div>
			</div>
	 </div>
 </div>
 
