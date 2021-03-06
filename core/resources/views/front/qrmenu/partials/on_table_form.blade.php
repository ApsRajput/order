
    <div class="row">
       <div class="col-12">
          <div class="form billing-info">
             <div class="shop-title-box">
                <h3>{{__('Information')}}</h3>
             </div>
             <div class="row">
                <div class="col-md-4">
                   <div class="field-label">{{__('Name')}} *</div>
                   <div class="field-input">
                       @php
                           $bname = '';
                           if(empty(old())) {
                               if (Auth::check()) {
                                   $bname = Auth::user()->billing_fname;
                               }
                           } else {
                               $bname = old('billing_fname');
                           }
                       @endphp
                      <input type="text" name="billing_fname" value="{{$bname}}">
                      @error('billing_fname')
                      <p class="text-danger">{{convertUtf8($message)}}</p>
                      @enderror
                   </div>
                </div>
                <div class="col-md-4">
                   <div class="field-label">{{__('Contact Email')}} *</div>
                   <div class="field-input">
                        @php
                            $bmail = '';
                            if(empty(old())) {
                                if (Auth::check()) {
                                    $bmail = Auth::user()->billing_email;
                                }
                            } else {
                                $bmail = old('billing_email');
                            }
                        @endphp
                      <input type="text" name="billing_email" value="{{$bmail}}">
                      @error('billing_email')
                      <p class="text-danger">{{convertUtf8($message)}}</p>
                      @enderror
                   </div>
                </div>
                <div class="col-md-4">
                   <div class="field-label">{{__('Phone')}} *</div>
                   <div class="field-input">
                        @php
                            $bnumber = '';
                            if(empty(old())) {
                                if (Auth::check()) {
                                    $bnumber = Auth::user()->billing_number;
                                }
                            } else {
                                $bnumber = old('billing_number');
                            }
                        @endphp
                      <input type="text" name="billing_number" value="{{$bnumber}}">
                      @error('billing_number')
                      <p class="text-danger">{{convertUtf8($message)}}</p>
                      @enderror
                   </div>
                </div>
                <div class="col-md-6">
                   <div class="field-label">{{__('Table Number')}} *</div>
                   <div class="field-input">
                      <input type="text" name="table_number" value="{{old('table_number')}}" autocomplete="off">
                      @error('table_number')
                      <p class="text-danger">{{convertUtf8($message)}}</p>
                      @enderror
                   </div>
                </div>
                <div class="col-md-6">
                   <div class="field-label">{{__('Waiter Name')}}</div>
                   <div class="field-input">
                      <input type="text" name="waiter_name" value="{{old('waiter_name')}}" autocomplete="off">
                   </div>
                </div>
             </div>
          </div>
       </div>

    </div>
