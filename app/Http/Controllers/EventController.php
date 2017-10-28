<?php
/**
 * Created by PhpStorm.
 * User: Denis
 * Date: 28.10.2017
 * Time: 14:48
 */
class
    EventController extends BaseController {
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $rules = array(
            'name'       => 'required',
            'location'      => 'required',
            'date' => 'required',
            'description' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('nerds/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $event = new \App\Event();
            $event->name       = Input::get('name');
            $event->location      = Input::get('location');
            $event->date = Input::get('date');
            $event->description = Input::get('description');
            $event->save();

            // redirect
            Session::flash('message', 'Successfully created nerd!');
            return Redirect::to('');
        }
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
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}