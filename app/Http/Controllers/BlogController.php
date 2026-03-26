<?php

namespace App\Http\Controllers;

class BlogController extends Controller
{
    private function posts(): array
    {
        return [
            [
                'slug' => 'why-indian-brands-need-vernacular-seo',
                'title' => 'Why Indian Brands Must Invest in Vernacular SEO in 2025',
                'hindi' => 'भारतीय भाषाओं में SEO का महत्व',
                'category' => 'SEO',
                'date' => 'March 10, 2025',
                'author' => 'Aryan Kapoor',
                'read' => '6 min read',
                'excerpt' => 'Over 600 million Indians access the internet in their native language. Brands that ignore Hindi, Tamil, Telugu, and Bengali search traffic are leaving enormous growth on the table.',
                'cover' => 'seo',
                'body' => [
                    'India is not one market. It is 22 official languages, hundreds of dialects, and a digital user base that overwhelmingly prefers consuming content in their mother tongue. Yet most Indian brands optimise exclusively for English keywords.',
                    'Google processes over 8 billion searches per day in India — and the majority of incremental growth now comes from Tier-2 and Tier-3 cities where vernacular is the primary language of search. If your SEO strategy is English-only, you are competing for a shrinking slice of the pie.',
                    'Vernacular SEO involves optimising your content, meta tags, and local citations in regional languages. A restaurant in Chennai that ranks for "சிறந்த உணவகம் அண்ணா நகர்" will capture high-intent local traffic that their English-only competitors completely miss.',
                    'The technical implementation is simpler than most marketers assume. The hreflang attribute tells Google which language version to serve to which user. Combined with a thoughtful content calendar in 2–3 regional languages, most brands can double their organic reach within 6 months.',
                ],
                'tags' => ['SEO', 'Vernacular', 'India', 'Growth'],
            ],
            [
                'slug' => 'performance-marketing-roas-benchmarks-india-2025',
                'title' => 'Performance Marketing ROAS Benchmarks for Indian E-Commerce in 2025',
                'hindi' => 'भारतीय ई-कॉमर्स के लिए ROAS मानदंड',
                'category' => 'Performance Marketing',
                'date' => 'February 22, 2025',
                'author' => 'Vikram Rao',
                'read' => '8 min read',
                'excerpt' => 'What ROAS should you expect from Meta and Google ads in India? We analysed ₹18 Cr in ad spend across 60 D2C brands to give you the real numbers.',
                'cover' => 'performance',
                'body' => [
                    'After analysing ₹18 crore in managed ad spend across 60 D2C brands in India, we can now share what good actually looks like across verticals. These are not aspirational benchmarks — they are median figures from real campaigns run between January and December 2024.',
                    'For fashion and apparel on Meta, the median blended ROAS sits at 3.2x. Top quartile brands are achieving 5.1x by investing heavily in video creative and using advantage+ audiences. The lowest quartile — typically brands with weak creative or broad targeting — see 1.8x.',
                    'Google Shopping campaigns for D2C food and FMCG brands tell a different story. The median ROAS is 4.8x, significantly higher than the category average from 2023. This is driven by intent: someone searching "buy organic ghee online" is much closer to purchase than a scroll on Instagram.',
                    'The most important insight from our data: creative quality accounts for 62% of campaign performance variance. Targeting and bidding strategy account for the remaining 38%. If you are not investing in video creative refresh every 3–4 weeks, you are leaving ROAS on the table regardless of how well your campaigns are structured.',
                ],
                'tags' => ['Performance Marketing', 'ROAS', 'Meta Ads', 'Google Ads'],
            ],
            [
                'slug' => 'building-brand-resonance-in-bharat',
                'title' => 'Building Brand Resonance in Bharat: Lessons from India\'s Most-Loved Brands',
                'hindi' => 'भारत में ब्रांड की पहचान बनाना',
                'category' => 'Brand Strategy',
                'date' => 'January 15, 2025',
                'author' => 'Nisha Patel',
                'read' => '7 min read',
                'excerpt' => 'Amul, Fevicol, and Asian Paints have something that no amount of digital spend can manufacture overnight — emotional resonance rooted in the Indian experience. What can modern brands learn from them?',
                'cover' => 'brand',
                'body' => [
                    'What makes a brand Indian? Not the use of saffron colours or a Bollywood celebrity. The brands that have woven themselves into the fabric of Indian life share three qualities: they speak in the rhythms of everyday India, they associate themselves with moments that matter, and they earn trust over years — not quarters.',
                    'Amul\'s Utterly Butterly girl has appeared on billboards since 1966. She has commented on every major Indian news event, spoken in local idioms, and never taken herself too seriously. The lesson is not longevity — it is consistency of voice and the courage to be genuinely funny and local.',
                    'For modern D2C brands building on digital, the equivalent of the Amul billboard is the content calendar. The brands in our portfolio that achieve the deepest emotional resonance are those that treat content as a cultural conversation rather than a sales channel.',
                    'The practical framework we use: anchor your brand calendar to the Indian festive and cultural rhythm — Diwali, Holi, Eid, Onam, Pongal, and the dozens of regional festivals that matter deeply to specific audiences. Then layer in national occasions, sports events, and the micro-moments of Indian everyday life.',
                ],
                'tags' => ['Brand Strategy', 'India', 'Culture', 'Content'],
            ],
            [
                'slug' => 'social-media-trends-india-2025',
                'title' => 'Social Media Trends India 2025: What Every Brand Needs to Know',
                'hindi' => '2025 में भारतीय सोशल मीडिया के रुझान',
                'category' => 'Social Media',
                'date' => 'January 3, 2025',
                'author' => 'Aryan Kapoor',
                'read' => '5 min read',
                'excerpt' => 'Short-form video continues to dominate but the winners in 2025 will be brands that master creator partnerships, regional content, and the art of the comment section.',
                'cover' => 'social',
                'body' => [
                    'India is the world\'s largest market for short-form video. With over 200 million users on Instagram and a deeply engaged creator economy, the brands that will win in 2025 are not the ones with the biggest budgets — they are the ones with the most authentic creator relationships.',
                    'The shift we are seeing most clearly in our own data: micro-influencers (10K–100K followers) in regional languages are consistently outperforming macro-influencers on cost-per-acquisition by 3–4x. A Marathi food creator with 40,000 engaged followers in Pune drives more restaurant bookings than a Mumbai celebrity with 2 million.',
                    'Comment section strategy is the underrated edge of 2025. Brands that respond to comments within 2 hours, match the humour and tone of their community, and occasionally go viral in the comments (not the post itself) are building a kind of social capital that is very hard to replicate with paid media.',
                    'Our recommendation for Q1 2025: audit your influencer roster for regional representation. If you do not have creators covering at least 5 Indian languages, you are not speaking to Bharat.',
                ],
                'tags' => ['Social Media', 'Influencer', 'Trends', 'India'],
            ],
            [
                'slug' => 'ayurveda-digital-marketing-playbook',
                'title' => 'The Ayurveda Brand Digital Marketing Playbook',
                'hindi' => 'आयुर्वेद ब्रांड के लिए डिजिटल मार्केटिंग',
                'category' => 'Content Marketing',
                'date' => 'December 10, 2024',
                'author' => 'Nisha Patel',
                'read' => '9 min read',
                'excerpt' => 'The global wellness boom has created an unprecedented opportunity for authentic Indian Ayurvedic brands — if they can navigate the trust gap between ancient claims and modern digital scepticism.',
                'cover' => 'ayurveda',
                'body' => [
                    'Ayurveda is having a global moment. Post-pandemic, there is enormous appetite across India, the Indian diaspora, and Western wellness communities for plant-based, traditional health solutions. The challenge for Ayurvedic brands is a credibility problem that no amount of paid advertising can solve alone.',
                    'The brands succeeding in this space are leading with education, not promotion. Long-form content explaining the science and tradition behind formulations — written for both the Indian consumer who has grown up with these practices and the international consumer who is encountering them for the first time — builds the trust that converts.',
                    'YouTube is the highest-performing channel for Ayurvedic brands in our portfolio. A 10-minute video explaining the difference between Ashwagandha preparations, filmed in a practitioner\'s dispensary, outperforms glossy brand films by 5–6x on watch time and conversion. Authenticity is the algorithm.',
                    'On the regulatory side, Ayurvedic brands must be meticulous about advertising claims. The ASCI and AYUSH Ministry guidelines are strict about what can be stated in digital advertising. We build content architectures that educate and inform without making direct therapeutic claims — keeping our clients on the right side of compliance.',
                ],
                'tags' => ['Content Marketing', 'Ayurveda', 'Wellness', 'SEO'],
            ],
            [
                'slug' => 'google-ads-india-smart-bidding-guide',
                'title' => 'Google Ads Smart Bidding in India: A Practical Guide for 2025',
                'hindi' => 'भारत में Google Ads स्मार्ट बिडिंग गाइड',
                'category' => 'Performance Marketing',
                'date' => 'November 28, 2024',
                'author' => 'Vikram Rao',
                'read' => '7 min read',
                'excerpt' => 'Smart Bidding promises efficiency but Indian marketers face unique challenges — seasonal demand spikes, payment gateway friction, and conversion tracking gaps. Here is how to navigate them.',
                'cover' => 'google',
                'body' => [
                    'Smart Bidding works on a fundamental premise: the more conversion data you feed it, the smarter it gets. In India, this creates a unique bootstrapping challenge. Indian e-commerce sees enormous demand spikes around Diwali, Dussehra, and end-of-year sales — but conversion rates during these periods look very different from the baseline data the algorithm was trained on.',
                    'Our recommended approach for Indian advertisers: run manual CPC with a target ROAS modifier during major sale events for the first two years. Once you have seasonal conversion data, Smart Bidding\'s seasonality adjustments become far more reliable.',
                    'Payment gateway friction is the silent killer of Indian Google Ads performance. The average Indian e-commerce checkout has a 35–40% abandonment rate at the payment step — far higher than global averages. This means that last-click conversion attribution dramatically underestimates the value of upper-funnel campaigns.',
                    'The fix: implement enhanced conversions and import offline conversions from your CRM. Brands that add this layer see their attributed conversion value increase by 20–30% on average — which meaningfully changes which campaigns get budget.',
                ],
                'tags' => ['Google Ads', 'Performance Marketing', 'Smart Bidding'],
            ],
        ];
    }

    public function index()
    {
        $posts = $this->posts();
        $featured = array_shift($posts);
        return view('pages.blog.index', compact('posts', 'featured'));
    }

    public function show(string $slug)
    {
        $all = $this->posts();
        $post = collect($all)->firstWhere('slug', $slug);
        abort_if(!$post, 404);
        $related = collect($all)
            ->where('slug', '!=', $slug)
            ->where('category', $post['category'])
            ->take(2)
            ->values()
            ->toArray();
        if (count($related) < 2) {
            $extra = collect($all)->where('slug', '!=', $slug)->take(2 - count($related))->values()->toArray();
            $related = array_merge($related, $extra);
        }
        return view('pages.blog.show', compact('post', 'related'));
    }
}
