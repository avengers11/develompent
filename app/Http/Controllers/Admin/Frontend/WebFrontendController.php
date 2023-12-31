<?php

namespace App\Http\Controllers\Admin\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WebSiteContent;
use App\Models\Setting;
use App\Models\WebFooter;
use App\Models\WebFutureAiContent;
use App\Models\WebHowDoesItWork;
use App\Models\WebPentaForceAiSlide;
use App\Models\WebServiceContent;

class WebFrontendController extends Controller
{
    //menuHeaders
    public function menuHeaders()
    {
        $siteContent = WebSiteContent::first();
        $siteContent->menus = json_decode($siteContent->nav_menu);

        return view('admin.frontend.frontend.menuheader', compact('siteContent'));
    }

    // services
    public function services()
    {
        $service = WebSiteContent::first();
        $serviceContents = WebServiceContent::all();
        return view('admin.frontend.frontend.service', compact('service', 'serviceContents'));
    }
    // servicesAdd
    public function servicesAdd()
    {
        return view('admin.frontend.frontend.servicesadd');
    }
    // servicesUpdate
    public function servicesUpdate($id)
    {
        $serviceContent = WebServiceContent::find($id);
        return view('admin.frontend.frontend.servicesupdate', compact('serviceContent'));
    }

    // futureAi
    public function futureAi()
    {
        $futureAICategories = WebSiteContent::select('future_ai_categories')->first();
        $futureAiContents = WebFutureAiContent::all();
        $futureAICategories = json_decode($futureAICategories->future_ai_categories);
        return view('admin.frontend.frontend.futureAi', compact('futureAICategories', 'futureAiContents'));
    }
    // futureAiSlAdd
    public function futureAiSlAdd()
    {
        return view('admin.frontend.frontend.futureaisladd');
    }
    // futureAiSlUpdate
    public function futureAiSlUpdate($id)
    {
        $webFutureAiContent = WebFutureAiContent::find($id);
        if ($webFutureAiContent) {
            return view('admin.frontend.frontend.futureAiSlUpdate', compact('webFutureAiContent'));
        }
        return redirect()->back()->with('error', 'Future Ai content not found');
    }

    // pentaforceai
    public function pentaforceai()
    {
        $siteContent = WebSiteContent::select('penta_force_ai_description')->first();
        $pentaForceAiSlides = WebPentaForceAiSlide::all();
        // return $siteContent;
        return view('admin.frontend.frontend.pentaForceAi', compact('siteContent', 'pentaForceAiSlides'));
    }
    // pentaforceAiAdd
    public function pentaforceAiAdd()
    {
        return view('admin.frontend.frontend.pentaforceaiadd');
    }
    // pentaforceAiUpdate
    public function pentaforceAiUpdate($id)
    {
        $pentaForceAiSlides = WebPentaForceAiSlide::find($id);
        return view('admin.frontend.frontend.pentaforceaiupdate', compact('pentaForceAiSlides'));
    }

    // howwork
    public function howwork()
    {
        $howDoesItWork = WebHowDoesItWork::first();
        $howDoesItWork->webContents = json_decode($howDoesItWork->contents);
        return view('admin.frontend.frontend.howwork', compact('howDoesItWork'));
    }

    // footer
    public function footer()
    {
        $webSiteContent = WebSiteContent::first();
        $webFooterMenus = WebFooter::select()->where('type', 'menu')->get();
        $webFooterIconMenus = WebFooter::select()->where('type', 'icon')->get();

        return view('admin.frontend.frontend.footer', compact('webSiteContent', 'webFooterMenus', 'webFooterIconMenus'));
    }

    // loginSignup
    public function loginSignup()
    {

        $webSiteContent = WebSiteContent::first();

        return view('admin.frontend.frontend.loginSignup', compact('webSiteContent'));
    }

