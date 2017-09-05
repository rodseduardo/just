<?php

class Posts extends Crud
{
    protected $table = 'posts';
    private $title;
    private $slug;
    private $content;

    public function setTitle($title)
    {
        $this->title= $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setSlug($slug)
    {
        $this->slug = $slug;
    }

    public function getSlug()
    {
        return $this->slug;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function insert()
    {
        try {
            $sql  = "INSERT INTO $this->table (title, slug, content) VALUES (:title, :slug, :content)";
            $stmt = DB::prepare($sql);

            $stmt->bindValue(':title', $this->title, PDO::PARAM_STR);
            $stmt->bindValue(':slug', $this->slug, PDO::PARAM_STR);
            $stmt->bindValue(':content', $this->content, PDO::PARAM_STR);

            return $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function update($id)
    {

        try {
            $sql  = "UPDATE $this->table SET title = :title, slug = :slug, content = :content WHERE id = :id";
            $stmt = DB::prepare($sql);

            $stmt->bindValue(':title', $this->getTitle(), PDO::PARAM_STR);
            $stmt->bindValue(':slug', $this->getSlug(), PDO::PARAM_STR);
            $stmt->bindValue(':content', $this->getContent(), PDO::PARAM_STR);
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);

            return $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function findBySlug($slug)
    {
        $sql = "SELECT * FROM $this->table WHERE slug = :slug";
        $stmt = DB::prepare($sql);
        $stmt->bindValue(':slug', $slug, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch();
    }

}
