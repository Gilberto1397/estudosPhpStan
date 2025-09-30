<?php

class User
{
    /**
     * @param int<1, 5> $id
     * @param non-empty-string $nome
     * @return stdClass|null
     */
    public function find(int $id, string $nome): stdClass|null
    {
        $data= new stdClass();
        $data->id = 1;
        $data->name = "John Doe";
        $data->email = "mail@mail.com";
        return $data;
    }
}