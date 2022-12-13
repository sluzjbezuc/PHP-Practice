<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHPDEV </title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    
    <div class="code_container">

        


        <div class="header">           
               <?php include 'menu.inc.php' ?>	   
        </div>       

        <div class=data>

            <div class=profile_IMG>
                <?php echo '<img src="/img/betterfelix.jpg" alt="felix.jpg">'; ?>
            </div>

            <div class="about_me">
                <h1> <?php echo"$p" ?></h1>

                <div class="personalInfo">
                    <p>
                    <?php echo "My name is ", $name, " ", $surname . "<br>";
                    echo "I am located in ", $city, " " . "<br>";
                    echo "I am ", $age, " years old";
                    ?>
                    </p>       
                </div>
            </div>
        </div>

        <h2>SOME PHP FEATURES</h2>
        <div class="knowledge">
            <?php include 'knowledge.inc.php'; 
            echo $a, $b, $c . "<br>"
            ?>
        </div>

        <div class="article">
            <p class="text">
                The Matrix is a system, Neo. That system is our enemy. 
                When you're inside, you look around, what do you see? Businessmen, teachers, lawyers, carpenters. 
                The very minds of people we're trying to save, but until we do, 
                these people are still a part of that system and that makes them our enemy. 
            </p>
        </div>

        <?php include 'footer.inc.php' ?>

    </div>
</body>
</html>