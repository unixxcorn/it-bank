<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events;
use App\Statement;
class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('form.event.new');
    }

    public function store(Request $request)
    {
        $data = $this->validate(request(), [
            'event' => 'required',
            'description' => '',
            'money' => 'required|integer',
            'deadline' => 'required|date',
            'is_expend' => 'required|boolean',
        ]);
        Events::create($data); 
        return redirect(route('home'));
    }

    public function update(Request $request)
    {
        $data = $this->validate(request(), [
            'id'    => 'required|integer',
            'event' => 'required',
            'description' => '',
            'money' => 'required|integer',
            'deadline' => 'required|date',
            'is_expend' => 'required|boolean',
        ]);
        $edit = Events::where('id', $data['id'])
                    ->update([
                        'event'     => $data['event'],
                        'description' => $data['description'],
                        'money'     => $data['money'],
                        'deadline'  => $data['deadline'],
                        'is_expend' => $data['is_expend']
                    ]);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $data = $this->validate(request(), [
            'id'    => 'required|integer',
        ]);
        Events::where('id', $data['id'])->delete();
        return redirect(route('home'));
    }

    public function payformepayforme(Request $request)
    {
        $data = $this->validate(request(), [
            'uid' => 'required|integer',
            'money' => 'required|integer',
        ]);
        Statement::create($data); 
        return back();
    }
}
