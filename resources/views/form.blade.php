
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<input name="_token" type="hidden" value="{!! csrf_token() !!}" />
<div class="form-group">
    <label for="street">Street:</label>
    <input class="form-control" name="street" type="text" value="">
</div>
<div class="form-group">
    <label for="city">City</label>
    <input class="form-control" name="city" type="text" value="">
</div>
<div class="form-group">
    <label for="zip">Zip Code:</label>
    <input class="form-control" name="zip" type="number" value="">
</div>
<div class="form-group">
    <label for="state">State:</label>
    <input class="form-control" name="state" type="text" value="">
</div>
<div class="form-group">
    <label for="street">Country:</label>
    <select class="form-control" name="country" value="">
        @foreach(App\Http\Utilities\country::all() as $name => $code)
            <option value="{{ $code }}">{{ $name }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <input class=" btn btn-primary" type="submit" value="Add Flyer">
</div>