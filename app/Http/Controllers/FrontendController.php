<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Profile;
use DB;
use Storage;

class FrontendController extends Controller
{
    public function index()
    {
        $post = Post::with('profile.user')->latest()->get();
        return view('welcome', compact('post'));
        //return $post;
    }

    public function profile()
    {
        $profile = Profile::with('post')->find(auth()->user()->profile->id);
        return view('profile', compact('profile'));
    }

    public function settings()
    {
        $profile = Profile::with('user')->find(auth()->user()->profile->id);
        return view('settings', compact('profile'));
    }

    public function settings_update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'username' => 'required',
        ]);

        $profile = Profile::with('user')->find(auth()->user()->profile->id);

        if (empty($request->password)) {
            DB::beginTransaction();

            try{

                $profile->user->update([
                    'name'        =>  $request->name,
                    'email'         =>  $request->email,
                    'username'         =>  $request->username,
                ]);

                if (empty($request->file('photo_cover'))) {

                    if (empty($request->file('photo_profile'))) {
                        $profile->update([
                        ]);
                    } else {
                        Storage::delete($profile->photo_profile);
                        $profile->update([
                            'photo_profile' => $request->file('photo_profile')->store('photo_profile'),
                        ]);
                    }

                } else {
                    if (empty($request->file('photo_profile'))) {
                        Storage::delete($profile->photo_cover);
                        $profile->update([
                            'photo_cover' => $request->file('photo_cover')->store('photo_cover'),
                        ]);
                    } else {
                        Storage::delete($profile->photo_profile);
                        Storage::delete($profile->photo_cover);
                        $profile->update([
                            'photo_profile' => $request->file('photo_profile')->store('photo_profile'),
                            'photo_cover' => $request->file('photo_cover')->store('photo_cover'),
                        ]);
                    }
                }

                DB::commit();


                return redirect()->route('profile');

            } catch(\Exception $e) {
                DB::rollback();
                return "gagal";
            }
        } else {
            DB::beginTransaction();

            try{

                $profile->user->update([
                    'name'        =>  $request->name,
                    'email'         =>  $request->email,
                    'username'         =>  $request->username,
                    'password'         =>  Hash::make($request->password),
                ]);

                if (empty($request->file('photo_cover'))) {

                    if (empty($request->file('photo_profile'))) {
                        $profile->update([
                        ]);
                    } else {
                        Storage::delete($profile->photo_profile);
                        $profile->update([
                            'photo_profile' => $request->file('photo_profile')->store('photo_profile'),
                        ]);
                    }

                } else {
                    if (empty($request->file('photo_profile'))) {
                        Storage::delete($profile->photo_cover);
                        $profile->update([
                            'photo_cover' => $request->file('photo_cover')->store('photo_cover'),
                        ]);
                    } else {
                        Storage::delete($profile->photo_profile);
                        Storage::delete($profile->photo_cover);
                        $profile->update([
                            'photo_profile' => $request->file('photo_profile')->store('photo_profile'),
                            'photo_cover' => $request->file('photo_cover')->store('photo_cover'),
                        ]);
                    }
                }

                DB::commit();


                return redirect()->route('profile');

            } catch(\Exception $e) {
                DB::rollback();
                return "gagal";
            }
        }
    }
}
