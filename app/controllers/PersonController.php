<?php

class PersonController extends BaseController
{
    /*
     *  Get Add
     */

    public function getAdd()
    {
        return View::make('person.add');
    }

    /*
     *  Post Add
     */

    public function postAdd()
    {
        $validator = Validator::make(Input::all(), array(
                    "name" => "required|max:30|min:5",
                    "email" => "required",
                    "address" => "required",
                    "password" => "required",
                    "phone" => "required"
        ));
        if ($validator->fails()) {
            return Redirect::route('person-add')
                            ->withErrors($validator)
                            ->withInput();
        }
        $name = Input::get('name');
        $email = Input::get('email');
        $passwrod = Input::get('password');
        $address = Input::get('address');
        $phone = Input::get('phone');
        $person = Person::create(array(
                    'name' => $name,
                    'email' => $email,
                    'password' => $passwrod,
                    'address' => $address,
                    'phone' => $phone
        ));
        if ($person) {
            return Redirect::route('home')
                            ->with('global', 'person added');
        }
    }

    public function viewAll()
    {
        $result = DB::select('select * from persons');
        return View::make('person.viewall')
                        ->with(array('array' => $result));
    }

    public function delete()
    {
        $id = array_search("delete", Input::all());
        DB::delete('delete from persons where id = ?', array($id));

        return Redirect::route('home')
                        ->with('global', 'person deleted');
    }

    public function edit()
    {
        $id = array_search("edit", Input::all());
        $person = DB::select('select * from persons where id = ?', array($id));
        $person = $person[0];
        return View::make('person.edit')
                        ->with(array('person' => $person));
    }

    public function editPost()
    {
        $validator = Validator::make(Input::all(), array(
                    "name" => "required|max:30|min:5",
                    "email" => "required",
                    "address" => "required",
                    "password" => "required",
                    "phone" => "required"
        ));
        if ($validator->fails()) {
            return Redirect::route('person-edit-post')
                            ->withErrors($validator)
                            ->withInput();
        }
        $name = Input::get('name');
        $email = Input::get('email');
        $passwrod = Input::get('password');
        $address = Input::get('address');
        $phone = Input::get('phone');
        $id = array_search("Save", Input::all());
        DB::update('update persons set name= ?,'
                . 'email=?,'
                . 'password=?,'
                . 'address=?,'
                . 'phone=? where id = ?', array($name, $email, $passwrod, $address,
            $phone, $id));
        return View::make('home.home')
                ->with('global','Profile has been updated');
    }

}
