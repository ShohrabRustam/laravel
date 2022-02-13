<div class="form-group">
            <label> {{$label}} :</label>
            <input type={{$type}} class="form-control" name={{$name}} class = "form-control" >
            <span class="text-danger">   
            @error('phoneNumber')  
                {{ $message}}
                @enderror 
              
                </span>
        </div>