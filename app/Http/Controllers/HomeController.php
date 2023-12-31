<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Mail\ContactFormEmail;
use App\Models\SubscriptionPlan;
use App\Models\PrepaidPlan;
use App\Models\Setting;
use App\Models\CustomTemplate;
use App\Models\Template;
use App\Models\Blog;
use App\Models\Review;
use App\Models\Page;
use App\Models\Faq;
use App\Models\Category;
use App\Models\FrontendStep;
use App\Models\FrontendTool;
use App\Models\FrontendFeature;
use App\Models\WebFooter;
use App\Models\WebFutureAiContent;
use App\Models\WebHowDoesItWork;
use App\Models\WebServiceContent;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    /**
     * Show home page
     */
    public function index()
    {
        $serviceContents = WebServiceContent::all();
        $futureAiContents = WebFutureAiContent::all();
        $howDoesItWork = WebHowDoesItWork::first();
        $howDoesItWork->web_contents = json_decode($howDoesItWork->contents);
        $webFooterMenus = WebFooter::select()->where('type', 'menu')->get();
        $webFooterIconMenus = WebFooter::select()->where('type', 'icon')->get();

        $setting_all = Setting::get();
        $setting = [];
        $setting_row = ['favicon_path'];
        foreach ($setting_all as $key => $value) {
            if (in_array($value['name'], $setting_row)) {
                $setting[$value['name']] = $value['value'];
            }
        }

        // if ($setting->frontend_additional_url != null) {
        //     return Redirect::to($setting->frontend_additional_url);
        // }

        return view('index', compact('setting', 'serviceContents', 'futureAiContents', 'howDoesItWork', 'webFooterMenus', 'webFooterIconMenus'));
    }

    // page controllers
    public function pageController()
    {

        return view('service-terms', compact('information', 'pages'));
    }

    /**
     * Display terms & conditions page
     *
     */


    /**
     * Display privacy policy page
     *
     */
    public function privacyPolicy()
    {
        $information = $this->metadataInformation();

        $pages_rows = ['privacy'];
        $pages = [];
        $page = Page::all();

        foreach ($page as $row) {
            if (in_array($row['name'], $pages_rows)) {
                $pages[$row['name']] = $row['value'];
            }
        }

        return view('privacy-policy', compact('information', 'pages'));
    }


    /**
     * Frontend show blog
     *
     */
    public function blogShow($slug)
    {
        $blog = Blog::where('url', $slug)->firstOrFail();

        $information_rows = ['js', 'css'];
        $information = [];
        $settings = Setting::all();

        foreach ($settings as $row) {
            if (in_array($row['name'], $information_rows)) {
                $information[$row['name']] = $row['value'];
            }
        }

        $information['author'] = $blog->created_by;
        $information['title'] = $blog->title;
        $information['keywords'] = $blog->keywords;
        $information['description'] = $blog->title;

        return view('blog-show', compact('information', 'blog'));
    }


    /**
     * Frontend show contact
     *
     */
    public function contactShow()
    {
        $information = $this->metadataInformation();

        return view('contact', compact('information'));
    }


    /**
     * Frontend show about us
     *
     */
    public function aboutUs()
    {
        $information = $this->metadataInformation();

        $pages_rows = ['about'];
        $pages = [];
        $page = Page::all();

        foreach ($page as $row) {
            if (in_array($row['name'], $pages_rows)) {
                $pages[$row['name']] = $row['value'];
            }
        }

        $blog_exists = Blog::count();
        $blogs = Blog::where('status', 'published')->orderBy('created_at', 'desc')->get();

        return view('about', compact('information', 'pages', 'blogs', 'blog_exists'));
    }


    /**
     * Frontend contact us form record
     *
     */
    public function contactSend(Request $request)
    {
        request()->validate([
            'name' => 'required|string',
            'lastname' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);

        if (config('services.google.recaptcha.enable') == 'on') {

            $recaptchaResult = $this->reCaptchaCheck(request('recaptcha'));

            if ($recaptchaResult->success != true) {
                toastr()->error(__('Google reCaptcha Validation has Failed'));
                return redirect()->back();
            }

            if ($recaptchaResult->score >= 0.5) {

                try {

                    Mail::to(config('mail.from.address'))->send(new ContactFormEmail($request));

                    if (Mail::flushMacros()) {
                        toastr()->error(__('Sending email failed, please try again.'));
                        return redirect()->back();
                    }
                } catch (\Exception $e) {
                    toastr()->error(__('Sending email failed, please contact support team.'));
                    return redirect()->back();
                }

                toastr()->success(__('Email was successfully sent'));
                return redirect()->back();
            } else {
                toastr()->error(__('Google reCaptcha Validation has Failed'));
                return redirect()->back();
            }
        } else {

            try {

                Mail::to(config('mail.from.address'))->send(new ContactFormEmail($request));

                if (Mail::flushMacros()) {
                    toastr()->error(__('Sending email failed, please try again.'));
                    return redirect()->back();
                }
            } catch (\Exception $e) {
                toastr()->error(__('Sending email failed, please contact support team.'));
                return redirect()->back();
            }

            toastr()->success(__('Email was successfully sent'));
            return redirect()->back();
        }
    }


    /**
     * Verify reCaptch for frontend contact us page (if enabled)
     *
     */
    private function reCaptchaCheck($recaptcha)
    {
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $remoteip = $_SERVER['REMOTE_ADDR'];

        $data = [
            'secret' => config('services.google.recaptcha.secret_key'),
            'response' => $recaptcha,
            'remoteip' => $remoteip
        ];

        $options = [
            'http' => [
                'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                'method' => 'POST',
                'content' => http_build_query($data)
            ]
        ];

        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        $resultJson = json_decode($result);

        return $resultJson;
    }


    public function metadataInformation()
    {
        $information_rows = ['title', 'author', 'keywords', 'description', 'js', 'css'];
        $information = [];
        $settings = Setting::all();

        foreach ($settings as $row) {
            if (in_array($row['name'], $information_rows)) {
                $information[$row['name']] = $row['value'];
            }
        }

        return $information;
    }

    // ================================
    public function pagePrivacy()
    {
        $webFooterMenus = WebFooter::select()->where('type', 'menu')->get();
        $webFooterIconMenus = WebFooter::select()->where('type', 'icon')->get();
        $settings = Setting::first();
        $webFooterMenus = WebFooter::select()->where('type', 'menu')->get();
        $webFooterIconMenus = WebFooter::select()->where('type', 'icon')->get();
        $information_rows = ['privacy'];
        $information = [];
        $pages = Page::all();

        foreach ($pages as $row) {
            if (in_array($row['name'], $information_rows)) {
                $information = $row['value'];
            }
        }

        return view('page.index', compact('webFooterMenus', 'webFooterIconMenus', 'information'));
    }

    public function pageTerms()
    {
        $settings = Setting::first();
        $webFooterMenus = WebFooter::select()->where('type', 'menu')->get();
        $webFooterIconMenus = WebFooter::select()->where('type', 'icon')->get();
        $information_rows = ['terms'];
        $information = [];
        $pages = Page::all();

        foreach ($pages as $row) {
            if (in_array($row['name'], $information_rows)) {
                $information = $row['value'];
            }
        }

        return view('page.index', compact('webFooterMenus', 'webFooterIconMenus', 'information'));
    }

    public function pageCookies()
    {
        $settings = Setting::first();
        $webFooterMenus = WebFooter::select()->where('type', 'menu')->get();
        $webFooterIconMenus = WebFooter::select()->where('type', 'icon')->get();
        $information_rows = ['cookies'];
        $information = [];
        $pages = Page::all();

        foreach ($pages as $row) {
            if (in_array($row['name'], $information_rows)) {
                $information = $row['value'];
            }
        }
        return view('page.index', compact('webFooterMenus', 'webFooterIconMenus', 'information'));
    }
}
