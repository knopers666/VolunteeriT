<?php
/**
 * Created by PhpStorm.
 * User: Denis
 * Date: 28.10.2017
 * Time: 14:35
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

class UserController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $users = User::all();
        return View::make("user.index")->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //return View::make("user.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $rules = array(
            'name'       => 'required|unique:users|max:255',
            'location'      => 'required',
            'date' => 'required',
            'description' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('event/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $date =  DateTime::createFromFormat('d/m/Y', Input::get('date'))->format('Y-m-d');
            $event = new \App\Event();
            $event->name       = Input::get('name');
            $event->location      = Input::get('location');
            $event->date = $date;
            $event->description = Input::get('description');
            $event->save();

            // redirect
            Session::flash('message', 'Sukces stworzyłeś event!');
            return Redirect::to('event');
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
        $event = Event::find($id);
        return View::make("events.view")->with('event', $event);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $event = Event::find($id);
        return View::make("events.edit")->with('event', $event);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $rules = array(
            'name'       => 'required|unique:posts|max:255',
            'location'      => 'required',
            'date' => 'required',
            'description' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('event/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $date =  DateTime::createFromFormat('d/m/Y', Input::get('date'))->format('Y-m-d');
            $event = \App\Event()::find($id);
            $event->name       = Input::get('name');
            $event->location      = Input::get('location');
            $event->date = $date;
            $event->description = Input::get('description');
            $event->save();

            // redirect
            Session::flash('message', 'Sukces uaktułalniłeść event!');
            return Redirect::to('event');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        // delete
        $event = Event::find($id);
        $event->delete();
        Session::flash('message', 'Successfully deleted the event!');
        return Redirect::to('events');
    }

}