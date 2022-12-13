<div class="card mb-3">
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSlPi-qDw_LMwkDXtzHmfxjbjmpg8fUl3vEiq-nZ74BIyD3ksqycoXyof0WqguRSXq0YY4&usqp=CAU" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">List of Students</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">CNE</th>
      <th scope="col">Full Name</th>      
      <th scope="col">Age</th>
      <th scope="col">Speciality</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($students as $student)
    <tr>
     
      <td>{{$student->cne}}</td>
      <td>{{$student->firstname}} {{$student->middlename}} {{$student->lastname}}</td>       
      <td>{{$student->age}}</td>
      <td>{{$student->speciality}}</td>
      <td>
        <!-- <a href="#" class="btn btn-sm btn-info">Show</a> -->
        <a href="{{url('/edit/'.$student->id)}}" class="btn btn-sm btn-warning">Edit</a>
        <!-- <a href='delete/{{$student->id}}' class="btn btn-sm btn-danger">Delete</a> -->
      </td>
      @endforeach
    </tr>
   
  </tbody>
</table>
  </div>
</div>


