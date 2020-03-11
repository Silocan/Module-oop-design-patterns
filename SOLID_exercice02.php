<?php

class PhotoController
{
    public function postPhoto()
    {   
        // check authentication
        if(Auth::guest())
            return Redirect::to('/login');

        // get the data
        $input = Input::all();

        // validate data
        $validator = new Validator(array("name"=>"required", "description" => "required"));
        if( ! $validator->make($input))
            return Redirect::to('/photo')->withErrors($validator->getMessage());

        // save data into db
        $this->savePhoto($input);

        return Redirect::to('/photo')->with(array("message" => "you have succesfully created a new photo";)
    }

    protected function savePhoto(array $input)
    {
        DB::table('photo')->insert(array("name" => $input["name"], "description" => $input["description"]);
    }
}