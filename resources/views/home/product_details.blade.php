<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Exam Pro - View Details</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="home/assets/img/favicon.png" rel="icon">
    <link href="home/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Vendor CSS Files -->
    <link href="home/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="home/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="home/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="home/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="home/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="home/assets/css/style.css" rel="stylesheet">

    <style>
        /* Styles scoped to product-container */
        .product-container .product-details-card {
            background-color: #ffffff;
            padding: 30px;
            margin: 40px auto 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }
        .product-container .product-details-card:hover {
            transform: translateY(-5px);
        }

        .product-container .icon {
            font-size: 48px;
            color: #007bff;
            margin-bottom: 15px;
        }

        .product-container .product-title {
            font-size: 24px;
            font-weight: 700;
            color: #333;
            margin-bottom: 15px;
            text-align: center;
        }

        .product-container .description {
            font-size: 15px;
            line-height: 1.8;
            color: #666;
            margin-bottom: 20px;
        }

        .product-container .services-list {
            list-style: none;
            padding-left: 0;
            color: #444;
        }

        .product-container .services-list li {
            font-size: 14px;
            margin: 5px 0;
            display: flex;
            align-items: center;
        }

        .product-container .services-list li i {
            color: #28a745;
            margin-right: 10px;
        }

        .product-container .price-info {
            font-weight: bold;
            color: #28a745;
        }

        .product-container .discounted-price {
            text-decoration: line-through;
            color: #d9534f;
        }

        .product-container .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            transition: all 0.3s ease;
        }

        .product-container .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        /* Floating WhatsApp Button */
        .whatsapp-button {
            position: fixed;
            bottom: 20px;
            left: 20px;
            background-color: #25D366;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            z-index: 1000;
        }

        .whatsapp-button img {
            width: 35px;
            height: 35px;
        }
   .checked {
  color: orange;
}
    .icon-box {
      padding: 30px;
      position: relative;
      overflow: hidden;
      background: #fff;
      box-shadow: 0 0 29px rgba(0, 0, 0, 0.08);
      transition: all 0.3s ease-in-out;
      border-radius: 8px;
    }
    .icon-box .icon {
      margin-bottom: 10px;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 40px;
      color: #47b2e4;
    }
    .icon-box h4 {
      font-weight: 700;
      margin-bottom: 15px;
      font-size: 22px;
    }
    .icon-box p {
      font-size: 14px;
      margin-bottom: 0;
    }
    .services-list {
      list-style-type: none;
      padding: 0;
      font-size: 0.9em;
      line-height: 1.6em;
    }
    .services-list li {
      margin: 5px 0;
      display: flex;
      align-items: center;
    }
    .services-list li i {
      color: #28a745;
      margin-right: 10px;
      font-size: 1.2em;
    }
    .services-list li:hover i {
      color: #218838;
    }
            .whatsapp-button {
            position: fixed;
            bottom: 20px;
            left: 20px;
            background-color: #25D366;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            z-index: 1000;
        }
        .whatsapp-button img {
            width: 35px;
            height: 35px;
        }
        .nav-link .badge {
  background-color: red;
  color: white;
  border-radius: 50%;
  padding: 2px 6px;
  font-size: 12px;
  vertical-align: top;
  margin-left: 5px;
}
.services.section-bg {
  background-color: #f8f9fa; /* Light background color */
  padding: 60px 0;
}

.section-title {
  margin-bottom: 40px;
}

.section-title span {
  display: block;
  font-size: 18px;
  color: #007bff; /* Primary color for the accent */
  font-weight: bold;
  margin-bottom: 10px;
}

.section-title h2 {
  font-size: 32px;
  font-weight: 700;
  margin-bottom: 20px;
  color: #333;
}

.section-title p {
  color: #555;
}

.icon-box {
  background: #ffffff;
  border-radius: 10px;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
  transition: transform 0.3s;
}

.icon-box:hover {
  transform: translateY(-10px);
}

.icon {
  font-size: 48px;
  margin-bottom: 15px;
}

.services-list {
  margin-top: 20px;
  padding-left: 0;
}

.services-list li {
  margin-bottom: 10px;
  font-size: 14px;
  line-height: 1.5;
}

#logincss{
  margin-right:20px;
  color:#fff;
  text-align: center;
  display: inline-block;
  padding: 10px 20px; 
  width: auto; 
  vertical-align: middle;
}
#signupcss{
  color:#fff;
  text-align: center;
  display: inline-block;
  padding: 10px 20px; 
  width: auto; 
  vertical-align: middle;
}
#blogscss{
  margin-right:20px;
}
    </style>
</head>

<body>
    <!-- Start of Header -->
    @include('home.header')

    <!-- Main Product Section -->
    <div class="container my-5 product-container">
        <div class="col-lg-8 mx-auto">
            <div class="product-details-card">
                <div class="icon text-center"><i class="bi bi-card-checklist"></i></div>
                <h2 class="product-title">{{ $product->title }}</h2>
                <p class="description">
                    Streamline your prep with ExamPro's TEAS Test Study Guide. This concise, expertly crafted guide breaks down key concepts into easy-to-understand sections, ensuring you’re ready to tackle the exam with confidence.
                </p>
                <ul class="services-list">
                    <li><i class="bi bi-check-circle"></i> Concise, easy-to-understand breakdowns of key concepts</li>
                    <li><i class="bi bi-check-circle"></i> Practice questions with detailed explanations</li>
                    <li><i class="bi bi-check-circle"></i> Proven strategies for mastering each exam section</li>
                    <li><i class="bi bi-check-circle"></i> Tips for time management and test-taking success</li>
                </ul>
                <div class="text-center mt-3">
                    @if($product->discount_price != null)
                        <h5 class="discounted-price">Original Price: ${{ $product->price }}</h5>
                        <h5 class="price-info">Discounted Price: ${{ $product->discount_price }}</h5>
                    @else
                        <h5 class="price-info">Price: ${{ $product->price }}</h5>
                    @endif
                    <a href="#about" class="btn btn-primary mt-3">Order Now</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Floating WhatsApp Button -->
    <a href="https://wa.me/254740303088" class="whatsapp-button" target="_blank">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp"> 
    </a>

    <!-- Start of Footer -->
    @include('home.footer')

    <!-- Back to Top -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="home/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="home/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="home/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="home/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="home/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="home/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="home/assets/js/main.js"></script>
</body>
</html>
