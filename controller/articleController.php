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
        int $status
    ): bool
    {
        $publishedAt = 'null';
        if($status == 1)
        {
            $publishedAt = date('Y-m-d h:i:s');    
            $publishedAt = "'$publishedAt'";    
        }
       return $this->articleRepository->getByInput($subject,$article,$publishedAt,$category,$tag,$status);
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
        int $status
    ): bool
    {
        $publishedAt = 'null';
        if($status == 1)
        {
            $publishedAt = date('Y-m-d h:i:s');    
            $publishedAt = "'$publishedAt'";    
        }
       return $this->articleRepository->getByDb($articleId,$subject,$category,$tag,$article,$status,$publishedAt);
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

}
?>