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

    public function storeData(
        string $subject,
        string $article,
        ?string $publishedAt,
        int $category,
        int $tag,
        int $status,
        string $targetFile
    ): bool
    {
        $userId = $_SESSION['user'][0][0]['id'];
        return $this->insert(
            self::TABLE_NAME,
            '`user_id`,`title`,`description`,`published_at`,`category_id`,`tag_id`,`status`,`image`',
            "'$userId','$subject','$article', $publishedAt,'$category','$tag','$status','$targetFile'"
        );
    }

    public function getArticle(int $articleId) :array
    {
        return $this->getById('*',self::TABLE_NAME,$articleId);
    }

    public function updateData(
        int $articleId,
        string $subject,
        int $category,
        int $tag,
        string $article,
        int $status,
        string $targetFile,
        ?string $publishedAt
    ): bool {
        $userId = $_SESSION['user'][0][0]['id'];
        return $this->update(
            self::TABLE_NAME,
            "`user_id` = '$userId',`title` = '$subject',`description` = '$article',`published_at` = $publishedAt,`category_id` = '$category',`tag_id` = '$tag',`image`= '$targetFile',`status` = '$status'" ,
            $articleId
        );
    }

    public function deleteById(int $articleId): bool
    {
        return $this->delete(self::TABLE_NAME,$articleId);
    }

    public function getStatusPublished():array
    {

        $sql = "SELECT COUNT(*) FROM `". self::TABLE_NAME."` WHERE `status`='1'";
        $prepareQuery = $this->connection->query($sql);
        return $prepareQuery->fetchAll();

    }

    public function getStatusDraft():array
    {
        $sql = "SELECT COUNT(*) FROM `". self::TABLE_NAME."` WHERE `status`='0'";
        $prepareQuery = $this->connection->query($sql);
        return $prepareQuery->fetchAll();
    }

    public function getId() :array
    {
        $sql = "SELECT *  FROM `". self::TABLE_NAME."` ORDER BY `id` DESC LIMIT 4";
        $prepareQuery = $this->connection->query($sql);
        return $prepareQuery->fetchAll();
    }

    public function getIDList() :array
    {
        $sql = "SELECT *  FROM `". self::TABLE_NAME. "` ORDER BY `id` ASC LIMIT 4";
        $prepareQuery = $this->connection->query($sql);
        return $prepareQuery->fetchAll();
    }

    public function getArticlesByCategoryIdAndoffset(int $categoriesId, int $offset):array
    {
        $offset = (($offset - 1) * 4);
        $sql = "SELECT * FROM ". self::TABLE_NAME. " WHERE `category_id`='$categoriesId' LIMIT 4 OFFSET $offset";
        $prepareQuery = $this->connection->query($sql);
        return $prepareQuery->fetchAll(); 
    }

    public function getLimitArticlesByCategoryId(int $categoriesId):array
    {
       
        $sql = "SELECT * FROM ". self::TABLE_NAME. " WHERE `category_id`='$categoriesId'LIMIT 4";
        $prepareQuery = $this->connection->query($sql);
        return $prepareQuery->fetchAll(); 
    }

    public function getArticleByArticleId(int $articleId) :array
    {
        return $this->getById('*',self::TABLE_NAME,$articleId);
    }

    public function getArticleByTagIdAndOffset(int $tagId,int $offset):array
    {
        $offset = (($offset -  1) * 4);
        $sql = "SELECT * FROM ". self::TABLE_NAME. " WHERE `tag_id`='$tagId' LIMIT 4 OFFSET $offset";
        $prepareQuery = $this->connection->query($sql);
        return $prepareQuery->fetchAll(); 
    }

    public function totalArticle(int $categoriesId):array
    {

        $sql = "SELECT COUNT(*) FROM `". self::TABLE_NAME."` WHERE `category_id`='$categoriesId' ";
        $prepareQuery = $this->connection->query($sql);
        return $prepareQuery->fetchAll();

    }


    public function totalArticleByTagId(int $tagId):array
    {

        $sql = "SELECT COUNT(*) FROM `". self::TABLE_NAME."` WHERE `tag_id`='$tagId' ";
        $prepareQuery = $this->connection->query($sql);
        return $prepareQuery->fetchAll();

    }


}

?>