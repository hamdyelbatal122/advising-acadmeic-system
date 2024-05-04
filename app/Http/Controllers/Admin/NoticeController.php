<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use App\Models\Student;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    

    public function index()
    {
        $notices = Notice::orderBy('id','desc')->orderBy('status','Asc')->get();

        return view('dashboard.admin.notices.index', compact('notices'));
    }

    public function create()
    {
        $students = Student::all();
        return view('dashboard.admin.notices.create', compact('students'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required',
            'title' => 'required',
            'subject' => 'required',
            'message' => 'required',
            
        ]);

        $notice = new Notice();
        $notice->student_id = $request->student_id;
        $notice->title = $request->title;
        $notice->subject = $request->subject;
        $notice->status = 'active';
        $notice->save();

        $notice->messages()->create([
            'notice_id' => $notice->id,
            'student_id' => $request->student_id,
            'admin_id' => auth('admin')->id(),
            'message' => $request->message,
            
        ]);

        return response()->json(['status'=>true,'message' => 'Notice created successfully']);
    }

    public function show($id)
    {
        $notice = Notice::findOrFail($id);
        return view('dashboard.admin.notices.show', compact('notice'));
    }

    public function reply(Request $request, $id)
    {
        $notice = Notice::where('status','active')->find($id);
        $student = $notice->student;
        return view('dashboard.admin.notices.reply', compact('notice', 'student'));
    }

    public function send(Request $request)
    {
        $request->validate([
            'notice_id' => 'required',
            'message' => 'required',
            'status' => 'required|in:active,closed',
        ]);

        $notice = Notice::find($request->notice_id);
        $notice->status = $request->status;
        $notice->save();
        
        $notice->messages()->create([
            'notice_id' => $notice->id,
            'student_id' => $notice->student_id,
            'admin_id' => auth('admin')->id(),
            'message' => $request->message,
        ]);

        return response()->json(['status'=>true,'message' => 'Message sent successfully']);
    }


}
