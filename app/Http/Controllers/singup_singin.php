<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Session;
use Response;
use Illuminate\Support\Facades\Storage;
use Stevebauman\Location\Facades\Location;

class singup_singin extends Controller {

    public function usersingup( Request $req ) {

        $pass = md5( $req->password );
        $data = array( 'name' => $req->name, 'email' => $req->email, 'password' => $pass, 'phone' => $req->phone );
        DB::table( 'users' )->insert( $data );

        return redirect( 'userlogin' );
    }

    public function usersingin( Request $req ) {
        $pass = md5( $req->password );
        //return $pass;
        $users = DB::select( "SELECT * FROM `users` WHERE `email`='$req->email' AND `password`='$pass'" );

        foreach ( $users as $user ) {

            Session::put( '$uid', $user->id );
            Session::put( '$uname', $user->name );
            Session::put( '$uimage', $user->image );

            return redirect( 'userhome' );
        }
        if ( $users == false ) {

            return redirect( 'userlogin' );
        }
    }

    public function userhome() {
        $uid = Session::get( '$uid' );
        $data1 = DB::select( "SELECT * FROM `users` WHERE id='$uid'" );
        $data = DB::select( 'SELECT * FROM `events` ORDER BY (id) DESC' );
        return view( 'userhome', [ 'data' => $data, 'data1' => $data1 ] );
    }

    public function userprofile() {
        $uid = Session::get( '$uid' );
        $data = DB::select( "SELECT * FROM `users` WHERE id='$uid'" );

        return view( 'userprofile', [ 'data' => $data ] );

    }

    public function userprofileimage( Request $req ) {
        $id = $req->id;
        $file = $req->file;
        $img_name = $_FILES[ 'file' ][ 'name' ];
        $img_size = $_FILES[ 'file' ][ 'size' ];
        $tmp_name = $_FILES[ 'file' ][ 'tmp_name' ];
        $error = $_FILES[ 'file' ][ 'error' ];
        if ( $error === 0 ) {
            $img_ex = pathinfo( $img_name, PATHINFO_EXTENSION );
            $img_ex_lc = strtolower( $img_ex );

            $allowed_exs = array( 'jpg', 'jpeg', 'png', 'pdf', 'doc', 'ppt' );
            if ( in_array( $img_ex_lc, $allowed_exs ) ) {
                $new_img_name = uniqid( $req->name, true ) . '.' . $img_ex_lc;
                $img_upload_path = 'upload/' . $new_img_name;
                move_uploaded_file( $tmp_name, $img_upload_path );

                // Update into Database
                DB::UPDATE( "UPDATE `users` SET `image`='$new_img_name' WHERE id='$id'" );

                return redirect( 'userprofile' );
            }
        }

    }

    public function userdonatelist() {
        $uid = Session::get( '$uid' );
        $data = DB::select( "SELECT * FROM `users` WHERE id='$uid'" );
        $data1 = DB::select( "SELECT * FROM `food` WHERE uid='$uid' ORDER BY(id) DESC" );

        return view( 'userdonatelist', [ 'data' => $data,'data1'=>$data1 ] );
    }

    public function  userdonateapply() {
        $uid = Session::get( '$uid' );
        $data = DB::select( "SELECT * FROM `users` WHERE id='$uid'" );
       
       

        return view( 'userdonateapply', [ 'data' => $data ] );
    }
    public function userdonateapplyfrom(Request $req){

        $uimage=Session::get('$uimage');
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

                // Insert into Database
                $data = array('uid'=>$req->id,'name' => $req->name,"uimage"=>$uimage, "email" => $req->email, "image" => "$new_img_name", "phone" => $req->phone, "address" => $req->address, "ctime" => $req->ctime,"dis"=>$req->dis,"Latitude"=>$req->lat_to,"Longitude"=>$req->long_to);
                DB::table('food')->insert($data);

                return redirect( 'userdonatelist' );
            }
        }


        

    }
}
