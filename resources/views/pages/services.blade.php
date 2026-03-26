@extends('layouts.master')

@section('title', 'Services')
@section('meta_desc', 'BrandMantra offers SEO, Performance Marketing, Social Media, Brand Strategy, Content Marketing and Web Design — engineered for Indian brands.')

@section('content')

    {{-- ── Page Hero ──────────────────────────────────────────── --}}
    <section class="hero" style="min-height:55vh; padding-top:10rem; padding-bottom:4rem;">
        <div class="hero-bg"></div>
        <svg class="hero-mandala" viewBox="0 0 400 400" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
            style="opacity:0.04;">
            <g stroke="#C9901A" fill="none" stroke-width="0.5">
                @for($r = 20; $r <= 190; $r += 18)
                <circle cx="200" cy="200" r="{{$r}}" />@endfor
                @for($i = 0; $i < 16; $i++)
                <ellipse cx="200" cy="120" rx="10" ry="75" transform="rotate({{$i * 22.5}} 200 200)" opacity="0.5" />@endfor
                @for($i = 0; $i < 8; $i++)
                <circle cx="200" cy="55" r="4" transform="rotate({{$i * 45}} 200 200)" fill="#E85D04" opacity="0.7" />@endfor
            </g>
        </svg>
        <div class="hero-content">
            <p class="hero-eyebrow">सेवाएं — Our Services</p>
            <h1 class="hero-title" style="font-size:clamp(2rem,5vw,4rem)">
                Every Service.<br /><span class="accent">One Goal.</span><br />Your Growth.
            </h1>
            <p class="hero-subtitle">
                Six core disciplines. Infinite combinations. All engineered to move
                the metrics that matter most to your business.
            </p>
        </div>
    </section>

    {{-- ── Services Accordion ───────────────────────────────────── --}}
    <section>
        <div class="container">

            <div class="section-header">
                <div class="section-label reveal" style="justify-content:center;">What We Do</div>
                <h2 class="section-title reveal reveal-delay-1">Our Core Services</h2>
                <p class="section-desc reveal reveal-delay-2">
                    Click on any service to explore how we approach, execute, and deliver results.
                </p>
            </div>

            <div class="reveal">
                @foreach ($services as $i => $service)
                    <div class="service-full-card">
                        <div class="service-header" role="button" tabindex="0" aria-expanded="{{ $i === 0 ? 'true' : 'false' }}"
                            aria-controls="service-body-{{ $service['id'] }}">
                            <div class="service-header-left">
                                <div class="service-big-icon">{{ $service['icon'] }}</div>
                                <div class="service-header-text">
                                    <span class="s-sanskrit">{{ $service['sanskrit'] }}</span>
                                    <span class="s-title">{{ $service['title'] }}</span>
                                    <span class="s-sub">{{ $service['subtitle'] }}</span>
                                </div>
                            </div>
                            <span class="service-chevron {{ $i === 0 ? 'open' : '' }}">▾</span>
                        </div>

                        <div class="service-body {{ $i === 0 ? 'open' : '' }}" id="service-body-{{ $service['id'] }}">
                            <p
                                style="color:var(--text-cream); font-family:var(--font-serif); font-style:italic; font-size:1rem; line-height:1.8; margin-bottom:1.5rem;">
                                {{ $service['desc'] }}
                            </p>

                            <div class="service-features">
                                @foreach ($service['features'] as $feature)
                                    <span class="feature-tag">{{ $feature }}</span>
                                @endforeach
                            </div>

                            <p class="service-result">
                                ✦ {{ $service['result'] }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    {{-- ── Process Section ──────────────────────────────────────── --}}
    <section style="background:var(--bg-surface);">
        <div class="container">

            <div class="section-header">
                <div class="section-label reveal" style="justify-content:center;">How We Work</div>
                <h2 class="section-title reveal reveal-delay-1">
                    प्रक्रिया — Our Process
                </h2>
                <p class="section-desc reveal reveal-delay-2">
                    A four-step framework refined across 500+ brands.
                </p>
            </div>

            <div class="grid-2" style="gap:1.5rem;">
                @php
                    $steps = [
                        ['num' => '०१', 'sanskrit' => 'अन्वेषण', 'title' => 'Discovery & Audit', 'desc' => 'We go deep. Brand audit, competitor mapping, audience research, market positioning — before a single rupee is spent.'],
                        ['num' => '०२', 'sanskrit' => 'रणनीति', 'title' => 'Strategy Architecture', 'desc' => 'Custom growth blueprint: channel mix, content calendar, campaign structure, KPIs. Your roadmap to scale.'],
                        ['num' => '०३', 'sanskrit' => 'निर्माण', 'title' => 'Creative & Launch', 'desc' => 'Our creative studio brings the strategy to life — visuals, copy, video, ads — then we launch with precision.'],
                        ['num' => '०४', 'sanskrit' => 'अनुकूलन', 'title' => 'Optimize & Scale', 'desc' => 'Real-time analytics, weekly reports, continuous A/B testing. We don\'t set and forget — we iterate to victory.'],
                    ];
                  @endphp
                @foreach ($steps as $i => $step)
                    <div class="card reveal reveal-delay-{{ $i + 1 }}">
                        <div class="card-ornament tl"></div>
                        <span class="sanskrit-label">{{ $step['sanskrit'] }}</span>
                        <div style="display:flex; align-items:baseline; gap:1rem; margin-bottom:1rem;">
                            <span
                                style="font-family:var(--font-hindi); font-size:2rem; color:var(--gold); opacity:0.4; line-height:1;">{{ $step['num'] }}</span>
                            <h3 style="font-family:var(--font-heading); font-size:1.1rem; color:var(--text-ivory);">
                                {{ $step['title'] }}</h3>
                        </div>
                        <p style="font-size:0.9rem; color:var(--text-muted); line-height:1.7;">{{ $step['desc'] }}</p>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    {{-- ── CTA ─────────────────────────────────────────────────── --}}
    <section style="padding:5rem 2rem; text-align:center;">
        <div class="container" style="max-width:700px;">
            <p style="font-family:var(--font-hindi); font-size:1.2rem; color:var(--gold); opacity:0.5; margin-bottom:1rem;">
                ॥ कर्मण्येवाधिकारस्ते ॥
            </p>
            <h2 class="section-title reveal" style="margin-bottom:1rem;">
                Not Sure Which Service You Need?
            </h2>
            <p class="section-desc reveal reveal-delay-1" style="margin-bottom:2.5rem;">
                Book a free 30-minute strategy call. We'll diagnose your brand and
                recommend exactly what will move the needle.
            </p>
            <div class="reveal reveal-delay-2">
                <a href="{{ route('contact') }}" class="btn-primary">Book Free Strategy Call</a>
            </div>
        </div>
    </section>

@endsection