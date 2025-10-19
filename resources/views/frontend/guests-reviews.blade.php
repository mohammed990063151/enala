@extends('frontend.layouts.master')

@section('title', 'آراء النزلاء - فندق إنالة')

@section('content')

<section class="page-header" style="
    text-align: center;
    padding: 80px 20px;
    background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
                url('{{ asset('img/criticism-3083099_1280.jpg') }}') center/cover no-repeat;
    color: #fff;
">
    <h1 style="font-size: 3rem; color: #D9EF82; margin-bottom: 15px;">
        آراء النزلاء
    </h1>
    <p style="max-width: 800px; margin: auto; font-size: 1.1rem; line-height: 1.8; color: #eee;">
        اكتشف آراء وتجارب زوارنا السابقين مع <strong>فنادق إنالة</strong> واستمتع بخدماتنا المميزة.
    </p>
</section>
<section class="reviews-page">
    <div class="container">
        <h1 class="page-title">آراء النزلاء</h1>
        <p class="page-subtitle">تعرف على ما يقوله ضيوفنا الكرام عن تجربتهم في فندق ومنتجع إنالة 🌿</p>

        <div class="reviews-grid">
            @foreach (range(1, 15) as $i)
            <div class="review-card">
                <div class="review-header">
                    <img src="https://i.pravatar.cc/100?img={{ $i }}" alt="ضيف">
                    <div>
                        <h3>الضيف رقم {{ $i }}</h3>
                        <div class="stars">★★★★★</div>
                    </div>
                </div>
                <p class="review-text">
                    كانت تجربتي في فندق إنالة أكثر من رائعة. الغرفة نظيفة، الإطلالة خلابة، والخدمة ممتازة.
                    أشكر جميع العاملين على حسن الضيافة والتنظيم. سأعود مجددًا في أقرب وقت ❤️
                </p>
                <span class="review-date">بتاريخ {{ now()->subDays($i)->format('Y/m/d') }}</span>
            </div>
            @endforeach
        </div>
    </div>
</section>

<style>
.reviews-page {
    padding: 80px 20px;
    background: #fafafa;
    font-family: "Cairo", sans-serif;
}
.page-title {
    text-align: center;
    color: #1a1a1a;
    font-size: 2.8rem;
    margin-bottom: 10px;
}
.page-subtitle {
    text-align: center;
    color: #555;
    font-size: 1.1rem;
    margin-bottom: 60px;
}
.reviews-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 25px;
}
.review-card {
    background: #fff;
    border-radius: 20px;
    padding: 25px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.06);
    transition: box-shadow 0.3s ease, transform 0.3s ease;
}
.review-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 6px 25px rgba(0,0,0,0.12);
}
.review-header {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-bottom: 15px;
}
.review-header img {
    width: 60px;
    height: 60px;
    border-radius: 50%;
}
.review-header h3 {
    font-size: 1.2rem;
    color: #222;
    margin: 0;
}
.stars {
    color: #F4C542;
    font-size: 1rem;
}
.review-text {
    font-size: 0.95rem;
    color: #444;
    line-height: 1.7;
    margin-bottom: 10px;
}
.review-date {
    font-size: 0.8rem;
    color: #888;
}
@media (max-width:768px) {
    .page-title { font-size: 2rem; }
    .page-subtitle { font-size: 0.95rem; }
}
</style>
@endsection
