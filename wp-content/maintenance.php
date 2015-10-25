<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
<style type="text/css">
		
div.centerDiv {
  background: white;
  bottom: 0;
  height: 600px;
  left: 0;
  margin: auto;
  position: absolute;
  top: 0;
  right: 0;
  width: 902px;
}
#nob {
	position: absolute;
	
	bottom: 40px;
	right: 0px;
	
}
#logo {
	position: absolute;
	
	top: 0px;
	left: 0px;
	
}

#text {
	position: absolute;
	top: 188px;
	left: 0px;
	width: 300px;
	text-align:center;
}

#social {
	position: absolute;
	display:block;
	bottom: 0;
	right: 0px;
	width: 300px;
	text-align:right;
	
}
#social img{ padding-left:10px;
}
body{font-family:Arial;font-size:20px; color:#666}


label{ font-size:14px;color:#666}



input{line-height:31px;}



input,textarea{width:238px;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;background-color:rgba(255,255,255,.6);border:solid 1px #E2E2E2;}

#contactdiv{height:270px;width:250px;bottom:0px; left:0px; position:absolute;font-size:14px; color:#F00 }


#contact_form{height:270px;width:250px;background-color:#fff;border:hidden;padding:0px;bottom:0px; left:0px; position:absolute;}



#submit_button{width:109px;height:34px;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;background-color:#999;-webkit-box-shadow:inset 0 2px rgba(255,255,255,.29);-moz-box-shadow:inset 0 2px rgba(255,255,255,.29);box-shadow:inset 0 2px rgba(255,255,255,.29);border:solid 1px #999;font-weight:bold;color:#fff;margin-left:7px;}







.row{margin:5px;}
				</style>
				</style>
</head>

<body>
<div class="centerDiv">
<div id="logo">      <img src="http://www.el-camino.fr/img/logoelcamino.jpg" width="210" border="0"></div>

<div id="nob">      <img src="http://www.el-camino.fr/img/coussins_morel.jpg" width="600" height="411" border="0"></div>

<div id="text">  site en construction</div>
<div id="contactdiv"><?php
$action=$_REQUEST['action'];
if ($action=="")    /* display the contact form */
    {
    ?>
    <form id="contact_form"  action="#" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="action" value="submit">
    <div class="row">
		<label for="name">nom:</label><br />
		<input id="name" class="input" name="name" type="text" value="" size="30" /><br />
	</div>
	<div class="row">
		<label for="email">courriel:</label><br />
		<input id="email" class="input" name="email" type="text" value="" size="30" /><br />
	</div>
	<div class="row">
		<label for="message">message:</label><br />
		<textarea id="message" class="input" name="message" rows="7" cols="30"></textarea><br />
	</div>
	<input id="submit_button" type="submit" value="envoyez" />

    </form>
    <?php
    } 
else                /* send the submitted data */
    {
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $message=$_REQUEST['message'];
    if (($name=="")||($email=="")||($message==""))
        {
        echo "Veuillez remplir toutes <a href=\"\">les cases</a>.";
        }
    else{        
        $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Message sent using your contact form";
        mail("veroniquechomel@gmail.com", $subject, $message, $from);
        echo "message envoyé!";
        }
    }  
?></div>

<div id="social"><a href="https://www.facebook.com/El-Camino-de-Los-Altos-204331693004057/timeline/" target="_blank"><img src="http://www.el-camino.fr/img/1444485090_circle-facebook_.png"width="24px" border="0"></a><a href="https://de.pinterest.com" target="_blank"><img src="http://www.el-camino.fr/img/1444485032_pinterest.png"width="24px" border="0"></a></div>
</div>
</body>
</html>
