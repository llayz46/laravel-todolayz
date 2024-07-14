<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileAvatarRequest;
use App\Http\Requests\ProfilePasswordRequest;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\Password;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function edit(): View
    {
        return view('profile.edit', [
            'user' => auth()->user(),
        ]);
    }

    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return redirect()->route('profile.edit')->with('success', 'Profile updated successfully');
    }

    public function updateImage(ProfileAvatarRequest $request)
    {
        /** @var UploadedFile $image */
        $image = $request->validated('avatar');

        if ($image->getError()) {
            return back()->with('error', 'Image upload failed');
        }

        if ($request->user()->avatar) {
            Storage::disk('public')->delete($request->user()->avatar);
        }

        $imagePath = $image->store('avatars', 'public');

        $request->user()->update([
            'avatar' => $imagePath,
        ]);

        return back()->with('success', 'Image updated successfully');
    }

    public function updatePassword(ProfilePasswordRequest $request, User $user): RedirectResponse
    {
        $data = $request->validated();

        $request->user()->update([
            'password' => Hash::make($data['new_password']),
        ]);

        return back()->with('success', 'Password updated successfully');
    }
}
