<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
  </head>
  <body>
    @include("navbar")
    <div class="row header-container justify-content-center">
    <div class="header">
           <h1>Student Management System</h1>
      </div>
    </div> 
 
    @if($layout == 'index')
    <div class="container-fluid mt-4">
        <div class="row">
          <section class="col-md-7">
            @include("studentslist")
          </section>
          <section class="col-md-5"></section>
        </div>
    </div>
    @elseif($layout == 'create')
    <div class="container-fluid mt-4">
        <div class="row">
          <section class="col-md-7">
              @include("studentslist")
            </section>
            <section class="col-md-5">
            <div class="card mb-3">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDx2brPdgsUZzJPa6uFnn2MBRLFKOorEGsc-AkkPH2ot7N2tOHKbc8OfGpfXfakzwT1jA&usqp=CAU" class="card-img-top" alt="...">
              <div class="card-body">
                <h6 class="card-title">Enter the information of the new student</h6>                
                <form action="{{ url('/store') }}" method="get" class="row g-3">
                @csrf
                  <div class="form-group">
                    <label>CNE</label>
                    <input type="text" name="cne"  class="form-control" id="cne" value="">
                  </div>
                  <div class="form-group">
                    <label>First Name</label>
                    <input type="text" name="firstname"  class="form-control" id="cne" value="">
                  </div>
                  <div class="form-group">
                    <label>Middle Name</label>
                    <input type="text" name="middlename"  class="form-control" id="cne" value="">
                  </div>
                  <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" name="lastname"  class="form-control" id="cne" value="">
                  </div>
                  <div class="form-group">
                    <label>Age</label>
                    <input type="text" name="age"  class="form-control" id="cne" value="">
                  </div>
                  <div class="form-group">
                    <label>Spciality</label>
                    <input type="text" name="speciality"  class="form-control" id="cne" value="">
                  </div>
                  <div class="form-group" style="margin-left:235px;">
                    <button type="submit" class="btn btn-info mb-3" value="Save">Save</button>
                    <button type="reset" class="btn btn-warning mb-3" value="Reset">Reset</button>
                  </div>
              </form>
              </div>
          </div>
                
            </section>
      </div>
    </div>   
    @elseif($layout == 'show')
    <div class="container-fluid mt-4">
      <div class="row">
      <section class="col">
            @include("studentslist")
          </section>
          <section class="col"></section>
      </div>     
    </div>    
    @elseif($layout == 'edit')
    <div class="container-fluid mt-4">
      <div class="row">
        <section class="col-md-7">
            @include("studentslist")
          </section>
          <section class="col-md-5">
          <div class="card mb-3">
              <img style="height:335px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRhq18h0IALTma9PhvFTjwTlNYOgI1exKHF7U10CLyaXPKUKBAvM1kE45iaWPiVYiZ8W88&usqp=CAU" class="card-img-top" alt="...">
              <div class="card-body">
              <h6 class="card-title">Update Information System</h6>
              <form action="{{ url('/update/'.$student->id) }}" class="row g-3">
                    <div class="form-group">
                      <label>CNE</label>
                      <input value="{{ $student->cne }}" type="text" name="cne"  class="form-control" id="cne" value="">
                    </div>
                    <div class="form-group">
                      <label>First Name</label>
                      <input value="{{ $student->firstname}}" type="text" name="firstname"  class="form-control" id="cne" value="">
                    </div>
                    <div class="form-group">
                      <label>Middle Name</label>
                      <input value="{{ $student->middlename }}" type="text" name="middlename"  class="form-control" id="cne" value="">
                    </div>
                    <div class="form-group">
                      <label>Last Name</label>
                      <input value="{{ $student->lastname }}" type="text" name="lastname"  class="form-control" id="cne" value="">
                    </div>
                    <div class="form-group">
                      <label>Age</label>
                      <input value="{{ $student->age }}" type="text" name="age"  class="form-control" id="cne" value="">
                    </div>
                    <div class="form-group">
                      <label>Spciality</label>
                      <input value="{{ $student->speciality }}" type="text" name="speciality"  class="form-control" id="cne" value="">
                    </div>
                    <div class="form-group" style="margin-left:215px;">
                      <button type="submit" class="btn btn-info mb-3" value="Update">Update</button>
                      <button type="reset" class="btn btn-warning mb-3" value="Reset">Reset</button>
                    </div>
                </form>
            </div>
          </div>
            
          </section>
      </div>
    </div>    
    @endif
    <footer></footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>