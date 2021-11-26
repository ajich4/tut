<?php $fruits = array('apple', 'banana', 'carrot', 'orange'); ?>

<?php include("header.php")?>
<?php include("sidebar.php")?>
index page

<small>Count of fruits: <?php echo count($fruits); ?></small>
<h1>for... each</h1>

<ul>
    <?php foreach($fruits as $fruit) {?>
        <li><?php echo $fruit; ?></li>  
        <?php }?>
    </ul>
    
    <hr>
    
    <h1>for loop</h1>
    
    <ul>
        <?php for ($i = 0; $i <= count($fruits) - 1; $i++) {?>
            <li><?php echo $fruits[$i];?></li>
            <?php } ?>
        </ul>
        
        <hr>
        
        <h1>while loop</h1>
        
        <ul>
            <?php
        $r = 0;
        while($r <= count($fruits) - 1) {?>
            <li><?php echo $fruits[$r]?></li>
            <?php $r += 1; }?>
        </ul>
        
        <hr>
        
        <h1>do...while</h1>
        <ul>
            <?php
        $t = 0;
        do {?>
            <li><?php echo $fruits[$t]; ?></li>
            <?php $t += 1; } while ($t <= count($fruits) - 1)?>
        </ul>

<?php include("footer.php")?>