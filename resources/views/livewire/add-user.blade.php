
<div class="container pt-4">

   
    <div class="card col-md-8 ">
        @if ($success_message)
        <div class="pt-4 alert alert-success alert-dismissible fade show" role="alert">
          <strong>Great!</strong> User registered successffuly
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif
        <div class="card-body register-card-body">
            <p class="login-box-msg">Register a new membership</p>
    
            <form>
                @csrf
    
                <div class="input-group mb-3">
                    <input type="text"
                           wire:model.defer="first_name"
                           class="form-control @error('first_name') is-invalid @enderror"
                           value="{{ old('first_name') }}"
                           placeholder="First name">
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-user"></span></div>
                    </div>
                    @error('first_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
    
                <div class="input-group mb-3">
                    <input type="text"
                            wire:model.defer="last_name"
                           class="form-control @error('last_name') is-invalid @enderror"
                           value="{{ old('name') }}"
                           placeholder="Last name">
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-user"></span></div>
                    </div>
                    @error('last_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
    
                <div class="input-group mb-3">
                    <input type="email"
                            wire:model.defer="email"
                           value="{{ old('email') }}"
                           class="form-control @error('email') is-invalid @enderror"
                           placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-envelope"></span></div>
                    </div>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
    
                <div class="input-group mb-3">
                    <input type="text"
                            wire:model.defer="salary"
                           value="{{ old('email') }}"
                           class="form-control @error('salary') is-invalid @enderror"
                           placeholder="Salary">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-money">
                        </span></div>
                    </div>
                    @error('salary')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
    
                <div class="row">
                    <div class="col-8">
                     
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="btn" 
                                class="btn btn-primary btn-block"
                                wire:click.prevent='addUser'>
                                Register
                        </button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
    
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
    
    
</div>