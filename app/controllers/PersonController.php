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
        $id = array_search("delete",Input::all());
        DB::delete('delete from persons where id = ?',array($id));
        
        return Redirect::route('home')
                ->with('global','person deleted');
    }

}
