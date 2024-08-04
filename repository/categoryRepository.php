<?php
require ($rootPath ."/repository/repository.php");
class CategoryRepository extends Repository{
    private const TABLE_NAME = 'categories';

    public function getAll() :array
    {
        return $this->get('*', self::TABLE_NAME);
    }

    public function getByName(string $categoryName): bool 
    {
        return $this->insert(self::TABLE_NAME,'category',$categoryName);
    }
 
    public function getById(int $categoryId) :array
    {
        return $this->store('*',self::TABLE_NAME,$categoryId);
    }

    public function getByIdAndName(string $categoryName,int $categoryId): bool {
       
        return $this->update(self::TABLE_NAME, "`category` = '$categoryName'" ,$categoryId);
    }

    public function deleteById(int $categoryId): bool
    {
        return $this->delete(self::TABLE_NAME,$categoryId);
    }
}
?>
