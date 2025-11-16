@extends('frontend.layouts.master')


@section('title', __('messages.about') . ' - ' . (app()->getLocale() == 'en'
    ? ($setting->name_en ?? $setting->name)
    : $setting->name
))

<style>
/* body {
  font-family: 'Tajawal', sans-serif;
  direction: rtl;
  background: #f9faf9;
  margin: 0;
  padding: 0;
} */

/* 🌿 Flexbox Wrapper */
.projects-wrapper {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 25px;
}

/* 🌱 Card Style */
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
  cursor: pointer;
}
.project-card:hover {
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
.project-card:hover img {
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

/* 📱 Responsive */
@media (max-width: 992px) {
  .project-card {
    flex: 1 1 calc(45% - 25px);
    max-width: calc(45% - 25px);
  }
}
@media (max-width: 576px) {
  .project-card {
    flex: 1 1 100%;
    max-width: 100%;
  }
}
</style>

@section('content')

{{-- 🏗️ Hero Section --}}
<section class="page-header" style="
    text-align: center;
    padding: 90px 20px;
    background: linear-gradient(rgba(0,0,0,0.55), rgba(0,0,0,0.55)),
                url('{{ asset('dashboard_files/img/logos/portfolio-1-01.jpg') }}') center/cover no-repeat;
    color: #fff;
    position: relative;
">
  <div style="position:relative; z-index:2; max-width:900px; margin:auto;">
    <h1 style="font-size:3rem; color:#D9EF82; margin-bottom:20px; font-weight:700;">
      {{ __('messages.projects_completed') }} <span style="color:#fff;">{{ app()->getLocale() == 'en' ? $setting->name_en : $setting->name }}</span>
    </h1>
    <p style="font-size:1.2rem; line-height:1.9; color:#f3f3f3;">{{ __('messages.des_project') }}</p>
  </div>
</section>

{{-- 🎞️ معرض المشاريع --}}
<section class="image-slider py-5">
  <div class="container">
    <h2 class="section-title text-center mb-5">
        {{ __('messages.Our_Projects_Showcase') }}
    </h2>
    <div class="swiper mySwiperGlobal" style="width:170%; height:500px;">
      <div class="swiper-wrapper">
        @foreach ($projects as $project)
          @if($project->images && $project->images->count())
            @foreach($project->images as $img)
              <div class="swiper-slide" style="width:600px;">
                <img src="{{ asset($img->image) }}" alt="{{ app()->getLocale() == 'en' ? $project->title_en : $project->title }}">
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
   <div style="max-width: 900px; margin:auto;">
    <h1 style="font-size: 3rem; color: #D9EF82; margin-bottom: 20px; font-weight:700;">
      {{ __('messages.projects_completed') }} <span >{{ app()->getLocale() == 'en' ? $setting->name_en : $setting->name }}</span>
    </h1>
    <p style="font-size: 1.2rem; line-height: 1.9;">
           {{ __('messages.projects_text') }}
    </p>
  </div>
</section>
<br /><br /><br />
{{-- 💡 Lightbox --}}
<div id="imageLightbox" class="lightbox">
  <span class="close">&times;</span>
  <img id="lightboxImg" src="" alt="عرض الصورة">
  <button class="prev">&#10094;</button>
  <button class="next">&#10095;</button>
</div>

<style>
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

{{-- 🧩 قائمة المشاريع --}}
<section class="projects-flex py-5" style="background:#f9faf9;">
  <div class="container">
    <div class="projects-wrapper">
      @foreach($projects as $index => $project)
      <div class="project-card" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
        <div class="image-box">
          <img src="{{ asset($project->image) }}" alt="{{ app()->getLocale() == 'en' ? $project->title_en : $project->title }}">
        </div>
        <div class="content-box">
          <i class="fa-solid fa-seedling"></i>
          <h4>{{ app()->getLocale() == 'en' ? $project->title_en : $project->title }}</h4>
          <p>{!! app()->getLocale() == 'en' ? $project->short_description_en : $project->short_description !!}</p>
          <br /><br />
          <a href="{{ route('testimonials', $project->slug) }}" class="btn-modern">{{ __('messages.View_details') }} </a>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
<br /><br /><br />


{{-- CTA --}}
<section class="cta-modern text-center py-5 text-white" data-aos="zoom-in">
  <div class="container">
    <h2 class="fw-bold mb-3">{{ __('messages.Start_your_project_with_us_today') }}🌿</h2>
    <p class="fs-5 mb-4">{{ __('messages.Contact_our_team_to_design_and_implement_your_project_to_the_highest_quality_standards') }}</p>
    <a href="https://wa.me/{{ $setting->phone ?? '' }}" target="_blank" class="btn-modern-light">
      <i class="fa-brands fa-whatsapp"></i> {{ __('messages.Contact_via_WhatsApp') }}
    </a>
  </div>
</section>
<br /><br /><br />
{{-- JS Libraries --}}
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

<script>
AOS.init({ duration: 1000, once: true });

new Swiper(".mySwiperGlobal", {
  slidesPerView: 3,
  spaceBetween: 25,
  loop: true,
  speed: 3000,
  autoplay: { delay: 0, disableOnInteraction: false },
  allowTouchMove: false,
  freeMode: true,
  grabCursor: true,
  breakpoints: {
    0: { slidesPerView: 1.3 },
    768: { slidesPerView: 2 },
    1200: { slidesPerView: 3 }
  }
});

// Lightbox Logic
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
function showImage(){ lightboxImg.src = images[currentIndex].src; }
closeBtn.addEventListener('click',()=>lightbox.style.display='none');
lightbox.addEventListener('click',e=>{ if(e.target===lightbox) lightbox.style.display='none'; });
prevBtn.addEventListener('click',e=>{ e.stopPropagation(); currentIndex=(currentIndex-1+images.length)%images.length; showImage(); });
nextBtn.addEventListener('click',e=>{ e.stopPropagation(); currentIndex=(currentIndex+1)%images.length; showImage(); });
document.addEventListener('keydown', e => {
  if (lightbox.style.display === 'flex') {
    if (e.key === 'ArrowRight') nextBtn.click();
    if (e.key === 'ArrowLeft') prevBtn.click();
    if (e.key === 'Escape') lightbox.style.display = 'none';
  }
});
</script>

@endsection

