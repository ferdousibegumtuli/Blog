<?php
require ($rootPath . "/repository/categoryRepository.php");
class CategoryController {
    private $categoryRepository = null;
    function __construct() {
        $this->categoryRepository = new CategoryRepository();
    }

    public function index() :array
    {
        return $this->categoryRepository->getAll();
    }

    public function insert(string $categoryName): bool
    {
       return $this->categoryRepository->getByName($categoryName);
    }

    public function edit(int $categoryId): array
    {
       return $this->categoryRepository->getById($categoryId);
    }

    public function update(string $categoryName,int $categoryId): bool
    {
       return $this->categoryRepository->getByIdAndName($categoryName,$categoryId);
    }

    public function delete(int $categoryId): bool
    {
       return $this->categoryRepository->deleteById($categoryId);
    }



}
?>