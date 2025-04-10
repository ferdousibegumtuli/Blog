<?php
require_once ($rootPath . "/repository/tagRepository.php");
class TagController {
    private $tagRepository = null;
    function __construct() {
        $this->tagRepository = new TagRepository();
    }

    public function index() :array
    {
        return $this->tagRepository->getAll();
    }

    public function insert(string $tagName): bool
    {
       return $this->tagRepository->getByName($tagName);
    }

    public function getTagName(int $tagId): array
    {
       return $this->tagRepository->getTag($tagId);
    }

    public function update(string $tagName,int $tagId): bool
    {
       return $this->tagRepository->getByIdAndName($tagName,$tagId);
    }

    public function delete(int $tagId): bool
    {
       return $this->tagRepository->deleteById($tagId);
    }



}
?>