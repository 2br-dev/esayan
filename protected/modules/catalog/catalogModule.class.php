<?php

declare(strict_types=1);

namespace Fastest\Core\Modules;

final class catalogModule extends \Fastest\Core\Modules\Module
{
    public function router()
    {
        if (isset($this->arguments[1]))
        {
            return $this->errorPage;
        }

        if (isset($this->arguments[0]))
        {
            return $this->itemMethod(intval($this->arguments[0]));
        }

        return $this->listMethod();
    }

    public function listMethod()
    {
        # Пагинация
        #
        $pager = $this->pager($this->countItem(), $this->limit);

        $cache = 'module.catalog.list';

        # Получение списка
        #
        if (!($catalog = $this->compiled($cache)))
        {
            $catalog = Q("SELECT * FROM `#_mdd_catalog` WHERE `visible`=1 ORDER BY `ord` ASC")->all();

            if (!empty($catalog))
            {
                $cif = new \Files();
                foreach ($catalog as $key => $item)
                {
                    $catalog[$key]['image_file'] = $cif->getFilesByGroup($item['image'], ['bg', 'original'], ['title', 'file'], true);
                    $catalog[$key]['hover_image_file'] = $cif->getFilesByGroup($item['hover_image'], ['bg', 'original'], ['title', 'file'], true);

                }
            }

            $this->cache->setCache($cache, $catalog);
        }

        # Мета теги
        #
        $meta = $this->metaData($catalog);

        return [
            'meta'              =>  $meta,
            'pager'             =>  $pager,
            'catalog'         =>  $catalog,
            'template'          =>  'list'
        ];
    }

    public function itemMethod($system = '')
    {
        $cache = 'module.catalog.item.'.$system;

        if (!($catalog = $this->compiled($cache)))
        {
            $catalog = Q("SELECT * FROM `#_mdd_catalog` WHERE `visible`='1' AND `system` LIKE ?s LIMIT 1", [ $system ])->row();

            $catalog['link'] = $this->linkCreate($catalog['system']);
            $catalog['date'] = Dates($catalog['date'], $this->locale);

            $file = new Files;

            if (isset($catalog['photo']))
            {
                $catalog['photo'] = $file->getFilesByGroup($catalog['photo'], ['sm', 'original'], ['id', 'title', 'file', 'ord', 'created'], true);
            }

            $this->cache->setCache($cache, $catalog);
        }

        # Мета теги
        #
        $meta = $this->metaData($catalog);

        # Хлебные крошки
        #
        $this->addBreadCrumbs($catalog, [ 'id', 'id', 'name', 'system' ]);

        return [
            'meta'              =>  $meta,
            'page'              =>  [ 'name' => '' ],
            'catalog'     =>  $catalog,
            'breadcrumbs'       =>  $this->breadcrumbs,
            'template'          =>  'item'
        ];
    }

    public function blockMethod()
    {
        return [
            'template' => 'block'
        ];
    }
}