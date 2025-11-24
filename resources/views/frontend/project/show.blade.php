@extends('frontend.layouts.master')
@section('seo')
@php
$pageName =  $project->title_en ;
$seo = \App\Models\SeoSetting::where('page', $pageName)->first();
@endphp
@if($seo)
        <title>{{ $seo->title }}</title>
        <meta name="description" content="{{ $seo->description }}">
        <meta name="keywords" content="{{ $seo->keywords }}">
        @if($seo->canonical)
            <link rel="canonical" href="{{ $seo->canonical }}">
        @endif

        <meta property="og:title" content="{{ $seo->title }}">
        <meta property="og:description" content="{{ $seo->description }}">
        <meta property="og:image" content="{{ asset($seo->og_image) }}">
    @endif

@endsection
@section('title', $project->title . ' - مشاريع شركة مضياف')
@push('styles')
<style>


/* 🔹 Header Section */
.page-header {
  text-align: center;
  padding: 100px 20px;
  color: #fff;
  background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),
              url('{{ asset($project->image_url) }}') center/cover no-repeat;
}
.page-header h1 {
  font-size: 2.8rem;
  color: #D9EF82;
  font-weight: 700;
  margin-bottom: 15px;
}
.page-header p {
  font-size: 1.1rem;
  color: #eee;
  max-width: 750px;
  margin: auto;
  line-height: 1.8;
}

/* 🖼️ Swiper */
.image-slider {
  padding: 60px 15px;
}
.image-slider h2 {
  color: #1b3b26;
  font-weight: 700;
  text-align: center;
  margin-bottom: 40px;
}
.swiper {
  width: 100%;
  height: 300px;
}
.swiper-slide img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 15px;
  box-shadow: 0 4px 15px rgba(0,0,0,0.08);
  transition: transform .3s ease;
}
.swiper-slide:hover img { transform: scale(1.05); }

/* 🪴 Project Details */
.project-details {
  background: #fff;
  padding: 60px 20px;
}
.project-details h2 {
  color: #1b3b26;
  font-weight: 700;
  margin-bottom: 20px;
}
.project-details p {
  font-size: 1.05rem;
  line-height: 1.9;
  color: #444;
}

