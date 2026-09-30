<?php

namespace App\Http\Services;

use Illuminate\Database\Eloquent\Model;

class BaseService{

public function __construct(private Model $repository)
{}

    public function index(array $data)
    {
        return $this->repository->index($data);
    }

    public function store(array $data)
    {
        return $this->repository->store($data);
    }

    public function show(string $id)
    {
        return $this->repository->show($id);
    }

    public function update(array $data, string $id)
    {
        return $this->repository->update($data, $id);
    }

    public function destroy(string $id)
    {
        $this->repository->destroy($id);
    }
}