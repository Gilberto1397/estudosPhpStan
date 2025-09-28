<?php

class User
{
    public function find(): stdClass|null
    {
        $data= new stdClass();
        $data->id = 1;
        $data->name = "John Doe";
        $data->email = "mail@mail.com";
        return $data;
    }
}