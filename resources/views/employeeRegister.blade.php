<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
      
    </head>
    <body>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" 
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" 
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
          
                  
    
        <form method="post" action="{{route('emp_post')}}">
        @csrf
        <div class="col-sm-6">
        <div class="form-group">
            <label for="numb">ID</label>
            <input type="number" class="form-control" id="idNum" name="idNum">
        </div>

        <div class="form-group">
            <label for="numb">Name</label>
            <input type="text" class="form-control" id="ename" name="ename">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="mail" aria-describedby="emailHelp" name="mail">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="pass" name="pass">
        </div>
     
        <div class="form-group">
            <label for="numb">DOB</label>
            <input type="date" class="form-control" id="dob" name="dob">
        </div>
        <div class="form-group">
            <label for="numb">NRC</label>
            <input type="text" class="form-control" id="nrc" name="nrc">
        </div>
        <div class="form-group">
            <label for="numb">Nationality</label>
            <input type="text" class="form-control" id="national" name="national">
        </div>
        
       
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="reset"  class="btn btn-primary" >Cancel</button>
    </div>
</form>



                
    </body>
</html>
