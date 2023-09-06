<?php
use function Livewire\Volt\state;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

state([
    'email' => '',
    'password' => '',
    'remember_me' => true,
]);

$submit = function () {
    $credentials = $this->validate([
        'email' => 'required|email:rfc,dns',
        'password' => 'required|min:6',
        'remember_me' => 'nullable',
    ]);

    if (auth()->attempt(['email' => $this->email, 'password' => $this->password], $this->remember_me)) {
        $user = User::where(['email' => $this->email])->first();
        auth()->login($user, $this->remember_me);
        return redirect()->intended('/dashboard');
    } else {
        return $this->addError('email', trans('auth.failed'));
    }
};

?>

<div>
    <form wire:submit.prevent="submit" class="login-form">
        <div class="form-group">
            <input wire:model="email" type="email" class="form-control rounded" placeholder="email@example.com">
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <div class="form-group">
            <input wire:model="password" type="password" class="form-control rounded" placeholder="Password">
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        <div class="form-group d-md-flex">
            <div class="w-50">
                <label class="checkbox-wrap checkbox-primary">Remember Me
                    <input wire:model='remember_me' type="checkbox" name="remember_me" checked>
                    <span class="checkmark"></span>
                </label>
                <x-input-error :messages="$errors->get('remember_me')" class="mt-2" />
            </div>
            <div class="w-50 text-md-right">
                <a href="#">Forgot Password</a>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary submit p-3 px-5" style="border-radius: 50px">
                Login</button>
        </div>
    </form>
</div>
