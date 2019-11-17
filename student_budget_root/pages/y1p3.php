<?php

$remaining_fall_term_bill = $_POST['remaining_fall_term_bill'];
$remaining_spring_term_bill = $_POST['remaining_spring_term_bill'];
$outstanding = $_POST['outstanding'];
$loan_interest = $_POST['loan_interest'];
$savings_for_future = $_POST['savings_for_future'];
$food = $_POST['food'];
$transportation = $_POST['transportation'];
$other_bills = $_POST['other_bills'];
$misc_expenses = $_POST['misc_expenses'] ;

$personal_savings = $_POST['personal_savings'];
$work_study = $_POST['work_study'];
$allowance = $_POST['allowance'];
$family_contribution = $_POST['family_contribution'];

$income = $personal_savings + $work_study + $allowance + $family_contribution;
$expenses = $remaining_fall_term_bill + $remaining_spring_term_bill + $outstanding + $loan_interest + $savings_for_future + $food + $transportation + $other_bills + $misc_expenses;

$personal_expenses =  $food + $transportation + $other_bills + $misc_expenses;

$personal_expenses_and_saving =  $food + $transportation + $other_bills + $misc_expenses + $savings_for_future;

$balance = $income - $expenses;



$mothly_expenses = $food + $transportation + $other_bills + $misc_expenses + ($savings_for_future / 8);