/* 🌿 مميزات المشروع */
.features-modern {
  background: #f9faf9;
  padding: 60px 20px;
}
.features-modern h2 {
  font-weight: 700;
  text-align: center;
  color: #1b3b26;
  margin-bottom: 40px;
}
.feature-box {
  background: #fff;
  border-radius: 14px;
  box-shadow: 0 4px 15px rgba(0,0,0,0.06);
  transition: all .3s ease;
  padding: 25px;
  height: 100%;
}
.feature-box:hover {
  transform: translateY(-6px);
  box-shadow: 0 10px 25px rgba(0,0,0,0.1);
}
.icon-circle {
  width: 70px;
  height: 70px;
  border-radius: 50%;
  background: linear-gradient(135deg, #D9EF82, #4CAF50);
  display: flex;
  align-items: center;
  justify-content: center;
  color: #fff;
  margin: 0 auto 15px auto;
}
.icon-circle i { font-size: 28px; }
.feature-box h5 { color: #1b3b26; font-weight: 700; margin-bottom: 10px; }
.feature-box p { color: #777; font-size: 0.95rem; }

/* 🌾 مشاريع أخرى */
.projects-flex {
  background: #f9faf9;
  padding: 70px 20px;
}
.projects-flex h3 {
  text-align: center;
  color: #1b3b26;
  font-weight: 700;
  margin-bottom: 40px;
}
.projects-wrapper {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 25px;
}
.project-card {
  background: #fff;
  border-radius: 18px;
  box-shadow: 0 6px 20px rgba(0,0,0,0.08);
  overflow: hidden;
  flex: 1 1 calc(33.333% - 25px);
  max-width: calc(33.333% - 25px);
  display: flex;
  flex-direction: column;
  transition: all 0.3s ease;
}
.project-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 25px rgba(0,0,0,0.12);
}
.image-box { height: 230px; overflow: hidden; }
.image-box img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform .4s ease;
}
.project-card:hover img { transform: scale(1.05); }
.content-box {
  text-align: center;
  padding: 20px;
}
.content-box h4 {
  color: #1b3b26;
  font-weight: 700;
  margin-bottom: 10px;
}
.content-box p {
  color: #777;
  font-size: 0.95rem;
  line-height: 1.6;
}
.btn-modern {
  background: linear-gradient(135deg, #1b3b26, #4CAF50);
  color: #fff;
  border-radius: 30px;
  padding: 8px 20px;
  font-size: 0.9rem;
  text-decoration: none;
  transition: 0.3s;
}
.btn-modern:hover { background: #D9EF82; color: #1b3b26; }

/* 🌿 CTA */
.cta-section {
  background: linear-gradient(135deg,#1b3b26,#4CAF50);
  color: #fff;
  text-align: center;
  padding: 80px 20px;
}
.cta-section h2 {
  font-size: 2rem;
  font-weight: 700;
  margin-bottom: 15px;
}
.cta-section p { font-size: 1.1rem; margin-bottom: 25px; }
.cta-section a {
  background: #fff;
  color: #1b3b26;
  padding: 10px 25px;
  border-radius: 30px;
  font-weight: 600;
  text-decoration: none;
  transition: .3s;
}
.cta-section a:hover { background: #D9EF82; }

@media (max-width:992px){
  .page-header h1{font-size:2rem;}
  .project-card{flex:1 1 45%;max-width:45%;}
}
@media (max-width:576px){
  .project-card{flex:1 1 100%;max-width:100%;}
}
</style>
@endpush
@section('content')

<section class="page-header" style="
    text-align: center;
    padding: 90px 20px;
    background: linear-gradient(rgba(0,0,0,0.55), rgba(0,0,0,0.55)),
                url('{{ asset('dashboard_files/img/logos/Service-img-4.jpg') }}') center/cover no-repeat;
    color: #fff;
    position: relative;
">
  <h1>{!! app()->getLocale() == 'en' ? $project->title_en : $project->title !!}</h1>
  {{-- <p>تعرف على تفاصيل مشروع <strong>{{ $project->title }}</strong> الذي نفذته <strong>شركة المضياف</strong> بأعلى معايير الجودة والتميز.</p> --}}
  @if(app()->getLocale() == 'en')
    Discover the details of the
    <strong>{{ $project->title_en }}</strong>
    executed by
    <strong>{!! $setting->name_en!!}</strong>
    with the highest quality and professionalism
@else
    تعرف على تفاصيل مشروع
    <strong>{{ $project->title }}</strong>
    الذي نفذته
    <strong> {{ $setting->name  }}</strong>
 بأعلى معايير الجودة والتميز
@endif

</section>

<section class="image-slider">
  <div class="container">
    <h2> {{ __('messages.Project_photos') }}</h2>
    @if($project->images && $project->images->count())
      <div class="swiper mySwiperGlobal">
        <div class="swiper-wrapper">
          @foreach($project->images as $img)
          <div class="swiper-slide">
            <img src="{{ asset($img->image) }}" alt="{!! app()->getLocale() == 'en' ? $project->title : $project->title !!}">
          </div>
          @endforeach
        </div>
      </div>
    @else
      <p class="text-center text-muted">{{ __('messages.No_images_are_currently_available_for_this_project') }}</p>
    @endif
  </div>
</section>

{{-- 💡 Lightbox --}}
{{-- <div id="imageLightbox" class="lightbox">
  <span class="close">&times;</span>
  <img id="lightboxImg" src="" alt="عرض الصورة">
  <button class="prev">&#10094;</button>
  <button class="next">&#10095;</button>
</div> --}}

<section class="project-details text-center">
  <div class="container" style="max-width:900px;">
    <h2>{!! app()->getLocale() == 'en' ? $project->title : $project->title !!}</h2>
    <p>{!! app()->getLocale() == 'en' ? $project->description_en : $project->description !!}</p>
  </div>
</section>

{{-- 🌿 مميزات المشروع --}}

<section class="features-modern py-5" style="background:#f9faf9;">
  <div class="container">
    <h2 class="section-title text-center mb-5" style="font-weight:700; color:#1b3b26;">
       {{ __('messages.Project_Features') }} 🌿
    </h2>

    @if($project->features && $project->features->count() > 0)
      <div class="row g-4 justify-content-center">
        @foreach($project->features as $index => $feature)
          <div class="col-lg-3 col-md-4 col-sm-6 col-10" data-aos="zoom-in" data-aos-delay="{{ $index * 100 }}">
            <div class="feature-card text-center h-100 p-4" style="
    text-align: center;
">
              <div class="icon-circle mb-3 mx-auto">
                <i class="{{ $feature->icon ?? 'fa-solid fa-circle-check' }}"></i>
              </div>
              <h5 class="fw-bold mb-2" style="text-align: center;">{!! app()->getLocale() == 'en' ? $feature->title_en : $feature->title !!}</h5>
              @if($feature->description)
                <p class="text-muted small mb-0" style="text-align: center;">{!! app()->getLocale() == 'en' ? $feature->description_en : $feature->description !!}</p>
              @endif
            </div>
          </div>
        @endforeach
      </div>
    @else
      <p class="text-center text-muted" style="text-align: center;">{{ __('messages.There_are_no_features_currently_listed_for_this_service') }}</p>
    @endif
  </div>
</section>

{{-- 🏗️ مشاريع أخرى --}}
@if($related && $related->count())
<section class="projects-flex">
  <div class="container">
    <h3>{!! __('messages.Other_projects_from', ['company' => app()->getLocale() == 'en' ? $setting->name_en : $setting->name]) !!}</h3>
    <div class="projects-wrapper">
      @foreach($related as $item)
      <div class="project-card" data-aos="fade-up">
        <div class="image-box">
          <img src="{{ asset($item->image) }}" alt="{!! app()->getLocale() == 'en' ? $item->title_en : $item->title !!}">
        </div>
        <div class="content-box">
          <h4>{!! app()->getLocale() == 'en' ? $item->title_en : $item->title !!}</h4>
          {!! app()->getLocale() == 'en' ? $item->short_description_en : $item->short_description !!}
          <a href="{{ route('testimonials', $item->slug) }}" class="btn-modern mt-2">{{ __('messages.View_details') }}</a>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endif

<section class="cta-section">
  <div class="container">
    <h2>  {{ __('messages.Start_your_project_with_us') }} 🌱</h2>
    <p>{{ __('messages.Contact_our_team_for_a_free_consultation_on_your_next_project') }}</p>
    <a href="https://wa.me/{{ $setting->phone ?? '' }}" target="_blank">
      <i class="fa-brands fa-whatsapp"></i>{{ __('messages.Contact_via_WhatsApp') }}
    </a>
  </div>
</section>

<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script> AOS.init({ duration: 1000, once: true }); </script>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function () {
  new Swiper(".mySwiperGlobal", {
    slidesPerView: 3,
    spaceBetween: 25,
    loop: true,
    speed: 2500,
    autoplay: { delay: 0, disableOnInteraction: false },
    freeMode: true,
    grabCursor: true,
    breakpoints: {
      0: { slidesPerView: 1.2 },
      768: { slidesPerView: 2 },
      1200: { slidesPerView: 3 }
    }
  });

  const images = Array.from(document.querySelectorAll('.swiper-slide img'));
  const lightbox = document.getElementById('imageLightbox');
  const lightboxImg = document.getElementById('lightboxImg');
  const closeBtn = document.querySelector('.lightbox .close');
  const prevBtn = document.querySelector('.lightbox .prev');
  const nextBtn = document.querySelector('.lightbox .next');
  let currentIndex = 0;

  images.forEach((img, index) => {
    img.addEventListener('click', () => {
      currentIndex = index;
      showImage();
      lightbox.style.display = 'flex';
    });
  });
  closeBtn.addEventListener('click', () => lightbox.style.display = 'none');
  lightbox.addEventListener('click', e => { if (e.target === lightbox) lightbox.style.display = 'none'; });
  prevBtn.addEventListener('click', e => { e.stopPropagation(); currentIndex = (currentIndex - 1 + images.length) % images.length; showImage(); });
  nextBtn.addEventListener('click', e => { e.stopPropagation(); currentIndex = (currentIndex + 1) % images.length; showImage(); });
  function showImage(){ lightboxImg.src = images[currentIndex].src; }
});
</script>

@endsection
