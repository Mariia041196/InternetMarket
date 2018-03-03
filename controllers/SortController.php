<?php
class SortController
{

public function actionSortPriceAsc()
{
// Список категорий для левого меню
$sortPriceAsc = Sort::getSortPriceAsc();


require_once(ROOT . '/views/sort/priceasc.php');

return true;
}
    public function actionSortPriceDesc()
    {
// Список категорий для левого меню

        $sortPriceDesc = Sort::getSortPriceDesc();

        require_once(ROOT . '/views/sort/pricedesc.php');

        return true;
    }

public function actionSortName()
{
    $sortName = Sort::getSortBrand();
    require_once(ROOT . '/views/sort/sortbrand.php');
    return true;
}

}
