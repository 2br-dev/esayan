<?php

declare(strict_types=1);

namespace Fastest\Core\Modules;

final class mainCatalogModule extends \Fastest\Core\Modules\Module
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
        //$pager = $this->pager($this->countItem(), $this->limit);

        $cache = 'module.mainCatalog.list';


        $catalog = array();
        $file = new \Files();

        $medoviki = Q("SELECT * FROM `#_mdd_medoviki` WHERE `visible`=1 ORDER BY `ord` ASC")->all();
        if(!empty($medoviki)){
            foreach ($medoviki as $key => $value){
                $medoviki[$key]['preview_file'] = $file->getFilesByGroup($value['preview'], ['original'], ['file'], true);
                //$medoviki[$key]['image_file'] = $file->getFilesByGroup($value['image'], ['original'], ['file'], true);
                $ico_id = explode(',', $value['ingredients']);
                foreach ($ico_id as $key1 => $value1){
                    if($value['color_ico'] == 'light'){
                        $medoviki[$key]['ico'][$key1] = Q('SELECT `title`, `icon_light` as `icon` FROM `#_mdd_ingredients` WHERE `id` = ?i', [$value1])->row();
                    }
                    else {
                        $medoviki[$key]['ico'][$key1] = Q('SELECT `title`, `icon_dark` as `icon` FROM `#_mdd_ingredients` WHERE `id` = ?i', [$value1])->row();
                    }

                }
                foreach ($medoviki[$key]['ico'] as $key1 => $value1){
                    $medoviki[$key]['ico'][$key1]['ico_file'] = $file->getFilesByGroup($value1['icon'], ['original'], ['file'], true);
                }
            }
            $catalog['medoviki']= $medoviki;

        }

        $honeyBolls = Q("SELECT * FROM `#_mdd_honeyballs` WHERE `visible`=1 ORDER BY `ord` ASC")->all();
        if(!empty($honeyBolls)){
            foreach ($honeyBolls as $key => $value){
                $honeyBolls[$key]['preview_file'] = $file->getFilesByGroup($value['preview'], ['original'], ['file'], true);
                //$medoviki[$key]['image_file'] = $file->getFilesByGroup($value['image'], ['original'], ['file'], true);
                $ico_id = explode(',', $value['ingredients']);
                foreach ($ico_id as $key1 => $value1){
                    if($value['color_ico'] == 'light'){
                        $honeyBolls[$key]['ico'][$key1] = Q('SELECT `title`, `icon_light` as `icon` FROM `#_mdd_ingredients` WHERE `id` = ?i', [$value1])->row();
                    }
                    else {
                        $honeyBolls[$key]['ico'][$key1] = Q('SELECT `title`, `icon_dark` as `icon` FROM `#_mdd_ingredients` WHERE `id` = ?i', [$value1])->row();
                    }

                }
                foreach ($honeyBolls[$key]['ico'] as $key1 => $value1){
                    $honeyBolls[$key]['ico'][$key1]['ico_file'] = $file->getFilesByGroup($value1['icon'], ['original'], ['file'], true);
                }
            }
            $catalog['honeyballs']= $honeyBolls;
        }

        $cakes = Q("SELECT * FROM `#_mdd_cakes` WHERE `visible`=1 ORDER BY `ord` ASC")->all();
        if(!empty($cakes)){
            foreach ($cakes as $key => $value){
                $cakes[$key]['preview_file'] = $file->getFilesByGroup($value['preview'], ['original'], ['file'], true);
                //$medoviki[$key]['image_file'] = $file->getFilesByGroup($value['image'], ['original'], ['file'], true);
                $ico_id = explode(',', $value['ingredients']);
                foreach ($ico_id as $key1 => $value1){
                    if($value['color_ico'] == 'light'){
                        $cakes[$key]['ico'][$key1] = Q('SELECT `title`, `icon_light` as `icon` FROM `#_mdd_ingredients` WHERE `id` = ?i', [$value1])->row();
                    }
                    else {
                        $cakes[$key]['ico'][$key1] = Q('SELECT `title`, `icon_dark` as `icon` FROM `#_mdd_ingredients` WHERE `id` = ?i', [$value1])->row();
                    }

                }
                foreach ($cakes[$key]['ico'] as $key1 => $value1){
                    $cakes[$key]['ico'][$key1]['ico_file'] = $file->getFilesByGroup($value1['icon'], ['original'], ['file'], true);
                }
            }
            $catalog['cakes']= $cakes;
        }

        $honeyslices = Q("SELECT * FROM `#_mdd_honeyslices` WHERE `visible`=1 ORDER BY `ord` ASC")->all();
        if(!empty($honeyslices)) {
            foreach ($honeyslices as $key => $value) {
                $honeyslices[$key]['preview_file'] = $file->getFilesByGroup($value['preview'], ['original'], ['file'], true);
                //$medoviki[$key]['image_file'] = $file->getFilesByGroup($value['image'], ['original'], ['file'], true);
                $ico_id = explode(',', $value['ingredients']);
                foreach ($ico_id as $key1 => $value1) {
                    if ($value['color_ico'] == 'light') {
                        $honeyslices[$key]['ico'][$key1] = Q('SELECT `title`, `icon_light` as `icon` FROM `#_mdd_ingredients` WHERE `id` = ?i', [$value1])->row();
                    } else {
                        $honeyslices[$key]['ico'][$key1] = Q('SELECT `title`, `icon_dark` as `icon` FROM `#_mdd_ingredients` WHERE `id` = ?i', [$value1])->row();
                    }

                }
                foreach ($honeyslices[$key]['ico'] as $key1 => $value1) {
                    $honeyslices[$key]['ico'][$key1]['ico_file'] = $file->getFilesByGroup($value1['icon'], ['original'], ['file'], true);
                }
            }
            $catalog['honeyslices'] = $honeyslices;
        }

        $loppi = Q("SELECT * FROM `#_mdd_loppi` WHERE `visible`=1 ORDER BY `ord` ASC")->all();
        if(!empty($loppi)) {
            foreach ($loppi as $key => $value) {
                $loppi[$key]['preview_file'] = $file->getFilesByGroup($value['preview'], ['original'], ['file'], true);
                //$medoviki[$key]['image_file'] = $file->getFilesByGroup($value['image'], ['original'], ['file'], true);
                $ico_id = explode(',', $value['ingredients']);
                foreach ($ico_id as $key1 => $value1) {
                    if ($value['color_ico'] == 'light') {
                        $loppi[$key]['ico'][$key1] = Q('SELECT `title`, `icon_light` as `icon` FROM `#_mdd_ingredients` WHERE `id` = ?i', [$value1])->row();
                    } else {
                        $loppi[$key]['ico'][$key1] = Q('SELECT `title`, `icon_dark` as `icon` FROM `#_mdd_ingredients` WHERE `id` = ?i', [$value1])->row();
                    }

                }
                foreach ($loppi[$key]['ico'] as $key1 => $value1) {
                    $loppi[$key]['ico'][$key1]['ico_file'] = $file->getFilesByGroup($value1['icon'], ['original'], ['file'], true);
                }
            }
            $catalog['loppi'] = $loppi;
        }

        $minicakes = Q("SELECT * FROM `#_mdd_minicakes` WHERE `visible`=1 ORDER BY `ord` ASC")->all();
        if(!empty($minicakes)) {
            foreach ($minicakes as $key => $value) {
                $minicakes[$key]['preview_file'] = $file->getFilesByGroup($value['preview'], ['original'], ['file'], true);
                //$medoviki[$key]['image_file'] = $file->getFilesByGroup($value['image'], ['original'], ['file'], true);
                $ico_id = explode(',', $value['ingredients']);
                foreach ($ico_id as $key1 => $value1) {
                    if ($value['color_ico'] == 'light') {
                        $minicakes[$key]['ico'][$key1] = Q('SELECT `title`, `icon_light` as `icon` FROM `#_mdd_ingredients` WHERE `id` = ?i', [$value1])->row();
                    } else {
                        $minicakes[$key]['ico'][$key1] = Q('SELECT `title`, `icon_dark` as `icon` FROM `#_mdd_ingredients` WHERE `id` = ?i', [$value1])->row();
                    }

                }
                foreach ($minicakes[$key]['ico'] as $key1 => $value1) {
                    $minicakes[$key]['ico'][$key1]['ico_file'] = $file->getFilesByGroup($value1['icon'], ['original'], ['file'], true);
                }
            }
            $catalog['minicakes'] = $minicakes;
        }

        return [
            'catalog'         =>  $catalog,
            'template'          =>  'list'
        ];
    }

    public function itemMethod($system = '')
    {
        $cache = 'module.mainCatalog.item.'.$system;

        if (!($mainCatalog = $this->compiled($cache)))
        {
            $mainCatalog = Q("SELECT * FROM `#_mdd_mainCatalog` WHERE `visible`='1' AND `system` LIKE ?s LIMIT 1", [ $system ])->row();

            $mainCatalog['link'] = $this->linkCreate($mainCatalog['system']);
            $mainCatalog['date'] = Dates($mainCatalog['date'], $this->locale);

            $file = new Files;

            if (isset($mainCatalog['photo']))
            {
                $mainCatalog['photo'] = $file->getFilesByGroup($mainCatalog['photo'], ['sm', 'original'], ['id', 'title', 'file', 'ord', 'created'], true);
            }

            $this->cache->setCache($cache, $mainCatalog);
        }

        # Мета теги
        #
        $meta = $this->metaData($mainCatalog);

        # Хлебные крошки
        #
        $this->addBreadCrumbs($mainCatalog, [ 'id', 'id', 'name', 'system' ]);

        return [
            'meta'              =>  $meta,
            'page'              =>  [ 'name' => '' ],
            'mainCatalog'     =>  $mainCatalog,
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