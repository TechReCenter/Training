<?php

class Node extends Model
{
    public static function getPost($id)
    {
        $data = static::getList();

        if (isset($data[$id])) {
            return $data[$id];
        }
    }

    public static function getList($status = 1) 
    {
        $stm = static::getCommand()->prepare('SELECT * FROM node WHERE status = :status');
        $stm->execute(array('status' => $status));

        $nodes = array();

        while($row = $stm->fetch(PDO::FETCH_OBJ)) {
            $nodes[$row->id] = $row;
        }

        return $nodes;
    }
}