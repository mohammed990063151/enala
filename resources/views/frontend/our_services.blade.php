{{-- @extends('frontend.layouts.master')
<style>
    body {
        font-family: 'Cairo', sans-serif;
        background-color: #fafafa;
    }

    .blog-header {
        background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
                    url('../img/hotel-1749602_1280.jpg') center/cover;
        text-align: center;
        color: #fff;
        padding: 100px 20px;
    }

    .blog-header h1 {
        font-size: 2.8rem;
        color: #D9EF82;
        margin-bottom: 10px;
    }
    </style>

@section('content')
<section class="page-header" style="
    text-align: center;
    padding: 80px 20px;
    background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
                url('{{ asset('img/receptionists-5975962_1280.jpg') }}') center/cover no-repeat;
    color: #fff;
">
    <h1 style="font-size: 3rem; color: #D9EF82; margin-bottom: 15px;">
         خدمتنا
    </h1>
    <p style="max-width: 800px; margin: auto; font-size: 1.1rem; line-height: 1.8; color: #eee;">
       نقدم مجموعة من الخدمات المميزة لضيوفنا لضمان إقامة مريحة وممتعة، تشمل الراحة، الترفيه، وخدمات الضيافة الفاخرة.
    </p>
</section>













<section class="amazing-services">
  <div class="container">
    <div class="section-title" data-aos="fade-up">
      <h2>خدماتنا الرائعة</h2>
      <p>تحقق من خدماتنا الرائعة</p>
    </div>

    <!-- الخدمة 1 -->
    <div class="service-row" data-aos="fade-right">
      <div class="service-image">
        <img src="../img/657dc085f1dcb_151jpg.jpg" alt="صالة العاب رياضية">
      </div>
      <div class="service-content">
        <h3>صالة العاب رياضية</h3>
        <p>اجعل اقامتك افضل صحة وحافظ على لياقتك البدنية بصالة الألعاب الرياضية المجهزة بأحدث معدات اللياقة البدنية.</p>
      </div>
    </div>

    <!-- الخدمة 2 -->
    <div class="service-row reverse" data-aos="fade-left">
      <div class="service-image">
        <img src="../img/657dc1172faec_azy-34961jpg.jpg" alt="قاعة اجتماعات">
      </div>
      <div class="service-content">
        <h3>قاعة اجتماعات</h3>
        <p>قاعة اجتماعات لعقد المؤتمرات واجتماعات الشركات والدورات التدريبية، مجهزة بأحدث الوسائل والخدمات الرائعة.</p>
      </div>
    </div>

    <!-- الخدمة 3 -->
    <div class="service-row" data-aos="fade-right">
      <div class="service-image">
        <img src="../img/6323224c2d9c5_63136758b69271662216024.webp" alt="حمام سباحة">
      </div>
      <div class="service-content">
        <h3>حمام سباحة</h3>
        <p>مسابح خاصة نظيفة ومجهزة لكل الفلل والشاليهات بمنتجعات أناله لتجربة استجمام لا تُنسى.</p>
      </div>
    </div>

    <!-- الخدمة 4 -->
    <div class="service-row reverse" data-aos="fade-left">
      <div class="service-image">
        <img src="../img/6315b138554a6_restaurant.webp" alt="مطاعم">
      </div>
      <div class="service-content">
        <h3>مطاعم</h3>
        <p>تلذذوا بأشهى المأكولات العربية والعالمية مع بوفيه أناله، في جو هادئ وتصاميم عصرية تعكس روح التراث.</p>
      </div>
    </div>
  </div>
</section>

<!-- مكتبة الأنيميشن AOS -->
<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({ duration: 1000, once: true });
</script>

<style>
.amazing-services {
  background: #fff;
  padding: 80px 0;
  direction: rtl;
  font-family: "Tajawal", sans-serif;
}

.section-title {
  text-align: center;
  margin-bottom: 70px;
}

.section-title h2 {
  font-size: 38px;
  color: #000;
  font-weight: 800;
  position: relative;
  display: inline-block;
}

.section-title h2::after {
  content: '';
  position: absolute;
  bottom: -10px;
  left: 50%;
  width: 60px;
  height: 4px;
  background-color: #D9EF82;
  transform: translateX(-50%);
  border-radius: 2px;
}

.section-title p {
  color: #555;
  font-size: 18px;
  margin-top: 15px;
}

.service-row {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 40px;
  margin-bottom: 100px;
  flex-wrap: wrap;
}

.service-row.reverse {
  flex-direction: row-reverse;
}

.service-image {
  flex: 1 1 45%;
  position: relative;
  overflow: hidden;
  border-radius: 20px;
  box-shadow: 0 10px 25px rgba(0,0,0,0.1);
}

.service-image img {
  width: 100%;
  height: 350px;
  object-fit: cover;
  transition: transform 0.6s ease;
}

.service-image::after {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg, rgba(217,239,130,0.4) 0%, rgba(255,255,255,0) 100%);
  opacity: 0;
  transition: opacity 0.4s ease;
}

.service-image:hover img {
  transform: scale(1.08);
}

.service-image:hover::after {
  opacity: 1;
}

.service-content {
  flex: 1 1 45%;
  text-align: right;
}

.service-content h3 {
  font-size: 26px;
  color: #000;
  margin-bottom: 15px;
  position: relative;
}

.service-content h3::before {
  content: "";
  position: absolute;
  bottom: -8px;
  right: 0;
  width: 50px;
  height: 3px;
  background-color: #D9EF82;
  border-radius: 2px;
}

.service-content p {
  color: #444;
  font-size: 17px;
  line-height: 1.8;
  margin-top: 25px;
}

@media (max-width: 768px) {
  .service-row {
    flex-direction: column !important;
  }
  .service-content {
    text-align: center;
  }
  .service-content h3::before {
    right: 50%;
    transform: translateX(50%);
  }
}
</style>








@endsection

<!-- ===== CSS Section ===== -->
 --}}
{{-- resources/views/frontend/services.blade.php --}}
{{-- @extends('frontend.layouts.master')

@section('title', 'خدماتنا - مضياف')

@section('content')

<section style="padding:80px 20px;text-align:center;background:#fff;">
    <h2 style="font-size:2.8rem;color:#1a1a1a;margin-bottom:15px;">خدماتنا</h2>
    <p style="max-width:700px;margin:auto;color:#666;">
        نقدم مجموعة متنوعة من الخدمات الزراعية والبيئية المتكاملة وفق أعلى معايير الجودة.
    </p>
</section>

<section style="padding:60px 0;background:#f7f9f8;">
    <div class="container">
        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:25px;">

            @foreach($pagservices as $service)
            <div style="background:#fff;border-radius:18px;padding:25px;text-align:center;box-shadow:0 2px 10px rgba(0,0,0,.05);transition:.3s;">
                <div style="font-size:40px;color:#27ae60;margin-bottom:10px;">
                    <i class="{{ $service->icon }}"></i>
                </div>
                <h3 style="font-size:1.3rem;color:#1b3b26;margin-bottom:8px;">{{ $service->title }}</h3>
                <p style="font-size:.95rem;color:#555;">{{ $service->description }}</p>

                @if($service->image)
                    <img src="{{ asset($service->image) }}" style="width:80%;border-radius:12px;margin-top:10px;">
                @endif
            </div>
            @endforeach

        </div>
    </div>
</section>

@endsection --}}



