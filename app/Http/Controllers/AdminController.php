<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    public function AdminDashboard()
    {
         // Fetch the authenticated user's profile data
         $profileData = Auth::user();

         // Pass the profile data to the view
         return view('admin.index', compact('profileData'));

    } // End Method

    public function AdminLogout(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    } // End method


    public function AdminLogin()
    {
       $profileData = Auth::user();

    /*Debugging statement
    if (!$profileData)
    {
        dd('No user is logged in.');
    }
    */
    return view('admin.index',compact('profileData'));

    }// End Method

    public function AdminProfile()
    {  //dd($profileData)
       $id = Auth::user()->id;
       $profileData = User::find($id);
       return view('admin.admin_profile_view',compact('profileData'));
    }//End Method
    public function AdminProfileStore(Request $request)
    {
        $id = Auth::user()->id;
       // dd($id);
        $data = user::find($id);
        $data->username = $request->username;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;

        if ($request->file('photo')){
          $file= $request->file('photo');
          @unlink(public_path('upload/admin_images/'.$data->photo));
          $filename=date('YmdHi').$file->getClientOriginalName(); // 23232.dantechdevs.png
          $file->move(public_path('upload/admin_images'),$filename);
          $data['photo'] = $filename;
        }
          $data->save();

          $notification = array(
            'message' => 'Admin Profile updated successfully',
            'alert type' => 'success'  );
            return redirect() ->back()->with($notification);
        } //End Method

        public function changePassword(Request $request)
{
    // Validate the request
    $request->validate([
        'current_password' => 'required',
        'new_password' => 'required|min:6|confirmed',
    ]);

    $user = Auth::user();

    // Check if the current password is correct
    if (!Hash::check($request->current_password, $user->password)) {
        return back()->withErrors(['current_password' => 'Current password is incorrect.']);
    }

    // Update the password
    $user->password = Hash::make($request->new_password);
    $user->save();

    return redirect()->route('admin.dashboard')->with('success', 'Password changed successfully.');
}
 // End Method

}
