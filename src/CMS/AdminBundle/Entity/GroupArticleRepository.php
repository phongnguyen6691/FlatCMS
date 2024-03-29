<?php
namespace CMS\AdminBundle\Entity;

use Doctrine\ORM\EntityRepository;

class GroupArticleRepository extends EntityRepository
{
    public function findAllSql()
    {
         return $this->getEntityManager()
            ->createQuery(
                'SELECT g FROM CMSAdminBundle:GroupArticle g ORDER BY g.id DESC'
            );
    }

    public function findByKeywordSql($keyword = '')
    {
        return $this->getEntityManager()
            ->createQuery(
                "SELECT g FROM CMSAdminBundle:GroupArticle g  WHERE g.name LIKE :keyword ORDER BY g.id DESC"
            )->setParameter('keyword', '%'.$keyword.'%');
    }
}
?>