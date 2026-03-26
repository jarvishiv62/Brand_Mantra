<?php
namespace App\Http\Controllers;

class ServiceController extends Controller
{
    public function index()
    {
        $services = [
            [
                'id' => 1,
                'icon' => '🔱',
                'sanskrit' => 'दृश्यता वृद्धि',
                'title' => 'Search Engine Optimization',
                'subtitle' => 'Be found. Be first. Be trusted.',
                'desc' => 'We combine technical precision with content artistry to place your brand at the top of every relevant search. Our SEO framework is built on deep keyword intelligence, authoritative backlink ecosystems, and on-page excellence.',
                'features' => ['Technical SEO Audit', 'Keyword Strategy', 'Content Optimization', 'Link Building', 'Local SEO for India'],
                'result' => 'Average 340% increase in organic traffic within 6 months'
            ],
            [
                'id' => 2,
                'icon' => '⚡',
                'sanskrit' => 'प्रदर्शन विपणन',
                'title' => 'Performance Marketing',
                'subtitle' => 'Every paisa. Maximum return.',
                'desc' => 'Data-driven paid campaigns across Google, Meta, and regional Indian platforms. We engineer your ad spend into predictable, scalable revenue — not guesswork.',
                'features' => ['Google Ads', 'Meta & Instagram Ads', 'YouTube Ads', 'Programmatic Display', 'Retargeting Funnels'],
                'result' => 'Average 4.8x ROAS across client campaigns'
            ],
            [
                'id' => 3,
                'icon' => '🌺',
                'sanskrit' => 'सामाजिक माध्यम',
                'title' => 'Social Media Marketing',
                'subtitle' => 'Community. Culture. Conversation.',
                'desc' => 'Indian social media is a cultural universe. We navigate it with native fluency — crafting content calendars, viral campaigns, and influencer collaborations that speak the language of Bharat.',
                'features' => ['Content Strategy', 'Reel & Short-form Video', 'Influencer Network', 'Community Management', 'Regional Language Content'],
                'result' => 'Average 5x follower growth in first 90 days'
            ],
            [
                'id' => 4,
                'icon' => '◈',
                'sanskrit' => 'ब्रांड पहचान',
                'title' => 'Brand Strategy & Identity',
                'subtitle' => 'Your name. Your legend.',
                'desc' => 'A brand is a mantra — it must be felt before it is heard. We build brand systems that carry cultural resonance, emotional depth, and visual authority across every medium.',
                'features' => ['Brand Positioning', 'Visual Identity System', 'Brand Voice & Tone', 'Logo & Collateral Design', 'Brand Guidelines'],
                'result' => "Brands we've built rank 60% higher in consumer trust surveys"
            ],
            [
                'id' => 5,
                'icon' => '📿',
                'sanskrit' => 'सामग्री निर्माण',
                'title' => 'Content Marketing',
                'subtitle' => 'Stories that sell. Words that win.',
                'desc' => 'Content is the foundation of digital trust. Our writers, creators, and strategists build content ecosystems — blogs, videos, podcasts, infographics — that educate, inspire, and convert.',
                'features' => ['Blog & Article Writing', 'Video Script & Production', 'Podcast Strategy', 'Infographic Design', 'Email Sequences'],
                'result' => 'Content we create generates 2.4x more leads than industry average'
            ],
            [
                'id' => 6,
                'icon' => '🏛️',
                'sanskrit' => 'वेब निर्माण',
                'title' => 'Web Design & Development',
                'subtitle' => 'Crafted. Coded. Converted.',
                'desc' => 'Your website is your digital temple. We design and develop high-performance websites and landing pages that are visually stunning, lightning fast, and engineered to convert visitors into customers.',
                'features' => ['UI/UX Design', 'Laravel & React Development', 'Landing Page Optimization', 'E-commerce (Shopify/WooCommerce)', 'Performance Optimization'],
                'result' => 'Sites we build average 68% lower bounce rates'
            ],
        ];
        return view('pages.services', compact('services'));
    }
}