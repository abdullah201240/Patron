<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


use Response;
use Illuminate\Support\Facades\Storage;

class rider extends Controller
{
    public function riderapplyfrom(Request $req)
    {
        $file = $req->file;
        $img_name = $_FILES['file']['name'];
        $img_size = $_FILES['file']['size'];
        $tmp_name = $_FILES['file']['tmp_name'];
        $error = $_FILES['file']['error'];
        if ($error === 0) {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);

            $allowed_exs = array("jpg", "jpeg", "png", "pdf", "doc", "ppt");
            if (in_array($img_ex_lc, $allowed_exs)) {
                $new_img_name = uniqid($req->name, true) . '.' . $img_ex_lc;
                $img_upload_path = 'upload/' . $new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);

                // Insert into Database
                $data = array('name' => $req->name, "email" => $req->email, "password" => "", "phone" => $req->phone, "address" => $req->address, "nid" => $req->nid, "drivinglicence" => $req->drivinglicence, "vehicle" => $req->vehicle, "status" => "Pandding", "image" => "", "cv" => $new_img_name);
                DB::table('rider')->insert($data);


                return redirect("userlogin");
            }
        }
    }
    public function riderlogin(Request $req){
        $UserName=$req->UserName;
        $pass=md5($req->password);
        $users = DB::select("SELECT * FROM `rider` WHERE `email`='$UserName' AND `password`='$pass' AND `status`='Accept'");

        foreach ($users as $user) {

            Session::put('$rid', $user->id);
            Session::put('$rname', $user->name);



            return redirect("riderhome");
        }
        if ($users == false) {

            return redirect("riderlogin");
        }

    }
    public function riderhome(){

        $rid = Session::get( '$rid' );
        
        $data = DB::select("SELECT * FROM `rider` WHERE `id`='$rid'");
        
        $data1= DB::select("SELECT * FROM `food` ORDER BY(id) DESC");
        return view( 'riderhome', [ 'data' => $data,'data1'=>$data1 ] );
    }
    public function riderprofile(){
        $rid = Session::get( '$rid' );
        $data = DB::select("SELECT * FROM `rider` WHERE `id`='$rid'");
        return view( 'riderprofile', [ 'data' => $data] );
        
    }
    public function riderprofileimage(Request $req){
        $id = $req->id;
        $file = $req->file;
        $img_name = $_FILES[ 'file' ][ 'name' ];
        $img_size = $_FILES[ 'file' ][ 'size' ];
        $tmp_name = $_FILES[ 'file' ][ 'tmp_name' ];
        $error = $_FILES[ 'file' ][ 'error' ];
        if ( $error === 0 ) {
            $img_ex = pathinfo( $img_name, PATHINFO_EXTENSION );
            $img_ex_lc = strtolower( $img_ex );

            $allowed_exs = array( 'jpg', 'jpeg', 'png', 'webp', 'doc', 'ppt' );
            if ( in_array( $img_ex_lc, $allowed_exs ) ) {
                $new_img_name = uniqid( $req->name, true ) . '.' . $img_ex_lc;
                $img_upload_path = 'upload/' . $new_img_name;
                move_uploaded_file( $tmp_name, $img_upload_path );

                // Update into Database
                DB::UPDATE( "UPDATE `rider` SET `image`='$new_img_name' WHERE id='$id'" );

                return redirect( 'riderprofile' );
            }
        }


    }
    public function riderpick(Request $req){

        $rid = Session::get( '$rid' );
        
        $data1= DB::select("SELECT * FROM `rider` WHERE id='$rid'");
        foreach ($data1 as $user) {

        
            $name=$user->name;
            $email=$user->email;
            $phone=$user->phone;
            




            
        }
       
        $data2= DB::select(" SELECT * FROM `food` WHERE id='$req->id'");
        foreach ($data2 as $user2) {
            $flan=$user2->Latitude;
            $flong=$user2->Longitude;
            $fname=$user2->name;
            $fphone=$user2->phone;
            $faddress=$user2->address;
        }

        $data = DB::select("SELECT * FROM `pick` WHERE rid='$rid' and fid='$req->id'");
        if( $data){
            DB::UPDATE( "UPDATE `pick` SET `lan`='$req->lan',`longt`='$req->longt' WHERE rid='$rid' AND fid='$req->id'" );
            

        }
        else{
            $data = array('fid' => $req->id, "lan" => $req->lan, "longt" => $req->longt, "phone" =>"$phone", "email" => "$email", "fname" => "$fname", "flong" => "$flong", "flan" => "$flan", "name" => "$name","rid"=>$rid,"fphone"=>$fphone,"status"=>"panding","faddress"=>$faddress);
            DB::table('pick')->insert($data);

        }
        
       
        
        //return view( 'riderhome', [ 'data' => $stack ] );
        return redirect( 'myride' );
      

    }
    public function myride(){
        $rid = Session::get( '$rid' );
        
        $data = DB::select("SELECT * FROM `rider` WHERE `id`='$rid'");
        $data1 = DB::select("SELECT * FROM `pick` WHERE `rid`='$rid' ORDER BY(id) DESC");

        return view( 'myride', [ 'data' => $data,'data1'=>$data1 ] );
    }
    public function showmap($id){
        $data = DB::select("SELECT * FROM `pick` WHERE `id`='$id'");
        foreach ($data as $user) {
            $lan=$user->lan;
            $long=$user->longt;
            $flan=$user->flan;
            $flong=$user->flong;


        }
        $floatlan = (float)$lan;
        $floatflan = (float)$flan;

        $theta = $floatflan - $floatlan;

        $miles = (sin(deg2rad($floatlan))) * sin(deg2rad($floatflan)) + (cos(deg2rad($floatlan)) * cos(deg2rad($floatflan)) * cos(deg2rad($theta)));
        $miles = acos($miles);
       $miles = rad2deg($miles);
       
       $finalkm=$miles*1.609344;
       $data = array('lan' => $lan, "long" => $long, "flan" => $flan, "flong" =>"$flong");
           
       return view( 'showmap', [ 'data' => $data] );
       




    }
}
