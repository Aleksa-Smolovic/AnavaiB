<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use Illuminate\Http\Request;
use App\Http\Requests\UserStoreRequest;
use App\UserDetails;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UserDetailsRequest;
use App\Http\Requests\AppUserStoreRequest;
use Illuminate\Support\Facades\Hash;
use Mail;

class UsersController extends Controller
{

	public function index() {
		$users = User::orderBy('id', 'DESC')->get();
		$roles = Role::orderBy('name', 'ASC')->get();
		return view('admin.users.index', compact('users', 'roles'));
	}

	public function getOne($id) {
		$user = User::find($id);
		return $user ? $user : null;
	}

	public function store(UserStoreRequest $request) {
		$user = User::create($request->validated());
		return response()->json(['success' => 'success'], 200);
	}

	public function edit(UserStoreRequest $request) {
		$data = $request->validated();
		$user = User::find($data['id']);
		$user->fill($data);
		$user->save();
		return response()->json(['success' => 'success'], 200);
	}

	public function destroy(User $user) {
		$user->delete();
		return back()->with("success", "Korisnik uspješno obrisan!");
	}

    public function deleted() {
        return view('admin.users.deleted')->withUsers(User::onlyTrashed()->get());
	}

	public function restore($id) {
		User::where('id', $id)->restore();
		return back()->with('succes', 'User restored successfully.');
	}

	public function updateUserDetails(UserDetailsRequest $request){
		$data = $request->validated();

		$userRequest = UserDetails::find($data['id']);
		$userRequest->first_name = $data['first_name'];
		$userRequest->last_name = $data['last_name'];
		if($request->has('image'))
			$userRequest->image = $data['image'];
		$userRequest->save();

		$user = User::find(Auth::user()->id);
		$user->email = $data['email'];
		if($request->has('password'))
			$user->password = Hash::make($data['password'], ['rounds' => 12]);
		
		$user->save();
		return response()->json(['success' => 'success'], 200);
	}

	public function storeAppUser(AppUserStoreRequest $request){
		$data = $request->validated();

		$role = Role::where('name', 'user')->first();

		$activationCode = hash_hmac('sha256', str_random(40), config('app.key'));
		$user = new User();
		$user->email = $data['email'];
		$user->password = Hash::make($data['password'], ['rounds' => 12]);
		$user->role_id = $role->id;
		$user->activation_code = $activationCode;
		$user->full_name = $data['first_name'] . ' ' . $data['last_name'];
		$user->save();

		$userDetails = new UserDetails();
		$userDetails->user_id = $user->id;
		$userDetails->first_name = $data['first_name'];
		$userDetails->last_name = $data['last_name'];
		$userDetails->image = '/images/logo1.png';
		$userDetails->save();

		$emailData = array(
			'email' => $data['email'],
            'activation_code' => $activationCode
        );
		
		Mail::send('front.email.activation', $emailData, function ($message) use ($emailData) {
			$message->to($emailData['email']);
			$message->subject('Anavai account activation');
			$message->from(env("MAIL_USERNAME", "aleksa404s@gmail.com.me"), 'Anavai');
		});
	}

}
