@extends('frontend.layouts.template')
@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero">
  <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

    <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    <div class="carousel-inner" role="listbox">

      <!-- Slide 1 -->
      <div class="carousel-item active" style="background-image: url({{ asset('assets/img/slide/slide-1.jpg') }})">
        <div class="carousel-container">                       
          <div class="container">
            <h2 class="animate__animated animate__fadeInDown ">সৃষ্টি ওয়েলফেয়ার ফাউন্ডেশন</span></h2>
            <p class="animate__animated animate__fadeInUp">দিন বদলের লক্ষ্যে অসহায়ত্বের পাশে আছি আমরা ...</p>
            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
          </div>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item" style="background-image: url({{ asset('assets/img/slide/slide-2.jpg') }})">
        <div class="carousel-container">
          <div class="container">
            <h2 class="animate__animated animate__fadeInDown">SREESTY WELFARE FOUNDATION</h2>
            <p class="animate__animated animate__fadeInUp">We are on the side of helplessness with the aim of change the day ...</p>
            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
          </div>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item" style="background-image: url('{{ asset('assets/img/slide/slide-3.jpg') }}')">
        <div class="carousel-container">
          <div class="container">
            <h2 class="animate__animated animate__fadeInDown">সৃষ্টি ওয়েলফেয়ার ফাউন্ডেশনে </h2>
            <p class="animate__animated animate__fadeInUp">আর্ত-মানবতা এবং জনকল্যানমূলক সেবায় কাজ করার লক্ষ্যে ২০২১ খ্রিষ্টাব্দে প্রতিষ্ঠিত হয় </p>
            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
          </div>
        </div>
      </div>

    </div>

    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
    </a>

    <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
    </a>

  </div>
</section><!-- End Hero -->


