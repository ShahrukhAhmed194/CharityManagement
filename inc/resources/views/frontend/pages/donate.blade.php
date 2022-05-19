@extends('frontend.layouts.template')
@section('title','Donate')

@section('content')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Donate Here : </h2>
          <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>Donation</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">
        <div class="row">
          <h3 class="text-center">অনুগ্রহ করে আমাদের কিছু অনুদান পাঠান এবং প্রত্যেকের জন্য একটি ভাল জীবন গড়তে আমাদের সাহায্য করুন।</h3>
          <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="box">
              <img src="{{asset('assets/img/payment/bkash.jpg')}}" class="img-fluid" alt="">
              <h4><sup>Bkash No:</sup>01958666999<span> personal</span></h4>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="box">
              <img src="{{asset('assets/img/payment/rocket.jpg')}}" class="img-fluid" alt="">
              <h4><sup>Rocket No:</sup>01958666999<span> personal</span></h4>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="box">
              <img src="{{asset('assets/img/payment/nagad.jpg')}}" class="img-fluid" alt="">
              <h4><sup>Nagad No:</sup>01958666999<span> personal</span></h4>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="box">
              <img src="{{asset('assets/img/payment/sure-cash.jpg')}}" class="img-fluid" alt="">
              <h4><sup>Sure Cash No:</sup>01958666999<span> personal</span></h4>
            </div>
          </div>
          <div class="btn-wrap">
            <a href="{{route('home')}}" class="btn-buy">Back to Home</a>
          </div>
        </div>
      </div>
    </section><!-- End Pricing Section -->

   
    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container">

        <div class="section-title">
          <h2>F.A.Q</h2>
          <p>সচরাচর জিজ্ঞাস্য
          </p>
        </div>

        <div class="row faq-item d-flex align-items-stretch">
          <div class="col-lg-5">
            <i class="bx bx-help-circle"></i>
            <h4>Non consectetur a erat nam at lectus urna duis?</h4>
          </div>
          <div class="col-lg-7">
            <p>
              Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch">
          <div class="col-lg-5">
            <i class="bx bx-help-circle"></i>
            <h4>Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?</h4>
          </div>
          <div class="col-lg-7">
            <p>
              Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch">
          <div class="col-lg-5">
            <i class="bx bx-help-circle"></i>
            <h4>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?</h4>
          </div>
          <div class="col-lg-7">
            <p>
              Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch">
          <div class="col-lg-5">
            <i class="bx bx-help-circle"></i>
            <h4>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</h4>
          </div>
          <div class="col-lg-7">
            <p>
              Aperiam itaque sit optio et deleniti eos nihil quidem cumque. Voluptas dolorum accusantium sunt sit enim. Provident consequuntur quam aut reiciendis qui rerum dolorem sit odio. Repellat assumenda soluta sunt pariatur error doloribus fuga.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch">
          <div class="col-lg-5">
            <i class="bx bx-help-circle"></i>
            <h4>Tempus quam pellentesque nec nam aliquam sem et tortor consequat?</h4>
          </div>
          <div class="col-lg-7">
            <p>
              Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

      </div>
    </section><!-- End Frequently Asked Questions Section -->
    

  </main><!-- End #main -->

@endsection