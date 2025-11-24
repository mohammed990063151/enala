@extends('frontend.layouts.master')

@section('seo')

@php
$pageName =  $service->title_en ;
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

@section('title',  app()->getLocale() == 'en' ? $service->title_en : $service->title. ' - شركة مضياف')
@push('styles')
<style>
/* body {
  font-family: 'Tajawal', sans-serif;
  direction: rtl;
  background: #f9faf9;
  margin: 0;
  padding: 0;
} */

/* 🔹 Header Section */
.page-header {
  text-align: center;
  padding: 100px 20px;
  color: #fff;
  background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),
              url('{{ asset($service->image ?? 'dashboard_files/img/services/1761304116_image4.jpg') }}') center/cover no-repeat;
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

/* 🪴 Service Details */
.service-details {
  background: #fff;
  padding: 60px 20px;
}
.service-details h2 {
  color: #1b3b26;
  font-weight: 700;
  margin-bottom: 20px;
}
.service-details p {
  font-size: 1.05rem;
  line-height: 1.9;
  color: #444;
}

/* 🌿 مميزات الخدمة */
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

/* 🌾 خدمات أخرى */
.services-flex {
  background: #f9faf9;
  padding: 70px 20px;
}
.services-flex h3 {
  text-align: center;
  color: #1b3b26;
  font-weight: 700;
  margin-bottom: 40px;
}
.services-wrapper {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 25px;
}
.service-card {
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
.service-card:hover {
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
.service-card:hover img { transform: scale(1.05); }
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

/* 🌸 فقرة الثقة */
.footer-note {
  background: #eef7ee;
  padding: 60px 20px;
  text-align: center;
}
.footer-note h2 {
  color: #1b3b26;
  font-weight: 700;
  margin-bottom: 15px;
}
.footer-note p {
  font-size: 1.05rem;
  color: #444;
  max-width: 750px;
  margin: auto;
  line-height: 1.8;
}

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

/* ✅ Responsive */
@media (max-width: 992px) {
  .page-header h1 { font-size: 2.2rem; }
  .swiper { height: 240px; }
  .service-card { flex: 1 1 calc(45% - 20px); max-width: calc(45% - 20px); }
}
@media (max-width: 768px) {
  .page-header { padding: 80px 15px; }
  .page-header h1 { font-size: 1.8rem; }
  .swiper { height: 200px; }
  .feature-box { padding: 20px; }
  .icon-circle { width: 55px; height: 55px; }
  .icon-circle i { font-size: 22px; }
  .service-card { flex: 1 1 100%; max-width: 100%; }
}

/* 🌌 Lightbox Overlay */
.lightbox {
  display: none;
  position: fixed;
  z-index: 9999;
  padding-top: 70px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0,0,0,0.9);
  text-align: center;
}

.lightbox-content {
  margin: auto;
  display: block;
  max-width: 90%;
  max-height: 85vh;
  border-radius: 10px;
  box-shadow: 0 0 25px rgba(255,255,255,0.2);
}

.lightbox .close {
  position: absolute;
  top: 20px;
  right: 35px;
  color: #fff;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
  cursor: pointer;
}
.lightbox .close:hover {
  color: #D9EF82;
}

</style>

<style>
/* 💡 تصميم الـ Lightbox */
.lightbox {
  display: none;
  position: fixed;
  z-index: 9999;
  left: 0; top: 0;
  width: 100%; height: 100%;
  background: rgba(0,0,0,0.9);
  justify-content: center;
  align-items: center;
}
.lightbox img {
  max-width: 90%;
  max-height: 80%;
  border-radius: 10px;
  box-shadow: 0 0 20px rgba(255,255,255,0.3);
  transition: transform .3s ease;
}
.lightbox .close {
  position: absolute;
  top: 20px; right: 30px;
  color: #fff;
  font-size: 40px;
  cursor: pointer;
}
.lightbox .prev, .lightbox .next {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  color: #fff;
  font-size: 50px;
  font-weight: bold;
  background: rgba(0,0,0,0.4);
  border: none;
  cursor: pointer;
  padding: 10px 20px;
  border-radius: 50%;
  transition: background 0.3s ease;
}
.lightbox .prev:hover, .lightbox .next:hover {
  background: rgba(255,255,255,0.2);
}
.lightbox .prev { left: 40px; }
.lightbox .next { right: 40px; }
</style>

<style>
.features-modern {
  background: #f9faf9;
}

/* 🌿 البطاقات */
.feature-card {
  background: #fff;
  border-radius: 16px;
  box-shadow: 0 5px 18px rgba(0,0,0,0.08);
  transition: all .3s ease;
  padding: 25px;
}
.feature-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 10px 25px rgba(0,0,0,0.12);
}

