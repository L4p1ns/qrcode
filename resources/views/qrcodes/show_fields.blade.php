<div class="col-md-6">

    <!-- Product Name Field -->
    <div class="form-group">
        <h3>
            {!! $qrcode->product_name !!}
            <br /> @if(isset($qrcode->company_name))
            <small>By {!! $qrcode->company_name !!}</small> @endif
        </h3>
    </div>

    <!-- User Id Field -->
    <div class="form-group">
        {!! Form::label('user_id', 'User Name:') !!}
        <p>{!! $qrcode->user_id !!}</p>
    </div>

    <!-- Website Field -->
    <div class="form-group">
        {!! Form::label('website', 'Website:') !!}
        <p>{!! $qrcode->website !!}</p>
    </div>

    <!-- Product Url Field -->
    <div class="form-group">
        {!! Form::label('product_url', 'Product Url:') !!}
        <p>{!! $qrcode->product_url !!}</p>
    </div>

    <!-- Callback Url Field -->
    <div class="form-group">
        {!! Form::label('callback_url', 'Callback Url:') !!}
        <p>{!! $qrcode->callback_url !!}</p>
    </div>

    <!-- Amount Field -->
    <div class="form-group">
        {!! Form::label('amount', 'Amount:') !!}
        <p>{!! $qrcode->amount !!}</p>
    </div>

    <!-- Status Field -->
    <div class="form-group">
        {!! Form::label('status', 'Status:') !!}
        <p>{!! $qrcode->status !!}</p>
    </div>

    <!-- Created At Field -->
    <div class="form-group">
        {!! Form::label('created_at', 'Created At:') !!}
        <p>{!! $qrcode->created_at !!}</p>
    </div>

    <!-- Updated At Field -->
    <div class="form-group">
        {!! Form::label('updated_at', 'Updated At:') !!}
        <p>{!! $qrcode->updated_at !!}</p>
    </div>
</div>
<div class="col-md-5 pull-right">
    <!-- Qrcode Path Field -->
    <div class="form-group">
        {!! Form::label('qrcode_path', 'Scan Qrcode and Pay with Our App:') !!}
        <p>
            <img src="{{asset($qrcode->qrcode_path)}}">
        </p>
    </div>
</div>