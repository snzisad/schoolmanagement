<select class="custom-select" id="catagory-selection" name="catagory" required value="{{old('catagory')}}">
    <option value="" selected disabled>Select fee catagory</option>
    @foreach($catagories as $catagory)
        <option value="{{$catagory->catagory}}">{{$catagory->catagory}}</option>
    @endforeach
    <option value="add-catagory">Add new catagory</option>
</select>
