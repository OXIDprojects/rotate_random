<?php
 class rotaterandom extends rotaterandom_parent {

 public function loadActionArticles ($sActionID, $iLimit = null)
 {
 // Performance
 if ( !trim( $sActionID) ) {
 return;
 }

 $sShopID = $this->getConfig()->getShopId();
 $sActionID = oxDb::getDb()->quote(strtolower( $sActionID));

 //echo $sSelect;
 $oBaseObject = $this->getBaseObject();
 $sArticleTable = $oBaseObject->getViewName();
 $sArticleFields = $oBaseObject->getSelectFields();

 $oBase = oxNew("oxactions");
 $sActiveSql = $oBase->getSqlActiveSnippet();
 $sViewName = $oBase->getViewName();

 $sLimit = ( $iLimit > 0 ) ? "limit " . $iLimit : '';

 $sSelect = "select $sArticleFields from oxactions2article
 left join $sArticleTable on $sArticleTable.oxid = oxactions2article.oxartid
 left join $sViewName on $sViewName.oxid = oxactions2article.oxactionid
 where oxactions2article.oxshopid = '$sShopID' and oxactions2article.oxactionid = $sActionID and $sActiveSql
 and $sArticleTable.oxid is not null and " .$oBaseObject->getSqlActiveSnippet(). "
 order by rand() LIMIT 8";

 $this->selectString( $sSelect );
 }
 }