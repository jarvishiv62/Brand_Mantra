@extends('layouts.master')
@section('title', 'About')
@section('meta_desc', "BrandMantra — Born in India, built for the world. Learn our story, mission, and the team behind the mantra.")
@section('content')

<section class="hero" style="min-height:55vh;padding-top:10rem;padding-bottom:4rem;" data-nav="about">
  <div class="hero-bg"></div>
  <svg style="position:absolute;right:-5%;top:50%;transform:translateY(-50%);width:55vw;max-width:700px;opacity:0.04;animation:mandala-spin 80s linear infinite;pointer-events:none;" viewBox="0 0 400 400" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
    <g stroke="#F0A820" fill="none" stroke-width="0.8">
      @for($r=20;$r<=190;$r+=18)<circle cx="200" cy="200" r="{{$r}}"/>@endfor
      @for($i=0;$i<16;$i++)<ellipse cx="200" cy="120" rx="10" ry="75" transform="rotate({{$i*22.5}} 200 200)" opacity="0.5"/>@endfor
    </g>
  </svg>
  <div class="hero-content">
    <p class="hero-eyebrow">हमारी कहानी — Our Story</p>
    <h1 class="hero-title" style="font-size:clamp(2rem,5vw,4rem)">Born in <span class="accent">India.</span><br/>Built for the World.</h1>
    <p class="hero-subtitle">BrandMantra is where the Arthashastra meets analytics, where the wisdom of ancient Indian commerce is reborn in digital strategy.</p>
  </div>
</section>

@include('partials.paisley')

{{-- Mission & Vision --}}
<section style="background:var(--bg-surface);">
  <div class="container">
    <div class="grid-2" style="align-items:stretch;gap:1.5rem;">
      <div class="card reveal" style="border-top:3px solid var(--gold);">
        <div class="card-ornament tl"></div><div class="card-ornament br"></div>
        <span class="sanskrit-label">॥ दृष्टि ॥</span>
        <h2 class="section-title" style="font-size:1.8rem;margin-bottom:1rem;">Our Vision</h2>
        <div class="divider-om"><span>✦</span></div>
        <p class="font-serif mt-3" style="font-style:italic;color:var(--text-cream);font-size:1.05rem;line-height:1.9;">
          To be India's most trusted growth partner — an agency that doesn't just run campaigns but transforms businesses. We envision a digital Bharat where every bold brand, from a chai stall in Varanasi to a tech startup in Bengaluru, has access to world-class marketing intelligence.
        </p>
      </div>
      <div class="card reveal reveal-delay-2" style="border-top:3px solid var(--saffron);">
        <div class="card-ornament tl"></div><div class="card-ornament br"></div>
        <span class="sanskrit-label">॥ लक्ष्य ॥</span>
        <h2 class="section-title" style="font-size:1.8rem;margin-bottom:1rem;">Our Mission</h2>
        <div class="divider-om"><span>✦</span></div>
        <p class="font-serif mt-3" style="font-style:italic;color:var(--text-cream);font-size:1.05rem;line-height:1.9;">
          To engineer measurable, scalable growth for brands through the perfect union of data intelligence, creative excellence, and cultural fluency. Every rupee our clients invest must return multiplied — that is our dharma, our duty, our mantra.
        </p>
      </div>
    </div>
  </div>
</section>

@include('partials.paisley')

{{-- Philosophy --}}
<section>
  <div class="container" style="max-width:900px;text-align:center;">
    <div class="section-label reveal" style="justify-content:center;">Our Philosophy</div>
    <h2 class="section-title reveal reveal-delay-1" style="font-size:clamp(1.6rem,3.5vw,2.8rem);margin-bottom:1.5rem;">"विद्या ददाति विनयम्"</h2>
    <p class="font-serif reveal reveal-delay-2" style="font-style:italic;color:var(--gold);font-size:1rem;margin-bottom:2rem;">Knowledge bestows humility. — Ancient Sanskrit Proverb</p>
    <p class="reveal reveal-delay-3" style="color:var(--text-cream);font-family:var(--font-serif);font-size:1.1rem;line-height:1.9;font-style:italic;">
      We founded BrandMantra on a radical idea: that the deepest marketing insights don't come from Silicon Valley — they come from understanding Bharat. The bazaars of Old Delhi, the festivals of Tamil Nadu, the aspirations of tier-2 India. We are digital marketers who are, first and foremost, students of India.
    </p>
  </div>
</section>

@include('partials.paisley')

{{-- Timeline --}}
<section style="background:var(--bg-surface);">
  <div class="container">
    <div class="section-header">
      <div class="section-label reveal" style="justify-content:center;">The Journey</div>
      <h2 class="section-title reveal reveal-delay-1">यात्रा — Our Startup Story</h2>
      <p class="section-desc reveal reveal-delay-2">From a small Mumbai office to a pan-India agency — every milestone etched in gold.</p>
    </div>
    <div style="max-width:680px;margin:0 auto;">
      <div class="timeline">
        @foreach ($timeline as $i => $item)
        <div class="timeline-item reveal reveal-delay-{{ ($i % 4) + 1 }}">
          <div class="timeline-year">{{ $item['year'] }}</div>
          <h3 class="timeline-title">{{ $item['title'] }}</h3>
          <p class="timeline-desc">{{ $item['desc'] }}</p>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</section>

