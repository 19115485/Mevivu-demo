<div class="wrap-ckfinder-multiple">
    <label class="control-label">{{ $label }}:</label>
    <input type="text" {{ $attributes->class(['d-none']) }} name="{{ $name }}" value="{{ $marcoValue($value) }}">
    <div id="galleryPreview{{ $name }}" class="row">
        @if($value)
            @foreach($value as $item)
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 mt-3">
                <span class="delete-image-ckfinder" data-url="{{ $item }}"
                    data-route="0">
                    <i class="fas fa-times pointer"></i>
                </span>
                <img src="{{ asset($item) }}" width="100%">
            </div>
            @endforeach
        @endif
    </div>
    <button type="button" class="btn btn-primary add-image-ckfinder mt-3"
        data-preview="#galleryPreview{{ $name }}" data-input="input[name='{{ $name }}']"
        data-type="MULTIPLE">{{ $btntext }}</button>
</div>