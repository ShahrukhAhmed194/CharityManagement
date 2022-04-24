@extends('frontend.layouts.template')
@section('title','Donate')

@section('content')
<br>
<br>
<br>
{{-- <h3>আমাদের কিছু অবদান |</h3> --}}
<!-- ======= Gallery Section ======= -->
<section id="portfolio" class="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-drawings">Drawings</li>
            <li data-filter=".filter-sports">Sports</li>
            <li data-filter=".filter-pushparpon">Pushparpon</li>
            <li data-filter=".filter-bloodGroup">Blood Group Check</li>
            <li data-filter=".filter-mediCamp">Medical Camp</li>
            <li data-filter=".filter-bitoron">Bitoron</li>
            
          </ul>
        </div>
      </div>

      <div class="row portfolio-container">
        <div class="col-lg-4 col-md-6 portfolio-item filter-drawings">
          <div class="portfolio-wrap">
            <img src="{{asset('assets/img/gallery/21february/drawing1.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>21st February</h4>
              <p>Drawings..</p>
              <div class="portfolio-links">
                <a href="{{asset('assets/img/gallery/21february/drawing1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="21st She February Drawing"><i class="bi bi-zoom-in"></i></a>
                {{-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-drawings">
          <div class="portfolio-wrap">
            <img src="{{asset('assets/img/gallery/21february/drawing2.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>21st February</h4>
              <p>Drawings..</p>
              <div class="portfolio-links">
                <a href="{{asset('assets/img/gallery/21february/drawing2.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="21st She February Drawing"><i class="bi bi-zoom-in"></i></a>
                {{-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-drawings">
          <div class="portfolio-wrap">
            <img src="{{asset('assets/img/gallery/21february/drawing3.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>21st February</h4>
              <p>Drawings..</p>
              <div class="portfolio-links">
                <a href="{{asset('assets/img/gallery/21february/drawing3.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="21st She February Drawing"><i class="bi bi-zoom-in"></i></a>
                {{-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-drawings">
          <div class="portfolio-wrap">
            <img src="{{asset('assets/img/gallery/21february/drawing4.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>21st February</h4>
              <p>Drawings..</p>
              <div class="portfolio-links">
                <a href="{{asset('assets/img/gallery/21february/drawing4.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="21st She February Drawing"><i class="bi bi-zoom-in"></i></a>
                {{-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-pushparpon">
          <div class="portfolio-wrap">
            <img src="{{asset('assets/img/gallery/21february/pushparpon1.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>21st February</h4>
              <p>Pushparpon..</p>
              <div class="portfolio-links">
                <a href="{{asset('assets/img/gallery/21february/pushparpon1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="21st She February Pushparpon"><i class="bi bi-zoom-in"></i></a>
                {{-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-pushparpon">
          <div class="portfolio-wrap">
            <img src="{{asset('assets/img/gallery/21february/pushparpon2.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>21st February</h4>
              <p>Pushparpon..</p>
              <div class="portfolio-links">
                <a href="{{asset('assets/img/gallery/21february/pushparpon2.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="21st She February Pushparpon"><i class="bi bi-zoom-in"></i></a>
                {{-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-pushparpon">
          <div class="portfolio-wrap">
            <img src="{{asset('assets/img/gallery/21february/pushparpon3.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>21st February</h4>
              <p>Pushparpon..</p>
              <div class="portfolio-links">
                <a href="{{asset('assets/img/gallery/21february/pushparpon3.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="21st She February Pushparpon"><i class="bi bi-zoom-in"></i></a>
                {{-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-pushparpon">
          <div class="portfolio-wrap">
            <img src="{{asset('assets/img/gallery/21february/pushparpon4.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>21st February</h4>
              <p>Pushparpon..</p>
              <div class="portfolio-links">
                <a href="{{asset('assets/img/gallery/21february/pushparpon4.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="21st She February Pushparpon"><i class="bi bi-zoom-in"></i></a>
                {{-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-sports">
          <div class="portfolio-wrap">
            <img src="{{asset('assets/img/gallery/FinalSportsPriceGiving/sports_price.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Final Sports</h4>
              <p>Price Giving..</p>
              <div class="portfolio-links">
                <a href="{{asset('assets/img/gallery/FinalSportsPriceGiving/sports_price.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Final Sports Price Giving Ceremony"><i class="bi bi-zoom-in"></i></a>
                {{-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-bloodGroup">
          <div class="portfolio-wrap">
            <img src="{{asset('assets/img/gallery/FreeBloodGroupChecking-MohammadpurKendriyaCollege-26sheMarch/bloodGroupCheck1.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Mohammadpur Kendriya Collage</h4>
              <p>Blood Group Check</p>
              <div class="portfolio-links">
                <a href="{{asset('assets/img/gallery/FreeBloodGroupChecking-MohammadpurKendriyaCollege-26sheMarch/bloodGroupCheck1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Free Blood Group Checking-Mohammadpur Kenriya Collage"><i class="bi bi-zoom-in"></i></a>
                {{-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-bloodGroup">
          <div class="portfolio-wrap">
            <img src="{{asset('assets/img/gallery/FreeBloodGroupChecking-MohammadpurKendriyaCollege-26sheMarch/bloodGroupCheck2.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Mohammadpur Kendriya Collage</h4>
              <p>Blood Group Check</p>
              <div class="portfolio-links">
                <a href="{{asset('assets/img/gallery/FreeBloodGroupChecking-MohammadpurKendriyaCollege-26sheMarch/bloodGroupCheck2.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Free Blood Group Checking-Mohammadpur Kenriya Collage"><i class="bi bi-zoom-in"></i></a>
                {{-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-bloodGroup">
          <div class="portfolio-wrap">
            <img src="{{asset('assets/img/gallery/FreeBloodGroupChecking-MohammadpurKendriyaCollege-26sheMarch/bloodGroupCheck3.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Mohammadpur Kendriya Collage</h4>
              <p>Blood Group Check</p>
              <div class="portfolio-links">
                <a href="{{asset('assets/img/gallery/FreeBloodGroupChecking-MohammadpurKendriyaCollege-26sheMarch/bloodGroupCheck3.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Free Blood Group Checking-Mohammadpur Kenriya Collage"><i class="bi bi-zoom-in"></i></a>
                {{-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-bloodGroup">
          <div class="portfolio-wrap">
            <img src="{{asset('assets/img/gallery/FreeBloodGroupChecking-MohammadpurKendriyaCollege-26sheMarch/bloodGroupCheck4.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Mohammadpur Kendriya Collage</h4>
              <p>Blood Group Check</p>
              <div class="portfolio-links">
                <a href="{{asset('assets/img/gallery/FreeBloodGroupChecking-MohammadpurKendriyaCollege-26sheMarch/bloodGroupCheck4.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Free Blood Group Checking-Mohammadpur Kenriya Collage"><i class="bi bi-zoom-in"></i></a>
                {{-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-bloodGroup">
          <div class="portfolio-wrap">
            <img src="{{asset('assets/img/gallery/FreeBloodGroupChecking-MohammadpurKendriyaCollege-26sheMarch/bloodGroupCheck5.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Mohammadpur Kendriya Collage</h4>
              <p>Blood Group CheckBlood Group Check</p>
              <div class="portfolio-links">
                <a href="{{asset('assets/img/gallery/FreeBloodGroupChecking-MohammadpurKendriyaCollege-26sheMarch/bloodGroupCheck5.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Free Blood Group Checking-Mohammadpur Kenriya Collage"><i class="bi bi-zoom-in"></i></a>
                {{-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-bloodGroup">
          <div class="portfolio-wrap">
            <img src="{{asset('assets/img/gallery/FreeBloodGroupChecking-MohammadpurKendriyaCollege-26sheMarch/bloodGroupCheck6.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Mohammadpur Kendriya Collage</h4>
              <p>Blood Group Check</p>
              <div class="portfolio-links">
                <a href="{{asset('assets/img/gallery/FreeBloodGroupChecking-MohammadpurKendriyaCollege-26sheMarch/bloodGroupCheck6.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Free Blood Group Checking-Mohammadpur Kenriya Collage"><i class="bi bi-zoom-in"></i></a>
                {{-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-bloodGroup">
          <div class="portfolio-wrap">
            <img src="{{asset('assets/img/gallery/FreeBloodGroupChecking-MohammadpurKendriyaCollege-26sheMarch/bloodGroupCheck7.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Mohammadpur Kendriya Collage</h4>
              <p>Blood Group Check</p>
              <div class="portfolio-links">
                <a href="{{asset('assets/img/gallery/FreeBloodGroupChecking-MohammadpurKendriyaCollege-26sheMarch/bloodGroupCheck7.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Free Blood Group Checking-Mohammadpur Kenriya Collage"><i class="bi bi-zoom-in"></i></a>
                {{-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-bloodGroup">
          <div class="portfolio-wrap">
            <img src="{{asset('assets/img/gallery/FreeBloodGroupChecking-MohammadpurKendriyaCollege-26sheMarch/bloodGroupCheck8.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Mohammadpur Kendriya Collage</h4>
              <p>Blood Group Check</p>
              <div class="portfolio-links">
                <a href="{{asset('assets/img/gallery/FreeBloodGroupChecking-MohammadpurKendriyaCollege-26sheMarch/bloodGroupCheck8.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Free Blood Group Checking-Mohammadpur Kenriya Collage"><i class="bi bi-zoom-in"></i></a>
                {{-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-bloodGroup">
          <div class="portfolio-wrap">
            <img src="{{asset('assets/img/gallery/FreeBloodGroupChecking-MohammadpurKendriyaCollege-26sheMarch/bloodGroupCheck9.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Mohammadpur Kendriya Collage</h4>
              <p>Blood Group Check</p>
              <div class="portfolio-links">
                <a href="{{asset('assets/img/gallery/FreeBloodGroupChecking-MohammadpurKendriyaCollege-26sheMarch/bloodGroupCheck9.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Free Blood Group Checking-Mohammadpur Kenriya Collage"><i class="bi bi-zoom-in"></i></a>
                {{-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-bloodGroup">
          <div class="portfolio-wrap">
            <img src="{{asset('assets/img/gallery/FreeBloodGroupChecking-MohammadpurKendriyaCollege-26sheMarch/bloodGroupCheck10.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Mohammadpur Kendriya Collage</h4>
              <p>Blood Group Check</p>
              <div class="portfolio-links">
                <a href="{{asset('assets/img/gallery/FreeBloodGroupChecking-MohammadpurKendriyaCollege-26sheMarch/bloodGroupCheck10.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Free Blood Group Checking-Mohammadpur Kenriya Collage"><i class="bi bi-zoom-in"></i></a>
                {{-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-bloodGroup">
          <div class="portfolio-wrap">
            <img src="{{asset('assets/img/gallery/FreeBloodGroupChecking-MohammadpurKendriyaCollege-26sheMarch/bloodGroupCheck11.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Mohammadpur Kendriya Collage</h4>
              <p>Blood Group Check</p>
              <div class="portfolio-links">
                <a href="{{asset('assets/img/gallery/FreeBloodGroupChecking-MohammadpurKendriyaCollege-26sheMarch/bloodGroupCheck11.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Free Blood Group Checking-Mohammadpur Kenriya Collage"><i class="bi bi-zoom-in"></i></a>
                {{-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-mediCamp">
          <div class="portfolio-wrap">
            <img src="{{asset('assets/img/gallery/FreeMedicalCamp/medicalCamp1.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Medical Camp</h4>
              <p>Free Check Up</p>
              <div class="portfolio-links">
                <a href="{{asset('assets/img/gallery/FreeMedicalCamp/medicalCamp1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Free Medical Camp"><i class="bi bi-zoom-in"></i></a>
                {{-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-mediCamp">
          <div class="portfolio-wrap">
            <img src="{{asset('assets/img/gallery/FreeMedicalCamp/medicalCamp2.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Medical Camp</h4>
              <p>Free Check Up</p>
              <div class="portfolio-links">
                <a href="{{asset('assets/img/gallery/FreeMedicalCamp/medicalCamp2.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Free Medical Camp"><i class="bi bi-zoom-in"></i></a>
                {{-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-mediCamp">
          <div class="portfolio-wrap">
            <img src="{{asset('assets/img/gallery/FreeMedicalCamp/medicalCamp3.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Medical Camp</h4>
              <p>Free Check Up</p>
              <div class="portfolio-links">
                <a href="{{asset('assets/img/gallery/FreeMedicalCamp/medicalCamp3.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Free Medical Camp"><i class="bi bi-zoom-in"></i></a>
                {{-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-mediCamp">
          <div class="portfolio-wrap">
            <img src="{{asset('assets/img/gallery/FreeMedicalCamp/medicalCamp4.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Medical Camp</h4>
              <p>Free Check Up</p>
              <div class="portfolio-links">
                <a href="{{asset('assets/img/gallery/FreeMedicalCamp/medicalCamp4.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Free Medical Camp"><i class="bi bi-zoom-in"></i></a>
                {{-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-mediCamp">
          <div class="portfolio-wrap">
            <img src="{{asset('assets/img/gallery/FreeMedicalCamp/medicalCamp5.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Medical Camp</h4>
              <p>Free Check Up</p>
              <div class="portfolio-links">
                <a href="{{asset('assets/img/gallery/FreeMedicalCamp/medicalCamp5.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Free Medical Camp"><i class="bi bi-zoom-in"></i></a>
                {{-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-mediCamp">
          <div class="portfolio-wrap">
            <img src="{{asset('assets/img/gallery/FreeMedicalCamp/medicalCamp6.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Medical Camp</h4>
              <p>Free Check Up</p>
              <div class="portfolio-links">
                <a href="{{asset('assets/img/gallery/FreeMedicalCamp/medicalCamp6.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Free Medical Camp"><i class="bi bi-zoom-in"></i></a>
                {{-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-bitoron">
          <div class="portfolio-wrap">
            <img src="{{asset('assets/img/gallery/BitoronFreeFoodNilphamary/freeFood1.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Bitoron</h4>
              <p>Free Food Distribution</p>
              <div class="portfolio-links">
                <a href="{{asset('assets/img/gallery/BitoronFreeFoodNilphamary/freeFood1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Free Food Distribution "><i class="bi bi-zoom-in"></i></a>
                {{-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-bitoron">
          <div class="portfolio-wrap">
            <img src="{{asset('assets/img/gallery/BitoronFreeFoodNilphamary/freeFood2.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Bitoron</h4>
              <p>Free Food Distribution</p>
              <div class="portfolio-links">
                <a href="{{asset('assets/img/gallery/BitoronFreeFoodNilphamary/freeFood2.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Free Food Distribution "><i class="bi bi-zoom-in"></i></a>
                {{-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-bitoron">
          <div class="portfolio-wrap">
            <img src="{{asset('assets/img/gallery/BitoronFreeFoodNilphamary/freeFood3.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Bitoron</h4>
              <p>Free Food Distribution</p>
              <div class="portfolio-links">
                <a href="{{asset('assets/img/gallery/BitoronFreeFoodNilphamary/freeFood3.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Free Food Distribution "><i class="bi bi-zoom-in"></i></a>
                {{-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-bitoron">
          <div class="portfolio-wrap">
            <img src="{{asset('assets/img/gallery/BitoronFreeFoodNilphamary/freeFood4.jpeg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Nilphamary</h4>
              <p>Free Food Distribution</p>
              <div class="portfolio-links">
                <a href="{{asset('assets/img/gallery/BitoronFreeFoodNilphamary/freeFood4.jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Free Food Distribution in Nilphamary"><i class="bi bi-zoom-in"></i></a>
                {{-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-bitoron">
          <div class="portfolio-wrap">
            <img src="{{asset('assets/img/gallery/BitoronFreeFoodNilphamary/freeFood5.jpeg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Nilphamary</h4>
              <p>Free Food Distribution</p>
              <div class="portfolio-links">
                <a href="{{asset('assets/img/gallery/BitoronFreeFoodNilphamary/freeFood5.jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Free Food Distribution in Nilphamary"><i class="bi bi-zoom-in"></i></a>
                {{-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-bitoron">
          <div class="portfolio-wrap">
            <img src="{{asset('assets/img/gallery/BitoronFreeFoodNilphamary/freeFood6.jpeg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Nilphamary</h4>
              <p>Free Food Distribution</p>
              <div class="portfolio-links">
                <a href="{{asset('assets/img/gallery/BitoronFreeFoodNilphamary/freeFood6.jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Free Food Distribution in Nilphamary"><i class="bi bi-zoom-in"></i></a>
                {{-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-bitoron">
          <div class="portfolio-wrap">
            <img src="{{asset('assets/img/gallery/BitoronFreeFoodNilphamary/freeFood7.jpeg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Nilphamary</h4>
              <p>Free Food Distribution</p>
              <div class="portfolio-links">
                <a href="{{asset('assets/img/gallery/BitoronFreeFoodNilphamary/freeFood7.jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Free Food Distribution in Nilphamary"><i class="bi bi-zoom-in"></i></a>
                {{-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-bitoron">
          <div class="portfolio-wrap">
            <img src="{{asset('assets/img/gallery/BitoronFreeFoodNilphamary/freeFood8.jpeg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Nilphamary</h4>
              <p>Free Food Distribution</p>
              <div class="portfolio-links">
                <a href="{{asset('assets/img/gallery/BitoronFreeFoodNilphamary/freeFood8.jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Free Food Distribution in Nilphamary"><i class="bi bi-zoom-in"></i></a>
                {{-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-bitoron">
          <div class="portfolio-wrap">
            <img src="{{asset('assets/img/gallery/BitoronFreeQuranandKombol/quranBitoron1.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Bitoron</h4>
              <p>Free Quran and Kombol Distribution</p>
              <div class="portfolio-links">
                <a href="{{asset('assets/img/gallery/BitoronFreeQuranandKombol/quranBitoron1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Free Quran and Kombol Distribution..."><i class="bi bi-zoom-in"></i></a>
                {{-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-bitoron">
          <div class="portfolio-wrap">
            <img src="{{asset('assets/img/gallery/BitoronFreeQuranandKombol/quranBitoron2.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Bitoron</h4>
              <p>Free Quran and Kombol Distribution</p>
              <div class="portfolio-links">
                <a href="{{asset('assets/img/gallery/BitoronFreeQuranandKombol/quranBitoron2.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Free Quran and Kombol Distribution..."><i class="bi bi-zoom-in"></i></a>
                {{-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-bitoron">
          <div class="portfolio-wrap">
            <img src="{{asset('assets/img/gallery/BitoronFreeQuranandKombol/quranBitoron3.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Bitoron</h4>
              <p>Free Quran and Kombol Distribution</p>
              <div class="portfolio-links">
                <a href="{{asset('assets/img/gallery/BitoronFreeQuranandKombol/quranBitoron3.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Free Quran and Kombol Distribution..."><i class="bi bi-zoom-in"></i></a>
                {{-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-bitoron">
          <div class="portfolio-wrap">
            <img src="{{asset('assets/img/gallery/BitoronFreeQuranandKombol/quranBitoron4.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Bitoron</h4>
              <p>Free Quran and Kombol Distribution</p>
              <div class="portfolio-links">
                <a href="{{asset('assets/img/gallery/BitoronFreeQuranandKombol/quranBitoron4.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Free Quran and Kombol Distribution..."><i class="bi bi-zoom-in"></i></a>
                {{-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-bitoron">
          <div class="portfolio-wrap">
            <img src="{{asset('assets/img/gallery/BitoronKombol/kombol1.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Bitoron</h4>
              <p>Free Kombol Distribution</p>
              <div class="portfolio-links">
                <a href="{{asset('assets/img/gallery/BitoronKombol/kombol1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Free Kombol Distribution..."><i class="bi bi-zoom-in"></i></a>
                {{-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-bitoron">
          <div class="portfolio-wrap">
            <img src="{{asset('assets/img/gallery/BitoronKombol/kombol2.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Bitoron</h4>
              <p>Free Kombol Distribution</p>
              <div class="portfolio-links">
                <a href="{{asset('assets/img/gallery/BitoronKombol/kombol2.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Free Kombol Distribution..."><i class="bi bi-zoom-in"></i></a>
                {{-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
          </div>
        </div>
        

      </div>

    </div>
</section><!-- End gallery Section -->


  @endsection