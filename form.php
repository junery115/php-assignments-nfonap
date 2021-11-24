<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
 


<body>
   <div class="container-fluid" >
     <div class="row" >
       <div class="col-sm-4 col-sm-offset-4">
            <h4>Input 2 numbers and choose an operator</h4>
            <form action="/operate.php" method="GET" >
                <div class="form-group">
                  <label for="firstNumber">First Number:</label>
                  <input type="text" class="form-control" id="first_number" value = "" name="fnumber" required>
                </div>
                <div class="form-group">
                  <label for="secondNumber">Second number:</label>
                  <input type="text" class="form-control" name = "snumber" id="second_number" required>
                </div>
                <div class="form-group">
                  <label for="operator">Operator</label>
                <select id="operator" name= "operator" class="form-control">
                  <option>+</option>
                  <option>-</option>
                  <option>/</option>
                  <option>%</option>
                  <option>*</option>
                  <option>**</option>
                </select>
                </div>

                <div class="form-group">
                  <label for="operator">Click here to perform Operation</label> <br/>
                <input type="submit" name="submit" class="form-control" value="submit">
                </div>
              </form>

       </div>

     </div>
   
   </div>
   
   <script src="js/bootstrap.min.js"></script>
</body>
</html>