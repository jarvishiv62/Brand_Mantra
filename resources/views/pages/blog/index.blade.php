@extends('layouts.master')
@section('title', 'Insights')
@section('meta_desc', 'BrandMantra Insights — Strategy, SEO, Performance Marketing, and Brand deep-dives from India\'s leading digital growth agency.')
@section('content')

    <section class="hero" style="min-height:45vh;padding-top:10rem;padding-bottom:3rem;" data-nav="blog">
        <div class="hero-bg"></div>
        <div class="hero-content" style="text-align:center;max-width:700px;margin:0 auto;">
            <p class="hero-eyebrow" style="text-align:center;">ज्ञान — Knowledge</p>
            <h1 class="hero-title" style="font-size:clamp(2rem,4vw,3.5rem);text-align:center;">
                Insights &<br /><span class="accent">Brand Intelligence</span>
            </h1>
            <p class="hero-subtitle" style="margin:0 auto;">
                Strategy deep-dives, performance playbooks, and cultural marketing wisdom — written by the team that lives
                and breathes Indian digital growth.
            </p>
        </div>
    </section>

    @include('partials.paisley')

    <section>
        <div class="container">

            {{-- Featured post --}}
            <div class="section-label reveal" style="margin-bottom:1.5rem;">Featured Article</div>
            <a href="{{ route('blog.show', $featured['slug']) }}" class="blog-featured reveal"
                style="text-decoration:none;display:grid;">
                <div class="blog-featured-cover">
                    <div class="blog-featured-cover-inner">{{ strtoupper(substr($featured['category'], 0, 2)) }}</div>
                    <div
                        style="position:absolute;bottom:0;left:0;right:0;height:3px;background:linear-gradient(90deg,var(--gold),var(--saffron));">
                    </div>
                </div>
                <div class="blog-featured-body">
                    <span class="blog-featured-label">{{ $featured['category'] }} — {{ $featured['hindi'] }}</span>
                    <h2 class="blog-featured-title">{{ $featured['title'] }}</h2>
                    <p class="blog-featured-excerpt">{{ $featured['excerpt'] }}</p>
                    <div class="blog-featured-meta">{{ $featured['author'] }} &nbsp;·&nbsp; {{ $featured['date'] }}
                        &nbsp;·&nbsp; {{ $featured['read'] }}</div>
                    <span class="btn-secondary" style="display:inline-block;">Read Article →</span>
                </div>
            </a>

            @include('partials.paisley')

            {{-- Other posts grid --}}
            <div class="section-label reveal" style="margin-bottom:1.5rem;margin-top:1rem;">More Articles</div>
            <div class="blog-grid">
                @foreach ($posts as $i => $post)
                    <a href="{{ route('blog.show', $post['slug']) }}" class="blog-card reveal reveal-delay-{{ ($i % 3) + 1 }}"
                        style="text-decoration:none;">
                        <div class="blog-card-cover">
                            <div class="blog-card-cover-inner">{{ strtoupper(substr($post['category'], 0, 2)) }}</div>
                            <div class="blog-card-cover-bar"
                                style="background:linear-gradient(90deg,var(--gold),var(--saffron));"></div>
                        </div>
                        <div class="blog-card-body">
                            <div class="blog-card-cat">{{ $post['category'] }} — {{ $post['hindi'] }}</div>
                            <h3 class="blog-card-title">{{ $post['title'] }}</h3>
                            <p class="blog-card-excerpt">{{ Str::limit($post['excerpt'], 120) }}</p>
                            <div class="blog-card-meta">
                                <span>{{ $post['author'] }}</span>
                                <span>{{ $post['read'] }}</span>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>

            {{-- Newsletter prompt --}}
            <div class="cta-banner reveal" style="margin-top:4rem;">
                <p
                    style="font-family:var(--font-hindi);color:var(--gold);opacity:0.3;font-size:1.3rem;margin-bottom:1rem;position:relative;">
                    ज्ञान ही शक्ति है</p>
                <h2 class="cta-title" style="font-size:clamp(1.4rem,3vw,2.2rem);">Get Insights in Your Inbox</h2>
                <p class="cta-sub">Monthly brand intelligence. No spam. Unsubscribe anytime.</p>
                <a href="{{ route('contact') }}" class="btn-primary" style="position:relative;">Subscribe Free</a>
            </div>

        </div>
    </section>

@endsection