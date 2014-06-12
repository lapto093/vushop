<?php

namespace Vushop\AdminBundle\Repository;

use Doctrine\ORM\EntityRepository;

class CategoryRepository extends EntityRepository
{
    
    public function getAllCat($iParentId = 0)
    {
        $query = $this->createQueryBuilder('c')
                    ->select('c.categoryId, c.parentId, c.categoryName')
                    ->where('c.status = 1')
                    ->getQuery();
        $aResult = $query->getArrayResult();
        $aResult = $this->_subCatgories($aResult, $iParentId);
        return $aResult;
        //return array('all' => $aResult, 'parent' => $aParent, 'lastlevel' => $aLastLevel, 'path_id' => $aPathId, 'breadcrumbs' => $aBreadcrumbs);
    }
    
    private function _subCatgories(&$aCategories, $iParentId = 0)
    {
        $aRows = array();
        foreach($aCategories as $i => $aCategory){
            if ((int)$aCategory['parentId'] == (int)$iParentId){                               
                $aRows[] = $aCategory;
            }
        }
        if (!empty($aRows)){
            foreach($aRows as $i => $aRow){
                $aRows[$i]['sub'] = $this->_subCatgories($aCategories, $aRow['categoryId']);
            }
            return $aRows;
        }       
        return array();
    } 
    
}

