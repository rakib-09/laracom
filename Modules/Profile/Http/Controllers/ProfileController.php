<?php

namespace Modules\Profile\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\User;
use Auth;
use Hash;
use Modules\Profile\Entities\Userinfo;
use Modules\Payment\Entities\Invoice;
use Modules\Payment\Repositories\InvoiceRepository;
use Modules\Payment\Repositories\OrderRepository;

class ProfileController extends Controller
{
    private $invoice, $order;

    function __construct(InvoiceRepository $invoice, OrderRepository $order)
    {
        $this->invoice = $invoice;
        $this->order = $order;
    }
    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        $userInformation = User::find(auth()->id());
        $userInvoices = $this->invoice->getAllById(auth()->id());
        return view('profile::index', compact('userInformation','userInvoices'));
    }

    public function order()
    {
        $invoice_id = $_POST['id'];
        $details =  $this->order->getAllById($invoice_id);

        return $details;

    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit(Request $request)
    {
        $updateInfo = Userinfo::where('email', auth()->user()->email)->update([
            'user_id' => auth()->id(),
            'phone' => $request->input('phone'),
            'dob' => $request->input('dob'),
            'address' => $request->input('address'),
            'city' => $request->input('city'),
            'country' => $request->input('country'),
            'postalcode' => $request->input('postalcode'),
            'updated_at' => \Carbon\Carbon::now('Asia/Dhaka')
        ]);
        return redirect('/profile/profileinfo');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }

    public function passwordChange()
    {
        $User = User::find(Auth::user()->id);
        if(Hash::check($_POST['old_password'], $User['password'])){
            $User->password = bcrypt($_POST['new_password']);
            $User->save();
            session()->flash('passwordChangeStatusYes', "Password Changed Sucessfully.");
            return redirect()->back();
        }
        else {
            session()->flash('passwordChangeStatusNo', "Old Password Does Not Match.");
            return redirect()->back();
        }
    }
}
