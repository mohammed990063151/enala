@extends('frontend.layouts.master')
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

