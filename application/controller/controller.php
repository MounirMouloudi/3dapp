<?php
class Controller
{
    public $load;
    public $model;

    function __construct($pageURI = null)
    {
        $this->load = new Load();
        $this->model = new Model();
        $this->$pageURI();
    }


    function home()
    {
        $this->load->view('home');
    }

    function about()
    {
        $this->load->view('about');
    }

    function models()
    {
        $this->load->view('models');
    }

    function test()
    {
        $data = $this->model->model3D_info();
        $this->load->view('view3DAppTest_2', $data);
    }

    function apiCreateTable()
    {
        echo "Create table function";
        $data = $this->model->dbCreateTable();
        $this->load->view('viewMessage', $data);
    }
    function apiInsertData()
    {
        $data = $this->model->dbInsertData();
        $this->load->view('viewMessage', $data);
    }
    function apiGetData()
    {
        $data = $this->model->dbGetData();
        $this->load->view('view3DAppData', $data);
    }
}
?>