<?php

/**
 * Описание файла: Контроллер "Ссылки"
 * @author KNARS
 * @copyright 25.5.2017 22:43
 */

if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Links extends Controller {
    
    var $iname = 'link';
        
    /**
     * Конструктор
     */
    function Links () {
        
        parent::Controller();
        
        $mdl_name = 'mdl_'.$this->iname; // Имя модели
        
        $this->load->model($mdl_name); // Загружаем модель        
        
    }
    
    /**
     * Список ссылок
     */
    function index ($link_num = 0) {
        
        $this->lib_mng->show_index($this->iname, 'Список ссылок', $link_num);
    }
    
    /**
     * Добавление новой ссылки
     */
    function add () {
        
        $this->lib_mng->add($this->iname, 'Добавление новой ссылки');
        
    }
    
    /**
     * Просмотр ссылки
     */
    function show ($id) {
        
        $this->lib_mng->show($this->iname, $id, 'Просмотр ссылки');
        
    }
     
    /**
     * Редактирование ссылки
     */
    function edit ($id) {
        
        $this->lib_mng->edit($this->iname, $id, 'Изменение ссылки');
        
    }
     
    /**
     * Удаление ссылки
     */
    function del ($id) {
        
        $this->lib_mng->del($this->iname, $id);
        
    }
     
    /**
     * Сортировка
     */
    function sort ($field) {
        
        $this->lib_mng->set_sort($this->iname, $field);
        
    }
      
    /**
     * Поиск
     */
    function search () {
        $this->lib_mng->do_search($this->iname);
    }
	
}

?>