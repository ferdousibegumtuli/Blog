<?php
require_once ($rootPath ."/repository/repository.php");
class ArticleRepository extends Repository{
    private const TABLE_NAME = 'articles';
    public function getFromDb() :array
    {
        return $this->get(
            '*',self::TABLE_NAME                 
        );
    }

    public function getByInput(
        string $subject,
        string $article,
        ?string $publishedAt,
        int $category,
        int $tag,
        int $status
    ): bool
    {
        $userId = $_SESSION['user'][0][0]['id'];
        return $this->insert(
            self::TABLE_NAME,
            '`user_id`,`title`,`description`,`published_at`,`category_id`,`tag_id`,`status`', 
            "'$userId','$subject','$article', $publishedAt,'$category','$tag','$status'"
        );
    }

    public function getArticle(int $articleId) :array
    {
        return $this->getById('*',self::TABLE_NAME,$articleId);
    }

    public function getByDb(
        int $articleId,
        string $subject,
        int $category,
        int $tag,
        string $article,
        int $status,
        ?string $publishedAt,
    ): bool {
        $userId = $_SESSION['user'][0][0]['id'];
        return $this->update(
            self::TABLE_NAME,
            "`user_id` = '$userId',`title` = '$subject',`description` = '$article',`published_at` = $publishedAt,`category_id` = '$category',`tag_id` = '$tag',`status` = '$status'" ,
            $articleId
        );
    }

    public function deleteById(int $articleId): bool
    {
        return $this->delete(self::TABLE_NAME,$articleId);
    }

}

?>