<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AccountType;
use App\Models\Country;
use App\Models\State;
use App\Models\Rider;

class HomeController extends Controller
{
    public function authRegister()
    {
        $countries = Country::all();
        $states = State::all();

        return view('auth.register')->with([
            'countries' => $countries,
            'states' => $states
        ]);
    }

    /*
    * Dashboard Pages Routs
    */
    public function index(Request $request)
    {
        $countries = Country::all();
        $states = State::all();

        return view('dashboards.dashboard')->with([
            'countries' => $countries,
            'states' => $states
        ]);
    }







    public function campaigns(Request $request)
    {
        return view('dashboards.campaigns');
    }
    public function createcampaigns(Request $request)
    {
        return view('dashboards.create-campaigns');
    }
    public function activity(Request $request)
    {
        return view('dashboards.activity');
    }
    public function integration(Request $request)
    {
        return view('dashboards.integration');
    }
    public function templates(Request $request)
    {
        return view('dashboards.templates');
    }

    public function contacts(Request $request)
    {
        return view('dashboards.contacts');
    }
    public function forms(Request $request)
    {
        return view('dashboards.forms');
    }
    public function create(Request $request)
    {
        return view('dashboards.create');
    }
    public function createtemplate(Request $request)
    {
        return view('dashboards.create templates');
    }
    





    public function analytics(Request $request)
    {

        return view('dashboards.analytics');
    }
    public function templates1(Request $request)
    {

        return view('dashboards.templates1');
    }


    //setting
    public function setting(Request $request)
    {
        return view('dashboards.setting');
    }
    public function account(Request $request)
    {
        return view('dashboards.account');
    }

    /*
     * Auth pages Routs
     */

     function authLogin()
    {
    return view('auth.login');
    }

    
    function authRecoverPassword()
    {
        return view('auth.forgot-password');
    }

    function authConfirmEmail()
    {
        return view('auth.verify-email');
    }

    function authLockScreen()
    {
        return view('auth.lock-screen');
    }

    
//     /*
//      * Form Page Routs
//      */
//     public function FormsRadio()
//     {
//         return view('forms.radio');
//     }

//     public function FormsLayout()
//     {
//         return view('forms.layout');
//     }

//     public function FormsSelect()
//     {
//         return view('forms.select');
//     }

//     public function FormsSwitch()
//     {
//         return view('forms.switch');
//     }

//     public function FormsCheckbox()
//     {
//         return view('forms.checkbox');
//     }

//     public function FormsTextarea()
//     {
//         return view('forms.textarea');
//     }

//     public function FormsValidation()
//     {
//         return view('forms.validation');
//     }

//     public function FormsInputgroup()
//     {
//         return view('forms.inputgroup');
//     }

//     /*
//      * UI Page Routs
//      */

//     public function UiGrid()
//     {
//         return view('otherPages.ui.grid');
//     }

//     public function UiTabs()
//     {
//         return view('otherPages.ui.tabs');
//     }

//     public function UiCards()
//     {
//         return view('otherPages.ui.cards');
//     }

//     public function UiModal()
//     {
//         return view('otherPages.ui.modal');
//     }

//     public function UiAlerts()
//     {
//         return view('otherPages.ui.alerts');
//     }

//     public function UiBadges()
//     {
//         return view('otherPages.ui.badges');
//     }

//     public function UiColors()
//     {
//         return view('otherPages.ui.colors');
//     }

//     public function UiImages()
//     {
//         return view('otherPages.ui.images');
//     }

//     public function UiAvatars()
//     {
//         return view('otherPages.ui.avatars');
//     }

//     public function UiButtons()
//     {
//         return view('otherPages.ui.buttons');
//     }

//     public function UiCarousel()
//     {
//         return view('otherPages.ui.carousel');
//     }

//     public function UiPopovers()
//     {
//         return view('otherPages.ui.popovers');
//     }

//     public function UiTooltips()
//     {
//         return view('otherPages.ui.tooltips');
//     }

//     public function UiBoxshadows()
//     {
//         return view('otherPages.ui.boxshadows');
//     }

//     public function UiHelperClass()
//     {
//         return view('otherPages.ui.helperclass');
//     }

//     public function UiBreadcrumb()
//     {
//         return view('otherPages.ui.breadcrumb');
//     }

//     public function UiListgroup()
//     {
//         return view('otherPages.ui.listgroup');
//     }

//     public function UiPagination()
//     {
//         return view('otherPages.ui.pagination');
//     }

//     public function UiTypography()
//     {
//         return view('otherPages.ui.typography');
//     }

//     public function UiMedia()
//     {
//         return view('otherPages.ui.media');
//     }

//     public function UiProgressbars()
//     {
//         return view('otherPages.ui.progressbars');
//     }

//     public function UiButtongroup()
//     {
//         return view('otherPages.ui.buttongroup');
//     }
//     public function UiNotification()
//     {
//         return view('otherPages.ui.notification');
//     }

//     public function UiVideo()
//     {
//         return view('otherPages.ui.video');
//     }

//      /*
//      * App Page Routs
//      */

    public function Userprofile()
    {
        $auth_user = auth()->user()->information;
        $countries = Country::all();
        $states = State::all();
        return view('otherPages.userdetails.userprofile')->with([
            'user' => $auth_user,
            'countries' => $countries,
            'states' => $states,
        ]);
    }

//     public function Useradd()
//     {
//         return view('otherPages.userdetails.useradd');
//     }

//     public function Userlist()
//     {
//         return view('otherPages.userdetails.userlist');
//     }
    
//     public function userProfileEdit()
//     {
//         return view('otherPages.userdetails.userprofileedit');
//     }

//     public function PrivacyPolicy()
//     {
//         return view('otherPages.userdetails.privacypolicy');
//     }

//     public function TermsOfUse()
//     {
//         return view('otherPages.userdetails.termsofuse');
//     }

//     /*
//      * Error Page Routs
//      */

//     public function Error404()
//     {
//         return view('otherPages.pageError.error404');
//     }

//     public function Error500()
//     {
//         return view('otherPages.pageError.error500');
//     }

    
//     /*
//      * Timeline Page Routs
//      */

//     public function Pricing1()
//     {
//         return view('otherPages.pricing.pricing1');
//     }

//     public function Pricing2()
//     {
//         return view('otherPages.pricing.pricing2');
//     }

//     /*
//      * Extra Page Routs
//      */

//     public function timeline()
//     {
//         return view('timeline');
//     }

//     public function BlankPages()
//     {
//         return view('otherPages.blankpage');
//     }

//     public function Maintenance()
//     {
//         return view('otherPages.maintenance');
//     }


//     /*
//      * Table Page Routs
//      */

//     public function tableBasics()
//     {
//         return view('otherPages.table.tablebasics');
//     }

//     public function tableData()
//     {
//         return view('otherPages.table.tabledata');
//     }
//     public function tableEdit()
//     {
//         return view('otherPages.table.tableedit');
//     }

//     public function tableTree()
//     {
//         return view('otherPages.table.tabletree');
//     }
    
//     //invoice
//     public function invoice(Request $request)
//     {
//         return view('otherPages.invoice');
//     }

   



}

