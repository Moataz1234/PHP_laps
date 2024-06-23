<html>
    <head>
        <body>
        <?php 
     
     //task 1
    phpinfo();

     //task 2
     define('MY_SITE_NAME','php_project');
     echo MY_SITE_NAME."<br>";

     //task 3
    
     $age = 10;
     switch (true) {
            case ($age < 5):
                echo "Stay at home";
                break;
            case ($age == 5):
                echo "Go to Kindergarten";
                break;
            case ($age >= 6 && $age <= 12):
                echo "Go to grade " . $age-6;
                break;
            default:
                echo "Invalid age";
        }

        ?>
        </body>
    </head>
</html>