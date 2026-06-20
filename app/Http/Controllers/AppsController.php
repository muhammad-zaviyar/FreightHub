<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppsController extends Controller
{
    public function full_calendar()
    {
        return view('pages.apps.full-calendar');
    }

    public function gallery()
    {
        return view('pages.apps.gallery');
    }

    public function sweet_alerts()
    {
        return view('pages.apps.sweet-alerts');
    }

    public function projects_create()
    {
        return view('pages.apps.projects.projects-create');
    }

    public function projects_list()
    {
        return view('pages.apps.projects.projects-list');
    }

    public function projects_overview()
    {
        return view('pages.apps.projects.projects-overview');
    }

    public function task_details()
    {
        return view('pages.apps.task.task-details');
    }

    public function task_kanban_board()
    {
        return view('pages.apps.task.task-kanban-board');
    }

    public function task_list_view()
    {
        return view('pages.apps.task.task-list-view');
    }

    public function job_candidate_details()
    {
        return view('pages.apps.jobs.job-candidate-details');
    }
    
    public function job_candidate_search()
    {
        return view('pages.apps.jobs.job-candidate-search');
    }
    
    public function job_company_search()
    {
        return view('pages.apps.jobs.job-company-search');
    }

    public function job_details()
    {
        return view('pages.apps.jobs.job-details');
    }
    
    public function job_post()
    {
        return view('pages.apps.jobs.job-post');
    }
    
    public function job_search()
    {
        return view('pages.apps.jobs.job-search');
    }
    
    public function job_list()
    {
        return view('pages.apps.jobs.job-list');
    }
    
    public function nft_create()
    {
        return view('pages.apps.nft.nft-create');
    }
    
    public function nft_details()
    {
        return view('pages.apps.nft.nft-details');
    }
    
    public function nft_live_auction()
    {
        return view('pages.apps.nft.nft-live-auction');
    }
    
    public function nft_marketplace()
    {
        return view('pages.apps.nft.nft-marketplace');
    }

    public function nft_wallet_integration()
    {
        return view('pages.apps.nft.nft-wallet-integration');
    }

    public function crm_companies()
    {
        return view('pages.apps.crm.crm-companies');
    }

    public function crm_contacts()
    {
        return view('pages.apps.crm.crm-contacts');
    }

    public function crm_deals()
    {
        return view('pages.apps.crm.crm-deals');
    }

    public function crm_leads()
    {
        return view('pages.apps.crm.crm-leads');
    }

    public function crypto_buy_sell()
    {
        return view('pages.apps.crypto.crypto-buy-sell');
    }

    public function crypto_currency_exchange()
    {
        return view('pages.apps.crypto.crypto-currency-exchange');
    }

    public function crypto_marketcap()
    {
        return view('pages.apps.crypto.crypto-marketcap');
    }

    public function crypto_transactions()
    {
        return view('pages.apps.crypto.crypto-transactions');
    }

    public function crypto_wallet()
    {
        return view('pages.apps.crypto.crypto-wallet');
    }
        
}