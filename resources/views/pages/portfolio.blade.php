@extends('layouts.master')

@section('title', 'Portfolio')
@section('meta_desc', 'Explore BrandMantra\'s portfolio of Indian brand transformations — real results, real growth, real stories.')

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
            <p class="hero-eyebrow">हमारा कार्य — Our Work</p>
            <h1 class="hero-title" style="font-size:clamp(2rem,5vw,4rem)">
                Results Don't Lie.<br /><span class="accent">Numbers Tell</span><br />Every Story.
            </h1>
            <p class="hero-subtitle">
                Real brands. Real challenges. Real transformations.
                Every project here is a chapter in India's digital growth story.
            </p>
        </div>
    </section>

    {{-- ── Portfolio Grid ───────────────────────────────────────── --}}
    <section>
        <div class="container">

            <div class="section-header">
                <div class="section-label reveal" style="justify-content:center;">Case Studies</div>
                <h2 class="section-title reveal reveal-delay-1">
                    उपलब्धियां — Achievements
                </h2>
                <p class="section-desc reveal reveal-delay-2">
                    Hover over each project to see the story behind the numbers.
                </p>
            </div>

            <div class="portfolio-grid">
                @foreach ($projects as $i => $project)
                    <div class="portfolio-card reveal reveal-delay-{{ ($i % 3) + 1 }}">

                        {{-- Background initials art --}}
                        <div class="portfolio-bg" style="color:{{ $project['color'] }}">
                            {{ $project['initials'] }}
                        </div>

                        {{-- Accent top border --}}
                        <div
                            style="position:absolute;top:0;left:0;right:0;height:3px;background:{{ $project['color'] }};opacity:0.8;z-index:3;">
                        </div>

                        {{-- Default content --}}
                        <div class="portfolio-content" style="z-index:2;">
                            <div class="portfolio-category">{{ $project['category'] }}</div>
                            <h3 class="portfolio-name">{{ $project['title'] }}</h3>
                            <p class="portfolio-desc">{{ $project['description'] }}</p>
                            <div class="portfolio-tags">
                                @foreach ($project['tags'] as $tag)
                                    <span class="portfolio-tag">{{ $tag }}</span>
                                @endforeach
                            </div>
                        </div>

                        {{-- Hover overlay — case study --}}
                        <div class="portfolio-overlay" style="z-index:4;">
                            <div class="overlay-label">॥ समस्या — Problem ॥</div>
                            <p class="overlay-value">{{ $project['problem'] }}</p>

                            <div class="overlay-label">॥ समाधान — Solution ॥</div>
                            <p class="overlay-value">{{ $project['solution'] }}</p>

                            <p class="overlay-result">✦ {{ $project['result'] }}</p>
                        </div>

                    </div>
                @endforeach
            </div>

        </div>
    </section>

    {{-- ── Case Study Deep-Dive: Featured ──────────────────────── --}}
    <section style="background:var(--bg-surface);">
        <div class="container">

            <div class="section-header">
                <div class="section-label reveal" style="justify-content:center;">Featured Case Study</div>
                <h2 class="section-title reveal reveal-delay-1">
                    How We Scaled ZestKart 3x in 6 Months
                </h2>
            </div>

            <div class="grid-2" style="align-items:start; gap:3rem;">

                {{-- Left: Story --}}
                <div>
                    <div class="reveal">
                        <span class="sanskrit-label">॥ समस्या — The Challenge ॥</span>
                        <h3
                            style="font-family:var(--font-heading); font-size:1.15rem; color:var(--text-ivory); margin-bottom:0.75rem;">
                            A great product, invisible online
                        </h3>
                        <p
                            style="color:var(--text-cream); font-family:var(--font-serif); font-style:italic; line-height:1.8; margin-bottom:2rem;">
                            ZestKart had exceptional D2C spice blends but zero digital presence.
                            No SEO, no social strategy, a 5-page website that hadn't been updated
                            in two years, and ad spend with no attribution framework.
                        </p>
                    </div>

                    <div class="reveal reveal-delay-2">
                        <span class="sanskrit-label">॥ समाधान — The Solution ॥</span>
                        <h3
                            style="font-family:var(--font-heading); font-size:1.15rem; color:var(--text-ivory); margin-bottom:0.75rem;">
                            Full-funnel architecture from scratch
                        </h3>
                        <p
                            style="color:var(--text-cream); font-family:var(--font-serif); font-style:italic; line-height:1.8;">
                            We rebuilt their brand identity, launched a Shopify store optimised
                            for Indian payment flows, deployed a 60-keyword SEO content engine,
                            and architected a Meta ads system with 14 audience segments and
                            dynamic creative testing across 3 languages.
                        </p>
                    </div>
                </div>

                {{-- Right: Results --}}
                <div class="reveal reveal-delay-3">
                    <span class="sanskrit-label">॥ परिणाम — The Results ॥</span>
                    @php
                        $results = [
                            ['metric' => '3x', 'label' => 'Revenue Growth', 'period' => 'In 6 months'],
                            ['metric' => '280%', 'label' => 'Organic Traffic', 'period' => 'Year over year'],
                            ['metric' => '4.2x', 'label' => 'ROAS on Paid Ads', 'period' => 'Blended average'],
                            ['metric' => '#1', 'label' => 'Google Ranking', 'period' => 'For 28 target keywords'],
                        ];
                    @endphp
                    <div
                        style="display:grid; grid-template-columns:1fr 1fr; gap:1px; background:var(--border-subtle); border:1px solid var(--border-subtle);">
                        @foreach ($results as $r)
                            <div style="background:var(--bg-card); padding:2rem 1.5rem; text-align:center;">
                                <div
                                    style="font-family:var(--font-display); font-size:2rem; background:linear-gradient(135deg,var(--gold),var(--saffron)); -webkit-background-clip:text; -webkit-text-fill-color:transparent; background-clip:text; margin-bottom:0.35rem;">
                                    {{ $r['metric'] }}
                                </div>
                                <div
                                    style="font-family:var(--font-heading); font-size:0.75rem; letter-spacing:0.12em; text-transform:uppercase; color:var(--text-ivory); margin-bottom:0.25rem;">
                                    {{ $r['label'] }}
                                </div>
                                <div
                                    style="font-size:0.75rem; color:var(--text-muted); font-family:var(--font-serif); font-style:italic;">
                                    {{ $r['period'] }}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ── Industries ───────────────────────────────────────────── --}}
    <section>
        <div class="container">
            <div class="section-header">
                <div class="section-label reveal" style="justify-content:center;">Industries</div>
                <h2 class="section-title reveal reveal-delay-1">We've Grown Across Every Sector</h2>
            </div>
            <div style="display:flex; flex-wrap:wrap; gap:0.75rem; justify-content:center;" class="reveal reveal-delay-2">
                @php
                    $industries = ['E-Commerce', 'Fashion & Lifestyle', 'Food & Beverage', 'Healthcare & Ayurveda', 'Technology & SaaS', 'Real Estate', 'Education & EdTech', 'Travel & Hospitality', 'Financial Services', 'Handicrafts & Arts', 'Entertainment', 'Startups & D2C'];
                  @endphp
                @foreach ($industries as $industry)
                    <span
                        style="font-family:var(--font-heading); font-size:0.72rem; letter-spacing:0.15em; text-transform:uppercase; color:var(--text-muted); border:1px solid var(--border-subtle); padding:0.5rem 1.1rem; transition:all 0.3s ease;"
                        onmouseover="this.style.borderColor='var(--border-gold)';this.style.color='var(--gold)'"
                        onmouseout="this.style.borderColor='var(--border-subtle)';this.style.color='var(--text-muted)'">
                        {{ $industry }}
                    </span>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ── CTA ─────────────────────────────────────────────────── --}}
    <section style="background:var(--bg-surface); padding:5rem 2rem; text-align:center;">
        <div class="container" style="max-width:680px;">
            <h2 class="section-title reveal" style="margin-bottom:1rem;">
                Your Brand. Next in Line.
            </h2>
            <p class="section-desc reveal reveal-delay-1" style="margin-bottom:2.5rem;">
                Join 500+ Indian brands that chose BrandMantra to engineer their growth story.
            </p>
            <div class="reveal reveal-delay-2" style="display:flex; gap:1rem; justify-content:center; flex-wrap:wrap;">
                <a href="{{ route('contact') }}" class="btn-primary">Start Your Project</a>
                <a href="{{ route('services') }}" class="btn-secondary">See Our Services</a>
            </div>
        </div>
    </section>

@endsection