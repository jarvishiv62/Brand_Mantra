<?php
namespace App\Http\Controllers;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = [
            [
                'id' => 1,
                'title' => 'ZestKart',
                'category' => 'E-Commerce',
                'tags' => ['SEO', 'Performance Marketing', 'Brand'],
                'color' => '#C9901A',
                'description' => 'D2C spice brand scaled from ₹10L to ₹80L monthly revenue.',
                'problem' => 'No digital presence, zero organic reach, scattered social media.',
                'solution' => 'Full-funnel strategy: brand identity refresh, SEO content engine, and Meta ad system.',
                'result' => '3x revenue in 6 months, 280% organic traffic increase, 4.2x ROAS on paid.',
                'initials' => 'ZK'
            ],
            [
                'id' => 2,
                'title' => 'LotusWear Fashion',
                'category' => 'Fashion & Lifestyle',
                'tags' => ['Social Media', 'Influencer', 'Content'],
                'color' => '#8B1A1A',
                'description' => 'Ethnic wear brand turned national sensation in 90 days.',
                'problem' => 'Hyper-competitive niche, no differentiated voice, struggling Instagram presence.',
                'solution' => 'Reels-first content strategy with regional influencer network across 8 states.',
                'result' => '800K new Instagram followers, 65% increase in website sales, featured in Vogue India.',
                'initials' => 'LW'
            ],
            [
                'id' => 3,
                'title' => 'SpiceRoute Foods',
                'category' => 'Food & Beverage',
                'tags' => ['Brand Identity', 'Web Design', 'SEO'],
                'color' => '#E85D04',
                'description' => 'Premium food startup brand system built from scratch.',
                'problem' => 'No brand identity, confusing positioning, poor website performance.',
                'solution' => 'Complete brand overhaul: logo, packaging, web presence, and SEO foundation.',
                'result' => 'Secured ₹2Cr Series A funding, 180% growth in D2C orders within 4 months.',
                'initials' => 'SR'
            ],
            [
                'id' => 4,
                'title' => 'AyurVeda Clinic',
                'category' => 'Healthcare',
                'tags' => ['Local SEO', 'Google Ads', 'Content'],
                'color' => '#2E7D32',
                'description' => 'Traditional Ayurvedic clinic chain digitized for modern patients.',
                'problem' => 'No digital appointments, low local search visibility, negative reviews.',
                'solution' => 'Local SEO domination, Google Ads for appointment bookings, reputation management.',
                'result' => '5x appointment bookings, ranked #1 locally for 40+ keywords, 4.8 star rating.',
                'initials' => 'AV'
            ],
            [
                'id' => 5,
                'title' => 'TechMitra SaaS',
                'category' => 'Technology',
                'tags' => ['Performance Marketing', 'Content', 'Brand'],
                'color' => '#1565C0',
                'description' => 'B2B SaaS platform built a pipeline of 500+ qualified leads.',
                'problem' => 'High CAC, poor brand awareness in B2B space, no content strategy.',
                'solution' => 'LinkedIn thought leadership + Google Ads + long-form content funnel.',
                'result' => '60% reduction in CAC, 500+ MQLs in first quarter, 12 enterprise deals closed.',
                'initials' => 'TM'
            ],
            [
                'id' => 6,
                'title' => 'RajasthaniCrafts',
                'category' => 'Handicrafts & Culture',
                'tags' => ['E-Commerce', 'Social', 'Content'],
                'color' => '#AD1457',
                'description' => 'Artisan collective brought 200-year-old craft to global markets.',
                'problem' => 'Artisans with no digital channel, unable to reach premium buyers.',
                'solution' => 'Shopify store, Instagram storytelling, export-ready brand packaging.',
                'result' => 'Now selling in 18 countries, 400% revenue increase, UNESCO partnership.',
                'initials' => 'RC'
            ],
        ];
        return view('pages.portfolio', compact('projects'));
    }
}