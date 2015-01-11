<div class="step-title">Liên hệ</div>
<div class="row">
  <div class="col-xs-6">
    <div class='form-group'>
      {{ Form::label('contact_name', 'Tên liên hệ *') }}
      {{ Form::text('contact_name', null, array(
            'class' => 'form-control',
            'id' => 'contact_name',
            'required' => true,
            'placeholder' => ''))}}
    </div>
    <div class='form-group'>
      {{ Form::label('contact_tel', 'Điện thoại bàn') }}
      {{ Form::text('contact_tel', null, array(
            'class' => 'form-control',
            'id' => 'contact_tel',
            'placeholder' => ''))}}
    </div>
  </div>
  <div class="col-xs-6">
    <div class='form-group'>
      {{ Form::label('contact_mobile', 'Di động *', array('class' => 'col-xs-4 control-label')) }}
      {{ Form::text('contact_mobile', null, array(
            'class' => 'form-control',
            'id' => 'contact_mobile',
            'required' => true,
            'placeholder' => ''))}}
    </div>
    <div class='form-group'>
      {{ Form::label('contact_email', 'Email') }}
      {{ Form::text('contact_email', null, array(
            'class' => 'form-control',
            'id' => 'contact_email',
            'placeholder' => ''))}}
    </div>
  </div>
</div>