/* 🌱 الأيقونة الدائرية */
.icon-circle {
  width: 70px;
  height: 70px;
  border-radius: 50%;
  background: linear-gradient(135deg, #4CAF50, #D9EF82);
  display: flex;
  align-items: center;
  justify-content: center;
  color: #fff;
  box-shadow: 0 6px 15px rgba(0,0,0,.1);
  transition: transform .3s ease;
}
.icon-circle i {
  font-size: 28px;
}
.feature-card:hover .icon-circle {
  transform: scale(1.08);
}

/* 🌼 العناوين والنصوص */
.feature-card h5 {
  color: #1b3b26;
  font-weight: 700;
  margin-top: 10px;
}
.feature-card p {
  color: #666;
  font-size: 0.95rem;
  margin: 0;
  line-height: 1.6;
}

/* 📱 Responsive */
@media (max-width: 992px) {
  .icon-circle { width: 60px; height: 60px; }
  .icon-circle i { font-size: 24px; }
  .feature-card { padding: 20px; }
}
@media (max-width: 576px) {
  .feature-card { padding: 18px; }
  .icon-circle { width: 55px; height: 55px; }
  .icon-circle i { font-size: 22px; }
  .features-modern h2 { font-size: 1.5rem; }
}
</style>
@endpush
@section('content')

<section class="page-header">
  <h1> {!! app()->getLocale() == 'en' ? $service->title_en : $service->title !!}</h1>
  <p>{{ __('messages.service_offered') }}<strong>{!! app()->getLocale() == 'en' ? $setting->name_en : $setting->name !!}</strong>{{ __('messages.service_professionalism') }} </p>
</section>

<section class="image-slider">
  <div class="container">
    <h2>{{ __('messages.Service_images') }}</h2>
    @if($service->images && $service->images->count())
      <div class="swiper mySwiperGlobal">
        <div class="swiper-wrapper">
          @foreach($service->images as $img)
          <div class="swiper-slide">
            <img src="{{ asset($img->image) }}" alt="{!! app()->getLocale() == 'en' ? $service->title_en : $service->title !!}">
          </div>
          @endforeach
        </div>
      </div>
    @else
      <p class="text-center text-muted">{{ __('messages.No_images') }}</p>
    @endif
  </div>
</section>
{{-- معرض الصور --}}
<div id="imageLightbox" class="lightbox">
  <span class="close">&times;</span>
  <img id="lightboxImg" src="" alt="عرض الصورة">
  <button class="prev">&#10094;</button>
  <button class="next">&#10095;</button>
</div>



{{-- نهاية المعرض --}}
<section class="service-details" style="
    text-align: center;
">
  <div class="container" style="max-width:900px;">
    <h2>{!! app()->getLocale() == 'en' ? $service->title_en : $service->title !!}</h2>
    <p>{!! app()->getLocale() == 'en' ? $service->description_en : $service->description !!}</p>
  </div>
</section>
{{-- 🌿 مميزات خدمتنا --}}
<section class="features-modern py-5" style="background:#f9faf9;">
  <div class="container">
    <h2 class="section-title text-center mb-5" style="font-weight:700; color:#1b3b26;">
      {{ __('messages.Features_of_our_service') }}🌿
    </h2>

    @if($service->features && $service->features->count() > 0)
      <div class="row g-4 justify-content-center">
        @foreach($service->features as $index => $feature)
          <div class="col-lg-3 col-md-4 col-sm-6 col-10" data-aos="zoom-in" data-aos-delay="{{ $index * 100 }}">
            <div class="feature-card text-center h-100 p-4" style="
    text-align: center;
">
              <div class="icon-circle mb-3 mx-auto">
                <i class="{{ $feature->icon ?? 'fa-solid fa-circle-check' }}"></i>
              </div>
              <h5 class="fw-bold mb-2">{!! app()->getLocale() == 'en' ? $feature->title_en : $feature->title !!}</h5>
              @if($feature->description)
                <p class="text-muted small mb-0">{!! app()->getLocale() == 'en' ? $feature->description_en : $service->description !!}</p>
              @endif
            </div>
          </div>
        @endforeach
      </div>
    @else
      <p class="text-center text-muted">{{ __('messages.no_registered_features') }}</p>
    @endif
  </div>
</section>


<section class="services-flex">
  <div class="container">
    <h3>
        {{-- {{ __('messages.Other_services') }} --}}
       {{  __('messages.Other_services')}} - {{ app()->getLocale() == 'en' ? $setting->name_en :  $setting->name }}

    </h3>
    <div class="services-wrapper">
      @foreach($related as $item)
      <div class="service-card" data-aos="fade-up">
        <div class="image-box">
          @php $imgPath = $item->images->first()->image ?? 'img/default.jpg'; @endphp
          <img src="{{ asset($imgPath) }}" alt="{!! app()->getLocale() == 'en' ? $item->title_en : $item->title !!}">
        </div>
        <div class="content-box">
          <i class="{{ $item->icon ?? 'fa-solid fa-leaf' }}"></i>
          <h4>{!! app()->getLocale() == 'en' ? $item->title_en : $item->title !!}</h4>
         {!! app()->getLocale() == 'en' ? $item->short_description_en : $item->short_description !!}
          <a href="{{ route('services.show', $item->slug) }}" class="btn-modern">{{ __('messages.View_details') }}</a>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<section class="footer-note">
  <div class="container">
    <h2>{{ __('messages.Renewed_confidence') }}🌸</h2>
    {{-- <p>في <strong>{!! app()->getLocale() == 'en' ? $setting->name_en : $setting->name !!}</strong>، نؤمن أن التميز في التفاصيل هو ما يصنع الفرق. هدفنا تقديم خدمات عالية الجودة تليق بثقة عملائنا وتدوم جمالاً وتأثيرًا.</p> --}}
<p>
    @if(app()->getLocale() == 'en')
        At <strong>{{ $setting->name_en ?? $setting->name }}</strong>, we believe that excellence comes from attention to detail.
        Our goal is to deliver high-quality services that earn the trust of our clients and ensure lasting beauty and impact.
    @else
        في <strong>{{ $setting->name }}</strong>، نؤمن أن التميز في التفاصيل هو ما يصنع الفرق.
        هدفنا تقديم خدمات عالية الجودة تليق بثقة عملائنا وتدوم جمالاً وتأثيرًا.
    @endif
</p>

</div>
</section>
<br /><br /><br />
{{-- <section class="cta-section">
  <div class="container">
    <h2>ابدأ رحلتك الخضراء معنا 🌿</h2>
    <p>تواصل مع فريقنا للحصول على استشارة مجانية لمشروعك الزراعي</p>
    <a href="https://wa.me/{{ $setting->phone ?? '' }}" target="_blank"><i class="fa-brands fa-whatsapp"></i> تواصل عبر واتساب</a>
  </div>
</section> --}}

<!-- ✅ نافذة عرض الصور (Lightbox) -->
<div id="imageLightbox" class="lightbox">
    <span class="close">&times;</span>
    <img class="lightbox-content" id="lightboxImg">
</div>

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
});
</script>

