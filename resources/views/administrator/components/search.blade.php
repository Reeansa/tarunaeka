<form action="{{ $action }}" method="get">
    <div class="input-group"> <span class="input-group-text" id="basic-addon1"><i class="bi bi-search"></i></span>
        <input type="text" class="form-control" placeholder="{{ $slot }}" aria-label="{{ $slot }}" aria-describedby="basic-addon1" name="search" id="search" value="{{ request('search') }}">
    </div>
</form>