@extends('frontend.layouts.master')

@section('title', 'خدماتنا')

@section('content')
<style>
    .service-card {
        background: #ffffff;
        border-radius: 12px;
        padding: 25px;
        text-align: center;
        border: 1px solid #eee;
        transition: .3s;
        height: 100%;
    }
    .service-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 0 20px rgba(0,0,0,0.10);
        border-color: #28a745;
    }
    .service-icon {
        font-size: 45px;
        color: #28a745;
        margin-bottom: 15px;
    }
    .service-title {
        font-size: 20px;
        font-weight: 700;
        color: #34495e;
        margin-bottom: 10px;
    }
    .service-desc {
        font-size: 15px;
        color: #666;
        min-height: 70px;
        line-height: 1.7;
    }
</style>

{{-- <section class="py-5" style="direction: rtl;">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="fw-bold">خدمات شركة مضياف</h2>
            <p class="text-muted">تعرف على أبرز خدماتنا الزراعية</p>
        </div>

        <div class="row g-4">
            @forelse($pag_service as $service)
                <div class="col-md-4">
                    <div class="service-card">
                        <i class="{{ $service->icon }} service-icon"></i>

                        <h3 class="service-title">{{ $service->title }}</h3>

                        <p class="service-desc">{{ $service->description }}</p>

                        <a href="{{ url('service/'.$service->slug) }}" class="btn btn-success btn-sm rounded-pill mt-2">
                            تفاصيل أكثر
                        </a>
                    </div>
                </div>
            @empty
                <p class="text-center">لا توجد خدمات مسجلة حاليًا</p>
            @endforelse
        </div>

    </div>
</section> --}}

@endsection
