@if (count($model->images) > 0)
<div class="col-md-6">
    <div class="config">
        <img style="max-width: 490px;" src="{{ route('image.file', ['disk' => $disk , 'filename' => $model->images[0]['image_path'] ] ) }}">
    </div>
</div>
@endif