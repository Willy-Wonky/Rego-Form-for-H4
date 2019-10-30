<!DOCTYPE HTML>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>Rego Form v.1.2</title>
  <link href="https://fonts.googleapis.com/css?family=Quando&display=swap" rel="stylesheet">
  
  	
</head>

<body>

    <?php include('rego.php'); ?>
    <div class="container">


        <!-- <p><span class="error">* required field</span></p> -->

        <form id="contact" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <h3>Register</h3>
            <h4>for our 30th Birthday weekend</h4>
            <fieldset>
                <input placeholder="Your Hash Handle" type="text" name="hashname" value="<?php echo $hashname;?>">
                <span class="error"><?php echo $hashnameErr;?></span>
            </fieldset>

            <fieldset>
                <input type="text" placeholder="Your real name" name="name" value="<?php echo $name;?>">
                <span class="error"><?php echo $nameErr;?></span>
            </fieldset>

            <fieldset>
                <input type="text" placeholder="Your home hash" name="kennel" value="<?php echo $kennel;?>">
                <span class="error"> <?php echo $kennelErr;?></span>
            </fieldset>

            <fieldset>
                <input type="text" placeholder="Your email address" name="email" value="<?php echo $email;?>">
                <span class="error"> <?php echo $emailErr;?></span>
            </fieldset>

            <fieldset>
                <input type="text" placeholder="Contact phone number" name="phone" value="<?php echo $phone;?>">
                <span class="error"> <?php echo $phoneErr;?></span>
            </fieldset>



            <h4>Food options</h4>
            <fieldset>
                <label class="options">Meat
                    <input type="radio" name="food" <?php if (isset($food) && $food=="meat") echo "checked";?>
                        value="meat">
                    <span class="checkmark"></span>
                </label>

                <label class="options">Veggie
                    <input type="radio" name="food" <?php if (isset($food) && $food=="veggie") echo "checked";?>
                        value="veggie">
                    <span class="checkmark"></span>
                </label>
                <label class="options">Other
                    <input type="radio" name="food" <?php if (isset($food) && $food=="other") echo "checked";?> value="other">
                    <span class="checkmark"></span>
                </label>
                <textarea placeholder="Allergies etc." name="comment"><?php echo $comment;?></textarea>
                <span class="error"><?php echo $commentErr;?></span>
            </fieldset>

            <fieldset>
                <h4>Drink options</h4>
                <label class="options">Beer
                    <input type="radio" name="drink" <?php if (isset($drink) && $drink=="beer") echo "checked";?> value="beer">
                    <span class="checkmark"></span>
                </label>
                <label class="options">Lager
                    <input type="radio" name="drink" <?php if (isset($drink) && $drink=="lager") echo "checked";?> value="lager">
                    <span class="checkmark"></span>
                </label>
                <label class="options">Cider
                    <input type="radio" name="drink" <?php if (isset($drink) && $drink=="cider") echo "checked";?> value="cider">
                    <span class="checkmark"></span>
                </label>
                <label class="options">Red Wine
                    <input type="radio" name="drink" <?php if (isset($drink) && $drink=="redwine") echo "checked";?> value="redwine">
                    <span class="checkmark"></span>
                </label>
                <label class="options">White Wine
                    <input type="radio" name="drink" <?php if (isset($drink) && $drink=="whitewine") echo "checked";?> value="whitewine">
                    <span class="checkmark"></span>
                </label>
                <label class="options">Soft
                    <input type="radio" name="drink" <?php if (isset($drink) && $drink=="soft") echo "checked";?> value="soft">
                    <span class="checkmark"></span>
                </label>
                <span class="error"><?php echo $drinkErr;?></span>
            </fieldset>

            <fieldset>
                <h4>Tee shirt sizes £8.00 each</h4>  
                    <label class="options">X Small - 36"
                         <input type="radio" name="tees" <?php if (isset($tees) && $tees=="xsmall") echo "checked";?> value="xsmall">
                         <span class="checkmark"></span>
                    </label>
                    <label class="options">Small - 38"
                         <input type="radio" name="tees" <?php if (isset($tees) && $tees=="small") echo "checked";?> value="small">
                         <span class="checkmark"></span>
                    </label>
                    <label class="options">Medium - 40”
                         <input type="radio" name="tees" <?php if (isset($tees) && $tees=="medium") echo "checked";?> value="medium">
                         <span class="checkmark"></span>
                    </label>
                    <label class="options">Large - 43”
                         <input type="radio" name="tees" <?php if (isset($tees) && $tees=="large") echo "checked";?> value="large">
                         <span class="checkmark"></span>
                    </label>
                    <label class="options">X Large - 47”
                         <input type="radio" name="tees" <?php if (isset($tees) && $tees=="xlarge") echo "checked";?> value="xlarge">
                         <span class="checkmark"></span>
                    </label>
                    <label class="options">XX Large - 51”
                         <input type="radio" name="tees" <?php if (isset($tees) && $tees=="xxlarge") echo "checked";?> value="xxlarge">
                         <span class="checkmark"></span>
                    </label>
                    <label class="options">Not required
                         <input type="radio" name="tees" <?php if (isset($tees) && $tees=="none") echo "checked";?> value="none">
                         <span class="checkmark"></span>
                    </label>
                
                <span class="error"><?php echo $teesErr;?></span>
            </fieldset>

            <fieldset class="sign">
                    
                    <h4>Important:</h4><p> I understand that I am attending this event entirely at my own risk &amp; that the organisers do not accept any
                            responsibility for any loss, damage or injury, however caused, sustained by any participant in this event or associated
                            activity.</p><p>Participants expressly waive their right to pursue any of the above or their agents for any loss, damage or injury
                            whilst taking part in this event or associated activities.</p><p>Dog owners personally accept full responsibility for any damage or
                            injury, however caused, by their animals.</p>
                    <label class="check">I agree
                        <input type="checkbox" name="sign" <?php if (isset($sign) && $sign=="checked") echo "checked";?> value="checked">
                        <span class="checkmark"></span>
                        <span class="error"><?php echo $signErr;?></span>
                    </label>
            </fieldset>


            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
            </fieldset>
        </form>
    </div>
    <?php
echo "<h2>Your Input:</h2>";
echo $hashname;
echo "<br>";
echo $name;
echo "<br>";
echo $kennel;
echo "<br>";
echo $email;
echo "<br>";
echo $phone;
echo "<br>";
echo $food;
echo "<br>";
echo $comment;
echo "<br>";
echo $drink;
echo "<br>";
echo $tees;
echo "<br>";
echo $sign;
?>

</body>

</html>