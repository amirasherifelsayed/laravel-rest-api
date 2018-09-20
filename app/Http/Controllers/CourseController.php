<?php

namespace App\Http\Controllers;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;


class CourseController extends Controller
{
    public function index(){


        $data = DB::table('courses')->get();

        return ($data);

    }


    public function ShowCourses($id)
    {


        $data = DB::table('courses')
            ->where('id', '>=', $id)->take('3')->get();

        //$data =$data->where('id', '=', $id)->getall(2);

//        $data = DB::table('courses');
//       $data =$data->where('id', '=', $id)->paginate(2);


//        $offset = ($id - 1);
//        $data = $data->offset($offset)
//                ->limit(2)
//                ->get();

        return ($data);
    }



    public function CourseItem($id){
        $data = DB::table('courses')
            ->where('id', '=', $id)
            ->get();
        return ($data);
    }
}
