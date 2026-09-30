<?php

namespace App\Http\Repositories;

use Illuminate\Database\Eloquent\Model;

class BaseRepository {

    public function __construct(private Model $model)
    {}

    public function index(array $data)
    {
        return $this->model->query()->where(function ($query) use($data) {
            if (data_get($data, 'name')) {
                $query->where('name', 'like', '%' . $data['name'] . '%');
            }
        })->get();
    }

    public function store(array $data)
    {
        return $this->model->create($data);
    }

    public function show(string $id)
    {
        return $this->model->findOrFail($id);
    }

    public function update(array $data, string $id)
    {
        $entity = $this->show($id);

        $entity->update($data);

        return $entity->fresh();
    }

    public function destroy(string $id)
    {
        $entity = $this->show($id);

        $entity->delete();
    }
}