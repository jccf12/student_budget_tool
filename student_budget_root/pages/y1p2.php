<?php

$remaining_fall_term_bill = $_POST['remaining_fall_term_bill'];

$remaining_spring_term_bill = $_POST['remaining_spring_term_bill'];

$outstanding = $_POST['outstanding'];

$loan_interest = $_POST['loan_interest'];

$savings_for_future = $_POST['savings_for_future'];
  
$food = $_POST['food'];

$transportation = $_POST['transportation'];

$other_bills = $_POST['other_bills'];

$misc_expenses = $_POST['misc_expenses'];

?>

<html xmlns="http://www.w3.org/1999/xhtml">
    
  <head>
      
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <style>
    
      body{
        background-color:#F2F2F2;
        font-family: 'Helvetica', sans-serif;
      }
      
      h3{
        font-weight:bolder;
        font-size:20pt;
        padding:22px;
        color:#757575;
      }
      
      button.startover{
        background-color:#8c8c8c;
        font-size:10pt;
        padding:5px 20px;
        color:#fff;
        border:0px;
        border-radius:10px;
        cursor:pointer;
      }
      
      p.disc{
        font-weight:normal;
        font-style:italic;
        font-size:9pt;
        margin-top:-20px;
        color:#757575;
      }
      
      h4{
        font-weight:bolder;
        font-size:16pt;
        padding:10px;
        color:#353535;
      }
      
      p.questions{
        padding-left:10px;
      }
    
      input{
        margin-bottom:20px;
        margin-left:10px;
        border-radius:10px;
        border:1px solid #219653;
        background-color:#fff;
        padding:5px;
      }
      
      input.check{
        margin-left:10px;
        margin-bottom:10px;
      }
      
      .submit_btn{
        border-radius:10px;
        border:1px solid #219653;
        background-color:#27AE60;
        color:#fff;
        font-size:15pt;
        padding:5px 25px;
      }
    
    </style>

  </head>
  
  <body>
    
    <center>
      
    <br/>
      
    <a href="../index.php"><button class="startover">
      Startover
    </button></a>
    
    <h3>
      Year Calculator - Income
    </h3>
    
    <p class="disc">
      If something doesn't apply, type 0. When not sure, estimate. Only type numbers. Do not use commas.
    </p>
      
    <br/><br/>
      
    </center>
      
    <div class="col-md-12">
      
      <form action="y1p3.php" method="post">
        
      <div class="col-md-1"></div>
      
      <div class="col-md-5">
        
        <h4>
          Current Funds Available:
        </h4>

          <p class="questions">Personal Savings:</p>
          <input type="text" name="personal_savings" />
        
          <p class="questions">Amount your family is contributing to your total term bills for the year:</p>
          <input type="text" name="family_contribution" />
        
      </div>
      
      <div class="col-md-5">
        
        <h4>
          Monthly:
        </h4>

          <p class="questions">Do you have work-study? (Check if participating in the program)</p>
          <input type="hidden" name="work_study"  value="0">
          <input type="checkbox" class="check" name="work_study" value="4200" />

          <p class="questions">Family Allowance (funds from family not used for Minerva bills, but for personal expenses):</p>
          <input type="text" name="allowance" />
        
      </div>
        
      <div class="col-md-1"></div>
        
      <div class="col-md-12">
        
        <center>
          
          <!-- Info from page before, not displayed -->
          <input type="hidden" name="remaining_fall_term_bill" value="<?php echo $remaining_fall_term_bill; ?>" />
          <input type="hidden" name="remaining_spring_term_bill" value="<?php echo $remaining_spring_term_bill; ?>" />
          <input type="hidden" name="outstanding" value="<?php echo $outstanding; ?>" />
          <input type="hidden" name="loan_interest" value="<?php echo $loan_interest; ?>" />
          <input type="hidden" name="savings_for_future" value="<?php echo $savings_for_future; ?>" />
          <input type="hidden" name="food" value="<?php echo $food; ?>"  />
          <input type="hidden" name="transportation" value="<?php echo $transportation; ?>" />
          <input type="hidden" name="other_bills" value="<?php echo $other_bills; ?>" />
          <input type="hidden" name="misc_expenses" value="<?php echo $misc_expenses; ?>" />
          
          <input type="submit" class="submit_btn" value="Next" style="margin-top:30px;margin-bottom:30px;"/>

          </form>

        </center>  
        
      </div>
      
    </div>
    
  </body>
  
</html>