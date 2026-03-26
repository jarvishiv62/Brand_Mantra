@extends('layouts.master')
@section('title', 'BrandMantra')
@section('meta_desc', "BrandMantra — India's premier digital marketing agency. Engineering growth through data, strategy, and cultural wisdom.")
@section('content')

    {{-- ═══ HERO — Staggered triple mandala (suggestion 9) ════════ --}}
    <section class="hero" data-nav="home">
        <div class="hero-bg"></div>

        {{-- Three concentric mandalas at different speeds --}}
        <div
            style="position:absolute;right:-5%;top:50%;transform:translateY(-50%);width:55vw;max-width:700px;pointer-events:none;">
            {{-- Outer ring: slowest --}}
            <svg style="position:absolute;inset:0;width:100%;height:100%;animation:mandala-spin 160s linear infinite;opacity:0.14;"
                viewBox="0 0 400 400" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <g stroke="#F0A820" fill="none" stroke-width="0.8">
                    @for($r = 170; $r <= 195; $r += 8)
                    <circle cx="200" cy="200" r="{{$r}}" />@endfor
                    @for($i = 0; $i < 24; $i++)
                    <line x1="200" y1="10" x2="200" y2="390" transform="rotate({{$i * 15}} 200 200)" opacity="0.2" />@endfor
                    @for($i = 0; $i < 24; $i++)
                    <circle cx="200" cy="20" r="2" transform="rotate({{$i * 15}} 200 200)" fill="#F0A820" />@endfor
                </g>
            </svg>
            {{-- Middle ring: medium --}}
            <svg style="position:absolute;inset:0;width:100%;height:100%;animation:mandala-spin 120s linear infinite reverse;opacity:0.18;"
                viewBox="0 0 400 400" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <g stroke="#FF6B10" fill="none" stroke-width="0.7">
                    @for($r = 100; $r <= 155; $r += 15)
                    <circle cx="200" cy="200" r="{{$r}}" />@endfor
                    @for($i = 0; $i < 16; $i++)
                        <ellipse cx="200" cy="140" rx="9" ry="55" transform="rotate({{$i * 22.5}} 200 200)" opacity="0.6" />
                    @endfor
                    @for($i = 0; $i < 16; $i++)
                    <circle cx="200" cy="55" r="3" transform="rotate({{$i * 22.5}} 200 200)" fill="#FF8F40" />@endfor
                </g>
            </svg>
            {{-- Inner ring: fastest --}}
            <svg style="position:absolute;inset:0;width:100%;height:100%;animation:mandala-spin 80s linear infinite;opacity:0.22;"
                viewBox="0 0 400 400" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <g stroke="#F0A820" fill="none" stroke-width="1.0">
                    @for($r = 20; $r <= 90; $r += 20)
                    <circle cx="200" cy="200" r="{{$r}}" />@endfor
                    @for($i = 0; $i < 8; $i++)
                        <line x1="200" y1="115" x2="200" y2="285" transform="rotate({{$i * 22.5}} 200 200)" opacity="0.4" />
                    @endfor
                    <polygon points="200,160 214,190 246,190 222,210 230,240 200,222 170,240 178,210 154,190 186,190"
                        opacity="0.4" stroke-width="0.7" />
                </g>
            </svg>
        </div>

        <div class="hero-content">
            <p class="hero-eyebrow">ब्रांड का मंत्र — The Mantra of Brands</p>
            <h1 class="hero-title">
                Engineering Digital<br />Growth for <span class="accent">Bold</span><br />Indian Brands
            </h1>
            <p class="hero-subtitle">
                Where ancient strategy meets modern data. We combine cultural wisdom,
                creative intelligence, and performance marketing to scale businesses across Bharat and beyond.
            </p>
            <div class="hero-cta-group">
                <a href="{{ route('contact') }}" class="btn-primary">Start Your Journey</a>
                <a href="{{ route('portfolio') }}" class="btn-secondary">View Our Work</a>
            </div>
        </div>
    </section>

    {{-- ═══ CLIENT LOGOS MARQUEE (suggestion 3) ═══════════════════ --}}
    <div class="marquee-section">
        <p class="marquee-label">Trusted by India's Bold Brands — विश्वास</p>
        <div class="marquee-wrapper">
            <div class="marquee-track">
                @php
                    $logos = ['ZestKart', 'LotusWear', 'SpiceRoute', 'AyurVeda Clinic', 'TechMitra', 'RajasthaniCrafts', 'NamasteCoffee', 'BharatBuild', 'SwadeshiStyle', 'KavyaHealth', 'DesiDrip', 'MitrasApp'];
                    $double = array_merge($logos, $logos);
                  @endphp
                @foreach($double as $logo)
                    <span class="marquee-logo">{{ $logo }}</span>
                @endforeach
            </div>
        </div>
    </div>

    @include('partials.paisley')

    {{-- ═══ SERVICES PREVIEW ═══════════════════════════════════════ --}}
    <section style="background:var(--bg-surface);padding:5rem 2rem;" data-nav="services">
        <div class="container">
            <div class="section-header">
                <div class="section-label reveal">Our Offerings</div>
                <h2 class="section-title reveal reveal-delay-1"
                    style="font-family:var(--font-hindi);font-size:clamp(1.8rem,4vw,2.8rem);">सेवाएं जो परिणाम देती हैं</h2>
                <p class="section-desc reveal reveal-delay-2">Services that deliver results — crafted for every stage of
                    your brand's growth.</p>
            </div>
            <div class="services-grid">
                @foreach ($services as $i => $service)
                    <div class="service-card reveal reveal-delay-{{ $i + 1 }}">
                        <div class="card-ornament tl"></div>
                        <div class="card-ornament tr"></div>
                        <span class="service-icon">{{ $service['icon'] }}</span>
                        <span class="service-sanskrit">{{ $service['sanskrit'] }}</span>
                        <h3 class="service-title">{{ $service['title'] }}</h3>
                        <p class="service-desc">{{ $service['desc'] }}</p>
                    </div>
                @endforeach
            </div>
            <div class="text-center mt-4 reveal">
                <a href="{{ route('services') }}" class="btn-secondary">Explore All Services</a>
            </div>
        </div>
    </section>

    @include('partials.paisley')

    {{-- ═══ WHY CHOOSE US ══════════════════════════════════════════ --}}
    <section>
        <div class="container">
            <div class="why-us-grid">
                <div class="why-us-visual reveal">
                    <svg class="mandala-art" viewBox="0 0 400 400" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <g stroke="#F0A820" fill="none" stroke-width="1.0">
                            @for($r = 20; $r <= 190; $r += 20)
                            <circle cx="200" cy="200" r="{{$r}}" opacity="{{ 0.3 + ($r / 600) }}" />@endfor
                            @for($i = 0; $i < 12; $i++)
                                <ellipse cx="200" cy="110" rx="8" ry="85" transform="rotate({{$i * 30}} 200 200)" opacity="0.5" />
                            @endfor
                            @for($i = 0; $i < 8; $i++)
                                <circle cx="200" cy="60" r="4" transform="rotate({{$i * 45}} 200 200)" fill="#FF8F40"
                            opacity="0.7" />@endfor
                        </g>
                    </svg>
                    <div class="why-us-center-text"><span class="om">ॐ</span></div>
                </div>
                <div>
                    <div class="section-label reveal">Why BrandMantra</div>
                    <h2 class="section-title reveal reveal-delay-1" style="margin-bottom:2rem">Rooted in India.<br />Built
                        for Scale.</h2>
                    @php
                        $points = [
                            ['num' => '०१', 'title' => 'Data-Driven, Culture-Led', 'desc' => 'We fuse hard analytics with deep understanding of Indian consumer behaviour — regional, linguistic, and generational.'],
                            ['num' => '०२', 'title' => 'Creative-First Execution', 'desc' => 'Every campaign is a story. We craft narratives that resonate emotionally before they convert commercially.'],
                            ['num' => '०३', 'title' => 'Startup Speed, Enterprise Depth', 'desc' => 'Agile enough to pivot in 24 hours. Structured enough to run ₹1Cr+ campaigns with full accountability.'],
                            ['num' => '०४', 'title' => 'Full-Funnel Ownership', 'desc' => 'From first impression to final purchase — we own every touchpoint so your growth has no gaps.'],
                            ['num' => '०५', 'title' => 'Pan-India Reach', 'desc' => "Campaigns built for Bharat: Hindi, Tamil, Bengali, Marathi, and more. We speak your customer's language."],
                        ];
                    @endphp
                    <ul class="points-list">
                        @foreach ($points as $i => $pt)
                            <li class="point-item reveal reveal-delay-{{ $i + 1 }}">
                                <span class="point-number">{{ $pt['num'] }}</span>
                                <div class="point-content">
                                    <h4>{{ $pt['title'] }}</h4>
                                    <p>{{ $pt['desc'] }}</p>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>

    @include('partials.paisley')

    {{-- ═══ TESTIMONIALS ════════════════════════════════════════════ --}}
    <section style="background:var(--bg-surface);overflow:hidden;">
        <div class="container">
            <div class="section-header">
                <div class="section-label reveal" style="justify-content:center;">Client Voices</div>
                <h2 class="section-title reveal reveal-delay-1">
                    What Our Clients Say — <span class="font-hindi" style="color:var(--gold)">प्रशंसापत्र</span>
                </h2>
            </div>
            <div class="testimonials-wrapper" style="overflow:hidden">
                <div class="testimonials-track">
                    @foreach ($testimonials as $t)
                        <div class="testimonial-card reveal">
                            <p class="quote-text">"{{ $t['quote'] }}"</p>
                            <div class="reviewer">
                                <div class="reviewer-avatar">{{ $t['avatar'] }}</div>
                                <div>
                                    <div class="reviewer-name">{{ $t['name'] }}</div>
                                    <div class="reviewer-company">{{ $t['company'] }}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- ═══ STATS ═══════════════════════════════════════════════════ --}}
    <section style="padding:0;">
        <div class="container">
            <div class="stats-grid reveal">
                @php $stats = [['value' => '500', 'label' => 'Brands Grown', 'suffix' => '+'], ['value' => '98', 'label' => 'Client Retention', 'suffix' => '%'], ['value' => '12', 'label' => 'Industry Awards', 'suffix' => ''], ['value' => '50', 'label' => 'Team Members', 'suffix' => '+']]; @endphp
                @foreach ($stats as $s)
                    <div class="stat-item">
                        <div class="stat-number" data-counter="{{ $s['value'] }}" data-suffix="{{ $s['suffix'] }}">
                            {{ $s['value'] }}{{ $s['suffix'] }}</div>
                        <div class="stat-label">{{ $s['label'] }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @include('partials.paisley')

    {{-- ═══ PRICING SECTION (suggestion 4) ════════════════════════ --}}
    <section style="background:var(--bg-surface);">
        <div class="container">
            <div class="section-header">
                <div class="section-label reveal" style="justify-content:center;">Investment</div>
                <h2 class="section-title reveal reveal-delay-1">
                    मूल्य निर्धारण — Simple, Transparent Pricing
                </h2>
                <p class="section-desc reveal reveal-delay-2">
                    No retainers with hidden clauses. No surprise invoices.
                    Just clear packages built for Indian businesses.
                </p>
            </div>

            <div class="pricing-grid">

                {{-- Starter --}}
                <div class="pricing-card reveal reveal-delay-1">
                    <div class="card-ornament tl"></div>
                    <div class="card-ornament br"></div>
                    <span class="pricing-sanskrit">॥ आरंभ ॥</span>
                    <div class="pricing-tier">Starter</div>
                    <div class="pricing-price">₹75K</div>
                    <div class="pricing-period">per month — starting at</div>
                    <div class="pricing-divider"></div>
                    <ul class="pricing-features">
                        <li>1 Core Service (SEO or Social)</li>
                        <li>Monthly Strategy Call</li>
                        <li>Weekly Performance Report</li>
                        <li>Dedicated Account Manager</li>
                        <li>WhatsApp Support (Business Hours)</li>
                    </ul>
                    <a href="{{ route('contact') }}" class="btn-secondary"
                        style="width:100%;text-align:center;display:block;">Get Started</a>
                    <p class="pricing-note">Best for early-stage startups & SMBs</p>
                </div>

                {{-- Growth — featured --}}
                <div class="pricing-card featured reveal reveal-delay-2">
                    <div class="pricing-badge">Most Popular</div>
                    <div class="card-ornament tl"></div>
                    <span class="pricing-sanskrit" style="margin-top:1.5rem;display:block;">॥ वृद्धि ॥</span>
                    <div class="pricing-tier">Growth</div>
                    <div class="pricing-price">₹1.5L</div>
                    <div class="pricing-period">per month — starting at</div>
                    <div class="pricing-divider"></div>
                    <ul class="pricing-features">
                        <li>3 Core Services (your choice)</li>
                        <li>Bi-Weekly Strategy Sessions</li>
                        <li>Real-Time Analytics Dashboard</li>
                        <li>Dedicated Strategist + Creative Team</li>
                        <li>Priority WhatsApp & Email Support</li>
                        <li>Quarterly Brand Audit</li>
                    </ul>
                    <a href="{{ route('contact') }}" class="btn-primary"
                        style="width:100%;text-align:center;display:block;">Start Growing</a>
                    <p class="pricing-note">Best for scaling D2C & mid-size brands</p>
                </div>

                {{-- Enterprise --}}
                <div class="pricing-card reveal reveal-delay-3">
                    <div class="card-ornament tl"></div>
                    <div class="card-ornament br"></div>
                    <span class="pricing-sanskrit">॥ उत्कर्ष ॥</span>
                    <div class="pricing-tier">Enterprise</div>
                    <div class="pricing-price">Custom</div>
                    <div class="pricing-period">tailored to your scale</div>
                    <div class="pricing-divider"></div>
                    <ul class="pricing-features">
                        <li>Full-Funnel Agency Partnership</li>
                        <li>All 6 Services Included</li>
                        <li>Dedicated In-House Team (5+ members)</li>
                        <li>C-Suite Strategy Access</li>
                        <li>24/7 Priority Support</li>
                        <li>Custom AI Analytics Suite</li>
                    </ul>
                    <a href="{{ route('contact') }}" class="btn-secondary"
                        style="width:100%;text-align:center;display:block;">Let's Talk</a>
                    <p class="pricing-note">Best for large brands & enterprises</p>
                </div>

            </div>

            <p class="reveal"
                style="text-align:center;margin-top:2rem;font-family:var(--font-hindi);color:var(--text-faint);font-size:0.9rem;opacity:0.6;">
                सभी मूल्यों में GST अतिरिक्त है • All prices exclusive of GST
            </p>
        </div>
    </section>

    @include('partials.paisley')

    {{-- ═══ CTA BANNER ════════════════════════════════════════════ --}}
    <section>
        <div class="container">
            <div class="cta-banner reveal">
                <p
                    style="font-family:var(--font-hindi);color:var(--gold);opacity:0.3;font-size:1.5rem;margin-bottom:1rem;position:relative;">
                    यत्र विश्वासः, तत्र वृद्धिः</p>
                <h2 class="cta-title">Let's Build Something<br />That Scales Across Bharat.</h2>
                <p class="cta-sub">Your brand has a story. Let's engineer its legend.</p>
                <a href="{{ route('contact') }}" class="btn-primary" style="position:relative;">Begin the Mantra</a>
            </div>
        </div>
    </section>

@endsection