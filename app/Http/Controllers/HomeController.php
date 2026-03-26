<?php
namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $services = [
            ['icon' => '◈', 'sanskrit' => 'दृश्यता', 'title' => 'SEO & Visibility', 'desc' => 'Rise to the top of search with strategies rooted in data and crafted with precision.'],
            ['icon' => '◉', 'sanskrit' => 'प्रदर्शन', 'title' => 'Performance Marketing', 'desc' => 'Every rupee invested returns manifold. PPC campaigns engineered for maximum ROI.'],
            ['icon' => '◇', 'sanskrit' => 'सामाजिक', 'title' => 'Social Media', 'desc' => 'Build a community, not just followers. Stories that resonate across every platform.'],
            ['icon' => '◈', 'sanskrit' => 'पहचान', 'title' => 'Brand Identity', 'desc' => 'Your brand is your mantra. We craft identities that echo across every touchpoint.'],
        ];
        $testimonials = [
            ['name' => 'Arjun Mehta', 'company' => 'Founder, ZestKart', 'quote' => "BrandMantra didn't just run our campaigns — they rewrote our brand story. 3x revenue in 6 months.", 'avatar' => 'AM'],
            ['name' => 'Priya Sharma', 'company' => 'CEO, LotusWear', 'quote' => 'Their understanding of Indian consumer psychology is unmatched. Organic traffic grew 280%.', 'avatar' => 'PS'],
            ['name' => 'Rahul Gupta', 'company' => 'Co-founder, SpiceRoute', 'quote' => 'The team breathes strategy. From brand voice to performance ads — flawless execution every time.', 'avatar' => 'RG'],
        ];
        return view('pages.home', compact('services', 'testimonials'));
    }
}