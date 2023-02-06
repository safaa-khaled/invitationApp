<?php

namespace App\Http\Controllers;

use App\Models\Invited;
use App\Models\PersonClass;
use App\Models\Title;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class InvitedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inviteds = Invited::all();
        return view('admin.inviteds.index',compact('inviteds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $titles= Title::all();
        $personClasses= PersonClass::all();
        return view('admin.inviteds.create',compact('titles','personClasses'));
    }

    /*
'title1', 'title2', 'fullname', 'mobile_no', 'email', 'password', 'email_other', 'organization',
        'position', 'qrcode', 'attendance', 'employee_id', 'person_class_id', 'seat_id', 'notify_by_email', 'notify_by_whatsup',
        'is_attended', 'req_status', 'invitation_type', 'invitation_lang', 'in_or_out',


    */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $invited = new Invited();
        $invited->title1 = $request->title1;
        $invited->title2 = $request->title2;
        $invited->fullname = $request->fullname;
        $invited->mobile_no = $request->mobile_no;
        $invited->email = $request->email;
        $invited->password = Hash::make('12345678');
        $invited->email_other = $request->email_other;
        $invited->organization = $request->organization;
        $invited->position = $request->position;
        $invited->qrcode = null;
        $invited->attendance = $request->attendance;
        $invited->employee_id = 1;
        $invited->person_class_id = $request->person_class;
        $invited->seat_id = null;
        $invited->notify_by_email = $request->notify_by_email;
        $invited->notify_by_whatsup = $request->notify_by_whatsup;
        $invited->is_attended = null;
        $invited->req_status = null;
        $invited->invitation_type = 'invitation';
        $invited->invitation_lang = $request->invitation_lang;
        $invited->in_or_out = null;
       
        $invited->save();

        if ($invited->save()) {
            Alert::success('Success','Invited sended Successfully');
            return redirect()->route('inviteds.index');
        } else {
            Alert::error('Error','Problem While Saving, Please Try Again');
        }
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Invited  $invited
     * @return \Illuminate\Http\Response
     */
    public function show(Invited $invited)
    {
        return view('admin.inviteds.show',compact('invited'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Invited  $invited
     * @return \Illuminate\Http\Response
     */
    public function edit(Invited $invited)
    {
        $titles= Title::all();
        $personClasses= PersonClass::all();
        return view('admin.inviteds.edit',compact('invited','titles','personClasses'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Invited  $invited
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Invited $invited)
    {
        $invited = Invited::findOrFail($invited->id);
        $invited->title1 = $request->title1;
        $invited->title2 = $request->title2;
        $invited->fullname = $request->fullname;
        $invited->mobile_no = $request->mobile_no;
        $invited->email = $request->email;
        $invited->password = Hash::make('12345678');
        $invited->email_other = $request->email_other;
        $invited->organization = $request->organization;
        $invited->position = $request->position;
        $invited->qrcode = null;
        $invited->attendance = $request->attendance;
        $invited->employee_id = 1;
        $invited->person_class_id = $request->person_class;
        $invited->seat_id = null;
        $invited->notify_by_email = $request->notify_by_email;
        $invited->notify_by_whatsup = $request->notify_by_whatsup;
        $invited->is_attended = null;
        $invited->req_status = null;
        $invited->invitation_lang = $request->invitation_lang;
        $invited->in_or_out = null;
       
        $invited->save();

        if ($invited->save()) {
            Alert::success('Success','Invited Info updated Successfully');
            return redirect()->route('inviteds.index');
        } else {
            Alert::error('Error','Problem While Saving, Please Try Again');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invited  $invited
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invited $invited)
    {
        $invited=Invited::find($invited->id);
        if ($invited->delete()) {
            Alert::success('Success','Invited Deleted Successfully');
            return redirect()->route('inviteds.index');
        } else {
            Alert::error('Error','Problem While Deleting, Please Try Again');
        }
    }
}
