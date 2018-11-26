<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\Promotion;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    //  public function searchuser(Request $request){
    //     $search = $request->get('search');
    //     $users = DB::table('users')->where('code_user', 'like', '%'.$search.'%');
    //     return view('adminPharmacy.a_cheer', ['users' => $users]);
    // }

    public function index()
    {
        return view('adminPharmacy.a_home');
    }

    public function indexaboutAd()
    {
        return view('adminPharmacy.a_about');
    }

    public function indexaddpromotionAd()
    {
        return view('adminPharmacy.a_addpromotion');
    }

    // public function indexaddadminAd()
    // {
    //     return view('adminPharmacy.a_addadmin');
    // }

    public function indexadduserAd()
    {
        return view('adminPharmacy.a_adduser');
    }

    public function indexaddstockAd()
    {
        return view('adminPharmacy.a_addstock');
    }

    public function indexchangepassAd()
    {
        return view('adminPharmacy.a_changepass');
    }

    public function indexprofileAd()
    {
        return view('adminPharmacy.a_profile');
    }

    public function promotionAd(){
        $promotions = Promotion::all();
        return view('adminPharmacy.a_promotion', ['promotions' => $promotions]);
    }
    



    public function indexsaleAd()
    {
        return view('adminPharmacy.a_sale');
    }

    public function indexgraphAd()
    {
        return view('adminPharmacy.a_graph');
    }

    public function indexstockAd()
    {
        return view('adminPharmacy.a_stock');
    }

    



    public function indexreportAd()
    {
        return view('adminPharmacy.a_report');
    }

   

    // public function indexaddemployAd()
    // {
    //     return view('adminPharmacy.a_addemploy');
    // }

    

    public function adminAd(){
        $users = User::all();
        return view('adminPharmacy.a_admin', ['users' => $users]);
    }



    // public function addAdmin(Request $request){
    //     $this->validate($request, [
    //         'code_admin' => 'required',
    //         'name' => 'required',
    //         'email' => 'required',
    //          'password' => 'required|string|min:6|confirmed',
    //          'birth_admin' => 'required',
    //          'age_admin' => 'required',
    //          'sex_admin' => 'required',
    //          'tel_admin' => 'required'
    //     ]);

    //     $admins = new Admin;
    //     $admins->code_admin = $request->input('code_admin');
    //     $admins->name = $request->input('name');
    //     $admins->email = $request->input('email');
    //     $admins->password  = Hash::make($request->input('password'));
    //     $admins->birth_admin = $request->input('birth_admin');
    //     $admins->age_admin = $request->input('age_admin');
    //     $admins->sex_admin = $request->input('sex_admin');
    //     $admins->tel_admin = $request->input('tel_admin');
    //     $admins->save();
    //     return redirect('/adminAd')->with('info', 'Admin Saved Successfully!');

    // }

    // public function updateAdmin($id){
    //     $admins = Admin::find($id);

    //     return view('adminPharmacy.a_updateadmin', ['admins' => $admins]);
    // }

    // public function editAdmin(Request $request, $id){
    //     $this->validate($request, [
    //         'code_admin' => 'required',
    //         'name' => 'required',
    //         'email' => 'required',
    //          // 'password' => 'required|string|min:6|confirmed',
    //          'birth_admin' => 'required',
    //          'age_admin' => 'required',
    //          'sex_admin' => 'required',
    //          'tel_admin' => 'required'
    //     ]);
    //     $data = array(
    //     'code_admin' => $request->input('code_admin'),
    //     'name' => $request->input('name'),
    //     'email' => $request->input('email'),
    //     'password'  => Hash::make($request->input('password')),
    //     'birth_admin' => $request->input('birth_admin'),
    //     'age_admin' => $request->input('age_admin'),
    //     'sex_admin' => $request->input('sex_admin'),
    //     'tel_admin' => $request->input('tel_admin'),
    //     );
    //     Admin::where('id', $id)
    //     ->update($data);
    //     return redirect('/adminAd')->with('info', 'Admin Update Successfully!');
    // }

    // public function showAdmin($id){
    //     $admins = Admin::find($id);

    //     return view('adminPharmacy.a_showadmin', ['admins' => $admins]);

    // }

    // public function deleteAdmin($id){
    //     Admin::where('id', $id)
    //     ->delete();
    //     return redirect('/adminAd')->with('info', 'Admin Deleted Successfully!');
    // }

    // //

    public function employAd(){
        $users = User::all();
        return view('adminPharmacy.a_employ', ['users' => $users]);
    }




    // public function addEmploy(Request $request){
    //     $this->validate($request, [
    //         'code_employ' => 'required',
    //         'name' => 'required',
    //         'email' => 'required',
    //          'password' => 'required|string|min:6|confirmed',
    //          'birth_employ' => 'required',
    //          'age_employ' => 'required',
    //          'sex_employ' => 'required',
    //          'tel_employ' => 'required'
    //     ]);

    //     $employees = new Employee;
    //     $employees->code_employ = $request->input('code_employ');
    //     $employees->name = $request->input('name');
    //     $employees->email = $request->input('email');
    //     $employees->password  = Hash::make($request->input('password'));
    //     $employees->birth_employ = $request->input('birth_employ');
    //     $employees->age_employ = $request->input('age_employ');
    //     $employees->sex_employ = $request->input('sex_employ');
    //     $employees->tel_employ = $request->input('tel_employ');
    //     $employees->save();
    //     return redirect('/employAd')->with('info', 'Employee Saved Successfully!');

    // }

    // public function updateEmploy($id){
    //     $employees = Employee::find($id);

    //     return view('adminPharmacy.a_updateemploy', ['employees' => $employees]);
    // }

    // public function editEmploy(Request $request, $id){
    //     $this->validate($request, [
    //         'code_employ' => 'required',
    //         'name' => 'required',
    //         'email' => 'required',
    //          // 'password' => 'required|string|min:6|confirmed',
    //          'birth_employ' => 'required',
    //          'age_employ' => 'required',
    //          'sex_employ' => 'required',
    //          'tel_employ' => 'required'
    //     ]);
    //     $data = array(
    //     'code_employ' => $request->input('code_employ'),
    //     'name' => $request->input('name'),
    //     'email' => $request->input('email'),
    //     'password'  => Hash::make($request->input('password')),
    //     'birth_employ' => $request->input('birth_employ'),
    //     'age_employ' => $request->input('age_employ'),
    //     'sex_employ' => $request->input('sex_employ'),
    //     'tel_employ' => $request->input('tel_employ'),
    //     );
    //     Employee::where('id', $id)
    //     ->update($data);
    //     return redirect('/employAd')->with('info', 'Employee Update Successfully!');
    // }

    // public function showEmploy($id){
    //     $employees = Employee::find($id);

    //     return view('adminPharmacy.a_showemploy', ['employees' => $employees]);

    // }

    // public function deleteEmploy($id){
    //     Employee::where('id', $id)
    //     ->delete();
    //     return redirect('/employAd')->with('info', 'Employee Deleted Successfully!');
    // }

    //user
    public function userAd(){
        $users = User::all();
        return view('adminPharmacy.a_user', ['users' => $users]);
    }



    public function addUser(Request $request){
        $this->validate($request, [
            'code_user' => 'required',
            'name' => 'required',
            'surname' => 'required',
            'role' => 'required',
            'email' => 'required',
            'password' => 'required|string|min:6|confirmed',
            'birth' => 'required',
            'age' => 'required',
            'sex' => 'required',
            'tel' => 'required',
            'disease' => 'required',
            'drug' => 'required'
            // 'size_img' => 'required',
             // 'type_img' => 'required'
        ]);

        $users = new User;
        $users->code_user = $request->input('code_user');
        $users->name = $request->input('name');
        $users->surname = $request->input('surname');
        $users->role = $request->input('role');
        $users->email = $request->input('email');
        $users->password  = Hash::make($request->input('password'));
        $users->birth = $request->input('birth');
        $users->age = $request->input('age');
        $users->sex = $request->input('sex');
        $users->tel = $request->input('tel');
        $users->disease = $request->input('disease');
        $users->drug = $request->input('drug');
        $users->size_img = $request->input('size_img');
        $users->type_img = $request->input('type_img');
        if(Input::hasFile('image')){
            $user=Input::file('image');
            $user->move(public_path(). '/frontend/images/', $user->getClientOriginalName());

            $users->name_img = $user->getClientOriginalName();
            $users->size_img = $user->getClientsize();
            $users->type_img = $user->getClientMimeType();
        }

        $users->save();
            return redirect('/userAd')->with('info', 'User Saved Successfully!');
    }

    public function updateUser($id){
        $users = User::find($id);

        return view('adminPharmacy.a_updateuser', ['users' => $users]);
    }

    public function editUser(Request $request, $id){
        $this->validate($request, [
            'code_user' => 'required',
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required',
            // 'password' => 'required|string|min:6|confirmed',
            'birth' => 'required',
            'age' => 'required',
            'sex' => 'required',
            'tel' => 'required',
            'disease' => 'required',
            'drug' => 'required'
        ]);
        $data = array(
        'code_user' => $request->input('code_user'),
        'name' => $request->input('name'),
        'surname' => $request->input('surname'),
        'name_img' => $request->input('name_img'),
        'email' => $request->input('email'),
        'password'  => Hash::make($request->input('password')),
        'birth' => $request->input('birth'),
        'age' => $request->input('age'),
        'sex' => $request->input('sex'),
        'tel' => $request->input('tel'),
        'disease' => $request->input('disease'),
        'drug' => $request->input('drug'),
        'size_img' => $request->input('size_imguser'),
        'type_img' => $request->input('type_imguser'),


        );

        User::where('id', $id)->update($data);
        return redirect('/userAd')->with('info', 'User Update Successfully!');
    }

    public function showUser($id){
        $users = User::find($id);

        return view('adminPharmacy.a_showuser', ['users' => $users]);

    }

    public function deleteUser($id){
        User::where('id', $id)
        ->delete();
        return redirect('/userAd')->with('info', 'User Deleted Successfully!');
    }

    public function addpromotion(Request $request){
        $this->validate($request, [
            'description_pro' => 'required',
        ]);

        $promotions = new Promotion;
        $promotions->description_pro = $request->input('description_pro');
        $promotions->size_imgpromotion = $request->input('size_imgpromotion');
        $promotions->type_imgpromotion = $request->input('type_imgprommotion');
        if(Input::hasFile('image')){
            $promotion=Input::file('image');
            $promotion->move(public_path(). '/frontend/images/', $promotion->getClientOriginalName());

            $promotions->name_imgpromotion = $promotion->getClientOriginalName();
            $promotions->size_imgpromotion = $promotion->getClientsize();
            $promotions->type_imgpromotion = $promotion->getClientMimeType();
        }
        $promotions->save();
        return redirect('/promotionAd')->with('info', 'Promotion Saved Successfully!');

    }

 
    public function deletepromotion($id){
        Promotion::where('id', $id)
        ->delete();
        return redirect('/promotionAd')->with('info', 'Promotion Deleted Successfully!');
    }
}
