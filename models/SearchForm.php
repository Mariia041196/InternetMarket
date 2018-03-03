<?php
/**
 * Description of SearchForm
 *
 * @author admin
 */
class SearchForm
{

    public $keyword;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
                ['keyword', 'trim'],
                ['keyword', 'required'],
                ['keyword', 'string', 'min' => 3],
        ];
    }
    
    public function search()
    {
        if ($this->validate()) {
            $model = new NewsSearch();
            return $model->fulltextSearch($this->keyword);
        }
    }
    
    public function searchAdvanced()
    {
        if ($this->validate()) {
            $model = new NewsSearch();
            return $model->advancedSearch($this->keyword);
        }
    }
    public function simpleSearch($keyword)
    {
        $sql="SELECT * FROM product WHERE brand LIKE '%$keyword%'";

    }

}
