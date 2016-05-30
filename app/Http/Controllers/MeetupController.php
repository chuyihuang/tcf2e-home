<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Meetup;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class MeetupController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $meetups = Meetup::latest('published_at')->get();

        return view('dashboard.meetups.index', compact('meetups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('dashboard.meetups.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \App\Http\Controllers\Response
     */
    public function store(Request $request)
    {
        $request = $this->uploadFile($request);

        Meetup::create($request->all());

        return redirect('dashboard/meetups');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Meetup $meetup
     * @return \App\Http\Controllers\Response
     * @internal param int $id
     */
    public function edit(Meetup $meetup)
    {
        return view('dashboard.meetups.edit', compact('meetup'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Meetup              $meetup
     * @param \Illuminate\Http\Request $request
     * @return \App\Http\Controllers\Response
     * @internal param int $id
     */
    public function update(Meetup $meetup, Request $request)
    {

        if ($request->hasFile('image')) {
            $this->deleteFile($meetup);
            $request = $this->uploadFile($request);
        }

        $meetup->update($request->all());

        return redirect('dashboard/meetups');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Meetup $meetup
     * @return \App\Http\Controllers\Response
     * @throws \Exception
     * @internal param int $id
     */
    public function destroy(Meetup $meetup)
    {
        $this->deleteFile($meetup);
        $meetup->delete();

        return redirect('dashboard/meetups');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Request
     */
    private function uploadFile(Request $request)
    {
        $file = $request->file('image');

        if ($file->isValid()) {
            $filename = str_random(10) . '.jpg';
            $file->move(public_path('assets/img/meetup'), $filename);
            $request->merge(['image_path' => $filename]);
        }

        return $request;
    }

    /**
     * @param \App\Meetup $meetup
     */
    private function deleteFile(Meetup $meetup)
    {
        File::delete(public_path() . $meetup->image_path);
    }
}
