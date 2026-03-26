@extends('layouts.master')
@section('title', $post['title'])
@section('meta_desc', $post['excerpt'])
@section('content')

    <section class="hero" style="min-height:42vh;padding-top:10rem;padding-bottom:3rem;">
        <div class="hero-bg"></div>
        <div class="hero-content" style="max-width:860px;margin:0 auto;">
            <p class="hero-eyebrow">{{ $post['category'] }} — <span
                    style="font-family:var(--font-hindi);">{{ $post['hindi'] }}</span></p>
            <h1 class="hero-title" style="font-size:clamp(1.8rem,4vw,3.2rem);">{{ $post['title'] }}</h1>
            <div
                style="display:flex;align-items:center;gap:1.5rem;flex-wrap:wrap;margin-top:1.5rem;opacity:0;animation:fadeUp 0.8s ease 0.8s forwards;">
                <span
                    style="font-family:var(--font-heading);font-size:0.72rem;letter-spacing:0.15em;text-transform:uppercase;color:var(--text-muted);">{{ $post['author'] }}</span>
                <span style="color:var(--border-gold);">✦</span>
                <span
                    style="font-family:var(--font-heading);font-size:0.72rem;letter-spacing:0.15em;text-transform:uppercase;color:var(--text-muted);">{{ $post['date'] }}</span>
                <span style="color:var(--border-gold);">✦</span>
                <span
                    style="font-family:var(--font-heading);font-size:0.72rem;letter-spacing:0.15em;text-transform:uppercase;color:var(--text-muted);">{{ $post['read'] }}</span>
            </div>
        </div>
    </section>

    @include('partials.paisley')

    <section>
        <div class="container" style="max-width:860px;">

            {{-- Excerpt callout --}}
            <div class="reveal"
                style="border-left:3px solid var(--gold);padding:1.5rem 2rem;background:var(--bg-card);margin-bottom:3rem;">
                <p class="font-serif" style="font-style:italic;font-size:1.1rem;color:var(--text-cream);line-height:1.8;">
                    {{ $post['excerpt'] }}
                </p>
            </div>

            {{-- Article body --}}
            <div class="blog-post-body reveal">
                @foreach ($post['body'] as $i => $para)
                    <p>{{ $para }}</p>
                @endforeach
            </div>

            {{-- Tags --}}
            <div class="blog-post-tags reveal"
                style="margin-top:2rem;padding-top:1.5rem;border-top:1px solid var(--border-subtle);">
                @foreach($post['tags'] as $tag)
                    <span class="blog-post-tag">{{ $tag }}</span>
                @endforeach
            </div>

            {{-- Author card --}}
            <div class="card reveal" style="margin-top:2.5rem;display:flex;gap:1.25rem;align-items:flex-start;">
                <div
                    style="width:52px;height:52px;border-radius:50%;background:linear-gradient(135deg,var(--crimson),var(--gold-dim));display:flex;align-items:center;justify-content:center;font-family:var(--font-heading);color:var(--text-ivory);border:1px solid var(--border-gold);flex-shrink:0;">
                    {{ strtoupper(substr($post['author'], 0, 2)) }}
                </div>
                <div>
                    <div
                        style="font-family:var(--font-heading);font-size:0.85rem;color:var(--text-ivory);margin-bottom:0.25rem;">
                        {{ $post['author'] }}</div>
                    <div style="font-family:var(--font-serif);font-style:italic;font-size:0.8rem;color:var(--text-muted);">
                        BrandMantra Growth Team</div>
                </div>
            </div>

        </div>
    </section>

    @include('partials.paisley')

    {{-- Related articles --}}
    @if(count($related))
        <section style="background:var(--bg-surface);">
            <div class="container">
                <div class="section-label reveal" style="margin-bottom:2rem;">More to Read</div>
                <div class="blog-grid" style="grid-template-columns:repeat(2,1fr);">
                    @foreach ($related as $i => $rel)
                        <a href="{{ route('blog.show', $rel['slug']) }}" class="blog-card reveal reveal-delay-{{ $i + 1 }}"
                            style="text-decoration:none;">
                            <div class="blog-card-cover">
                                <div class="blog-card-cover-inner">{{ strtoupper(substr($rel['category'], 0, 2)) }}</div>
                                <div class="blog-card-cover-bar"
                                    style="background:linear-gradient(90deg,var(--gold),var(--saffron));"></div>
                            </div>
                            <div class="blog-card-body">
                                <div class="blog-card-cat">{{ $rel['category'] }}</div>
                                <h3 class="blog-card-title">{{ $rel['title'] }}</h3>
                                <div class="blog-card-meta">
                                    <span>{{ $rel['author'] }}</span>
                                    <span>{{ $rel['read'] }}</span>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <section style="padding:4rem 2rem;text-align:center;">
        <div class="container" style="max-width:600px;">
            <a href="{{ route('blog') }}" class="btn-secondary">← Back to All Articles</a>
            &nbsp;&nbsp;
            <a href="{{ route('contact') }}" class="btn-primary">Work With Us</a>
        </div>
    </section>

@endsection