    /*
    ================================================================
    ================================================================
    */
    public function menuHeadersPost(Request $request)
    {
        $data = $request->all();
        $oldFile = WebSiteContent::first();

        if (!empty($request->file('header_bmin_1'))) {
            // remove old file
            if (!empty($oldFile['header_bmin_1']) && file_exists(public_path($oldFile['header_bmin_1']))) {
                unlink(public_path($oldFile['header_bmin_1']));
            }
            // add new file
            $file = $request->file('header_bmin_1');
            $fileName1 = '/uploads/web/' . time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/web'), $fileName1);
        } else {
            $fileName1 = $oldFile['header_bmin_1'];
        }

        if (!empty($request->file('header_bmin_2'))) {
            // remove old file
            if (!empty($oldFile['header_bmin_2']) && file_exists(public_path($oldFile['header_bmin_2']))) {
                unlink(public_path($oldFile['header_bmin_2']));
            }
            // add new file
            $file = $request->file('header_bmin_2');
            $fileName2 = '/uploads/web/' . time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/web'), $fileName2);
        } else {
            $fileName2 = $oldFile['header_bmin_2'];
        }

        if (!empty($request->file('header_bmin_3'))) {
            // remove old file
            if (!empty($oldFile['header_bmin_3']) && file_exists(public_path($oldFile['header_bmin_3']))) {
                unlink(public_path($oldFile['header_bmin_3']));
            }
            // add new file
            $file = $request->file('header_bmin_3');
            $fileName3 = '/uploads/web/' . time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/web'), $fileName3);
        } else {
            $fileName3 = $oldFile['header_bmin_3'];
        }

        if (!empty($request->file('header_bmin_4'))) {
            // remove old file
            if (!empty($oldFile['header_bmin_4']) && file_exists(public_path($oldFile['header_bmin_4']))) {
                unlink(public_path($oldFile['header_bmin_4']));
            }
            // add new file
            $file = $request->file('header_bmin_4');
            $fileName4 = '/uploads/web/' . time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/web'), $fileName4);
        } else {
            $fileName4 = $oldFile['header_bmin_4'];
        }


        $siteContent = WebSiteContent::first();

        $siteContent->nav_menu = json_encode($request->menus);
        $siteContent->header_title = $request->header_title ? $request->header_title : $siteContent->header_title;
        $siteContent->header_slug = $request->header_slug ? $request->header_slug : $siteContent->header_slug;
        $siteContent->header_description = $request->header_description ? $request->header_description : $siteContent->header_description;
        $siteContent->header_btn = $request->header_btn ? $request->header_btn : $siteContent->header_btn;
        $siteContent->header_btn_link = $request->header_btn_link ? $request->header_btn_link : $siteContent->header_btn_link;

        $siteContent->header_bmin_1 = $fileName1;
        $siteContent->header_bminl_1 = $data['header_bminl_1'];
        $siteContent->header_bmin_2 = $fileName2;
        $siteContent->header_bminl_2 = $data['header_bminl_2'];
        $siteContent->header_bmin_3 = $fileName3;
        $siteContent->header_bminl_3 = $data['header_bminl_3'];
        $siteContent->header_bmin_4 = $fileName4;
        $siteContent->header_bminl_4 = $data['header_bminl_4'];

        $siteContent->save();
        return redirect()->back()->with('success', 'Site Header & Menu successfully updated!');
    }

