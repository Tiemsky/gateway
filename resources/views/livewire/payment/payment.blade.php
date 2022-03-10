<div class="container d-flex">
    <div class="container-fluid">
        <div class="container content-justify-center">
        

           

            <div class="col-md-8 pt-4">

              @if ($success_message)
              <div class="pt-4 alert alert-success alert-dismissible fade show" role="alert">
                <strong>Great!</strong> Information submitted successfully. we are proceeding to the payment
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              @endif

              @if ($status)
              <div class="pt-4 alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              @endif

            
                
                  @if ($next == false)

                  <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" 
                          class="form-control @error('email') is-invalid @enderror" 
                          id="email" 
                          placeholder="Email Address"
                          wire:model='email' autocomplete="off">
                    <small>Make sure to use your current email address for futher request</small>
                    @error('email')
                    <span class="error invalid-feedback">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="form-group">

                    <label>Select your payment method down below </label>
                    <select wire:model='payment_method' class="custom-select @error('phone') is-invalid @enderror">
                        <option value="">select method</option>
                        <option value="cash">Cash</option>
                        <option value="orange">Orange Money</option>
                        <option value="wave">Wave </option>
                      </select>

                      @error('payment_method')
                      <span class="error invalid-feedback">{{ $message }}</span>
                      @enderror
                    
                  </div>
                      
                  @endif

                  @if ($pay)
                  <div class="pt-4 alert alert-warning fade show" role="alert">
                    <strong>Warning!</strong>Be aware that cash payment method will be done within two (02) working days.
                  </div>
                  @endif
               
           

                    <div>
                        <button type="button" 
                                class="btn btn-secondary"
                                wire:click.prevent='proceedToNext'>{{ $next == false? 'Next':'Back' }}  </button>
                    </div>


                    @if ($next)
                      <div class="pt-4">
                        <label for="Phone">Phone number</label>
                        <input type="text" 
                              class="form-control @error('phone') is-invalid @enderror" 
                          
                              placeholder="Your Phone Number"
                              wire:model.defer='phone'>
                              <small class="text-orange"><strong> <i> You gonna get paid through this phone number make sure to be correct</i></strong> </small>

                              @error('phone')
                              <span class="error invalid-feedback">{{ $message }}</span>
                              @enderror
                      </div>

                      <div class="pt-4">
                          <label for="amount">Verify Amount</label>
                          <input type="text" disabled class="form-control" wire:model.defer='salary'>
                      </div>
                  
                      <div class="pt-2">
                          <a class="btn btn-primary" 
                            type="button"
                            wire:click.prevent='submit'>Submit</a>
                      </div>
                    @endif
                  
            </div>
           
          
        </div>
        
    </div>
</div>