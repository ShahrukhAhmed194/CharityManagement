@extends('frontend.layouts.template')
@section('title','About')

@section('content')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>About</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>About</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">
  
        <div class="row content">
          <div class="col-lg-6">
            <h2>সৃষ্টি ওয়েলফেয়ার ফাউন্ডেশন </h2>
            <img src="{{asset('assets/img/FoundationLogo.png')}}" alt="" class="img-fluid" style="height: 100px">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 text-justify">
            <p>
              <h3>সংগঠনের ধরণ এবং বৈশিষ্ট্য : </h3>
              সৃষ্টি ওয়েলফেয়ার ফাউন্ডেশন একটি সম্পূর্ণ অসাম্প্রদায়িক, অরাজনৈতিক, অলাভজনক, সেচ্ছাসেবী, সামাজিক, গণতান্ত্রিক
              এবং জনকল্যাণমূলক সংগঠন। এই সংগঠনের কোন অঙ্গ সংগঠন হিসেবে কাজ করবে না। অদূর ভবিষ্যতে সমাজসেবা অধিদপ্তর 
              থেকে সেচ্ছাসেবী সমাজকল্যান সংস্থা (নিবন্ধন ও নিয়ন্ত্রন) অধ্যাদেশ ১৯৬১ ও সংশ্লিষ্ট বিধিমালা, ১৯৬২ এর আওতায় সেচ্ছাসেবী 
              সংস্থা ও প্রতিষ্ঠান হিসেবে নিবন্ধন করা হবে এবং গণপ্রজাতন্ত্রী বাংলাদেশ সরকার কর্তৃক গ্রহীত সকল বিধি বিধান পুঙ্খানুপুঙ্খভাবে 
              অনুসরণ করা হবে।
            </p>
          </div>
        </div>
  
      </div>
    </section><!-- End About Section -->

    <!-- ======= Breadcrumbs ======= -->
    <div class="container services text-justify">
      <div class="row ">
        <div class="col-md-4">
          <div class="icon-box">
            {{-- <i class="bi bi-card-checklist"></i> --}}
            
            <p>প্রধানত সামাজিক কর্মকান্ড পরিচালনা করবে। </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="icon-box">
            {{-- <i class="bi bi-card-checklist"></i> --}}
            
            <p>এদেশের শুভবুদ্ধি সম্পন্ন জনগণকে বিশেষত তরুণ সমাজকে  সংগঠিত করবে।  </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="icon-box">
            {{-- <i class="bi bi-card-checklist"></i> --}}
            
            <p>সবসময় সমাজের দারিদ্রসীমার নিচে বসবাসকারী মানুষের পাশে থাকবে।</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="icon-box">
            {{-- <i class="bi bi-card-checklist"></i> --}}
            
            <p>এতিম শিশুদের নিয়ে কাজ করবে।  </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="icon-box">
            {{-- <i class="bi bi-card-checklist"></i> --}}
            
            <p>পরিবেশের ভারসাম্য রক্ষার্থে যেকোন পদক্ষেপ গ্রহণ করবে। </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="icon-box">
            {{-- <i class="bi bi-card-checklist"></i> --}}
            
            <p>সাহিত্য, সংস্কৃতি, ক্রিড়া, বিনোদন ইত্যাদি সৃজনশীল কাজে সহযোগীতা ও উৎসাহ প্রদান করবে।  </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="icon-box">
            {{-- <i class="bi bi-card-checklist"></i> --}}
            
            <p>বিজ্ঞান ও প্রযুক্তির উন্নয়নে কাজ করবে।  </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="icon-box">
            {{-- <i class="bi bi-card-checklist"></i> --}}
            
            <p>গুণীজনদের সংবর্ধিত করবে। </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="icon-box">
            {{-- <i class="bi bi-card-checklist"></i> --}}
            
            <p> সামাজিক সচেতনতায় বিভিন্ন সভা, সেমিনার, সচেতনমূলক অনুষ্ঠানের আয়োজন করবে। </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="icon-box">
            {{-- <i class="bi bi-card-checklist"></i> --}}
            
            <p>অসহায় জনগোষ্ঠীর জনকল্যাণে কাজ করবে।</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="icon-box">
            {{-- <i class="bi bi-card-checklist"></i> --}}
            
            <p>ঝরে পড়া স্কুল শিক্ষার্থীদের জন্য বিশেষ শিক্ষার ব্যবস্থা করবে। </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="icon-box">
            {{-- <i class="bi bi-card-checklist"></i> --}}
            
            <p> স্বপ্নের বাংলাদেশ গড়ার প্রত্যয় নিয়ে সুন্দর, শক্তিশালী যুবসমাজ প্রতিষ্ঠা করবে। </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="icon-box">
            {{-- <i class="bi bi-card-checklist"></i> --}}
            
            <p>পথশিশুদের কল্যাণে কাজ করবে।  </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="icon-box">
            {{-- <i class="bi bi-card-checklist"></i> --}}
            
            <p>মানবতার কাজকে এগিয়ে নিয়ে যাবে। </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="icon-box">
            {{-- <i class="bi bi-card-checklist"></i> --}}
            
            <p>দেশ ও সমাজের কল্যাণে কাজ করে যাওয়া, সুন্দর সমৃদ্ধশালী বাংলাদেশ প্রতিষ্ঠা করা। </p>
          </div>
        </div>
      </div>
    </div>
    
    <!-- End Breadcrumbs -->
    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Team</h2>
          <p>Our Hardowrking Team</p>
        </div>

        <div class="row">

          <div class="col-lg-4 mt-4 mt-lg-2">
            <div class="member flex align-items-start">
              <div class="pic"><img src="{{asset('assets/img/team/team-2.jpeg')}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>মোঃ আব্দুল জব্বার</h4>
                <span><b>সভাপতি, <br>সৃষ্টি ওয়েলফেয়ার ফাউন্ডেশন। <br></b></span>
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                  <div class="portfolio-wrap">
                    <div class="portfolio-info">
                      <div class="portfolio-links">
                        <a href="{{asset('assets/img/team/team-2.jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" 
                        title="<b>অন্যান্য পদবী : </b>চেয়ারম্যান, সৃষ্টি ট্রেড এন্ড কমার্স লিমিটেড।<br>সহ-সভাপতি, বাংলাদেশ জাতীয় সাংবাদিক ফোরাম।<br>সংবাদদাতা, দৈনিক লাল সবুজের বাংলা।<br>
                        <b>বাণী : </b> দিন বদলের লক্ষ্যে অসহায়ত্বের পাশে আছি আমরা সৃষ্টি ওয়েলফেয়ার ফাউন্ডেশন পরিবার।  সৃষ্টি ওয়েলফেয়ার ফাউন্ডেশন জেল,থানা  এবং ওয়ার্ড ভিত্তিক ইউনিট গঠন পূর্বক সমগ্র বাংলাদেশে উয়নমূলক কাজ করে যাবো, এটাই আমাদের অঙ্গীকার। আমরাই পারি দেশ ও জাতিকে সমৃদ্ধ করতে।">More</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-2">
            <div class="member flex align-items-start">
              <div class="pic"><img src="{{asset('assets/img/team/team-1.jpg')}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>মোঃ জাহিদ হাসান</h4>
                <span><b>সাধারন সম্পাদক, <br>সৃষ্টি ওয়েলফেয়ার ফাউন্ডেশন।<br></b></span>
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                  <div class="portfolio-wrap">
                    <div class="portfolio-info">
                      <div class="portfolio-links">
                        <a href="{{asset('assets/img/team/team-1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" 
                        title="<b>অন্যান্য পদবী : </b>সহ-ব্যবস্থাপনা পরিচালক, সৃষ্টি ট্রেড এন্ড কমার্স লিমিটেড।<br>সংবাদদাতা, দৈনিক লাল সবুজের বাংলা।<br>
                        <b>বাণী : </b>আত্ম মানবতার সেবায় ও মানব কল্যানের লক্ষ্যে সাধারণ মানুষের দিন বদলের লক্ষ্যে অসহায়ত্বের পাশে আছি আমরা সৃষ্টি ওয়েলফেয়ার ফাউন্ডেশন। সাধারণ মানুষ থেকে শুরু করে সকল পর্যায়ে সততা ও নীতি আদর্শের পক্ষে ইতিবাচক কর্মকান্ড, সেবা ও উন্নয়নমূলক কার্যক্রম পরিচালনা করছে। উক্ত কার্যকলাপে আপনাদের সহায়তা আমাদের একান্ত কাম্য।">More</a>
                      </div>
                    </div>
                  </div>
                </div>               
              </div>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-2">
            <div class="member flex align-items-start">
              <div class="pic"><img src="{{asset('assets/img/team/team-3.jpg')}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>সারাবান তাহুরা সৃষ্টি</h4>
                <span><b>কোষাধ্যক্ষ, <br>সৃষ্টি ওয়েলফেয়ার ফাউন্ডেশন। <br></b></span>
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                  <div class="portfolio-wrap">
                    <div class="portfolio-info">
                      <div class="portfolio-links">
                        <a href="{{asset('assets/img/team/team-3.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" 
                        title=" <b>বাণী : </b>সৃষ্টি ওয়েলফেয়ার ফাউন্ডেশন স্বেচ্ছাসেবার বিনিময়ে সুনাগরিক ও আদর্শ সমাজ গঠন, পরিচ্ছন্নতা ও পরিবেশ উন্নয়ন, বৃক্ষরোপন ও সৌন্দর্য বর্ধন, শিক্ষা ও দক্ষতা উন্নয়ন, খাদ্য বিতরণ ও হত-দরিদ্র অবস্থার উন্নয়ন, চিকিৎসা সেবায়, সামাজিক ও অবকাঠামো উন্নয়ন, মসজিদ ও মন্দির ভিত্তিক নানাবিধ উন্নয়নমূলক কার্যকান্ড পরিচালনা করবে। ">More</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-2">
            <div class="member flex align-items-start">
              <div class="pic"><img src="{{asset('assets/img/team/team-4.jpg')}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>মোহাম্মদ শাহীন হাসান</h4>
                <span><b>দপ্তর সম্পাদক, <br>সৃষ্টি ওয়েলফেয়ার ফাউন্ডেশন।<br></b></span>
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                  <div class="portfolio-wrap">
                    <div class="portfolio-info">
                      <div class="portfolio-links">
                        <a href="{{asset('assets/img/team/team-4.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"
                         title="<b>দপ্তর সম্পাদক, <br>সৃষ্টি ওয়েলফেয়ার ফাউন্ডেশন।<br></b> ">More</a>
                      </div>
                    </div>
                  </div>
                </div>               
              </div>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-2">
            <div class="member flex align-items-start">
              <div class="pic"><img src="{{asset('assets/img/team/team-5.jpg')}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>মোঃ রায়হান খান</h4>
                <span><b>যুগ্ন সাধারণ সম্পাদক, <br>সৃষ্টি ওয়েলফেয়ার ফাউন্ডেশন।<br></b></span>
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                  <div class="portfolio-wrap">
                    <div class="portfolio-info">
                      <div class="portfolio-links">
                        <a href="{{asset('assets/img/team/team-5.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" 
                        title="<b>যুগ্ন সাধারণ সম্পাদক, <br>সৃষ্টি ওয়েলফেয়ার ফাউন্ডেশন।<br></b> ">More</a>
                      </div>
                    </div>
                  </div>
                </div>               
              </div>
            </div>
          </div>
          
        </div>

      </div>
    </section><!-- End Team Section -->

  </main><!-- End #main -->

@endsection