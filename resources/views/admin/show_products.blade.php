<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ExamPro Admin</title>

    <!-- plugins:css -->
    @include('admin.css')

    <style>
      .description-content {
        display: inline;
      }
      .read-more {
        color: blue;
        cursor: pointer;
        font-size: 0.9rem;
        margin-left: 5px;
      }
      .more-text {
        display: none;
      }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      @include('admin.sidebar')
      <div class="container-fluid page-body-wrapper">
        @include('admin.navbar')
        <div class="main-panel">
          <div class="content-wrapper">
          @if(session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
            {{ session()->get('message') }}
        </div>
        @endif
            <h2 class="text-center">Products</h2>
            
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">Title</th>
                  <th scope="col">Quantity</th>
                  <th scope="col">Category</th>
                  <th scope="col">Price</th>
                  <th scope="col">Discount Price</th>
                  <th scope="col">Description</th>
                  <th scope="col">Image</th>
                  <th scope="col">Delete</th>
                  <th scope="col">Edit</th>
                </tr>
              </thead>
              <tbody>
                @foreach($product as $product)
                <tr>
                  <th scope="row">{{$product->title}}</th>
                  <td>{{$product->quantity}}</td>
                  <td>{{$product->category}}</td>
                  <td>{{$product->price}}</td>
                  <td>{{$product->discount_price}}</td>

                  <!-- Description with Read More functionality -->
                  <td>
                    <span class="description-content">
                      {{ implode(' ', array_slice(explode(' ', $product->description), 0, 3)) }}...
                    </span>
                    <span class="more-text">
                      {{ implode(' ', array_slice(explode(' ', $product->description), 3)) }}
                    </span>
                    <span class="read-more" onclick="toggleReadMore(this)">Read More</span>
                  </td>

                  <td><img src="/product/{{$product->image}}" class="table-img" style="width: 100px; height:auto; object-fit: cover; border-radius: 0;"></td>
                  <td><a href="{{url('delete_products', $product->id)}}" onclick="return confirm ('Are You Sure You Want to Delete This?')" class="btn btn-danger">Delete</a></td>
                  <td><a href="{{url('update_products', $product -> id)}}" class="btn btn-success">Edit</a></td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        @include('admin.footer')
      </div>
    </div>

    @include('admin.script')

    <!-- JavaScript to toggle Read More/Read Less -->
    <script>
      function toggleReadMore(element) {
        const moreText = element.previousElementSibling;
        const dots = moreText.previousElementSibling;

        if (moreText.style.display === "none") {
          moreText.style.display = "inline";
          element.innerHTML = "Read Less";
        } else {
          moreText.style.display = "none";
          element.innerHTML = "Read More";
        }
      }
    </script>
  </body>
</html>
