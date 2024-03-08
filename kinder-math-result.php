<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=8" />
        <title>Kinder Math Result</title>
        <link type="text/css" href="css/style.css" rel="Stylesheet" />
    </head>
    <body style="font-size: 1.2em">
        <h1>Your Result</h1>
        <?php
        /* 

            Check the submit button from 'kinder-math-ques.php' is clicked.

            Tips:
            - PHP if Statements [https://www.w3schools.com/php/php_if_else.asp]
            - PHP isset() Function [https://www.w3schools.com/php/func_var_isset.asp]
            - PHP - $_POST [https://www.w3schools.com/Php/php_superglobals_post.asp]
        */        
        
        {

            /* 

                Create multiple variables for the input elements which names are 'ans', 'nums1' and 'nums2'.
                Create a variable to count how many questions are correctly answer.

                Tips:
                - HTML Element Array, name="something[]" or name="something" [https://stackoverflow.com/questions/4688880/html-element-array-name-something-or-name-something]
                - PHP - $_POST [https://www.w3schools.com/Php/php_superglobals_post.asp]
            */             
            $ans   =   // Array of answers.
            $nums1 =   // Array of first numbers.
            $nums2 =  // Array of second numbers.
            $count =  // No. of correct.
            
            
            echo '<table cellspacing="0" cellpadding="10">';

            /* 

                Get the length of the '$ans'. (replace the '?' with the correct function to get the length of the array '$ans')

                Tips:
                - PHP count() Function [https://www.w3schools.com/php/func_array_count.asp]
            */    

            for ($i = 0; $i < ?; $i++)
            {
                $an = $ans  [$i]; // Get individual answer.
                $n1 = $nums1[$i]; // Get individual first number.
                $n2 = $nums2[$i]; // Get individual second number.

            /* 

                Checks if $an is the correct answer.
                
                There have a pre-written CSS code for doing the styling when answer is correct or wrong. (css/style.css)
                    - When answer is correct the class name for the HTML element is 'correct'
                    - When answer is wrong the class name for the HTML element is 'wrong'

                There have prepared images for correct or wrong answer.
                    - correct answer => 'images/correct-big.png'
                    - wrong answer => 'images/wrong-big.png'

                You also need to put different remark due to the answer correct or wrong.
                    - correct answer => 'Correct!'
                    - wrong answer => 'It should be <strong>(Here should put the correct answer)</strong>'

                Use the variable '$count' to track how many correct answer.

                Tips:
                - PHP if Statements [https://www.w3schools.com/php/php_if_else.asp]
                - PHP Casting [https://www.w3schools.com/php/php_casting.asp]
                - PHP - Concatenate Strings [https://www.w3schools.com/php/php_string_concatenate.asp]
            */ 


            /*
                Print the question and answer. (Below is the HTML code to create a design like the question mention, please do the modification in order to achieve the effect you want.)
                    ``` 
                        <tr class="wrong">
                            <td>Q1.</td> // Question number. replace the '1' with the correct format (Q%?)
                            <td>6 + 2 = 10</td> // Question. replace the 6 and 2 with the correct format (%? + %? = %?)
                            <td><img src="images/wrong-big.png" alt="" /></td>
                            <td>It should be <strong>8</strong></td> //  replace the '8' with the correct answer (%?)
                        </tr>
                        <tr><td colspan="4"></td></tr>                            
                    ```

                Use %s for $an so that empty string, won't be displayed as 0 (zero).


                Tips:
                - PHP printf() Function [https://www.w3schools.com/php/func_string_printf.asp]
            */
            

            }
            echo '</table>';


            /*
                Print the message and hyperlink. (Below is the HTML code to create a design like the message and hyperlink mention, please do the modification in order to achieve the effect you want.)
                    ``` 
                        You get <strong>2</strong> correct out of 5 questions.
                        <a href="./kinder-math-ques.php">Try again</a>.                            
                    ```
                

                Use %s for $an so that empty string, won't be displayed as 0 (zero).


                Tips:
                - PHP printf() Function [https://www.w3schools.com/php/func_string_printf.asp]
                - PHP count() Function [https://www.w3schools.com/php/func_array_count.asp]
            */            


        }
        else // GET or hacks.
        {
            echo '
                <p>
                <strong>OOPS...</strong>
                You should
                <a href="./kinder-math-ques.php">answer the questions</a>
                first.
                </p>
                ';
        }
        ?>
    </body>
</html>
