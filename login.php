<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="test.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="#">WELCOME</a>
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
        <a class="nav-link" href="test.php">Main <span class="sr-only">(current)</span></a>
      </li>

  </ul>
</nav>
        <div class="container">
          <div class="jumbotron">
            <h1>REGISTRATION FORM!</h1>
            </div>
            <form class="" action="insert.php" method="post">

              <div class="form-row">

                <div class="form-group col-md-6">
                  <label for="fname">First Name</label>
                  <input type="text" class="form-control" name="fname" required>
                  </div>

                  <div class="form-group col-md-6">
                    <label for="lname">Last Name</label>
                    <input type="text" class="form-control" name="lname" required>

                  </div>
              </div>



    <div class="form-group ">
      <label for="email">Email</label>
      <input type="email" class="form-control" name="email" required>
  </div>

  <div class="form-row">

    <div class="form-group col-md-6">
      <label for="phno">Phone no</label>
      <input type="text" class="form-control" name="phno" required>
      </div>

      <div class="form-group col-md-6">
        <label for="edate">Date to be delivered by</label>
        <input type="text" class="form-control" name="edate" placeholder="dd-mm-yyyy"required>

      </div>
  </div>

  <div class="form-row">

    <div class="form-group col-md-6">
      <label for="frname">Fruit Name</label>
      <input type="text" class="form-control" name="frname" required>
      </div>

      <div class="form-group col-md-6">
        <label for="frquantity">Fruit Quantity in KG</label>
        <input type="text" class="form-control" name="frquantity" required>

      </div>
  </div>



  <div class="form-group">
    <label for="Address">Export Address</label>
    <input type="text" class="form-control" name="Address" placeholder="1234 Main St" required>
  </div>



  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="City">City</label>
      <input type="text" class="form-control" name="City" placeholder="Pune" required>
    </div>

    <div class="form-group col-md-6">
      <label for="State">State</label>
      <select name="State" class="form-control" required>
        <option selected>Choose...</option>
        <option value="Andaman">Andaman and Nicobar Islands</option>
        <option value="Andhra">Andhra Pradesh</option>
        <option value="Arunachal">Arunachal Pradesh</option>
        <option value="Assam">Assam</option>
        <option value="Bihar">Bihar</option>
        <option value="Chandigarh">Chandigarh</option>
        <option value="Chhattisgarh">	Chhattisgarh</option>
        <option value="Daman">Daman and Diu</option>
        <option value="Delhi">Delhi</option>
        <option value="Goa">Goa</option>
        <option value="Gujarat">	Gujarat</option>
        <option value="Haryana">Haryana</option>
        <option value="Himachal">Himachal Pradesh</option>
        <option value="Jammu">Jammu and Kashmir</option>
        <option value="Jharkhand">Jharkhand</option>
        <option value="Karnataka">Karnataka</option>
        <option value="Kerala">Kerala</option>
        <option value="Ladakh">Ladakh</option>
        <option value="Lakshadweep">Lakshadweep</option>
        <option value="Madhya">Madhya Pradesh</option>
        <option value="Maharashtra">	Maharashtra</option>
        <option value="Manipur">Manipur</option>
        <option value="Meghalaya">Meghalaya</option>
        <option value="Mizoram">Mizoram</option>
        <option value="Nagaland">Nagaland</option>
        <option value="Odisha">Odisha</option>
        <option value="Puducherry">Puducherry</option>
        <option value="Punjab">Punjab</option>
        <option value="Rajasthan">Rajasthan</option>
        <option value="Sikkim">Sikkim</option>
        <option value="Tamil">Tamil Nadu</option>
        <option value="Telangana">	Telangana</option>
        <option value="Tripura">Tripura</option>
        <option value="Uttar">Uttar Pradesh</option>
        <option value="Uttarakhand">Uttarakhand</option>
        <option value="West">West Bengal</option>
      </select>
    </div>


  </div>



        <button type="submit" class="btn btn-primary">Sign in</button> <t>
        <button type="submit" class="btn btn-primary">Update</button>
        <button type="submit" class="btn btn-primary">Delete</button>
            </form>
        </div>
        <div class="row fbottom">
          <div class="col-sm-6"></div>
          <div class="col-sm-6">
            <h6>Design & Developed by <strong><a href="#">Swapnil Jagtap</a></strong> © 2020</h6>
          </div>
        </div>
  </body>
</html>
