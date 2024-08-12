<?php
require_once ($rootPath ."/repository/repository.php");
class TagRepository extends Repository{
    private const TABLE_NAME = 'tags';

    public function getAll() :array
    {
        return $this->get('*', self::TABLE_NAME);
    }

    public function getByName(string $tagName): bool 
    {
        return $this->insert(self::TABLE_NAME,'tag',"'$tagName'");
    }
 
    public function getTag(int $tagId) :array
    {
        return $this->getById('*',self::TABLE_NAME,$tagId);
    }

    public function getByIdAndName(string $tagName,int $tagId): bool {
       
        return $this->update(self::TABLE_NAME, "`tag` = '$tagName'" ,$tagId);
    }

    public function deleteById(int $tagId): bool
    {
        return $this->delete(self::TABLE_NAME,$tagId);
    }
}
?>