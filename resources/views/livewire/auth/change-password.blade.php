<div class="container pt-4">
    <div class="card col-md-8">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Change Password</p>
    
            <form>
                
                <div class="input-group mb-3">
                    <input type="password"
                           name="password"
                           placeholder="Current Password"
                           class="form-control @error('current_password') is-invalid @enderror"
                           wire:model.defer='current_password'>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    @error('current_password')
                    <span class="error invalid-feedback">{{ $message }}</span>
                    @enderror
    
                </div>

                <div class="input-group mb-3">
                    <input type="password"
                           name="password"
                           placeholder="New Password"
                           class="form-control @error('new_password') is-invalid @enderror"
                           wire:model.defer='new_password'>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    @error('new_password')
                    <span class="error invalid-feedback">{{ $message }}</span>
                    @enderror
    
                </div>
    
                <div class="input-group mb-3">
                    <input type="password"
                           name="password"
                           placeholder="Password Confirmation"
                           class="form-control @error('password_confirmation') is-invalid @enderror"
                           wire:model.defer='password_confirmation'>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    @error('password_confirmation')
                    <span class="error invalid-feedback">{{ $message }}</span>
                    @enderror
    
                </div>
    
                <div class="row">
                 
    
                    <div class="col-4">
                        <button type="button" 
                                class="btn btn-primary btn-block"
                                wire:click.prevent='changePassword'>submit</button>
                    </div>
    
                </div>
            </form>
    
            
        </div>
        <!-- /.login-card-body -->
    </div>

</div>