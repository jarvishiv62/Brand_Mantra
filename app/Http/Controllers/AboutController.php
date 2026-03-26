<?php
namespace App\Http\Controllers;

class AboutController extends Controller
{
    public function index()
    {
        $timeline = [
            ['year' => '2019', 'title' => 'The Mantra Begins', 'desc' => 'Founded in Mumbai with a vision to blend Indian cultural wisdom with modern digital strategy.'],
            ['year' => '2020', 'title' => 'First 50 Clients', 'desc' => 'Scaled rapidly during the digital surge. Helped businesses survive and thrive online.'],
            ['year' => '2021', 'title' => 'Pan-India Expansion', 'desc' => 'Opened operations in Delhi, Bangalore, and Hyderabad. 200+ brands served.'],
            ['year' => '2022', 'title' => 'Award & Recognition', 'desc' => 'Recognized as Top 10 Digital Agencies in India by Marketing Week India.'],
            ['year' => '2023', 'title' => 'Global Reach', 'desc' => 'Began serving Indian diaspora brands across UAE, UK, and North America.'],
            ['year' => '2024', 'title' => 'AI-Powered Growth', 'desc' => 'Launched proprietary AI content & analytics suite for hyper-targeted campaigns.'],
        ];
        $stats = [
            ['value' => '500', 'label' => 'Brands Transformed', 'suffix' => '+'],
            ['value' => '98', 'label' => 'Client Retention', 'suffix' => '%'],
            ['value' => '12', 'label' => 'Industry Awards', 'suffix' => ''],
            ['value' => '50', 'label' => 'Team Members', 'suffix' => '+'],
        ];
        return view('pages.about', compact('timeline', 'stats'));
    }
}