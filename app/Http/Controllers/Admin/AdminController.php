<?php

namespace App\Http\Controllers\Admin;

use App\Blog;
use App\Contact;
use App\Http\Controllers\Controller;
use App\Project;
use App\Service;
use App\TeamMember;
use App\Testimonial;
use App\Visitor;
use App\WebsiteSetting;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Analytics;
use Illuminate\Support\Facades\DB;
use Spatie\Analytics\Period;

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
        $visitors = Visitor::all();
        $visitors_count = $visitors->count();
        $temp_most_visited = $this->getMostVisited(7);
        $most_visited = $temp_most_visited[0];
        $most_visited_page = $temp_most_visited[1];

        return view('dashboard.home', compact(
            'services_count', 'projects_count',
                    'contacts_count', 'testimonials_count',
                    'members_count', 'blogs_count',
                    'visible_sections', 'hidden_sections',
                    'website_color', 'visitors_count',
                    'most_visited', 'most_visited_page'
        ));
    }

    public function getMostVisited($days)
    {
        $data = [];
        // Most Visited through 1 week
        $date = Carbon::today()->subDays($days);
        $visitors_data = Visitor::where('created_at', '>=', $date)->get();
        $pages = [
            'home'      => 0,
            'about'     => 0,
            'services'  => 0,
            'projects'  => 0,
            'blogs'     => 0,
            'contact-us'=> 0
        ];
        $most_visited = 0;
        $most_visited_page = '';
        foreach ($visitors_data as $data) {
            foreach ($pages as $index => $page) {
                if ($data->page == $index) {
                    $pages[$index] += 1;
                    if ($most_visited <= $pages[$index] ) {
                        $most_visited = $pages[$index];
                        $most_visited_page = $index;
                    }
                }
            }
        }
        $data = [$most_visited, $most_visited_page];
        return $data;
    }

    protected function getColorName($website_color)
    {
        $colors = [
            1     => __('admin.orange'),
            2     => __('admin.red'),
            3     => __('admin.yellow'),
            4     => __('admin.blue'),
            5     => __('admin.red_dark'),
            6     => __('admin.green'),
            7     => __('admin.sky'),
            8     => __('admin.orange_dark'),
        ];
        foreach ($colors as $index => $color) {
            if ($index == $website_color) {
                return $color;
            }
        }
    }
}
