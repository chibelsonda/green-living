<?php
/*
# Author: Vijay Kumar
# License: Freeware
# Any one Can user this file and edit the Content of this file according to his/her needs
# Purpose: Creates a Binary tree
 */

class Btrees extends Controller
{
    public function __construct()
    {
        $this->userModel = $this->model('Btree');
    }

    public function index(){
        $this->view('btree/index');
    }

    public function binarytree($id = 1, $con, $supermember = false, $float = "left", $level = 1)
    {
        $level++;
        //if($level>3)
        //{
        //    return false;
        //}
        $width = 100;
        $res_count = 1;
        if ($supermember) {
            $res_count = 2;
        }
        
        $query = "Select * from binary_tbl where id = $id";
        $res = mysqli_query($con, $query);
        $div_witdh = $width / $res_count;
        if (mysqli_num_rows($res) > 0) {
            while ($r = mysqli_fetch_assoc($res)) {
                echo "<div style='width:$div_witdh%;text-align:center;float:$float; background-color:green;'> " . $r["name"] . "<br>";
                $query_member = "Select * from binary_tbl where supermember = $id";
                $res_member = mysqli_query($con, $query_member);

                if (mysqli_num_rows($res_member) > 0) {
                    while ($rm = mysqli_fetch_assoc($res_member)) {
                        $this->binarytree($rm["id"], $con, true, $float, $level);
                        $float = ($float == 'left') ? 'right' : 'left';
                    }
                }
                echo "</div>";
            }
        }
    }
}
