<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function index()
    {
        $student = auth('student')->user();
        $notices = Notice::orderBy('status','Asc')->orderBy('id','desc')->where('student_id',$student->id)->get();

        return view('dashboard.student..notices.index', compact('notices'));
    }

    public function create()
    {   
        return view('dashboard.student.notices.create');
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
            'message' => $request->message,
            
        ]);

        return response()->json(['status'=>true,'message' => 'Notice created successfully', 'url' => route('student.notices.show',$notice->id)]);
    }

    public function show($id)
    {
        $student = auth('student')->user();
        $notice = Notice::where('student_id',$student->id)->findOrFail($id);
        return view('dashboard.student.notices.show', compact('notice'));
    }

    public function reply($id)
    {
        $notice = Notice::where('status','active')->find($id);
        if(!$notice){
            return redirect()->route('student.notices.show', $id);
        }
        $student = $notice->student;
        return view('dashboard.student.notices.reply', compact('notice', 'student'));
    }

    public function send(Request $request)
    {
        $request->validate([
            'notice_id' => 'required',
            'message' => 'required',
        ]);

        $notice = Notice::find($request->notice_id);
        $notice->save();
        
        $notice->messages()->create([
            'notice_id' => $notice->id,
            'student_id' => $notice->student_id,
            'message' => $request->message,
        ]);

        return response()->json(['status'=>true,'message' => 'Message sent successfully', 'url' => route('student.notices.show',$notice->id)]);
    }
}
