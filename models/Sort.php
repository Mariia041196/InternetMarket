<?php
class Sort
{
    public static function getSortPriceAsc()
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Получение и возврат результатов
        $result = $db->query('SELECT * FROM product WHERE status = "1" ORDER BY price ASC');
        $i = 0;
        $priceAsc = array();
        while ($row = $result->fetch()) {
            $priceAsc[$i]['id'] = $row['id'];
            $priceAsc[$i]['name'] = $row['name'];
            $priceAsc[$i]['price'] = $row['price'];
            $i++;
        }
        return $priceAsc;
    }

    public static function getSortPriceDesc()
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Получение и возврат результатов
        $result = $db->query('SELECT * FROM product WHERE status = "1" ORDER BY price DESC ');
        $i = 0;
        $priceDesc = array();
        while ($row = $result->fetch()) {
            $priceDesc[$i]['id'] = $row['id'];
            $priceDesc[$i]['name'] = $row['name'];
            $priceDesc[$i]['price'] = $row['price'];
            $i++;
        }
        return $priceDesc;
    }

    public static function getSortBrand()
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Получение и возврат результатов
        $result = $db->query('SELECT * FROM product WHERE status = "1" ORDER BY `name` ');
        $i = 0;
        $nameSort = array();
        while ($row = $result->fetch()) {
            $nameSort[$i]['id'] = $row['id'];
            $nameSort[$i]['name'] = $row['name'];
            $nameSort[$i]['price'] = $row['price'];
            $i++;
        }
        return $nameSort;
    }
}

