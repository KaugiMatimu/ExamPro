<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ExamPro Admin</title>
    @include('admin.css')
    <style>
      /* Form Styling */
      form {
        background-color: #f8f9fa;
        padding: 20px;
        border-radius: 10px;
        max-width: 600px;
        margin: auto;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      }

      /* Label Styling */
      label {
        color: #333;
        font-weight: bold;
      }

      /* Input, Textarea, Select Styling */
      input[type="text"],
      input[type="number"],
      input[type="file"],
      textarea,
      select {
        color: #000;
        background-color: #fff;
        border: 1px solid #ced4da; /* Light gray border */
        padding: 10px;
        border-radius: 5px;
        width: 100%;
        box-sizing: border-box;
        transition: border-color 0.3s ease;;
      }



      /* File Input Styling */
      input[type="file"] {
        padding: 10px;
        cursor: pointer;
      }

      /* Submit Button */
      .btn-primary {
        background-color: #007bff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 16px;
        color: #fff;
        cursor: pointer;
      }

      /* Submit Button Hover */
      .btn-primary:hover {
        background-color: #0056b3;
      }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- Sidebar -->
      @include('admin.sidebar')

      <!-- Main Content -->
      <div class="container-fluid page-body-wrapper">
        <!-- Navbar -->
        @include('admin.navbar')

        <!-- Main Panel -->
        <div class="main-panel">
          <div class="content-wrapper">
          @if(session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
            {{ session()->get('message') }}
        </div>
        @endif
            <h2 class="text-center">Add Products</h2>
            <form action="{{url('/add_products')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="title">Title</label>
                  <input type="text" class="form-control" id="title" placeholder="Enter your title here" required name="title">
                </div>
                <div class="form-group col-md-6">
                  <label for="quantity">Quantity</label>
                  <input type="number" class="form-control" id="quantity" placeholder="Enter Quantity Here" required name="quantity">
                </div>
              </div>

              <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" id="price" placeholder="Enter Product's Price Here" min="0" required name="price">
              </div>

              <div class="form-group">
                <label for="Discount Price">Discount Price</label>
                <input type="number" class="form-control" required name="discount_price">
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="file">File</label>
                  <input type="file" class="form-control"  placeholder="Upload Files Here" required name="image">
                </div>
                <div class="form-group col-md-4">
                  <label for="category">Category</label>
                  <select class="form-control" style="background-color: #fff;" id="category" required name="category">
                    <option selected disabled>Choose Category...</option>
                    @foreach($category as $category)
                    <option>{{$category -> category_name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" rows="4" style="background-color: #fff; color: #000;" placeholder="Describe the content..." required name="description"></textarea>
              </div>

              <input type="submit" class="btn btn-primary" value="Submit">
            </form>
          </div>
        </div>

        <!-- Footer -->
        @include('admin.footer')
      </div>
    </div>

    <!-- Scripts -->
    @include('admin.script')
  </body>
</html>
