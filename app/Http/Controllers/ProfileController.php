<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;
use App\Models\Pemesanan;


class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */

    //  public function index()
    //  {
    //      // Ambil user yang sedang login
    // $user = auth()->user(); // atau $request->user() jika dalam konteks request

    // // Kembalikan tampilan dengan data pengguna
    // return view('home.profil', compact('user'));
    //     //  return view('home.profil');
    //  }

     
        // Controller
    public function index()
    {
        $user = auth()->user();
        $pemesanans = Pemesanan::where('id_customer', $user->id)->get();
        
        // Pastikan path view sesuai dengan struktur folder
        return view('home.profil', [
            'user' => $user,
            'pemesanans' => $pemesanans
        ]);
    }

    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }



    /**
     * Update the user's profile information.
     */
    // public function update(ProfileUpdateRequest $request): RedirectResponse
    // {
    //     $request->user()->fill($request->validated());

    //     if ($request->user()->isDirty('email')) {
    //         $request->user()->email_verified_at = null;
    //     }

    //     $request->user()->save();

    //     return Redirect::route('profile.edit')->with('status', 'profile-updated');
    // }

    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        // Ambil user yang sedang login
        $user = $request->user();

        // Update data user
        $user->fill($request->validated());

        // Jika email diubah, reset waktu verifikasi email
        if ($request->user()->isDirty('email')) {
            $user->email_verified_at = null;
        }

        // Simpan perubahan
        $user->save();

        // Redirect kembali dengan pesan sukses
        return Redirect::route('home.index')->with('status', 'Profil berhasil diperbarui!');
    }

    public function updateProfile(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'address' => 'required|string|max:255',
        ]);

        // Ambil data pengguna yang sedang login
        $user = Auth::user();
        
        // Update data pengguna
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->no_handphone = $request->input('phone');
        $user->alamat = $request->input('address');
        $user->save();

        return redirect()->route('home.index')->with('status', 'Profil berhasil diperbarui!');
    }

    // public function showHistori()
    // {
    //     $pemesanans = Pemesanan::where('id_customer', Auth::id())->get();
    //     return view('home.header', [
    //         'activeTab' => 'histori', // Menentukan bagian mana yang aktif
    //         'pemesanans' => $pemesanans
    //     ]);
    // }


    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
     

    public function showProfile()
    {
        // Ambil data pemesanan untuk user yang sedang login
        $pemesanans = Pemesanan::where('user_id', auth()->id())->get();

        // Log data pemesanan untuk memastikan data ada
        Log::info('Data Pemesanan:', ['pemesanans' => $pemesanans]);

        return view('profile', compact('pemesanans', 'historis'));
    }


}
