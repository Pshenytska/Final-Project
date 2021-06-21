<?php
/**
 * multiple.php is a postback application designed to provide a 
 * contact form for users to email our clients.  
 * 
 * multiple.php provides a larger form with more elements to provide 
 * a richer example form.
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 2 2019/10/13
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @todo none
 */

#--------------END CONFIG AREA ------------------------#
?>

<body>
<form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">

<div>
    <label>
        <input type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required"/>
    </label>
</div>


<div>	
    <label>
        <input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required"/>
    </label>
</div>


<div class="custom-select">	
    <label>How Did You Hear About Me?
        <select class="How_Did_You_Hear_About_Us?" required="required" title="How You Heard is required">
            <option value="Phone">Phone</option>
            <option value="Web">Web</option>
            <option value="Magazine">Magazine</option>
            <option value="A Friend">A Friend</option>
            <option value="Other">Other</option>
        </select>
    </label>
</div>

<div>
    <fieldset>
        <legend>What Services Are You Interested In?</legend>
        <input type="checkbox" name="Interested_In[]" value="Curtomized Order" /> Curtomized Order <br />
        <input type="checkbox" name="Interested_In[]" value="Graphic Designs" /> Graphic Designs <br />
        <input type="checkbox" name="Interested_In[]" value="Typography Drawings" />Typography Drawings <br />
        <input type="checkbox" name="Interested_In[]" value="Event Decorations" /> Event Decorations <br />
        <input type="checkbox" name="Interested_In[]" value="Other" /> Other <br />
    </fieldset>
</div>

<div>
    <fieldset>
        <legend>Did you find my website informative?</legend>
        <input type="radio" name="Is_website_informative?" value="Yes" 
        required="required" title="Is_website_informative" tabindex="50"  
        /> Yes <br />
        <input type="radio" name="Is_website_informative" value="No" /> No <br />
    </fieldset>
</div>

<div class="comments">
    <label>
        Comments:<br /><input type="comments" placeholder="Your comments are important to us!"></input>
    </label>
</div>	
<div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div>
<input type="submit" value="submit"  />
    
</form>
</body>
<!-- END HTML FORM -->

