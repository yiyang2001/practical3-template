<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=8" />
        <title>Kinder Math Question</title>
        <link type="text/css" href="css/style.css" rel="Stylesheet" />
    </head>
    <body style="font-size: 1.2em">
        <h1>Kindergarten Math</h1>
        <form action="kinder-math-result.php" method="post">
            <table>

            <?php
            /* 

                Create constant variables for 'MIN', 'MAX' & 'NUM_OF_QUES'

                Tips:
                - PHP Constants [https://www.w3schools.com/php/php_constants.asp]
                - PHP define() Function [https://www.w3schools.com/php/func_misc_define.asp]

            */


            /*
                Create a for loop to create questions based on 'NUM_OF_QUES'

                Tips:
                - PHP for Loop [https://www.w3schools.com/php/php_looping_for.asp]
            */

            
            {
                /*
                    Create two variables and its values are the random number.
                    The random number must not less than 'MIN' and not more than 'MAX'

                    Tips:
                    - PHP rand() Function [https://www.w3schools.com/PHP/func_math_rand.asp]
                */                
                $n1 =  // First number.
                $n2 =  // Second number.

                /*
                    Print the question and textbox. (Below is the HTML code to create a design like the question  mention, please do the modification in order to achieve the effect you want.)
                    ans[] - array to store the answer.
                    nums1[] - array to store the first number.
                    nums2[] - array to store the second number.
                     ``` 
                            <tr class="question">
                                <td>Q1</td>
                                <td>6 + 2 = </td>
                                <td>
                                    <input type="text" name="ans[]" maxlength="2" style="width: 2.0em" />
                                    <input type="hidden" name="nums1[]" value="6" />
                                    <input type="hidden" name="nums2[]" value="2" />
                                </td>
                            </tr>
                            <tr><td colspan="3"></td></tr>                            
                        ```
                    
                    type="hidden" - Hidden fields hold the first and second numbers.
                    It is for checking purpose at later page.

                    Tips:
                    - PHP printf() Function [https://www.w3schools.com/php/func_string_printf.asp]
                */
                
            }
            ?>
            </table>
            <input type="submit" name="submit" value="Submit" />

            <!-- 
                Writing the PHP code to refresh the page. (Replace the 'xxx')

                Tips:
                - PHP echo and print Statements [https://www.w3schools.com/php/php_echo_print.asp]
                - PHP - $_SERVER [https://www.w3schools.com/Php/php_superglobals_server.asp]
                - PHP Syntax [https://www.w3schools.com/Php/php_syntax.asp]
             -->

            <input type="button" value="Re-Generate" onclick="location='xxx'"/>
        </form>
    </body>

    <!-- JavaScript to place focus (optional) -->
    <script type="text/javascript">
        // Focus on the 1st field --> 'ans[]'.
        document.getElementsByName("ans[]")[0].focus();
    </script>
</html>
