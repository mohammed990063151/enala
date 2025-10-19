@extends('frontend.layouts.master')
<!-- ===== Animations ===== -->
<style>
@keyframes fadeInLeft {
    0% {opacity:0; transform: translateX(-50px);}
    100% {opacity:1; transform: translateX(0);}
}
@keyframes fadeInRight {
    0% {opacity:0; transform: translateX(50px);}
    100% {opacity:1; transform: translateX(0);}
}
.contact-form input:focus, .contact-form textarea:focus {
    border-color: #D9EF82;
    box-shadow: 0 0 10px rgba(217,239,130,0.3);
    outline: none;
}
button:hover {
    background-color: #c4e366;
    transform: scale(1.05);
}
</style>

@section('content')

   <!-- Page Header Section -->
<section class="page-header" style="
    text-align: center;
    padding: 80px 20px;
    background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
                url('{{ asset('img/contact-us-6921414_1280.jpg') }}') center/cover no-repeat;
    color: #fff;
">
    <h1 style="font-size: 3rem; color: #D9EF82; margin-bottom: 15px;">
        تواصل معنا
    </h1>
    <p style="max-width: 800px; margin: auto; font-size: 1.1rem; line-height: 1.8; color: #eee;">
        نحن في <strong>فنادق إنالة</strong> نرحب بتواصلكم واستفساراتكم في أي وقت.
    </p>
</section>





              {{-- <div id="main"> --}}


<!-- Contact Us Section -->
<section id="contact-us" style="background: #fff; padding: 6rem 2rem; position: relative;">
    <div style="max-width: 1200px; margin: 0 auto; display: flex; flex-wrap: wrap; gap: 2rem; align-items: stretch;">

        <!-- Left Info Card -->
        <div style="flex: 1; min-width: 300px; background-color: #D9EF82; border-radius: 20px; padding: 3rem; color: #333;
                    display: flex; flex-direction: column; justify-content: center; box-shadow: 0 20px 40px rgba(0,0,0,0.1);
                    animation: fadeInLeft 1s ease;">
            <h2 style="margin-bottom: 1rem; font-size: 2rem;">تواصل معنا</h2>
            <p style="margin-bottom: 2rem; line-height: 1.6;">نحن هنا لمساعدتك والإجابة على جميع استفساراتك.
                يرجى ملء النموذج وسنقوم بالرد عليك في أسرع وقت.</p>
            <div style="display: flex; flex-direction: column; gap: 1rem;">
                <span>📧 البريد: info@example.com</span>
                <span>📞 الهاتف: +971 50 123 4567</span>
                <span>📍 العنوان: دبي، الإمارات</span>
            </div>
        </div>

        <!-- Right Form Card -->
        <div style="flex: 1; min-width: 300px; background-color: #fff; border-radius: 20px; padding: 3rem;
                    box-shadow: 0 20px 40px rgba(0,0,0,0.1); animation: fadeInRight 1s ease;">
            <h2 style="margin-bottom: 1rem; font-size: 2rem; color: #D9EF82;">أرسل رسالة</h2>
            <p style="margin-bottom: 2rem; color: #666;">املأ النموذج أدناه للتواصل معنا مباشرة</p>
            <form>
                <input type="text" placeholder="الاسم الكامل" required
                       style="width:100%; padding:1rem; margin-bottom:1rem; border-radius:10px; border:1px solid #ddd; transition:0.3s;">
                <input type="email" placeholder="البريد الإلكتروني" required
                       style="width:100%; padding:1rem; margin-bottom:1rem; border-radius:10px; border:1px solid #ddd; transition:0.3s;">
                <input type="text" placeholder="الموضوع" required
                       style="width:100%; padding:1rem; margin-bottom:1rem; border-radius:10px; border:1px solid #ddd; transition:0.3s;">
                <textarea rows="5" placeholder="رسالتك" required
                          style="width:100%; padding:1rem; margin-bottom:1rem; border-radius:10px; border:1px solid #ddd; transition:0.3s;"></textarea>
                <button type="submit" style="width:100%; padding:1rem; border:none; border-radius:10px; background-color:#D9EF82; font-weight:bold; cursor:pointer; transition:0.3s;">
                    إرسال الرسالة
                </button>
            </form>
        </div>

    </div>
