<?php
namespace Caya\StudentManagement\Model;
use Caya\StudentManagement\Core\Crud;
use Caya\StudentManagement\core\Database;

class StudentModel extends Database implements Crud{
    public $id;
    public $fullname;
    public $yearlevel;
    public $course;
    public $section;

    public function __construct (){

        parent:: __construct();
        $this->id = "";
        $this->fullname = "";
        $this->yearlevel = "";
        $this->course = "";
        $this->section = "";
        
    }
    public function displayInfo()
    {
        echo "ID: ". $this->id."\n";
        echo "Fullname: ". $this->fullname."\n";
        echo "YearLevel: ". $this->yearlevel."\n";
        echo "Course: ". $this->course."\n";
        echo "Section: ". $this->section."\n";
    }

    public function create()
    {

    }
    public function read()
    {
        try {
            $sql = "SELECT * FROM students";
            $result = $this->conn->query($sql);

            return $result->fetch_all(MSQLI_ASSOC);

        }catch(\Exception $e){
            echo $e->getMessage();
        }
    }
    public function update()
    {

    }
    public function delete()
    {

    }

}
?>