<!-- SEO Modal -->
<style>
    .modal {
    z-index: 999999 !important;
}
.modal-backdrop {
    z-index: 99998 !important;
}
</style>
@php
    if (!isset($seo)) {
        $seo = \App\Models\SeoSetting::firstOrCreate([
            'page' => request()->route()?->getName() ?? 'default'
        ]);
    }
@endphp

<div class="modal fade" id="seoModal" tabindex="-1" aria-labelledby="seoModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content" style="direction: rtl; text-align:right;">

      <div class="modal-header">
        <h5 class="modal-title fw-bold" id="seoModalLabel">إعدادات SEO لصفحة: {{ $seo->page }}</h5>
        {{-- <button type="button" class="btn-close" data-bs-dismiss="modal">x</button> --}}
      </div>

      <form action="{{ route('dashboard.seo.update', $seo->page) }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="modal-body">

            <label>العنوان (Title):</label>
            <input type="text" name="title" class="form-control" value="{{ $seo->title }}" required>

            <label class="mt-3">الوصف (Description):</label>
            <textarea name="description" class="form-control" required>{{ $seo->description }}</textarea>

            <label class="mt-3">الكلمات المفتاحية (Keywords):</label>
            <textarea name="keywords" class="form-control">{{ $seo->keywords }}</textarea>

            <label class="mt-3">Canonical URL:</label>
            <input type="text" name="canonical" class="form-control" value="{{ $seo->canonical }}">

            <label class="mt-3">صورة OG:</label>
            @if($seo->og_image)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $seo->og_image) }}" width="150" class="rounded border">

                </div>
            @endif
            <input type="file" name="og_image_file" class="form-control">
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>
          <button type="submit" class="btn btn-success">💾 حفظ الإعدادات</button>
        </div>

      </form>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

