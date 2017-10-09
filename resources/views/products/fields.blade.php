<div class="col-md-7 b-r">

    <div class="form-group">
        <label class="control-label">{{ trans( 'labels.name' ) }}</label>

        <input type="text" class="form-control" name="name"
               value="{{ old('name', isset($product) ? $product->name : '') }}">
    </div>

    <div class="form-group">
        <label class="control-label">{{ trans( 'labels.description' ) }}</label>

        <textarea name="description" class="form-control" cols="30"
                  rows="10">{{ old('description', isset($product) ? $product->description : '') }}</textarea>
    </div>
    <div class="hr-line-dashed"></div>

    <div class="form-group">
        <label class="control-label">{{ trans( 'labels.images' ) }}</label>
        <div class="btn-group">
            <label title="Upload image file" for="inputImage" class="btn btn-primary">
                <input type="file" accept="image/*" name="images" id="inputImage"
                       class="hide" multiple>
                {{ trans( 'labels.upload_image' ) }}
            </label>
        </div>
    </div>
    <div class="hr-line-dashed"></div>

    <div class="form-group">
        <label class="control-label">{{ trans( 'labels.price' ) }}</label>

        <input type="text" class="form-control" name="price"
               value="{{ old('price', isset($product) ? $product->product_variants->first()->price : '') }}">
    </div>
    <div class="hr-line-dashed"></div>

    <div class="form-group">
        <label class="control-label">{{ trans( 'labels.sku' ) }}</label>

        <input type="text" class="form-control" name="sku"
               value="{{ old('sku', isset($product) ? $product->product_variants->first()->sku : '') }}">
    </div>
    <div class="form-group">
        <label class="control-label">{{ trans( 'labels.quantity' ) }}</label>

        <input type="number" class="form-control" name="quantity"
               value="{{ old('quantity', isset($product) ? $product->product_variants->first()->quantity : '') }}">
    </div>
    <div class="form-group">
        <label class="control-label">{{ trans( 'labels.weight' ) }}</label>

        <input type="number" class="form-control" name="weight"
               value="{{ old('weight', isset($product) ? $product->product_variants->first()->weight : '') }}">
    </div>
    <div class="hr-line-dashed"></div>

</div>
<div class="col-md-5">
    <div class="form-group">
        <label class="control-label">{{ trans( 'labels.category' ) }}</label>

        {{ Form::select('type_id', [ trans( 'labels.select_type_option' ) ] + $types, old('type_id', isset($product) ? $product->type_id : ''), ['class' => 'form-control m-b', 'style' => 'width: 300px;']) }}

    </div>
</div>