<?php

namespace App\Http\Controllers;

use App\About;
use App\Blog;
use App\Project;
use App\Service;
use App\Slider;
use App\TeamMember;
use App\Testimonial;
use App\Visitor;
use App\WebsiteSetting;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function changeLanguage($language)
    {
        session()->has('lang') ? session()->forget('lang') : '';
        $language == 'ar' ? session()->put('lang', 'ar') : session()->put('lang', 'en');
        return redirect()->back();
    }

    public function HomePage()
    {
        $this->checkVisitor();

        session('lang') ?? session()->put('lang', app()->getLocale());
        $websiteSettings = WebsiteSetting::first();
        $page_filter = $websiteSettings->page_filter != null ? unserialize($websiteSettings->page_filter) : '';
        $sliders = Slider::orderBy('id', 'desc')->limit(3)->get();
        $aboutUs = About::first();
        $projects = Project::orderBy('id', 'desc')->limit(3)->get();
        $services = Service::orderBy('id', 'desc')->limit(6)->get();
        $teamMembers = TeamMember::orderBy('id', 'desc')->limit(4)->get();
        $testimonials = Testimonial::orderBy('id', 'desc')->limit(3)->get();
        $blogs = Blog::orderBy('id', 'desc')->limit(3)->get();


        return view('home',
            compact('page_filter', 'sliders',
                            'aboutUs', 'projects',
                            'services', 'teamMembers',
                            'testimonials', 'blogs'));
    }

    public function checkVisitor()
    {
        $ip = $_SERVER['REMOTE_ADDR'];
        $page = \Request::segment(1) ?? 'home';

        $visitors = Visitor::where('ip', $ip)
                ->where('page', $page)
                ->get();

        if($visitors->count() > 0) {
            foreach ($visitors as $visitor) {
                if($visitor->created_at->addDay() < Carbon::now()) {
                    $this->createVisitor($ip, $page);
                }
            }
        }else {
            $this->createVisitor($ip, $page);
        }
    }

    protected function createVisitor($ip, $page)
    {
        Visitor::create([
            'ip'    => $ip,
            'page'  => $page
        ]);
    }

    public function aboutPage()
    {
        $this->checkVisitor();
        $about = About::first();
        $testimonials = Testimonial::orderBy('id', 'desc')->limit(3)->get();
        $teamMembers = TeamMember::orderBy('id', 'desc')->limit(4)->get();
        return view('site.about', compact('about', 'testimonials', 'teamMembers'));
    }

    public function blogsPage()
    {
        $this->checkVisitor();
        $blogs = Blog::paginate(4);
        return view('site.blogs', compact('blogs'));
    }

    public function showBlog($id, $title)
    {
        $blog = Blog::findOrFail($id);
        return view('site.single_blog', compact('blog'));
    }

    public function projectsPage()
    {
        $this->checkVisitor();
        $projects = Project::orderBy('id', 'desc')->limit(3)->get();
        $about = About::first();
        return view('site.projects', compact('projects', 'about'));
    }

    public function servicesPage()
    {
        $this->checkVisitor();
        $services = Service::orderBy('id', 'desc')->limit(6)->get();
        return view('site.services', compact('services'));
    }

    public function SingleService($id, $title)
    {
        $service = Service::FindOrFail($id);
        return view('site.single_service', compact('service'));
    }

    public function contact()
    {
        $this->checkVisitor();
        return view('site.contact');
    }
}
