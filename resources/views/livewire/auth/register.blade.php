<?php
use function Livewire\Volt\state;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use App\Models\User;

state([
    'first_name' => '',
    'last_name' => '',
    'phone_number' => '',
    'email' => '',
    'password' => '',
    'password_confirmation' => '',
]);

$submit = function () {
    $this->validate([
        'first_name' => 'required|string',
        'last_name' => 'required|string',
        'phone_number' => 'required',
        'email' => ['required', 'email:rfc,dns', Rule::unique('users', 'email')],
        'password' => 'required|confirmed|min:6',
    ]);

    $user = User::create([
        'first_name' => $this->first_name,
        'last_name' => $this->last_name,
        'phone_number' => $this->phone_number,
        'email' => $this->email,
        'password' => Hash::make($this->password),
    ]);

    // Authenticate the user after registration (optional).
    auth()->login($user);

    // Redirect the user to the dashboard or another page.
    return redirect()->to('/dashboard');
};

?>

<div>
    <form wire:submit.prevent="submit" class="login-form">
        <div class="form-group">
            <input wire:model="first_name" type="text" class="form-control rounded" placeholder="Your first name">
            <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
        </div>
        <div class="form-group">
            <input wire:model="last_name" type="text" class="form-control rounded" placeholder="Your last name">
            <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
        </div>
        <div class="form-group">
            <input wire:model="email" type="email" class="form-control rounded" placeholder="email@example.com">
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <div class="form-group">
            <input wire:model="phone_number" type="number" class="form-control rounded" placeholder="">
            <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
        </div>
        <div class="form-group">
            <input wire:model="password" type="password" class="form-control rounded" placeholder="Password">
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        <div class="form-group">
            <input wire:model="password_confirmation" type="password" class="form-control rounded"
                placeholder="Password">
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary submit p-3 px-5" style="border-radius: 50px">
                Register</button>
        </div>
    </form>
</div>