</section>
{{-- </div> --}}


<!-- Contact Us Section -->
<section class="contact-us-section">
    <div class="container">
        <h2 class="section-title">تواصل معنا</h2>
        <p class="section-subtitle">جميع الفنادق والمنتجعات التابعة لنا</p>

        <!-- Main Map -->
        <div class="main-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3608.1234567890!2d46.6753!3d24.7136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1senala+hotels+ksa!5e0!3m2!1sar!2ssa!4v1697599999999"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
            </iframe>
        </div>

        <!-- Hotels Cards -->
        <div class="cards-container">
            <!-- Card 1 -->
            <div class="hotel-card">
                <h3>انالة للفنادق والمنتجعات</h3>
                <p>الرياض، المملكة العربية السعودية</p>
                <p>📞 050 555 7749</p>
                <p>✉ reservations@enala.sa</p>
                <a class="map-link" href="https://www.google.com/maps/search/?api=1&query=24.7136,46.6753" target="_blank">عرض الخريطة</a>
            </div>

            <!-- Card 2 -->
            <div class="hotel-card">
                <h3>انالة للشقق الفندقية - تبوك</h3>
                <p>تبوك - حي الحمراء – طريق نيوم الدولي</p>
                <p>📞 0146222221</p>
                <p>✉ fo.tabuk@enala.sa</p>
                <a class="map-link" href="https://www.google.com/maps/search/?api=1&query=28.3838,36.5662" target="_blank">عرض الخريطة</a>
            </div>

            <!-- Card 3 -->
            <div class="hotel-card">
                <h3>منتجع كيو ريزورت</h3>
                <p>طريق الثمامة الرئيسي حي الرمال</p>
                <p>📞 0555526237</p>
                <p>✉ resrvations@enala.sa</p>
                <a class="map-link" href="https://www.google.com/maps/search/?api=1&query=24.8040,46.7406" target="_blank">عرض الخريطة</a>
            </div>
        </div>
    </div>


</section>



