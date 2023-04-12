<div>
<div class="mb-3">
            <label class="form-label" for="inputPassword">{{$label}}</label>
            <input type="{{$type}}" name="{{$name}}" class="form-control border border-danger" id="inputName" placeholder="{{$placeholder}}" >
           <span class="text-danger">
            {{$demo}}
                <!-- @error('uname')
                  {{$message}}
                @enderror-->
               </span>
        </div>
</div>