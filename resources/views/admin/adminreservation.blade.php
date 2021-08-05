<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
   
   @include("admin.admincss")
   
  </head>
  <body>
    
   <div class="container-scroller">
     
  	@include("admin.navbar")




  	<div style="position: relative; top: 70px; right: -150;">


  		<table bgcolor="grey" border="1px">
  			
  			<tr>
  				<th style="padding: 30px;">Name</th>
  				<th style="padding: 30px;">email</th>
  				<th style="padding: 30px;">phone</th>
  				<th style="padding: 30px;">date</th>
  				<th style="padding: 30px;">time</th>
  				<th style="padding: 30px;">Message</th>
  				

  			</tr>

  			@foreach($data as $data)

  			<tr align="center">

  				<td>{{$data->name}}</td>
  				<td>{{$data->email}}</td>
  				<td>{{$data->phone}}</td>
  				<td>{{$data->date}}</td>
  				<td>{{$data->time}}</td>
  				<td>{{$data->message}}</td>
  				



  			</tr>

  			@endforeach






  		</table>
  		





  	</div>

  
  </div>

   @include("admin.adminscript")


  </body>
</html>