<?php
/**
 * Created by PhpStorm.
 * User: ilya
 * Date: 26.02.18
 * Time: 8:54
 */
interface Repository
{
    public function save();
}

class MongoRepository implements Repository
{
    public function save()
    {
        var_dump('Save in Mongo');
    }
}

class MysqlRepository implements Repository
{
    public function save()
    {
        var_dump('Save in Mysql');
    }
}


class UserController
{
    protected $repository;

    public function __construct(Repository $repository)
    {
        $this->repository = $repository;
    }

    public function commit()
    {
        $this->repository->save();
    }
}

$ctrl = new UserController(new MysqlRepository());
$ctrl->commit();