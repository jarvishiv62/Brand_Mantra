@extends('layouts.master')

@section('title', 'Contact')
@section('meta_desc', 'Get in touch with BrandMantra. Start your digital growth journey today.')

@section('content')

    {{-- ── Page Hero ──────────────────────────────────────────── --}}
    <section class="hero" style="min-height:45vh; padding-top:10rem; padding-bottom:3rem;">
        <div class="hero-bg"></div>
        <div class="hero-content" style="text-align:center; max-width:700px; margin:0 auto;">
            <p class="hero-eyebrow" style="text-align:center;">संपर्क करें — Reach Out</p>
            <h1 class="hero-title" style="font-size:clamp(2rem,4vw,3.5rem); text-align:center;">
                Let's Begin<br /><span class="accent">Your Mantra</span>
            </h1>
            <p class="hero-subtitle" style="margin:0 auto;">
                A conversation costs nothing. A missed opportunity costs everything.
                Reach out — we respond within 24 hours.
            </p>
        </div>
    </section>

    {{-- ── Contact Body ────────────────────────────────────────── --}}
    <section>
        <div class="container">
            <div class="contact-grid">

                {{-- Left: Info --}}
                <div class="reveal">
                    <h2 class="contact-info"
                        style="font-family:var(--font-display); font-size:clamp(1.4rem,2.5vw,2rem); color:var(--text-ivory); margin-bottom:0.75rem;">
                        नमस्ते 🙏
                    </h2>
                    <p class="font-serif"
                        style="font-style:italic; color:var(--text-cream); margin-bottom:2.5rem; line-height:1.8;">
                        We're a team of strategists, creatives, and growth engineers
                        who love nothing more than a great brand challenge.
                        Tell us about yours.
                    </p>

                    <div class="divider-om" style="margin-bottom:2rem;"><span>✦</span></div>

                    <div class="contact-detail">
                        <div class="contact-icon">✉</div>
                        <div>
                            <div class="contact-label">Email — ईमेल</div>
                            <div class="contact-value">
                                <a href="mailto:hello@brandmantra.in"
                                    style="color:var(--text-cream); text-decoration:none;">hello@brandmantra.in</a>
                            </div>
                        </div>
                    </div>

                    <div class="contact-detail">
                        <div class="contact-icon">☎</div>
                        <div>
                            <div class="contact-label">Phone — फ़ोन</div>
                            <div class="contact-value">
                                <a href="tel:+919876543210" style="color:var(--text-cream); text-decoration:none;">+91 98765
                                    43210</a>
                            </div>
                        </div>
                    </div>

                    <div class="contact-detail">
                        <div class="contact-icon">◉</div>
                        <div>
                            <div class="contact-label">Location — स्थान</div>
                            <div class="contact-value">Bandra West, Mumbai<br />
                                <span style="font-size:0.82rem; color:var(--text-muted);">Also: Delhi • Bangalore •
                                    Hyderabad</span>
                            </div>
                        </div>
                    </div>

                    <div class="contact-detail">
                        <div class="contact-icon">◷</div>
                        <div>
                            <div class="contact-label">Hours — समय</div>
                            <div class="contact-value">Mon – Sat, 9 AM – 7 PM IST</div>
                        </div>
                    </div>

                    {{-- Sanskrit blessing --}}
                    <div
                        style="margin-top:3rem; padding:1.5rem; border:1px solid var(--border-subtle); background:var(--bg-card);">
                        <p
                            style="font-family:var(--font-hindi); font-size:1.1rem; color:var(--gold); opacity:0.6; text-align:center; margin-bottom:0.5rem;">
                            शुभस्य शीघ्रम्
                        </p>
                        <p
                            style="font-family:var(--font-serif); font-style:italic; font-size:0.82rem; color:var(--text-muted); text-align:center;">
                            "Begin auspicious endeavours without delay."
                        </p>
                    </div>
                </div>

                {{-- Right: Form --}}
                <div class="card reveal reveal-delay-2" style="padding:2.5rem;">
                    <div class="card-ornament tl"></div>
                    <div class="card-ornament br"></div>

                    <span class="sanskrit-label" style="margin-bottom:1.5rem; display:block;">॥ संदेश भेजें — Send a Message
                        ॥</span>

                    {{-- Success Message --}}
                    @if(session('success'))
                        <div class="form-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST" novalidate>
                        @csrf

                        <div class="grid-2" style="gap:1rem;">
                            <div class="form-group">
                                <label class="form-label" for="name">
                                    Your Name <span class="sanskrit-hint">नाम</span>
                                </label>
                                <input type="text" id="name" name="name" class="form-input" placeholder="Arjun Sharma"
                                    value="{{ old('name') }}" autocomplete="name" />
                                @error('name')
                                    <span class="form-error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="email">
                                    Email Address <span class="sanskrit-hint">ईमेल</span>
                                </label>
                                <input type="email" id="email" name="email" class="form-input" placeholder="you@company.com"
                                    value="{{ old('email') }}" autocomplete="email" />
                                @error('email')
                                    <span class="form-error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="grid-2" style="gap:1rem;">
                            <div class="form-group">
                                <label class="form-label" for="phone">
                                    Phone <span class="sanskrit-hint">फ़ोन (वैकल्पिक)</span>
                                </label>
                                <input type="tel" id="phone" name="phone" class="form-input" placeholder="+91 98765 43210"
                                    value="{{ old('phone') }}" autocomplete="tel" />
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="service">
                                    I Need Help With <span class="sanskrit-hint">सेवा</span>
                                </label>
                                <select id="service" name="service" class="form-select">
                                    <option value="">Select a service…</option>
                                    <option value="SEO" {{ old('service') === 'SEO' ? 'selected' : '' }}>SEO — दृश्यता
                                    </option>
                                    <option value="Performance Marketing" {{ old('service') === 'Performance Marketing' ? 'selected' : '' }}>Performance Marketing</option>
                                    <option value="Social Media" {{ old('service') === 'Social Media' ? 'selected' : '' }}>
                                        Social Media</option>
                                    <option value="Brand Strategy" {{ old('service') === 'Brand Strategy' ? 'selected' : '' }}>Brand Strategy</option>
                                    <option value="Content Marketing" {{ old('service') === 'Content Marketing' ? 'selected' : '' }}>Content Marketing</option>
                                    <option value="Web Design" {{ old('service') === 'Web Design' ? 'selected' : '' }}>Web
                                        Design & Dev</option>
                                    <option value="Full Package" {{ old('service') === 'Full Package' ? 'selected' : '' }}>
                                        Full-Funnel Package</option>
                                    <option value="Not Sure" {{ old('service') === 'Not Sure' ? 'selected' : '' }}>Not Sure —
                                        Advise Me</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="message">
                                Your Message <span class="sanskrit-hint">संदेश</span>
                            </label>
                            <textarea id="message" name="message" class="form-textarea"
                                placeholder="Tell us about your brand, your goals, your challenges. The more context, the better we can help…">{{ old('message') }}</textarea>
                            @error('message')
                                <span class="form-error">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" class="btn-primary"
                            style="width:100%; text-align:center; cursor:pointer; font-size:0.82rem;">
                            Send Message — संदेश भेजें ✦
                        </button>

                        <p
                            style="text-align:center; margin-top:1rem; font-size:0.75rem; color:var(--text-faint); font-family:var(--font-serif); font-style:italic;">
                            We respect your privacy. Your information is never shared.
                        </p>
                    </form>
                </div>

            </div>
        </div>
    </section>

    {{-- ── FAQ ──────────────────────────────────────────────────── --}}
    <section style="background:var(--bg-surface);">
        <div class="container" style="max-width:800px;">

            <div class="section-header">
                <div class="section-label reveal" style="justify-content:center;">FAQ</div>
                <h2 class="section-title reveal reveal-delay-1">
                    सामान्य प्रश्न — Common Questions
                </h2>
            </div>

            @php
                $faqs = [
                    ['q' => 'How soon can you start?', 'a' => 'We typically onboard new clients within 5–7 business days. For urgent projects, we can fast-track in 48 hours.'],
                    ['q' => 'What is your minimum engagement?', 'a' => 'Our project-based work starts at ₹50,000. Monthly retainers begin at ₹75,000/month for a single service.'],
                    ['q' => 'Do you work with startups?', 'a' => 'Absolutely. Half our portfolio is early-stage startups. We have startup-friendly packages built for lean budgets with high ambition.'],
                    ['q' => 'Can you handle regional language campaigns?', 'a' => 'Yes — Hindi, Tamil, Bengali, Marathi, Telugu, Kannada, Malayalam. Regional fluency is one of our core strengths.'],
                    ['q' => 'Will I get a dedicated account manager?', 'a' => 'Every client gets a dedicated strategist and a WhatsApp group for real-time communication. No ticket systems, no bots.'],
                ];
            @endphp

            <div class="reveal">
                @foreach ($faqs as $i => $faq)
                    <div style="border-bottom:1px solid var(--border-subtle); padding:1.5rem 0;" x-data="{ open: false }">
                        <button @click="open = !open"
                            style="width:100%; text-align:left; background:none; border:none; cursor:pointer; display:flex; justify-content:space-between; align-items:center; gap:1rem;"
                            :aria-expanded="open">
                            <span
                                style="font-family:var(--font-heading); font-size:0.95rem; color:var(--text-ivory);">{{ $faq['q'] }}</span>
                            <span style="color:var(--gold); font-size:1.1rem; flex-shrink:0; transition:transform 0.3s;"
                                :style="open ? 'transform:rotate(180deg)' : ''">▾</span>
                        </button>
                        <div x-show="open" x-collapse style="overflow:hidden;">
                            <p
                                style="padding-top:1rem; font-size:0.9rem; color:var(--text-muted); line-height:1.7; font-family:var(--font-serif); font-style:italic;">
                                {{ $faq['a'] }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

@endsection