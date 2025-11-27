<?php

namespace App\Http\Controllers;

use App\Models\Debt;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use \Yajra\Datatables\Datatables;

class DebtRestructuringController extends Controller
{
    public function index(Request $request): View|JsonResponse
    {
        if ($request->ajax()) {
            $data = Debt::select('id', 'slug', 'name', 'phone', 'email', 'country_code', 'client_status', 'created_at')->where('type', 2);
            return Datatables::of($data)
                ->addColumn('action', function ($row) {
                    $btn = '<a class="btn btn-sm btn-primary" href="' . route('report.debt-restructuring-details', $row->slug) . '">Details</a>';
                    return $btn;
                })
                ->addColumn('client_status', function ($row) {
                    if ($row->client_status === 'individual') {
                        return '<span class="badge text-bg-primary">Individual</span>';
                    } else {
                        return '<span class="badge text-bg-success">Corporate</span>';
                    }
                })
                ->editColumn('phone', function ($row) {
                    return trim($row['country_code'] . ' ' . $row['phone']) ?? 'N/A';
                })
                ->editColumn('created_at', function ($row) {
                    return $row['created_at']->format('d M, Y');
                })
                ->orderColumn('created_at', function ($query, $order) {
                    $query->orderBy('created_at', $order);
                })
                ->rawColumns(['action', 'client_status'])
                ->make(true);
        }

        return view('report.debt-restructuring');
    }

    public function details(Request $request, $slug): View|RedirectResponse
    {
        $data = Debt::firstWhere('slug', $slug);
        if (!$data) return to_route('report.debt-restructuring')->withError('URL not Valid.');

        return view('report.debt-restructuring-details', compact('data'));
    }
}
