
@extends('frontend.layouts.master')

@section('seo')

@php
$pageName = 'services';
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

{{-- @section('title',  __'messages.services'  '- ' app()->getLocale() == 'en' ? $setting->name_en : $setting->name ) --}}
@section('title', __('messages.services') . ' - ' . (app()->getLocale() == 'en'
    ? ($setting->name_en ?? $setting->name)
    : $setting->name
))

@push('styles')
<style>
/* body {
  font-family: 'Tajawal', sans-serif;
  direction: rtl;
  background: #f9faf9;
  margin: 0;
  padding: 0;
} */

/* 🌿 Flexbox Wrapper */
.services-wrapper {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 25px;
}

/* 🌱 Card Style */
.service-card {
  background: #fff;
  border-radius: 18px;
  box-shadow: 0 6px 20px rgba(0,0,0,0.08);
  overflow: hidden;
  flex: 1 1 calc(33.333% - 25px); /* 3 per row */
  max-width: calc(33.333% - 25px);
  display: flex;
  flex-direction: column;
  transition: all 0.3s ease;
  cursor: pointer;
}
.service-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 25px rgba(0,0,0,0.12);
}

.image-box {
  height: 230px;
  overflow: hidden;
}
.image-box img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform .4s ease;
}
.service-card:hover img {
  transform: scale(1.05);
}

.content-box {
  text-align: center;
  padding: 25px;
}
.content-box i {
  font-size: 35px;
  color: #4CAF50;
  margin-bottom: 10px;
}
.content-box h4 {
  color: #1b3b26;
  font-weight: 700;
  margin-bottom: 10px;
}
.content-box p {
  color: #777;
  font-size: 0.95rem;
  line-height: 1.7;
  margin-bottom: 15px;
}

