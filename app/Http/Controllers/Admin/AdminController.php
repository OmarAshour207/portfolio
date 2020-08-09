<?php

namespace App\Http\Controllers\Admin;

use App\Blog;
use App\Contact;
use App\Http\Controllers\Controller;
use App\Project;
use App\Service;
use App\TeamMember;
use App\Testimonial;
use App\WebsiteSetting;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showDashboard()
    {
        session('lang') ?? session()->put('lang', app()->getLocale());
        $services_count = Service::all()->count();
        $projects_count = Project::all()->count();
        $contacts_count = Contact::all()->count();
        $testimonials_count = Testimonial::all()->count();
        $members_count = TeamMember::all()->count();
        $blogs_count = Blog::all()->count();
        $settings = WebsiteSetting::first();
        $visible_sections = count(unserialize($settings->page_filter));
        $hidden_sections = 8 - $visible_sections;
        $website_color = $this->getColorName($settings->color);

        return view('dashboard.home', compact(
            'services_count', 'projects_count',
                    'contacts_count', 'testimonials_count',
                    'members_count', 'blogs_count',
                    'visible_sections', 'hidden_sections',
                    'website_color'
        ));
    }

    protected function getColorName($website_color)
    {
        $colors = [
            1     => 'Orange',
            2     => 'Red',
            3     => 'Yellow',
            4     => 'Blue',
            5     => 'Red Dark',
            6     => 'Green',
            7     => 'Sky',
            8     => 'Orange Dark',
        ];
        foreach ($colors as $index => $color) {
            if ($index == $website_color) {
                return $color;
            }
        }
    }
}
