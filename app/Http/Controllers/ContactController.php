<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use \Yajra\Datatables\Datatables;

class ContactController extends Controller
{
    public function index(Request $request): View|JsonResponse
    {
        if ($request->ajax()) {
            $data = Contact::select('id', 'first_name', 'last_name', 'email', 'message',  'country_code', 'phone', 'created_at');
            return Datatables::of($data)
                ->addColumn('full_name', function ($row) {
                    return $row->first_name . ' ' . $row->last_name;
                })
                ->addColumn('message', function ($row) {
                    return str($row->message)->limit(30);
                })
                ->addColumn('action', function ($row) {
                    $btn = '<button class="btn btn-sm btn-outline-primary message" data-message="' . $row['message'] . '">View</button>';
                    return $btn;
                })
                ->editColumn('created_at', function ($row) {
                    return $row['created_at']->format('d M, Y');
                })
                ->editColumn('phone', function ($row) {
                    return trim($row['country_code'] . ' ' . $row['phone']) ?? 'N/A';
                })
                ->orderColumn('created_at', function ($query, $order) {
                    $query->orderBy('created_at', $order);
                })
                ->rawColumns(['full_name', 'action'])
                ->make(true);
        }

        return view('report.contact');
    }
}
