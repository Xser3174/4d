<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>


	<div class="col-sm-6 center">  
	<div class="form-group"> 

		<table class="table">	
			<thread class="thead-grey">
					<tr>
						<th scope="">Id</th>
						<th scope="">Date</th>
						<th scope="">Name</th>
						<th scope="">Digit</th>
						<th scope="">Amount</th>
						
					</tr>
			</thread>
			
			@foreach($show as $row)
			<tr>
				<td>{{$row->id}}</td>
				<td>{{$row->dd}}</td>
				<td>{{$row->cname}}</td>
				<td>{{$row->num}}</td>
				<td>{{$row->amount}}</td>
				<td><a href="{{route('intern.editer',$row->id)}}">Edit</a></td>
			</tr>
			@endforeach
		</table>
	</div>
	</div>
</body>
</html>