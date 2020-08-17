<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>


<form method="post" action="{{route('intern.store')}}">
    @csrf
       
    @method('PUT')
        

        <div class="col-sm-6">
        <div class="form-group">
            <label for="dd">Date</label>
            <input type="text" class="form-control" id="dd" name="dd" >
        </div>

        
       
        <div class="form-group">
            <label for="cname">Name</label>
            <input type="text" class="form-control" id="cname" name="cname" >
        </div>

   

        <div class="form-group">
            <label for="num">Lucky Number:</label>
            <input type="text" class="form-control" id="num" name="num" >
        </div>

        <div class="form-group">
            <label for="numb">Amout:</label>
            <input type="text" class="form-control" id="amount" name="amount" >
        </div>
		<button type="submit" class="btn btn-primary">Update</button>
		</form>


</body>
</html>