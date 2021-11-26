<?php $fruits = array('apple', 'banana', 'carrot'); ?>
<?php include("header.php")?>
<?php include("sidebar.php")?>
<?php 
        $name = 'Kevin'; 
        $gender = "F";
        $favorite_fruit = $fruits[1];
        $age = 12;
        ?>

<h1>My name is <?php echo $name; ?></h1>

<h2>
    I am a
    <?php if ($gender == 'M') {
        echo 'Male';
    } else {
        echo 'Female';
    }?>
    </h2>
    
    <h2>My favorite fruit is <?php echo $favorite_fruit; ?></h2>
    
    <h2>
        I am 
        <?php if ($age > 0 && $age < 18) {
            echo "a child";
        } else if ($age > 19 && $age < 29) {
            echo "a young adult";
        } else {
            echo "old as fuck";
        }?>
    </h2>
<?php include("footer.php")?>