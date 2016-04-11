<?php

class Node extends Model
{
    public static function getPost($id)
    {
        $stm = static::getCommand()->prepare('SELECT * FROM node WHERE id=?');
        $stm->execute(array($id));

        return $stm->fetch(PDO::FETCH_OBJ);
    }

    public static function getList($status = 1) 
    {
        $stm = static::getCommand()->prepare('SELECT * FROM node WHERE status = :status ORDER BY created DESC');
        $stm->execute(array('status' => $status));

        $nodes = array();

        while($row = $stm->fetch(PDO::FETCH_OBJ)) {
            $row->teaser = mb_substr($row->content, 0, 400) . '...';
            $nodes[$row->id] = $row;
        }

        return $nodes;
    }

    public static function create($title, $content)
    {
        if (empty($title) || empty($content)) {
            return false;
        }

        $command = static::getCommand();

        $stm = $command->prepare('INSERT INTO node(title, content, status, created) VALUES(?, ?, ?, ?)');
        $stm->execute(array($title, $content, 1, time()));

        return $command->lastInsertId();
    }

    /**
     * Update a row data
     * @param  [type] $id      [description]
     * @param  [type] $title   [description]
     * @param  [type] $content [description]
     * @return [type]          [description]
     */
    public static function update($id, $title, $content)
    {
        if (empty($id) || empty($title)) {
            return false;
        }

        $stm = static::getCommand()->prepare('UPDATE node SET title=?, content=? WHERE id=?');
        $stm->execute(array($title, $content, $id));

        return $stm->rowCount();
    }
}