{{-- Stats --}}
<section style="padding:0;">
  <div class="container">
    <div class="stats-grid reveal">
      @foreach ($stats as $s)
      <div class="stat-item">
        <div class="stat-number" data-counter="{{ $s['value'] }}" data-suffix="{{ $s['suffix'] }}">{{ $s['value'] }}{{ $s['suffix'] }}</div>
        <div class="stat-label">{{ $s['label'] }}</div>
      </div>
      @endforeach
    </div>
  </div>
</section>

@include('partials.paisley')

{{-- Press / Awards Strip (suggestion 14) --}}
<section style="background:var(--bg-surface);padding:4rem 2rem;">
  <div class="container">
    <p class="press-label reveal">As Featured In & Recognised By</p>
    <div class="press-strip reveal reveal-delay-1">
      @php
      $press = [
        'Marketing Week India', 'YourStory', 'Inc42', 'Vogue India',
        'Entrepreneur India', 'Economic Times', 'Forbes India', 'NDTV Profit',
      ];
      @endphp
      @foreach($press as $p)
      <span class="press-item">{{ $p }}</span>
      @endforeach
    </div>

    {{-- Awards row --}}
    <div class="reveal reveal-delay-2" style="margin-top:2rem;display:flex;flex-wrap:wrap;gap:1rem;justify-content:center;">
      @php
      $awards = [
        ['icon'=>'🏆','title'=>'Best Digital Agency','body'=>'Marketing Week India, 2024'],
        ['icon'=>'🥇','title'=>'Top Growth Agency','body'=>'Inc42 Awards, 2023'],
        ['icon'=>'⭐','title'=>'Agency of the Year','body'=>'Entrepreneur India, 2022'],
        ['icon'=>'🌟','title'=>'Best D2C Campaign','body'=>'e4m Awards, 2024'],
      ];
      @endphp
      @foreach($awards as $award)
      <div style="background:var(--bg-card);border:1px solid var(--border-subtle);padding:1.25rem 1.5rem;display:flex;align-items:center;gap:0.75rem;min-width:220px;transition:var(--transition);"
           onmouseover="this.style.borderColor='var(--border-gold)'" onmouseout="this.style.borderColor='var(--border-subtle)'">
        <span style="font-size:1.4rem;">{{ $award['icon'] }}</span>
        <div>
          <div style="font-family:var(--font-heading);font-size:0.82rem;color:var(--text-ivory);margin-bottom:0.15rem;">{{ $award['title'] }}</div>
          <div style="font-family:var(--font-serif);font-style:italic;font-size:0.75rem;color:var(--text-muted);">{{ $award['body'] }}</div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

@include('partials.paisley')

{{-- Team --}}
<section>
  <div class="container">
    <div class="section-header">
      <div class="section-label reveal" style="justify-content:center;">Our People</div>
      <h2 class="section-title reveal reveal-delay-1">The Minds Behind the Mantra</h2>
    </div>
    <div class="grid-3">
      @php
      $team = [
        ['initials'=>'AK','name'=>'Aryan Kapoor','role'=>'Founder & Chief Strategist','mantra'=>'रणनीति — Strategy','desc'=>'10 years shaping Indian brands. Ex-Google, IIM Ahmedabad alumni.'],
        ['initials'=>'NP','name'=>'Nisha Patel','role'=>'Creative Director','mantra'=>'सृजन — Creation','desc'=>'Award-winning creative who believes every pixel should earn its keep.'],
        ['initials'=>'VR','name'=>'Vikram Rao','role'=>'Head of Performance','mantra'=>'प्रदर्शन — Performance','desc'=>'₹50Cr+ in managed ad spend across Google, Meta, and programmatic.'],
      ];
      @endphp
      @foreach ($team as $i => $member)
      <div class="card reveal reveal-delay-{{ $i + 1 }}" style="text-align:center;">
        <div class="card-ornament tl"></div><div class="card-ornament br"></div>
        <div style="width:72px;height:72px;border-radius:50%;background:linear-gradient(135deg,var(--crimson),var(--gold-dim));display:flex;align-items:center;justify-content:center;font-family:var(--font-heading);font-size:1.1rem;color:var(--text-ivory);border:2px solid var(--border-gold);margin:0 auto 1.25rem;">{{ $member['initials'] }}</div>
        <span class="sanskrit-label" style="text-align:center;display:block;">{{ $member['mantra'] }}</span>
        <h3 style="font-family:var(--font-heading);font-size:1rem;color:var(--text-ivory);margin-bottom:0.25rem;">{{ $member['name'] }}</h3>
        <p style="font-family:var(--font-serif);font-style:italic;font-size:0.8rem;color:var(--saffron);margin-bottom:1rem;">{{ $member['role'] }}</p>
        <p style="font-size:0.85rem;color:var(--text-muted);">{{ $member['desc'] }}</p>
      </div>
      @endforeach
    </div>
  </div>
</section>

<section style="background:var(--bg-surface);padding:5rem 2rem;text-align:center;">
  <div class="container" style="max-width:700px;">
    <div class="section-label reveal" style="justify-content:center;">Join the Journey</div>
    <h2 class="section-title reveal reveal-delay-1" style="margin-bottom:1rem;">Ready to Write Your Brand's Story?</h2>
    <p class="section-desc reveal reveal-delay-2" style="margin-bottom:2.5rem;">Let's begin a conversation. No hard sells, no jargon. Just strategy.</p>
    <div class="reveal reveal-delay-3"><a href="{{ route('contact') }}" class="btn-primary">Speak With Us</a></div>
  </div>
</section>

@endsection
