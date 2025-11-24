<?php

namespace App\Http\Controllers;

use App\Models\Debt;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use \Yajra\Datatables\Datatables;

class DebtSettlementController extends Controller
{
    public function index(Request $request): View|JsonResponse
    {
        if ($request->ajax()) {
            $data = Debt::select('id', 'slug', 'name', 'phone', 'email', 'client_status')->where('type', 2);
            return Datatables::of($data)
                ->addColumn('action', function ($row) {
                    $btn = '<a class="btn btn-sm btn-primary" href="' . route('report.debt-settlement-details', $row->slug) . '">Details</a>';
                    return $btn;
                })
                ->addColumn('client_status', function ($row) {
                    if ($row->client_status === 'individual') {
                        return '<span class="badge text-bg-primary">Individual</span>';
                    } else {
                        return '<span class="badge text-bg-success">Corporate</span>';
                    }
                })
                ->rawColumns(['action', 'client_status'])
                ->make(true);
        }

        return view('report.debt-settlement');
    }

    public function details(Request $request, $slug): View|RedirectResponse
    {
        $data = Debt::firstWhere('slug', $slug);
        if (!$data) return to_route('report.debt-settlement')->withError('URL not Valid.');

        return view('report.debt-settlement-details', compact('data'));
    }
}