$annual_balance = -($remaining_fall_term_bill + $remaining_spring_term_bill + $outstanding + $remaining_fall_term_bill) + $family_contribution;
$month_balance = -($food + $transportation + $other_bills + $misc_expenses + ($savings_for_future / 8)) + $allowance + ($work_study/8);

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
        text-align:center;
      }
      
      button.startover{
        background-color:#EDB13B;
        font-size:14pt;
        padding:10px 40px;
        color:#272727;
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
        padding-right:10px;
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
      
    <br/>
    
    <h3>
      Year Calculator
    </h3>
      
    <div class="col-md-1"></div>
      
    <div class="col-md-10" style="margin:40px 0px;">
      
      <table style="width:100%;">
        
        <tr style="font-weight:bolder;">
        
          <td style="padding:0px 20px">
          
            Annual Expenses<br/><br/>
          
          </td>
          
          <td style="padding:0px 20px">
          
           Monthly Expenses<br/><br/>
              
          </td>
        
        </tr>
        
        <tr>
        
          <td style="vertical-align:top;padding:0px 20px;">
          
            <table style="width:100%">
              
            <tr>
              <td> Amount remaining on fall term bill: </td>
              <td style="color:#f45642;padding:10px;"> U$ <?php echo $remaining_fall_term_bill; ?> </td>
            </tr>
              
            <tr>
              <td> Amount remaining on spring term bill: </td>
              <td style="color:#f45642;padding:10px;"> U$ <?php echo $remaining_spring_term_bill; ?> </td>
            </tr>
              
            <tr>
              <td> Outstanding amounts: </td>
              <td style="color:#f45642;padding:10px;"> U$ <?php echo $outstanding; ?> </td>
            </tr>
              
            <tr>
              <td> Annual Loan Interest: </td>
              <td style="color:#f45642;padding:10px;"> U$ <?php echo $remaining_fall_term_bill; ?> </td>
            </tr>
              
            <tr>
              <td> Family contribution for your bills: </td>
              <td style="color:#0fbf0f;padding:10px;"> U$ <?php echo $family_contribution; ?> </td>
            </tr>
              
            <tr border="0" style="font-weight:bolder;">
              <td> <br/>Balance:<br/><br/> </td>
              <td style="color:#<?php if($annual_balance >= 0){echo '0fbf0f';}else{echo 'f45642';} ?>;padding:10px;"> <br/> U$ <?php echo $annual_balance; ?> <br/><br/></td>
            </tr>
              
            <tr style="height:1px;background-color:#686868"><td></td><td></td></tr> 

            <tr>
              <td style="font-weight:bolder;"> <br/>Personal Savings: </td>
              <td style="color:#0fbf0f;padding:10px;"> <br/>U$ <?php echo $personal_savings; ?> </td>
            </tr>
              
            </table>
              
          </td>
          
          <td style="vertical-align:top;padding:0px 20px">
          
            <table style="width:100%">
              
            <tr>
              <td> Food: </td>
              <td style="color:#f45642;padding:10px;"> U$ <?php echo $food; ?> </td>
            </tr>
              
            <tr>
              <td> Transportation: </td>
              <td style="color:#f45642;padding:10px;"> U$ <?php echo $transportation; ?> </td>
            </tr>
              
            <tr>
              <td> Bills: </td>
              <td style="color:#f45642;padding:10px;"> U$ <?php echo $other_bills; ?> </td>
            </tr>
              
            <tr>
              <td> Misc. Expenses: </td>
              <td style="color:#f45642;padding:10px;"> U$ <?php echo $misc_expenses; ?> </td>
            </tr>
              
            <tr>
              <td> Saving (divided per 8 months): </td>
              <td style="color:#f45642;padding:10px;"> U$ <?php echo $savings_for_future / 8; ?> </td>
            </tr>
              
            <tr>
              <td> Allowance: </td>
              <td style="color:#0fbf0f;padding:10px;"> U$ <?php echo $allowance; ?> </td>
            </tr>
              
            <tr>
              <td> Work-Study*: </td>
              <td style="color:#0fbf0f;padding:10px;"> U$ <?php echo $work_study / 8; ?> </td>  
            </tr>
              
            <tr border="0" style="font-weight:bolder;">
              <td> <br/>Balance: </td>
              <td style="color:#<?php if($month_balance >= 0){echo '0fbf0f';}else{echo 'f45642';} ?>;padding:10px;"> <br/> U$ <?php echo $month_balance; ?> </td>
            </tr>

            </table>

          </td>
  
        </tr>
        
      </table>
      
      <p style="text-align:left;padding:20px 20px;font-size:9pt;">
        *We are considering the total work-study money you can make in a year and dividing by 8 months. We are also considering taxes and rounding the hourly pay to U$ 14.
      </p>
      
    </div>
      
    <div class="col-md-1"></div>
     
    </div>
    
    <div class="col-md-12">
      
    <div class="col-md-1"></div>
      
      <div class="col-md-5" style="padding:30px 30px">
        
        <h4>
          <b>Work-Study:</b>
        </h4>

        <p class="questions">
          If you are part of the work-study program you can make up to <b>U$ 4200</b> per academic year (considering a pay of <b>U$14</b> per hour, after tax deduction. Be mindful that this number may vary).
          Your total monthly expenses, subtracting your family allowance, are of <b> U$ <?php echo $mothly_expenses - $allowance; ?>. </b> Which means 
         
          <?php 
            if( ($mothly_expenses - $allowance) <= ($work_study / 8) ){echo 'work-study money will be able to cover all your expected expenses.';}
            elseif( ($mothly_expenses - $allowance) > ($work_study / 8) ){echo 'work-study money will NOT be able to cover all your expected expenses.';} 
          ?>
          
          To pay for these expenses, you need to work at least <b> <?php echo round ( ($mothly_expenses - $allowance ) /14 /4 ,2 ); ?> </b> hours per week. But consider working more hours, if possible, to save for future expenses or unpredicted events.
          

          
        </p>      
        
        <br/><br/>
        
        <h4>
          <b>Saving for something:</b>
        </h4>

        <p class="questions">
          Considering you want to save <b>U$ <?php echo $savings_for_future; ?></b> by the end of the year. You can either save <b>U$ <?php echo $savings_for_future / 8; ?></b> per month during the academic year or save <b>U$ <?php echo $savings_for_future / 4; ?></b> per month during the first semester (first 4 months).
        </p>
        
      </div>
      
      <div class="col-md-5" style="padding:30px 30px">
        
        <h4>
          <b>Spending less:</b>
        </h4>
 
        <p class="questions">
          If you reduce your expenses with food and transportation by 10% (maybe by cooking more of your meals or using more public transportation instead of services like Uber) you can save extra <b>U$ <?php echo (($transportation + $food) * 8) * 0.1 ?> </b> during the year, that is  <b>U$ <?php echo (($transportation + $food) * 4) * 0.1 ?> </b> each semester.
        </p>
        
      </div>
      
      <div class="col-md-1"></div>
 
    
    <div class="col-md-12">
      
      <br/>
      
      <center><a href="../start.php"><button class="startover">
        Do it again
      </button></a></center>
      
      <br/><br/>
      
    </div>
    
  </body>
  
</html>