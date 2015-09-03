<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <fieldset>
            <legend>Personal Information</legend>
            <table cellpadding="3">
                <tr><td width="150px"><strong>Username (Email)</strong></td><td><input type="text" name="username"></td></tr>
                <tr><td><strong>Password</strong></td><td><input id="password" name="password" placeholder="**********" type="password"></td></tr>
                <tr><td><strong>First name</strong></td><td><input type="text" name="firstname"></td></tr>
                <tr><td><strong>Last name</strong></td><td><input type="text" name="lastname"></td></tr>
                <tr><td><strong>Phone Number</strong></td><td><input type="text" name="phone_number"></td></tr>

            </table>
        </fieldset>


        <fieldset style="text-align: center">
            <legend>Terms & conditions</legend>

            <textarea cols="50" rows="5">We will put pending terms and conditions here</textarea>
            <br/>
            I confirm that I agree with terms & conditions (Which are pending)<input type="checkbox" name="agreeWithTerms" value="Y">
            <br/><br/>


            <br/>
            <input type="submit" value="Back">
            <input type="submit" value="Signup">

            <input type="hidden" name="errorUrl" value="http://demo.qualityunit.com/pax4/html_signup_form.php">
            <input type="hidden" name="successUrl" value="http://demo.qualityunit.com/pax4/after_signup.php">


            </body>
</html>