<main id="main">

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container text-justify">

      <div class="row ">
        <div class="col-lg-6 pt-4 pt-lg-0">
          <p>
            <h3>সংগঠনের কার্যালয় :</h3>
            কার্যনির্বাহী পরিষদের সিদ্ধান্ত মোতাবেক বাংলাদেশের সকল বিভাগের সকল জেলার যে কোন জায়গায় স্থায়ী বা অস্থায়ীভাবে কেন্দ্রীয়
            কার্যালয় স্থাপন করতে পারবে। পরবর্তীতে সংগঠনের আর্থিক অবস্থা বিবেচনা সাপেক্ষে যেকোন সুবিধাজনক স্থানে নিজ অথবা
            ভাড়া করা ভবনে সংগঠনের স্থায়ী কার্যালয় স্থাপন করা হবে। তবে এক্ষেত্রে কার্যনির্বাহী পরিষদের কমপক্ষে দুই তৃতীয়াংশ সদস্য
            একমত হতে হবে। অন্যথায় উপদেষ্টা পরিষদের সংখ্যাগরিষ্ঠ সদস্যের সিদ্ধান্ত চূড়ান্ত বলে গণ্য হবে।
          </p>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0">
          <p>
            <h3>সংগঠনের ধরণ এবং বৈশিষ্ট্য : </h3>
            সৃষ্টি ওয়েলফেয়ার ফাউন্ডেশন একটি সম্পূর্ণ অসাম্প্রদায়িক, অরাজনৈতিক, অলাভজনক, সেচ্ছাসেবী, সামাজিক, গণতান্ত্রিক
            এবং জনকল্যাণমূলক সংগঠন। এই সংগঠনের কোন অঙ্গ সংগঠন হিসেবে কাজ করবে না। অদূর ভবিষ্যতে সমাজসেবা অধিদপ্তর 
            থেকে সেচ্ছাসেবী সমাজকল্যান সংস্থা (নিবন্ধন ও নিয়ন্ত্রন) অধ্যাদেশ ১৯৬১ ও সংশ্লিষ্ট বিধিমালা, ১৯৬২ এর আওতায় সেচ্ছাসেবী 
            সংস্থা ও প্রতিষ্ঠান হিসেবে নিবন্ধন করা হবে এবং গণপ্রজাতন্ত্রী বাংলাদেশ সরকার কর্তৃক গ্রহীত সকল বিধি বিধান পুক্সখানুপুক্সখভাবে 
            অনুসরণ করা হবে।
          </p>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0">
          <p>
            <h3>কার্য এলাকা : </h3>
            এই প্রতিষ্ঠানের কার্য এলাকা বাংলাদেশের প্রতিটি জেলা-উপজেলার তৃণমূল পর্যন্ত দেশের মানুষের নুন্যতম সুবিধার পাশাপাশি
             গভঃ অনুমোদন সাপেক্ষে বিদেশেও সেবা প্রদান করা হবে। পরবর্তীতে আলাদা আলাদাভাবে কার্যনির্বাহী পরিষদ এবং উপদেষ্টা 
             পরিষদের দুই তৃতীয়াংশ সদস্যের মতামতের ভিত্তিতে বাংলাদেশের প্রতিটি বিভাগে কার্য এলাকা সম্প্রসারণ করা যেতে পারে।
          </p>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->

  <!-- ======= Clients Section ======= -->
  <section id="clients" class="clients section-bg">
    <div class="container">

      <div class="row">

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="{{asset('assets/img/clients/client-.png')}}" class="img-fluid" alt="">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="{{asset('assets/img/clients/client-.png')}}" class="img-fluid" alt="">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="{{asset('assets/img/clients/client-.png')}}" class="img-fluid" alt="">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="{{asset('assets/img/clients/client-.png')}}" class="img-fluid" alt="">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="{{asset('assets/img/clients/client-.png')}}" class="img-fluid" alt="">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="{{asset('assets/img/clients/client-.png')}}" class="img-fluid" alt="">
        </div>

      </div>

    </div>
  </section><!-- End Clients Section -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services text-justify">
    <h3 class="text-center">সংস্থার সম্পদ ও আর্থিক স্বচ্ছলতার ভিত্তিতে সংক্ষিপ্ত কিছু লক্ষ্য ও উদ্দেশ্য :</h3>
    <div class="container ">
      <div class="row">
        <div class="col-md-6">
          <div class="icon-box">
            <i class="bi bi-card-checklist"></i>
            <h4>সৃষ্টি ওয়েলফেয়ার ফাউন্ডেশন</h4>
            <p>বর্তমান ছাত্র-ছাত্রীদের অন্তর্নিহিত সম্ভাবনাময় গুণাবলী বিকাশের পরিবেশ সৃষ্টিতে সহযোগিতা করা ও তাদের নৈতিক মূল্যবোধ, 
              দেশপ্রেম ও সামাজিক দায়িত্ববোধ জাগ্রত করে সুনাগরিক হিসেবে গড়ে তোলায় ভূমিকা রাখা।</p>
          </div>
        </div>
        <div class="col-md-6 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="bi bi-card-checklist"></i>
            <h4>সৃষ্টি ওয়েলফেয়ার ফাউন্ডেশন</h4>
            <p>সৃষ্টিশীল সামাজিক মানুষ ও সুনাগরিক সৃষ্টির লক্ষ্যে স্কুল কলেজে বিভিন্ন কর্মশালা যেমন বিতর্ক, কুইজ, খেলাধুলা, সাংস্কৃতিক
               অনুষ্ঠান, বিনামূল্যে তথ্যসেবা ও সচেতনামূলক অনুষ্ঠানের আয়োজন করা।  </p>
          </div>
        </div>
        <div class="col-md-6 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="bi bi-card-checklist"></i>
            <h4>সৃষ্টি ওয়েলফেয়ার ফাউন্ডেশন</h4>
            <p>ছাত্র-ছাত্রীসহ সকল শ্রেণীর মানুষের যে কোন প্রয়োজনে/বিপদে সর্বান্তক সহযোগিতা করা। বিশেষ করে ভর্তি পরিক্ষার্থীদের
               জন্য গাইডলাইন সুনিশ্চিত করা, দুস্থদের চিকিৎসার জন্য অর্থ এবং রক্তদান, ত্রাণ কার্যক্রম ইত্যাদি পরিচালনা করা।</p>
          </div>
        </div>
        <div class="col-md-6 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="bi bi-card-checklist"></i>
            <h4>সৃষ্টি ওয়েলফেয়ার ফাউন্ডেশন</h4>
            <p>এলাকার মানুষের যেকোন উন্নয়নমুখী ও সৃজনশীল কাজে সংবর্ধনা প্রদান করা। </p>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Services Section -->



</main><!-- End #main -->


@endsection