    // =================
    // servicesTitle
    public function servicesTitle(Request $request)
    {
        $service = WebSiteContent::first();
        $service->service_title = $request->service_title ? $request->service_title : $service->service_title;
        $service->service_description = $request->service_description ? $request->service_description : $service->service_description;
        $service->save();
        return redirect()->back()->with('success', 'Service title and description are updated successfully');
    }
    // servicesAddPost
    public function servicesAddPost(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'icon' => 'required',
        ]);

        $serviceContent = new WebServiceContent();
        $serviceContent->title = $request->title;
        $serviceContent->description = $request->description;
        if ($request->icon) {
            $icon = $request->file('icon');
            $icon_name = time() . '_' . $icon->getClientOriginalName();
            $icon->move(public_path('/uploads/web/service/icon'), $icon_name);
            $serviceContent->icon = '/uploads/web/service/icon/' . $icon_name;
        } else {
            $serviceContent->icon = 'new_assets/svg/advanced_dashboard.svg';
        }
        $serviceContent->save();
        return redirect(route('admin.settings.frontend.services'))->with('success', 'Service content created successfully');
    }
    // servicesUpdatePost
    public function servicesUpdatePost(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        $serviceContent = WebServiceContent::find($request->id);
        $serviceContent->title = $request->title;
        $serviceContent->description = $request->description;
        if ($request->icon) {

            // Delete old icon
            if (file_exists(public_path($serviceContent->icon))) {
                unlink(public_path($serviceContent->icon));
            }

            $icon = $request->file('icon');
            $icon_name = time() . '_' . $icon->getClientOriginalName();
            $icon->move(public_path('/web/service/icon'), $icon_name);
            $serviceContent->icon = '/web/service/icon/' . $icon_name;
        } else {
            $serviceContent->icon = $serviceContent->icon;
        }
        $serviceContent->save();
        return redirect()->route('admin.settings.frontend.services')->with('success', 'Service content updated successfully');
    }
    // servicesDeletePost
    public function servicesDeletePost($id)
    {
        $serviceContent = WebServiceContent::find($id);
        if ($serviceContent) {
            // Delete old icon
            if (file_exists(public_path($serviceContent->icon))) {
                unlink(public_path($serviceContent->icon));
            }
            $serviceContent->delete();
            return redirect()->route('admin.settings.frontend.services')->with('success', 'Service content deleted successfully');
        }
        return redirect()->route('admin.settings.frontend.services')->with('success', 'Service content not found');
    }

    // ==========================
    // futureaiClrAddPost
    public function futureaiClrAddPost(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'color' => 'required',
        ]);
        $webSiteContent = WebSiteContent::first();
        $futureAICategories = json_decode($webSiteContent->future_ai_categories);
        $futureAICategories[] = [
            'name' => $request->name,
            'color' => $request->color,
        ];
        $webSiteContent->future_ai_categories = json_encode($futureAICategories);
        $webSiteContent->save();
        return back()->with('success', 'Future Ai category added successfully');
    }
    // futureaiClrDelete
    public function futureaiClrDelete($key)
    {
        $webSiteContent = WebSiteContent::first();
        $futureAICategories = json_decode($webSiteContent->future_ai_categories);
        unset($futureAICategories[$key]);
        $webSiteContent->future_ai_categories = json_encode($futureAICategories);
        $webSiteContent->save();
        return back()->with('success', 'Future Ai category deleted successfully');
    }
    // futureaiSlAddPost
    public function futureaiSlAddPost(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'image' => 'required',
            'description' => 'required',
            'color' => 'required',
        ]);
        $webFutureAi = new WebFutureAiContent();
        $webFutureAi->title = $request->title;
        $webFutureAi->slug = $request->slug;
        if ($request->image) {
            $image = $request->file('image');
            $image_name = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/web/future_ai/image'), $image_name);
            $webFutureAi->image = '/uploads/web/future_ai/image/' . $image_name;
        } else {
            $webFutureAi->image = 'new_assets/svg/advanced_dashboard.svg';
        }
        $webFutureAi->description = $request->description;
        $webFutureAi->color = $request->color;
        $webFutureAi->save();
        return redirect(route('admin.settings.frontend.futureai'))->with('success', 'Future Ai content added successfully');
    }
    // futureaiSlDelete
    public function futureaiSlDelete($id)
    {
        $webFutureAi = WebFutureAiContent::find($id);
        if ($webFutureAi) {
            // Delete old icon
            if (file_exists(public_path($webFutureAi->image))) {
                unlink(public_path($webFutureAi->image));
            }
            $webFutureAi->delete();
            return back()->with('success', 'Future Ai content deleted successfully');
        }
        return back()->with('success', 'Future Ai content not found');
    }
    // futureaiSlupdatePost
    public function futureaiSlupdatePost(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'description' => 'required',
            'color' => 'required',
        ]);

        $webFutureAi = WebFutureAiContent::find($request->id);
        $webFutureAi->title = $request->title;
        $webFutureAi->slug = $request->slug;
        if ($request->image) {

            // Delete old icon
            if (file_exists(public_path($webFutureAi->image))) {
                unlink(public_path($webFutureAi->image));
            }
            $image = $request->file('image');
            $image_name = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('/uploads/web/future_ai/image'), $image_name);
            $webFutureAi->image = '/uploads/web/future_ai/image/' . $image_name;
        } else {
            $webFutureAi->image = $webFutureAi->image;
        }
        $webFutureAi->description = $request->description;
        $webFutureAi->color = $request->color;
        $webFutureAi->save();
        return redirect(route('admin.settings.frontend.futureai'))->with('success', 'Future Ai content updated successfully');
    }

    // pentaforce
    // pentaForceaiDesPost
    public function pentaForceaiDesPost(Request $request)
    {
        $request->validate([
            'description' => 'penta_force_ai_description',
        ]);
        $webSiteContent = WebSiteContent::first();
        $webSiteContent->penta_force_ai_description = $request->penta_force_ai_description;
        $webSiteContent->save();
        return redirect()->back()->with('success', 'Future Ai title and description updated successfully');
    }
    // pentaForceAddPost
    public function pentaForceAddPost(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required',
            'color' => 'required',
            'description' => 'required',
        ]);
        $webFutureAiSlide = new WebPentaForceAiSlide();
        $webFutureAiSlide->title = $request->title;
        if ($request->image) {
            $image = $request->file('image');
            $image_name = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('/web/penta-force-ai/slider/image'), $image_name);
            $webFutureAiSlide->image = '/web/penta-force-ai/slider/image/' . $image_name;
        } else {
            $webFutureAiSlide->image = 'new_assets/images/slider_img_2.png';
        }
        $webFutureAiSlide->description = $request->description;
        $webFutureAiSlide->color = $request->color;
        $webFutureAiSlide->save();
        return redirect(route('admin.settings.frontend.pentaforceai'))->with('success', 'Future Ai slide content added successfully');
    }
    // pentaForceDelete
    public function pentaForceDelete($id)
    {
        $webFutureAiSlide = WebPentaForceAiSlide::find($id);
        if ($webFutureAiSlide) {
            if (file_exists(public_path($webFutureAiSlide->image))) {
                unlink(public_path($webFutureAiSlide->image));
            }
            $webFutureAiSlide->delete();
            return back()->with('success', 'Future Ai slide content deleted successfully');
        }
        return back()->with('success', 'Future Ai slide content not found');
    }
    // pentaForceUpdatePost
    public function pentaForceUpdatePost(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'color' => 'required',
        ]);

        $webFutureAiSlide = WebPentaForceAiSlide::find($request->id);
        $webFutureAiSlide->title = $request->title;
        if ($request->image) {

            // Delete old icon
            if (file_exists(public_path($webFutureAiSlide->image))) {
                unlink(public_path($webFutureAiSlide->image));
            }
            $image = $request->file('image');
            $image_name = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('/web/future_ai_slide/image'), $image_name);
            $webFutureAiSlide->image = '/web/future_ai_slide/image/' . $image_name;
        } else {
            $webFutureAiSlide->image = $webFutureAiSlide->image;
        }
        $webFutureAiSlide->description = $request->description;
        $webFutureAiSlide->color = $request->color;
        $webFutureAiSlide->save();
        return redirect(route('admin.settings.frontend.pentaforceai'))->with('success', 'Future Ai slide content updated successfully');
    }
    // howwork
    // howworkadd
    public function howworkadd(Request $request)
    {
        $request->validate([
            'content' => 'required',
        ]);
        $howDoesItWork = WebHowDoesItWork::first();
        $contents = json_decode($howDoesItWork->contents);
        $contents[] = $request->content;
        $howDoesItWork->contents = json_encode($contents);
        $howDoesItWork->save();
        return redirect()->back()->with('success', 'How does it work content added successfully');
    }
    // howworkdes
    public function howworkdes(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $howDoesItWork = WebHowDoesItWork::first();
        $howDoesItWork->title = $request->title;
        $howDoesItWork->description = $request->description;
        $howDoesItWork->save();
        return redirect()->back()->with('success', 'How does it work title and description updated successfully');
    }
    // howworkupdate
    public function howworkupdate(Request $request, $key)
    {
        $howDoesItWork = WebHowDoesItWork::first();
        $contents = json_decode($howDoesItWork->contents);
        $contents[$key] = $request->content;
        $howDoesItWork->contents = json_encode($contents);
        $howDoesItWork->save();
        return redirect()->back()->with('success', 'How does it work content updated successfully');
    }
    // howworkDelete
    public function howworkDelete($key)
    {
        try {
            $howDoesItWork = WebHowDoesItWork::first();
            $contents = json_decode($howDoesItWork->contents);
            unset($contents[$key]);
            $howDoesItWork->contents = json_encode($contents);
            $howDoesItWork->save();
            return redirect()->back()->with('success', 'How does it work content deleted successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('success', 'Something went wrong');
        }
    }

    // footer
    // footerNavMenu
    public function footerNavMenu(Request $request)
    {

        $webSiteContent = WebSiteContent::first();
        $webSiteContent->footer_title = $request->footer_title ? $request->footer_title : $webSiteContent->footer_title;
        $webSiteContent->footer_description_left = $request->footer_description_left ? $request->footer_description_left : $webSiteContent->footer_description_left;
        $webSiteContent->footer_description_right = $request->footer_description_right ? $request->footer_description_right : $webSiteContent->footer_description_right;
        $webSiteContent->footer_app_store_url = $request->footer_app_store_url ? $request->footer_app_store_url : $webSiteContent->footer_app_store_url;
        $webSiteContent->footer_google_play_url = $request->footer_google_play_url ? $request->footer_google_play_url : $webSiteContent->footer_google_play_url;
        $webSiteContent->nav_footer_title = $request->nav_footer_title ? $request->nav_footer_title : $webSiteContent->nav_footer_title;
        $webSiteContent->save();

        return redirect()->back()->with('success', 'Footer basic part updated successfully');
    }
    // footerMenu
    public function footerMenu(Request $request)
    {
        $menuNames = $request->menuNames;
        $menuUrls = $request->menuUrls;
        $menuIds = $request->menuIds;

        foreach ($menuIds as $key => $id) {
            $findMenu = WebFooter::find($id);
            if ($findMenu) {
                $findMenu->name = $menuNames[$key];
                $findMenu->url = $menuUrls[$key];
                $findMenu->save();
            }
        }

        return redirect()->back()->with('success', 'Footer content updated successfully');
    }
    // footerMenuIcons
    public function footerMenuIcons(Request $request)
    {
        $menuUrls = $request->menuUrls;
        $menuIds = $request->menuIds;
        foreach ($menuIds as $key => $id) {
            $findMenu = WebFooter::find($id);
            if ($findMenu) {
                $findMenu->url = $menuUrls[$key];
                $findMenu->save();
            }
        }

        return redirect()->back()->with('success', 'Footer content updated successfully');
    }

    // // loginSignupPost
    // public function loginSignupPost(Request $request)
    // {
    //     $data = $request->all();
    //     $oldFile = WebSiteContent::first();

    //     if (!empty($request->file('lnsp_bmin_1'))) {
    //         // remove old file
    //         if (!empty($oldFile['lnsp_bmin_1']) && file_exists(public_path($oldFile['lnsp_bmin_1']))) {
    //             unlink(public_path($oldFile['lnsp_bmin_1']));
    //         }
    //         // add new file
    //         $file = $request->file('lnsp_bmin_1');
    //         $fileName1 = '/uploads/web/' . time() . '_' . $file->getClientOriginalName();
    //         $file->move(public_path('uploads/web'), $fileName1);
    //     } else {
    //         $fileName1 = $oldFile['lnsp_bmin_1'];
    //     }

    //     if (!empty($request->file('lnsp_bmin_2'))) {
    //         // remove old file
    //         if (!empty($oldFile['lnsp_bmin_2']) && file_exists(public_path($oldFile['lnsp_bmin_2']))) {
    //             unlink(public_path($oldFile['lnsp_bmin_2']));
    //         }
    //         // add new file
    //         $file = $request->file('lnsp_bmin_2');
    //         $fileName2 = '/uploads/web/' . time() . '_' . $file->getClientOriginalName();
    //         $file->move(public_path('uploads/web'), $fileName2);
    //     } else {
    //         $fileName2 = $oldFile['lnsp_bmin_2'];
    //     }

    //     if (!empty($request->file('lnsp_bmin_3'))) {
    //         // remove old file
    //         if (!empty($oldFile['lnsp_bmin_3']) && file_exists(public_path($oldFile['lnsp_bmin_3']))) {
    //             unlink(public_path($oldFile['lnsp_bmin_3']));
    //         }
    //         // add new file
    //         $file = $request->file('lnsp_bmin_3');
    //         $fileName3 = '/uploads/web/' . time() . '_' . $file->getClientOriginalName();
    //         $file->move(public_path('uploads/web'), $fileName3);
    //     } else {
    //         $fileName3 = $oldFile['lnsp_bmin_3'];
    //     }

    //     if (!empty($request->file('lnsp_bmin_4'))) {
    //         // remove old file
    //         if (!empty($oldFile['lnsp_bmin_4']) && file_exists(public_path($oldFile['lnsp_bmin_4']))) {
    //             unlink(public_path($oldFile['lnsp_bmin_4']));
    //         }
    //         // add new file
    //         $file = $request->file('lnsp_bmin_4');
    //         $fileName4 = '/uploads/web/' . time() . '_' . $file->getClientOriginalName();
    //         $file->move(public_path('uploads/web'), $fileName4);
    //     } else {
    //         $fileName4 = $oldFile['lnsp_bmin_4'];
    //     }

    //     if (!empty($request->file('lnsp_bmin_5'))) {
    //         // remove old file
    //         if (!empty($oldFile['lnsp_bmin_5']) && file_exists(public_path($oldFile['lnsp_bmin_5']))) {
    //             unlink(public_path($oldFile['lnsp_bmin_5']));
    //         }
    //         // add new file
    //         $file = $request->file('lnsp_bmin_5');
    //         $fileName5 = '/uploads/web/' . time() . '_' . $file->getClientOriginalName();
    //         $file->move(public_path('uploads/web'), $fileName5);
    //     } else {
    //         $fileName5 = $oldFile['lnsp_bmin_5'];
    //     }


    //     $siteContent = WebSiteContent::first();

    //     $siteContent->lnsp_bmin_1 = $fileName1;
    //     $siteContent->lnsp_bminl_1 = $data['lnsp_bminl_1'];
    //     $siteContent->lnsp_bmin_2 = $fileName2;
    //     $siteContent->lnsp_bminl_2 = $data['lnsp_bminl_2'];
    //     $siteContent->lnsp_bmin_3 = $fileName3;
    //     $siteContent->lnsp_bminl_3 = $data['lnsp_bminl_3'];
    //     $siteContent->lnsp_bmin_4 = $fileName4;
    //     $siteContent->lnsp_bminl_4 = $data['lnsp_bminl_4'];
    //     $siteContent->lnsp_bmin_5 = $fileName5;
    //     $siteContent->lnsp_bminl_5 = $data['lnsp_bminl_5'];

    //     $siteContent->save();
    //     return redirect()->back()->with('success', 'Site icons updated successfully');
    // }

    // =====================================
    // loginSignupPost
    public function loginSignupPost(Request $request)
    {
        $data = $request->all();
        $oldFile = WebSiteContent::first();

        if (!empty($request->file('lnsp_bmin_1'))) {
            // remove old file
            if (!empty($oldFile['lnsp_bmin_1']) && file_exists(public_path($oldFile['lnsp_bmin_1']))) {
                unlink(public_path($oldFile['lnsp_bmin_1']));
            }
            // add new file
            $file = $request->file('lnsp_bmin_1');
            $fileName1 = '/uploads/web/' . time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/web'), $fileName1);
        } else {
            $fileName1 = $oldFile['lnsp_bmin_1'];
        }

        if (!empty($request->file('lnsp_bmin_2'))) {
            // remove old file
            if (!empty($oldFile['lnsp_bmin_2']) && file_exists(public_path($oldFile['lnsp_bmin_2']))) {
                unlink(public_path($oldFile['lnsp_bmin_2']));
            }
            // add new file
            $file = $request->file('lnsp_bmin_2');
            $fileName2 = '/uploads/web/' . time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/web'), $fileName2);
        } else {
            $fileName2 = $oldFile['lnsp_bmin_2'];
        }

        if (!empty($request->file('lnsp_bmin_3'))) {
            // remove old file
            if (!empty($oldFile['lnsp_bmin_3']) && file_exists(public_path($oldFile['lnsp_bmin_3']))) {
                unlink(public_path($oldFile['lnsp_bmin_3']));
            }
            // add new file
            $file = $request->file('lnsp_bmin_3');
            $fileName3 = '/uploads/web/' . time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/web'), $fileName3);
        } else {
            $fileName3 = $oldFile['lnsp_bmin_3'];
        }

        if (!empty($request->file('lnsp_bmin_4'))) {
            // remove old file
            if (!empty($oldFile['lnsp_bmin_4']) && file_exists(public_path($oldFile['lnsp_bmin_4']))) {
                unlink(public_path($oldFile['lnsp_bmin_4']));
            }
            // add new file
            $file = $request->file('lnsp_bmin_4');
            $fileName4 = '/uploads/web/' . time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/web'), $fileName4);
        } else {
            $fileName4 = $oldFile['lnsp_bmin_4'];
        }

        if (!empty($request->file('lnsp_bmin_5'))) {
            // remove old file
            if (!empty($oldFile['lnsp_bmin_5']) && file_exists(public_path($oldFile['lnsp_bmin_5']))) {
                unlink(public_path($oldFile['lnsp_bmin_5']));
            }
            // add new file
            $file = $request->file('lnsp_bmin_5');
            $fileName5 = '/uploads/web/' . time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/web'), $fileName5);
        } else {
            $fileName5 = $oldFile['lnsp_bmin_5'];
        }


        $siteContent = WebSiteContent::first();

        $siteContent->lnsp_bmin_1 = $fileName1;
        $siteContent->lnsp_bminl_1 = $data['lnsp_bminl_1'];
        $siteContent->lnsp_bmin_2 = $fileName2;
        $siteContent->lnsp_bminl_2 = $data['lnsp_bminl_2'];
        $siteContent->lnsp_bmin_3 = $fileName3;
        $siteContent->lnsp_bminl_3 = $data['lnsp_bminl_3'];
        $siteContent->lnsp_bmin_4 = $fileName4;
        $siteContent->lnsp_bminl_4 = $data['lnsp_bminl_4'];
        $siteContent->lnsp_bmin_5 = $fileName5;
        $siteContent->lnsp_bminl_5 = $data['lnsp_bminl_5'];

        $siteContent->save();
        return redirect()->back()->with('success', 'Site icons updated successfully');
    }
}
