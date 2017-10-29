<?php
/**
 * Created by PhpStorm.
 * User: Denis
 * Date: 28.10.2017
 * Time: 14:35
 */

namespace App\Http\Controllers;

use App\User;
use DateTime;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
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
            'email'      => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('user/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $user = new \App\User();
            $user->name       = Input::get('name');
            $user->email      = Input::get('email');
            $user->save();

            // redirect
            Session::flash('message', 'Sukces stworzyłeś usera!');
            return Redirect::to('user');
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
        $user = User::find($id);
        return View::make("user.view")->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return View::make("user.edit")->with('user', $user);
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
            'name'       => 'required|unique:users|max:255',
            'email'      => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('user/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $user = \App\User::find($id);
            $user->name       = Input::get('name');
            $user->email      = Input::get('email');
            $user->save();

            // redirect
            Session::flash('message', 'Sukces uaktualniłeś usera!');
            return Redirect::to('user');
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
        $user = User::find($id);
        $user->delete();
        Session::flash('message', 'Successfully deleted the user!');
        return Redirect::to('user');
    }

}