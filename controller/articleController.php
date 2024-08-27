<?php
require_once ($rootPath . "/repository/articleRepository.php");
class ArticleController{
    private $articleRepository = null;
    function __construct() {
        $this->articleRepository = new ArticleRepository();
    }
    public function index():array
    {
        return $this->articleRepository->getFromDb();
    }

    public function insert(
        string $subject,
        string $article,
        int $category,
        int $tag,
        int $status,
        string $targetFile
    ): bool
    {
        $publishedAt = 'null';
        if($status == 1)
        {
            $publishedAt = date('Y-m-d h:i:s');    
            $publishedAt = "'$publishedAt'";    
        }
       return $this->articleRepository->storeData($subject,$article,$publishedAt,$category,$tag,$status,$targetFile);
    }

    public function edit(int $articleId): array
    {
       return $this->articleRepository->getArticle($articleId);
    }

    public function update(
        int $articleId,
        string $subject,
        int $category,
        int $tag,
        string $article,
        int $status,
        string $targetFile
    ): bool
    {
        $publishedAt = 'null';
        if($status == 1)
        {
            $publishedAt = date('Y-m-d h:i:s');    
            $publishedAt = "'$publishedAt'";    
        }
       return $this->articleRepository->updateData($articleId,$subject,$category,$tag,$article,$status,$targetFile,$publishedAt);
    }

    public function delete(int $articleId): bool
    {
       return $this->articleRepository->deleteById($articleId);
    }

    public function getStatus(int $statusId): string
    {
        if($statusId == 1)
        {
            return 'Published';
        }
        return 'Draft';
    }

    public function getStatusByPublishedId():array
    {
        return $this->articleRepository->getStatusPublished();
    }

    public function getStatusByDraftId():array
    {
        return $this->articleRepository->getStatusDraft();
    }

    public function getLimitId():array
    {
        return $this->articleRepository->getId();
    }

    public function getLimitedId():array
    {
        return $this->articleRepository->getIdList();
    }

    public function getByCategoryId(int $categoriesId, int $offset):array
    {
        return $this->articleRepository->getArticlesByCategoryId($categoriesId, $offset);
    }

    public function getLimitArticle(int $categoriesId):array
    {
        return $this->articleRepository->getLimitArticlesByCategoryId($categoriesId);
    }

    public function getByArticleId(int $articleId):array
    {
        return $this->articleRepository->getArticleByArticleId($articleId);
    }

    public function getByTagId(int $tagId):array
    {
        return $this->articleRepository->getArticleByTagId($tagId);
    }

    public function countArticle(int $categoriesId):array
    {
        return $this->articleRepository->totalArticle($categoriesId);
    }
    
}
?>