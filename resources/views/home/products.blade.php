<section id="featured-services" class="featured-services">
    <div class="container">
        <div class="row">
            <!-- Removed staffs -->
            <div class="col-lg-4 col-md-6">
                <div class="icon-box">
                    <img src="home/assets/img/exampro.png" alt="Exampro Image" class="img-fluid">
                </div>
            </div>
            @foreach($product as $products)
                <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-card-checklist"></i></div>
                        <h2 class="title"><a href="">{{ $products->title }}</a></h2>
                        <p class="description">Streamline your prep with ExamPro's TEAS Test Study Guide. This concise,
                            expertly crafted guide breaks down key concepts into easy-to-understand sections, ensuring you’re ready to tackle the exam with confidence. Our offerings include:
                            <ul>
                                <li><b>Concise, easy-to-understand breakdowns of key concepts</b></li>
                                <li><b>Practice questions with detailed explanations</b></li>
                                <li><b>Proven strategies for mastering each exam section</b></li>
                                <li><b>Tips for time management and test-taking success</b></li>
                            </ul>
                        </p>
                        @if($products->discount_price != null)
                            <h5 style="text-decoration: line-through; color: red;">Price ${{ $products->price }}</h5>
                            <h5>Discounted Price ${{ $products->discount_price }}</h5>
                        @else
                            <h5 style="color: blue;">Price ${{ $products->price }}</h5>
                        @endif
                        <a class="btn btn-primary me-2" href="#about">Order Now</a>
                        <a class="btn btn-info" href="{{url('product_details', $products->id)}}">View Details</a>
                    </div>
                </div>
            @endforeach
            {!! $product->withQueryString()->links('pagination::bootstrap-5') !!}
        </div>
    </div>
</section>
