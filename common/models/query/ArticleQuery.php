<?php

namespace common\models\query;

use common\models\Article;
use yii\db\ActiveQuery;

/**
 * Class ArticleQuery
 * @package common\models\query
 */
class ArticleQuery extends ActiveQuery
{
    /**
     * @return $this
     */
    public function published()
    {
        $this->andWhere(['status' => Article::STATUS_PUBLISHED]);
        $this->andWhere(['<', '{{%article}}.published_at', time()]);
        return $this;
    }
}
