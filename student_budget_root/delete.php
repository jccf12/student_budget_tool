    <h3>
      Your balance is of <b style="color:#<?php 
          if($income > $expenses){echo '009933';}
          elseif($income == $expenses){echo '737373';}
          elseif($income < $expenses){echo 'e60000';}
        ?>"> USD <?php echo $balance; ?></b>
    </h3>
      
    <?php 
      
      if($income > $expenses){echo 'Your total income is grater than your total expenses';}
      elseif($income == $expenses){echo 'Your total income the same as your total expenses.';}
      elseif($income < $expenses){echo 'Your total income is less than your total expenses.';}
      
    ?>