/* 🟢 زر التفاصيل */
.btn-modern {
  background: linear-gradient(135deg, #1b3b26, #4CAF50);
  color: #fff;
  border-radius: 30px;
  padding: 8px 22px;
  font-size: 0.9rem;
  text-decoration: none;
  transition: 0.3s;
}
.btn-modern:hover {
  background: #D9EF82;
  color: #1b3b26;
}

/* 💬 CTA */
.cta-modern {
  background: linear-gradient(135deg, #1b3b26, #4CAF50);
}
.btn-modern-light {
  background: #fff;
  color: #1b3b26;
  padding: 10px 25px;
  border-radius: 30px;
  font-weight: 600;
  text-decoration: none;
  transition: .3s;
}
.btn-modern-light:hover {
  background: #D9EF82;
}

/* 📱 Responsive Breakpoints */
@media (max-width: 992px) {
  .service-card {
    flex: 1 1 calc(45% - 25px);
    max-width: calc(45% - 25px);
  }
}
@media (max-width: 576px) {
  .service-card {
    flex: 1 1 100%;
    max-width: 100%;
  }
}

 </style>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<style>
.image-slider {
  background: #f9faf9;
}
.swiper {
  width: 100%;
  height: 300px;
}
.swiper-slide {
  display: flex;
  justify-content: center;
  align-items: center;
}
.swiper-slide img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 15px;
  box-shadow: 0 6px 20px rgba(0,0,0,0.15);
  transition: transform .5s ease;
}
.swiper-slide:hover img {
  transform: scale(1.05);
}

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
@endpush
@section('content')

<section class="page-header" style="
    text-align: center;
    padding: 90px 20px;
    background: linear-gradient(rgba(0,0,0,0.55), rgba(0,0,0,0.55)),
                url('{{ asset("dashboard_files/img/services/1761304116_image4.jpg") }}') center/cover no-repeat;
    color: #fff;
    position: relative;
">
    <div style="position:relative; z-index:2; max-width: 900px; margin:auto;">
        <h1 style="font-size: 3rem; color: #D9EF82; margin-bottom: 20px; font-weight:700;">
             {{ __('messages.Company_Services') }} <span style="color:#fff;">{!! app()->getLocale() == 'en' ? $setting->name_en : $setting->name !!}</span>
        </h1>
        <p style="font-size: 1.2rem; line-height: 1.9; color: #f3f3f3;">
            {!! __('messages.about_paragraph', ['company' => app()->getLocale() == 'en' ? $setting->name_en : $setting->name]) !!}
        </p>
        <p style="margin-top:15px; color:#e0e0e0;">
           @if(app()->getLocale() == 'en')
        We aim to achieve a balance between
        <span style="color:#D9EF82;">environmental sustainability</span>
        and
        <span style="color:#D9EF82;">operational quality</span>
        through a specialized team committed to delivering a refined experience
        that reflects the authentic standards of Saudi hospitality.
    @else
        نهدف إلى تحقيق التوازن بين
        <span style="color:#D9EF82;">الاستدامة البيئية</span>
        و
        <span style="color:#D9EF82;">الجودة التشغيلية</span>
        من خلال فريق متخصص
        يسعى لتقديم تجربة راقية تُعبّر عن معايير الضيافة السعودية الأصيلة.
    @endif
        </p>
    </div>
</section>


<section class="image-slider py-5">
  <div class="container">
    <h2 class="section-title text-center mb-5"> {{ __('messages.Our_portfolio') }} </h2>

    <div class="swiper mySwiperGlobal" style="
    width: 170%;
    height: 500px;
">
      <div class="swiper-wrapper">
        @foreach ($services as $service)
            @if($service->images && $service->images->count())
                @foreach($service->images as $img)
                    <div class="swiper-slide" style="width: 600px; !important;">
                        <img src="{{ asset($img->image) }}" alt="{!! app()->getLocale() == 'en' ? $service->title_en : $service->title !!}">
                    </div>
                @endforeach
            @else
                <div class="swiper-slide">
                    <img src="{{ asset('dashboard_files/img/gallery/sample1.jpg') }}" alt="no image">
                </div>
            @endif
        @endforeach
      </div>
    </div>
  </div>
</section>
{{-- معرض الصور --}}

<!-- ✅ Lightbox -->
<div id="imageLightbox" class="lightbox">
  <span class="close">&times;</span>
  <img id="lightboxImg" src="" alt="عرض الصورة">
  <button class="prev">&#10094;</button>
  <button class="next">&#10095;</button>
</div>


{{-- نهاية معرض الصور --}}
  <div style="max-width: 900px; margin:auto;">
    <h1 style="font-size: 3rem; color: #D9EF82; margin-bottom: 20px; font-weight:700;">
       {{ __('messages.Company_Services') }}  <span >{!! app()->getLocale() == 'en' ? $setting->name_en : $setting->name !!}</span>
    </h1>
    <p style="font-size: 1.2rem; line-height: 1.9;">
      {{ __('messages.des_serveice') }}
    </p>
  </div>
</section>
<br /><br />
<section class="services-flex py-5" style="background:#f9faf9;">
  <div class="container">
    <div class="services-wrapper">
      @foreach($services as $index => $service)
      <div class="service-card" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
        <div class="image-box">
          <img src="{{ asset($service->image) }}" alt="{!! app()->getLocale() == 'en' ? $service->title_en : $service->title !!}">


        </div>
        <div class="content-box">
          <i class="{{ $service->icon ?? 'fa-solid fa-leaf' }}"></i>
          <h4> {!! app()->getLocale() == 'en' ? $service->title_en : $service->title !!}</h4>
          <p>{!! app()->getLocale() == 'en' ? $service->short_description_en : $service->short_description !!}</p>
          <a href="{{ route('services.show', $service->slug) }}" class="btn-modern">{{ __('messages.View_details') }}</a>
{{-- <a href="{{ route('bookings.pay', $booking->id) }}" class="btn btn-success">
    ادفع الآن عبر ميسر
</a> --}}
{{-- <a href="{{ route('booking.create', $service->id) }}" class="btn btn-success">
    احجز الآن
</a> --}}

        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<section class="cta-modern text-center py-5 text-white" data-aos="zoom-in">
  <div class="container">
    <h2 class="fw-bold mb-3">{{ __('messages.contact_green') }}🌿</h2>
    <p class="fs-5 mb-4">{{ __('messages.contact_team') }}</p>
    <a href="https://wa.me/{{ $setting->phone ?? '' }}" target="_blank" class="btn-modern-light" style="
    color: black;
">
      <i class="fa-brands fa-whatsapp"></i> {{ __('messages.Contact_via_WhatsApp') }}
    </a>
  </div>
</section>
<div id="imageLightbox" class="lightbox">
    <span class="close">&times;</span>
    <img class="lightbox-content" id="lightboxImg">
</div>
<br /><br />
<!-- ✅ مكتبة AOS -->
<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
AOS.init({
  duration: 1000,
  once: true,
  offset: 100
});
</script>
 <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    {{-- <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script> --}}
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true
            },
            breakpoints: {
                0: {
                    slidesPerView: 1
                },
                768: {
                    slidesPerView: 2
                },
                1200: {
                    slidesPerView: 3
                }
            }
        });
    </script>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    @foreach($services as $index => $service)
      new Swiper(".mySwiper-{{ $index }}", {
        slidesPerView: 3,
        spaceBetween: 20,
        loop: true,
        centeredSlides: true,
        speed: 1000,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".mySwiper-{{ $index }} .swiper-pagination",
          clickable: true,
        },
        breakpoints: {
          0: { slidesPerView: 1 },
          768: { slidesPerView: 2 },
          1200: { slidesPerView: 3 }
        }
      });
    @endforeach
  });
</script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    new Swiper(".mySwiperGlobal", {
      slidesPerView: 3,
      spaceBetween: 25,
      loop: true,
      speed: 3000,
      autoplay: {
        delay: 0,
        disableOnInteraction: false,
      },
      allowTouchMove: false,
      freeMode: true,
      grabCursor: true,
      breakpoints: {
        0: { slidesPerView: 1.3 },
        768: { slidesPerView: 2 },
        1200: { slidesPerView: 3 }
      }
    });
  });
</script>
{{-- @endpush --}}

{{-- @push('scripts') --}}

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