<style>
/* ===== Section Styles ===== */
body {margin:0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background:#f5f5f5;}
.contact-us-section {padding:60px 20px; background:#fff;}
.container {max-width:1200px; margin:0 auto;}
.section-title {text-align:center; font-size:2.5rem; color:#D9EF82; margin-bottom:10px;}
.section-subtitle {text-align:center; font-size:1rem; color:#555; margin-bottom:40px;}
.main-map {width:100%; height:400px; border-radius:15px; overflow:hidden; margin-bottom:50px; box-shadow:0 10px 30px rgba(0,0,0,0.1);}
.cards-container {display:grid; grid-template-columns:repeat(auto-fit, minmax(280px,1fr)); gap:25px;}
.hotel-card {background:#fff; border-radius:15px; padding:20px; box-shadow:0 8px 25px rgba(0,0,0,0.08); display:flex; flex-direction:column; transition:0.3s;}
.hotel-card:hover {transform:translateY(-5px); box-shadow:0 12px 35px rgba(0,0,0,0.12);}
.hotel-card h3 {color:#D9EF82; font-size:1.4rem; margin-bottom:10px;}
.hotel-card p {font-size:0.95rem; color:#333; margin:4px 0; line-height:1.4;}
.hotel-card a.map-link {margin-top:10px; display:inline-block; text-decoration:none; background:#D9EF82; color:#fff; padding:8px 15px; border-radius:10px; font-weight:bold; transition:0.3s;}
.hotel-card a.map-link:hover {background-color:#c4e366;}
@media(max-width:768px){.section-title{font-size:2rem;} .hotel-card h3{font-size:1.2rem;}}
</style>













<section class="hotels-section" style="padding:60px 20px; background:#f8f9fa;">
    <div class="container">
        <!-- Section Title -->
        <div class="section-header" style="text-align:center; margin-bottom:50px;">
            <h2 style="color:#2c3e50; font-size:2.5rem; font-weight:700;">فنادق ومنتجعات انالة</h2>
        </div>

        <!-- Hotels Grid -->
        <div class="hotels-grid">
            <!-- كارد 1 -->
            <div class="hotel-card">
                <img src="https://enala.sa/images/settings/63189b2836528_enala logo 600X600- PNG.png" alt="انالة للفنادق والمنتجعات">
                <div class="hotel-info">
                    <h3>انالة للفنادق والمنتجعات</h3>
                    <ul class="hotel-details">
                        <li><i class="fa fa-map-marker"></i> الرياض، المملكة العربية السعودية</li>
                        <li><i class="fa fa-phone"></i> 050 555 7749</li>
                        <li><i class="fa fa-envelope-o"></i> reservations@enala.sa</li>
                    </ul>
                    <span class="hotel-city">الرياض</span>
                </div>
            </div>

            <!-- كارد 2 -->
            <div class="hotel-card">
                <img src="https://enala.sa/images/hotels/فندق اناله تبوك enala tabuk hotel (31).webp" alt="انالة للشقق الفندقية - تبوك">
                <div class="hotel-info">
                    <h3>انالة للشقق الفندقية - تبوك</h3>
                    <ul class="hotel-details">
                        <li><i class="fa fa-map-marker"></i> تبوك - حي الحمراء – طريق نيوم الدولي</li>
                        <li><i class="fa fa-phone"></i> 0146222221</li>
                        <li><i class="fa fa-envelope-o"></i> fo.tabuk@enala.sa</li>
                    </ul>
                    <span class="hotel-city">مدينة تبوك</span>
                </div>
            </div>

            <!-- كارد 3 -->
            <div class="hotel-card">
                <img src="https://enala.sa/images/hotels/q-resort_630a3f2b53127_45.jpg" alt="منتجع كيو ريزورت">
                <div class="hotel-info">
                    <h3>منتجع كيو ريزورت</h3>
                    <ul class="hotel-details">
                        <li><i class="fa fa-map-marker"></i> طريق الثمامة الرئيسي حي الرمال</li>
                        <li><i class="fa fa-phone"></i> 0555526237</li>
                        <li><i class="fa fa-envelope-o"></i> resrvations@enala.sa</li>
                    </ul>
                    <span class="hotel-city">مدينة الرياض</span>
                </div>
            </div>
        </div>
    </div>


     <div class="container">
        <!-- Section Title -->
        <div class="section-header" style="text-align:center; margin-bottom:50px;">
            {{-- <h2 style="color:#2c3e50; font-size:2.5rem; font-weight:700;">فنادق ومنتجعات انالة</h2> --}}
        </div>

        <!-- Hotels Grid -->
        <div class="hotels-grid">
            <!-- كارد 1 -->
            <div class="hotel-card">
                <img src="https://enala.sa/images/hotels/enala-resort_102A9169 copy.jpg" alt="برايفت ريزورت">
                <div class="hotel-info">
                    <h3>برايفت ريزورت</h3>
                    <ul class="hotel-details">
                        <li><i class="fa fa-map-marker"></i> شارع الفن حي الرمال</li>
                        <li><i class="fa fa-phone"></i> 0505686932</li>
                        <li><i class="fa fa-envelope-o"></i> reservations@enala.sa</li>
                    </ul>
                    <h5 style="margin:0; color:#D9EF82;">برايفت ريزورت</h5>
                    <span class="hotel-city">مدينة الرياض</span>
                </div>
            </div>

            <!-- كارد 2 -->
            <div class="hotel-card">
                <img src="https://enala.sa/images/hotels/30.webp" alt="ذا ون ريزورت">
                <div class="hotel-info">
                    <h3>ذا ون ريزورت</h3>
                    <ul class="hotel-details">
                        <li><i class="fa fa-map-marker"></i> طريق الأمير محمد بن سلمان بن عبدالعزيز، الرمال، الرياض 13268</li>
                        <li><i class="fa fa-phone"></i> 0540357866</li>
                        <li><i class="fa fa-envelope-o"></i> reservations@enala.sa</li>
                    </ul>
                    <h5 style="margin:0; color:#D9EF82;">ذا ون ريزورت</h5>
                    <span class="hotel-city">مدينة الرياض</span>
                </div>
            </div>

            <!-- كارد 3 -->
            <div class="hotel-card">
                <img src="https://enala.sa/images/hotels/فندق ارفاد erfad hotel (1).webp" alt="فندق ارفاد الربيع">
                <div class="hotel-info">
                    <h3>فندق ارفاد الربيع</h3>
                    <ul class="hotel-details">
                        <li><i class="fa fa-map-marker"></i> 6151 طريق الملك عبدالعزيز، الربيع، الرياض 13316</li>
                        <li><i class="fa fa-phone"></i> 0114977770</li>
                        <li><i class="fa fa-envelope-o"></i> fom@enala.sa</li>
                    </ul>
                        <h5 style="margin:0; color:#D9EF82;">فندق ارفاد الربيع</h5>
                    <span class="hotel-city">مدينة الرياض</span>
                </div>
            </div>
        </div>
    </div>




     <div class="container">
        <!-- Section Title -->
        <div class="section-header" style="text-align:center; margin-bottom:50px;">
            {{-- <h2 style="color:#2c3e50; font-size:2.5rem; font-weight:700;">فنادق ومنتجعات انالة</h2> --}}
        </div>

        <!-- Hotels Grid -->
        <div class="hotels-grid">
            <!-- كارد 1 -->
            <div class="hotel-card">
                <img src="https://enala.sa/images/hotels/Enala Alkhobar Hotel فندق اناله الخبر30.webp" alt="فندق اناله الخبر">
                <div class="hotel-info">
                  <h3>فندق اناله الخبر</h3>
                    <ul class="hotel-details">
                        <li><i class="fa fa-map-marker"></i> طريق الملك فهد 2562 حي التحلية</li>
                        <li><i class="fa fa-phone"></i> 0138166665</li>
                        <li><i class="fa fa-envelope-o"></i> fo.alkhobar@enala.sa</li>
                    </ul>
                    <span class="hotel-city">مدينة الخبر</span>
                </div>
            </div>

            <!-- كارد 2 -->
            <div class="hotel-card">
                <img src="https://enala.sa/images/hotels/فندق اناله تبوك enala tabuk hotel (31).webp" alt="انالة للشقق الفندقية - تبوك">
                <div class="hotel-info">
                    <h3>فندق اناله املج</h3>
                    <ul class="hotel-details">
                        <li><i class="fa fa-map-marker"></i> 7619 طريق الملك فيصل - املج</li>
                        <li><i class="fa fa-phone"></i> 0553224646</li>
                        <li><i class="fa fa-envelope-o"></i> recp.umlug@enala.sa</li>
                    </ul> <h5 style="margin:0; color:#D9EF82;">فندق اناله املج</h5>
                    <span class="hotel-city"> أملج</span>
                </div>
            </div>

            <!-- كارد 3 -->
            <div class="hotel-card">
                <img src="https://enala.sa/images/hotels/q-resort_630a3f2b53127_45.jpg" alt="منتجع كيو ريزورت">
                <div class="hotel-info">
                    <h3>فندق صبا للشقق الفندقية</h3>
                    <ul class="hotel-details">
                        <li><i class="fa fa-map-marker"></i> طريق صلاح الدين - الملز - الرياض</li>
                        <li><i class="fa fa-phone"></i> 0502264686</li>
                        <li><i class="fa fa-envelope-o"></i> Fo.seiba@enala.sa</li>
                    </ul>
                                        <h5 style="margin:0; color:#D9EF82;">فندق صبا للشقق الفند
قية</h5>
                    <span class="hotel-city">مدينة الرياض</span>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- <section class="hotels-section" style="padding:60px 20px; background:#f8f9fa;">
    <div class="container">
        <!-- Section Title -->
        <div class="section-header" style="text-align:center; margin-bottom:50px;">
            <h2 style="color:#2c3e50; font-size:2.5rem; font-weight:700;">فنادق ومنتجعات انالة</h2>
        </div>

        <!-- Hotels Grid -->
        <div class="hotels-grid">
            <!-- كارد 1 -->
            <div class="hotel-card">
                <img src="https://enala.sa/images/hotels/enala-resort_102A9169 copy.jpg" alt="برايفت ريزورت">
                <div class="hotel-info">
                    <h3>برايفت ريزورت</h3>
                    <ul class="hotel-details">
                        <li><i class="fa fa-map-marker"></i> شارع الفن حي الرمال</li>
                        <li><i class="fa fa-phone"></i> 0505686932</li>
                        <li><i class="fa fa-envelope-o"></i> reservations@enala.sa</li>
                    </ul>
                    <h5 style="margin:0; color:#D9EF82;">برايفت ريزورت</h5>
                    <span class="hotel-city">مدينة الرياض</span>
                </div>
            </div>

            <!-- كارد 2 -->
            <div class="hotel-card">
                <img src="https://enala.sa/images/hotels/30.webp" alt="ذا ون ريزورت">
                <div class="hotel-info">
                    <h3>ذا ون ريزورت</h3>
                    <ul class="hotel-details">
                        <li><i class="fa fa-map-marker"></i> طريق الأمير محمد بن سلمان بن عبدالعزيز، الرمال، الرياض 13268</li>
                        <li><i class="fa fa-phone"></i> 0540357866</li>
                        <li><i class="fa fa-envelope-o"></i> reservations@enala.sa</li>
                    </ul>
                    <h5 style="margin:0; color:#D9EF82;">ذا ون ريزورت</h5>
                    <span class="hotel-city">مدينة الرياض</span>
                </div>
            </div>

            <!-- كارد 3 -->
            <div class="hotel-card">
                <img src="https://enala.sa/images/hotels/فندق ارفاد erfad hotel (1).webp" alt="فندق ارفاد الربيع">
                <div class="hotel-info">
                    <h3>فندق ارفاد الربيع</h3>
                    <ul class="hotel-details">
                        <li><i class="fa fa-map-marker"></i> 6151 طريق الملك عبدالعزيز، الربيع، الرياض 13316</li>
                        <li><i class="fa fa-phone"></i> 0114977770</li>
                        <li><i class="fa fa-envelope-o"></i> fom@enala.sa</li>
                    </ul>
                        <h5 style="margin:0; color:#D9EF82;">فندق ارفاد الربيع</h5>
                    <span class="hotel-city">مدينة الرياض</span>
                </div>
            </div>
        </div>
    </div>
</section> --}}


{{-- <section class="hotels-section" style="padding:60px 20px; background:#f8f9fa;">

</section> --}}

<style>
.hotels-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr); /* 3 كروت في السطر */
    gap: 30px;
}

.hotel-card {
    background: #fff;
    border-radius: 15px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.08);
    overflow: hidden;
    transition: transform 0.3s, box-shadow 0.3s;
    display: flex;
    flex-direction: column;
    height: 100%;
}

.hotel-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.15);
}

.hotel-card img {
    width: 100%;
    height: 180px;
    object-fit: cover;
}

.hotel-info {
    padding: 15px 20px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.hotel-info h3 {
    margin: 0 0 10px 0;
    color: #2c3e50;
    font-size: 1.2rem;
}

.hotel-details {
    list-style: none;
    padding: 0;
    margin: 0 0 10px 0;
    font-size: 0.9rem;
    color: #555;
}

.hotel-details li {
    margin-bottom: 5px;
    display: flex;
    align-items: center;
    gap: 5px;
}

.hotel-city {
    font-weight: bold;
    color: #D9EF82;
}

/* استجابة للجوال */
@media(max-width: 991px){
    .hotels-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media(max-width: 575px){
    .hotels-grid {
        grid-template-columns: 1fr;
    }
}
</style>


@endsection
