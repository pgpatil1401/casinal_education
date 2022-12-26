<!doctype html>
<html lang="en">
  <head>
    <title>Add Course</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Course list</h3>
          <table class="table table-hover">
            <thead>
             <tr>
                <th>s.no</th>
                <th>course_id</th>
                <th>coure_name</th>
                <th>fees</th>
                <th>status</th>
             </tr>
           </thead>
            <tbody>
                <!-- @foreach($categories as $category) -->
                <tr>
                <!-- <td>{{$loop->index+1}}</td> -->
                <td>25632</td>
                <td>Laravel</td>
                <td>15000</td>
                <td>
                 <input type="submit" class="btn btn-primary   " value="edit">  
                 <input type="submit" class="btn btn-danger  " value="delete">  
                </td>
            <!-- @endforeach         -->
            
        </tr>
            </tbody>
            
          </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</html>