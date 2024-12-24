@extends('layouts.app')

@section('title', 'Gallery')

@section('content')
<section class="gallery-section">
  <h2>Gallery</h2>
  <div class="gallery-grid">
      <div class="gallery-item">
          <img src="{{ asset('uploads/aktivitas_1.jpg') }}" alt="Coffee in Sentul">
          <div class="caption">Coffee in Sentul</div>
      </div>
      <div class="gallery-item">
          <img src="{{ asset('uploads/aktivitas_2.jpg') }}" alt="Dinner in Bogor">
          <div class="caption">Dinner in Bogor</div>
      </div>
      <div class="gallery-item">
          <img src="{{ asset('uploads/aktivitas_3.jpg') }}" alt="Photoshoot in Bogor">
          <div class="caption">Photoshoot in Bogor</div>
      </div>
      <div class="gallery-item">
          <img src="{{ asset('uploads/aktivitas_4.jpg') }}" alt="Photoshoot in PIK">
          <div class="caption">Photoshoot in PIK</div>
      </div>
      <div class="gallery-item">
          <img src="{{ asset('uploads/aktivitas_5.jpg') }}" alt="Goes to PIK">
          <div class="caption">Goes to PIK</div>
      </div>
  </div>
</section>
@endsection
