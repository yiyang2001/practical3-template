<?php
// Return an array of all clubs.
function getClubs()
{
    // replace 0
    return 0;
}

// Return an array of error messages.
// Empty array if there is no input error.
function detectInputError()
{
    // Use the global variables for $gender, $name, $phone, $clubs.
    // https://www.w3schools.com/php/keyword_global.asp
 
    
    // For holding error messages.
    $error = array();

    // gender /////////////////////////////////////////////////////////////////
    // Replace the "true" to appricate condition according to the message
    // Check if the gender is not selected.
    if (true)
    {
        $error['gender'] = 'Unisex? Please select your <strong>gender</strong>.';
    }
    // EXTRA: To prevent hacks.
    // tips use regular expression (preg_match) 
    // Check if the format is not M or F.
    else if (true)
    {
        $error['gender'] = '<strong>Gender</strong> can only be either M or F.';
    }

    // name ///////////////////////////////////////////////////////////////////
    // Replace the true to appricate condition according to the message
    // Check if the name is empty.
    if (true)
    {
        $error['name'] = 'Nameless? Please enter your <strong>name</strong>.';
    }
    // EXTRA: To prevent hacks.
    // https://www.w3schools.com/php/func_string_strlen.asp
    // Check if the name is more than 30 characters.
    else if (true)
    {
        $error['name'] = 'Your <strong>name</strong> is too long. It must be less than 30 characters.';
    }
    // tips use regular expression (preg_match)
    // Check if the name contains invalid characters. 
    else if (true)
    {
        $error['name'] = 'There are invalid characters in your <strong>name</strong>.';
    }

    // phone //////////////////////////////////////////////////////////////////
    // Replace the true to appricate condition according to the message
    // Check if the phone is empty.
    if (true)
    {
        $error['phone'] = 'Please enter your <strong>mobile phone</strong> number.';
    }
    // EXTRA: To prevent hacks.
    // tips use regular expression (preg_match)
    // Check if the phone is not in the format 999-9999999 and starts with 01.
    // 3 digits, a dash, 7 digits.
    // starts with 01
    else if (true)
    {
        $error['phone'] = 'Your <strong>mobile phone</strong> number is invalid. Format: 999-9999999 and starts with 01.';
    }

    // clubs //////////////////////////////////////////////////////////////////
    // Replace the true to appricate condition according to the message
    // Check if the clubs is not selected.
    if (true)
    {
        $error['clubs'] = 'Please select <strong>clubs</strong> that you want to join.';
    }
    // Check if the clubs is more than 3.
    else if (true)
    {
        $error['clubs'] = 'You cannot select more than 3 <strong>clubs</strong>.';
    }
    // EXTRA: To prevent hacks.
    // https://www.w3schools.com/php/func_array_diff.asp
    // https://www.w3schools.com/php/func_array_keys.asp
    // Detect the clubs that not inside the selection
    // Use array_diff() to find the difference between the two arrays.
    else if (true)
    {
        $error['clubs'] = 'You have selected invalid <strong>clubs</strong>.';
    }

    // gender-clubs ///////////////////////////////////////////////////////////
    // Replace the true to appricate condition according to the message
    // Check if gender and clubs are not null.
    if ($gender != null && $clubs != null)
    {
        // https://www.w3schools.com/php/func_array_in_array.asp
        // Check if the gender Male selected is not allowed to join the Ladies clubs.
        if (true)
        {
            $error['gender-clubs'] = 'Sorry. Males are not allowed to join the <strong>Ladies Club</strong>.';
        }
        // Check if the gender Female selected is not allowed to join the Gentlemen Clun.
        else if (true)
        {
            $error['gender-clubs'] = 'Sorry. Females are not allowed to join the <strong>Gentlemen Club</strong>.';
        }
    }

    ///////////////////////////////////////////////////////////////////////////
    return $error;
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=8" />
        <title>Clubs Result</title>
        <link type="text/css" href="css/style.css" rel="stylesheet" />
    </head>
    <body style="font-size: 1.2em">
        <?php
        // https://www.w3schools.com/php/func_var_isset.asp
        // https://www.w3schools.com/Php/php_superglobals_post.asp
        // Replace the "true" 
        if (true) // POST with submit button pressed.
        {
            // Get value from the POST's associative array (replace ""):
            // - Trim unwanted whitespaces. (https://www.w3schools.com/php/func_string_trim.asp)
            $gender = ""; 
            $name   = "";
            $phone  = "";
            $clubs  = ""; // It is an array.

            $error = detectInputError();
            // https://www.w3schools.com/php/func_var_empty.asp
            // Replace the "true" to check if there is no error.
            if (true) 
            {
                // Print the Thanks for joining message
                // HTML Code (? symbol should be replaced by other character):
                /*
                    <h1>Thanks for joining</h1>
                    <p>
                        <strong style="font-size: larger">?. ?</strong><br />
                        You have joined the following clubs:
                    </p>                 
                 */


                $allClubs = getClubs();
                echo '<ul>';
                // print the list item for the clubs (using foreach):

                echo '</ul>';
            }
            else // If error detected.
            {
                // print the message when the error is detected
                // HTML Code (? symbol should be replaced by other character):
                /*
                    <h1>OOPS... There are input errors</h1>
                    <ul style="color: red"><li>?</li></ul>
                    <p>[ <a href="javascript:history.back()">Back</a> ]</p>                 
                 */
                // https://www.w3schools.com/php/func_string_implode.asp
                
            }
        }
        else // GET or hacks.
        {
            // JavaScript to redirect user to the right page.
            echo '
                <script type="text/javascript">
                location = "clubs-join.php";
                </script>
                ';
        }
        ?>
    </body>
</html>
