<?php

namespace App\Http\Controllers;

use App\Helper\Helper;
use App\Mail\ContactEmail;
use App\Models\Contact;
use App\Models\Debt;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\View\View;

class FrontController extends Controller
{
    public function contactUs(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'first_name'    => ['required', 'string', 'min:2', 'max:50'],
            'last_name'     => ['required', 'string', 'min:2', 'max:50'],
            'email'         => ['required', 'string', 'min:2', 'max:50', 'email'],
            'message'       => ['required', 'string', 'min:10', 'max:1000']
        ], [
            'first_name.required'   => 'The first name field is required.',
            'first_name.string'     => 'The first name must be a string.',
            'first_name.max'        => 'The first name may not be greater than 255 characters.',

            'last_name.required'    => 'The last name field is required.',
            'last_name.string'      => 'The last name must be a string.',
            'last_name.max'         => 'The last name may not be greater than 255 characters.',

            'email.required'        => 'The email field is required.',
            'email.email'           => 'Please enter a valid email address.',
            'email.max'             => 'The email may not be greater than 255 characters.',

            'message.required'      => 'The message field is required.',
            'message.string'        => 'The message must be a string.',
            'message.min'           => 'The message must be at least 10 characters.',
            'message.max'           => 'The message may not be greater than 1000 characters.'
        ]);

        $contact = Contact::create($data);
        try {
            Mail::send(new ContactEmail($contact));
        } catch (\Throwable $th) {
        }

        return back()->withSuccess('Enquery submitted successfully..!!');
    }

    public function debtRestructuring(Request $request): RedirectResponse
    {
        $messages = [
            'creditor.required' => 'At least one creditor is required.',
            'creditor.array' => 'Creditor data must be in array format.',
            'creditor.min' => 'At least one creditor is required.',

            'creditor.*.name.required' => 'Creditor name is required.',
            'creditor.*.name.string' => 'Creditor name must be a valid text.',
            'creditor.*.name.max' => 'Creditor name may not be greater than 255 characters.',

            'creditor.*.amount_outstanding.required' => 'Amount outstanding is required.',
            'creditor.*.amount_outstanding.numeric' => 'Amount outstanding must be a number.',
            'creditor.*.amount_outstanding.min' => 'Amount outstanding must be at least 0.',

            'creditor.*.phone.string' => 'Phone number must be valid.',
            'creditor.*.phone.max' => 'Phone number may not be greater than 20 characters.',

            'creditor.*.email.email' => 'Please enter a valid email address.',
            'creditor.*.email.max' => 'Email may not be greater than 255 characters.',

            'creditor.*.person_name.string' => 'Contact person name must be valid.',
            'creditor.*.person_name.max' => 'Contact person name may not be greater than 255 characters.',

            'creditor.*.last_payment.date' => 'Please enter a valid date.',
            'creditor.*.last_payment.before_or_equal' => 'Last payment date cannot be in the future.',

            'creditor.*.emi_per_month.numeric' => 'EMI per month must be a number.',
            'creditor.*.emi_per_month.min' => 'EMI per month must be at least 0.',

            'creditor.*.cheque_value.numeric' => 'Cheque value must be a number.',
            'creditor.*.cheque_value.min' => 'Cheque value must be at least 0.',

            'creditor.*.type_of_debt.required' => 'Type of debt is required.',
            'creditor.*.type_of_debt.in' => 'Please select a valid type of debt.',
        ];

        $data = $request->validate([
            "type"                              => ['required', 'integer', 'in:1,2'],
            "name"                              => ['required', 'string', 'min:2', 'max:100'],
            "email"                             => ['required', 'string', 'min:2', 'max:50', 'email'],
            "phone"                             => ['required', 'string', 'min:8', 'max:15',],
            "active_criminal_case"              => ['boolean'],
            "active_civil_case"                 => ['boolean'],
            "criminal_case_description"         => ['nullable', 'string', 'max:1000'],
            "civil_case_description"            => ['nullable', 'string', 'max:1000'],
            "currently_in_country"              => ['boolean'],
            "valid_passport"                    => ['boolean'],
            "creditor"                          => ['required'],
            "client_status"                     => ['required', 'string', 'in:individual,corporate'],
            "timelineRequirement"               => ['required', 'string'],
            "settlement_upload_emirates_front"  => ['file', 'mimetypes:image/jpeg,image/png,application/pdf'],
            "settlement_upload_emirates_back"   => ['file', 'mimetypes:image/jpeg,image/png,application/pdf'],
            "settlement_upload_passport"        => ['file', 'mimetypes:image/jpeg,image/png,application/pdf'],
            "settlement_upload_license"         => ['file', 'mimetypes:image/jpeg,image/png,application/pdf'],
            "settlement_upload_ejari"           => ['file', 'mimetypes:image/jpeg,image/png,application/pdf'],
            'creditor'                          => ['required', 'array', 'min:1'],
            'creditor.*.name'                   => ['required', 'string', 'max:100'],
            'creditor.*.amount_outstanding'     => ['required', 'numeric', 'min:0'],
            'creditor.*.phone'                  => ['nullable', 'string', 'max:20'],
            'creditor.*.email'                  => ['nullable', 'email', 'max:255'],
            'creditor.*.person_name'            => ['nullable', 'string', 'max:255'],
            'creditor.*.last_payment'           => ['nullable', 'date', 'before_or_equal:today'],
            'creditor.*.emi_per_month'          => ['required', 'numeric', 'min:0'],
            'creditor.*.cheque_value'           => ['required', 'numeric', 'min:0'],
            'creditor.*.minimum_amount'         => ['nullable', 'numeric', 'min:0'],
            'creditor.*.maximum_amount'         => ['nullable', 'numeric', 'min:0'],
            'creditor.*.type_of_debt'           => ['required', 'in:credit-card,personal-loan,business-loan,vehicle-loan,housing-loan,other'],
        ], $messages);

        $data['slug'] = Str::uuid();
        if ($request->file('settlement_upload_emirates_front')) $data['settlement_upload_emirates_front']   = Helper::saveFile($request->file('settlement_upload_emirates_front'), 'debt');
        if ($request->file('settlement_upload_emirates_back'))  $data['settlement_upload_emirates_back']    = Helper::saveFile($request->file('settlement_upload_emirates_back'), 'debt');
        if ($request->file('settlement_upload_passport'))       $data['settlement_upload_passport']         = Helper::saveFile($request->file('settlement_upload_passport'), 'debt');
        if ($request->file('settlement_upload_license'))        $data['settlement_upload_license']          = Helper::saveFile($request->file('settlement_upload_license'), 'debt');
        if ($request->file('settlement_upload_ejari'))          $data['settlement_upload_ejari']            = Helper::saveFile($request->file('settlement_upload_ejari'), 'debt');

        $debt = Debt::create($data);
        return to_route('checkout', $debt->slug)->withSuccess('Enquery submitted successfully..!!');
    }

    public function checkout(Request $request, $token): RedirectResponse| View
    {
        $data = Debt::firstWhere('slug', $token);
        if (!$data) return to_route('home')->withError('Invalid url..!!');

        return view('front.checkout', compact('data'));
    }
}
