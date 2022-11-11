<div>
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="inputFirstName" type="text" wire:model="name" placeholder="Enter your first name" />
                                    <label for="inputFirstName">Fullname</label>
                                    @error('name') <span style="color: red" >{{ $message }}</span> @enderror
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">

                                    <label for="inputEmail">Active Email</label>
                                    <input class="form-control" id="inputEmail" type="email" wire:model="email" placeholder="name@example.com" />



                            @error('email') <span style="color: red" >{{ $message }}</span> @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="phoneNumber">Phone Number</label>
                                <input type="tel" name="phoneNumber" id="phoneNumber" class="form-control" placeholder="080XXXXXXX" wire:model="phoneNumber">
                                @error('phoneNumber') <span style="color: red" >{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="form-floating mb-3">

                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="inputPassword" type="password" wire:model="password" placeholder="Create a password" />
                                    <label for="inputPassword">Password</label>
                                    @error('password') <span style="color: red" >{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="inputPasswordConfirm" wire:model="password_confirmation" type="password" placeholder="Confirm password" />
                                    <label for="inputPasswordConfirm">Confirm Password</label>
                                    @error('password_confirmation') <span style="color: red" >{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>

                        <div class="mt-4 mb-0">
                            <div class="d-grid"><button class="btn btn-primary btn-block" wire:click="register">Create Account</button></div>
                        </div>

                </div>
                <div class="card-footer text-center py-3">
                    <div class="small"><a href="{{route('login')}}">Have an account? Go to login</a></div>
                </div>
            </div>
        </div>
    </div> {{-- If your happiness depends on money, you will never be happy with yourself. --}}
</div>
