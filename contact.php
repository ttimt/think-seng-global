<?php include("header.html"); ?>
        <script>
            window.onload = function()
            {
                var a = document.getElementById("contact");
                a.classList.add("current");
            }
        </script>
<?php include("sidebar.html"); ?>
	
	  <div id="content">
        <div class="content_item">
		  <div class="form_settings">
            <h2>Contact Us</h2>
            <p style="padding-bottom: 15px;">A contact form requires some method of emailing the contents of the form to an email address. The most common way to do this is to use some kind of server script (PHP for example). I would be happy to send you the PHP code for the contact form for your chosen template, I charge &pound;20.00GBP for this. Simply <a href="http://www.freehtml5templates.co.uk/contact.php">contact me</a> for more details.</p>           
			<p><span>Name</span><input class="contact" type="text" name="your_name" value="" /></p>
			<p><span>Phone number</span><input class="contact" type="text" name="your_email" value="" /></p>
            <p><span>Email Address</span><input class="contact" type="text" name="your_email" value="" /></p>
			<p><span>Message</span><textarea class="contact textarea" rows="8" cols="50" name="your_message"></textarea></p>
            <p style="padding: 10px 0 10px 0;">Please enter the answer to this simple maths question (to prevent spam)</p>
			<p><span>Maths Question: 9 + 3 = ?</span><input type="text" name="user_answer" class="contact" /><input type="hidden" name="answer" value="4d76fe9775" /></p>
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="Send" /></p>
          </div><!--close form_settings-->
		</div><!--close content_item-->
      </div><!--close content-->   
	</div><!--close site_content-->  	
<?php
	include("footer.html");
?>
