<div>
    <div class="container" style="margin: 30px">
        <div class="row">
            <div class="col-md-5">
                <div class="form-group">
                    <label for="email">email</label>
                    <input  wire:model="data.email" type="email" class="form-control" id="email" aria-describedby="emailHelp" >
                    @error('date.email')
                    <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">password</label>
                    <input  wire:model="data.password" type="password" class="form-control" id="password" aria-describedby="emailHelp" >
                    @error('date.password')
                    <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>

                <button style="margin: 20px" wire:click="login" type="button" class="btn btn-info"> login </button>
            </div>
        </div>
    </div>
</div>