<script>
document.querySelectorAll('.swiper-slide img').forEach(img => {
  img.addEventListener('click', function() {
    const lightbox = document.getElementById('imageLightbox');
    const lightboxImg = document.getElementById('lightboxImg');
    lightbox.style.display = 'block';
    lightboxImg.src = this.src;
  });
});

document.querySelector('.lightbox .close').addEventListener('click', function() {
  document.getElementById('imageLightbox').style.display = 'none';
});

document.getElementById('imageLightbox').addEventListener('click', function(e) {
  if (e.target === this) this.style.display = 'none';
});
</script>

<script>
const images = Array.from(document.querySelectorAll('.swiper-slide img'));
const lightbox = document.getElementById('imageLightbox');
const lightboxImg = document.getElementById('lightboxImg');
const closeBtn = document.querySelector('.lightbox .close');
const prevBtn = document.querySelector('.lightbox .prev');
const nextBtn = document.querySelector('.lightbox .next');

let currentIndex = 0;

// ✅ فتح الصورة عند النقر
images.forEach((img, index) => {
  img.addEventListener('click', () => {
    currentIndex = index;
    showImage();
    lightbox.style.display = 'flex';
  });
});

// ✅ إغلاق عند النقر على × أو الخلفية
closeBtn.addEventListener('click', () => lightbox.style.display = 'none');
lightbox.addEventListener('click', e => {
  if (e.target === lightbox) lightbox.style.display = 'none';
});

// ✅ أزرار التنقل
prevBtn.addEventListener('click', e => {
  e.stopPropagation();
  currentIndex = (currentIndex - 1 + images.length) % images.length;
  showImage();
});
nextBtn.addEventListener('click', e => {
  e.stopPropagation();
  currentIndex = (currentIndex + 1) % images.length;
  showImage();
});

// ✅ عرض الصورة الحالية
function showImage() {
  lightboxImg.src = images[currentIndex].src;
}
document.addEventListener('keydown', e => {
  if (lightbox.style.display === 'flex') {
    if (e.key === 'ArrowRight') nextBtn.click();
    if (e.key === 'ArrowLeft') prevBtn.click();
    if (e.key === 'Escape') lightbox.style.display = 'none';
  }
});

</script>


@endsection
