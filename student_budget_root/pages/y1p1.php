<!DOCTYPE html>
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
        border:1px solid #FF0000;
        background-color:#fff;
        padding:5px;
      }
      
      .submit_btn{
        border-radius:10px;
        border:1px solid #FF0000;
        background-color:#FF4848;
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
      Year Calculator - Expenses
    </h3>
    
    <p class="disc">
      If something doesn't apply, type 0. When not sure, estimate. Only type numbers. Do not use commas.
    </p>
      
    <br/><br/>
      
    </center>
      
    <div class="col-md-12">
      
      <form action="y1p2.php" method="post">
        
      <div class="col-md-1"></div>
       
      <div class="col-md-5">
        
        <h4>
          Expenses - Fixed:
        </h4>

          <p class="questions">Amount remaining on fall term bill:</p>
          <input type="text" name="remaining_fall_term_bill" />

          <p class="questions">Amount remaining on spring term bill:</p>
          <input type="text" name="remaining_spring_term_bill" />
        
          <p class="questions">Other outstanding amounts (e.g. unpaid taxes from 2017-18):</p>
          <input type="text" name="outstanding" />
        
          <p class="questions">Annual Loan Interest:</p>
          <input type="text" name="loan_interest" />
        
          <p class="questions">Savings for flights and other anticipated expenses:</p>
          <input type="text" name="savings_for_future" />
        
      </div>
      
      <div class="col-md-5">
        
        <h4>
          Expenses - Variable:
        </h4>

          <p class="questions">Food (for one month):</p>
          <input type="text" name="food" />

          <p class="questions">Transportation (for one month):</p>
          <input type="text" name="transportation" />
        
          <p class="questions">Other bills (e.g. phone, for one month):</p>
          <input type="text" name="other_bills" />
        
          <p class="questions">Misc. Expenses (for one month):</p>
          <input type="text" name="misc_expenses" />
        
      </div>
        
      <div class="col-md-1"></div>
        
      <div class="col-md-12">
        
        <center>

          <input type="submit" class="submit_btn" value="Next" style="margin-top:30px;margin-bottom:30px;"/>

          </form>

        </center>  
        
      </div>
        
      
    </div>
    
  </body>
  
</html>