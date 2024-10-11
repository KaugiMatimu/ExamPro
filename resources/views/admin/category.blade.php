<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ExamPro Admin</title>
    <!-- plugins:css -->
     @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
       <!-- sidebar ends here  -->
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
         @include('admin.navbar')
         <!-- navbar ends here -->
        <!-- partial -->
        <div class="main-panel">
    <div class="content-wrapper">
        @if(session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
            {{ session()->get('message') }}
        </div>
        @endif

        <div class="d-flex justify-content-center">
            <div>
                <h2 class="text-center">Add Category</h2>
                <form class="form-inline" action="{{url('/add_category')}}" method="post">
                    @csrf
                    <div class="form-group mb-2">
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                        <label class="sr-only">Category</label>
                        <input type="text" class="form-control" name="category" id="" placeholder="Enter Category Here">
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Add</button>
                </form>
            </div>
        </div>
        <table class="table table-hover">
    <tr>
      <th scope="col">Category Name</th>
      <th scope="col">Action</th>
    </tr>
    @foreach($data as $data)
    <tr>
      <th scope="row">{{$data ->category_name}}</th>
      <td><a onclick="return confirm('Are You Sure You Want to Selete This?')" class="btn btn-danger" href="{{url('delete_category', $data->id)}}">Delete</a></td>
    </tr>
    @endforeach
</table>
    </div>
</div>

          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
           @include('admin.footer')
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
     @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>