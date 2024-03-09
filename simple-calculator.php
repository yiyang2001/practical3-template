<?php
// Return an array of error messages.
// Empty array if there is no input error.
function detectInputError()
{
    // Use the global variables for $num1, $num2.
    // https://www.w3schools.com/php/keyword_global.asp
    

    // For holding error messages.
    $error = array();

    // num1 ///////////////////////////////////////////////////////////////////
    // Replace the true to appricate condition according to the message
    // Check if the num1 is empty.
    if (true)
    {
        $error['num1'] = 'Please enter <strong>Number 1</strong>.';
    }
    // Chapter 2-3 PHP Working with Strings : Slide 45
    // check if the num is not an integer
    else if (true)
    {
        $error['num1'] = '<strong>Number 1</strong> must be an integer.';
    }
    // check if the num is too large or too small that exceed the limit of integer
    else if ($num1 < (-PHP_INT_MAX - 1) || $num1 > PHP_INT_MAX)
    {
        // NOTE:
        // -----
        // Don't cast $num1 to (int) for the comparison.
        // Why not? Because (int) will truncate the value.
        // When casted to (int), value > PHP_INT_MAX will be set to PHP_INT_MAX.    
        // E.g. (int)9999999999 --> 2147483647 --> PHP_INT_MAX.
        // E.g. 32-bit system (int)-2147483647 --> 2147483647 --> PHP_INT_MAX. OR 64-bit system -9223372036854775807 --> 9223372036854775807
        // Leave $num1 as (string).
        $error['num1'] = '<strong>Number 1</strong> must between ' . (-PHP_INT_MAX - 1) . ' and ' . PHP_INT_MAX . '.';
    }

    // num2 ///////////////////////////////////////////////////////////////////
    // Replace the "true" to appricate condition according to the message
    // Check if the num2 is empty.
    if (true)
    {
        $error['num2'] = 'Please enter <strong>Number 2</strong>.';
    }
    // Chapter 2-3 PHP Working with Strings : Slide 45
    // check if the num is not an integer
    else if (true)
    {
        $error['num2'] = '<strong>Number 2</strong> must be an integer.';
    }
    // check if the num is too large or too small that exceed the limit of integer
    else if ($num2 < (-PHP_INT_MAX - 1) || $num2 > PHP_INT_MAX)
    {
        $error['num2'] = '<strong>Number 2</strong> must between ' . (-PHP_INT_MAX - 1) . ' and ' . PHP_INT_MAX . '.';
    }
    // check if the $_POST['divide'] is set and the num2 is 0
    else if (true)
    {
        $error['num2'] = 'Cannot divide by 0. Change <strong>Number 2</strong>.';
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
        <title>Simple Calculator</title>
        <link type="text/css" href="css/style.css" rel="Stylesheet" />
    </head>
    <body style="font-size: 1.2em">
        <h1>Simple Calculator</h1>
        <?php
        // https://www.w3schools.com/php/func_var_empty.asp
        // Replace the "true"
        if (true) // POST, indicidates a postback.
        {
            // Get value from the POST's associative array (replace ""):
            // - Trim unwanted whitespaces. (https://www.w3schools.com/php/func_string_trim.asp)
            $num1 = "";
            $num2 = "";

            $error = detectInputError();
            // https://www.w3schools.com/php/func_var_empty.asp
            // Replace the "true"            
            if(true) // Check if there is no error.
            {
                // Cast the $num1 and $num2 to integer (replace "")
                $n1 = "";
                $n2 = "";
                // NOTE:
                // -----
                // Just my personal preference not to work on the user inputs
                // directly. If you wanted to, you can use settype().
                // E.g. settype($num1   , 'int') --> $num become (int)
                // E.g. settype('123'   , 'int') --> 123(int)
                // E.g. settype('123ABC', 'int') --> 123(int)
                // E.g. settype(''      , 'int') --> 0  (int) BEWARE!!!

                // Different buttons perform different actions.
                // Create a if-else statement to detect which buttons (add, minus, multiply, divide) is clicked
                // Create variables $action, $symbol, $answer according to the button clicked.
                /*
                    eg:
                        $action = 'Add'
                 *      $symbol = '+'
                 *      $answer = $n1 + $n2
                 */


                

                // print the output of calculation.
                // HTML Code (? symbol should be replaced by other character):
                /*
                    <div class="info" style="font-size: larger">
                    <strong>?</strong>: ? ? ? = <strong>?</strong>
                    </div> 
                 */
                
                
                
                // NOTE:
                // -----
                // Format $answer with %s so that floating-point result
                // won't be truncated. Unlike strongly-typed languages,
                // PHP casts the result to (float) whenever needed.
                // E.g. 2147483647(int) + 2147483647(int) --> 4294967294(float).
                // Hate or love the behavior? I don't know...
            }
            else
            {
                // https://www.w3schools.com/php/func_string_implode.asp
                // print the error message
                // HTML Code (? symbol should be replaced by other character):
                /*
                 * <ul class="error"><li>?</li></ul>
                 */
                
            }
        }
        ?>
        <form action="" method="post">
            <table cellspacing="5">
                <tr>
                    <td><label for="num1">Number 1 :</label></td>
                    <!-- Replace "" in echo (check the $num1 is declared or not [if not return ''] else return the value of $num1)-->
                    <td><input type="text" name="num1" id="num1"
                               value="<?php echo "" ?>" /></td>
                </tr>
                <tr>
                    <td><label for="num2">Number 2 :</label></td>
                    <!-- Replace "" in echo (check the $num2 is declared or not [if not return ''] else return the value of $num2)-->
                    <td><input type="text" name="num2" id="num2"
                               value="<?php echo "" ?>" /></td>
                </tr>
            </table>
            <input type="submit" name="add" value="Add" />
            <input type="submit" name="minus" value="Minus" />
            <input type="submit" name="multiply" value="Multiply" />
            <input type="submit" name="divide" value="Divide" />
            <!-- JavaScript to reload the page.
                 Typical reset button won't work. -->
            <!--Fill in the ? symbol-->
            <input type="button" value="Reset"
                   onclick="location='?'" />
        </form>
    </body>

    <!-- JavaScript to place focus (optional) -->
    <script type="text/javascript">
        <?php
        // Replace the true
        if (true)
        {
            // No error. Focus on 1st field --> 'num1'.
            echo 'document.getElementsByName("num1")[0].focus();';
        }
        else
        {
            // Error. Focus on 1st error field.
            // https://www.w3schools.com/php/func_array_reset.asp
            // https://www.w3schools.com/php/func_array_key.asp
            // reset() - Return the first element of the array
            // key()   - Return the key of the current element in an array
            // Replace the "?" with the correct function to get the first key of the array $error
            echo "
                var field = document.getElementsByName('?')[0];
                field.focus();
                field.select();";
        }
        ?>
    </script>
</html>
