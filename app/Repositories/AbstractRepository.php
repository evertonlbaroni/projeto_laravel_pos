<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Builder as EloquentQueryBuilder;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Database\Query\Builder as QueryBuilder;
use Illuminate\Pagination\AbstractPaginator as Paginator;

abstract class AbstractRepository
{
    protected $model;

    protected function newQuery()
    {
        return app($this->model)->newQuery();
    }

    public function create(array $data)
    {
        return app($this->model)::create($data);
    }

    public function insert(array $data)
    {
        return app($this->model)::insert($data);
    }

    public function findByID($id, $fail = true)
    {
        if ($fail) {
            return $this->newQuery()->findOrFail($id);
        }
        return $this->newQuery()->find($id);
    }

    public function all($take = 15, $sort = 'id', $descending = false)
    {

        return $this->doQuery(
            ($this->newQuery()),
            $take,
            true,
            $sort,
            $descending
        );
    }

    public function doQuery($query = null, $take = 15, $paginate = true, $sort = 'id', $descending = false)
    {
        if (is_null($query)) {
            $query = $this->newQuery();
        }

        $query->orderBy($sort, $descending ? 'desc' : 'asc');

        if (true == $paginate) {
            return $query->paginate($take);
        }

        if ($take > 0 || false !== $take) {
            $query->take($take);
        }

        return $query->get();
    }

    public function destroy($ref)
    {
        $id = $ref->id ?? $ref;
        return app($this->model)->destroy($id);
    }

    public function filterAndReturnQuery($filter, $fields = [])
    {
        $query = $this->newQuery();
        foreach ($fields as $method => $value) {
            if (method_exists($filter, $method)) {
                $query = $filter->$method($query, $value);
            }
        }
        return $query;
    }
}
