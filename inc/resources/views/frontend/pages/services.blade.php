@extends('frontend.layouts.template')
@section('title','Services')

@section('content')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Services</h2>
          <ol>
            <li><a href="{{route('home')}}">Home</a></li>
            <li>Services</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container text-justify">
        <div class="row">
          <div class="col-md-6">
            <div class="icon-box">
              <i class="bi bi-card-checklist"></i>
              
              <p>জাতি, ধর্ম, বর্ণ, নির্বিশেষে সমাজের সবচেয়ে অবহেলিত ও দরিদ্র জনগোষ্ঠির বিশেষ করে নারী সমাজের উন্নয়নের সুফল 
                সম্পর্কে সচেতন করে তোলা যাতে তারা বিভিন্ন সমস্যা স্বীয় ও জাতীয় উন্নয়নের সত্রীয় ভূমিকা ও অংশগ্রহণের মাধ্যমে সমস্যার
                সমাধানের পথ খুঁজে বের করতে পারে এবং নিজের কর্তব্য ও মর্যাদা তথা দায়িত্ববোধে উদ্বুদ্ধ হয়ে সঞ্চিত দক্ষতা ও নব গৃহীত 
                দক্ষতা ব্যবহারের মাধ্যমে আয়ের সৃষ্টি/বৃদ্ধি এর সফলতা অর্জন করতে পারে।
              </p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-card-checklist"></i>
              
              <p>গরীব ও দুঃস্থ মহিলাদেরকে গ্রুপ ভিত্তিক বা একক ভিত্তিক অর্থনৈতিক কর্মকান্ডে সম্পৃক্ত/নিয়োজিত করা যাতে তারা শ্রমের মাধ্যমে 
                দ্রুত কর্ম এবং অজ্ঞিতার আলোকে আয়ের সৃষ্টি বৃদ্ধি করে স্বাবলম্বী হয়ে উঠতে পারে। </p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-card-checklist"></i>
              
              <p>পরিকল্পিতভাবে সন্তান ধারণ বিশেষত: এক বা দুই এর অধিক সন্তান ধারণ না করার সুবিধা সম্পর্কে সচেতন করে তোলা। </p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-card-checklist"></i>
              
              <p>কারিগরী প্রশিক্ষণের মাধ্যমে স্বাবলম্বী করে গড়ে তোলা। </p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-card-checklist"></i>
              
              <p>অপ্রাতিষ্ঠানিক শিক্ষা ব্যবস্থার মাধ্যমে নাগরিক সচেতনতা বৃদ্ধি করা। </p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-card-checklist"></i>
              
              <p>নিরক্ষরতা দূরীকরণের জন্য শিশু শ্রেণী হতে ৫ম শ্রেণী পর্যন্ত অবৈতনিক প্রাথমিক শিক্ষা এবং বয়স্কদের নৈশকালিন অববৈতনিক শিক্ষাদান করা। </p>
            </div>
          </div>    
          <div class="col-md-6 mt-md-0 ">
            <div class="icon-box">
              <i class="bi bi-card-checklist "></i>
              
              <p>সমাজ উন্নয়ন প্রক্রিয়ায় যুব, নারী ও পুরুষদের সম্পৃক্ত/নিয়োজিত করা। </p>
            </div>
          </div>
          <div class="col-md-6 mt-md-0 ">
            <div class="icon-box">
              <i class="bi bi-card-checklist "></i>
              
              <p>স্থানীয় সম্পদ ব্যবহার তথা প্রাপ্য সরকারী ও বেসরকারী সুযোগ সুবিধা যথাযথভাবে কাজে লাগিয়ে উন্নয়নের ব্যবস্থা করা। </p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0 float-left">
            <div class="icon-box">
              <i class="bi bi-card-checklist"></i>
              
              <p>অদক্ষ গরীব ব্যক্তিদের চিহ্নিত ও সংগঠিত করে একক ভিত্তিতে বা দলগতভাবে উৎপাদন মূলক অর্থনৈতিক কর্মকান্ডের 
                মাধ্যমে সামাজিক ও জাতীয় উন্নয়ন সাধন করা। </p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0 float-right">
            <div class="icon-box">
              <i class="bi bi-card-checklist"></i>
              
              <p>সমাজ উন্নয়নে জনগণের সক্রীয় অংশ গ্রহণ ও ভূমিকা তরান্বিত করার লক্ষে সঠিক তথ্য ও খবরা-খবর 
                সংগ্রহ তৈরী ও প্রকাশনা পরিবেশন ও বিতরণের ব্যবস্থা করা। </p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0 float-left">
            <div class="icon-box">
              <i class="bi bi-card-checklist"></i>
              
              <p>সমাজ উন্নয়ন মূলক কার্যক্রমের সমন্বয় তথা সেচ্ছাসেবী সংস্থা সমূহেরও সকল সরকারী কল্যাণমূলক 
                কার্যক্রমের বিস্তারিত সঠিক তথ্য খবরা-খবর, সংগ্রহ তৈরী, প্রকাশনা, পরিবেশন ও বিতরণের ব্যবস্থা করা। </p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0 float-right">
            <div class="icon-box">
              <i class="bi bi-card-checklist"></i>
              
              <p>মৎস চাষ, হাঁস মুরগী, গবাদী পশু পালন/খামার স্থাপনসহ মজা পুকুর লীজ/ইজারা নেয়া ও কুপ খনন করে চাষাবাদ করার ব্যবস্থা করা।</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-card-checklist"></i>
              
              <p>প্রকৃতিক পরিবেশের ভারসাম্য রক্ষার্থে ব্যাপক সামাজিক বনায়ণ কর্মসূচী গ্রহনে ও বাস্তবায়নে জনগনকে উদ্বুদ্ধ করা এবং এ বিষয়
                 দক্ষতা অর্জনে প্রশিক্ষণের ব্যবস্থা করা। সরকারী-বেসরকারী দেশ বিদেশি সহযোগিতায় একসাথে কাজ করবে।</p>
            </div> 
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-card-checklist"></i>
              
              <p>প্রাকৃতিক দুর্যোগগ্রস্থ ও ভুমিহীন পরিবারের পূর্নবাসনে সহায়তা দান করা। দেশী-বিদেশী সহায়তার প্রচেষ্টা বাস্তবায়ন লক্ষ্যে সর্বদা চেষ্টা করবে।</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-card-checklist"></i>
              
              <p>সংস্থার উদ্দেশ্যে ও লক্ষ্য বাস্থবায়নের জন্য ভিন্ন ভিন্ন নামে প্রজেক্ট/প্রকল্প নাম করন করে কার্যক্রম গ্রহন/বাস্তবায়ন করবে।</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-card-checklist"></i>
              
              <p>অসামাজিক কার্যকলাপ ক্ষতিকর অভ্যাস ও মানসিক বিকৃতিমূলক অভ্যাসের আমূল পরিবর্তন আনয়ন ও তাদের পূর্নবাসনে ব্যবস্থা করবে। </p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-card-checklist"></i>
              
              <p>টেকসই উন্নয়নে শহর/বস্তি/গ্রামাঞ্চলে বিভিন্ন ধরনের উৎপাদন মূলক আর্থসামাজি কার্যক্রমের প্রশিক্ষণ দান করা ও তৈরী দ্রব্যদি, 
                উপকরনাদি বিক্রি করে সংস্থার তহবিল গঠন করা ও কর্মসংস্থানের সুযোগ সৃষ্টি করবে। </p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-card-checklist"></i>
              
              <p>অসহায় / গরীব/ক্ষতিগ্রস্থ নারী-পুরুষ ও সমাজে পিছিয়ে পড়া জনগোষ্ঠিকে বিনা মূল্যে আইনি সহায়তা প্রদান করবে।</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-card-checklist"></i>
              
              <p> ভূমিহীনদের প্রশিক্ষণের মাধ্যমে দর্জি, নকশি কাঁথা, হস্তশিল্প, বাঁশ, বেত ও কাঠের ইত্যাদি কাজ কর্মের প্রশিক্ষন দিয়ে দৈনন্দিন 
                ব্যবহারিক দ্রব্য তৈরী ও উন্নত জাতের পশু পালন, হাঁস-মুরগী, ছাগলের বাচ্চা ও গাভীর বাচ্চা বা গাভী বিতরণের মাধ্যমে গরীব 
                দুস্থ ও ভুমিহীন ব্যক্তিদের মধ্যে বাড়তি আয়ের পথ সুগম করবে।</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-card-checklist"></i>
              
              <p>সংস্থার কার্যক্রমের জন্য স্থাবর, অস্থাবর সম্পত্তি ক্রয়-বিক্রয় করা এবং সরকার হতে লীজ ও একরের ব্যবস্থা করা এবং 
                সরকারের নীতির আলোকের আইনগত ও বিধিগত আদেশ ও অনুমোদনে সকল সমাজ উন্নয়ন ও কল্যানকর কার্যক্রমের বাস্তবায়ন করবে।</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-card-checklist"></i>
              
              <p>অন্ধ/দৃষ্টিহীন ও সকল প্রতিবন্ধীদের সম্ভাব্য সকল প্রকার সাহায্য সহযোগিতা শি¶া পূণর্বাসন করা তথা সঠিক তথ্য সংগ্রহ করে সরকারী 
                বেসরকারী, বিদেশী ও আন্তর্জাতিক পর্যায়ের দাতা প্রতিষ্ঠান এবং জনহিতৈষী ব্যক্তি বর্গের নিকট থেকে নগদ অর্থ, দ্রব্যাদি, স্থাবর, অস্থাবর
                 সম্পত্তি সহ সকল প্রকার দান ও সাহায্য গ্রহন করা।</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-card-checklist"></i>
              
              <p>গরীব দুস্থ ও বৃদ্ধ অসহায়দের জন্য ক্যাটাগরি অনুযায়ী ফ্রি চিকিৎসা, থাকা, খাওয়ার ব্যবস্থা করা। আর্থিক সচ্ছলদের নিকট থেকে 
                অর্থগ্রহন করে নিবিড় পরিচর্যার ব্যবস্থা করা।</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-card-checklist"></i>
              
              <p>বাংলাদেশে প্রতিটি জেলার প্রতিটি উপজেলার প্রতিটি ইউনিয়নে প্রতিটি গ্রামে ভ্রাম্যমান শ্বাস্থ্যসেবা ক্যাম্প পরিচালনা করবে।</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-card-checklist"></i>
              
              <p>ভবিষ্যতে অত্র সংগঠন জাতীয় পর্যায়ের কাজ করতে পারে। এমনকি সাংগঠনিক শক্তির উপর নির্ভর করে গভ: 
                অনুমোদন সাপোর্টে আন্তর্জাতিক পর্যায়ে কাজ করতে পারবে।</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-card-checklist"></i>
              
              <p>বৃদ্ধাশ্রম নির্মাণ ও বৃদ্ধদেরকে সর্বাত্মক সহযোগিতা করবে।</p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->


  </main><!-- End #main -->

@endsection